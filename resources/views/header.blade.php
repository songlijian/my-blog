<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        

            .full-height {
                height: 70px;
                width: :100%;
            }
            .mine {
                float: left;
                height: 70px;
                width: 1100px;
                text-align: center;

            }
            .mine_1{
                float: left;
                text-align: center;
                line-height:70px;            
            }
            .flex-center {
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            <div><span class ="mine"><a href="/article/index"><h2>welcome to my blog</h2></a></span></div>
            <div><span class ="mine_1"><a href="/article/create">写文章</a></span></div>
        </div>

            
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
