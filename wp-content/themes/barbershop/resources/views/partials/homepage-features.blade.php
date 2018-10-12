<div class="row features">
  @foreach(get_field('features') as $feature)
    <div class="col-12 col-sm-4 col-lg-4 feature-item">
      <div class="image">
        <img src="{{ $feature['image']['url'] }}">
      </div>
      <div class="title">
        <h2>
          {{ $feature['title'] }}
        </h2>
      </div>
      <div class="text">
        <p class="p1">
          {{ $feature['text'] }}
        </p>
      </div>
    </div>
  @endforeach
</div>