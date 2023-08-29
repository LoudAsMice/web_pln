<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Kelola Tarif</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Tarif</a>
                                </li>
                                <li class="breadcrumb-item active">Table Tarif
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">

                <a data-target="#modaladd" data-toggle="modal" class="MainNavText btn btn-info float-md-right" id="MainNavHelp" href="#modaladd"><i class="la la-plus"></i> Tambah Baru</a>
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
                                        <h4 class="card-title">Table Tarif</h4>
                                        <a href="#" class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped" width="100%" id="table">
                                            <thead> 
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Tarif</th>
                                                    <th>Golongan</th>
                                                    <th>Daya</th>
                                                    <th>Tarif/kWh</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $sql = $action->query("SELECT * FROM tarif");
                                            $dta = "";
                                            $i = 1;
                                            foreach ($sql as $data){
                                            ?>
                                            <tr>
                                                <td><?= $i; $i++; ?></td>
                                                <td><?= $data['kode_tarif'] ?></td>
                                                <td><?= $data['golongan'] ?></td>
                                                <td><?= $data['daya'] ?></td>
                                                <td><?php $action->rupiah($data['tarif_perkwh']) ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item modaledit" data-id="<?= $data['id_tarif'];?>" data-tarif="<?= $data['tarif_perkwh'];?>" data-golongan="<?= $data['golongan'];?>" data-daya="<?= $data['daya'];?>" data-target="#modaledit" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modalaksi" onclick="">Edit</a></li>
                                                            <li><a onclick="archiveFunction(event)" href="?menu=tarif&action=delete&id=<?= base64_encode($data['id_tarif']); ?>" class="dropdown-item">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
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
