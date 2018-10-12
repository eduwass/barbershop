<div class="">
  <h1>{{ get_field('hairstyles_title') }}</h1>
  <div class="row hairstyles">
    <div class="slick">
      @foreach(get_field('hairstyles') as $hairstyle)
        <img src="{{ $hairstyle['url'] }}">
      @endforeach
    </div>
  </div>
</div>