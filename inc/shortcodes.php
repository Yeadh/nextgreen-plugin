<?php 
// Section title
function nextgreen_general_title( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'title' => '',
      'description' => ''
   ), $atts ) );
   
   ob_start(); ?>

    <!-- general-title -->
    <div class="general-title text-center">
        <h4><?php echo esc_html( $title ) ?></h4>
        <p class="lead"><?php echo esc_html( $description ) ?></p>
        <hr>
    </div>
      
  <?php
   return ob_get_clean();
};
add_shortcode('general_title', 'nextgreen_general_title');


//  Topbar
function nextgreen_topbar( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'title' => '',
      'sub_title' => '',
      'btn_one' => '',
      'btn_url' => '',
      'btn_two' => '',
      'btn_two_url' => ''
   ), $atts ) );
   
    global $nextgreen;
    $header_top_phone = !empty( $nextgreen['header_top_phone'] ) ? $nextgreen['header_top_phone'] : '';
    $header_top_mail = !empty( $nextgreen['header_top_mail'] ) ? $nextgreen['header_top_mail'] : '';
    $header_top_social_icons = !empty( $nextgreen['header_top_social_icons'] ) ? $nextgreen['header_top_social_icons'] : '';

   ob_start(); 

   ?>
  <div class="topbar clearfix">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-left">
                  <div class="social">
                    <?php 
                    foreach($header_top_social_icons as $key=>$value ) {
                        if($value!=''){
                            if($key=='vimeo'){
                                echo '<a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" data-tooltip="tooltip" data-placement="bottom" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-lg fa-vimeo"></i></a>';
                            } else {
                                echo '<a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" data-tooltip="tooltip" data-placement="bottom" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-lg fa-'.esc_attr($key).'"></i></a>';
                            }
                        }
                    } ?>
                  </div><!-- end social -->
              </div><!-- end left -->
              <div class="col-md-6 text-right">
                  <p>
                    <?php if ($header_top_phone) {?>
              <strong><i class="fa fa-phone"></i></strong> <?php echo esc_html( $header_top_phone ) ?> &nbsp;&nbsp;
                    <?php }
                    if ($header_top_mail) {?>
                      <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:<?php echo esc_attr( $header_top_mail ) ?>"> <?php echo esc_html( $header_top_mail ) ?></a>
                      <?php } ?>
                  </p>
              </div><!-- end left -->
          </div><!-- end row -->
      </div><!-- end container -->
  </div><!-- end topbar -->
  <?php
   return ob_get_clean();
};

add_shortcode('topbar', 'nextgreen_topbar');

// Welcome Message
function nextgreen_welcomemessage( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'title' => '',
      'sub_title' => '',
      'btn_one' => '',
      'btn_url' => '',
      'btn_two' => '',
      'btn_two_url' => ''
   ), $atts ) );
   
   ob_start(); 

   ?>
  <div class="welcomemessage text-center green-welcomemessage">
    <h2><?php echo esc_html( $title ) ?></h2>
    <p class="lead"><?php echo esc_html( $sub_title ) ?></p>
    <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $btn_url ) ?>"><?php echo esc_html( $btn_one ) ?></a>
    <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $btn_two_url ) ?>"><?php echo esc_html( $btn_two ) ?></a>
  </div>
  <?php
   return ob_get_clean();
};

add_shortcode('welcomemessage', 'nextgreen_welcomemessage');

// We Offer
function nextgreen_we_offer( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'icon' => '',
      'title' => '',
      'desc' => ''
   ), $atts ) );
   
   ob_start(); 

   $image = wp_get_attachment_image_src( $icon , "full");
   $imgSrc = $image[0];

   ?>
  <div class="why-us text-center">
    <img src="<?php echo esc_url( $imgSrc ) ?>" alt="<?php echo esc_attr( $title ) ?>">
    <strong><?php echo esc_html( $title ) ?></strong> 
    <p><?php echo esc_html( $desc ) ?></p>
  </div>
  <?php
   return ob_get_clean();
};

add_shortcode('we_offer', 'nextgreen_we_offer');


