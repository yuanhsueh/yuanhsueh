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
<style>
  .navbar .logo{
    margin-top:8px;
    width:50px;
  }
  .navbar .logo>img{
    width:100%;
  }
  header#navbar-bg{
    height:100px;
    border-bottom:1px solid black;
  }
  header#navbar{
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 400;
    max-width: auto;
    width: 100%;
  
    border-color:transparent;
  }
  header#navbar>.container{
    margin-top:40px;
  }
  header#navbar a{
    font-weight:500;
    text-transform:uppercase;
  }

  .banner{
    position:relative;
    overflow: hidden;
    width:100%;
    margin:0 0px;
    margin-top: 100px;
    padding:0;
    display: block; 
    height: 300px;
    border: 0; 
    position:relative;
    background:red;
    background-image:url(http://subtlepatterns.com/patterns/tweed.png);
    background-image:url(http://subtlepatterns.com/patterns/wood_1.png);
    background-image:url(http://subtlepatterns.com/patterns/denim.png);
  }
  
  blockquote.leadin{
    width:262px;
    top:20px;
  }
  blockquote.leadin p{
    font-weight:400;
  }
  .img.spaceman{
    background-image:url(sites/all/themes/bootstrap_subtheme/img/spaceman.png),url(img_flwr.gif);
    background-repeat: no-repeat;
    background-size: 100% auto;
    width: 400px;
    height: 238px;
    margin-top: -85px;
    margin-left: 122px;
  }
  .img.earth{
    background-image:url(sites/all/themes/bootstrap_subtheme/img/earth.png);
    background-repeat: no-repeat;
    background-size: 100% auto;
    position: absolute;
    width: 180px;
    height: 238px;
    right: 10%;
    top: -90px;
  }
  
  @media (min-width: 768px) {
  }/*/media*/
  @media (max-width: 767px) {
    header#navbar>.container{
      margin-top:0px;
    }
    .name.navbar-brand {
      font-size: 18px;
    }
    .navbar .logo{
      margin-top: 12px;
      margin-bottom:0px;
      width: 56px;
    }
    .banner{
      margin-top: 50px;
      height: 250px;
    }
    p:last-child {
      margin-bottom: 40px;
    }
    
    blockquote.leadin{
      width: 201px;
    }
    .img.spaceman {
      width: 300px;
      height: 154px;
      margin-top: -73px;
      margin-left: 20%;
    }
    .img.earth{
      width: 160px;
      height: 238px;
      right: -70px;
      top: -90px;
    }
  }/*/media*/
</style>


<div class="banner">

  <div class="container">
    <blockquote class="reverse leadin" style="">		
    	<p class="font-fix">
    	  Hi, I am a designer<br/>
    	  with <span id="experience_in_year"></span> years of experience <br/>
    	  in the web industry.
    	</p>
      <div class="quote-image"></div>
    </blockquote>
    <div class="img earth"></div>
    <div class="img spaceman"></div>
  </div>
  
</div>

<div class="main-container container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->

  <div class="row">
    <?php if (!empty($page['sidebar_first'])): ?>
      <!-- Yuan: don't care sidebar -->
      <!--
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>
      -->
      <!-- /#sidebar-first -->
    <?php endif; ?>
    
    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>

      <?php print render($title_suffix); ?>
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
      <!-- 
        Yuan: can take $page['content'] out of section to allow better flexibility
        but must deal with the right margin, which I have no time to solve right now
      -->
      <?php print render($page['content']); ?>
    </section>
    
    <!-- Yuan: don't care sidebar -->
    <?php if (!empty($page['sidebar_second'])): ?>
      <!--
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>
      -->
      <!-- /#sidebar-second -->
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



<!-- 
Yuan: bootstrap fix: Enable carousel(s) previous and next button
-->
<script type="text/javascript">
$ = jQuery
$( document ).ready(function() {
   $('.carousel .carousel-control.left').click(function(e) {
     var $target = $(e.delegateTarget)
     $target.blur()
     var $carousel = $target.closest('.carousel')
     $carousel.carousel('prev');
   });
   $('.carousel .carousel-control.right').click(function(e) {
     var $target = $(e.delegateTarget)
     $target.blur()
     var $carousel = $target.closest('.carousel')
     $carousel.carousel('next');
   });
});
</script>

<!-- 
Yuan: bootstrap fix: dropdown-menu it's NOT active after generated
-->
<script type="text/javascript">
$ = jQuery
$( document ).ready(function() {
  // Yuan: helper to detect bootstrap configuration
  // REF: http://stackoverflow.com/questions/19462672/jquery-detect-bootstrap-3-state
  function findBootstrapEnvironment() {
      var envs = ["ExtraSmall", "Small", "Medium", "Large"];
      var envValues = ["xs", "sm", "md", "lg"];

      $el = $('<div>');
      $el.appendTo($('body'));

      for (var i = envValues.length - 1; i >= 0; i--) {
          var envVal = envValues[i];

          $el.addClass('hidden-'+envVal);
          if ($el.is(':hidden')) {
              $el.remove();
              return envs[i]
          }
      };
  }
  
  
  $('.navbar li').removeClass("active")

  // Yuan: scroll to target and close menu
  $('a').click(function(event){
    var $hyperlink = $( event.delegateTarget )     
    var taregt_offset = $('[name="' + $hyperlink.attr('href').split('#')[1] + '"]').offset().top
    var extra_offset = 0
    if ($("#navbar-bg").css("position") == "fixed"){
      if ($("#navbar-bg").css("display") == "none"){
        extra_offset = $(".navbar-header").outerHeight();
        extra_offset += 10;
      }else{
        extra_offset = $("#navbar-bg").outerHeight();
      }
    }
    var scrollTop = taregt_offset - extra_offset

    console.log("wehfoewfwe", taregt_offset, extra_offset, scrollTop, findBootstrapEnvironment())
    $('html, body').animate({
       scrollTop: scrollTop
    }, 500);
    if (findBootstrapEnvironment() == "ExtraSmall"){
      $("button.navbar-toggle").click()
    }
    return false;
  });
  
  // Yuan: show how many years of experience
  var experience_in_year = (new Date).getFullYear() - 2009;
  $('#experience_in_year').text(experience_in_year)
  
});
</script>





