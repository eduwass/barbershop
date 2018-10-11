@if(get_field('cta_label'))
  <div class="cta">
    <a class="btn btn-primary" href="{{ get_field('cta_link') }}">
      {{ get_field('cta_label') }}
    </a>
  </div>
@endif