// Services
function nextgreen_services( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'order' => '',
      'service_per_page' => ''
   ), $atts ) );
   
   ob_start(); 

   ?>
   <div id="owl-sticky" class="row sticky-row">
        <?php
        $service = new WP_Query( array( 
           'post_type' => 'service',
           'posts_per_page' => $service_per_page,
           'order' => $order,
        ));
        /* Start the Loop */
        while ( $service->have_posts() ) : $service->the_post(); ?>

        <div class="sticky-col">
            <div class="imageWrapper">
                <?php the_post_thumbnail( '' ) ?>
            </div>
            <div class="big-meta">  
                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
            </div>
        </div>

        <?php endwhile; wp_reset_postdata();?>
        
    </div>
  <?php
   return ob_get_clean();
};

add_shortcode('services', 'nextgreen_services');



// Services 2
function nextgreen_services_2( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'title' => '',
      'text' => '',
      'icon' => '',
   ), $atts ) );
   
   ob_start(); 


   $image = wp_get_attachment_image_src( $icon , "full");
   $imgSrc = $image[0];

   ?>
   <div class="service-style-2 text-center">
     <div class="services-1">
          <img src="<?php echo esc_url( $imgSrc ) ?>" alt="<?php echo esc_html( $title ) ?>">
          <h4><?php echo esc_html( $title ) ?></h4>
          <p><?php echo esc_html( $text ) ?></p>
      </div>
    </div>
  <?php
   return ob_get_clean();
};

add_shortcode('services_2', 'nextgreen_services_2');


// Team
function nextgreen_team( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'order' => '',
      'team_per_page' => ''
   ), $atts ) );
   
   ob_start(); 

   ?>
   <div class="row team-slide text-center">
        <?php
        $team = new WP_Query( array( 
           'post_type' => 'team',
           'posts_per_page' => $team_per_page,
           'order' => $order,
        ));
        /* Start the Loop */
        while ( $team->have_posts() ) : $team->the_post(); ?>
        
         <div class="col-md-4 col-sm-4 team-member">
            <div class="team-member-2">
                <div class="entry">
                    <?php the_post_thumbnail() ?>
                    <div class="magnifier">
                        <ul class="list-inline buttons">
                          <li><a class="st" rel="bookmark" href="<?php echo get_post_meta( get_the_ID(), '_nextgreen_team_email_url', true ); ?>"><span class="fa fa-envelope"></span></a></li>
                          <li><a class="st" rel="bookmark" href="<?php echo get_post_meta( get_the_ID(), '_nextgreen_team_google_url', true ); ?>"><span class="fa fa-google-plus"></span></a></li>
                          <li><a class="st" rel="bookmark" href="<?php echo get_post_meta( get_the_ID(), '_nextgreen_team_twitter_url', true ); ?>"><span class="fa fa-twitter"></span></a></li>
                          <li><a class="st" rel="bookmark" href="<?php echo get_post_meta( get_the_ID(), '_nextgreen_team_facebook_url', true ); ?>"><span class="fa fa-facebook"></span></a></li>
                        </ul>
                        <h4><?php the_title() ?></h4>
                        <?php the_excerpt() ?>
                    </div><!-- end magnifier -->
                </div><!-- end entry -->
            </div><!-- end team-member -->
        </div><!-- end col -->

        <?php endwhile; wp_reset_postdata();?>

    </div>
  <?php
   return ob_get_clean();
};

add_shortcode('team', 'nextgreen_team');

