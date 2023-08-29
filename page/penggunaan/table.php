<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Kelola Penggunaan</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Penggunaan</a>
                                </li>
                                <li class="breadcrumb-item active">Table Penggunaan
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">

                <a data-target="#modaladd" data-toggle="modal" class="MainNavText btn btn-info float-md-right" id="MainNavHelp" href="#modaladd"><i class="la la-plus"></i> Input Penggunaan</a>
                </div> 
            </div>
            <div class="content-body">
                <!-- Add Doctors Form Wizard -->

                <section id="add-doctors">
                    <div class="icon-tabs">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Table Penggunaan</h4>
                                        <a href="#" class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped table-responsive" width="100%" id="table">
                                            <thead> 
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Penggunaan</th>
                                                    <th>ID Pelanggan</th>
                                                    <th>Nama</th>
                                                    <th>Bulan</th>
                                                    <th>Meter Awal</th>
                                                    <th>Meter Akhir</th>
                                                    <th>Tanggal Cek</th>
                                                    <th>Petugas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $sql = $action->query("SELECT id_penggunaan, l.id_pelanggan, bulan, tahun, meter_awal, meter_akhir, tgl_cek, t.id_petugas, l.nama as nama_pelanggan, t.nama as nama_petugas FROM penggunaan as p JOIN petugas as t ON p.id_petugas = t.id_petugas JOIN pelanggan as l ON p.id_pelanggan = l.id_pelanggan WHERE p.meter_akhir != 0 ORDER BY tgl_cek DESC");
                                            // var_dump($sql);
                                            $i = 1;
                                            foreach ($sql as $data){
                                            ?>
                                            <tr>
                                                <td><?= $i; $i++; ?></td>
                                                <td><?= $data['id_penggunaan'] ?></td>
                                                <td><?= $data['id_pelanggan'] ?></td>
                                                <td><?= $data['nama_pelanggan'] ?></td>
                                                <td><?= $action->bulan($data['bulan'])." ".$data['tahun'];?></td>
                                                <td><?= $data['meter_awal'] ?></td>
                                                <td><?= $data['meter_akhir'] ?></td>
                                                <td><?= $data['tgl_cek'] ?></td>
                                                <td><?= $data['nama_petugas'] ?></td>
                                                    <?php
                                                    }
                                                    ?>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
