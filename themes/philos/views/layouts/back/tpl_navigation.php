            <header class="header header-fixed navbar">
                <div class="brand">
                    <a href="#/javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
                    <a href="<?php echo $url;?>site/dashboard" class="navbar-brand text-white">
                        <i class="fa fa-shopping-cart mg-r-sm"></i>
                        <span class="heading-font">
                         <?php echo CHtml::encode(Setting::model()->name()); ?>
                     </span>
                 </a>
             </div>
             <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="#">
                        <?PHP echo CHtml::encode(Employee::model()->fullname()); ?>
                    </a>
                </li>
                <li class="quickmenu">
                    <a href="javascript:;" data-toggle="dropdown">
                        Akun
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        <li>
                            <a href="<?php echo $url;?>setting/site">Setting</a>
                        </li>
                        <li>
                            <a href="<?php echo $url;?>site/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>