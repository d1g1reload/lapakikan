<!--start to header-->
<header class="top-header fixed-top border-bottom d-flex align-items-center">
    <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
        <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
        <div class="account-sign-up">
            <h6 class="mb-0 fw-bold text-dark">Daftar Akun</h6>
        </div>
    </nav>
</header>
<!--end to header-->

<div class="login-body">
    <h5>Buat Akun Baru</h5>
    <p class="mb-0">Tambah Penghasilanmu Bersama Kami</p>
    <form class="mt-4" method="post" action="<?php echo base_url('auth/register/post') ?>">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
        <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" name="fullname" required>
            <label for="floatingInputName">Nama Lengkap</label>
        </div>

        <div class="form-floating mb-3">
            <input type="number" class="form-control rounded-3" name="phone" required>
            <label for="floatingInputName">Nomor Handphone</label>
        </div>

        <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" name="email" required>
            <label for="floatingInputEmail">Email</label>
        </div>

        <div class="input-group mb-3" id="show_hide_password">
            <div class="form-floating flex-grow-1">
                <input type="password" class="form-control rounded-3 border-end-0 rounded-end-0" name="password" required>
                <label for="floatingInputPassword">Password</label>
            </div>
            <span class="input-group-text bg-transparent rounded-3 rounded-start-0"><i class="bi bi-eye-slash"></i></span>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="is_approve">
                <label class="form-check-label" for="flexCheckDefault">
                    Saya menyetujui Syarat dan Ketentuan
                </label>
            </div>
        </div>

        <div class="mb-0 d-grid">
            <button type="submit" class="btn btn-custom rounded-3">Daftar</button>
        </div>

    </form>
</div>