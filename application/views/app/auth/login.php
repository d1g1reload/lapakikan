<!--start to header-->
<header class="top-header fixed-top border-bottom d-flex align-items-center">
    <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
        <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
        <div class="account-profile">
            <h6 class="mb-0 fw-bold text-dark">Log In</h6>
        </div>
    </nav>
</header>
<!--end to header-->
<div class="login-body">
    <h5 class="fw-bold">Selamat Datang</h5>
    <p class="mb-0">Mulai belanja di lapak kami.</p>
    <form class="mt-4">

        <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInputEmail" placeholder="name@example.com" value="name@example.com">
            <label for="floatingInputEmail">Email</label>
        </div>

        <div class="input-group mb-3" id="show_hide_password">
            <div class="form-floating flex-grow-1">
                <input type="password" class="form-control rounded-3 rounded-end-0 border-end-0" id="floatingInputPassword" placeholder="Enter Password" value="password123">
                <label for="floatingInputPassword">Password</label>
            </div>
            <span class="input-group-text bg-transparent rounded-start-0 rounded-3"><i class="bi bi-eye-slash"></i></span>
        </div>

        <div class="d-flex align-items-center justify-content-between mb-3">

            <div class=""><a href="<?php echo base_url('auth/forgot') ?>" class="forgot-link">Lupa Password?</a></div>
        </div>
        <div class="mb-0 d-grid">
            <a href="home.html" class="btn btn-dark btn-ecomm rounded-3">Log In</a>
        </div>

    </form>
</div>