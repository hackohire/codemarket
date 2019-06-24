<?php
/**
 * Marketify child theme.
 */
function marketify_child_styles() {
    wp_enqueue_style( 'marketify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'marketify_child_styles', 999 );

/** Place any new code below this line */

function slider_buttons(){
if(!is_user_logged_in()){
    $link = site_url().'/vendor-login-registration';
}else{
    $user_id = get_current_user_id();
    $is_vendor = EDD_FES()->vendors->user_is_status( 'approved', $user_id );
    if($is_vendor){
        $link = site_url().'/vendor-dashboard';
    }else{
        $link = site_url().'/vendor-login-registration';
    }
}    
?>
<p><a class="button" style="border-color: #1176ef;" href="/downloads">Shop Now</a> <a class="button" style="border-color: #1176ef;" href="<?php echo $link; ?>" title="Start Selling">Start Selling</a></p>
<?php
}
add_shortcode('slider_buttons','slider_buttons');
