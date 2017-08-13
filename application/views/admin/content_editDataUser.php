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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Edit Data Pengguna</h3>
                            </div>
                            <?php
                                foreach ($data as $row)
                            ?>

                            <div class="panel-body">
                                <div class="col-md-6">
                                    <form action="../updateDataUser/<?php echo $row['id']; ?>" method="post">
                                        <div class="form-group">
                                          <label for="nama">Nama:</label>
                                          <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
                                        </div>

                                        <div class="form-group">
                                          <label for="email">Email:</label>
                                          <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                                        </div>

                                        <div class="form-group">
                                          <label for="password">Password:</label>
                                          <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
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