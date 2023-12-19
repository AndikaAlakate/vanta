<!-- Main content -->
<div class="container-fluid" id="admin">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="card-title">Data Admin yang ada</h3>
                    <!-- Tombol "Tambah Admin" -->
                    <div class="card-tools">
                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addAdminModal">
                            <i class="fas fa-user-plus"></i> Tambah Admin
                        </a>
                        <button class="btn btn-info btn-sm" onclick="printTable()">
                            <i class="fas fa-print"></i> Print Tabel
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped dtr-inline"
                                        aria-describedby="example1_info">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No.</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                                <th>Foto</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['delete_username'])) {
                                                handleDelete($conn);
                                            }

                                            $no = 1;
                                            $sql = "SELECT * FROM admin";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<tr class="text-center align-middle m-auto">';
                                                    echo '<td>' . $no++ . '</td>';
                                                    echo "<td>{$row['username']}</td>";

                                                    // Display a hidden version of the password
                                                    echo '<td class="hidetext">' . str_repeat('*', strlen($row['password'])) . "</td>";

                                                    echo "<td>{$row['email']}</td>";
                                                    echo "<td>{$row['level']}</td>";

                                                    echo '<td class="text-center align-middle">';
                                                    if (!empty($row["foto"])) {
                                                        echo '<div class="d-flex justify-content-center align-items-center flex-wrap rounded-circle m-auto" style="width: 4rem; height: 4rem; overflow: hidden; background-image: url(../../img/users/' . $row["foto"] . ');">
                                                                <img src="../../img/users/' . $row["foto"] . '" alt="Foto Admin" class="img-fluid justify-content-center d-flex" style="max-width: 4rem; max-height: 4rem;">
                                                            </div>';
                                                    } else {
                                                        echo '<div class="d-flex justify-content-center align-items-center flex-wrap rounded-circle m-auto" style="width: 4rem; height: 4rem; overflow: hidden; background-image: url(../../img/users/user.jpg);">
                                                                <img src="../../img/users/user.jpg" alt="Foto Admin" class="img-fluid justify-content-center d-flex" style="max-width: 4rem; max-height: 4rem;">
                                                            </div>';
                                                    }
                                                    echo '</td>';



                                                    echo '<td class="project-actions text-center">';
                                                    echo '<div class="btn-group" role="group">';
                                                    echo '<a class="btn btn-primary btn-sm" href="#"><i class="fas fa-folder"></i> View</a>';
                                                    echo '<a class="btn btn-info btn-sm btn-editAdmin" href="#" data-toggle="modal" data-target="#editAdmin" data-email="' . $row["email"] . '" data-username="' . $row["username"] . '" data-password="' . $row["password"] . '" data-level="' . $row["level"] . '"><i class="fas fa-pencil-alt"></i> Edit</a>';
                                                    echo '<a class="btn btn-danger btn-sm" href="?delete_username=' . $row["username"] . '"><i class="fas fa-trash"></i> Delete</a>';
                                                    echo '</div>';
                                                    echo '</td>';
                                                    echo "</tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='6'>Tidak ada data pengguna.</td></tr>";
                                            }

                                            $conn->close();
                                            ?>
                                        </tbody>
                                        <tfoot class="text-center">
                                            <tr>
                                                <th>No.</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                                <th>Foto</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                function handleDelete($conn)
                {
                    $deleteUsername = $_GET['delete_username'];
                    $sqlDelete = "DELETE FROM admin WHERE username = '$deleteUsername'";

                    if ($conn->query($sqlDelete) === TRUE) {
                        echo '<div class="modal" tabindex="-1" role="dialog" id="successModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Sukses!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Data berhasil dihapus.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href=\'admin.php\'">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        echo '<script>
                                $(document).ready(function(){
                                    $("#successModal").modal("show");
                                });
                            </script>';
                    } else {
                        echo '<div class="modal" tabindex="-1" role="dialog" id="errorModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Error!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Gagal menghapus data: ' . $conn->error . '</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href=\'admin.php\'">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        echo '<script>
                                $(document).ready(function(){
                                    $("#errorModal").modal("show");
                                });
                            </script>';
                    }
                }
                ?>

                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->