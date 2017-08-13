    <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard<small>Statistics Overview</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Ta Data Pengguna</h3>
                            </div>
                            <div class="panel-body">
                                <table id="myTable" class="table table-striped table-bordered table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th>Luas Lahan</th>
                                        <th>Pestisida</th>
                                        <th>Umur Tanam</th>
                                        <th>Hasil Tanam</th>
                                        <th>Pupuk</th>
                                        <th>Benih</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($data as $row ) {
                                        echo "<tr>
                                            <td>".$row['luas_lahan']."</td>
                                            <td>".$row['pestisida']."</td>
                                            <td>".$row['umur_tanam']."</td>
                                            <td>".$row['hasil_tanam']."</td>
                                            <td>".$row['id_pupuk']."</td>
                                            <td>".$row['id_benih']."</td>
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