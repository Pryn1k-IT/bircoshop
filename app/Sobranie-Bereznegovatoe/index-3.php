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
	<div id="topNubex">Вверх</div>

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
<!--=======MAIN BLOCK========-->
<!--===========================-->


<main>
	<div class="wrapper visits margin-b-30px">
		<!--
			<input class="visits__date" type="month" min="2020-04" value="2020-10">
		-->

		<div class="visits__year">Год:</div>
		<ul class="visits__year-list"> 
			<li class="visits__year-number">2020</li>
			<li class="visits__year-number">2021</li>
		</ul>

		<ul class="row visits__menu">
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#Junuary"> Январь </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#February"> Февраль </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#March"> Март </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#April"> Апрель </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#May"> Май </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#June"> Июнь </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#July"> Июль </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#August"> Август </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#September"> Сентябрь </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#October"> Октябрь </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#November"> Ноябрь </a></li>
			<li class="col-4 col-md-3 col-lg-2 visits__menu-list"> <a class="visits__menu-link" href="#December"> Декабрь </a></li>
		</ul>

		<ul class="visits__month">

			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span> 
						<a name="Junuary"> Январь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="February"> Февраль </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="March"> Март </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="April"> Апрель </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="May"> Май </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">60</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">59</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">63</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">66</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 248</div>
							<div class="state-title__max">Среднее число: 62</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">67</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">68</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">73</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">70</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 278</div>
							<div class="state-title__max">Среднее число: 70</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="June"> Июнь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">56</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">60</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">64</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">70</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 250</div>
							<div class="state-title__max">Среднее число: 63</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">59</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">58</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">65</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">66</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">--</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 248</div>
							<div class="state-title__max">Среднее число: 62</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="July"> Июль </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">65</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">64</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">68</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">70</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">62</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 329</div>
							<div class="state-title__max">Среднее число: 66</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">80</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">66</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">69</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">61</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 276</div>
							<div class="state-title__max">Среднее число: 69</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="August"> Август </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">51</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">62</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">62</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">62</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 237</div>
							<div class="state-title__max">Среднее число: 59</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">69</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">55</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">61</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">55</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">64</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 304</div>
							<div class="state-title__max">Среднее число: 61</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="September"> Сентябрь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">61</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">60</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">61</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">68</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 250</div>
							<div class="state-title__max">Среднее число: 63</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">63</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">59</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">60</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">69</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 251</div>
							<div class="state-title__max">Среднее число: 63</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="October"> Октябрь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">2</div> 
								|
							<div class="state-title">63</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">9</div> 
								|
							<div class="state-title">62</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">13(р-н)</div> 
								|
							<div class="state-title">73</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">23</div> 
								|
							<div class="state-title">63</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">30</div> 
								|
							<div class="state-title">61</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 322</div>
							<div class="state-title__max">Среднее число: 64</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">4</div> 
								|
							<div class="state-title">67</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">11</div> 
								|
							<div class="state-title">58</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">18(р-н)</div> 
								|
							<div class="state-title">80</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">25</div> 
								|
							<div class="state-title">60</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 265</div>
							<div class="state-title__max">Среднее число: 66</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="November"> Ноябрь</a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">6</div> 
								|
							<div class="state-title">65</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">13 (конгресс)</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">20</div> 
								|
							<div class="state-title">66</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">27</div> 
								|
							<div class="state-title">57</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 123</div>
							<div class="state-title__max">Среднее число: 62</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">1</div> 
								|
							<div class="state-title">64</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">8</div> 
								|
							<div class="state-title">61</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">15 (конгресс)</div> 
								|
							<div class="state-title">70</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">22</div> 
								|
							<div class="state-title">68</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">29</div> 
								|
							<div class="state-title">66</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 329</div>
							<div class="state-title__max">Среднее число: 66</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="December"> Декабрь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">4</div> 
								|
							<div class="state-title">66</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">11</div> 
								|
							<div class="state-title">60</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">18</div> 
								|
							<div class="state-title">59</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">25</div> 
								|
							<div class="state-title">66</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 251</div>
							<div class="state-title__max">Среднее число: 63</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">6</div> 
								|
							<div class="state-title">70</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">13</div> 
								|
							<div class="state-title">73</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">20</div> 
								|
							<div class="state-title">65</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">27</div> 
								|
							<div class="state-title">60</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: 268</div>
							<div class="state-title__max">Среднее число: 67</div>
						</li>
					</ul>
				</div>
			</li>
		</ul>

		<ul class="visits__month active">

			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="Junuary"> Январь 2021 </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">1</div> 
								|
							<div class="state-title">66</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">8</div> 
								|
							<div class="state-title">60</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">3</div> 
								|
							<div class="state-title">64</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">10</div> 
								|
							<div class="state-title">69</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="February"> Февраль </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="March"> Март </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="April"> Апрель </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="May"> Май </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="June"> Июнь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="July"> Июль </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="August"> Август </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="September"> Сентябрь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="October"> Октябрь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name visit__padding">
				<div class="visit__border">
					<span>
						<a name="November"> Ноябрь</a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
			<li class="visits__month-name">
				<div class="visit__border">
					<span>
						<a name="December"> Декабрь </a>
					</span>
					<ul class="visits__state visits__state-border">
						<li class="visit__state-tags">Служебные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
					<ul class="visits__state">
						<li  class="visit__state-tags">Публичные встречи</li>
						<li class="visit__state-title">
							<div class="state-title">Дата</div> 
								|
							<div class="state-title">Колличество</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-number">
							<div class="state-title">-</div> 
								|
							<div class="state-title">-</div>
						</li>
						<li class="visit__state-total">
							<div class="state-title__max">Итог: - </div>
							<div class="state-title__max">Среднее число: -</div>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</main>

<!--===========================-->
<!--=======MAIN BLOCK========-->
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bild/scripts.min.js"></script>

</body>
</html>

<!--<script>
	jQuery(document).ready(function($) {
		if(window.pageYOffset > 1){
			$('body').addClass('scrolled');
		}
	});

	$(window).scroll(function(e){
		if($(this).scrollTop() > 1){
			$('body').addClass('scrolled');
		}else{
			$('body').removeClass('scrolled');
		}
	});
</script>-->


<!--Табы--><script type="text/javascript">
	(function($) {$(function() {
	$('ul.visits__year-list').on('click', 'li:not(.active)', function() {
	$(this).addClass('active').siblings().removeClass('active').closest('div.visits').find('ul.visits__month').removeClass('active').eq(
	$(this).index()).addClass('active');});});})(jQuery);
</script>




<!----><!--Пароль на странце--><script language="JavaScript">
	if (top.location.search=="") {135
	pass = prompt('Введите пароль');
	if (pass=='135') // Ваш пароль акивации
	{ alert('Пароль принят') } else { alert('Пароль непринят!'), top.location.href="errorpas.htm" }//Адрес страниц на которую перейдет пользователь при ошибке
	};
</script>

<!--

<script type="text/javascript">
	$(function(){
		resizeAll();
		$(window).bind("resize", function(){
			resizeAll();
		});
	});

	$(window).bind('load', function() {resizeAll()});


	function footerStickBottom (footer_block) {
		$(footer_block).css({'margin-top':-30});
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

-->
<!--Футер на полу-->




<script type="text/javascript">
	$(function() {
	$(window).scroll(function() {
	if($(this).scrollTop() != 0) {
	$('#topNubex').fadeIn();
	} else {
	$('#topNubex').fadeOut();
	}
	});
	$('#topNubex').click(function() {
	$('body,html').animate({scrollTop:0},700);
	});
	});
</script>
<!-- --><!--Кнопка вверх!-->