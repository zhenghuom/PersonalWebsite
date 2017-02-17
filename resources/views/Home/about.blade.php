<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HuoMing</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="{{ URL::asset('js/app.js') }}"></script>

    <!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
   {{-- <script src="https://unpkg.com/vue/dist/vue.js"></script>--}}
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

        .container-title span{
            font-size: 2em;
            border-bottom: 3px solid #666;
            border-radius: 5px;
        }
        .about-grids{
            margin-top: 4em
        }
        .about-grids img{
            max-width: 100%;
        }

        .year{
            float: left;
            width: 17%;
            margin-right: 5%;
            background: #D8D8D8;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            -o-border-radius: 6px;
            -ms-border-radius: 6px;
            padding: 1.6em 0;
            font-size: 1.6em;
            color:#fff;
        }
        .year2{
            background: #2c58ed;
        }
        .qualification{
            float: left;
            width: 77%;
        }
        .qualification h4 {
            color: #000000;
            font-size: 1.8em;
            font-weight: 400;
            margin-bottom: 0.5em;
        }
        .qualification p {
            color: #999999;
            font-size: 1.4em;
            font-weight: 300;
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
                    <li class=""><a href="{{ URL::asset('')}}">Home</a></li>
                    <li class=""><a href="{{ URL::asset('skill')}}">Skills</a> </li>
                    <li class="dropdown active">
                        <a href="{{ URL::asset('about')}}" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::asset('portfolio')}}">Portfolio</a> </li>
                            <li><a href="{{ URL::asset('contact')}}">Contact</a> </li>
                            <li class="active"><a href="{{ URL::asset('about')}}">About</a> </li>
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
        <div class="text-center container-title"><span>ABOUT ME</span></div>
        <div class="about-grids clearfix">
            <div class="col-md-6">
                <h2>简介</h2>
                <p class="lead">
                        我是XXX，身为一位PHP软件工程师，我的工作任务是...。我是XXX，身为一位PHP软件工程师，我的工作任务是...。
                    我是XXX，身为一位PHP软件工程师，我的工作任务是...。我是XXX，身为一位PHP软件工程师，我的工作任务是...。
                    我是XXX，身为一位PHP软件工程师，我的工作任务是...。我是XXX，身为一位PHP软件工程师，我的工作任务是...。
                    我是XXX，身为一位PHP软件工程师，我的工作任务是...。我是XXX，身为一位PHP软件工程师，我的工作任务是...。
                    我是XXX，身为一位PHP软件工程师，我的工作任务是...。我是XXX，身为一位PHP软件工程师，我的工作任务是...。
                </p>
            </div>
            <div class="col-md-6">
                {{--<embed class="about-right-grid" src='http://player.youku.com/player.php/Type/Folder/Fid//Ob//sid/XMjUxMDU1MDY3Mg==/v.swf' quality='high' align='middle' allowScriptAccess='always' allowFullScreen='true' mode='transparent' type='application/x-shockwave-flash'></embed>--}}
                <img src="{{ URL::asset('img/0.jpg') }}">
            </div>
        </div>

        <div class="clearfix">
            <div class="col-md-6">
                <div class="text-conter"><h1>Education</h1></div>
                <div class="about-grids">
                    <div class="year text-center">2016</div>
                    <div class="qualification">
                        <h4>广州大学</h4>
                        <p>软件技术</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-grids">
                    <div class="year text-center">2013</div>
                    <div class="qualification">
                        <h4>广州大学</h4>
                        <p>软件技术</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-grids">
                    <div class="year text-center">2010</div>
                    <div class="qualification">
                        <h4>广州大学</h4>
                        <p>软件技术</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="text-conter"><h1>Work</h1></div>
                <div class="about-grids">
                    <div class="year year2 text-center">2017</div>
                    <div class="qualification">
                        <h4>加速度</h4>
                        <p>至今</p>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="about-grids">
                    <div class="year year2 text-center">2016</div>
                    <div class="qualification">
                        <h4>加速度</h4>
                        <p>5月</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-grids">
                    <div class="year year2 text-center">2015</div>
                    <div class="qualification">
                        <h4>加速度</h4>
                        <p>10月</p>
                    </div>
                    <div class="clearfix"></div>
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