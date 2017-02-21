<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HuoMing</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
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
                    <li class=""><a href="{{ URL::asset('')}}">Home</a></li>
                    <li class=""><a href="{{ URL::asset('skill')}}">Skills</a> </li>
                    <li class="dropdown active">
                        <a href="{{ URL::asset('about')}}" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::asset('portfolio')}}">Portfolio</a> </li>
                            <li class="active"><a href="{{ URL::asset('contact')}}">Contact</a> </li>
                            <li ><a href="{{ URL::asset('about')}}">About</a> </li>
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
        <div class="text-center container-title"><span>CONTACT</span></div>
        <div class="about-grids clearfix"></div>
        <div>
            <div class="col-md-3">
                <h3>联系我</h3>
                <div class="about-grids"></div>
                <ul class="list-group">
                    <li class="list-group-item">广州天河</li>
                    <li class="list-group-item">岗顶</li>
                    <li class="list-group-item">addr:地中海酒店</li>
                    <li class="list-group-item">tel:12345678901</li>
                    <li class="list-group-item">email:123456789@sina.com</li>
                    <li class="list-group-item">qq:123456789</li>
                </ul>
            </div>
            <div class="col-md-9">
                <h3>Drop me a line</h3>
                <div class="about-grids"></div>
                <form role="form">
                    <div class="col-md-6 form-group"><input type="text" class="form-control" id="name" placeholder="Name"></div>
                    <div class="col-md-6 form-group"><input type="text" class="form-control" id="email" placeholder="E-mail"></div>
                    <div class="col-md-6 form-group"><input type="text" class="form-control" id="phone" placeholder="Phone"></div>
                    <div class="col-md-6 form-group"><input type="text" class="form-control" id="wechat" placeholder="Wechat"></div>
                    <div class="col-md-12 form-group">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="copy">
            Copyright  &copy;  HuoMing
        </div>
    </div>

</body>
</html>