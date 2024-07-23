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
    <title>Elaeis Plantation</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            
            <!--Logo-->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('frontend/images/palm.png') }}" alt="Logo" width="30" height="24"
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

                <div class="offcanvas-body d-flex">
                    <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Beranda</a>
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

    <!--Hero-->
    <section id="hero" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Welcome to </h1>
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">Elaeis Plantation
                    </h1>
                    <h4 class="text-white mt-3 mb-4" data-aos="fade-right">Your Lifelong Agro partner</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- kelapa sawit -->
    <section id="kelapasawit" class="section-padding">
        <div data-aos="fade-down" data-aos-delay="150" class="row">
            <div class="col-lg-7">
                <div class="kelapasawit-content">
                    <div class="kelapasawit-text">
                        <h2>Kelapa Sawit</h2>
                        <br>
                        <p>Sektor perkebunan dan pengolahan kelapa sawit merupakan segmen bisnis utama Perseroan
                            beberapa tahun terakhir ini. Segmen kelapa sawit memberikan kontribusi pendapatan di atas
                            80% dari total pendapatan perseroan.</p>
                        <p>Masuknya perseroan ke dalam sektor usahs kelapa sawit tak lepas dari pesatnya perkembangan
                            industri kelapa sawit dan produk turunannya akibat meningkatnya permintaan minyak nabati
                            global. Perseroan mengambil peluan tersebut dan berhasil membuahkan kesuksesan sehingga
                            menjadi salah satu perusahaan terkemuka dalam industri pengolahan kelapa sawit.</p>
                        <p>Kelapa sawit juga merupakan tanaman tropis yang dikenal akan hasilnya yang berlimpah,
                            terutama minyak kelapa sawit yang digunakan dalam berbagai produk sehari-hari seperti
                            makanan, kosmetik, dan bahan bakar biodiesel. Tanaman ini sering ditanam di daerah tropis.
                            Karena tahan terhadap kondisi cuaca yang panas dan lembab.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="kelapasawit-image">
                    <img src="{{ asset ('frontend/images/sawit14.jpg') }}" alt="kelapa sawit">
                </div>
            </div>
        </div>
    </section>

    <!--Inisiatif Kami-->
    <section id="perusahaankami">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-tittle">
                        <h1 class="display-4 fw-semibold">Inisiatif Kami</h1>
                        <div class="line"></div>
                        <p>Tumbuh bersama komunitas. Komitmen ini secara konsisten dijunjung sejak kami berdiri
                            melalui kemitraan dan kegiatan pemberdayaan masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--gambar-->
    <div class="image-grid" data-aos="fade-down" data-aos-delay="150">
        <img class="image-grid-col-2 image-grid-row-2" src="{{ asset ('frontend/images/sawit8.jpg') }}" alt="architecture">
        <img src= "{{ asset ('frontend/images/sawit3.jpg') }}" alt="architecture">
        <img src="{{ asset ('frontend/images/sawit6.jpg') }}" alt="architecture">
        <img src="{{ asset ('frontend/images/sawit5.jpg') }}" alt="architecture">
        <img src="{{ asset ('frontend/images/sawit4.jpg') }}" alt="architecture">
    </div>

    <!--footer-->
    <footer class="bg-secondary">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="{{ asset ('frontend/images/palm.png') }}" alt="" width="40%"></a>
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
    <script src="{{ asset ('frontend/js/main.js') }}"></script>
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