



@extends('components.layout.layout')



    @section('content')

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

        @component('components.contentsTableView', ['subjects' => $contents, 'rootID' => $rootID])
            @if(isset($parentID) && $parentID > 0)
                @slot('parentID')
                    {{$parentID}}
                @endslot
                @slot('routePreviousPage')
                    {{route('viewCategories', $parentID)}}
                @endslot
            @endif
        @endcomponent

        @component('components.deleteModal')
            @slot('routeName')
                {{'/destroy_content'}}
            @endslot
        @endcomponent

        @endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.btn-delete-category').click(function () {
                let deleteID = $(this).attr('data-id');
                $('#deleteCategory').val(deleteID);
            })
        });
    </script>
@endsection
