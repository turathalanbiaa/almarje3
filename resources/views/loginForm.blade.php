




@extends('components.layout.layout')


@section('style')
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
@endsection

@section('content')

    <div class="row justify-content-md-center">
        <div class="col-md-4" style="padding: 0">
            <div class="login-card">
                <div class="jumbotron" style="background-color: transparent">
                    @if (session('message'))
                        <div class="alert alert-danger">
                            <p>{{session('message')}}</p>
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

@endsection

