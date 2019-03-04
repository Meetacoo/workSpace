<?php
/**
 * Created by IntelliJ IDEA.
 * User: 黄金芳
 * Date: 2019/3/1
 * Time: 15:59
 */
$uri = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>加入我们 - 上海迪付金融有限公司</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo $uri . '/assets/assets/img/core-img/favicon.ico'; ?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $uri . '/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo $uri . '/assets/css/common.css'; ?>">

</head>

<body>
<!-- Preloader -->
<?php
get_template_part('assets/template/preloader', 'template');
get_header();
get_template_part('assets/template/banner/joinUs');
?>
<!-- ##### Hero Area End ##### -->

