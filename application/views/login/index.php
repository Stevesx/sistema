<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5" style="margin-top: 15rem !important">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">

                            <?php if ($message = $this->session->flashdata('error')): ?>

                                <div class="row">


                                    <div class="col-md-12">

                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong><i
                                                    class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;<?php echo $message; ?></strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                    </div>

                                </div>

                            <?php endif; ?>



                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Seja bem vindo!</h1>
                                </div>
                                <form class="user" name="form_auth" method="POST" action="<?php echo base_url('login/auth'); ?>">
                                    <div>
                                        <input name="email" type="email" class="form-control form-control-user"
                                            placeholder="Entre com seu e-mail">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-user"
                                            placeholder="Entre com sua senha">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Entrar</button>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>