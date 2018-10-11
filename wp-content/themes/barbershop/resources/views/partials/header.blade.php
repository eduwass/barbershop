<header 
  class="banner 
  @if(get_field('header_text_color') || is_woocommerce()) {{ 'white-text' }} @endif
  @if(get_field('show_cta')) {{ 'show-cta' }} @endif
  @if($header_bg = get_the_post_thumbnail_url()) banner-bg" style="background-image:url({{ $header_bg }});" @endif"
>
  <div class="container">
    @include('partials.header-menu')
    @include('partials.header-intro')
  </div>
</header>
