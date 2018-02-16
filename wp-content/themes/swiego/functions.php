<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 14.02.18
 * Time: 14:31
 */

add_action('wp_ajax_contact', 'contact_callback');
function contact_callback() {
   echo "OK";
    wp_die();
}

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {
    $args = array(  'post_type'=> 'books',  'offset'=> 9, 'order' => 'ASC');
    $items = get_posts( $args );
    wp_reset_postdata();
    foreach( $items as $item ) {
        setup_postdata($item);
        $meta_values = get_post_meta($item->ID);
        $img = wp_get_attachment_image_src($meta_values["photo"][0]);
        ?>
        <div class="item">
            <div class="book">
                <div class="title"><?php echo $item->post_title;?></div>
                <div class="desc">
                    <?php echo $meta_values["description"][0];?>
                </div>
                <div class="img">
                    <img src="<?php echo $img[0];  ?>"/>
                </div>
                <div class="controls">
                    <div class="price">$<?php echo $meta_values["price"][0];?></div>
                    <div class="button">
                        Add to cart <span class="icon-btn_arrow"></span>
                    </div>
                </div>
            </div>
            <div class="hovered">
                <div class="title"><?php echo $item->post_title;?></div>
                <div class="desc">
                    <?php echo $item->post_content;?>
                </div>
                <div class="controls">
                    <div class="price">$<?php echo $meta_values["price"][0];?></div>
                    <div class="button">
                        Add to cart <span class="icon-btn_arrow"></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    wp_die();
}

add_action('wp_ajax_load_posts_search', 'load_posts_search_callback');
add_action('wp_ajax_nopriv_load_posts_search', 'load_posts_search_callback');

function load_posts_search_callback() {
    $search = $_REQUEST["search"];
    $posts_per_page = -1;
    if(!$search){
        $posts_per_page = 9;
    }
    $args = array(  'post_type'=> 'books',  'posts_per_page' => $posts_per_page, 's' => $search, 'order' => 'ASC');
    $items = get_posts( $args );
    wp_reset_postdata();
    foreach( $items as $item ) {
        setup_postdata($item);
        $meta_values = get_post_meta($item->ID);
        $img = wp_get_attachment_image_src($meta_values["photo"][0]);
        ?>
        <div class="item">
            <div class="book">
                <div class="title"><?php echo $item->post_title;?></div>
                <div class="desc">
                    <?php echo $meta_values["description"][0];?>
                </div>
                <div class="img">
                    <img src="<?php echo $img[0];  ?>"/>
                </div>
                <div class="controls">
                    <div class="price">$<?php echo $meta_values["price"][0];?></div>
                    <div class="button">
                        Add to cart <span class="icon-btn_arrow"></span>
                    </div>
                </div>
            </div>
            <div class="hovered">
                <div class="title"><?php echo $item->post_title;?></div>
                <div class="desc">
                    <?php echo $item->post_content;?>
                </div>
                <div class="controls">
                    <div class="price">$<?php echo $meta_values["price"][0];?></div>
                    <div class="button">
                        Add to cart <span class="icon-btn_arrow"></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    if(count($items)==0){
        ?>
        <h1 style="margin-top: 158px;">Not found</h1>
    <?php
    }
    wp_die();
}