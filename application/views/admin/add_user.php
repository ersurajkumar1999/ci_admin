<?php $this->load->view('admin/layouts/header'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
    </div>

    <section class="section contact">

        <div class="row gy-4">

            <div class="col-xl-6">
                <div class="card p-4 bg-light">
                    <form action="<?php echo base_url('admin/insertuser');?>" method="post" >
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                                <input type="hidden" name="user_type" value="Manager">
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="email" placeholder="Your Email">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="number" placeholder="Your Number">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="gender" placeholder="Your Gender">
                            </div>

                            <div class="col-md-12">
                                <input type="file" class="form-control" name="image" placeholder="Uplode Image">
                            </div>

                            <div class="col-md-12">
                                <input type="date" class="form-control" name="dob" placeholder="DOB" >
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="password" placeholder="Password" >
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>

</main><!-- End #main -->
<?php $this->load->view('admin/layouts/footer'); ?>