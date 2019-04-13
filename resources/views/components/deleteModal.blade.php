




<div class="modal fade" tabindex="-1" role="dialog" id="deleteCategoryModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('destroyCategory')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="delete" id="deleteCategory" value="">
                    <button type="submit" class="btn btn-danger">تاكيد الحذف</button>
                </form>
            </div>
        </div>
    </div>
</div>