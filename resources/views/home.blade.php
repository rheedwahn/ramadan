@extends('layout.layout')

@section('content')
    @include('slider.slider')
    @include('event.event')
@stop

@section('ramadan')
    @include('ramadan.ramadan_section')
@stop

@section('contact_section')
    @include('contact_section.contact')
@stop

@section('map')
    <div class="container-fluid parallax">
        
    </div>
@stop