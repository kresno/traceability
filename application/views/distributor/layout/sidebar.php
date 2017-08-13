    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if($state == "dash") {echo "class='active'";} else {echo "&nbsp";} ?> >
                        <a href="<?php echo base_url()?>index.php/petani/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dasboard </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> QR code <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>index.php/petani/dashboard/inputDataQRcode"><i class="fa fa-fw fa-pencil"></i> Create </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>index.php/petani/dashboard/lihatQRcode"><i class="fa fa-fw fa-qrcode"></i> Lihat </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
