@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header card_style">@yield('title1')</div>
                    <div class="card-body">
                        <div class="form-group">
                           @yield('content1')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

