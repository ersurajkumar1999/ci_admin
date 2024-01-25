<?php $this->load->view('admin/layouts/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>users List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">users List</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">users List</h5>
                        <a href="<?php echo base_url("admin/create_user"); ?>" class="btn btn-info">Add New</a>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>UserType</th>
                                    <!-- <th>Number</th> -->
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $key => $users) { ?>
                                    <tr>
                                        <td><?php echo $key + 1 ?></td>
                                        <td><?php echo $users['name']; ?></td>
                                        <td><?php echo $users['email']; ?></td>
                                        <td><?php echo $users['user_type']; ?></td>
                                        
                                        <td><?php echo date('d-m-Y h:i A', strtotime($users['created_at'])); ?></td>
                                        <td>
                                            <a href="<?php echo base_url("admin/user_edit/"  .$users['id']); ?>" class="btn btn-info">Edit</a>
                                            <a href="<?php echo base_url('admin/deleteUser/' . $users['id']); ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
<?php $this->load->view('admin/layouts/footer'); ?>