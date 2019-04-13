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

            @if(count($subjects)>0)
                @if($subjects[0]->level == 0)
                    @component('components.categoriesTableView', ['subjects' => $subjects])
                    @endcomponent

                    @component('components.addCategoryModal')
                        @slot('rootID')
                            {{$subjects[0]->root_id}}
                        @endslot
                    @endcomponent

                    @component('components.editCategoryModal')
                    @endcomponent
                @else
                    @component('components.contentsTableView', ['subjects' => $subjects->content])
                    @endcomponent
                @endif
            @else
                @component('components.notFoundData')
                    @slot('rootID')
                        {{$rootID}}
                    @endslot
                @endcomponent

                @component('components.addCategoryModal')
                    @slot('rootID')
                        {{$rootID}}
                    @endslot
                    @endcomponent
            @endif

            @component('components.deleteModal')
            @endcomponent



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
