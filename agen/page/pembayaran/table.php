<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Pembayaran</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Pembayaran</a>
                            </li>
                            <li class="breadcrumb-item active">Table Pembayaran
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">

            <a data-target="#modalsearch" data-toggle="modal" class="MainNavText btn btn-info float-md-right" id="MainNavHelp" href="#modaladd"><i class="la la-plus"></i> Bayar</a>
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
                                    <h4 class="card-title">Table Pembayaran</h4>
                                    <a href="#" class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped table-responsive" width="100%" id="table">
                                        <thead> 
                                            <tr>
                                                <th>No</th>
                                                <th>ID Pembayaran</th>
                                                <th>ID Pelanggan</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Waktu</th>
                                                <th>Bulan</th>
                                                <th>Biaya admin</th>
                                                <th>Total akhir</th>
                                                <th>Bayar</th>
                                                <th>Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $idagen = $_SESSION['id_agen'];
                                        // var_dump($_SESSION['id_agen']);
                                        $sql = $action->query("SELECT * FROM pembayaran as p JOIN pelanggan as e ON p.id_pelanggan = e.id_pelanggan WHERE p.id_agen = '$idagen'");
                                        $dta = "";
                                        $i = 1;
                                        foreach ($sql as $data){
                                        ?>
                                        <tr>
                                            <td><?= $i; $i++; ?></td>
                                            <td><?= $data['id_pembayaran'] ?></td>
                                            <td><?= $data['id_pelanggan'] ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['waktu_bayar'] ?></td>
                                            <td><?= $action->bulan($data['bulan_bayar'])." ".$data['tahun_bayar'];?></td>
                                            <td><?= $data['biaya_admin'];?></td>
                                            <td><?= $data['total_akhir'];?></td>
                                            <td><?= $data['bayar'];?></td>
                                            <td><?= $data['kembali'];?></td>
                                        </tr>
                                        <?php }?>
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