<!-- Edit Modal -->
<div class="modal fade" id="editAdmin" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body dark-mode">
                <!-- Edit Form -->
                <form id="editForm" method="post">
                    <div class="form-group">
                        <label for="editedLevel">Level</label>
                        <input type="text" class="form-control" id="editedLevel" name="edited_level" required>
                    </div>
                    <div class="form-group">
                        <label for="editedUsername">Username</label>
                        <input type="text" class="form-control" id="editedUsername" name="edited_username" required>
                    </div>
                    <div class="form-group">
                        <label for="editedEmail">Email</label>
                        <input type="email" class="form-control" id="editedEmail" name="edited_email" required>
                    </div>
                    <div class="form-group">
                        <label for="editedPassword">Password</label>
                        <input type="password" class="form-control" id="editedPassword" name="edited_password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="editForm" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
