




<div class="row">
    <div class="col-md-12">
        <h1>لا توجد بيانات لعرضها</h1>
        <a href="" class="btn btn-link" data-toggle="modal" data-target="#addCategoryModal">اضافة صنف</a>
        <a href="{{route('createContent', $rootID)}}" class="btn btn-link">اضافة محتوى</a>

        @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'viewCategories')
            <a href="{{route('index')}}" class="btn btn-link" style="float: left">الرجوع للصفحة الرئيسية</a>
            <a href="{{$routePreviousPage ?? route('index')}}"
               class="btn btn-link" style="float: left">الرجوع للصفحة السابقة</a>
        @endif
    </div>
</div>