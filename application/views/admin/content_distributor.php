    <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Data Pengguna</h3>
                            </div>
                            <div class="panel-body">

                            <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>index.php/admin/data_distributor/addUser"> <i class="fa fa-plus"></i> Tambah Data </a> <br><br>

                                <table id="myTable" class="table table-striped table-bordered table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>email</th>
                                        <th>password</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($data as $row ) {
                                        echo "<tr>
                                            <td>".$row['nama']."</td>
                                            <td>".$row['email']."</td>
                                            <td>".$row['password']."</td>
                                            <td>"."<a class='btn btn-warning' href='".base_url()."index.php/admin/data_distributor/editData/".$row['id']."'><i class='fa fa-pencil-square-o'></i>Edit</a> &nbsp; &nbsp; <a class='btn btn-danger' href='".base_url()."index.php/admin/data_distributor/deleteUser/".$row['id']."'><i class='fa fa-trash-o' aria-hidden='true'></i>Hapus</a>"."</td>
                                        </tr>
                                                ";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
    </div>
     <!-- /#page-wrapper -->

</div>