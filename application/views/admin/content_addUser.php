    <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashoard<small>Statistics Overview</small>
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
                                <div class="col-md-6">
                                    <form action="proses_addUser" method="post">
                                        <!-- Ini bua nentuin rolenya -->
                                        <input type="hidden" name="role" value="<?php switch ($this->uri->segment(2)) {
                                            case 'data_petani':
                                                echo "1";
                                                break;

                                            case 'data_pengepul':
                                                echo "2";
                                                break;

                                            case 'data_distributor':
                                                echo "3";
                                                break;

                                            default:
                                                # code...
                                                break;
                                        } ?>">

                                        <div class="form-group">
                                          <label for="nama">Nama:</label>
                                          <input type="text" class="form-control" name="nama" >
                                        </div>

                                        <div class="form-group">
                                          <label for="email">Email:</label>
                                          <input type="text" class="form-control" name="email">
                                        </div>

                                        <div class="form-group">
                                          <label for="password">Password:</label>
                                          <input type="text" class="form-control" name="password">
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