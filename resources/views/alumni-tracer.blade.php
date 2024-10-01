<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <header>
        <nav>
            <div class="left">
                <img src="{{asset('img/umy-img.png')}}" alt="">
                <img src="{{ asset('img/cdc.png')}}" alt="">
                <ul>
                    <li><a href="#" class="nav-link active">Home</a></li>
                    <li><a href="#" class="nav-link">Kuisioner</a></li>
                    <li><a href="#" class="nav-link">Kontak</a></li>
                </ul>
            </div>
            <div class="right">
                <a href="">Sign Up</a>
                </dv>
        </nav>
    </header>
    <main class="container">
        <section class="intro-section">
            <div class="intro-content">
                <div class="intro-left">
                    <h1>Empowering Alumni With The University Alumni Tracer</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, maxime! Lorem, ipsum dolor.</p>
                    <div class="learn-more">
                        <a href="" class="btn">Learn More</a>
                        <p>Lorem, ipsum dolor? <a href="">Sign In</a></p>
                    </div>
                    <div class="paper-plane">
                        <img src="{{ asset('img/paper-plane.png') }}" alt="">
                    </div>
                </div>
                <div class="intro-right">
                    <img src="{{asset('img/man.png')}}" alt="" class="blured-image">
                </div>
            </div>
        </section>
        <section class="benefits">
            <div class="benefits-container">
                <div class="benefit-title">
                    <h1>Apa yang akan kamu dapatkan di Tracer Study</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="card-icon icon-1">
                            <i class='bx bx-folder-open'></i>
                        </div>
                        <div class="card-title">
                            <h3>Data Kuesioner</h3>
                        </div>
                        <div class="card-description">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            <p>Get Started <span><i class='bx bx-right-arrow-alt'></i></span></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-icon icon-2">
                            <i class='bx bx-folder-open'></i>
                        </div>
                        <div class="card-title">
                            <h3>Data Kuesioner</h3>
                        </div>
                        <div class="card-description">
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                            <p><span><i class='bx bx-right-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
                <div class="card-line">
                </div>
                <div class="detail-content">
                    <div class="detail-left">
                        <div class="detail-title">
                            <h2>Carreer Development Center UMY</h2>
                        </div>
                        <div class="detail-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aperiam facere
                                accusamus aut obcaecati architecto. Aut vero earum dignissimos nobis quod, ipsam
                                asperiores ab consequatur in, repellat suscipit necessitatibus assumenda?
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, optio suscipit?
                                Incidunt nisi unde, libero doloremque sequi ullam aperiam iste. At magnam hic laudantium
                                nobis fugiat explicabo velit nam. Placeat?</p>
                        </div>
                    </div>
                    <div class="detail-img">
                        <img src="{{ asset('img/women.jpg')}}" alt="">
                    </div>

                </div>
                <div class="stats-section">
                    <div class="stats-item">
                        <div class="stats-number">25 <span>%</span></div>
                        <div class="stats-label">Tingkat Ketercapaian</div>
                        <div class="stats-line"></div>
                    </div>
                    <div class="stats-item">
                        <div class="stats-number">120 <span>+</span></div>
                        <div class="stats-label">Perusahaan Terdaftar</div>
                        <div class="stats-line"></div>
                    </div>
                    <div class="stats-item">
                        <div class="stats-number">120 <span>+</span></div>
                        <div class="stats-label">Perusahaan Terdaftar</div>
                        <div class="stats-line"></div>
                    </div>
                    <div class="stats-item">
                        <div class="stats-number">120 <span>%</span></div>
                        <div class="stats-label">Perusahaan Terdaftar</div>
                        <div class="stats-line"></div>
                    </div>
                    <div class="stats-item">
                        <div class="stats-number">120 <span>+</span></div>
                        <div class="stats-label">Perusahaan Terdaftar</div>
                        <div class="stats-line"></div>
                    </div>

                </div>


        </section>

    </main>
</body>


</html>