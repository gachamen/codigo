<?/* xml charset="UTF-8" / */?>


<!DOCTYPE html PUBLIC 
	"-//W3C//DTD XHTML 1.0 Strict//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"
>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Full Moon Template</title>    
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/main.css" rel="stylesheet" type="text/css"/>

<script type='text/javascript' src='assets/Scripts/jquery-1.3.2.min.js'></script>

<!-- Tooltip -->
<script type="text/javascript" src="assets/Scripts/jquery.tipsy.js"></script>

<!-- fade in/fade out -->
<script type="text/javascript" src="assets/Scripts/jquery.innerfade.js"></script>

<!-- Featured list -->
<script type="text/javascript" src="assets/Scripts/jquery.featureList-1.0.0.js"></script>

</head>

<body>

<?php require 'assets/js/script_home.js' ?>


<div id="wrapper">	
  <div id="top">
  	<?php require 'assets/partials/top.php' ?>    
  </div>
  <div>
	<?php require 'assets/partials/nav.php' ?>  
  </div>
  
  <div class="hr"></div>  
  <div id="preview_wrap">
  	<?php require 'assets/partials/preview.php' ?>
              
	</div>
	<?php require 'assets/partials/thumbs.php' ?>
      
  <div id="contentWrap">
    <div class="hr_line"></div>
    <div id="content-two-third">
    	<?php require 'assets/partials/content.php' ?>
    
    </div>
    <div id="column" class="right">
 		<?php require 'assets/partials/right.php' ?>  
    </div>
  </div>
  <div id="footer">
    <?php require 'assets/partials/footer.php' ?>
  </div>
  	<?php require 'assets/partials/social.php' ?>  
</div>

<div class="bottom">
</div>
	<?php require 'assets/partials/twiter.php'?>
</body>