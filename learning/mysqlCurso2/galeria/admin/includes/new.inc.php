<div class="container">
    <div class="row">

        <div class="col-lg-3"></div>
        <div class="col-lg-6">

            <form class="form-login" action="../admin/actions/registro.act.php" method="post">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                            <p class="text-white-50 mb-5">Online registration</p>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="display_name">Name</label>
                                <input type="text" id="display_name" name="display_name" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline form-white mb-4">
                                <label class="form-label" for="enabled">Activado</label>
                                <input type="checkbox" name="enabled" id="enabled" />
                            </div>

                            <button class=" btn btn-outline-light btn-lg px-5" type="submit">Register</button>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <div>
                            <!-- <p class="mb-0">Already have an account? <a href="index.php?page=login" class="text-white-50 fw-bold">Sign In</a>
                            </p> -->
                        </div>

                    </div>
                </div>
            </form>

        </div>
        <div class="col-lg-3"></div>

    </div>
</div>