<!--start category-->
<h4>Story</h4>
<div class="py-2"></div>
<div class="category">
    <div class="d-flex align-items-center gap-3 justify-content-between">
        <div class="category-img">
            <figure>
                <a href="shop.html">
                    <img src="https://via.placeholder.com/551X551" class="img-fluid rounded-circle" alt="">
                </a>
                <figcaption>Men</figcaption>
            </figure>
        </div>
        <div class="category-img">
            <figure>
                <a href="shop.html">
                    <img src="https://via.placeholder.com/551X551" class="img-fluid rounded-circle" alt="">
                </a>
                <figcaption>Women</figcaption>
            </figure>
        </div>
        <div class="category-img">
            <figure>
                <a href="shop.html">
                    <img src="https://via.placeholder.com/551X551" class="img-fluid rounded-circle" alt="">
                </a>
                <figcaption>Kids</figcaption>
            </figure>
        </div>
        <div class="category-img">
            <figure>
                <a href="shop.html">
                    <img src="https://via.placeholder.com/551X551" class="img-fluid rounded-circle" alt="">
                </a>
                <figcaption>On Sales</figcaption>
            </figure>
        </div>

    </div>
</div>
<!--end category-->

<div class="py-2"></div>

<h4>Promo</h4>
<div class="py-2"></div>
<!--start banner slider-->
<div class="banner-slider">
    <div class="banner-item">
        <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
    </div>
    <div class="banner-item">
        <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
    </div>
    <div class="banner-item">
        <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
    </div>
    <div class="banner-item">
        <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
    </div>
    <div class="banner-item">
        <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
    </div>
    <div class="banner-item">
        <a href="shop.html"><img src="https://via.placeholder.com/1200X675" class="img-fluid rounded-3" alt=""></a>
    </div>
</div>
<!--end banner slider-->


<div class="py-2"></div>

<!--start features-->
<div class="features-section">
    <div class="row row-cols-2 row-cols-md-4 g-3">
        <div class="col d-flex">
            <div class="card rounded-3 w-100">
                <div class="card-body">
                    <div class="icon-wrapper text-center">
                        <div class="noti-box mb-1 mx-auto bg-primary">
                            <i class="bi bi-truck"></i>
                        </div>
                        <p class="fw-bold mb-0 text-dark">Free Delivery</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card rounded-3 w-100">
                <div class="card-body">
                    <div class="icon-wrapper text-center">
                        <div class="noti-box mb-1 mx-auto bg-purple">
                            <i class="bi bi-credit-card"></i>
                        </div>
                        <p class="fw-bold mb-0 text-dark">Secure Payment</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card rounded-3 w-100">
                <div class="card-body">
                    <div class="icon-wrapper text-center">
                        <div class="noti-box mb-1 mx-auto bg-red">
                            <i class="bi bi-minecart-loaded"></i>
                        </div>
                        <p class="fw-bold mb-0 text-dark">Free Returns</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex">
            <div class="card rounded-3 w-100">
                <div class="card-body">
                    <div class="icon-wrapper text-center">
                        <div class="noti-box mb-1 mx-auto bg-green">
                            <i class="bi bi-headset"></i>
                        </div>
                        <p class="fw-bold mb-0 text-dark">24/7 Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end features-->

<div class="py-2"></div>

<!--start trending category-->
<div class="trending-category">
    <h4 class="my-2 text-center fw-bold section-title text-custom">Paling Laris</h4>
    <div class="row row-cols-2 row-cols-md-3 g-3">
        <?php for ($i = 1; $i <= 6; $i++) : ?>

            <div class="col d-flex">
                <div class="card rounded-0 w-100 rounded-3 overflow-hidden card-custom">
                    <a href="shop.html"><img src="<?php echo base_url('assets/img/img4.jpg') ?>" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                        <a href="<?php echo base_url('produk/detail') ?>" class="mb-0 fw-bold">Detail Produk</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>


    </div>
</div>
<!--end trending category-->

<div class="py-2"></div>