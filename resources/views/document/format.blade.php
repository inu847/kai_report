@extends('layouts.dashboard')

@section('title')
    Format Document
@endsection

@section('content')
    <div class="document pt-5 pb-5">
        @include('document.page1')
        @include('document.page2')
        @include('document.page3')
        @include('document.page4')
    </div>
@endsection