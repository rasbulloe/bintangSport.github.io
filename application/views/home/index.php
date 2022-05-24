<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $tittle; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">Bintang Sport</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= base_url('auth'); ?>">Booking</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#jadwal">Jadwal</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= base_url('auth') ?>">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="<?= base_url(); ?>/assets/img/logoBintangSport.png" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Bintang Sport</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Mini Soccer - Futsal - Cafe</p>
        </div>
    </header>

    <section class="page-section portfolio" id="jadwal">
        <div class="container">
            <!-- Jadwal Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Jadwal Lapang</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>

            <p class="lead"><?= date('l, d-m-Y'); ?> </p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Pukul/Jam</th>
                        <th scope="col">Lapang 1</th>
                        <th scope="col">Lapang 2</th>
                        <th scope="col">Lapang 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">09.00</th>
                        <td>
                            <?php if ($cari11) : ?>
                                <span class="badge bg-success"> <?= $cari11['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari12) : ?>
                                <span class="badge bg-success"> <?= $cari12['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari13) : ?>
                                <span class="badge bg-success"> <?= $cari13['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10.00</th>
                        <td>
                            <?php if ($cari21) : ?>
                                <span class="badge bg-success"> <?= $cari21['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari22) : ?>
                                <span class="badge bg-success"> <?= $cari22['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari23) : ?>
                                <span class="badge bg-success"> <?= $cari23['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11.00</th>
                        <td>
                            <?php if ($cari31) : ?>
                                <span class="badge bg-success"> <?= $cari31['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari32) : ?>
                                <span class="badge bg-success"> <?= $cari32['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari33) : ?>
                                <span class="badge bg-success"> <?= $cari33['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12.00</th>
                        <td>
                            <?php if ($cari41) : ?>
                                <span class="badge bg-success"> <?= $cari41['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari42) : ?>
                                <span class="badge bg-success"> <?= $cari42['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari43) : ?>
                                <span class="badge bg-success"> <?= $cari43['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">13.00</th>
                        <td>
                            <?php if ($cari51) : ?>
                                <span class="badge bg-success"> <?= $cari51['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari52) : ?>
                                <span class="badge bg-success"> <?= $cari52['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari53) : ?>
                                <span class="badge bg-success"> <?= $cari53['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">14.00</th>
                        <td><?php if ($cari61) : ?>
                                <span class="badge bg-success"> <?= $cari61['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari62) : ?>
                                <span class="badge bg-success"> <?= $cari62['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari63) : ?>
                                <span class="badge bg-success"> <?= $cari63['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">15.00</th>
                        <td><?php if ($cari71) : ?>
                                <span class="badge bg-success"> <?= $cari71['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari72) : ?>
                                <span class="badge bg-success"> <?= $cari72['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari73) : ?>
                                <span class="badge bg-success"> <?= $cari73['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16.00</th>
                        <td><?php if ($cari81) : ?>
                                <span class="badge bg-success"> <?= $cari81['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari82) : ?>
                                <span class="badge bg-success"> <?= $cari82['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari83) : ?>
                                <span class="badge bg-success"> <?= $cari83['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">17.00</th>
                        <td><?php if ($cari91) : ?>
                                <span class="badge bg-success"> <?= $cari91['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari92) : ?>
                                <span class="badge bg-success"> <?= $cari92['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari93) : ?>
                                <span class="badge bg-success"> <?= $cari93['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">18.00</th>
                        <td><?php if ($cari101) : ?>
                                <span class="badge bg-success"> <?= $cari101['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari102) : ?>
                                <span class="badge bg-success"> <?= $cari102['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari103) : ?>
                                <span class="badge bg-success"> <?= $cari103['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">19.00</th>
                        <td><?php if ($cari111) : ?>
                                <span class="badge bg-success"> <?= $cari111['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari112) : ?>
                                <span class="badge bg-success"> <?= $cari112['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari113) : ?>
                                <span class="badge bg-success"> <?= $cari113['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">20.00</th>
                        <td><?php if ($cari121) : ?>
                                <span class="badge bg-success"> <?= $cari121['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari122) : ?>
                                <span class="badge bg-success"> <?= $cari122['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari123) : ?>
                                <span class="badge bg-success"> <?= $cari123['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">21.00</th>
                        <td><?php if ($cari131) : ?>
                                <span class="badge bg-success"> <?= $cari131['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($cari132) : ?>
                                <span class="badge bg-success"> <?= $cari132['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                        <td><?php if ($cari133) : ?>
                                <span class="badge bg-success"> <?= $cari133['userBoking']; ?></span>
                            <?php else : ?>
                                <span class="badge bg-secondary">Kosong</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Jadwal Section Button-->
        </div>
    </section>

    <!-- Portfolio Section-->

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Jadwal Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/') ?>img/portfolio/lapang1.jpg" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/') ?>img/portfolio/lapang1.jpg" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/') ?>img/portfolio/lapang1.jpg" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/') ?>img/portfolio/galeri1.jpg" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/') ?>img/portfolio/galeri2.jpg" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?= base_url('assets/') ?>img/portfolio/galeri3.jpg" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section portfolio" id="about">
        <div class="container">
            <!-- Jadwal Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Kami mengahdirkan jasa olahraga yaitu menyewakan lapangan sepak bola dengan sintetis ukuran 50x30"</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">Kami mengahdirkan jasa olahraga yaitu menyewakan lapangan sepak bola dengan sintetis ukuran 50x30"</p>
                </div>
            </div>
            <!-- About Section Button-->
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        Jl. Kebon Kopi, Cibeureum, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40535
                        <br>
                        Hours
                        Open 8PM ⋅ Closes 12AM

                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Lapang Mini Soccer</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/lapang1.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Kami mengahdirkan jasa olahraga yaitu menyewakan lapangan sepak bola dengan sintetis ukuran 50x30"</p>
                                <button class="btn btn-primary" href="#" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Lapang 1 Futsal</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/lapang1.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Lapang 2 Futsal</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/lapang1.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Gallery</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/galeri1.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Gallery</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/galeri2.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Gallery</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/galeri3.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                <button class="btn btn-primary" href="#" data-bs-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Close Window
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>