<div class="modal fade" id="updateCompanyModal" tabindex="-1" role="dialog" aria-labelledby="updateCompanyModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateCompanyModalLabel">{{ trans('update company') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" @submit.prevent="updateData">
                {{ csrf_field() }}

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name_company">{{ trans('name') }}</label>
                        <input type="text" name="name_company" id="name_company" class="form-control" v-model="updateCompany.name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('close') }}</button>
                    <input
                            type="button"
                            class="btn btn-primary"
                            value="{{ trans('update') }}"
                            @click.prevent="updateData"
                    >
                </div>
            </form>
        </div>
    </div>
</div>