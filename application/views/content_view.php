<div class="intro-header">
        <div class="container">

            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Data QRCode</h3>
                            </div>
                            <div class="panel-body">
                                <table id="myTable2" class="table table-striped table-bordered table-hover table-responsive">
                                    <thead>
                                    <tr>
                                    	<th> Luas Lahan </th>
                                    	<th> Nama Pupuk </th>
                                        <th> Nama Benih</th>
                                        <th> Pestisida</th>
                                        <th> Umur Tanam</th>
                                        <th> Hasil Tanam</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($data as $row ) {
                                        echo "<tr>
                                            <td>".$row['luas_lahan']."</td>
                                            <td>".$row['id_pupuk']."</td>
                                            <td>".$row['id_benih']."</td>
                                            <td>".$row['pestisida']."</td>
                                            <td>".$row['umur_tanam']."</td>
                                            <td>".$row['hasil_tanam']."</td>
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

        </div>
        <!-- /.container -->
    </div>