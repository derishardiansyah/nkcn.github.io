<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar  " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <img class="animation__shake" src="<?= base_url() ?>vendor/assets/image/logo1.png" alt="AdminLTELogo" height="40" width="40">
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Maps</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Admin & User
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('admin') ?>">
                    <i class="fas fa-cogs"></i>
                    <span>Admin</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('admin_user') ?>">
                    <i class="fas fa-users"></i>
                    <span>User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Maps & Lembaga
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin_maps') ?>">
                    <i class="far fa-map"></i>
                    <span>Maps</span></a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('admin_lembaga') ?>">
                    <i class="far fa-handshake"></i>
                    <span>Lembaga</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data UPT
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin_upt') ?>">
                    <i class="far fa-building"></i>
                    <span>UPT</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
                                <!-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="<?= site_url('daftar') ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah
                    </button>
                    <br><br>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Maps</h6>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lembaga</th>
                                            <th>Isu</th>
                                            <th>Wilayah Kegiatan</th>
                                            <th>Latitude</th>
                                            <th>Longtitude</th>
                                            <th>Tahun</th>
                                            <th>Negara</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data->result_array() as $i) :
                                            $id_lembaga = $i['id_lembaga'];
                                            $nama_lembaga = $i['nama_lembaga'];
                                            $isu = $i['isu'];
                                            $wilayah_kegiatan = $i['wilayah_kegiatan'];
                                            $latitude = $i['latitude'];
                                            $longtitude = $i['longtitude'];
                                            $tahun = $i['tahun'];
                                            $negara = $i['negara'];
                                        ?>
                                            <tr>
                                                <td><?php echo $i['id_lembaga']; ?> </td>
                                                <td><?php echo $i['nama_lembaga']; ?> </td>
                                                <td><?php echo $i['isu']; ?> </td>
                                                <td><?php echo $i['wilayah_kegiatan']; ?> </td>
                                                <td><?php echo $i['latitude']; ?></td>
                                                <td><?php echo $i['longtitude']; ?></td>
                                                <td><?php echo $i['tahun']; ?> </td>
                                                <td><?php echo $i['negara']; ?> </td>
                                                <td>
                                                    <!-- membuat tombol ubah dan hapus -->
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ubahmodal<?php echo $i['id_lembaga']; ?>">
                                                        <i class="fa fa-edit"></i>Ubah
                                                    </button>
                                                    <p>&nbsp;</p>
                                                    <a href="<?php echo base_url() ?>admin_maps/hapus_maps/<?php echo $i['id_lembaga']; ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')">
                                                        <i class="fa fa-edit"></i>Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('admin_maps/tambah_maps/simpan'); ?>

                            <div class="form-group">
                                <label>Nama Lembaga</label>
                                <input type="text" name="nama_lembaga" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Isu</label>
                                <input type="text" name="isu" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Wilayah Kegiatan</label>
                                <input type="text" name="wilayah_kegiatan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" name="latitude" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Longtitude</label>
                                <input type="text" name="longtitude" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" name="tahun" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Negara</label>
                                <input type="text" name="negara" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" href="<?= site_url('admin_maps') ?>">Simpan</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Ubah-->
            <?php $no = 0;
            foreach ($data->result_array() as $i) : $no++; ?>
                <div class="modal fade" id="ubahmodal<?php echo $i['id_lembaga']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('admin_maps/proses_ubah_maps'); ?>
                                <input type="hidden" name="id_lembaga" id="id_lembaga" value="<?php echo $i['id_lembaga']; ?>">
                                <div class="form-group">
                                    <label>Nama Lembaga</label>
                                    <input type="text" name="nama_lembaga" class="form-control" id="nama_lembaga" value="<?php echo $i['nama_lembaga']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Isu</label>
                                    <input type="text" name="isu" class="form-control" id="isu" value="<?php echo $i['isu']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Wilayah Kegiatan</label>
                                    <input type="text" name="wilayah_kegiatan" class="form-control" id="wilayah_kegiatan" value="<?php echo $i['wilayah_kegiatan']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="latitude" class="form-control" id="latitude" value="<?php echo $i['latitude']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Longtitude</label>
                                    <input type="text" name="longtitude" class="form-control" id="longtitude" value="<?php echo $i['longtitude']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" name="tahun" class="form-control" id="tahun" value="<?php echo $i['tahun']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Negara</label>
                                    <input type="text" name="negara" class="form-control" id="negara" value="<?php echo $i['negara']; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" href="<?= site_url('admin_maps') ?>">Simpan</button>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Pilih logout untuk mengakhiri sesi</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('dashboard/logout'); ?> ">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>