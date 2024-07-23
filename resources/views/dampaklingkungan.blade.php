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
        <title>Dampak Lingkungan</title>
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg bg-wphp artisan route:clear
hite sticky-top">
            <div class="container">
                <!--Logo-->
                <a class="navbar-brand" href="#">
                    <img
                        src="{{ asset('frontend/images/palm.png') }}"
                        alt="Logo"
                        width="30"
                        height="24"
                        class="d-inline-block align-text-top"
                    />
                    Elaeis Plantation
                </a>

                <!--Toggle Button-->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Sidebar-->
                <div
                    class="offcanvas offcanvas-end"
                    tabindex="-1"
                    id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel"
                >
                    <!--Sidebar Header-->
                    <div
                        class="offcanvas-header text-white border-bottom shadow-none"
                    >
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                            Elaeis Plantation
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"
                        ></button>
                    </div>

                    <!--Sidebar-->
                    <div class="offcanvas-body d-flex">
                        <ul
                            class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3"
                        >
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    aria-current="page"
                                    href="{{ route('index') }}"
                                    >Beranda</a
                                >
                            </li>
                            <li class="nav-item mx-2">
                                <a
                                    class="nav-link"
                                    href="{{ route('perusahaan-kami') }}"
                                    >Perusahaan Kami</a
                                >
                            </li>
                            <li class="nav-item mx-2">
                                <a
                                    class="nav-link"
                                    href="{{ route('our-people') }}"
                                    >Our People</a
                                >
                            </li>
                            <li class="nav-item mx-2">
                                <a
                                class="nav-link"
                                href="{{ route('career') }}"
                                >Career</a
                            >
                            </li>

                            <li class="nav-item mx-2 dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    Pengelolaan Lingkungan
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="{{ route('perlindungan-hutan') }}"
                                            >Perlindungan Hutan</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="{{ route('dampak-lingkungan') }}"
                                            >Mengurangi Dampak Lingkungan</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="{{ route('regenerasi') }}"
                                            >Regenerasi Sistem Secara Alami</a
                                        >
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!--Mengurangi Dampak Lingkungan-->
        <section id="dampaklingkungan">
            <div data-aos="fade-down" data-aos-delay="150" class="row">
                <div class="col-lg-7">
                    <div class="dampaklingkungan-content">
                        <div class="dampaklingkungan-text">
                            <h2>Mengurangi Dampak Lingkungan</h2>
                            <br />
                            <p>
                                Elaeis Plantation menyadari pentingnya
                                pengelolaan lingkungan dan peran yang kami
                                jalankan dalam meminimalkan dampak kami terhadap
                                planet ini. Komitmen kami lebih dari sekadar
                                perlindungan keanekaragaman hayati, tetapi juga
                                mencakup pendekatan holistik yang mencakup
                                pengurangan emisi gas rumah kaca (GRK),
                                pengelolaan limbah, pengelolaan bahan kimia yang
                                bertanggung jawab, dan pengembangan metode
                                regenerasi organik dan alami. Kami berdedikasi
                                untuk menjunjung tinggi standar pengelolaan
                                lingkungan yang tinggi, mematuhi semua peraturan
                                nasional dan internasional yang relevan, dan
                                melindungi keanekaragaman hayati di dalam dan di
                                sekitar wilayah operasional kami. Komitmen kami
                                meliputi kepatuhan yang ketat, perbaikan
                                berkelanjutan, dan pemantauan potensi ancaman
                                terhadap kawasan konservasi baik di dalam maupun
                                di luar lokasi operasional kami.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img
                        src="{{ asset('frontend/images/sawit16.jpg') }}"
                        alt=""
                    />
                </div>
            </div>
        </section>

        <!--footer-->
        <footer class="bg-secondary">
            <div class="footer-top">
                <div class="container">
                    <div class="row gy-5">
                        <div class="col-lg-3 col-sm-6">
                            <a href="#"
                                ><img
                                    src="{{ asset('frontend/images/palm.png') }}"
                                    alt=""
                                    width="40%"
                            /></a>
                            <div class="line"></div>
                            <div class="social-icons">
                                <a href="https://www.instagram.com/adib_najwan/"
                                    ><i class="ri-instagram-line"></i
                                ></a>
                                <a href="https://github.com/adibnajwan"
                                    ><i class="ri-github-line"></i
                                ></a>
                                <a
                                    href="https://www.linkedin.com/in/adibnajwan/"
                                    ><i class="ri-linkedin-box-line"></i
                                ></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <h5 class="mb-0 text-white">PETA SITUS</h5>
                            <div class="line"></div>
                            <ul>
                                <li>
                                    <a href="{{ route('our-people') }}"
                                        >Our People</a
                                    >
                                </li>
                                <li>
                                    <a 
                                    href="{{ route('perusahaan-kami') }}"
                                        >Perusahaan Kami</a
                                    >
                                </li>
                                <li>
                                    <a 
                                    href="{{ route('perlindungan-hutan') }}"
                                        >Pengelolaan Lingkungan</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <h5 class="text-white">PENGELOLAAN HUTAN</h5>
                            <div class="line"></div>
                            <ul>
                                <li>
                                    <a 
                                    href="{{ route('perlindungan-hutan') }}"
                                        >Perlindungann Hutan</a
                                    >
                                </li>
                                <li>
                                    <a 
                                    href="{{ route('dampak-lingkungan') }}"
                                        >Mengurangi Dampak Lingkungan</a
                                    >
                                </li>
                                <li>
                                    <a 
                                    href="{{ route('regenerasi') }}"
                                        >Regenerasi Sistem Secara Alami</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <h5 class="mb-0 text-white">CONTACT</h5>
                            <div class="line"></div>
                            <ul>
                                <li>Sleman, Yogyakarta</li>
                                <li>(425) 555-1212</li>
                                <li>www.ElaiesPlantation.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fotter-bottom">
                <div class="container">
                    <div class="row g-4 justify-content-between">
                        <div class="col-auto">
                            <p class="mb-0">Design By Elaeis Teams</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
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
