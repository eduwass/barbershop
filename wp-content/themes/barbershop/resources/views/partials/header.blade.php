@php 
$menu_locations = get_nav_menu_locations(); 
$menu_items = wp_get_nav_menu_items( $menu_locations['header_menu'] );
$header_bg = get_the_post_thumbnail_url();
@endphp
<header 
  class="banner 
  @if(get_field('header_text_color')) {{ 'white-text' }} @endif" 
  @if($header_bg) id="banner-bg" style="background-image:url({{ $header_bg }});" @endif
>
  <div class="container">
    <div class="row">
      <div class="col-3 header-left">
        @if(isset($menu_items[0])) <a class="menu-item" href="{{ $menu_items[0]->url}}">{{ $menu_items[0]->title }}</a> @endif
        @if(isset($menu_items[1])) <a class="menu-item" href="{{ $menu_items[1]->url}}">{{ $menu_items[1]->title }}</a> @endif
      </div>
      <div class="col-6 header-center">
        <a class="brand" href="{{ home_url('/') }}">
          @if($main_logo = get_field('main_logo', 'option'))
            <img src="{{$main_logo['url']}}">
          @else
            {{ get_bloginfo('name', 'display') }}
          @endif
        </a>
      </div>
      <div class="col-3 header-right">
        @if(isset($menu_items[2])) <a class="menu-item" href="{{ $menu_items[2]->url}}">{{ $menu_items[2]->title }}</a> @endif
        @if(isset($menu_items[3])) <a class="menu-item" href="{{ $menu_items[3]->url}}">{{ $menu_items[3]->title }}</a> @endif
      </div>
    </div>
  </div>
</header>
