<?php

use BCLib\Indipetae\ThemeHelpers;

?>
<!DOCTYPE html>
<html lang="<?= get_html_lang() ?>">
<head>
    <meta charset="utf-8">

    <?php if ($description = option('description')): ?>
        <meta name="description" content="<?= $description ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php endif; ?>

    <title><?= ThemeHelpers::pageTitle($title ?? null) ?></title>

    <?= auto_discovery_link_tags() ?>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', ['view' => $this]); ?>

    <link rel="icon" href="<?= ThemeHelpers::IMG_PATH ?>/favicon.ico" type="image/x-icon"
    / >

    <?= $this->partial('common/partials/css.php') ?>
    <?= $this->partial('common/partials/javascript.php') ?>

</head>

<?= body_tag(['id' => $bodyid ?? '', 'class' => $bodyclass ?? '']) ?>
<?php fire_plugin_hook('public_body', ['view' => $this]); ?>

<a href="#content" id="skipnav"><?= __('Skip to main content') ?></a>

<header class="header">
    <div class="hidden-xs">
        <div class="row">
            <div class="top-menu">
                <span class="upper"><a href="https://jesuitportal.bc.edu/" target="new" class="iajs">The Portal to Jesuit Studies</a></span>
            </div>
        </div>
        <a href="https://indipetae.bc.edu">
            <div class="row brand-backgnd brand">
                <div class="header-brand center-col">
                    <div class="row">
                        <div class="col-sm-1">
                            <img alt="Institute for Advanced Jesuit Studies" src="https://jesuitportal.bc.edu/wp-content/themes/bciajs/imgs/bciajs_logo_transparent.png" class="logo">
                        </div>
                        <div class="pull-right col-sm-10">
                            <h1 class="upper header-title">Digital Indipetae Database</h1>
                            <h4 class="upper header-sub-title">Jesuit Petitions for Missions</h4>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</header>
<?php fire_plugin_hook('public_header', ['view' => $this]); ?>

<?= theme_header_image() ?>

<!-- DESKTOP NAV BAR STARTS HERE -->

<nav id="top-nav" class="navbar desktop-nav" role="navigation">
    <?= public_nav_main() ?>
</nav>

<!-- NAV ENDS -->


<!-- HACKED MOBILE NAV STARTS HERE -->

<div class="mobile-nav-hardcode">
    <nav class="navbar navbar-default" role="navigation">

        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed burg" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <!--<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>-->
                </button>
            </div>

            <!-- MENU CONTENT HERE. UPDATE AS NEEDED. -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/elasticsearch/search/index?q=">Browse Letters</a></li>
                            <li><a href="/collections/browse">Browse by Collection</a></li>
                        </ul>
                    </li>

                    <li><a href="/board">Scientific Board</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Partners
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/team">Development Team</a></li>
                        </ul>
                    </li>

                    <li><a href="/bibliography">Bibliography</a></li>
                    <li><a href="/collaborate">Collaborate</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!-- HACK ENDS HERE-->


<article id="content" role="main" tabindex="-1">

    <?php if (ThemeHelpers::isHomePage()): ?>
        <?= $this->partial('common/partials/homepage-search.php') ?>
    <?php endif; ?>


    <div class="container">

        <?php if (!ThemeHelpers::isHomePage()): ?>
            <?= $this->partial('common/partials/page-top-search.php') ?>
        <?php endif; ?>

        <?php fire_plugin_hook('public_content_top', ['view' => $this]); ?>
