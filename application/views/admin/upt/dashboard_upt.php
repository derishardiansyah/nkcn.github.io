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
                    <span>Dashboard UPT</span></a>
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

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
                            <h6 class="m-0 font-weight-bold text-primary">Data UPT</h6>
                        </div>
                        <div class="card-body">
                            <?php echo $this->session->flashdata('pesan'); ?>
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Upt</th>
                                            <th>Provinsi</th>
                                            <th>Alamat</th>
                                            <th>Kontak</th>
                                            <th>Website</th>
                                            <th>Latitude</th>
                                            <th>Longtitude</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data->result_array() as $i) :
                                            $id_upt = $i['id_upt'];
                                            $nama_upt = $i['nama_upt'];
                                            $provinsi = $i['provinsi'];
                                            $alamat = $i['alamat'];
                                            $kontak = $i['kontak'];
                                            $website = $i['website'];
                                            $latitude = $i['latitude'];
                                            $longtitude = $i['longtitude'];
                                            $gambar = $i['gambar'];
                                        ?>
                                            <tr>
                                                <td><?php echo $i['id_upt']; ?> </td>
                                                <td><?php echo $i['nama_upt']; ?> </td>
                                                <td><?php echo $i['provinsi']; ?> </td>
                                                <td><?php echo $i['alamat']; ?> </td>
                                                <td><?php echo $i['kontak']; ?> </td>
                                                <td><?php echo $i['website']; ?></td>
                                                <td><?php echo $i['latitude']; ?> </td>
                                                <td><?php echo $i['longtitude']; ?></td>
                                                <td><?php echo $i['gambar']; ?></td>
                                                <td>
                                                    <!-- membuat tombol ubah dan hapus -->
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ubahmodal<?php echo $i['id_upt']; ?>">
                                                        <i class="fa fa-edit"></i>Ubah
                                                    </button>
                                                    <p>&nbsp;</p>
                                                    <a href="<?php echo base_url() ?>admin_upt/hapus_upt/<?php echo $i['id_upt']; ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')">
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

            <!-- Modal Tambah -->
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
                            <?php echo form_open_multipart('admin_upt/tambah_upt/simpan'); ?>
                            <div class="form-group">
                                <label>Nama Upt</label>
                                <input type="text" name="nama_upt" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Provinsi</label>
                                <input type="text" name="provinsi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kontak</label>
                                <input type="text" name="kontak" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" name="website" class="form-control">
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
                                <label>Gambar</label>
                                <input type="text" name="gambar" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" href="<?= site_url('admin_upt') ?>">Simpan</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Ubah -->
            <?php $no = 0;
            foreach ($data->result_array() as $i) : $no++; ?>
                <div class="modal fade" id="ubahmodal<?php echo $i['id_upt']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open_multipart('admin_upt/proses_ubah_upt'); ?>
                                <input type="hidden" name="id_upt" id="id_upt" value="<?php echo $i['id_upt']; ?>">
                                <div class="form-group">
                                    <label>Nama Upt</label>
                                    <input type="text" name="nama_upt" class="form-control" id="nama_upt" value="<?php echo $i['nama_upt']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" id="provinsi" value="<?php echo $i['provinsi']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $i['alamat']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kontak</label>
                                    <input type="text" name="kontak" class="form-control" id="kontak" value="<?php echo $i['kontak']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" name="website" class="form-control" id="website" value="<?php echo $i['website']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" name="latitude" class="form-control" id="latitude" value="<?php echo $i['latitude']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Longtitude</label>
                                    <input type="text" name="longtitude" class="form-control" id="latitude" value="<?php echo $i['latitude']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="text" name="gambar" class="form-control" id="gambar" value="<?php echo $i['gambar']; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" href="<?= site_url('admin_upt') ?>">Simpan</button>
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