// Latest Blog
function nextgreen_latest_blog( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'order' => '',
      'post_per_page' => ''
   ), $atts ) );
   
   ob_start(); ?>
    <!-- row start -->
    <div class="container">
  <div class="row module-wrapper blog-widget">

      <?php

      $latestblog = new WP_Query( array( 
         'post_type' => 'post',
         'posts_per_page' => $post_per_page,
         'order' => $order,
      ));

      /* Start the Loop */
      while ( $latestblog->have_posts() ) : $latestblog->the_post(); ?>
        
    

      <div class="col-md-4 col-sm-6 single-blog-post">
          <div class="blog-wrapper">
              <div class="blog-title">
                  <div class="category_title">      
                      <?php the_category( ' , ' ); ?>
                  </div>
                  <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                  <div class="blog-image">
                      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                  </div><!-- end image -->
                  <div class="post-meta">
                      <span>
                      <i class="fa fa-user"></i>
                      <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author(); ?></a>
                      </span>
                      <span>
                      <i class="fa fa-tag"></i>
                      <a href="#">Shop</a>
                      </span>
                      <span>
                      <i class="fa fa-comments"></i>
                      <a href="<?php comments_link(); ?>"><?php printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'nextgreen' ), number_format_i18n( get_comments_number() ) );?></a>
                      </span>
                  </div>
                  <p><?php echo nextgreen_excerpt( 25 ); ?></p>
                  <a href="<?php the_permalink() ?>" class="readmore"><?php esc_html_e( 'Read more', 'nextgreen' ) ?></a>
              </div><!-- end desc -->
          </div><!-- end blog-wrapper -->
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
<?php
   return ob_get_clean();
};

add_shortcode('latest_blog', 'nextgreen_latest_blog');


// Gallery
function nextgreen_gallery( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'gallery_style' => 'style_one',
      'order' => 'ASC',
      'post_per_page' => '-1',
   ), $atts ) );
   
   ob_start(); ?>

  <?php if ($gallery_style == 'style_one') { ?>
   <div class="text-center clearfix">
      <nav class="portfolio-filter">
          <ul>
      
            <li><a href="#" data-filter="*"><i class="fa fa-filter"></i> All Items</a></li>

            <?php  $gallery_menu_terms = get_terms( array(
                'taxonomy' => 'gallery_category',
                'hide_empty' => false,  
            ) ); 
            
            foreach ( $gallery_menu_terms as $gallery_menu_term ) { ?>
            <li><a href="#" data-filter=".<?php echo esc_attr( $gallery_menu_term->slug ) ?>"><?php echo esc_html( $gallery_menu_term->name ) ?></a></li>

            <?php } ?>

        </ul>
      </nav>
    </div>    
    <?php } ?>

     <div class="portfolio">

      <?php

      $gallery = new WP_Query( array( 
         'post_type' => 'gallery',
         'posts_per_page' => $post_per_page,
         'order' => $order,
      ));

      /* Start the Loop */
      while ( $gallery->have_posts() ) : $gallery->the_post(); 

        $gallery_terms = get_the_terms( get_the_ID() , 'gallery_category' );

        ?>
        
        <?php if ($gallery_style == 'style_one') { ?>

          <div class="pitem entry <?php foreach ($gallery_terms as $gallery_term) { echo esc_attr( $gallery_term->slug ); } ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>" class="img-responsive">
            <div class="magnifier">
                <div class="buttons">
                    <a data-rel="prettyPhoto" href="<?php echo get_the_post_thumbnail_url(); ?>" class="st" rel="bookmark"><span class="fa fa-search"></span></a>
                    <a class="st" rel="bookmark" href="<?php the_permalink() ?>"><span class="fa fa-link"></span></a>
                </div>
            </div><!-- end magnifier -->
        </div>

        <?php } elseif ($gallery_style == 'style_two') { ?>

          <div class="col-md-3 col-sm-3 shop-item">
            <div class="entry">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>" class="img-responsive">
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st" rel="bookmark" data-rel="prettyPhoto" href="<?php echo get_the_post_thumbnail_url(); ?>"><span class="fa fa-search"></span></a>
                        <a class="st" rel="bookmark" href="<?php the_permalink() ?>"><span class="fa fa-link"></span></a>
                    </div>
                </div><!-- end magnifier -->
            </div><!-- end entry -->
            <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            <small><?php foreach ($gallery_terms as $gallery_term) { echo esc_html( $gallery_term->name ); } ?></small>
        </div><!-- end gallery-item -->

        <?php } elseif ($gallery_style == 'style_three') { ?>

          <div class="col-md-4 col-sm-4 shop-item">
            <div class="entry">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>" class="img-responsive">
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st" rel="bookmark" data-rel="prettyPhoto" href="<?php echo get_the_post_thumbnail_url(); ?>"><span class="fa fa-search"></span></a>
                        <a class="st" rel="bookmark" href="<?php the_permalink() ?>"><span class="fa fa-link"></span></a>
                    </div>
                </div><!-- end magnifier -->
            </div><!-- end entry -->
            <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
            <small><?php foreach ($gallery_terms as $gallery_term) { echo esc_attr( $gallery_term->name ); } ?></small>
        </div><!-- end gallery-item -->

        <?php } ?>

      <?php endwhile; wp_reset_postdata(); ?>
      </div>
  <?php
   return ob_get_clean();
};

