<htmL>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/css/iosslider/iosslidercss.css"/>
 <script type="text/javascript" src="<?php echo URL?>public/js/gbcjs/jquery-1.9.1.min.js"></script>

<!-- iosslider plugin -->
<script type = 'text/javascript' src = '<?php echo URL?>public/js/iosslider/iosslider.js'></script>
</head>

<!--src="<?php echo URL?>public/js/gbcjs/jquery-1.9.1.min.js">-->

<!-- slider container -->
<div class = 'iosslider'>

	<!-- slider -->
	<div class = 'slider'>
	
		<!-- slides -->
                <div class = 'slide'><img src="<?php echo URL?>public/image/logo_home.png"/></div>
		<div class = 'slide'></div>
		<div class = 'slide'></div>
	
	</div>

</div>
<script>
$(document).ready(function() {

	/* basic - default settings */
	$('.iosslider').iosSlider();
	
	/* some custom settings */
	$('.iosslider').iosSlider({
		snapToChildren: true,
		scrollbar: true,
		scrollbarHide: false,
		desktopClickDrag: true,
		scrollbarLocation: 'bottom',
		scrollbarHeight: '6px',
		scrollbarBackground: 'url(_img/some-img.png) repeat 0 0',
		scrollbarBorder: '1px solid #000',
		scrollbarMargin: '0 30px 16px 30px',
		scrollbarOpacity: '0.75',
		onSlideChange: changeSlideIdentifier
	});

});

</script>