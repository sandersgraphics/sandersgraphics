<?php
# This file provides helper methods that are shared by plugins etc
# Author : HotCustard
function log_msg($message, $filename = 'log-messages.log') {
    if (WP_DEBUG === true) {
        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }
    }	
	$current = file_get_contents($filename);	// Open the file to get existing content
	$current .= "MESSAGE = $message\n";	// Append a new person to the file
	file_put_contents($filename, $current);	// Write the contents back to the file
	
}
function lines_to_list($input) {
	$out = '';	
	$lines = explode("\n", $input);
	if(count($lines) > 0){	
		$out .= "<ul>";		
		foreach ($lines as $line) {
			$out .= "<li>$line</li>";		
		}		
		$out .= "</ul>";
	} 
	echo $out; 
}

function string_startsWith($haystack, $needle)
{
    return !strncmp($haystack, $needle, strlen($needle));
}

function string_endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

function create_standard_posttype(
			$name, 
			$menu_position = 10, 
			$public = TRUE, 
			$override_plural = null,
			$supports = array( 'title', 'editor', 'excerpt', 'thumbnail' ),
            $icon = null,
            $show_in_menu = TRUE
			)
	{	

	$capitalized = ucwords(str_ireplace('-', ' ', $name));
	$plural = $override_plural == null ? $capitalized . 's' : $override_plural;

	$labels = array(
		'name' 					=> _x($plural, 'post type general name'),
	    'singular_name' 		=> _x($capitalized, 'post type singular name'),
	    'add_new' 				=> _x('Add New', $capitalized),
	    'add_new_item' 			=> __('Add New ' . $capitalized),
	    'edit_item' 			=> __('Edit ' . $capitalized),
	    'new_item' 				=> __('New ' . $capitalized),
	    'view_item' 			=> __('View ' . $capitalized),
	    'search_items' 			=> __('Search ' . $plural),
	    'not_found' 			=>  __('No ' . $plural . ' found'),
	    'not_found_in_trash' 	=> __('No ' . $plural . ' found in Trash'),
	    'parent_item_colon' 	=> ''
	);


    if($show_in_menu !== TRUE && strlen($show_in_menu) > 0){
        $show_in_menu = 'edit.php?post_type=' . $show_in_menu;
    }

	$args = array(
		'labels'				=> $labels,
		'public'				=> $public,
		'exclude_from_search'	=> FALSE,
		'show_ui'				=> TRUE,
		'query_var'				=> TRUE,
		'has_archive' 			=> TRUE,
		'rewrite' 				=> array(
            'slug' => strtolower($plural),
            'with_front' => false,
            'feed'=> true,
            'pages'=> true
        ),
		'capability_type'		=> 'post',
		'hierarchical'			=> FALSE,
		'menu_position'			=> $menu_position,
		'supports'				=> $supports,
		'show_in_nav_menus' 	=> TRUE,
        'show_in_menu'          => $show_in_menu,
		'yarpp_support'			=> TRUE,
        'menu_icon'             => $icon
	);

       #   echo "<br />Creating archive = " . strtolower($plural);
      #  var_dump($args);

	register_post_type( $name , $args );  
}
function create_standard_category(
        $id,
        $types,
        $name,
        $override_plural = null,
        $public = TRUE,
        $hierarchical = FALSE
    )
{
    $plural = $override_plural == null ? $name . 's' : $override_plural;

    $labels = array(
        'add_new_item' => __( 'Add New ' . $name ),
        'all_items' => __( 'All ' . $plural ),
        'edit_item' => __( 'Edit ' . $name ),
        'name' => __( $plural, 'taxonomy general name' ),
        'new_item_name' => __( 'New ' . $name ),
        'menu_name' => __( $plural ),
        'parent_item' => __( 'Parent ' . $name ),
        'parent_item_colon' => __( 'Parent ' . $name . ':' ),
        'singular_name' => __( $name, 'taxonomy singular name' ),
        'search_items' =>  __( 'Search ' . $plural ),
        'update_item' => __( 'Update ' . $name ),
    );


    register_taxonomy($id , $types, array(
        'public' => $public,
        'hierarchical' => $hierarchical,
        'has_archive' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true
    ));

    flush_rewrite_rules( false );
}

