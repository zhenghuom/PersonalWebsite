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

        .img-list div{
            margin-top: 10px;
        }

        .view {
            overflow: hidden;
            position: relative;
            -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            opacity: 1;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .view:hover{
            -webkit-transform: scale(1.1,1.1);
            -moz-transform: scale(1.1,1.1);
            -o-transform: scale(1.1,1.1);
            -ms-transform: scale(1.1,1.1);
            transform: scale(1.1,1.1);
        }

        #show-img{
            display: none;
            width: 100%;
            height: 100%;
            z-index: 100;
            background-color: rgba(0,0,0,.5);
            position: fixed;
            top:0;
            left: 0;
            text-align: center;
            vertical-align: middle;
        }
        #show-img img{
            max-width: 100%;
        }
        #show-img .title{
            font-size: 2em;
            color: #fff;
        }
        #show-img .title span:last-child{
            float: right;
            background-color: #fff;
            width: 1.5em;
            height: 1.5em;
            border-radius: 50%;
            color: #000;
            cursor: pointer;
        }
        .show-img-container{
            width: 50%;
            height: 50%;
            position: fixed;
            top:20%;
            left: 25%;
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
                            <li class="active"><a href="{{ URL::asset('portfolio')}}">Portfolio</a> </li>
                            <li ><a href="{{ URL::asset('contact')}}">Contact</a> </li>
                            <li class=""><a href="{{ URL::asset('about')}}">About</a> </li>
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
        <div class="text-center container-title"><span>Portfolio</span></div>
        <div class="about-grids clearfix"></div>
        <div class="img-list">
            <div class="col-md-3">
                <a href="javascript:;">
                    <img src="{{ URL::asset('img/0.jpg') }}" class="img-responsive img-circle view">
                </a>
                <h4>语录</h4>
                <p>海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:;">
                    <img src="{{ URL::asset('img/0.jpg') }}" class="img-responsive img-circle view">
                </a>
                <h4>语录</h4>
                <p>海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:;">
                    <img src="{{ URL::asset('img/0.jpg') }}" class="img-responsive img-circle view">
                </a>
                <h4>语录</h4>
                <p>海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:;">
                    <img src="{{ URL::asset('img/0.jpg') }}" class="img-responsive img-circle view">
                </a>
                <h4>语录</h4>
                <p>海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:;">
                    <img src="{{ URL::asset('img/0.jpg') }}" class="img-responsive img-circle view">
                </a>
                <h4>语录</h4>
                <p>海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:;">
                    <img src="{{ URL::asset('img/0.jpg') }}" class="img-responsive img-circle view">
                </a>
                <h4>语录</h4>
                <p>海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:;">
                    <img src="{{ URL::asset('img/0.jpg') }}" class="img-responsive img-circle view">
                </a>
                <h4>语录</h4>
                <p>海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人</p>
            </div>
            <div class="col-md-3">
                <a href="javascript:;">
                    <img src="{{ URL::asset('img/0.jpg') }}" class="img-responsive img-circle view">
                </a>
                <h4>语录</h4>
                <p>海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人。 海底月是天上月，眼前人是心上人，向来心是看客心，奈何人是剧中人</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="copy">
            Copyright  &copy;  HuoMing
        </div>
    </div>

    {{--显示图片--}}
    <div id="show-img">
        <div class="show-img-container">
        <div class="title">
            <span>图片名称</span><span>X</span>
        </div>
        <div>
            <img src="">
        </div>
        </div>
    </div>
</body>
<script>
    $('.img-list a').on('click',function () {
        $('#show-img').find('img').attr('src',$(this).find('img').attr('src'));
        $('#show-img').show();
    });
    $('#show-img,.show-img-container .title span:last').on('click',function () {
        $('#show-img').hide();
    });
    $('.show-img-container').on('click',function (event) {
        event.stopPropagation();
    });
</script>
</html>