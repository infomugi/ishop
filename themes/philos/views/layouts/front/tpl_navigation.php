      <!-- Header -->
      <header class="header">
        <!--Topbar-->
        <div class="header-topbar">
          <div class="header-topbar-inner">
            <!--Topbar Left-->
            <div class="topbar-left hidden-sm-down">
              <div class="phone"><i class="fa fa-phone left" aria-hidden="true"></i>WA : <b>+62 <?php echo Setting::model()->phone(); ?></b></div>
            </div>
            <!--End Topbar Left-->

            <!--Topbar Right-->
            <div class="topbar-right">
              <ul class="list-none">

                <?php if(YII::app()->user->isGuest){ ?>

                  <li>
                    <a href="<?php echo $url;?>login"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">Login</span></a>
                  </li>

                  <?php }else{ ?>

                    <li class="dropdown-nav">
                      <a href="#"><i class="fa fa-user left" aria-hidden="true"></i><span class="hidden-sm-down">Akun</span><i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                      <!--Dropdown-->
                      <div class="dropdown-menu">
                        <ul>
                          <li><a href="<?php echo $url;?>account">Profil Saya</a></li>
                          <li><a href="<?php echo $url;?>edit">Edit Profil</a></li>
                          <li><a href="<?php echo $url;?>password">Edit Password</a></li>
                          <span class="divider"></span>
                          <li><a href="<?php echo $url;?>history">Riwayat Transaksi</a></li>
                        </ul>
                      </div>
                      <!--End Dropdown-->
                    </li>

                    <li>
                      <a href="<?php echo $url;?>logout"><i class="fa fa-power-off left" aria-hidden="true"></i><span class="hidden-sm-down">Logout</span></a>
                    </li>

                    <?php } ?>

                  </ul>
                </div>
                <!-- End Topbar Right -->
              </div>
            </div>
            <!--End Topbart-->

            <!-- Header Container -->
            <div id="header-sticky" class="header-main">
              <div class="header-main-inner">
                <!-- Logo -->
                <div class="logo">
                  <a href="#">
                    <img src="<?php echo $baseUrl;?>/frontend/img/logo_black.png" alt="Philos" />
                  </a>
                </div>
                <!-- End Logo -->


                <!-- Right Sidebar Nav -->
                <div class="header-rightside-nav">
                  <!-- Login-Register Link -->
                  <div class="header-btn-link hidden-lg-down"><a href="#" class="btn btn-sm btn-color">Daftar</a></div>
                  <!-- End Login-Register Link -->

                  <!-- Sidebar Icon -->
                  <div class="sidebar-icon-nav">
                    <ul class="list-none-ib">
                      <!-- Search-->
                      <li><a id="search-overlay-menu-btn"><i aria-hidden="true" class="fa fa-search"></i></a></li>

                      <!-- Whishlist-->
                      <li><a class="js_whishlist-btn"><i aria-hidden="true" class="fa fa-heart"></i><span class="countTip">10</span></a></li>

                      <!-- Cart-->
                      <li><a id="sidebar_toggle_btn">
                        <div class="cart-icon">
                          <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                        </div>

                        <div class="cart-title">
                          <span class="cart-count">2</span>
                          /
                          <span class="cart-price strong">$698.00</span>
                        </div>
                      </a></li>
                    </ul>
                  </div>
                  <!-- End Sidebar Icon -->
                </div>
                <!-- End Right Sidebar Nav -->


                <!-- Navigation Menu -->
                <nav class="navigation-menu">
                  <ul>


                    <?php foreach (Link::getLink(4) as $data) { ?>   
                      <li>
                       <a href="<?php echo $data['url']; ?>"><?php echo $data['name']; ?></a>
                       <?php if(LinkSub::getTotalLink($data['id_link'])!=0): ?>
                       <ul class="nav-dropdown js-nav-dropdown">
                        <li class="container">
                          <ul class="row">
                            <!--Grid 1-->
                            <li class="nav-dropdown-grid">
                              <h6>Kategori <?php echo $data['name']; ?></h6>
                              <ul>
                               <?php foreach (LinkSub::getLink($data['id_link']) as $sub) { ?> 
                                <li><a href="<?php echo $sub['url']; ?>"> <?php echo $sub['name']; ?> </a>
                                </li>
                                <?php } ?> 
                              </ul>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  <?php endif; ?> 

                  <?php } ?>  

                </ul>
              </nav>
              <!-- End Navigation Menu -->

            </div>
          </div>
          <!-- End Header Container -->
        </header>
                        <!-- End Header -->