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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Edit Data Pupuk</h3>
                            </div>
                            <?php
                                foreach ($data as $row)
                            ?>

                            <div class="panel-body">
                                <div class="col-md-6">
                                    <form action="../updateDataPupuk/<?php echo $row['id_pupuk']; ?>" method="post">
                                        <div class="form-group">
                                          <label for="nama">Nama Pupuk:</label>
                                          <input type="text" class="form-control" name="nama_pupuk" value="<?php echo $row['nama_pupuk']; ?>">
                                        </div>
                                        <div class="form-group">
                                          <input type="submit" class="btn btn-primary form-control" >
                                        </div>
                                    </form>
                                </div>
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