<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>

<head>
    <meta charset="UTF-8">
    <title>ZiZurz Website Template</title>
    <?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TGQHKPL1DL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TGQHKPL1DL');
</script>
</head>

<body>
    <div id="header">
        <div class="section">
            <div class="logo">
                <a href="index.html">zizurz</a>
            </div>
            <ul>
                <li class="selected">
                    <a href="index.html">home</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li>
                    <a href="hairstyle.html">hairstyles</a>
                </li>
                <li>
                    <a href="news.html">news</a>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
            </ul>
        </div>
        <div class="article">
            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assests/images/great-hairstyle.jpg" alt="">
            <h1>Great hairstyle comes from the experts.</h1>
        </div>
    </div>