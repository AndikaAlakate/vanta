<!-- Bootstrap Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm" action="assets/back-end/conf/logina.php" method="post">
                    <div class="mb-3">
                        <label for="typeEmailX-2" class="form-label">Email</label>
                        <div class="input-group">
                            <label for="typeEmailX-2">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            </label>
                            <input type="email" name="email" class="form-control" id="typeEmailX-2"
                                placeholder="Masukkan Email Anda ..." required />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="typePasswordX-2" class="form-label">Password</label>
                        <div class="input-group">
                            <label for="typePasswordX-2">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            </label>
                            <input type="password" name="password" class="form-control" id="typePasswordX-2"
                                placeholder="Masukkan Password Anda ..." required />
                        </div>
                    </div>

                    <div class="text-danger mb-3" id="loginError"></div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-muted">Belum punya akun? <a href="#" data-bs-toggle="modal" data-bs-dismiss="modal"
                        data-bs-target="#registerModal">Daftar di sini</a></p>
            </div>
        </div>
    </div>
</div>