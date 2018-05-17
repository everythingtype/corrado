<div class="topnav">

  <div class="shade">

    <div class="tapout"></div>

    <nav>
      <div class="shadow"></div>
      <div class="navinner">

      	<button class="closebutton">
          <span class="closeicon"><?php echo get_template_part('images/close'); ?></span>
          <span class="screen-reader-text">Close</span>
      	</button>

      	<div class="top-main">
      		<?php wp_nav_menu( array('theme_location'  => 'top-main' ) ); ?>
      	</div>

      	<div class="top-sub">
      		<?php wp_nav_menu( array('theme_location'  => 'top-sub' ) ); ?>
      	</div>

      </div>

    </nav>

  </div>

</div>
