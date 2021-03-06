<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="{{url('img/YtSport.jpg')}}">
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/> -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin Management</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
    <script src="{{url('js/chart.js')}}"></script>
</head>

<body>
    @section('header-admin')
    <div class="header">
        <header>
            <div class="header__icon">
                <a href="{{ url('/admin') }}">Y.T Sport</a>
            </div>
            <div style="display: flex; justify-content: center; align-items: center; margin-right: 20px;">
                <span>
                    Welcome {{ Auth::user()->name }}
                </span>
            </div>
        </header>
    </div>
    @show
    @section('menu-admin')
    <div class="container">
        <div class="nav">
            <ul>
                <li>
                    <a href="{{ url('/admin') }}">
                        <span class="icon"><img src="{{url('img/YtSport.jpg')}}" alt="photo"></span>
                        <span class="title"><h2>Admin Menu</h2></span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{ url('/admin') }}">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{route('post.index')}}">
                        <span class="icon"><i class="fa-solid fa-newspaper"></i></span>
                        <span class="title">Post</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{ route('post.create') }}">
                        <span class="icon"><i class="fa-solid fa-folder-plus"></i></span>
                        <span class="title">Add New Post</span>
                    </a>
                </li>
                <li class="item">
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-folder-minus"></i></span>
                        <span class="title">Remove Post</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{url('/admin')}}">
                        <span class="icon"><i class="fa-solid fa-folder-gear"></i></span>
                        <span class="title">Repair Post</span>
                    </a>
                </li>
                <li class="item">
                    <a href="{{url('/admin')}}">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="item">
                            <a href="{{ route('login') }}">
                                <span><i class="fas fa-sign-in-alt"></i></span>
                                <span>{{ __('Login') }}</span>
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="item">
                            <a class="link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="item">
                        <div aria-labelledby="navbarDropdown">
                            <a class="" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();
                                        return confirm('B???n c?? ch???c mu???n ????ng xu???t kh??ng?');">
                                <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
                                <span class="title">{{ __('Log out') }}</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        <script>
            // th??m class hovered khi select list nav ??? menu d???c
            const list = document.querySelectorAll('.nav li.item');

            function activeLink() {
                list.forEach((item) =>
                    item.classList.remove('hovered'));
                this.classList.toggle('hovered');
            }
            list.forEach((item) => item.addEventListener('click', activeLink));
        </script>
    </div>
    @show
    <div class="main">
        <div class="topbar">
                <div class="toggle" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></div>
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search post here">
                        <i class="fas fa-search"></i>
                    </label>
                </div>
            </div>
        @yield('content-admin')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script src="{{url('js/chart.js')}}"></script>
    <script type="text/javascript">
        const list1 = document.querySelectorAll('.repair');
        const list2 = document.querySelectorAll('.delete');
        var btnRepair = document.querySelectorAll('.btn-repair');
        var btnDlt = document.querySelectorAll('.btn-dlt');
        var btnOut = document.querySelectorAll('.btn-out');

        function adminToolsrepair() {
            list1.forEach(element => element.classList.add('active'));
        }

        function adminToolsdlt() {
            list2.forEach(element => element.classList.add('active'));
        }

        function adminToolsout() {
            list1.forEach(item => item.classList.remove('active'));
            list2.forEach(item => item.classList.remove('active'));
        }
        btnRepair.forEach((item) => item.addEventListener('click', adminToolsrepair));
        btnDlt.forEach((item) => item.addEventListener('click', adminToolsdlt));
        btnOut.forEach((item) => item.addEventListener('click', adminToolsout));;

        //menu admin tools
        let tools = document.querySelector('.tools');
        let toolsbtn = document.querySelector('.toolsbtn');

        toolsbtn.onclick = function() {
            tools.classList.toggle('activetools');
        }

        function ChangeToSlug()
        {
            var slug;

            //L???y text t??? th??? input title
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
                slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
                slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
                slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
                slug = slug.replace(/??|???|???|???|???/gi, 'y');
                slug = slug.replace(/??/gi, 'd');
                //X??a c??c k?? t??? ?????t bi???t
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
                slug = slug.replace(/ /gi, "-");
                //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
                //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox c?? id ???slug???
            document.getElementById('convert_slug').value = slug;
        }
    </script>
</body>

</html>
