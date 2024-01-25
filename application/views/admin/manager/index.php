<?php $this->load->view('admin/layouts/header'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Manager List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Manager List</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manager List</h5>
                        <a href="<?php echo base_url('admin/create_manager');?>" class="btn btn-info">Add New</a>
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
                                <?php foreach ($managers as $key => $manager) { ?>
                                    <tr>
                                        <td><?php echo $key + 1 ?></td>
                                        <td><?php echo $manager['name']; ?></td>
                                        <td><?php echo $manager['email']; ?></td>
                                        <td><?php echo $manager['user_type']; ?></td>                                        
                                        <td><?php echo date('d-m-Y h:i A', strtotime($manager['created_at'])); ?></td>
                                        <td>
                                            <a href="<?php echo base_url("admin/manager_edit/"  .$manager['id']); ?>" class="btn btn-info">Edit</a>
                                            <a href="<?php echo base_url('admin/deletemanager/' . $manager['id']); ?>" class="btn btn-danger">Delete</a>
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