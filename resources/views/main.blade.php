@extends('components.layout.layout')



@section('content')

    @if(isset($parentsCategories))
        @component('components.parentsCategory', ['categories' => $parentsCategories])
        @endcomponent
    @endif

    @if(session('message') || session('type'))
        @component('components.alertMessage')
            @slot('type')
                {{session('type')}}
            @endslot
            @slot('message')
                {{session('message')}}
            @endslot
        @endcomponent
    @endif
    @if(count($subjects)>0)
        @component('components.categoriesTableView', ['subjects' => $subjects])
            @if(isset($parentID) && $parentID > 0)
                @slot('parentID')
                    {{$parentID}}
                @endslot
                @slot('routePreviousPage')
                    {{route('viewCategories', $parentID)}}
                @endslot
            @endif
        @endcomponent

        @component('components.addCategoryModal')
            @slot('rootID')
                {{$subjects[0]->root_id}}
            @endslot
        @endcomponent

        @component('components.editCategoryModal')
        @endcomponent

    @else
        @component('components.notFoundData')
        @slot('rootID')
            {{$rootID}}
        @endslot
        @if(isset($parentID) && $parentID > 0)
            @slot('parentID')
                {{$parentID}}
            @endslot
            @slot('routePreviousPage')
                {{route('viewCategories', $parentID)}}
            @endslot
        @endif
        @endcomponent

        @component('components.addCategoryModal')
            @slot('rootID')
                {{$rootID}}
            @endslot
        @endcomponent
    @endif

    @component('components.deleteModal')
        @slot('routeName')
            {{'/destroy_category'}}
        @endslot
    @endcomponent

@endsection


@section('script')
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
@endsection
