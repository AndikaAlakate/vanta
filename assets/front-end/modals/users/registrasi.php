<!-- Bootstrap Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Registrasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="" method="post">
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email</label>
                        <div class="input-group">
                            <label for="registerEmail">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            </label>
                            <input type="email" class="form-control" id="registerEmail"
                                placeholder="Masukkan Email Anda ..." required />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <div class="input-group">
                            <label for="registerPassword">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            </label>
                            <input type="password" class="form-control" id="registerPassword"
                                placeholder="Masukkan Password Anda ..." required />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                        <div class="input-group">
                            <label for="confirmPassword">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            </label>
                            <input type="password" class="form-control" id="confirmPassword"
                                placeholder="Konfirmasi Password Anda ..." required />
                        </div>
                    </div>

                    <div class="text-danger mb-3" id="registerError"></div>

                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-primary" onclick="register()">Registrasi</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-muted">Sudah punya akun? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal"
                        data-bs-target="#loginModal">Login di sini</a></p>
            </div>
        </div>
    </div>
</div>