{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')

  <div id="homepage">
    
    @include('partials.homepage-features')
    
    @include('partials.separator')
    
    @include('partials.homepage-hairstyles')
    
    @include('partials.separator')
    
    @include('partials.homepage-staff')
    
    @include('partials.separator')
    
    @include('partials.homepage-shop')
    
    @include('partials.separator')

    @include('partials.homepage-form')

  </div>
  
@endsection
