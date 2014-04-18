<header id="navbar-bg"></header>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>



<!-- Yuan: special container for slide -->
<div class="main-container container">
  
  <div class="page-banner"></div>
  
  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>
        
    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <!-- Yuan: make it longer for the background -->
        <h2 class="page-header" style="border-bottom-color:transparent;margin-top:100px;">
          <span style="background-color:#18161B; color:#fff; padding: 1px 15px;"><?php print $title; ?></span>
        </h2>
      <?php endif; ?>
      
      <? if (!empty($node)): ?>
        <!-- Yuan: render summary and use it as description -->
        <?php $body = field_get_items('node', $node, 'body');?>
        <?php $summary= $body[0]['summary'];?>
        <?php if (!empty($summary)): ?>
          <h3 class='summary'>
            <?php print $summary; ?>
          </h3>
        <?php endif; ?>
      <?php endif; ?>
      
      <?php print render($title_suffix); ?>
    </section>
  </div>
</div>

<div style="margin:0;padding:0;display: block; height: 1px;border: 0; border-top: 1px solid rgba(255,255,255,.3);position:relative;">
  <div class="page-banner-bg">
    <div class="page-banner-img <?php print drupal_get_path_alias(current_path()); ?>"></div>
  </div>
</div>

<div class="main-container container" style="background-color:rgba(255,255,255,1);">
  <div class="row">
    <section<?php print $content_column_class; ?>>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<footer class="footer">
  <div class="container">
    <?php print render($page['footer']); ?>
    
    <div class="row">
      <div class="col-sm-6 col-sm-push-6" style="margin-bottom:20px;">
        <h5 style="margin-top:0px;">Connect with us</h5>
        <ul class="list-inline">
          <li style="padding-left:0px;">
            <a href="https://github.com/Nodally/" target="_blank">   
              <img width="30px" src="sites/all/themes/bootstrap_subtheme/img/icon_github.png" onmouseout="this.src='sites/all/themes/bootstrap_subtheme/img/icon_github.png'" onmouseover="this.src='sites/all/themes/bootstrap_subtheme/img/icon_github_black.png';" alt="LinkedIn link" title="GitHub">
            </a>               
          </li>
          <li>
            <a href="http://www.linkedin.com/company/nodally-inc-/" target="_blank">   
              <img width="30px" src="sites/all/themes/bootstrap_subtheme/img/icon_linkedin.png" onmouseout="this.src='sites/all/themes/bootstrap_subtheme/img/icon_linkedin.png'" onmouseover="this.src='sites/all/themes/bootstrap_subtheme/img/icon_linkedin_black.png';" alt="LinkedIn link" title="LinkedIn">
            </a>              
          </li>
          <li>
            <a href="http://twitter.com/nodally" target="_blank">   
               <img width="30px" src="sites/all/themes/bootstrap_subtheme/img/icon_twitter.png" onmouseout="this.src='sites/all/themes/bootstrap_subtheme/img/icon_twitter.png'" onmouseover="this.src='sites/all/themes/bootstrap_subtheme/img/icon_twitter_black.png';" alt="Twitter link" title="Twitter">
            </a>                
          </li>
          <li>
            <a href="https://www.facebook.com/Nodally" target="_blank">   
               <img width="30px" src="sites/all/themes/bootstrap_subtheme/img/icon_facebook.png" onmouseout="this.src='sites/all/themes/bootstrap_subtheme/img/icon_facebook.png'" onmouseover="this.src='sites/all/themes/bootstrap_subtheme/img/icon_facebook_blcak.png';" alt="Facebook link" title="Facebook">
            </a>                
          </li>    
        </ul>
      </div>
      <div class="col-sm-6 col-sm-pull-6">
        <?php if ($logo): ?>
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" style="width:150px;margin-bottom:10px" />
        <?php endif; ?>
        <div>Copyright © <?php echo date("Y");?>. All rights reserved.</div>
      </div>
    </div>

  </div>
</footer>

