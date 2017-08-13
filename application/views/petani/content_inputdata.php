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
                                    <form action="proses_inputDataQRcode" method="post">
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
                                        <?php
                                        $extract = $this->session->userdata();
                                        $id = $extract["id"];

                                        echo "<input type='hidden' name='id_petani' value='".$id."'>";
                                        ?>
                                        <div class="form-group">
                                          <label for="nama">Luas Lahan:</label>
                                          <input type="text" class="form-control" name="luas_lahan" placeholder="dalam meter persegi" required>
                                        </div>


                                        <div class="form-group">
                                          <label for="email">Benih:</label>
                                          <select name='id_benih' class="form-control">
                                            <?php foreach ($data_benih as $benih) {
                                             echo "<option ' value='".$benih['nama_benih']."'>".$benih['nama_benih']."</option>";
                                            }?>  
                                          </select>
                                        </div>

                                        <div class="form-group">
                                          <label for="email">Pupuk:</label>
                                          <select name='id_pupuk' class="form-control">
                                            <?php foreach ($data_pupuk as $pupuk) {
                                             echo "<option  value='".$pupuk['nama_pupuk']."'>".$pupuk['nama_pupuk']."</option>";
                                            }?>  
                                          </select>
                                        </div>

                                        <div class="form-group">
                                          <label for="pestisida">Pestisida:</label>
                                          <input type="text" class="form-control" name="pestisida" placeholder="dalam persen" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="umur_tanam">umur:</label>
                                          <input type="text" class="form-control" name="umur_tanam" placeholder="dalam hari" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="hasil_tanam">Hasil Tanam:</label>
                                          <input type="text" class="form-control" name="hasil_tanam" placeholder="dalam kg" required>
                                        </div>

                                        <div class="form-group">
                                          <label for="kadar_air">Kadar Air:</label>
                                          <input type="text" class="form-control" name="kadar_air" placeholder="dalam persen" required>
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