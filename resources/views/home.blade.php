@extends('layouts.app')

@section('content')
    <div class="row content-objects">
        @component('layouts/components/sidebar')@endcomponent

        <div class="home-content">
            @component('layouts/components/navbar')@endcomponent

            <div class="container">
                <div class="row justify-content-center">
                    @yield('body')
                </div>
            </div>
        </div>
    </div>
@endsection
