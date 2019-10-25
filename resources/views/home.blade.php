@extends('layouts.app')

@section('content')
    <div class="row content-objects">
        @component('layouts/components/sidebar')@endcomponent

        <div class="home-content">
            @component('layouts/components/navbar')@endcomponent

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
