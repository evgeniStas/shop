<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 02.02.18
 * Time: 16:29
 */
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<?php wp_head(); ?>
<script>
    var ajax_url = '<?php echo admin_url('admin-ajax.php');?>';
</script>
