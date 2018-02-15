<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 14.02.18
 * Time: 10:54
 */?>

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
                    <input type="text" placeholder="Search Book.." />
                    <div class="searchIcon">
                        <span class="icon-search_ic"></span>
                    </div>
                </div>
            </div>
            <div class="poster">
                <img src="<?php echo get_template_directory_uri();  ?>/img/florian-klauer-489.png"/>
            </div>
        </div>
        <div id="books">
            <div class="container">
                <div class="items">
                    <?php
                    for($i = 0;$i<9;$i++){
                        ?>
                        <div class="item">
                            <div class="book">
                                <div class="title">Package Design </div>
                                <div class="desc">
                                    By Jean Jacques & Brigitte Evard
                                </div>
                                <div class="img">
                                    <img src="<?php echo get_template_directory_uri();  ?>/img/cover.png"/>
                                </div>
                                <div class="controls">
                                    <div class="price">$230</div>
                                    <div class="button">
                                        Add to cart <span class="icon-btn_arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="hovered">
                                <div class="title">Package Design </div>
                                <div class="desc">
                                    Excepteur sint occaecat cupida
                                    tat non proident, sunt inculpaqui
                                    officia deserunt mollit.
                                    <br><br>
                                    Ut enim ad minim veniam, nost-
                                    rud exercitation ullamco laboris

                                    nisi ut ullamco.
                                </div>
                                <div class="controls">
                                    <div class="price">$230</div>
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
        <div id="story">
            <div class="container">
                <div class="item">
                    <div class="left">
                        <img src="<?php echo get_template_directory_uri();  ?>/img/tomas-anton-escobar-502621.png"/>
                    </div>
                </div>
                <div class="item">
                    <div class="right">
                        <div class="title">Our story</div>
                        <div class="desc">
                            Lorem ipsum dolor sit amet, consectetur adipisc
                            elit, sed do eiusmod tempor incididunt ut labore  dolore magna aliqua. Ut enim ad minim veniam,  nostrud exercitation ullamco laboris nisi ut aliquip
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="soc">
                            <div class="ttl">Follow us</div>
                            <a href="#">
                                <span class="icon-In_ic"></span>
                            </a>
                            <a href="#">
                                <span class="icon-Fb_ic"></span>
                            </a>
                            <a href="#">
                                <span class="icon-tw_ic2"></span>
                            </a>
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
                        <span>+ (972) 457 76 846</span>
                    </div>
                    <div class="item">
                        <span>store@gmail.com</span>
                    </div>
                </div>
                <div class="contact-form">
                    <div class="title-contact">
                        <div>
                            <input type="text" placeholder="Name">
                        </div>
                        <div>
                            <input type="text" placeholder="E-mail">
                        </div>
                    </div>
                    <input class="sub" tyle="text" placeholder="Subject"/>
                    <textarea placeholder="Tell"></textarea>
                    <div class="controll">
                        <div class="button">Send <span class="icon-btn_arrow"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
