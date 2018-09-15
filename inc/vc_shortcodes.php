<?php
add_action( 'vc_before_init', 'nextgreen_integrateWithVC' );
function nextgreen_integrateWithVC() {
  
   //section title
   vc_map( array(
      "name" => __( "General Title", "nextgreen" ),
      "base" => "general_title",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Title", "nextgreen" ),
            "param_name" => "title",
            "admin_label" => true,
          ),
         array(
            "type" => "textarea",
            "heading" => __( "Title Description", "nextgreen" ),
            "param_name" => "description",
            "admin_label" => true,
         )
      )
   ) );  

   //Topbar
   vc_map( array(
      "name" => __( "Topbar", "nextgreen" ),
      "base" => "topbar",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
   ) );

   //Welcome Message
   vc_map( array(
      "name" => __( "Welcome Message", "nextgreen" ),
      "base" => "welcomemessage",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Title", "nextgreen" ),
            "param_name" => "title",
            "admin_label" => true
          ),
         array(
            "type" => "textarea",
            "heading" => __( "Sub Title", "nextgreen" ),
            "param_name" => "sub_title",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Button", "nextgreen" ),
            "param_name" => "btn_one",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Button URL", "nextgreen" ),
            "param_name" => "btn_url",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Button", "nextgreen" ),
            "param_name" => "btn_two",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Button URL", "nextgreen" ),
            "param_name" => "btn_two_url",
            "admin_label" => true
          )
      )
   ) );


   //We Offer
   vc_map( array(
      "name" => __( "We Offer", "nextgreen" ),
      "base" => "we_offer",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "attach_image",
            "heading" => __( "Icon", "nextgreen" ),
            "param_name" => "icon",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Title", "nextgreen" ),
            "param_name" => "title",
            "admin_label" => true
          ),
         array(
            "type" => "textarea",
            "heading" => __( "Description", "nextgreen" ),
            "param_name" => "desc",
            "admin_label" => true
          ),
         array(
            "type" => "dropdown",
            "heading" => __( "Text Color", "nextgreen" ),
            "param_name" => "color",
            "admin_label" => true,
            'value'       => array(
              'Default'  => 'default',
              'White' => 'white',
            ),
            'std'         => 'default',
         ),
      )
   ) );

   //Services
   vc_map( array(
      "name" => __( "Services", "nextgreen" ),
      "base" => "services",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __( "Post Order", "nextgreen" ),
            "param_name" => "order",
            "admin_label" => true,
            'value'       => array(
              'ASC'  => 'ASC',
              'DESC' => 'DESC',
            ),
            'std'         => 'DESC',
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Post Per Page", "nextgreen" ),
            "param_name" => "service_per_page",
            "admin_label" => true,
          )
      )
   ) );

   //Services 2
   vc_map( array(
      "name" => __( "Services v2", "nextgreen" ),
      "base" => "services_2",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "attach_image",
            "heading" => __( "Icon", "nextgreen" ),
            "param_name" => "icon",
            "admin_label" => true,
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Title", "nextgreen" ),
            "param_name" => "title",
            "admin_label" => true,
          ),
         array(
            "type" => "textarea",
            "heading" => __( "Text", "nextgreen" ),
            "param_name" => "text",
            "admin_label" => true,
          )
      )
   ) );

   //Team
   vc_map( array(
      "name" => __( "Team", "nextgreen" ),
      "base" => "team",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __( "Post Order", "nextgreen" ),
            "param_name" => "order",
            "admin_label" => true,
            'value'       => array(
              'ASC'  => 'ASC',
              'DESC' => 'DESC',
            ),
            'std'         => 'DESC',
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Post Per Page", "nextgreen" ),
            "param_name" => "team_per_page",
            "admin_label" => true,
          )
      )
   ) );

  //Latest Blog
  vc_map( array(
      "name" => __( "Latest Blog", "nextgreen" ),
      "base" => "latest_blog",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __( "Post Order", "nextgreen" ),
            "param_name" => "order",
            "admin_label" => true,
            'value'       => array(
              'ASC'  => 'ASC',
              'DESC' => 'DESC',
            ),
            'std'         => 'DESC', // Your default value
            'description' => __( 'Set post order', 'nextgreen' )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Post Per Page", "nextgreen" ),
            "param_name" => "post_per_page",
            "admin_label" => true
          )
      )
   ) );

  //Gallery
  vc_map( array(
      "name" => __( "Gallery", "nextgreen" ),
      "base" => "gallery",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __( "Gallery Style", "nextgreen" ),
            "param_name" => "gallery_style",
            "admin_label" => true,
            'value'       => array(
              'Style One'  => 'style_one',
              'Style Two' => 'style_two',
              'Style Three' => 'style_three',
            ),
            'std'         => 'style_one', // Your default value
            'description' => __( 'Select Gallery Style', 'nextgreen' )
         ),
         array(
            "type" => "dropdown",
            "heading" => __( "Post Order", "nextgreen" ),
            "param_name" => "order",
            "admin_label" => true,
            'value'       => array(
              'ASC'  => 'ASC',
              'DESC' => 'DESC',
            ),
            'std'         => 'DESC', // Your default value
            'description' => __( 'Set post order', 'nextgreen' )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Post Per Page", "nextgreen" ),
            "param_name" => "post_per_page",
            "admin_label" => true
          )
      )
   ) );


  //Shop
  vc_map( array(
      "name" => __( "Shop", "nextgreen" ),
      "base" => "shop",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __( "Post Order", "nextgreen" ),
            "param_name" => "order",
            "admin_label" => true,
            'value'       => array(
              'ASC'  => 'ASC',
              'DESC' => 'DESC',
            ),
            'std'         => 'DESC', // Your default value
            'description' => __( 'Set post order', 'nextgreen' )
         ),
         array(
            "type" => "textfield",
            "heading" => __( "Post Per Page", "nextgreen" ),
            "param_name" => "post_per_page",
            "admin_label" => true
          )
      )
   ) );

   // Testimonials
   vc_map( array(
      "name" => __( "Testimonials", "nextgreen" ),
      "base" => "testimonials",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
          'type' => 'param_group',
          'param_name' => 'group',
          "heading" => __( "Testimonials", "nextgreen" ),
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  "type" => "attach_image",
                  "heading" => __( "Profile Image", "nextgreen" ),
                  "param_name" => "profile_image",
                  "admin_label" => true
                ),
               array(
                  "type" => "textarea",
                  "heading" => __( "Openion", "nextgreen" ),
                  "param_name" => "openion",
                  "admin_label" => true
                ),
               array(
                  "type" => "textfield",
                  "heading" => __( "Name", "nextgreen" ),
                  "param_name" => "name",
                  "admin_label" => true
                )
          )
        ),
      )
   ) );   

   
   // Pricing Tables
   vc_map( array(
      "name" => __( "Pricing Tables", "nextgreen" ),
      "base" => "pricing_tables",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
       array(
          "type" => "textfield",
          "heading" => __( "Title", "nextgreen" ),
          "param_name" => "title",
          "admin_label" => true
        ),
       array(
          "type" => "textfield",
          "heading" => __( "Price", "nextgreen" ),
          "param_name" => "price",
          "admin_label" => true
        ),
         array(
          'type' => 'param_group',
          'param_name' => 'group',
          "heading" => __( "Service list", "nextgreen" ),
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  "type" => "textfield",
                  "heading" => __( "Bold text", "nextgreen" ),
                  "param_name" => "bold",
                  "admin_label" => true
                ),
               array(
                  "type" => "textfield",
                  "heading" => __( "Normal Text", "nextgreen" ),
                  "param_name" => "normal",
                  "admin_label" => true
                )
          )
        ),
       array(
          "type" => "textfield",
          "heading" => __( "button text", "nextgreen" ),
          "param_name" => "btn",
          "admin_label" => true
        ),
       array(
          "type" => "textfield",
          "heading" => __( "button URL", "nextgreen" ),
          "param_name" => "url",
          "admin_label" => true
        )
      )
   ) );   

   // Call to action
   vc_map( array(
      "name" => __( "Call to Action", "nextgreen" ),
      "base" => "calltoaction",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "dropdown",
            "heading" => __( "Style", "nextgreen" ),
            "param_name" => "call_style",
            "admin_label" => true,
            'value'       => array(
              'Style One'  => 'style_one',
              'Style Two' => 'style_two',
            ),
            'std'         => 'style_one', // Your default value
            'description' => __( 'Select Style', 'nextgreen' )
         ),
         array(
            "type" => "attach_image",
            "heading" => __( "Background Image", "nextgreen" ),
            "param_name" => "bgimage",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Title", "nextgreen" ),
            "param_name" => "title",
            "admin_label" => true
          ),
         array(
            "type" => "textarea",
            "heading" => __( "Description", "nextgreen" ),
            "param_name" => "desc",
            "admin_label" => true
          ),
         array(
            "type" => "attach_image",
            "heading" => __( "Action Image", "nextgreen" ),
            "param_name" => "actionimg",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Button Text", "nextgreen" ),
            "param_name" => "btn_text_1",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Button URL", "nextgreen" ),
            "param_name" => "btn_url_1",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Button Text", "nextgreen" ),
            "param_name" => "btn_text_2",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Button URL", "nextgreen" ),
            "param_name" => "btn_url_2",
            "admin_label" => true
          ),
      )
   ) );   

   // Profile Card
   vc_map( array(
      "name" => __( "Profile Card", "nextgreen" ),
      "base" => "profile_card",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
        array(
            "type" => "attach_image",
            "heading" => __( "Profile Image", "nextgreen" ),
            "param_name" => "profile_image",
            "admin_label" => true
          ),
        array(
            "type" => "textfield",
            "heading" => __( "Name", "nextgreen" ),
            "param_name" => "name",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Designation", "nextgreen" ),
            "param_name" => "designation",
            "admin_label" => true
          ),
         array(
          'type' => 'param_group',
          'param_name' => 'group',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  "type" => "textfield",
                  "heading" => __( "Icon", "nextgreen" ),
                  "param_name" => "icon",
                  "admin_label" => true
                ),
               array(
                  "type" => "textfield",
                  "heading" => __( "Button URL", "nextgreen" ),
                  "param_name" => "btn_url",
                  "admin_label" => true
                )
          )
        ),
      )
   ) );

   // Tabs
   vc_map( array(
      "name" => __( "Tabs", "nextgreen" ),
      "base" => "tabs",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
          'type' => 'param_group',
          'param_name' => 'group',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  "type" => "attach_image",
                  "heading" => __( "Image", "nextgreen" ),
                  "param_name" => "img",
                  "admin_label" => true
                ),               
               array(
                  "type" => "dropdown",
                  "heading" => __( "Image Align", "nextgreen" ),
                  "param_name" => "img_align",
                  "admin_label" => true,
                  'value' => array(
                    __( 'Align Left',  "nextgreen"  ) => 'alignleft',
                    __( 'Align Right',  "nextgreen"  ) => 'alignright',
                  ),
               ),
               array(
                  "type" => "textfield",
                  "heading" => __( "Youtube URL", "nextgreen" ),
                  "param_name" => "youtube",
                  "admin_label" => true
                ),
               array(
                  "type" => "textfield",
                  "heading" => __( "Menu Title", "nextgreen" ),
                  "param_name" => "menu_title",
                  "admin_label" => true
                ),
               array(
                  "type" => "textarea",
                  "heading" => __( "Textarea", "nextgreen" ),
                  "param_name" => "text",
                )
          )
        ),
      )
   ) );


   // Map
   vc_map( array(
      "name" => __( "Map", "nextgreen" ),
      "base" => "map",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Latitude", "nextgreen" ),
            "param_name" => "lat",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Longitude", "nextgreen" ),
            "param_name" => "long",
            "admin_label" => true
          ),
         array(
            "type" => "textfield",
            "heading" => __( "Title", "nextgreen" ),
            "param_name" => "title",
            "admin_label" => true
          ),
         array(
            "type" => "textarea",
            "heading" => __( "Description", "nextgreen" ),
            "param_name" => "desc",
            "admin_label" => true
          ),
         array(
            "type" => "attach_image",
            "heading" => __( "Icon", "nextgreen" ),
            "param_name" => "icon",
            "admin_label" => true
          )
      )
   ) );

   // Working Hours
   vc_map( array(
      "name" => __( "Working Hours", "nextgreen" ),
      "base" => "workinghours",
      "category" => __( "NextGreen", "nextgreen"),
      "icon" =>  plugin_dir_url( dirname( __FILE__ ) ). "assets/images/thumbnail.png",
      "params" => array(
         array(
          'type' => 'param_group',
          "heading" => __( "Working Hours Info", "nextgreen" ),
          'param_name' => 'group',
          // Note params is mapped inside param-group:
          'params' => array(
               array(
                  "type" => "textfield",
                  "heading" => __( "Title", "nextgreen" ),
                  "param_name" => "title",
                  "admin_label" => true
                ),
               array(
                  "type" => "textfield",
                  "heading" => __( "Value", "nextgreen" ),
                  "param_name" => "value",
                  "admin_label" => true
                )
          )
        ),
      )
   ) );

   
}
?>