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
                        <h5 class="card-title">Datatables</h5>
                        <a style="margin-left:80%;" href="<?php echo base_url('admin/add_new_user'); ?>" class="btn btn-primary w-24">Add New Users</a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <b>Admin_</b>id
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Password</th>
                                    <th>CunfurmPas..</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Created_at</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Updated_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php if (!empty($admindata)) {
                                        foreach ($admindata as $alldataadmin) { ?>
                                <tr>
                                    <td><?php echo $alldataadmin['id'] ?></td>
                                    <td><?php echo $alldataadmin['admin_name'] ?></td>
                                    <td><?php echo $alldataadmin['admin_email'] ?></td>
                                    <td><?php echo $alldataadmin['phone_number'] ?></td>
                                    <td><?php echo $alldataadmin['admin_password'] ?></td>
                                    <td><?php echo $alldataadmin['confrum_password'] ?></td>
                                    <td><?php echo $alldataadmin['created_at'] ?></td>
                                    <td><?php echo $alldataadmin['updated_at'] ?></td>

                                    <td>
                                        <a href="<?php echo base_url('admin/edituser_admin/' . $alldataadmin['id']); ?>" class=" btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/deleteAdmin/' . $alldataadmin['id']); ?>" class="btn btn-danger" onclick=" return confirmdelete()">Delete</a>
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
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php $this->load->view('admin/layouts/footer'); ?>
<!-- <script>
    function confirmdelete() {
        var x = confirm("Are you sure you want to delete?");
        if (x) {
            return true;
        } else {
            return false;
        }
    }
</script> -->