<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="header-content">
        <img class="logo" src="/wordpress/wp-content/uploads/2019/09/SRrecordings.svg" alt="Synder Recordings">
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'nav-menu', 
                'container_class' => 'nav' ) ); 
        ?>
       
        <a href="#" class="cta">Sign Up</a>
        <button class="menu-button">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21 6v2H3V6h18zM3 18h18v-2H3v2zm0-5h18v-2H3v2z"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
        </button>
    </div>       
</header>
<!-- MOBILE MENU -->
<div class="mobile-menu">
    <button class="menu-close">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" /><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
    </button>
    <nav>
        <a href="./"><img src="wp-content/uploads/2019/09/Home.svg" alt="Home"><span>Home</span></a>
        <a href="./"><img src="wp-content/uploads/2019/09/records.svg" alt="Records"><span>Records</span></a>
        <a href="./"><img src="wp-content/uploads/2019/09/music.svg" alt="Music"><span>Music</span></a>
        <a href="./"><img src="wp-content/uploads/2019/09/artists.svg" alt="Artists"><span>Artists</span></a>
        <a href="./"><img src="wp-content/uploads/2019/09/concerts.svg" alt="Concerts"><span>Concerts</span></a>
    </nav>
    <a href="./" class="cta">Sign Up</a>
</div>