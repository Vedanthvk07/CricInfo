<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="login-heading">Login with CricInfo</h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
            
                            <div class="modal-body">
                                <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
            
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                                    </div>
            
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                                    </div>
                                    
                                </form>
                            </div>
            
                            <div class="modal-footer">
                                <span>
                                    <a href="signup.php">Click here</a>
                                    to register a new user account
                                </span>
                                
                                <span>
                                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#admin_modal">
                                        login for Admin</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                             
                            </div>
                        </div>
                    </div>
                </div>