add_shortcode('gallery', 'nextgreen_gallery');


// Shop
function nextgreen_shop( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'order' => 'ASC',
      'post_per_page' => '-1',
   ), $atts ) );
   
   ob_start(); ?>

    <div class="row module-wrapper home-shop shop-layout text-center">
    <?php

    $shop = new WP_Query( array( 
       'post_type' => 'product',
       'posts_per_page' => $post_per_page,
       'order' => $order,
    ));

    /* Start the Loop */
    while ( $shop->have_posts() ) : $shop->the_post(); 

    global $product;
    ?>
        <div class="col-md-3 col-sm-3 shop-item">
            <div class="entry">
                <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
                <div class="magnifier">
                    <div class="buttons">
                        <a class="st" rel="bookmark" href="<?php echo esc_url( $product->add_to_cart_url()); ?>"><span class="fa fa-shopping-cart"></span></a>
                        <a class="st" rel="bookmark" href="<?php the_permalink() ?>"><span class="fa fa-link"></span></a>
                    </div>
                </div><!-- end magnifier -->
            </div><!-- end entry -->
            <a href="<?php the_permalink() ?>"><?php woocommerce_template_loop_product_title() ?></a>
            <small><?php woocommerce_template_loop_price() ?></small>
            <div class="woocommerce">
                <?php woocommerce_template_loop_rating() ?>
            </div>
        </div><!-- end shop_item -->
    <?php endwhile; wp_reset_postdata(); ?>
    </div>
  <?php
   return ob_get_clean();
};

add_shortcode('shop', 'nextgreen_shop');


// Testimonials
function nextgreen_testimonials( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'group' => ''
   ), $atts ) );
   
   ob_start();

   $group =  vc_param_group_parse_atts( $group );

    ?>

  <div class="container">
    <div class="row">  
        <div class="col-md-10 col-md-offset-1">
            <div class="row testimonials home-testimonials">
      <?php foreach ($group as $key => $value):

        $profileimg = $group[$key]['profile_image'];

        $image = wp_get_attachment_image_src( $profileimg , "nextgreen-testimolial-150x150");
        $imgSrc = $image[0];

      ?>
            <div class="col-sm-4 testimonial">
                <blockquote>
                    <p class="clients-words"><?php echo esc_html($group[$key]['openion']); ?>.</p>
                    <span class="clients-name text-primary">— <?php echo esc_html($group[$key]['name']); ?></span>
                    <img class="img-circle img-thumbnail" src="<?php echo esc_url($imgSrc); ?>" alt="<?php echo esc_attr($group[$key]['name']); ?>">
                </blockquote>
            </div>
      <?php endforeach; $key++ ?>
        </div>  
      </div>
    </div>
  </div>
  <?php
   return ob_get_clean();
};

add_shortcode('testimonials', 'nextgreen_testimonials');



// pricing tables
function nextgreen_pricing_tables( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'title' => '',
      'price' => '',
      'group' => '',
      'btn' => '',
      'url' => ''
   ), $atts ) );
   
   ob_start();

   $group =  vc_param_group_parse_atts( $group );

    ?>

  <div class="pricing-tables">
      <div class="plan">
          <div class="head">
              <h2><?php echo esc_html( $title ) ?></h2>
          </div>  
          <div class="price">
              <h3><span class="symbol">$</span><?php echo esc_html( $price ) ?></h3>
              <h4>per serving</h4>
          </div>
          <ul class="item-list">
            <?php foreach ($group as $key => $value): ?>
              <li><strong><?php echo esc_html($group[$key]['bold']); ?></strong> <?php echo esc_html($group[$key]['normal']); ?></li>
            <?php endforeach; $key++ ?>
          </ul>
          <a href="<?php echo esc_url( $url ) ?>" class="btn btn-primary"><?php echo esc_html( $btn ) ?></a>
      </div>
  </div>
  <?php
   return ob_get_clean();
};

