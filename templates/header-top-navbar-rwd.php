<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <!-- HTML Markup for Top Navigation Menu --> 
    <nav>
      <form role="search" method="get" class=" float-right search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
          <i class="fa fa-search"></i>
          <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search" />
        </label>
        <input type="submit" class="search-submit" value="Search" />
      </form>
      <ul>
        <li><a href="#" class="" id="btn-menu"><i class="fa fa-bars"></i></a></li>
        <li><a class="logo" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></li>
        <!-- <li><a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></li> -->
      </ul>
    </nav>
    <!-- HTML Markup for Sidebar Slide Out Menu -->
    <div id="sideNav">
      <ul>
        <!-- <li class="searchForm"><a href="#" ><i class="fa fa-search"></i><span><input type="text" placeholder="Search" class="search" /></span></a></li> -->
        <li><a href="#"><i class="fa fa-home"></i><span>Home</span></a></li>
        <li><a href="#"><i class="fa fa-file-text"></i><span>Blog</span></a></li>
        <li><a href="#"><span><i class="fa fa-facebook"></i>Facebook</span></a></li>
        <li><a href="#"><span><i class="fa fa-twitter"></i>Twitter</span></a></li>
        <li><a href="#"><span><i class="fa fa-google-plus"></i>Google</span></a></li>
        <li><a href="#"><span><i class="fa fa-linkedin"></i>Linkedin</span></a></li>
      </ul> 
    </div>  
    <!-- /container -->
   
  </div> 
</header>

