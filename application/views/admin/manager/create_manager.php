<?php $this->load->view('admin/layouts/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>User Registration Form</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">Create-Manager</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Registration Form</h5>
                        <form class="row g-3" method="post" action="<?php echo base_url('admin/store_manager');?>">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Your Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php $this->load->view('admin/layouts/footer'); ?>