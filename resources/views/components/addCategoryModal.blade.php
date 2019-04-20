




<div class="modal fade" tabindex="-1" role="dialog" id="addCategoryModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">اضافة صنف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-inline" method="post" action="{{route('store')}}">
                    {{ csrf_field() }}
                    <label for="addTitle" class="mr-sm-2">عنوان الصنف :</label>
                    <input type="text" class="form-control mb-2 mr-sm-2"
                           name="title" id="addTitle" required>
                    <input type="hidden" class="form-control mb-2 mr-sm-2" name="rootID"  value="{{$rootID ?? 0}}">
                    <button type="submit" class="btn btn-primary mb-2">اضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>