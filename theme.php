<?php global $Wcms; ?>
<!DOCTYPE html>
<html lang="<?= $Wcms->getSiteLanguage() ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    
    <!-- Dynamic Metadata Engine -->
    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    <meta name="description" content="<?= $Wcms->page('description') ?>">
    <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
    
    <!-- Theme Assets -->
    <link rel="icon" type="image/x-icon" href="<?= $Wcms->asset('favicon.ico') ?>">
    <link type="text/css" rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">

    
    <!-- Core WonderCMS Admin CSS Tools -->
    <?= $Wcms->css() ?>

	<!-- Font Awesome -->
<link rel="stylesheet" href="https://cloudflare.com" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Crucial Panel Injections for Alerts & Admin Settings Toolbar -->
    <?= $Wcms->settings() ?>
    <?= $Wcms->alerts() ?>

    <div style="margin-top: 0px;" id="mainwidth">	
        
        <!-- Navigation Menu Area -->
       <nav id="cssmenu">
	<ul>
		<!-- Dynamic Navigation Links Spitted out via CMS Settings -->
		<?= $Wcms->menu() ?>
	</ul>
</nav>

        <!-- Header Container with Dynamic Logo Area -->
<div class="headercontainer">
    <div class="userrow3">
        <div class="logo">
            <a href="<?= $Wcms->url() ?>">
                <!-- Cleaned path to your theme image asset folder -->
                <img src="<?= $Wcms->asset('css/logo.png') ?>" alt="<?= $Wcms->get('config', 'siteTitle') ?>" width="252" height="82">
            </a>
        </div>	
    </div>
</div>

        <div class="container">	
            <div id="content">
                <div class="wrapper">
                    
                    <!-- Dynamic Breadcrumbs Section -->
                    <div class="navigation">
                        <a href="<?= $Wcms->url() ?>"><i style="color: #fff; font-size: 15px;" ></i></a> 
                        <i style="color: #fff; font-size: 9px;" ></i>
                        <span class="active"><?= $Wcms->page('title') ?></span>
                    </div>
                    
                    <br>
                    
                    <!-- Core Content Body (Editable in-line by clicking the page text) -->
                    <main class="main-content-body">
                        <?= $Wcms->page('content') ?>
                    </main>
                    
                    <!-- Dynamic Sidebar Block Area (Persistent across all site loops) -->
                    <aside class="sidebar-block-area">
                        <?= $Wcms->block('subside') ?>
                    </aside>
                </div>

                <table border="0" cellspacing="0" cellpadding="0" class="tborder">
    <tbody>
        <tr>
            <td class="tfoot" style="text-align: left">
                <span class="smalltext"><a href="#">ツ</a></span>
            </td>
        </tr>
    </tbody>
</table>
            </div>
        </div>
        
        <!-- Theme Layout Footer Layout Wrapper -->
        <div style="margin-top: 20px; margin-bottom: 40px">
            <span class="smalltext">		
               
            
            <!-- Dynamic Footer Block Controlled via Admin Panel Panels -->
            <span class="smalltext"><?= $Wcms->footer() ?></span>
        </div>
    </div>

    <!-- Core WonderCMS JavaScript Tools Engine Insertion -->
    <?= $Wcms->js() ?>
</body>
</html>
