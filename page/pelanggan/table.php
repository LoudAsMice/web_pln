<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Kelola Pelanggan</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Pelanggan</a>
                                </li>
                                <li class="breadcrumb-item active">Table Pelanggan
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
                                        <h4 class="card-title">Table Pelanggan</h4>
                                        <a href="#" class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped" width="100%" id="table">
                                            <thead> 
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID Pelanggan</th>
                                                    <th>No. Meter</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Tenggang</th>
                                                    <th>Kode Tarif</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            $sql = $action->query("SELECT * FROM pelanggan as p INNER JOIN tarif as t WHERE p.id_tarif = t.id_tarif");
                                            $i = 1;
                                            foreach ($sql as $data){
                                            ?>
                                            <tr>
                                                <td><?= $i; $i++; ?></td>
                                                <td><?= $data['id_pelanggan'] ?></td>
                                                <td><?= $data['no_meter'] ?></td>
                                                <td><?= $data['nama'] ?></td>
                                                <td><?= $data['alamat'] ?></td>
                                                <td><?= $data['tenggang'] ?></td>
                                                <td><?= $data['kode_tarif'] ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item modaledit" data-idpel="<?= $data['id_pelanggan'];?>" data-no="<?= $data['no_meter'];?>" data-nama="<?= $data['nama'];?>" data-alamat="<?= $data['alamat'];?>" data-tenggang="<?= $data['tenggang'];?>" data-tarif="<?= $data['id_tarif'];?>" data-target="#modaledit" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modalaksi" onclick="">Edit</a></li>
                                                            <li><a onclick="archiveFunction(event)" href="?menu=pelanggan&action=delete&id=<?= base64_encode($data['id_pelanggan']); ?>" class="dropdown-item">Delete</a></li>
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
