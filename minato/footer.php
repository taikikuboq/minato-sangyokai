<footer>
<div class="callout secondary">
<div class="grid-container">
  <h4>サイトマップ</h4>

      <?php
      wp_list_page( array(

      ) );
      ?>
      <?php if (is_page('sitemap')) { ?>
<h3>固定ページ</h3>
<ul>
<?php get_archives('postbypost','','html'); ?>
</ul>
<?php }; ?>

      <!-- ここから -->
<nav class="grid-x">
  <ul class="cell shrink">
  <li class="cell-text"><h5><a href="members-service.html">業務のご案内</a></h5></li>
  
  <li><a href="members-service.html#section2">健康保険・厚生年金保険</a></li>
  <li><a href="members-service.html#section3">福利厚生制度</a></li>
  <li><a href="members-service.html#section4">港産業会館貸館業務</a></li>
  </ul>
  <ul class="cell shrink">
  <li class="cell-text"><h5><a href="other-service.html">その他のサービス</a></h5></li>
  <li><a href="other-service.html#section1">講習会・研修会の開催</a></li>
  <li><a href="other-service.html#section1">関係官公庁および関係団体との連携</a></li>
  </ul>
  <ul class="cell shrink">
  <li class="cell-text"><h5><a href="organization.html">産業会のご紹介</a></h5></li>
  <li><a href="organization.html#section1">産業会の概要</a></li>
  <li><a href="organization.html#section2">組織の沿革</a></li>
  <li><a href="organization.html#section3">港区と港産業会の歴史</a></li>

  </ul>
  <ul class="cell shrink">
  <li class="cell-text"><h5><a href="members.html">会員企業のご紹介</a></h5></li>
  <li><a href="members.html">会員企業のご紹介</a></li>
  </ul>
  <ul class="cell shrink">
  <li class="cell-text"><h5><a href="admission.html">新規入会のご案内</a></h5></li>
  <li><a href="admission.html">新規入会のご案内</a></li>
  </ul>
  <ul class="cell shrink">
    <li class="cell-text"><h5><a href="port200.html">青年部会</a></h5></li>
    <li><a href="port200.html">青年部会</a></li>
    <li><a href="proposal.html">港区産業推進協議会</a></li>
</ul>
<ul class="cell small-12">
<li class="footer-address"><address class="fotter-address">〒552-0003&nbsp;大阪市港区磯路3丁目19番1号&nbsp;
電話 (06)6572-7671(代)&nbsp;ＦＡＸ (06)6571-3986</address><a href="organization.html#map" class="button">アクセス</a></li>
</ul>
</nav>

  <!-- ここから -->

</div>

</div>
</div><div class="row expanded">

<div class="medium-6 columns">
<ul class="menu align-right">
<li class="menu-text">Copyright © <?php echo data('Y'); ?> Minato Industrial Society. All Rights Reserved.</li>
</ul>
</div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>js/vendor/foundation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>js/vendor/responsive-nav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>js/vendor/foundation.orbit.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>js/flexibility.js"></script>


<script>
    jQuery(function($){
      $(document).foundation();
      var navigation = responsiveNav(".nav-collapse", {
        animate: true,                    // Boolean: Use CSS3 transitions, true or false
        transition: 284,                  // Integer: Speed of the transition, in milliseconds
        label: "Menu",                    // String: Label for the navigation toggle
        insert: "after",                  // String: Insert the toggle before or after the navigation
        customToggle: "",                 // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative",              // String: Position of the opened nav, relative or static
        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
        jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
      });
    });
</script>
</body>
</html>