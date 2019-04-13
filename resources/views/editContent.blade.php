




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

    <!-- Styles -->
</head>
<body style="direction: rtl; text-align: right">
<div class="container mt-lg-5">

    <div class="container mt-lg-5">
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
    </div>

</div>


<script>
    $(document).ready(function() {
        $('.btn-edit-category').click(function () {
            let editID = $(this).attr('data-id');
            let title = $(this).attr('data-title');
            $('#categoryID').val(editID);
            $('#title').val(title);
        });
        $('.btn-delete-category').click(function () {
            let deleteID = $(this).attr('data-id');
            $('#deleteCategory').val(deleteID);
        })
    });
</script>

</body>
</html>