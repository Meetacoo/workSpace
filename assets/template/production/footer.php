<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/2/27
 * Time: 18:59
 */
?>

<!-- ##### Footer Area Start ##### -->
<?php
get_template_part('assets/template/partner', 'template');
get_template_part('assets/template/welcome/production');
get_footer();
?>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/plugins/owl.carousel.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/container/partner.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/container/index.js'; ?>"></script>

<!-- Popper js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap/popper.min.js'; ?>"></script>
<!-- All Plugins js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/plugins/plugins.js'; ?>"></script>
<!-- Active js -->
<script src="<?php echo get_template_directory_uri() . '/assets/js/active.js'; ?>"></script>
</body>

</html>
