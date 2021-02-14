<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<!-- <base href="/"> -->
	<title>Gulp4Statrt</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicon all size generator -->
	<!-- https://realfavicongenerator.net/ -->
	<!--<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">-->
	<link rel="shortcut icon" href="favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">


	<link rel="preload" as="style" href="bild/styles.min.css">
	<link rel="preload" as="script" href="bild/scripts.min.js">
	<!-- Template Basic Images End -->
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
	<link rel="stylesheet" href="bild/styles.min.css">

</head>
<body>
	<div class="wrap-logo">
			<a href="https://us02web.zoom.us/j/8103351116?pwd=dGtrbGhEVTQ1bzBZaHFRMkhNQ0tJdz09" class="logo-zoom">ZOOM</a>
		<a class="logo-jw" href="https://www.jw.org/ru/">
			<svg class="svg-icon"><use xlink:href="#jw-logo"></use></svg>
		</a>
	</div>


<!--===========================-->
<!--========HEADER BLOCK=========-->
<!--===========================-->

<?php
	include "menu.inc.php";
?>

<!--===========================-->
<!--========HEADER BLOCK=========-->
<!--===========================-->


<!--===========================-->
<!--=======FOOTER BLOCK========-->
<!--===========================-->

<footer class="footer">
	<div class="wrapper">
			<div class="info">
				@ 2020 Свидетели Иеговы - Собрание Березнеговатое<br>
				Для частного использования
			</div>
		</div>	
</footer>


	<script src="bild/scripts.min.js"></script>
</body>
</html>

<script type="text/javascript">
$(function(){
    resizeAll();
    $(window).bind("resize", function(){
        resizeAll();
    });
});

$(window).bind('load', function() {resizeAll()});


function footerStickBottom (footer_block) {
    $(footer_block).css({'margin-top':0});
    var allWindowsHeight = $(window).height();
    var footerBottomOffset = $(footer_block).offset().top + $(footer_block).outerHeight();
    // console.log(allWindowsHeight);
    // console.log(footerBottomOffset);
    if (allWindowsHeight > footerBottomOffset) {
        var footerMarginTop = allWindowsHeight - footerBottomOffset;
        $(footer_block).css({'margin-top':footerMarginTop});
    }
}

function resizeAll() {

    footerStickBottom ('.footer');
    
}
</script>