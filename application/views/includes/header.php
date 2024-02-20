<div class="fixed-navbar">
  <div class="pull-left">
    <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
    <h1 class="page-title"><?=$title?></h1>
    <!-- /.page-title -->
  </div>
  <!-- /.pull-left -->
  <div class="pull-right">
    <div class="ico-item">
      <a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
      <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
      <!-- /.searchform -->
    </div>
    <!-- /.ico-item -->
    <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
    
    <div class="ico-item">
      <img src="<?= asset_url() ?>admin/images/profile.jpg" alt="" class="ico-img">
      <ul class="sub-ico-item">
        <li><a href="<?=base_url('edit-profile')?>">Edit Profile</a></li>
        <li><a class="js__logout" href="<?=base_url('logout')?>">Log Out</a></li>
      </ul>
      <!-- /.sub-ico-item -->
    </div>
    <!-- /.ico-item -->
  </div>
  <!-- /.pull-right -->
</div>