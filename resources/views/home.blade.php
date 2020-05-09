@extends('widget.container')
@section('title1') Главная страница @endsection
@section('title') Главная страница @endsection
@section('content1')

    @include('components.dish-list', ['dishes' => $dishes])

@endsection
