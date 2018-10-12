{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')

<div id="homepage">

  <div class="wrap container" role="document">
    <div class="content">
      <main class="main">
          
          @include('partials.homepage-features')
          
          @include('partials.separator')

      </main>
    </div>
  </div>

  
  @include('partials.homepage-hairstyles')


  <div class="wrap container" role="document">
    <div class="content">
      <main class="main">

          @include('partials.separator')
          
          @include('partials.homepage-staff')
          
          @include('partials.separator')
          
          @include('partials.homepage-shop')
          
          @include('partials.separator')

          @include('partials.homepage-form')

      </main>
    </div>
  </div>
  
</div>
  
@endsection
