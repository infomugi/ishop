                <aside class="sidebar canvas-left">

                    <nav class="main-navigation">
                        <ul>
                            <li>
                                <a href="<?php echo $url;?>site/dashboard">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                    <span>Prodak</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>product/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>product/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-bullhorn"></i>
                                    <span>News</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>news/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>news/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>                            
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-file-o"></i>
                                    <span>Halaman</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>page/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>page/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>                            
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-tags"></i>
                                    <span>Kategori</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>category/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>category/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>tag/admin">
                                            <span>Tag</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>    
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-dollar"></i>
                                    <span>Transaksi</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>transaction/listconfirmation">
                                            <span>Konfirmasi Order</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>transaction/listverification">
                                            <span>Verifikasi Order</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>transaction/listshipping">
                                            <span>Shipping</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>transaction/listsuccess">
                                            <span>Order Terkirim</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>                                                          

                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-archive"></i>
                                    <span>Master</span>
                                </a>
                                <ul class="dropdown-menu">                                                              
                                    <li>
                                        <a href="<?php echo $url;?>provinces/admin">
                                            <span>Provinsi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>regencies/admin">
                                            <span>Kabupaten / Kota</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>districts/admin">
                                            <span>Kecamatan</span>
                                        </a>
                                    </li>  

                                    <li>
                                        <a href="<?php echo $url;?>villages/admin">
                                            <span>Desa / Kelurahan</span>
                                        </a>
                                    </li>                                          
                                </ul>
                            </li>

                                                                                                           
                           <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <span>Konfigurasi</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>bankSender/admin">
                                            <span>Bank Pengirim</span>
                                        </a>
                                    </li>   
                                    <li>
                                        <a href="<?php echo $url;?>bankDestination/admin">
                                            <span>Bank Tujuan</span>
                                        </a>
                                    </li>                                                                      
                                    <li>
                                        <a href="<?php echo $url;?>slide/admin">
                                            <span>Slide</span>
                                        </a>
                                    </li>  
                                    <li>
                                        <a href="<?php echo $url;?>link/admin">
                                            <span>Link</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo $url;?>promotion/admin">
                                            <span>Popup</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>  
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-users"></i>
                                    <span>Akun</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>user/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>employee/admin">
                                            <span>Administrator</span>
                                        </a>
                                    </li>                                    
                                    <li>
                                        <a href="<?php echo $url;?>customer/admin">
                                            <span>Pelanggan</span>
                                        </a>
                                    </li>                                    
                                    <li>
                                        <a href="<?php echo $url;?>division/admin">
                                            <span>Divisi</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>                                                                                

                        </ul>
                    </nav>


                </aside>