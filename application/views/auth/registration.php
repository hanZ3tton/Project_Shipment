<div
    class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="post" action="auth/registration">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="username"
                                    name="username"
                                    placeholder="Enter Username ..." />
                            </div>
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="fullName"
                                    name="fullName"
                                    placeholder="Enter Fullname ..." />
                            </div>
                            <div class="form-group">
                                <input
                                    type="email"
                                    class="form-control form-control-user"
                                    id="exampleInputEmail"
                                    placeholder="Email Address" />
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input
                                        type="text"
                                        class="form-control form-control-user"
                                        id="city"
                                        name="city"
                                        placeholder="City" />
                                </div>
                                <div class="col-sm-6">
                                    <input
                                        type="password"
                                        class="form-control form-control-user"
                                        id="postalCode"
                                        name="postalCode"
                                        placeholder="Postal Code" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <input
                                    type="text"
                                    class="form-control form-control-user"
                                    id="address"
                                    name="address"
                                    placeholder="Enter Address ..." />
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input
                                        type="password"
                                        class="form-control form-control-user"
                                        id="exampleInputPassword"
                                        placeholder="Password" />
                                </div>
                                <div class="col-sm-6">
                                    <input
                                        type="password"
                                        class="form-control form-control-user"
                                        id="exampleRepeatPassword"
                                        placeholder="Confrim Password" />
                                </div>
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr />
                        <div class="text-center">
                            <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>