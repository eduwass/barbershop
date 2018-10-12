{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')

  <div class="wrap container" role="document">
    <div class="content">
      <main class="main">

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

      </main>
    </div>
  </div>
  
@endsection
