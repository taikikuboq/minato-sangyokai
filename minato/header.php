<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation-grid-card.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/foundation.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive-nav.css" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<header>

		<div class="row">
			<div class="medium-4 columns">
				<a href="index.html" class="main-logo">
				<picture>
				<source srcset="img/logo.svg" type="image/svg+xml">
				<img src="img/logo.jpg" alt="一般社団法人港産業会">
				</picture></a>
			</div>
			<div class="medium-8 columns hide-for-small-only">
			<ul class="menu align-right">
			  <li>
			    <address class="header-address">
			    	<!-- マップページを取得 -->
			      <span class="map-links"><a href="organization.html#map">
			        <i class="fas fa-map-marked-alt fa-2x" ></i></a></span>
			    <p>〒552-0003 大阪市港区磯路3丁目19番1号<br>
			      電話 (06)6572-7671(代) ＦＡＸ (06)6571-3986</p>
			    </address>
			  </li>
			</ul>

			</div>

		</div>

		</header>
		<div class="row expanded">
	  <nav class="top-bar nav-collapse">

	  	<!-- 書き出し　-->
	    <div class="row column medium-centered">
	    <ul class="medium-text-center menu">
	      <li class="columns large-2 medium-4"><a href="members-service.html">業務のご案内</a></li>
	      <li class="columns large-2 medium-4"><a href="other-service.html">その他のサービス</a></li>
	      <li class="columns large-2 medium-4"><a href="organization.html">産業会のご紹介</a></li>
	      <li class="columns large-2 medium-4"><a href="members.html">会員企業のご紹介</a></li>
	      <li class="columns large-2 medium-4"><a href="admission.html">新規入会のご案内</a></li>
	      <li class="columns large-2 medium-4"><a href="port200.html">青年部会</a></li>

	    </ul>
	    </div>
	    <?php
			wp_nav_menu( array(
				'theme_location' => 'nav',
				'menu_class'		=> 'medium-text-center menu',
				'container'			=> 'div',
				'container_class'=> 'row column medium-centered'
			) );
			?>
	  </nav>

	</div>