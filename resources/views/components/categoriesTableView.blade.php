




<table class="table justify-content-center">
    <thead class="text-center">
    <tr>
        <th scope="col">#</th>
        <th scope="col">العنوان</th>
        <th scope="col" class="w-25">العمليات</th>
    </tr>
    </thead>
    <tbody>
    @foreach($subjects as $key => $subject)
        <tr class="text-center">
            <th scope="row">{{++$key}}</th>
            <td><a href="{{route('viewCategories', $subject->id)}}">{{$subject->title}}</a> </td>
            <td>
                <ul class="nav justify-content-center pr-0">
                    <li class="nav-item">
                        <a class="nav-link btn-edit-category" href="#" data-toggle="modal"
                           data-target="#editCategoryModal" data-id="{{$subject->id}}"
                           data-title="{{$subject->title}}">
                            <i class="fas fa-pen-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-delete-category" href="#" data-id="{{$subject->id}}" data-toggle="modal"
                           data-target="#deleteCategoryModal">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </li>
                </ul>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="" class="btn btn-link" data-toggle="modal" data-target="#addCategoryModal" title="Hooray!">اضافة صنف</a>

@if(\Illuminate\Support\Facades\Route::currentRouteName() == 'viewCategories')
    <a href="{{route('index')}}" class="btn btn-link" style="float: left">الرجوع للصفحة الرئيسية</a>
    <a href="{{$routePreviousPage ?? route('index')}}"
       class="btn btn-link" style="float: left">الرجوع للصفحة السابقة</a>
@endif


<script>
    $(document).ready(function() {
        $('body').tooltip({
            selector: "[data-tooltip=tooltip]",
            container: "body"
        });
    });
</script>