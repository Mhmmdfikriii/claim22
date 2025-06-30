@extends('components.layouts.app')

@section('content')
    @livewire('landing.hero')
    @livewire('landing.about')
    @livewire('landing.team')
    @livewire('landing.feature')
    @livewire('landing.productcarousel')
    @livewire('landing.testimonial')
    @livewire('landing.contact')
@endsection