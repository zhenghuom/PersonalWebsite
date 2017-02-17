<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HuoMing</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/app.js') }}"></script>


    <!-- Styles -->
    <style>
        .logo{
            font-family: 'Berkshire Swash', cursive;
            margin-top: 0px;
            width: 56%;
            font-size: 3.1em;
            margin-bottom: 0;
            color: #000;
            font-weight: 100;
        }
        .search-bar input[type="submit"] {
            background: url({{ URL::asset('img/search.png') }})no-repeat 0px 0px;
            outline: none;
            -webkit-appearance: none;
            border: 0;
            display: inline-block;
            vertical-align: middle;
            position: relative;
            width: 24px;
            height: 24px;
            top: 0px;
            left: 0px;
            cursor: pointer;
        }

        .footer{
            margin-top: 70px;
        }
        .copy {
            background: #2c58ed;
            padding: 2em 0;
            text-align: center;
            color: #fff;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#">HuoMing</a>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL::asset('')}}">Home</a></li>
                    <li><a href="{{ URL::asset('skill')}}">Skills</a> </li>
                    <li class="dropdown">
                        <a href="{{ URL::asset('about')}}" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::asset('portfolio')}}">Portfolio</a> </li>
                            <li><a href="{{ URL::asset('contact')}}">Contact</a> </li>
                            <li><a href="{{ URL::asset('about')}}">About</a> </li>
                        </ul>
                    </li>
                </ul>
                <div class="search-bar navbar-right">
                    <form action="" method="get" class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Seach"/>
                        </div>
                        <input type="submit" value="">
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="carousel slide" id="myCarousel">
            {{--轮播指标--}}
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0"
                    class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner"  style="min-height: 70%;">
                <div class="item active">
                    <img src="{{ URL::asset('img/0.jpg') }}" alt="First slide">
                </div>
                <div class="item">
                    <img src="{{ URL::asset('img/0.jpg') }}" alt="Second slide">
                </div>
                <div class="item">
                    <img src="{{ URL::asset('img/0.jpg') }}" alt="Third slide">
                </div>
                <div class="item">
                    <img src="{{ URL::asset('img/0.jpg') }}" alt="Third slide">
                </div>
            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel"
               data-slide="prev" style="padding-top: 45%">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel"
               data-slide="next" style="padding-top: 45%">&rsaquo;</a>
        </div>
    </div>

    <div class="footer">
        <div class="copy">
            Copyright  &copy;  HuoMing
        </div>
    </div>

</body>
</html>