    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if($state == "dash") {echo "class='active'";} else {echo "&nbsp";} ?> >
                        <a href="<?php echo base_url()?>index.php/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dasboard </a>
                    </li>
                    <li <?php if($state == "pet") {echo "class='active'";} else {echo "&nbsp";} ?> >
                        <a href="<?php echo base_url()?>index.php/admin/data_petani"><i class="fa fa-fw fa-table"></i> Data Petani </a>
                    </li>
                    <li <?php if($state == "peng") {echo "class='active'";} else {echo "&nbsp";} ?> >
                        <a href="<?php echo base_url()?>index.php/admin/data_pengepul"><i class="fa fa-fw fa-table"></i> Data Pengepul  </a>
                    </li>
                    <li <?php if($state == "dis") {echo "class='active'";} else {echo "&nbsp";} ?> >
                        <a href="<?php echo base_url()?>index.php/admin/data_distributor"><i class="fa fa-fw fa-table"></i> Data Distributor </a>
                    </li>
                    <li <?php if($state == "inp") {echo "class='active'";} else {echo "&nbsp";} ?> >
                        <a href="<?php echo base_url()?>index.php/admin/data_input"><i class="fa fa-fw fa-table"></i> Data Inputan </a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> QR code <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Tulis </a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-fw fa-qrcode"></i> Pindai </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
