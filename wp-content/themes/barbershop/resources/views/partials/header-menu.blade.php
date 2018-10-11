@php 
$menu_locations = get_nav_menu_locations(); 
$menu_items = wp_get_nav_menu_items( $menu_locations['header_menu'] );
$main_logo = get_field('main_logo', 'option');
$mobile_logo = get_field('mobile_logo', 'option');
@endphp
<div class="row menu">
  <div class="col-3 col-lg-3 header-left hidden-mobile">
    @if(isset($menu_items[0])) <a class="menu-item" href="{{ $menu_items[0]->url}}">{{ $menu_items[0]->title }}</a> @endif
    @if(isset($menu_items[1])) <a class="menu-item" href="{{ $menu_items[1]->url}}">{{ $menu_items[1]->title }}</a> @endif
  </div>
  <div class="col-12 col-lg-6 header-center">
    <a class="brand" href="{{ home_url('/') }}">
      @if($main_logo && $mobile_logo)
        <img class="main-logo" src="{{$main_logo['url']}}">
        @if(is_front_page() && $sub_logo = get_field('sub_logo', 'option'))
          <img class="sub-logo" src="{{$sub_logo['url']}}">
        @endif
      @else
        {{ get_bloginfo('name', 'display') }}
      @endif
    </a>
  </div>
  <div class="col-3 col-lg-3 header-right hidden-mobile">
    @if(isset($menu_items[2])) <a class="menu-item" href="{{ $menu_items[2]->url}}">{{ $menu_items[2]->title }}</a> @endif
    @if(isset($menu_items[3])) <a class="menu-item" href="{{ $menu_items[3]->url}}">{{ $menu_items[3]->title }}</a> @endif
  </div>
</div>