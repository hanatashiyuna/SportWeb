<?php

namespace App\Models;

use App\Traits\HasAuthor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;use App\Traits\HasTags;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thread extends Model implements Viewable
{
    use HasTags;
    use HasAuthor;
    use HasFactory;
    use InteractsWithViews;

    const TABLE = 'threads';

    protected $table = self::TABLE;

    protected $fillable = [
        'title',
        'body',
        'slug',
        'category_id',
        'author_id',
    ];

    protected $with = [
        'tagsRelation',
        'authorRelation',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function excerpt(int $limit = 250): string
    {
        return Str::limit(strip_tags($this->body()), $limit);
    }

    public function replyAbleSubject(): string
    {
        return $this->title();
    }

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function delete()
    {
        $this->removeTags();
        parent::delete();
    }

    public function scopeForTag(Builder $query, string $tag): Builder
    {
        return $query->whereHas('tagsRelation', function ($query) use ($tag) {
            $query->where('tags.slug', $tag);
        });
    }
}
