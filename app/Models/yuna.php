<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yuna extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $filltable = ['title', 'content'];
}
