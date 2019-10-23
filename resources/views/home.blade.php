@extends('layouts.app')

@section('content')
<div class="row content-objects">
    <div class="">
        @component('layouts/components/sidebar')@endcomponent
    </div>

    <div class="">
        @component('layouts/components/navbar')@endcomponent

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
