




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

    <div class="row">
        <div class="col-md-12" style="padding: 0">
            <h2>{{$content->title}}</h2>
            <p>{{$content->body}}</p>
            <div>
                <label for="videoLink">رابط الفيديو</label>
                <a href="{{$content->video_link}}" class="btn btn-link" id="videoLink">hdshdghsdghdg</a>
            </div>
            <div>
                <label for="externalLink">رابط خارجي</label>
                <a href="{{$content->external_link}}" class="btn btn-link" id="videoLink">hdshdghsdghdg</a>
            </div>

        </div>
        <a href="{{route('index')}}" class="btn btn-link" style="float: left">الرجوع للصفحة الرئيسية</a>
        <a href="{{url()->previous()}}"
           class="btn btn-link" style="float: left">الرجوع للصفحة السابقة</a>
    </div>

@endsection