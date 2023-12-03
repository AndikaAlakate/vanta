<!-- Modal Tambah Admin -->
<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">Tambah Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body dark-mode">
                <!-- Form tambah admin -->
                <form id="addAdminForm" method="post">
                    <!-- Tambahkan elemen input untuk data admin yang ingin ditambahkan -->
                    <div class="form-group">
                        <label for="newLevel">Level</label>
                        <input type="text" class="form-control" id="newLevel" name="new_level" required>
                    </div>
                    <div class="form-group">
                        <label for="newUsername">Username</label>
                        <input type="text" class="form-control" id="newUsername" name="new_username" required>
                    </div>
                    <div class="form-group">
                        <label for="newEmail">Email</label>
                        <input type="email" class="form-control" id="newEmail" name="new_email" required>
                    </div>
                    <div class="form-group">
                        <label for="newPassword">Password</label>
                        <input type="password" class="form-control" id="newPassword" name="new_password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="addAdminForm" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>
