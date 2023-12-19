<?php include 'cek_login.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include('koneksi.php'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VANTA | Tambah Buku</title>

    <!-- Head -->
    <?php include 'head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed dark-mode">
    <div class="wrapper">

        <!-- Preloader -->
        <?php include 'preloader.php'; ?>

        <!-- Navbar -->
        <?php include 'navbar.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Buku</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Daftar Buku</li>
                                <li class="breadcrumb-item active">Tambah Buku</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Your Form Here -->
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="aksi_buku.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama_buku">Nama Buku</label>
                                    <input type="text" class="form-control" id="nama_buku" name="nama_buku" placeholder="Masukkan nama buku">
                                </div>

                                <div class="form-group">
                                    <label for="penulis">Penulis</label>
                                    <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan nama penulis">
                                </div>

                                <div class="form-group">
                                    <label for="genre">Genre</label>
                                    <select class="form-control select2" data-placeholder="Pilih Genre" tabindex="-1" id="genre" name="genre[]">
                                        <option selected disabled>Pilih Genre</option>
                                        <?php
                                        $sql = "SHOW COLUMNS FROM buku WHERE Field = 'genre'";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                // Extract ENUM values from the column definition
                                                preg_match("/^enum\((.*)\)$/", $row['Type'], $matches);
                                                $enum = str_getcsv($matches[1], ",", "'");
                                            }
                                        }

                                        if (!empty($enum)) {
                                            foreach ($enum as $value) {
                                                echo "<option value='$value'>$value</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea class="form-control" id="sinopsis" name="sinopsis" placeholder="Masukkan sinopsis buku"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="ilustrasi">Ilustrasi</label>
                                    <input type="file" class="form-control-file" id="ilustrasi" name="ilustrasi" accept="image/*">
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.card -->
                </div><!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://vantatranslation.site">VANTA Translation</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <?php include 'script.php'; ?>
</body>

</html>