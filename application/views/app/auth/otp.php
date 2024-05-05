<!--start to header-->
<header class="top-header fixed-top border-bottom d-flex align-items-center">
    <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
        <div class="account-verification">
            <h6 class="mb-0 fw-bold text-dark">Verifikasi OTP</h6>
        </div>
    </nav>
</header>
<!--end to header-->

<div class="login-body">
    <h5 class="fw-bold">Kode Verifikasi</h5>
    <p class="mb-0">Masukan 6 Digit Kode OTP</p>
    <?php if ($this->session->flashdata('failed')) : ?>
        <div class="alert alert-danger" role="alert">
            <strong><?php echo $this->session->flashdata('failed'); ?></strong>

        </div>
    <?php endif; ?>
    <div class="pt-5">
        <form class="mt-5" method="post" action="<?php echo base_url('auth/otp/post') ?>">

            <div class="verification-controls d-flex align-items-center justify-content-center gap-3 mb-5">
                <div class="">
                    <input type="text" name="otp1" class="form-control form-control-lg rounded-3" maxlength="1" required>
                </div>
                <div class="">
                    <input type="text" name="otp2" class="form-control form-control-lg rounded-3" maxlength="1" required>
                </div>
                <div class="">
                    <input type="text" name="otp3" class="form-control form-control-lg rounded-3" maxlength="1" required>
                </div>
                <div class="">
                    <input type="text" name="otp4" class="form-control form-control-lg rounded-3" maxlength="1" required>
                </div>
                <div class="">
                    <input type="text" name="otp5" class="form-control form-control-lg rounded-3" maxlength="1" required>
                </div>
                <div class="">
                    <input type="text" name="otp6" class="form-control form-control-lg rounded-3" maxlength="1" required>
                </div>
            </div>
            <input type="hidden" name="validate_uuid" value="<?php echo $validate_uuid; ?>">
            <input type="hidden" name="validate_fullname" value="<?php echo $validate_fullname; ?>">
            <input type="hidden" name="validate_phone" value="<?php echo $validate_phone; ?>">
            <input type="hidden" name="validate_email" value="<?php echo $validate_phone; ?>">
            <input type="hidden" name="validate_password" value="<?php echo $validate_password; ?>">
            <input type="hidden" name="validate_is_approve" value="<?php echo $validate_is_approve; ?>">
            <input type="hidden" name="validate_created" value="<?php echo $validate_created; ?>">
            <div class="mb-0 d-grid">
                <button type="submit" class="btn btn-dark btn-custom rounded-3">Verifikasi Akun</button>
            </div>
        </form>
    </div>
</div>