<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="{{url('img/YtSport.jpg')}}">
    <link rel="stylesheet" href="{{url('css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
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
                <a href="/admin">Y.T Sport</a>
            </div>
        </header>
    </div>
    @show
    @section('menu-admin')
    <div class="container">
        <div class="nav">
            <ul>
                <li>
                    <a href="/admin">
                        <span class="icon"><img src="{{url('img/YtSport.jpg')}}" alt="photo"></span>
                        <span class="title"><h2>Admin Menu</h2></span>
                    </a>
                </li>
                <li class="item">
                    <a href="/admin">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="item">
                    <a href="/admin/create">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Account In Website</span>
                    </a>
                </li>
                <li class="item">
                    <a href="">
                        <span class="icon"><i class="fas fa-candy-cane"></i></span>
                        <span class="title">Event</span>
                    </a>
                </li>
                <li class="item">
                    <a href="">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <span class="icon"><i class="fas fa-sign-in-alt"></i></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <script>
            // thêm class hovered khi select list nav ở menu dọc
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
                        <input type="text" placeholder="Search here">
                        <i class="fas fa-search"></i>
                    </label>
                </div>
            </div>
        @yield('content-admin')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script src="{{url('js/chart.js')}}"></script>
    <script>
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
    </script>
    <img src="" alt="">

    <a href=""></a>
</body>

</html>
