<?php $this->load->view('admin/layouts/header'); ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Add New User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                <li class="breadcrumb-item">Ragistation</li>
                <li class="breadcrumb-item active">Add New User</li>
            </ol>
        </nav>
    </div>
    <div style="background-color: aquamarine; width:700px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="container">
        <div class="d-flex justify-content-center py-4">
            <div class="col-md-8">
                <form method="post" action="<?php echo base_url('admin/insertuser'); ?>">
                    <div class="d-flex justify-content-center py-4">
                        <a href="<?php echo base_url('admin/dashboard'); ?>" class="logo d-flex align-items-center w-auto">
                            <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="">
                            <span class="d-none d-lg-block">NiceAdmin</span>
                        </a>
                    </div>
                    <div class="form-group">
                        <label for="username"></label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your admin name" required>
                    </div>

                    <div class="form-group pt-3">
                        <label for="email"></label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your admin email:" required>
                    </div>

                    <div class="form-group pt-3">
                        <label for="number"></label>
                        <input type="text" class="form-control" id="number" name="number" placeholder="Enter your phone number" required>
                    </div>

                    <div class="form-group pt-3">
                        <label for="password"></label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                    </div>

                    <div class="form-group pt-3">
                        <label for="confirmPassword"></label>
                        <input type="text" class="form-control" id="confirmPassword" name="confirmpassword" placeholder="Confirm password" required>
                    </div>
                    <button class="btn btn-primary mt-4">Register</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view('admin/layouts/footer'); ?>