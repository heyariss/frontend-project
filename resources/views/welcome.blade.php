<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Graha Wisata Kita</title>

        <!-- Styles -->
        @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <!-- Header Start -->
        <header>
            <nav class="navbar">
                <div class="navbar-container">
                    <div class="left">
                        <a href="/" class="navbar-logo"><img src="https://res.cloudinary.com/dm2n9z3qd/image/upload/v1705563382/logo-head-gwa_b09kgf.png" alt="Logo" srcset=""></a>
                        <ul class="navbar-menu">
                            <li class="navbar-item"><a href="#" class="navbar-link">Homepage</a></li>
                            <li class="navbar-item"><a href="#" class="navbar-link">Tentang</a></li>
                            <li class="navbar-item"><a href="#" class="navbar-link">Daftar Hotel</a></li>
                            <li class="navbar-item"><a href="#" class="navbar-link">Bantuan</a></li>
                          </ul>
                    </div>
                    <div class="btn-lang">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                               <span class="flag"><img src="{{ URL('assets/images/flag-id.png') }}" alt="" srcset=""></span>
                               <span class="lang">Indonesia ( ID )</span>
                               <span class="caret"><img src="{{ URL('assets/icons/chevron-down.svg') }}" alt="" srcset=""></span>
                            </a>
                            {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                               <li><a href="#">Bahasa Indonesia</a></li>
                               <li><a href="#">English Language</a></li>
                               <li><a href="#">中文</a></li>
                            </ul>
                           </li> --}}
                    </div>
                  
                  <div class="navbar-toggle">
                    <span class="navbar-toggle-icon"></span>
                  </div>
                </div>
              </nav>
             <!-- Header End -->
    
             <section class="section-bg">
                <img class="hero-bg">
                <div class="section-container">
                    <div class="section-grid">
                        <div class="section-content">
                            <div class="section-tagline">
                                <div class="line"></div>
                                <h6>HOTEL OPERATOR</h6>
                            </div>
                            <h1 class="section-title">
                                Membantu Menjalankan<br>
                                Operasi Properti Anda
                            </h1>
                            <p class="section-subtitle">GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
            
                            <div href="/" title="button" class="hero-text__button" role="button">
                                Konsultasikan Bisnis Saya
                            </div>
                            
                        </div>
            
                        <div class="section-image">
                            <img class="section-image-source" src="https://res.cloudinary.com/dm2n9z3qd/image/upload/v1705582782/img-hero_jivirs.png" alt="" />
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <!-- Section Workflow Start -->
        <section class="workflow" id="how-we-work">
            <div class="container">
                <div class="workflow-inner">
                    <div class="header">
                        <div class="subheadlines">
                            <div class="line"></div>
                            <h6>OUR WORKFLOW</h6>
                        </div>
                        <h2>Proses Kerja Kami dalam<br>Meningkatkan Kualitas Properti</h2>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="workflow-box">
                    <div class="line">
                        <img class="bg-lines" alt="">
                    </div>
                    <div class="workflow-col" id="satu" style="pointer-events: auto;">
                        <div class="icon">
                            <img src="https://gwagroup.co.id/assets/images/how-we-work/icon-1.png" alt="">
                        </div>
                        <div class="text">
                            <h6>Tantangan</h6>
                            <p>Setiap property memiliki<br>tantangan tersendiri dan GWA<br>sangat memahami hal tersebut.</p>
                        </div>
                    </div>
                    <div class="workflow-col" id="dua" style="pointer-events: auto;">
                        <div class="icon">
                            <img src="https://gwagroup.co.id/assets/images/how-we-work/icon-2.png" alt="">
                        </div>
                        <div class="text">
                            <h6>Rumusan</h6>
                            <p>Setiap tantangan akan dirumuskan<br>menjadi sebuah hal yang harus dicari<br>jalan keluarnya oleh kami</p>
                        </div>
                    </div>
                    <div class="workflow-col" id="tiga" style="pointer-events: auto;">
                        <div class="icon">
                            <img src="https://gwagroup.co.id/assets/images/how-we-work/icon-3.png" alt="">
                        </div>
                        <div class="text">
                            <h6>Goals</h6>
                            <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                        </div>
                    </div>
                    <div class="workflow-col" id="empat" style="pointer-events: auto;">
                        <div class="icon">
                            <img src="https://gwagroup.co.id/assets/images/how-we-work/icon-4.png" alt="">
                        </div>
                        <div class="text">
                            <h6>Ide</h6>
                            <p>Setiap rumusan menjadikan ide-ide<br>kreatif bagi kami untuk meningkatkan<br>kualitas property mitra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Our Service Start -->
        <section class="our-service" id="our-service">
            <img class="bg-service" >
            <div class="container">
                <div class="service-inner">
                    <div class="header">
                        <div class="subheadlines">
                            <div class="line"></div>
                            <h6>OUR SERVICE</h6>
                        </div>
                        <h2>Apa Saja yang Bisa Kami Bantu ?</h2>
                    </div>
                    <div class="service-grid">
                        <div class="card-ourservice">
                            <div class="icon">
                                <img src="{{ URL('assets/icons/service-1.png') }}" alt="" srcset="">
                            </div>
                            <div class="number-card">01</div>
                            <h4>Revenue<br>Management Service</h4>
                            <div href="/" title="button" class="button-default" role="button">
                                Saya Tertarik
                                <img src="{{ URL('assets/icons/arrow-right.png') }}" alt="" srcset="">
                            </div>
                        </div>
                        <div class="card-ourservice">
                            <div class="icon">
                                <img src="{{ URL('assets/icons/service-2.png') }}" alt="" srcset="">
                            </div>
                            <div class="number-card">02</div>
                            <h4>Full Manage<br>Service</h4>
                            <div href="/" title="button" class="button-default" role="button">
                                Saya Tertarik
                                <img src="{{ URL('assets/icons/arrow-right.png') }}" alt="" srcset="">
                            </div>
                        </div>
                        <div class="card-ourservice">
                            <div class="icon">
                                <img src="{{ URL('assets/icons/service-3.png') }}" alt="" srcset="">
                            </div>
                            <div class="number-card">03</div>
                            <h4>Asset Monetize<br>Service</h4>
                            <div href="/" title="button" class="button-default" role="button">
                                Saya Tertarik
                                <img src="{{ URL('assets/icons/arrow-right.png') }}" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

    </body>
</html>
