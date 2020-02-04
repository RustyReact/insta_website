<body dir="<?php echo (lang("IS_RTL"))?"rtl":"ltr" ?>">
<div class="loading-backdrop" id="page_loading" style="display: block;"></div>
<?php if ($this->ion_auth->logged_in ()): ?>
<div class="navbar-mainmenu navbar-mainmenu-fixed-top <?php echo (lang("IS_RTL"))?"rtl":"" ?>">
  <div class="navbar-mainmenu-inner ">
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#collapse-navbar">
      <i class="fa fa-bars"></i>
    </button>
    <a href="<?=base_url() ?>/" tabindex="-1" class="brand-up" style="width: 100%;">
      <img src="<?=base_url("assets/img/logo-white.png") ?>" alt="<?php echo APP_DESCRIPTION ?>" style="height:26px;">
      <span></span>
    </a>
    <div class="nav-collapse collapse accordion-body" id="collapse-navbar" >
      <ul class="nav">
        <li class="dropdown" >
          <a href="<?=base_url() ?>/" tabindex="-1" class="brand">
            <img src="<?=base_url("assets/img/logo-white.png") ?>" alt="<?php echo APP_DESCRIPTION ?>" height="100%">
            <span></span>
          </a>
        </li>
        <li class="dropdown" >
          <a href="<?=base_url() ?>" tabindex="-1">
            <span><?php echo lang("menu_overview") ?></span>
          </a>
        </li>

        <li class="dropdown" >
          <a href="<?=base_url()?>/instasites"  tabindex="-1">
            <span><?php echo lang("menu_myinstasites") ?></span>
          </a>
        </li>

        <li class="dropdown" >
          <a href="<?=base_url() ?>/single_builder" tabindex="-1">
            <span><?php echo lang("menu_single_builder") ?></span>
          </a>
        </li>

        <li class="dropdown" >
          <a href="#"  tabindex="-1">
            <span><?php echo lang("menu_bulk_builder") ?></span>
          </a>
        </li>

        <li class="dropdown" >
          <a href="#"  tabindex="-1">
            <span><?php echo lang("menu_noti_template") ?></span>
          </a>
        </li>

        <li class="dropdown" >
          <a href="#"  tabindex="-1">
            <span><?php echo lang("menu_tutorial") ?></span>
          </a>
        </li>

          <!-- Profile -->
          <li class="dropdown right" >
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" tabindex="-1">
              <span><?php echo USER_NAME ?></span>
            </a>
            <ul class="dropdown-menu" style="right: 0;left:inherit;">
              <li>
                <a href="<?=base_url("/auth/change_password"); ?>" sis-modal="users_table" class="sis_modal" tabindex="-1">
                  <i class="fa fa-shield"></i> <span><?php echo lang("change_password") ?></span>
                </a>
              </li>
              <li>
                <a href="<?=base_url("/auth/logout"); ?>" tabindex="-1">
                  <i class="fa fa-lock"></i> <span><?php echo lang("logout") ?></span>
                </a>
              </li>
            </ul>
          </li>
       
        <li class="dropdown right sis-notifications" title="<?php echo lang("notifications") ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" tabindex="-1">
            <i class="fa fa-bell"></i>
            <span class="label-pill label-danger label" style="display: none">1</span>
          </a>
          <ul class="dropdown-menu" style="right: 0;left:inherit;">
            <li class="text-xs-center text-muted small"><?php echo lang("no_notifications") ?></li>
          </ul>
        </li>
       
      </ul>
    </div>
    <div style="clear:both;"></div>
  </div>
</div>
<div style="clear:both;"></div>
<?php else: // is logged in ?>
  <div class="dropdown choose_lang" >
  </div>
<?php endif; // not logged in ?>

<!-- Main content -->
<main class="main">
