<?php require('backend/views/common/header.php'); ?>
<body id="minovate" class="appWrapper">
     <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">
            <div class="page page-core page-login">
                <div class="text-center"><h3 class="text-light text-white"><span class="text-lightred">SIEUTHITHUNUOI</span>.COM</h3></div>
                <div class="container w-420 p-15 bg-white mt-40 text-center">
                    <h2 class="text-light text-greensea">Log In</h2>
                    <form method="post" action="admin.php?controller=home&action=login" name="form" class="form-validation mt-20" novalidate="">
                        <div class="form-group">
                            <input name="email" type="email" class="form-control underline-input" placeholder="Email" required autofocus>
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Password" class="form-control underline-input" required>
                        </div>
                        <div class="form-group text-left mt-20">
                            <button type="submit" class="btn btn-greensea b-0 br-2 mr-5">Login</button>
                            <label class="checkbox checkbox-custom-alt checkbox-custom-sm inline-block">
                                <input type="checkbox"><i></i> Remember me
                            </label>
                            <a href="#" class="pull-right mt-10">Forgot Password?</a>
                        </div>
                    </form>
                    <hr class="b-3x">
                    <div class="bg-slategray lt wrap-reset mt-40">
                        <p class="m-0">
                            <a href="#" class="text-uppercase">Create an account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Application Content -->
    <?php require('backend/views/common/footer.php'); ?> 