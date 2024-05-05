<div class="card rounded-0 m-3 border-0">
    <div class="card-body">
        <div class="text-center">
            <img class="img-fluid" src="<?php echo base_url() ?>assets/img/access.png" alt="" />
        </div>
        <div class="text-center my-5">
            <h5 class="fw-bold">Kelola Lapak Ikan Anda Sendiri. </h5>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <strong><?php echo $this->session->flashdata('success'); ?></strong>

                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('failed')) : ?>
                <div class="alert alert-danger" role="alert">
                    <strong><?php echo $this->session->flashdata('failed'); ?></strong>

                </div>
            <?php endif; ?>
        </div>
        <div class="d-grid gap-3">
            <a href="<?php echo base_url('auth/login') ?>" class="btn btn-custom btn-primary rounded-3">Masuk</a>
            <a href="<?php echo base_url('auth/register') ?>" class="btn btn-outline-custom rounded-3">Daftar</a>
        </div>
    </div>
</div>