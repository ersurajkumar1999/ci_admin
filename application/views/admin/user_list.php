<?php $this->load->view('admin/layouts/header'); ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a style="margin-left:90%; margin-top:20px;" href="<?php echo base_url('admin/add_user'); ?>" class="btn btn-primary w-20">Add-New</a>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Gender</th>
                                    <th>Image</th>
                                    <th>DOB</th>
                                    <th>Type</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php if (!empty($userdata)) {
                                        foreach ($userdata as $alldatausers) { ?>
                                <tr>
                                    <td><?php echo $alldatausers['id'] ?></td>
                                    <td><?php echo $alldatausers['name'] ?></td>
                                    <td><?php echo $alldatausers['email'] ?></td>
                                    <td><?php echo $alldatausers['number'] ?></td>
                                    <td><?php echo $alldatausers['gender'] ?></td>
                                    <td><?php echo $alldatausers['image'] ?></td>
                                    <td><?php echo $alldatausers['dob'] ?></td>
                                    <td><?php echo $alldatausers['user_type'] ?></td>
                                    <td><?php echo $alldatausers['created_at'] ?></td>
                                    <td><?php echo $alldatausers['updated_at'] ?></td>
                                <td>
                                        <a href="<?php echo base_url('admin/editeuser/' . $alldatausers['id']); ?>" class=" btn btn-primary">Edit</a>
                                </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/deleteUser/' . $alldatausers['id']); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php }
                                    } else { ?>
                            <tr>
                                <td colspan=5>Records not dound</td>
                            </tr>
                        <?php } ?>
                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php $this->load->view('admin/layouts/footer'); ?>