<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 14.02.18
 * Time: 10:54
 *
 */
$post_id = 31;

$meta_index = get_post_meta($post_id);
?>

<html>
<head>
    <?php get_header() ?>
</head>
<body>
    <div class="site-wrap">

        <div data-percent="100" class="grid">
            <div data-percent="100" class="line-1">
            </div>
            <div data-percent="100" class="line-2">
            </div>
            <div data-percent="100" class="line-3">
            </div>
            <div data-percent="100" class="line-4">
            </div>
        </div>

        <div class="main-menu">
            <div class="logo">
                <a href="#">
                    <?php
                    $meta_values = get_post_meta( 12,"logo");
                    $logo = wp_get_attachment_image_src($meta_values[0], 'full')[0];
                    ?>
                    <img src="<?php echo get_template_directory_uri();  ?>/swiego_logo_transp.png" alt="SWIEGO">
                </a>
            </div>
            <div class="lines">
                <span class="icon-cart_ic"></span>
            </div>
        </div>
        <div id="menu">
            <div class="left-menu">
                <div class="items">
                    <?php wp_nav_menu();?>
                </div>
                <div class="search">
                    <input id="search_input" type="text" placeholder="Search Book.." />
                    <div class="searchIcon">
                        <span class="icon-search_ic"></span>
                    </div>
                </div>
            </div>
            <?php
            $img = get_field('cover',$post_id);
            ?>
            <div class="poster" style="background: url(<?php echo $img["sizes"]["large"];  ?>);"></div>
        </div>
        <div id="books">
            <div class="container">
                <div class="items">

                    <?php
                    $args = array(  'post_type'=> 'books', 'posts_per_page' => 9, 'order' => 'ASC');
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
                    ?>
                </div>
                <div class="morebtn">
                    <div>See more <span class="icon-btn_arrow"></span></div>
                </div>
            </div>
        </div>
        <?php
        $img = get_field('our_story_photo',$post_id);
        ?>
        <div id="story">
            <div class="container">
                <div class="item">
                    <div class="left">
                        <img src="<?php echo  $img["sizes"]["large"];  ?>"/>
                    </div>
                </div>
                <div class="item">
                    <div class="right">
                        <div class="title"><?php the_field('our_story', $post_id); ?></div>
                        <div class="desc">
                            <?php the_field('our_story_text', $post_id); ?>
                        </div>
                        <div class="soc">
                            <div class="ttl">Follow us</div>
                            <?php
                            $args = array(  'post_type'=> 'social', 'posts_per_page' => -1);
                            $Social = get_posts( $args );
                            wp_reset_postdata();
                            foreach( $Social as $item ) {
                                setup_postdata($item);
                                $meta_values = get_post_meta( $item->ID );
                                ?>
                                    <a target="_blank" href="<?php echo $meta_values["link"][0];?>"><?php echo $meta_values["icon"][0];?></a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact">
            <div class="container">
                <div class="title">Contact</div>
                <div class="c-info">
                    <div class="item">
                        <span><?php the_field('phone', $post_id); ?></span>
                    </div>
                    <div class="item">
                        <span><?php the_field('email', $post_id); ?></span>
                    </div>
                </div>
                <div class="contact-form">
                    <div class="title-contact">
                        <div>
                            <input id="name" type="text" placeholder="Name">
                        </div>
                        <div>
                            <input id="email" type="text" placeholder="E-mail">
                        </div>
                    </div>
                    <input id="sub" class="sub" tyle="text" placeholder="Subject"/>
                    <textarea id="text" placeholder="Tell"></textarea>
                    <div class="controll">
                        <div id="sendContact" class="button">Send <span class="icon-btn_arrow"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
