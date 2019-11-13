@extends('home')

@section('body')
    <div id="bodyCompany" xmlns:v-bind="http://www.w3.org/1999/xhtml">
        <div class="card m-3" xmlns:v-on="http://www.w3.org/1999/xhtml">
            <div class="card-header">
                <div class="float-left">
                    <h6 class="text-muted">{{ trans('company') }}</h6>
                </div>
                <div class="float-right">
                    <a href="javascript:void(0)" class="btn btn-outline-primary" data-toggle="modal"
                       data-target="#companyModal" data-title="{{ trans('newCompany') }}">
                        {{ trans('newCompany') }}
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div v-if="company.length != 0">

                    <table class="table table-striped">
                        <tr>
                            <th>{{ trans('name') }}</th>
                            <th>{{ trans('created_at') }}</th>
                            <th>{{ trans('options') }}</th>
                        </tr>
                        <tr v-for="d in company">
                            <td>@{{ d.name }}</td>
                            <th>@{{ d.created_at }}</th>
                            <td>
                                <input type="button"
                                       value="{{ trans('edit') }}"
                                       class="btn btn-outline-info"
                                       @click.prevent="getDataUpdate(d)"
                                >
                                <input type="button"
                                       value="{{ trans('delete') }}"
                                       class="btn btn-outline-danger">
                            </td>
                        </tr>
                    </table>

                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li v-if="pagination.current_page > 1" class="page-item">
                                <a href="#" @click.prevent="changePages(pagination.current_page-1)"
                                   class="page-link"><span>{{ trans('back') }}</span></a>
                            </li>
                            <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : '' ]"
                                class="page-item">
                                <a href="#" @click.prevent="changePages(page)" class="page-link">
                                    @{{ page }}
                                </a>
                            </li>
                            <li v-if="pagination.current_page < pagination.last_page" class="page-item">
                                <a href="#" @click.prevent="changePages(pagination.current_page+1)"
                                   class="page-link"><span>{{ trans('next') }}</span></a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div v-else>
                    <div class="alert-heading">
                        {{ trans('no data available') }}
                    </div>
                </div>
            </div>
        </div>

        @include('company.create')
        @include('company.update')

    </div>
@endsection

@section('scripts')
    <script>
        let http = window.location;
        let realApiPath = http.origin + "/api" + http.pathname + "?api_token=" + '{{ $user->api_token }}';

        let vue = new Vue({
            el: '#bodyCompany',
            created: function () {
                this.getData();
            },
            data: {
                company: [],
                pagination: {
                    'total': 0,
                    'current_page': 0,
                    'per_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0
                },
                offset: 2,
                dataCompany: []
            },
            computed: {
                isActived: function () {
                    return this.pagination.current_page;
                },
                pagesNumber: function () {
                    if (!this.pagination.to) {
                        return [];
                    }

                    let from = this.pagination.current_page - this.offset;
                    if (from < 1) from = 1;

                    let to = from + (this.offset * 2);
                    if (to >= this.pagination.last_page) to = this.pagination.last_page;

                    let pagesArray = [];

                    while (from <= to) {
                        pagesArray.push(from);
                        from++;
                    }
                    return pagesArray;
                }
            },
            methods: {
                getData(pages) {
                    axios.get(realApiPath + "&&page=" + pages).then(res => {
                        this.company = res.data.company.data;
                        this.pagination = res.data.paginator;
                    })
                },
                saveData() {
                    axios.post(realApiPath, {
                        name: document.getElementById('name_company').value
                    }).then(res => {
                        if (res.data.data === 'ok') {
                            $('#companyModal').modal('hide');
                            this.getData(this.pagination.last_page);
                            toastr.success('created successfully');
                        }
                    })
                },
                updateData() {
                    $('#updateCompanyModal').modal('hide');
                    let realApiPath = http.origin + "/api" + http.pathname + "/"+this.dataCompany.id+"?api_token=" + '{{ $user->api_token }}';
                    axios.put(realApiPath, this.dataCompany)
                        .then(res => {
                            $('#updateCompanyModal').modal('hide');
                            if (res.data.data === "ko") {
                                toastr.warning('An occurred a problem with update data, please contact with the administrator');
                            }
                            else {
                                toastr.success('Updated successfully');
                            }

                        });
                    this.dataCompany = [];

                },
                deleteData() {
                    let realApiPath = http.origin + "/api" + http.pathname + "/"+this.dataCompany.id+"?api_token=" + '{{ $user->api_token }}';
                    axios.delete(realApiPath, this.dataCompany)
                        .then(res => {
                            //$('#').modal('hide');
                            if (res.data.data === "ko") {
                                toastr.warning('An occurred a problem with update data, please contact with the administrator');
                            }
                            else {
                                toastr.success('Delete successfully');
                            }

                        });
                },
                getDataUpdate: function (e) {
                    this.dataCompany = e;
                    $('#updateCompanyModal').modal('show');
                },
                getDataDelete: function(e) {
                    this.dataCompany = e;
                    $('#updateCompanyModal').modal('show');
                },
                changePages: function (pages) {
                    this.pagination.current_page = pages;
                    this.getData(pages);
                }
            }
        });

    </script>
@endsection