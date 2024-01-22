<?php $this->load->view('admin/layouts/header'); ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Edite Users</li>
            </ol>
        </nav>
    </div>
    <section class="section contact">
        <div class="row gy-4">
            <div class="col-xl-6">
                <div class="card p-4 bg-light">
                    <form  method="post" action="<?php echo base_url().'admin/update_user/'. $alldatausers['id'];?>" >
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" value="<?php echo $alldatausers['name']; ?>" name="name" class="form-control">
                            </div>
                            <div class="col-md-6 ">
                                <input type="text" value="<?php echo $alldatausers['email']; ?>" class="form-control" name="email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" value="<?php echo $alldatausers['number']; ?>" class="form-control" name="number">
                            </div>
                            <div class="col-md-12">
                                <input type="text" value="<?php echo $alldatausers['gender']; ?>" class="form-control" name="gender">
                            </div>
                            <div class="col-md-12">
                                <input type="file" value="<?php echo $alldatausers['image']; ?>" class="form-control" name="image">
                            </div>
                            <div class="col-md-12">
                                <input type="date" value="<?php echo $alldatausers['dob']; ?>" class="form-control" name="dob">
                            </div>
                            <div class="col-md-12">
                                <input type="text" value="<?php echo $alldatausers['user_type']; ?>" class="form-control" name="password">
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->load->view('admin/layouts/footer'); ?>