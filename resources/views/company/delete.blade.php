<div class="modal fade" id="deleteCompanyModal" tabindex="-1" role="dialog" aria-labelledby="deleteCompanyModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCompanyModalLabel">{{ trans('delete company') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>{{ trans('Are you sure to delete this element?') }}</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('close') }}</button>
                <input
                        type="button"
                        class="btn btn-primary"
                        value="{{ trans('delete') }}"
                        @click.prevent="deleteData"
                >
            </div>
        </div>
    </div>
</div>