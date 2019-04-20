



<div class="mb-5">
    <a  href="{{route('index')}}" class="btn btn-link p-1">الصفحة الرذيسية</a>
    @foreach($categories as $category)
        <span>-</span>
        <a class="p-1" href="{{route('viewCategories', $category['id'])}}" class="btn btn-link">{{$category['title']}}</a>
    @endforeach
</div>