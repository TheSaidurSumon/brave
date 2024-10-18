<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	 <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/slider.css" type="text/css" />

</head>
<body>
<div class="fullslide">

<audio >
  <source src="video/Aalo.mp3" type="audio/ogg">
 
</audio>
	 <div class="slider-wrapper theme-bar">
	 
            <div id="slider" class="nivoSlider">
                <img src="img/1.jpg" />
                <img src="img/2.jpg" />
                <img src="img/3.jpg" />
                <img src="img/4.jpg" />    
                  
            </div>  
     </div>
</div>
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</body>
</html>