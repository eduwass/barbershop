<div class="row intro">
  <div class="col-12">
    
    @if($heading = get_field('heading'))
      <h1 class="heading">{{ $heading }}</h1>
    @else
      <h1 class="heading">{!! App::title() !!}</h1>
    @endif

    @if($subheading = get_field('subheading'))
      <h2 class="subheading">{{ $subheading }}</h2>
    @endif

  </div>
</div>