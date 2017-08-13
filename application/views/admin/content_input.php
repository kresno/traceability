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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Data Benih</h3>
                            </div>
                            <div class="panel-body">
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>index.php/admin/data_input/addBenih"> <i class="fa fa-plus"></i> Tambah Data </a> <br><br>
                                <table id="myTable2" class="table table-striped table-bordered table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Nama Benih</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($data_benih as $benih ) {
                                        echo "<tr>
                                            <td>".$benih['nama_benih']."</td>
                                            <td>"."<a class='btn btn-warning' href='".base_url()."index.php/admin/data_input/editInputBenih/".$benih['id_benih']."'>Edit</a> &nbsp; &nbsp; <a class='btn btn-danger' href='".base_url()."index.php/admin/data_input/deleteBenih/".$benih['id_benih']."'>Hapus</a>"."</td>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Data Pupuk</h3>
                            </div>
                            <div class="panel-body">
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>index.php/admin/data_input/addPupuk"> <i class="fa fa-plus"></i> Tambah Data </a> <br><br>
                                
                                <table id="myTable" class="table table-striped table-bordered table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Nama Pupuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($data_pupuk as $pupuk ) {
                                        echo "<tr>
                                            <td>".$pupuk['nama_pupuk']."</td>
                                            <td>"."<a class='btn btn-warning' href='".base_url()."index.php/admin/data_input/editInputPupuk/".$pupuk['id_pupuk']."'>Edit</a> &nbsp; &nbsp; <a class='btn btn-danger' href='".base_url()."index.php/admin/data_input/deletePupuk/".$pupuk['id_pupuk']."'>Hapus</a>"."</td>
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