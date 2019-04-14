




@extends('components.layout.layout')



@section('content')

    <form method="post" action="{{route('storeContent')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">العنوان</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">النص</label>
            <textarea class="form-control" id="body" name="body" rows="6"></textarea>
        </div>

        <div class="form-group">
            <label for="videoLink">رابط الفيديو</label>
            <input type="text" class="form-control" id="videoLink" name="videoLink">
        </div>

        <div class="form-group">
            <label for="externalLink">رابط خارجي</label>
            <input type="text" class="form-control" id="externalLink" name="externalLink">
        </div>

        <input type="hidden" name="categoryID" value="{{$categoryID}}">

        <button type="submit" class="btn btn-primary">اضافة</button>
    </form>

@endsection



