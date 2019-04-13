





<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style>
        .login-card{
            background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
            height: 100%;
            margin-top: 10%;
            -webkit-box-shadow: 5px 9px 28px 0 rgba(212,212,212,1);
            -moz-box-shadow: 5px 9px 28px 0 rgba(212,212,212,1);
            box-shadow: 5px 9px 28px 0 rgba(212,212,212,1);

        }
        input[type] {
            border-radius: 25px;
        }
        .login-btn {
            background-image: linear-gradient(to right, #FF512F 0%, #DD2476 51%, #FF512F 100%) !important;
        }
        .login-btn:hover {
            background-position: right center;
        }
        .login-btn {
            text-align: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;
            text-shadow: 0 0 10px rgba(0,0,0,0.2);
            border-radius: 60px !important;
            display: block;
        }
        .custom-control-label::before, .custom-control-label::after {
            top: .8rem;
            width: 1.25rem;
            height: 1.25rem;
        }
    </style>
</head>
<body style="direction: rtl; text-align: right">
<div class="container mt-lg-5">

    <div class="row justify-content-md-center">
    <div class="col-md-4" style="padding: 0">
        <div class="login-card">
            <div class="jumbotron" style="background-color: transparent">
                @if (session('Message'))
                    <div class="alert alert-danger">
                        <h3>{{session('Message')}}</h3>
                    </div>
                @endif
                <form action="{{route('login')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input  type="text" class="form-control" name="username" placeholder="المعرف">
                    </div>
                    <div class="form-group">
                        <input  type="password" class="form-control" name="password" placeholder="الرقم السري">
                    </div>
                    <div class="row" style="margin-top: 10%">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block login-btn">دخول</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

</body>
</html>
