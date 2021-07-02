<!Doctype html>

<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RandomProjekts</title>
  <link rel="icon" href="/images/logo.ico">
  <link rel="stylesheet" media="screen and (max-width: 599px)" href="css/index/index_mobile.css">
  <link rel="stylesheet" media="screen and (min-width: 600px)" href="css/index/index.css">
  <link rel="stylesheet" media="screen and (min-width: 600px) and (min-aspect-ratio: 16/9)" href="css/index/index_wide.css">
  <script src="script/index.js"></script>
 </head>
 <body>
<?php
    $page = "index";
    include 'script/lang.php';
?>
  <div class="active_site"></div>
  <iframe src="header.html"></iframe>
  
  <!-- Lang menu start -->
  <form action="" method="post" class="langmenu" tabindex="0">
   <img class="flag" src="/images/flag_<?php echo $bwlang; ?>.png" alt="flag <?php echo $bwlang; ?>">
   <?php foreach($accept_lang as $lang) { if ($lang != $bwlang) { ?>
    <div><input type="submit" name="<?php echo $lang; ?>" value="" id="in-<?php echo $lang; ?>"><label for="in-<?php echo $lang; ?>"><img class="flag" src="images/flag_<?php echo $lang; ?>.png" alt="flag <?php echo $lang; ?>"></label></div>
   <?php }} ?>
  </form>
  <div id="chooseLang"></div>
  <!-- Lang menu end -->
  
  <section>
   <div class="heading">
    <p><?php echo $item[$c++] ?></p>
    <p>RandomProjekts</p>
    <a href="news.html">>> <?php echo $item[$c++] ?></a>
   </div>
   <div class="buttons"><a href="#about"><?php echo $item[$c++] ?></a><a href="#imgs"><?php echo $item[$c++] ?></a><a href="news.html"><?php echo $item[$c++] ?></a></div>
   <div class="top-background"><div></div><div></div><div></div><div></div></div>
  </section>
  <section>
   <div class="hr"><div></div><div></div></div>
   <div class="cover_bg"></div>
   <div class="slide" id="imgs">
   </div>
   <div id="about" class="about">
    <p><?php echo $item[$c++] ?></p>
    <p><?php echo $item[$c] ?></p>
   </div>
  </section>
 </body>
</html>
