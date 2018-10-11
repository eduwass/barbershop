<div class="row features">
  @foreach(get_field('features') as $feature)
    <div class="col-12 col-lg-4 feature-item">
      <div class="image">
        <img src="{{ $feature['image']['url'] }}">
      </div>
      <div class="title">
        {{ $feature['title'] }}
      </div>
      <div class="text">
        {{ $feature['text'] }}
      </div>
    </div>
  @endforeach
</div>