
<?php include './header.php'; ?>

    <section class="bg-info vh-100 d-flex">
        <div class="col-4 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="text-center"><i class="fa fa-user fa-5x"></i></div>
                    <form action="./actions/login.php" method="POST">
                        <div class="md-form">
                            <label for="email">Your Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="md-form">
                            <label for="password">Your Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-success form-control mt-2" name="login">login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include './footer.php';?>