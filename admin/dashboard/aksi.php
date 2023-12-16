<?php
    require 'koneksi.php'; // Pastikan path koneksi.php sesuai

    // Query untuk menghitung jumlah admin
    $sqlcount = "SELECT COUNT(*) as email FROM admin";
    $resultcount = mysqli_query($conn, $sqlcount);

    // Periksa apakah query berhasil dijalankan
    if ($resultcount) {
        // Ambil data hasil query
        $rowcount = mysqli_fetch_assoc($resultcount);
        $totalAdmin = $row['email'];
    } else {
        // Tampilkan pesan kesalahan jika query gagal
        $totalAdmin = "Error";
    }
    function tambahAdmin($conn, $newEmail, $newUsername, $newPassword, $newLevel)
    {
        $newPassword = md5($newPassword);
        $sqlInsert = "INSERT INTO admin (email, username, password, level) VALUES ('$newEmail', '$newUsername', '$newPassword', '$newLevel')";
        return $conn->query($sqlInsert);
    }

    function updateAdmin($conn, $editedEmail, $editedUsername, $editedPassword, $editedLevel)
    {
        $editedPassword = md5($editedPassword);
        $sqlUpdate = "UPDATE admin SET email = '$editedEmail', username = '$editedUsername', password = '$editedPassword', level = '$editedLevel' WHERE username = '$editedUsername'";
        return $conn->query($sqlUpdate);
    }
    
    if (isset($_POST['new_email']) && isset($_POST['new_username']) && isset($_POST['new_password']) && isset($_POST['new_level'])) {
        $newUsername = $_POST['new_username'];
        $newEmail = $_POST['new_email'];
        $newLevel = $_POST['new_level'];
        $newPassword = md5($_POST['new_password']);

        // Lakukan validasi data jika diperlukan

        if (tambahAdmin($conn, $newEmail, $newUsername, $newPassword, $newLevel)) {
            echo '<div class="modal" tabindex="-1" role="dialog" id="newSuccessModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sukses!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Admin baru berhasil ditambahkan.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href=\'index.php\'">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>';
            echo '<script>
                    $(document).ready(function(){
                        $("#newSuccessModal").modal("show");
                    });
                </script>';
        } else {
            echo '<div class="modal" tabindex="-1" role="dialog" id="newErrorModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Error!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Gagal menambahkan admin baru: ' . $conn->error . '</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href=\'index.php\'">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>';
            echo '<script>
                    $(document).ready(function(){
                        $("#newErrorModal").modal("show");
                    });
                </script>';
        }
    }

    if (isset($_POST['edited_email']) && isset($_POST['edited_username']) && isset($_POST['edited_password']) && isset($_POST['edited_level'])) {
        $editedEmail = $_POST['edited_email'];
        $editedUsername = $_POST['edited_username'];
        $editedPassword = md5($_POST['edited_password']);
        $editedLevel = $_POST['edited_level'];

        if (updateAdmin($conn, $editedEmail, $editedUsername, $editedPassword, $editedLevel)) {
            echo '<div class="modal" tabindex="-1" role="dialog" id="updateSuccessModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sukses!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Data berhasil diperbarui.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href=\'index.php\'">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>';
            echo '<script>
                    $(document).ready(function(){
                        $("#updateSuccessModal").modal("show");
                    });
                </script>';
        } else {
            echo '<div class="modal" tabindex="-1" role="dialog" id="updateErrorModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Error!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Gagal memperbarui data: ' . $conn->error . '</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href=\'index.php\'">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>';
            echo '<script>
                    $(document).ready(function(){
                        $("#updateErrorModal").modal("show");
                    });
                </script>';
        }
    }
?>
