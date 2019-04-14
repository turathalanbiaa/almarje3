




@extends('components.layout.layout')



@section('content')

    <form method="post" action="{{route('updateContent')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">العنوان</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$content->title}}">
        </div>

        <div class="form-group">
            <label for="body">النص</label>
            <textarea class="form-control" id="body" name="body" rows="6" >{{$content->body}}</textarea>
        </div>

        <div class="form-group">
            <label for="videoLink">رابط الفيديو</label>
            <input type="text" class="form-control" id="videoLink" name="videoLink" value="{{$content->video_link}}">
        </div>

        <div class="form-group">
            <label for="externalLink">رابط خارجي</label>
            <input type="text" class="form-control" id="externalLink" name="externalLink" value="{{$content->external_link}}">
        </div>

        <input type="hidden" name="contentID" value="{{$content->id}}">

        <button type="submit" class="btn btn-primary">اضافة</button>
    </form>

@endsection
