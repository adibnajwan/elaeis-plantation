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
    <title>Career</title>
</head>

<body>
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

    <!--Career-->
    


    <!-- List Job Departme -->
    <section class="mb-md-5 pb-md-5" id="job-list">
      <div class="container mb-5 d-none d-md-block">
        <div class="listings bg-white shadow px-5 pt-5 pb-4" style="border-radius: 3rem;">
          <h1 class="header mb-5">Recent Open Positions</h1>
          <div class="job">
            <div class="jobs-table-header row" style="font-size: 1.25rem;">
              <div class="col-md-6"><p class="head">Job Title</p></div>
              <div class="col-md-3"><p class="head">Department</p></div>
              <div class="col-md-3"><p class="head">Openings</p></div>
            </div>
            <div class="pb-3">
              <a href="/1_Accountant"  class="table-row">
                <div class="job-row row py-3" id="0">
                  <div class="col-md-6"><p class="mb-0">Accountant</p></div>
                  <div class="col-md-3"><p class="mb-0">ODS - Finance</p></div>
                  <div class="col-md-2"><p class="mb-0">2 openings</p></div>
                  <div class="col-md-1"><div class="mb-0"><img src="{{ asset('frontend/images/panah.png') }}" height="20px" width="20px" alt="panah"></div></div>
                </div>
              </a>
              <!-- Add other job listings here -->
               <a href="/2_DataOperationsAnalyst" class="table-row">
                <div class="job-row row py-3" id="0">
                  <div class="col-md-6"><p class="mb-0">Data Operations Analyst</p></div>
                  <div class="col-md-3"><p class="mb-0">ODS - Transport</p></div>
                  <div class="col-md-2"><p class="mb-0">3 openings</p></div>
                  <div class="col-md-1"><div class="mb-0"><img src="{{ asset('frontend/images/panah.png') }}" height="20px" width="20px" alt="panah"></div></div>
                </div>
              </a>

              <a href="/3_DataEngineer"  class="table-row">
                  <div class="job-row row py-3" id="0">
                    <div class="col-md-6"><p class="mb-0">Data Engineer</p></div>
                    <div class="col-md-3"><p class="mb-0">HoldCO - COO office</p></div>
                    <div class="col-md-2"><p class="mb-0">1 openings</p></div>
                    <div class="col-md-1"><div class="mb-0"><img src="{{ asset('frontend/images/panah.png') }}" height="20px" width="20px" alt="panah"></div></div>
                  </div>
                </a>

              <a href="/4_AccountManager"  class="table-row">
                  <div class="job-row row py-3" id="0">
                    <div class="col-md-6"><p class="mb-0">Account Manager</p></div>
                    <div class="col-md-3"><p class="mb-0">ODS - Regions</p></div>
                    <div class="col-md-2"><p class="mb-0">2 openings</p></div>
                    <div class="col-md-1"><div class="mb-0"><img src="{{ asset('frontend/images/panah.png') }}" height="20px" width="20px" alt="panah"></div></div>
                  </div>
              </a>

              <a href="/5_AreaOperationsStaff"  class="table-row">
                  <div class="job-row row py-3" id="0">
                    <div class="col-md-6"><p class="mb-0">Area Operation Staff</p></div>
                    <div class="col-md-3"><p class="mb-0">ODS - Regions</p></div>
                    <div class="col-md-2"><p class="mb-0">4 openings</p></div>
                    <div class="col-md-1"><div class="mb-0"><img src="{{ asset('frontend/images/panah.png') }}" height="20px" width="20px" alt="panah"></div></div>
                  </div>
                </a>
            </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('frontend/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>