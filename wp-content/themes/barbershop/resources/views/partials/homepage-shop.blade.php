<h1>Spend some money</h1>
<div class="row shop">
  @php
    $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'order' => 'ASC' );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
      while ( $loop->have_posts() ) : $loop->the_post();
      @endphp
        
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 shop-item">
          {!! wc_get_template_part( 'content', 'product' ) !!}
        </div>

      @php
      endwhile;
    } else {
      echo __( 'No products found' );
    }
    wp_reset_postdata();
  @endphp
</div>