function add_meta_field($id, $name, $type = 'text', $desc = '', $options = null){

    $field = array(
        'name' => $name,
        'desc' => $desc,
        'id'   => $id,
        'type' => $type
    );

    if($options)
        return array_merge($field, $options);
    else
        return $field;
}
function add_meta_boxes($meta_boxes){
    foreach ( $meta_boxes as $meta_box )
        new RW_Meta_Box( $meta_box );
}

function show_map($postcode, $width = '100%', $height = '100%', $show_controls = TRUE, $zoom = 15) {
	if($postcode != ''):
        if(is_numeric($width))
            $width = $width . 'px';
        if(is_numeric($height))
            $height = $height . 'px';
        ?>
	<section class="property-map">
		<div id="map_holder" style="display:none;width: <?php echo $width;?>; height: <?php echo $height;?>;" >
			<div id="map_canvas" style="width:<?php echo $width;?>; height:<?php echo $height;?>"></div>
		</div>	
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqYfiM7jxAvaidUfsXb2AYZNC5oZVnX4Y&sensor=false">
		</script>
		<script type="text/javascript">

		  	jQuery(document).ready(function(){
		  		setTimeout(function(){
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode( { 'address': "<?php echo urlencode($postcode);?>,UK"}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            var location = results[0].geometry.location;
                            var mapOptions = {
                                zoom: <?php if(is_numeric($zoom)){ echo $zoom; }else { echo '15';}?> ,
                                center: location,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                <?php if(!$show_controls){ echo "disableDefaultUI: true";}?>
                            };
                            var property_map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                            marker = new google.maps.Marker({position: location, map: property_map});
                            return property_map;

                            jQuery('#map_holder').bind('resize', function() {
                                property_map.setCenter(location);
                            });
                        }
                    });
                    var map = document.getElementById("map_canvas");
		  			jQuery('#map_holder').fadeIn();
		  			google.maps.event.trigger(map, 'resize');
		  		},1000);
		  	});
		</script>
	</section>													
	<?php endif;
}
function menu_as_links($menu_name, $divider = '') {
    echo get_menu_as_links($menu_name, $divider);
}
function get_menu_as_links($menu_name, $divider = '') {
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

        $stripped_from_first = FALSE;
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
            if(!$stripped_from_first){
                $div_to_use = '';
                $stripped_from_first = TRUE;
            }
            else {
                $div_to_use = $divider;
            }
			$menu_list .= $div_to_use . '<a href="'. $url .'">'. $title . "</a>\n";
		}
	} 
	return $menu_list;
}
function get_months_between_two_timestamps($timestamp1, $timestamp2){
    date_default_timezone_set('Europe/London');  // required to set a timezone
    $date1 = new DateTime(date("Y-m-d", $timestamp1));
    $date2 = new DateTime(date("Y-m-d", $timestamp2));                          
    $diff = $date1->diff($date2);                
    return $diff->m;
}
function get_months_between_two_datetimes($date1, $date2){
    date_default_timezone_set('Europe/London');  // required to set a timezone                       
    $diff = $date1->diff($date2);                
    return $diff->m;
}

function handleFormFieldError($field_id, $errors){

    if(isset($field_id) && is_array($errors)){
        if(array_key_exists($field_id, $errors)){
            echo '<small class="error">';
            echo $errors[$field_id];
            echo '</small>';
        }
    }

}

function handleChecked($key, $array){
    return in_array($key, $array) ? ' checked="checked"' : '';
}

function paginate($wp_query) {
    $pagination = paginate_links( array(
        'base'      => add_query_arg( 'pagenum', '%#%' ),
        'format'    => '',
        'type'      => 'list',
        'show_all'  => true,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
        'total'     => $wp_query->max_num_pages,
        'current'   => isset( $_GET['pagenum'] ) ? intval( $_GET['pagenum'] ) : 1
    ) );

    if ( $pagination ) {
        echo $pagination;
    }
}