add_shortcode('pricing_tables', 'nextgreen_pricing_tables');


// Call to action
function nextgreen_calltoaction( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'bgimage' => '',
      'title' => '',
      'desc' => '',
      'actionimg' => '',
      'call_style' => 'style_one',
      'btn_text_1' => '',
      'btn_url_1' => '',
      'btn_text_2' => '',
      'btn_url_2' => '',
   ), $atts ) );
   
   ob_start();

    $image = wp_get_attachment_image_src( $bgimage , "full");
    $imgSrc = $image[0];

    $acimage = wp_get_attachment_image_src( $actionimg , "full");
    $acimgSrc = $acimage[0];
    ?>

    <?php if ($call_style == 'style_one'){ ?>
    <section class="section darkbg fullscreen paralbackground parallax" style="background-image:url('<?php echo esc_url( $imgSrc ) ?>');" data-img-width="1688" data-img-height="1125" data-diff="100">
          <div class="overlay customoverlay"></div>
          <div class="container">
              <div class="row text-center">
                  <div class="col-md-7">
                      <div class="videobg text-left next-call-us">
                          <h1><?php echo esc_html( $title ) ?></h1>
                          <p><?php echo esc_html( $desc ) ?></p>
                          <a href="<?php echo esc_url( $btn_url_1 ) ?>" class="btn btn-default"><?php echo esc_html( $btn_text_1 ) ?></a> 
                          <a href="<?php echo esc_url( $btn_url_2 ) ?>" class="btn btn-default"><?php echo esc_html( $btn_text_2 ) ?></a> 
                      </div>
                  </div><!-- end col -->
                  <div class="col-md-5">
                       <div class="text-left image-center">
                          <img src="<?php echo esc_url($acimgSrc) ?>" alt="<?php echo esc_html( $title ) ?>" class="img-responsive">
                      </div>
                  </div>
              </div><!-- end row -->
          </div><!-- end container -->
      </section><!-- end section -->
    <?php } elseif ($call_style == 'style_two') { ?>
      <section class="section darkbg fullscreen paralbackground parallax" style="background-image:url('<?php echo esc_url( $imgSrc ) ?>');" data-img-width="1688" data-img-height="1125" data-diff="100">
          <div class="overlay customoverlay"></div>
          <div class="container">
              <div class="row text-center">
                  <div class="col-md-5">
                       <div class="text-center image-center">
                          <img src="<?php echo esc_url($acimgSrc) ?>" alt="<?php echo esc_html( $title ) ?>" class="img-responsive">
                      </div>
                  </div>
                  <div class="col-md-7">
                      <div class="videobg text-right">
                          <h1><?php echo esc_html( $title ) ?></h1>
                          <p><?php echo esc_html( $desc ) ?></p>
                          <a href="<?php echo esc_url( $btn_url_1 ) ?>" class="btn btn-default"><?php echo esc_html( $btn_text_1 ) ?></a> 
                          <a href="<?php echo esc_url( $btn_url_2 ) ?>" class="btn btn-default"><?php echo esc_html( $btn_text_2 ) ?></a> 
                      </div>
                  </div><!-- end col -->
              </div><!-- end row -->
          </div><!-- end container -->
      </section><!-- end section -->
      

    <?php }
     return ob_get_clean();
};

add_shortcode('calltoaction', 'nextgreen_calltoaction');

