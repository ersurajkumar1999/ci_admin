<?php $this->load->view('admin/layouts/header'); ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Old User-data Update</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                <li class="breadcrumb-item">Update</li>
                <li class="breadcrumb-item active">Update</li>
            </ol>
        </nav>
    </div>
    <div style="background-color: aquamarine; width:700px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="container">
        <div class="d-flex justify-content-center py-4">
            <div class="col-md-8">
                <form method="post" action="<?php echo base_url() . 'admin/update_admin/' . $alldataadmin['id']; ?>">
                    <div class="d-flex justify-content-center py-4">
                        <a href="<?php echo base_url('admin/dashboard'); ?>" class="logo d-flex align-items-center w-auto">
                            <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="">
                            <span class="d-none d-lg-block">NiceAdmin</span>
                        </a>
                    </div>
                    <div class="form-group">
                        <label for="username"></label>
                        <input type="text" class="form-control" name="username" value="<?php echo set_value('username', $alldataadmin['admin_name']); ?>">
                    </div>

                    <div class="form-group pt-3">
                        <label for="email"></label>
                        <input type="text" class="form-control" name="email" value="<?php echo set_value('email', $alldataadmin['admin_email']); ?>">
                    </div>

                    <div class="form-group pt-3">
                        <label for="number"></label>
                        <input type="text" class="form-control" name="number" value="<?php echo set_value('email', $alldataadmin['phone_number']); ?>">
                    </div>

                    <div class="form-group pt-3">
                        <label for="password"></label>
                        <input type="text" class="form-control" name="password" value="<?php echo set_value('email', $alldataadmin['admin_password']); ?>">
                    </div>

                    <div class="form-group pt-3">
                        <label for="confirmPassword"></label>
                        <input type="text" class="form-control" name="confirmpassword" value="<?php echo set_value('email', $alldataadmin['confrum_password']); ?>">
                    </div>
                    <button class="btn btn-primary mt-4">Update</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view('admin/layouts/footer'); ?>