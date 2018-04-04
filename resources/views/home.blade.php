@extends('layouts.app')

@section('content')
@include('layouts.flash-message')
@include('layouts.search')
<div class="container">
    <div class="row justify-content-center">         
        <div class="col-md-8 text-center">
            {!! $chart->html() !!}
        </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endsection
