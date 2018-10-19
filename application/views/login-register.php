<?php include'doc-type.php' ?>

	
		
<body >

<?php include'header.php' ?>

		 <section class="registration">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="login-register-content">
                            <div class="row collapse borderBottom">
                                <div class="medium-6 large-centered medium-centered">
                                    <div class="page-heading text-center">
                                        <h3>User Registeration</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-equalizer data-equalize-on="medium" id="test-eq">
                                <div class="large-4 large-offset-1 medium-6 columns">
                                    <div class="social-login" data-equalizer-watch>
                                        <h5 class="text-center">Login via Social Profile</h5>
                                        <div class="social-login-btn facebook">
                                            <a href="#"><i class="fa fa-facebook"></i>login via facebook</a>
                                        </div>
                                        <div class="social-login-btn twitter">
                                            <a href="#"><i class="fa fa-twitter"></i>login via twitter</a>
                                        </div>
                                        <div class="social-login-btn g-plus">
                                            <a href="#"><i class="fa fa-google-plus"></i>login via google plus</a>
                                        </div>
                                        <div class="social-login-btn linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i>login via linkedin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="large-2 medium-2 columns show-for-large">
                                    <div class="middle-text text-center hide-for-small-only" data-equalizer-watch>
                                        <p>
                                            <i class="fa fa-arrow-left arrow-left"></i>
                                            <span>OR</span>
                                            <i class="fa fa-arrow-right arrow-right"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="large-4 medium-6 columns end">
                                    <div class="register-form">
                                        <h5 class="text-center">Create your Account</h5>
                                        <form method="post" data-abide novalidate>
                                            <div data-abide-error class="alert callout" style="display: none;">
                                                <p><i class="fa fa-exclamation-triangle"></i> There are some errors in your form.</p>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-label"><i class="fa fa-user"></i></span>
                                                <input class="input-group-field" type="text" placeholder="Enter your username" required>
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-label"><i class="fa fa-envelope"></i></span>
                                                <input class="input-group-field" type="email" placeholder="Enter your email" required>
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                                <input type="password" id="password" placeholder="Enter your password" required>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                                <input type="password" placeholder="Re-type your password" required pattern="alpha_numeric" data-equalto="password">
                                            </div>
                                            <span class="form-error">your email is invalid</span>
                                            <button class="button expanded" type="submit" name="submit">register Now</button>
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="googleAdv text-center">
                <a href="#"><img src="images/goodleadv.png" alt="googel ads"></a>
            </div><!-- End ad Section -->
<?php include'footer.php'?>
<?php include'script.php'?>
	</body>
</html>

	
 