// Profile Card
function nextgreen_profile_card( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'profile_image' => '',
      'name' => '',
      'designation' => '',
      'group' => ''
   ), $atts ) );
   
   ob_start(); 

   $image = wp_get_attachment_image_src( $profile_image , "nextgreen-profile-260x280");
   $imgSrc = $image[0];
   $group =  vc_param_group_parse_atts( $group );

    ?>

    <div class="profile-card">
      <img src="<?php echo esc_url( $imgSrc ) ?>" alt="<?php echo esc_html( $name ); ?>">
      <div class="profile-card-content">
        <?php if ($designation): ?>
          <div class="text-center">
            <span><?php echo esc_html( $designation ); ?></span>
          </div>
        <?php endif ?>
        <h5><?php echo esc_html( $name ); ?></h5>
        <ul class="list-inline">
          <?php foreach ($group as $key => $value): ?>
            <li class="list-inline-item"><a href="<?php echo esc_url( $group[$key]['btn_url'] ); ?>"><i class="fa fa-lg <?php echo esc_attr( $group[$key]['icon'] ); ?>"></i></a></li>
          <?php endforeach; $key++ ?>
        </ul>
      </div>
      
    </div>

  <?php
   return ob_get_clean();
};

add_shortcode('profile_card', 'nextgreen_profile_card');


// Tabs
function nextgreen_tabs( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'group' => ''
   ), $atts ) );
   
   ob_start(); 

   $group =  vc_param_group_parse_atts( $group );

    ?>

  <div class="tabbed-widget">
      <ul class="nav nav-tabs row nopadding">
        <?php foreach ($group as $key => $value): ?>
          <li class="col-md-3 col-sm-6 col-xs-12 nopadding"><a data-toggle="tab" href="#menu<?php echo esc_attr($key) ?>"><?php echo esc_attr( $group[$key]['menu_title'] ) ?></a></li>
        <?php endforeach; $key++ ?>
      </ul>

      <div class="tab-content row">

        <?php foreach ($group as $key => $value): 

          $tabimg = $group[$key]['img'];
          $image = wp_get_attachment_image_src( $tabimg , "nextgreen-icon-140x140");
          $imgSrc = $image[0];
          $video = $group[$key]['youtube']; ?>
          
        <div id="menu<?php echo esc_attr($key) ?>" class="tab-pane fade">
          <?php if ($video): ?>
            <div id="videoyoutube" class="<?php echo esc_attr( $group[$key]['img_align'] ) ?>">
                <iframe width="370" height="208" src="<?php echo esc_url( $video ) ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>
          <?php else: ?>
            <img src="<?php echo esc_url( $imgSrc ) ?>" class="<?php echo esc_attr( $group[$key]['img_align'] ) ?>" alt="<?php echo esc_attr( $group[$key]['menu_title'] ) ?>">
            <p>
          <?php endif ?>
            
          <?php echo esc_html( $group[$key]['text'] ) ?></p>
        </div>
          


        <?php endforeach; $key++ ?>
          
      </div>
  </div><!-- end tabbed-widget -->

  <?php
   return ob_get_clean();
};

add_shortcode('tabs', 'nextgreen_tabs');


// Map
function nextgreen_map( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'lat' => '-37.801578',
      'long' => '145.060508',
      'title' => '',
      'desc' => '',
      'icon' => ''
   ), $atts ) );
   
   ob_start();

   $image = wp_get_attachment_image_src( $icon , "full");
   $imgSrc = $image[0];

    ?>

  <div id="map" data-lat="<?php echo esc_attr( $lat ) ?>" data-long="<?php echo esc_attr( $long ) ?>" data-info='<div class="infobox"><h3 class="title"><?php echo esc_attr( $title ) ?></h3><span><?php echo esc_attr( $desc ) ?></span></div>' data-icon="<?php echo esc_attr( $imgSrc ) ?>"></div>

  <?php
   return ob_get_clean();
};

add_shortcode('map', 'nextgreen_map');


// Working Hours
function nextgreen_workinghours( $atts, $content = null  ) {
   extract( shortcode_atts( array(
      'group' => ''
   ), $atts ) );
   
   ob_start(); 

   $group =  vc_param_group_parse_atts( $group );

    ?>


  <?php if ($group): ?>
  <div class="workinghours">
      <ul>
          <?php foreach ($group as $key => $value): ?>
            <li><?php echo esc_html( $group[$key]['title'] ) ?> <span><?php echo esc_html( $group[$key]['value'] ) ?></span></li>
          <?php endforeach; $key++ ?>
      </ul>
  <?php endif ?>
  </div>
  <?php
   return ob_get_clean();
};

add_shortcode('workinghours', 'nextgreen_workinghours');
