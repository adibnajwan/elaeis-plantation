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
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <title>DataEngineer</title>
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

                <!--Sidebar-->
                <div class="offcanvas-body d-flex">
                    <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index">Beranda</a>
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
                                <li><a class="dropdown-item" href="dampaklingkungan">Mengurangi Dampak Lingkungan</a></li>
                                <li><a class="dropdown-item" href="regenerasi">Regenerasi Sistem Secara Alami</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--Text atas List Job-->
    <section id="list_job" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="text-wrapper col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <h1 class="text-center text-white heading-text">DATA ENGINEER</h1>
                    <h6 class="text-center text-white">HoldCO - COO office</h6>
                </div>
            </div>
    </section>


    <!-- tentang peran -->
        <div class="mt-5 container description text-start" style="padding-left: 30px;">
          <div class="row">
            <div class="col-lg-7 pe-2 pe-md-5">
              <div>
                <div>
                    <b>Apa yang akan kamu lakukan:</b></div>
                <ul>
                  <li>Kumpulkan kebutuhan bisnis untuk mendukung proyek BI.</li>
                  <li>Jelajahi sumber data yang ada dan baru serta fasilitasi integrasi ke Gudang Data.</li>
                  <li>Merancang dan mengembangkan Kerangka Kualitas Data di seluruh Platform Data.</li>
                  <li>Merancang, mengimplementasikan Model Data untuk gudang data perusahaan.</li>
                  <li>Mengklasifikasikan data berdasarkan kebijakan Tata Kelola Data dan Kerangka Akses Data.</li>
                  <li>Kembangkan definisi dan metrik data serta pertahankan konsistensi di seluruh tim Data.</li>
                  <li>Berpartisipasi dengan pengguna akhir untuk mengumpulkan persyaratan dan berkonsultasi mengenai solusi integrasi data.</li>
                  <li>Migrasikan kode di seluruh lingkungan dan manfaatkan sistem manajemen kode sumber.</li>
                </ul>
                <div class="mt-4"><b>Apa yang Anda Butuhkan:</b></div>
                <ul>
                  <li>Gelar Sarjana atau Magister Ilmu Komputer, Teknik, Sistem Informasi, atau bidang terkait.</li>
                  <li>Pengalaman 2-5 tahun di bidang rekayasa data, rekayasa perangkat lunak, atau peran serupa.</li>
                  <li>Kemahiran dalam bahasa pemrograman seperti Python, Java, atau Scala.</li>
                  <li>Pemahaman yang kuat tentang SQL, sistem manajemen basis data, dan konsep pemodelan data.</li>
                  <li>Kemampuan untuk merancang dan mengimplementasikan jalur data yang dapat diskalakan dan proses ETL.</li>
                  <li>Keterampilan komunikasi dan kolaborasi yang sangat baik untuk bekerja secara efektif dengan tim lintas fungsi.</li>
                  <li>Pemahaman lebih dalam tentang konsep rekayasa data, bahasa pemrograman, dan teknologi big data.</li>
                </ul>

                <br><br>
                <a href="career" class="back-rst">Back</a>
                <a href="form" class="daftar-btn">Daftar Sekarang</a>
              </div>
            </div>
          </div>
        </div>
       

     <!--footer-->
     <footer class="bg-secondary">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 col-sm-6">
                        <a href="#"><img src="{{ asset('frontend/images/palm.png') }}" alt="" width="40%"></a>
                        <div class="line"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-instagram-line"></i></a>
                            <a href="#"><i class="ri-github-line"></i></a>
                            <a href="#"><i class="ri-twitter-line"></i></a>
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
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>