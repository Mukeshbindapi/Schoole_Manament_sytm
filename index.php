<?php include './header.php' ?>

    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 70%;">
                    <li class="nav-item dropdown">
                        <?php if(isset($_SESSION['login'])){ ?>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Acount
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        <?php } else { ?>
                            <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>login</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex shadow mt-2" style="height: 500px; background:linear-gradient(-45deg, #3923a7 50%, transparent 50%)">
        <div class="container-fluid my-auto">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="display-4" style="font-weight: bold; margin-top: -40px;">School Management System</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, eligendi? Similique, ipsum saepe aliquid officiis alias corrupti sunt sapiente. Ipsa</p>
                    <a href="" class="btn btn-lg btn-primary">Call to Action</a>
                </div>
                <div class="col-lg-6">
                    <div class="w-50 mx-auto card shadow-lg">
                        <div class="card-body">
                            <h3>Admission Form</h3>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">Your Name</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" id="mobile" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="class">Your Class</label>
                                    <input type="text" id="class" class="form-control">
                                </div>
                                <button class="btn btn-dark form-control mt-2">Submit Form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5">
                    <h2 style="font-weight: bold;">About <br> School Management System</h2>
                    <div class="pr-5">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia adipisci omnis enim beatae blanditiis ducimus esse numquam consequatur eveniet dolorem, ut illo atque quas molestiae assumenda in fugiat velit dolor.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum consequuntur eaque dolores cupiditate laboriosam quisquam corporis voluptas molestiae, alias a praesentium quod rerum porro, deleniti illum excepturi, esse corrupti voluptate.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem esse, quaerat iusto dolores sed natus ducimus dolorem in accusantium nesciunt deserunt consequatur provident at earum odio exercitationem cumque optio modi.</p>
                    </div>
                    <a href="about-us.php" class="btn btn-secondary">Know More</a>
                </div>
                <div class="col-lg-6" style="background:url(./assets/images/firefighter-emergency-fire-extinguisher.jpg)">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="text-center md-5">
            <h2 class="" style="font-weight: bold;">Qur Courses</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, cumque similique quae veritatis perferendis fugiat architecto quas tempore error maxime dolor et</p>
        </div>
        <?php
        for ($i = 0; $i < 3; $i++) { ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div>
                                <img src="./assets/images/88544-40616.jpg" alt="" class="img-fluid rounded-top">
                            </div>
                            <div class="card-body shadow">
                                <p class="card-text">
                                    Web Desing & Development
                                    <b>Duration:</b> 45 hours <br>
                                    <b>Price:</b> 4000/-Rs
                                </p>
                                <button class="form-control btn btn-primary btn-sm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div>
                                <img src="./assets/images/88544-40616.jpg" alt="" class="img-fluid rounded-top">
                            </div>
                            <div class="card-body shadow">
                                <p class="card-text">
                                    Web Desing & Development
                                    <b>Duration:</b> 45 hours <br>
                                    <b>Price:</b> 4000/-Rs
                                </p>
                                <button class="form-control btn btn-primary btn-sm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div>
                                <img src="./assets/images/88544-40616.jpg" alt="" class="img-fluid rounded-top">
                            </div>
                            <div class="card-body shadow">
                                <p class="card-text">
                                    Web Desing & Development
                                    <b>Duration:</b> 45 hours <br>
                                    <b>Price:</b> 4000/-Rs
                                </p>
                                <button class="form-control btn btn-primary btn-sm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div>
                                <img src="./assets/images/88544-40616.jpg" alt="" class="img-fluid rounded-top">
                            </div>
                            <div class="card-body shadow">
                                <p class="card-text">
                                    Web Desing & Development
                                    <b>Duration:</b> 45 hours <br>
                                    <b>Price:</b> 4000/-Rs
                                </p>
                                <button class="form-control btn btn-primary btn-sm">Enroll Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>

    <section class="py-5 bg-light">
        <div class="text-center md-5">
            <h2 class="" style="font-weight: bold;">Qur Teachers</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, cumque similique quae veritatis perferendis fugiat architecto quas tempore error maxime dolor et</p>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 my-4">
                    <div class="card">
                        <div class="col-6 position-absolute" style="top: -50px;">
                            <img src="./assets/images/f484e8b36ce0a24125635bcb38b816e6.jpg" alt="" class="mw-100 border mt-5 rounded-circie">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <div class="card-title">
                                <h5>Teacher's Name</h5>
                                <p class="card-text">
                                    <b>Coueses:</b> 5 <br>
                                    <b>Ratings:</b> <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="card">
                        <div class="col-6 position-absolute" style="top: -50px;">
                            <img src="./assets/images/f484e8b36ce0a24125635bcb38b816e6.jpg" alt="" class="mw-100 border mt-5 rounded-circie">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <div class="card-title">
                                <h5>Teacher's Name</h5>
                                <p class="card-text">
                                    <b>Coueses:</b> 5 <br>
                                    <b>Ratings:</b> <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="card">
                        <div class="col-6 position-absolute" style="top: -50px;">
                            <img src="./assets/images/f484e8b36ce0a24125635bcb38b816e6.jpg" alt="" class="mw-100 border mt-5 rounded-circie">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <div class="card-title">
                                <h5>Teacher's Name</h5>
                                <p class="card-text">
                                    <b>Coueses:</b> 5 <br>
                                    <b>Ratings:</b> <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="card">
                        <div class="col-6 position-absolute" style="top: -50px;">
                            <img src="./assets/images/f484e8b36ce0a24125635bcb38b816e6.jpg" alt="" class="mw-100 border mt-5 rounded-circie">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <div class="card-title">
                                <h5>Teacher's Name</h5>
                                <p class="card-text">
                                    <b>Coueses:</b> 5 <br>
                                    <b>Ratings:</b> <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="card">
                        <div class="col-6 position-absolute" style="top: -50px;">
                            <img src="./assets/images/f484e8b36ce0a24125635bcb38b816e6.jpg" alt="" class="mw-100 border mt-5 rounded-circie">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <div class="card-title">
                                <h5>Teacher's Name</h5>
                                <p class="card-text">
                                    <b>Coueses:</b> 5 <br>
                                    <b>Ratings:</b> <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="card">
                        <div class="col-6 position-absolute" style="top: -50px;">
                            <img src="./assets/images/f484e8b36ce0a24125635bcb38b816e6.jpg" alt="" class="mw-100 border mt-5 rounded-circie">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <div class="card-title">
                                <h5>Teacher's Name</h5>
                                <p class="card-text">
                                    <b>Coueses:</b> 5 <br>
                                    <b>Ratings:</b> <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="card">
                        <div class="col-6 position-absolute" style="top: -50px;">
                            <img src="./assets/images/f484e8b36ce0a24125635bcb38b816e6.jpg" alt="" class="mw-100 border mt-5 rounded-circie">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <div class="card-title">
                                <h5>Teacher's Name</h5>
                                <p class="card-text">
                                    <b>Coueses:</b> 5 <br>
                                    <b>Ratings:</b> <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-4">
                    <div class="card">
                        <div class="col-6 position-absolute" style="top: -50px;">
                            <img src="./assets/images/f484e8b36ce0a24125635bcb38b816e6.jpg" alt="" class="mw-100 border mt-5 rounded-circie">
                        </div>
                        <div class="card-body pt-5 mt-5">
                            <div class="card-title">
                                <h5>Teacher's Name</h5>
                                <p class="card-text">
                                    <b>Coueses:</b> 5 <br>
                                    <b>Ratings:</b> <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-white" style="background: #3923a7;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-5">
                    <h2>Acheivements</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id rem tempora culpa, doloribus odio aperiam omnis dignissimos, animi.</p>
                    <img src="./assets/images/firefighter-fire_396607-43117.avif" alt="" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-6 md-4">
                            <div class="border rounded">
                                <div class="card-body text-center fa-3x">
                                    <span><i class="fas fa-graduation-cap text-warning"></i></span>
                                    <h2 class="my-2 h1" style="font-weight: bold;">334</h2>
                                    <hr class="border-warning" style="border-width: 5px;">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 md-4">
                            <div class="border rounded">
                                <div class="card-body text-center fa-3x">
                                    <span><i class="fas fa-graduation-cap text-warning"></i></span>
                                    <h2 class="my-2 h1" style="font-weight: bold;">334</h2>
                                    <hr class="border-warning" style="border-width: 5px;">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 md-4">
                            <div class="border rounded">
                                <div class="card-body text-center fa-3x">
                                    <span><i class="fas fa-graduation-cap text-warning"></i></span>
                                    <h2 class="my-2 h1" style="font-weight: bold;">334</h2>
                                    <hr class="border-warning" style="border-width: 5px;">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 md-4">
                            <div class="border rounded">
                                <div class="card-body text-center fa-3x">
                                    <span><i class="fas fa-graduation-cap text-warning"></i></span>
                                    <h2 class="my-2 h1" style="font-weight: bold;">334</h2>
                                    <hr class="border-warning" style="border-width: 5px;">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="text-center md-5">
            <h2 class="" style="font-weight: bold;">What Pepole Says</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, cumque similique quae veritatis perferendis fugiat architecto quas tempore error maxime dolor et</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="border rounded position-relative">
                        <div class="p-4 text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quos eaque totam ullam. Corrupti nobis impedit ratione, autem ea animi, tempore rerum tempora suscipit maxime veritatis distinctio, fugit assumenda magni.
                        </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top: 0.5rem; left: 0.5rem; opacity: 0.2;"></i>
                    </div>
                    <div class="text-center" style="margin-top: -10px;">
                        <img src="./assets/images/firefighter-fire_396607-43117.avif" alt="" class="rounded-circle border img-fluid" width="100" height="100">
                        <h6 class="mb-0" style="font-weight: bold;">Name Of Candidate</h6>
                        <p><i>Designation</i></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="border rounded position-relative">
                        <div class="p-4 text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quos eaque totam ullam. Corrupti nobis impedit ratione, autem ea animi, tempore rerum tempora suscipit maxime veritatis distinctio, fugit assumenda magni.
                        </div>
                        <i class="fa fa-quote-left fa-3x position-absolute" style="top: 0.5rem; left: 0.5rem; opacity: 0.2;"></i>
                    </div>
                    <div class="text-center" style="margin-top: -10px;">
                        <img src="./assets/images/firefighter-fire_396607-43117.avif" alt="" class="rounded-circle border img-fluid" width="100" height="100">
                        <h6 class="mb-0" style="font-weight: bold;">Name Of Candidate</h6>
                        <p><i>Designation</i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer style="background:url(./assets/images/firefighter-in-a-hazy-area-1if4j2b71kavle2z.jpg) center no-repeat">
        <div class="py-5 text-white" style="background:000000bb">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <h5 class="text-danger">Usefull Links</h5>
                        <ul class="fa-ul ml-4">
                            <li><a href="" class="text-info">List icons</a></li>
                            <li><a href="" class="text-info">Can be used</a></li>
                            <li><a href="" class="text-info">as bullets</a></li>
                            <li><a href="" class="text-info">in lists</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-danger">Social Presence</h5>
                        <div>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h5 class="text-danger">Subscribe Now</h5>
                        <form action="">
                            <div class="md-form">
                                <input type="email" id="email-s" placeholder="Your Email" class="form-control">
                            </div>
                            <button class="btn btn-primary btn-sm form-control mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="py-2 bg-dark text-light">
        <div class="container-fluid text-center">
            Copyright 2024-2024 All Right Reseved. <a href="#" class="text-primary">School Management System</a>
        </div>
    </section>
<?php include './footer.php' ?>
