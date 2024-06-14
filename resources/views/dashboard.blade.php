<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to,  Sambanggo !') }}
        </h2>
    </x-slot>


    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="https://www.joglowisata.com/wp-content/uploads/2017/09/puncak-suroloyo-kulon-progo.jpg" class="img-fluid" alt="First slide"width="2000" height="800" >
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 text-white animated fadeInUp">Sambanggo</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">Sambang Geoheritage Kulon Progo</p>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Taman Bumi (Geopark) adalah sebuah wilayah geografi
                                    tunggal atau gabungan, yang memiliki Situs Warisan Geologi
                                    (Geosite) dan bentang alam yang bernilai, terkai t aspek
                                    Warisan Geologi (Geoheritage), Keragaman Geologi
                                    (Geodiversity), Keanekaragaman Hayati (Biodiversity), dan
                                    Keragaman Budaya (CulturalDiversi ty), ser ta dikelola untuk
                                    keper luan konservasi, edukasi, dan pembangunan
                                    perekonomian masyarakat secara berkelanjutan dengan
                                    keter libatan aktif masyarakat dan Pemerintah Daerah,
                                    sehingga dapat digunakan untuk menumbuhkan pemahaman
                                    dan kepedulian masyarakat terhadap bumi dan lingkungan
                                    seki tarnya.
                                    Geological Heritage Site atau Geosite merupakan istilah yang digunakan Pemda DIY yang merujuk pada Situs Warisan Geologi yang artinya adalah objek Geoheritage dengan ciri khas tertentu baik individual maupun multi objek yang merupakan bagian tidak terpisahkan dari sebuah cerita evolusi pembentukan suatu daerah.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://geoparkjogja.jogjaprov.go.id/uploads/site/1680247392_6e066f1cc0b50b4d7a5f.png" class="img-fluid" alt="Second slide"width="2000" height="800">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h6 class="text-secondary h4 animated fadeInUp">Geological dan Biodiversity</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Manfaat Geopark</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Menurut Samodra, H. (2012) Geopark adalah konsep manajemen
                                pembangunan dan pengembangan kawasan secara berkelanjutan yang
                                memadu-serasikan 3 (tiga) keragaman alam yaitu Geodiversity,
                                Biodiversity, dan Cultural Diversity, serta berpilar pada aspek konservasi,
                                edukasi, dan penumbungan nilai ekonomi lokal melalui geowisata dan
                                geoproduk.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

<!-- Count Data -->
    <div class="container my-4">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title">Data</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i>  Total Points</h4>
                            <p style="font-size: 32pt">{{$total_points}}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-warning" role="alert">
                            <h4><i class="fa-solid fa-route"></i>  Total Polyline</h4>
                            <p style="font-size: 32pt">{{$total_polylines}}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa-solid fa-draw-polygon"></i>  Total Polygon</h4>
                            <p style="font-size: 32pt">{{$total_polygons}}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p>Anda Login sebagai <b>{{Auth::user()->name}}</b> Dengan Email <i>{{Auth::user()->email}}</i></p>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html">
                        <h1 class="text-white fw-bold d-block">Profil <span class="text-secondary">Pembuat</span> </h1>
                    </a>
                    <p class="mt-4 text-light">Yasin Manik Hawa</p>
                    <p class="mt-4 text-light"> 22/506181/SV/22104</p>
                    <a href="https://www.linkedin.com/in/yasin-manik-hawa-bb8944247?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="btn-light nav-fill btn btn-square rounded-circle me-0" target="_blank">
                        <i class="fa-brands fa-linkedin me-2"></i>
                    </a>
                    <a href="https://instagram.com/yasinmikha" class="btn-light nav-fill btn btn-square rounded-circle me-0" target="_blank">
                        <i class="fa-brands fa-square-instagram me-2"></i>
                    </a>
                    <a href="https://geoparkjogja.jogjaprov.go.id/" class="btn-light nav-fill btn btn-square rounded-circle me-0" target="_blank">
                        <i class="fa-solid fa-globe me-2"></i>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">SUMBER DATA</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i>Peta Geologi Kementrian Energi dan Sumber Daya Mineral </a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i>Dokumentasi Biro Pengembangan Infrastruktur Wilayah dan Pembiayaan Pembangunan Setda DIY</a>
                    </div>
                </div>
                    <div class="col-lg-3 col-md-6">
                            <a href="#" class="h3 text-secondary">MORE INFO ABOUT GEOHERITAGE</a>
                            <p class="mt-4 text-light">
                                <strong>Sekretaris Daerah DIY Bagian Analisa Kebijakan Pembangunan</strong><br>
                                Biro Administrasi Pembangunan Setda DIY, Unit 1 3rd Floor, Goverment Area Kepatihan
                                Danurejan Yogyakarta </p>

                        </div>
                </div>
            </div>

            <hr class ="text-light mt-5 mb-4">
            <div class="row">
                <figure class="text-center">
                    <blockquote class="blockquote">
                      <p>A well-known quote, contained in a blockquote element.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      All Right Reserved <cite title="Source Title">SIG UGM 2024</cite>
                    </figcaption>
                  </figure>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</x-app-layout>
