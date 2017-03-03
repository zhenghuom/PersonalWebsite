<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HuoMing</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
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
                    <li class="active"><a href="{{ URL::asset('skill')}}">Skills</a> </li>
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
        <div class="text-center container-title"><span>SKILLS</span></div>
        <div class="about-grids clearfix"></div>
        <div class="skill-info">
            <h4>html</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                </div>
            </div>
            <h4>css</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                </div>
            </div>
            <h4>js</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                </div>
            </div>
            <h4>php</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                </div>
            </div>
            <h4>python</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                </div>
            </div>
            <h4>thinkphp</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                </div>
            </div>
            <h4>laravel</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                </div>
            </div>
            <h4>javascript</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                </div>
            </div>
            <h4>boostrap</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                </div>
            </div>
            <h4>vue.js</h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60"
                     aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                </div>
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