<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">
    <title>Our People</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <!--Logo-->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/frontend/images/palm.png') }}" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                Elaeis Plantation
            </a>
            <!--Toggle Button-->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Sidebar-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <!--Sidebar Header-->
                <div class="offcanvas-header text-white border-bottom shadow-none">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Elaeis Plantation
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    </button>
                </div>

                <!--Sidebar-->
                <div class="offcanvas-body d-flex">
                    <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="perusahaankami">Perusahaan Kami</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="ourpeople">Our People</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="career">Career</a>
                        </li>
                        <li class="nav-item mx-2 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pengelolaan Lingkungan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="perlindunganhutan">Perlindungan Hutan</a></li>
                                <li><a class="dropdown-item" href="dampaklingkungan">Mengurangi Dampak
                                        Lingkungan</a></li>
                                <li><a class="dropdown-item" href="regenerasi">Regenerasi Sistem Secara Alami</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--Karir Bersama Kami-->
    <section id="karirbersamakami">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="karirbersamakami__display-title">
                        <h1 class="display-6 fw-semibold">Karir Bersama Kami</h1>
                    </div>
                </div>
            </div>

            <div class="karirbersamakami__cont">
                <div class="karirbersamakami__cont__box-1 col-md-5 " data-aos="fade-down" data-aos-delay="100">
                    <h1>Life Elaies Plantation</h1>
                    <p>Elaeis Group bercita-cita untuk menginspirasi, merangkul, dan memotivasi orang dalam
                        setiap aktivitas.

                        Untuk itu kami memastikan bahwa karyawan kami tetap kompetitif dalam peran mereka
                        saat ini dan masa depan, kami menyediakan berbagai program pengembangan. Menurut
                        kami, aset yang paling berharga yang harus kamu jaga adalah karyawan kami.
                    </p>
                </div>
                <div class="karirbersamakami__cont__box-2 col-md-5 " data-aos="fade-down" data-aos-delay="100">
                    <h1>Our Stories</h1>
                    <p>Bagikan kisah menarikmu yang telah bergabung bersama di Elaeis Plantation
                        Apakah kamu yang selanjutanya</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--Team-->
    <section id="team" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Team Members</h1>
                        <div class="line"></div>
                        <p>Tim Elaeis Plantation adalah kelompok yang berdedikasi untuk mengelola ladang kelapa sawit
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center justify-content-center">
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{ asset('/frontend/images/honnas.png') }}" alt="" />
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Honnasan Yousuf</h4>
                            <p class="mb-0 text-white">FrontEnd</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{ asset('/frontend/images/v.png') }}" alt="" />
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Shevryna B.</h4>
                            <p class="mb-0 text-white">Leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{ asset('/frontend/images/adib.png') }}" alt="" />
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">M. Adib Najwan</h4>
                            <p class="mb-0 text-white">FrontEnd</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{ asset('/frontend/images/willi.png') }}" alt="" />
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">William Jonathan B.</h4>
                            <p class="mb-0 text-white">BackEnd</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{ asset('/frontend/images/aji.png') }}" alt="" />
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Muhajir F.A</h4>
                            <p class="mb-0 text-white">Frontend</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer class="bg-secondary">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="{{ asset('/frontend/images/palm.png') }}" alt="" width="40%"></a>
                        <div class="line"></div>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/adib_najwan/"><i class="ri-instagram-line"></i></a>
                            <a href="https://github.com/adibnajwan"><i class="ri-github-line"></i></a>
                            <a href="https://www.linkedin.com/in/adibnajwan/"><i class="ri-linkedin-box-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">PETA SITUS</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="ourpeople">Our People</a></li>
                            <li><a href="perusahaankami">Perusahaan Kami</a></li>
                            <li><a href="perlindunganhutan">Pengelolaan Lingkungan</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="text-white">PENGELOLAAN HUTAN</h5>
                        <div class="line"></div>
                        <ul>
                            <li><a href="perlindunganhutan">Perlindungan Hutan</a></li>
                            <li><a href="dampaklingkungan">Mengurangi Dampak Lingkungan</a></li>
                            <li><a href="regenerasi">Regenerasi Sistem Secara Alami</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h5 class="mb-0 text-white">CONTACT</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Sleman, Yogyakarta</li>
                            <li>(425) 555-1212</li>
                            <li>www.Elaies Plantation.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fotter-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0"> Design By Elaeis Teams</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('/frontend/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        <script>
            function handleClick() {
              window.location.href = "pengaduan";
            }
          </script>
          
          <div class="clickable-square" onclick="handleClick()">Form Pengaduan</div>
</body>

</html>