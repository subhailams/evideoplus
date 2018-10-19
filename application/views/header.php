


		<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

        <div class="off-canvas position-left light-off-menu" id="offCanvas-responsive" data-off-canvas>
            <div class="off-menu-close">
                <h3>Menu</h3>
                <span data-toggle="offCanvas-responsive"><i class="fa fa-times"></i></span>
            </div>
            <ul class="vertical menu off-menu" data-responsive-menu="drilldown">
                <li class="has-submenu">
                    <a href="<?php echo base_url(); ?>home"><i class="fa fa-home"></i>Home</a>
				</li>
                <li class="has-submenu" data-dropdown-menu="example1">
                    <a href="<?php echo base_url(); ?>home/singlevideo"><i class="fa fa-film"></i>Videos & category</a>
                </li>
                <li>
                    <a href="blog.php"><i class="fa fa-edit"></i>blog</a>
                </li>

                <li><a href="about.php"><i class="fa fa-user"></i>about</a></li>
                <li><a href="<?php echo base_url(); ?>contact"><i class="fa fa-envelope"></i>contact</a></li>
            </ul>
            <div class="responsive-search">
                <form method="post">
                    <div class="input-group">
                        <input class="input-group-field" type="text" placeholder="search Here">
                        <div class="input-group-button">
                            <button type="submit" name="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="off-social">
                <h6>Get Socialize</h6>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-vimeo"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
            <div class="top-button">
                <ul class="menu">
                    <li>
                        <a href="submit-post#">upload Video</a>
                    </li>
                    <li class="dropdown-login">
                        <a href="login#">login/Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            <header>
                <!-- Top -->
                <section id="top" class="topBar show-for-large">
                    <div class="row">
                        <div class="medium-6 columns">
                            <div class="socialLinks">
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="top-button">
                                <ul class="menu float-right">
                                    <li>
                                        <a href="submit-post#">upload Video</a>
                                    </li>
                                    <li class="dropdown-login">
                                        <a class="loginReg" data-toggle="example-dropdown" href="#">login/Register</a>
                                        <div class="login-form">
                                            <h6 class="text-center">Great to have you back!</h6>
                                            <?php $this->load->helper('form'); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
        </div>
        <?php
        $this->load->helper('form');
        $error = $this->session->flashdata('error');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }
        $success = $this->session->flashdata('success');
        if($success)
        {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $success; ?>                    
            </div>
        <?php } ?>
                                            <form action="<?php echo base_url(); ?>loginMe" method="post">
                                                <div class="input-group">
                                                    <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                                                    <input class="input-group-field" type="text" 
                                                    name="email" placeholder="Enter email id" required>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                                    <input class="input-group-field" type="password" name="password" placeholder="Enter password" required>
                                                </div>
                                                <div class="checkbox">
                                                    <input id="check1" type="checkbox" name="check" value="check">
                                                    <label class="customLabel" for="check1">Remember me</label>
                                                </div>
                                                <input type="submit" name="submit" value="Login Now">
                                            </form>
                                            <p class="text-center"><a class="newaccount" href="login-forgot.php">Forgot Password</a></p>
                                            <p class="text-center">New here? <a class="newaccount" href="login-register.php">Create a new Account</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section><!-- End Top -->
                <!--Navber-->
                <section id="navBar">
                    <nav class="sticky-container" data-sticky-container>
                        <div class="sticky topnav" data-sticky data-top-anchor="navBar" data-btm-anchor="footer-bottom:bottom" data-margin-top="0" data-margin-bottom="0" style="width: 100%; background: #fff;" data-sticky-on="large">
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="title-bar" data-responsive-toggle="beNav" data-hide-for="large">
                                        <button class="menu-icon" type="button" data-toggle="offCanvas-responsive"></button>
                                        <div class="title-bar-title"><img src="<?php echo base_url(); ?>images/logo-small.png" alt="logo"></div>
                                    </div>

                                    <div class="top-bar show-for-large" id="beNav" style="width: 100%;">
                                        <div class="top-bar-left">
                                            <ul class="menu">
                                                <li class="menu-text">
                                                    <a href="index#"><img src="<?php echo base_url(); ?>images/logo.png" alt="logo"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="top-bar-right search-btn">
                                            <ul class="menu">
                                                <li class="search">
                                                    <i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="top-bar-right">
                                            <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                                                <li class="has-submenu active">
                                                    <a href="<?php echo base_url(); ?>home"><i class="fa fa-home"></i>Home</a>
                                                 </li>
                                                <li class="has-submenu" data-dropdown-menu="example1">
                                                    <a href="<?php echo base_url(); ?>home/singlevideo"><i class="fa fa-film"></i>Videos & category</a>
												</li>
                                                <li>
                                                    <a href="blog.php"><i class="fa fa-edit"></i>blog</a>

                                                </li>

                                                <li><a href="about.php"><i class="fa fa-user"></i>about</a></li>
                                                <li><a href="<?php echo base_url(); ?>contact"><i class="fa fa-envelope"></i>contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="search-bar" class="clearfix search-bar-light">
                                <form method="post">
                                    <div class="search-input float-left">
                                        <input type="search" name="search" placeholder="Seach Here your video">
                                    </div>
                                    <div class="search-btn float-right text-right">
                                        <button class="button" name="search" type="submit">search now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                </section>
            </header>
