<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/3/1
 * Time: 15:59
 */
$uri = get_template_directory_uri();
get_template_part('assets/template/link', 'template');
get_template_part('assets/template/welcome/index');
get_footer();
?>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo $uri . '/assets/js/jquery/jquery-2.2.4.min.js'; ?>"></script>
<!-- Popper js -->
<script src="<?php echo $uri . '/assets/js/bootstrap/popper.min.js'; ?>"></script>
<!-- Bootstrap js -->
<script src="<?php echo $uri . '/assets/js/bootstrap/bootstrap.min.js'; ?>"></script>
<!-- All Plugins js -->
<script src="<?php echo $uri . '/assets/js/plugins/plugins.js'; ?>"></script>
<!-- Active js -->
<script src="<?php echo $uri . '/assets/js/active.js'; ?>"></script>
</body>

</html>

