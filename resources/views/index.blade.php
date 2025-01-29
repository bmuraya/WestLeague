@extends('layouts.app')

@section('content')
    <section class="hero_section">

        <div class="container-fluid">


            <div class="row">
                <!-- Upcoming Games Section -->
                <div class="col-md-3 bg-primary text-black p-3">
                    <h5 class="fw-bold"> <i class="fa-regular fa-futbol px-2"></i>MatchWeek</h5>
                    <div class=" mb-3">
                        <h6 class="text-uppercase text-center">Tuesday 14 January</h6>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center justify-content-center py-2 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="fw-bold me-2">LEE</span>
                                    <img src=" {{ asset('img/1200px-Leeds_United_F.C._logo (1).png') }}" alt="leads Logo" class="me-2">
                                </span>
                                <span class="px-4">01:40</span>
                                <span class="d-flex align-items-center">
                                    <img src=" {{ asset('img/Tottenham_Hotspur.png') }}" alt="Tottenham_Hotspur Logo" class="me-2">
                                    <span class="fw-bold">TOT</span>
                                </span>
                            </li>
                            <li class="d-flex align-items-center justify-content-center py-2 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="fw-bold me-2">Ars</span>
                                    <img src=" {{ asset('img/Arsenal_FC.png') }}" alt="Arsenal Logo" class="me-2">
                                </span>
                                <span class="px-4">01:40</span>
                                <span class="d-flex align-items-center">
                                    <img src=" {{ asset('img/Manchester_City_FC_badge.png') }}" alt="Man  Logo" class="me-2">
                                    <span class="fw-bold">MCI</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class=" mb-3">
                        <h6 class="text-uppercase text-center">Tuesday 14 January</h6>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center justify-content-center py-2 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="fw-bold me-2">LEE</span>
                                    <img src=" {{ asset('img/1200px-Leeds_United_F.C._logo (1).png') }}" alt="leads Logo" class="me-2">
                                </span>
                                <span class="px-4">01:40</span>
                                <span class="d-flex align-items-center">
                                    <img src=" {{ asset('img/Tottenham_Hotspur.png') }}" alt="Tottenham_Hotspur Logo" class="me-2">
                                    <span class="fw-bold">TOT</span>
                                </span>
                            </li>
                            <li class="d-flex align-items-center justify-content-center py-2 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="fw-bold me-2">Ars</span>
                                    <img src=" {{ asset('img/Arsenal_FC.png') }}" alt="Arsenal Logo" class="me-2">
                                </span>
                                <span class="px-4">01:40</span>
                                <span class="d-flex align-items-center">
                                    <img src=" {{ asset('img/Manchester_City_FC_badge.png') }}" alt="Man  Logo" class="me-2">
                                    <span class="fw-bold">MCI</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class=" mb-3">
                        <h6 class="text-uppercase text-center">Tuesday 14 January</h6>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center justify-content-center py-2 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="fw-bold me-2">LEE</span>
                                    <img src=" {{ asset('img/1200px-Leeds_United_F.C._logo (1).png') }}" alt="leads Logo" class="me-2">
                                </span>
                                <span class="px-4">01:40</span>
                                <span class="d-flex align-items-center">
                                    <img src=" {{ asset('img/Tottenham_Hotspur.png') }}" alt="Tottenham_Hotspur Logo" class="me-2">
                                    <span class="fw-bold">TOT</span>
                                </span>
                            </li>
                            <li class="d-flex align-items-center justify-content-center py-2 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="fw-bold me-2">Ars</span>
                                    <img src=" {{ asset('img/Arsenal_FC.png') }}" alt="Arsenal Logo" class="me-2">
                                </span>
                                <span class="px-4">01:40</span>
                                <span class="d-flex align-items-center">
                                    <img src=" {{ asset('img/Manchester_City_FC_badge.png') }}" alt="Man  Logo" class="me-2">
                                    <span class="fw-bold">MCI</span>
                                </span>
                            </li>
                            <li class="d-flex align-items-center justify-content-center py-2 border-bottom">
                                <span class="d-flex align-items-center">
                                    <span class="fw-bold me-2">Ars</span>
                                    <img src=" {{ asset('img/Arsenal_FC.png') }}" alt="Arsenal Logo" class="me-2">
                                </span>
                                <span class="px-4">01:40</span>
                                <span class="d-flex align-items-center">
                                    <img src=" {{ asset('img/Manchester_City_FC_badge.png') }}" alt="Man  Logo" class="me-2">
                                    <span class="fw-bold">MCI</span>
                                </span>
                            </li>

                        </ul>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-light">View All Fixtures</a>
                    </div>
                </div>

                <!-- Feature Section -->
                <div class="col-md-6 bg-feature text-white p-3 ">
                    <img src=" {{ asset('img/feature-image.webp') }}" alt="Feature Image" class="img-fluid mb-3 rounded">
                    <h6 class="fw-bold">Feature Story</h6>
                    <h5 class="fw-bold">CAF D coaching course equips football players with coaching skills</h5>
                    <p>The CAF D coaching course saw 29 participants achieve a significant milestone by earning
                        their CAF D certificate in Nairobi's Lang'ata area.</p>
                </div>

                <!-- Standings Section -->
                <div class="col-md-3 bg-success text-black p-3">
                    <h5 class="fw-bold"><i class="fa-solid fa-trophy px-2"></i> Standings</h5>
                    <table class="custom-table">
                        <thead>
                            <tr>
                                <th>Club</th>
                                <th>Pl</th>
                                <th>GD</th>

                                <th>Pts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src=" {{ asset('img/Arsenal_FC.png') }}" alt="Arsenal Logo" class="logo">Arsenal</td>
                                <td>3</td>
                                <td>3</td>

                                <td>9</td>
                            </tr>
                            <tr>
                                <td><img src=" {{ asset('img/Manchester_City_FC_badge.png') }}" alt="Man City Logo" class="logo">Man
                                    City</td>
                                <td>2</td>
                                <td>2</td>

                                <td>7</td>
                            </tr>
                            <tr>
                                <td><img src=" {{ asset('img/1200px-Leeds_United_F.C._logo (1).png') }}" alt="Leeds United Logo"
                                        class="logo">Leeds United</td>
                                <td>2</td>
                                <td>2</td>

                                <td>7</td>
                            </tr>
                            <tr>
                                <td><img src=" {{ asset('img/Arsenal_FC.png') }}" alt="Arsenal Logo" class="logo">Arsenal</td>
                                <td>3</td>
                                <td>3</td>

                                <td>9</td>
                            </tr>
                            <tr>
                                <td><img src=" {{ asset('img/Manchester_City_FC_badge.png') }}" alt="Man City Logo" class="logo">Man
                                    City</td>
                                <td>2</td>
                                <td>2</td>

                                <td>7</td>
                            </tr>
                            <tr>
                                <td><img src=" {{ asset('img/1200px-Leeds_United_F.C._logo (1).png') }}" alt="Leeds United Logo"
                                        class="logo">Leeds United</td>
                                <td>2</td>
                                <td>2</td>

                                <td>7</td>
                            </tr>
                            <tr>
                                <td><img src=" {{ asset('img/Arsenal_FC.png') }}" alt="Arsenal Logo" class="logo">Arsenal</td>
                                <td>3</td>
                                <td>3</td>

                                <td>9</td>
                            </tr>
                            <tr>
                                <td><img src=" {{ asset('img/Manchester_City_FC_badge.png') }}" alt="Man City Logo" class="logo">Man
                                    City</td>
                                <td>2</td>
                                <td>2</td>

                                <td>7</td>
                            </tr>
                            <tr>
                                <td><img src=" {{ asset('img/1200px-Leeds_United_F.C._logo (1).png') }}" alt="Leeds United Logo"
                                        class="logo">Leeds United</td>
                                <td>2</td>
                                <td>2</td>

                                <td>7</td>
                            </tr>

                            <tr>
                                <td><img src=" {{ asset('img/1200px-Leeds_United_F.C._logo (1).png') }}" alt="Leeds United Logo"
                                        class="logo">Leeds United</td>
                                <td>2</td>
                                <td>2</td>

                                <td>7</td>
                            </tr>



                        </tbody>
                    </table>


                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-light">View All Table</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="results">


        <div class="container-fluid">

            <div class="row">
                <h5 class="fw-bold"><i class="fa-solid fa-flag"></i> Match Results</h5>
                <!-- Left Column -->
                <div class="col-md-6">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" id="resultTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="latest-tab" data-bs-toggle="tab"
                                data-bs-target="#latest" type="button" role="tab">Latest Result</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="county-tab" data-bs-toggle="tab" data-bs-target="#county"
                                type="button" role="tab">County</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="subcounty-tab" data-bs-toggle="tab" data-bs-target="#subcounty"
                                type="button" role="tab">SubCounty</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="youth-tab" data-bs-toggle="tab" data-bs-target="#youth"
                                type="button" role="tab">Youth League</button>
                        </li>
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content mt-3">

                        <div class="tab-pane fade show active" id="latest" role="tabpanel">
                            <div class="table-responsive">
                                <table class="result-table">
                                    <tbody>
                                        <!-- Row 1 -->
                                        <tr>
                                            <td class="team">
                                                <img src=" {{ asset('https://flagcdn.com/w40/ar.png') }}" alt="Argentina">
                                                <span>Argentina</span>
                                            </td>
                                            <td class="score">1 - 2</td>
                                            <td class="team">
                                                <span>Italy</span>
                                                <img src=" {{ asset('https://flagcdn.com/w40/it.png') }}" alt="Italy">
                                            </td>
                                        </tr>
                                        <!-- Row 2 -->
                                        <tr>
                                            <td class="team">
                                                <img src=" {{ asset('https://flagcdn.com/w40/pt.png') }}" alt="Portugal">
                                                <span>Portugal</span>
                                            </td>
                                            <td class="score">2 - 3</td>
                                            <td class="team">
                                                <span>Belgium</span>
                                                <img src=" {{ asset('https://flagcdn.com/w40/be.png') }}" alt="Belgium">
                                            </td>
                                        </tr>
                                        <!-- Row 3 -->
                                        <tr>
                                            <td class="team">
                                                <img src=" {{ asset('https://flagcdn.com/w40/gh.png') }}" alt="Ghana">
                                                <span>Ghana</span>
                                            </td>
                                            <td class="score">1 - 3</td>
                                            <td class="team">
                                                <span>Brazil</span>
                                                <img src=" {{ asset('https://flagcdn.com/w40/br.png') }}" alt="Brazil">
                                            </td>
                                        </tr>
                                        <!-- Row 4 -->
                                        <tr>
                                            <td class="team">
                                                <img src=" {{ asset('https://flagcdn.com/w40/uy.png') }}" alt="Uruguay">
                                                <span>Uruguay</span>
                                            </td>
                                            <td class="score">2 - 2</td>
                                            <td class="team">
                                                <span>Poland</span>
                                                <img src=" {{ asset('https://flagcdn.com/w40/pl.png') }}" alt="Poland">
                                            </td>
                                        </tr>
                                        <!-- Row 5 -->
                                        <tr>
                                            <td class="team">
                                                <img src=" {{ asset('https://flagcdn.com/w40/es.png') }}" alt="Spain">
                                                <span>Spain</span>
                                            </td>
                                            <td class="score">3 - 3</td>
                                            <td class="team">
                                                <span>Czech</span>
                                                <img src=" {{ asset('https://flagcdn.com/w40/cz.png') }}" alt="Czech">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="county" role="tabpanel">
                            <p>County results will be displayed here.</p>
                        </div>
                        <div class="tab-pane fade" id="subcounty" role="tabpanel">
                            <p>SubCounty results will be displayed here.</p>
                        </div>
                        <div class="tab-pane fade" id="youth" role="tabpanel">
                            <p>Youth League results will be displayed here.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-6 ">
                    <div class="row align-items-left top-scorer-card">
                        <!-- Left Column -->
                        <div class="col-6 content-right">
                            <div class="top-scorer-title text-break">Top Scorer</div>
                            <div class="goals-count text-break">15 Goals</div>
                            <div class="player-name text-break">Eden Hazard</div>
                            <div class="club-name text-break">Club</div>
                        </div>


                        <!-- Right Column -->
                        <div class="col-6 text-center">
                            <img src=" {{asset('img/topscorer.png') }}" alt="Player Image" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    </div>

    <!-- news Section  -->
    <section class="news-section">

        <div class="container-fluid py-4 ">
            <h2 class="section-title"><i class="fa-regular fa-newspaper"></i> All News & Transfers Today</h2>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <a href="#" class="d-block">
                        <div class="card news-card">
                            <img src=" {{ asset('img/B21E4SS0492A.JPG') }}" alt="News Image">
                            <div class="card-body">
                                <span class="tag">Premier League</span>
                                <h5 class="title">Signs of Arsenal getting stronger in the Premier League</h5>
                                <p class="description">The victory over Wolves provided a comfortable distance for Arsenal
                                    at the top of the Premier League standings.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <a href="#" class="d-block">
                        <div class="card news-card">
                            <img src=" {{ asset('img/B24KMMN0998.jpg') }}" alt="News Image">
                            <div class="card-body">
                                <span class="tag">Premier League</span>
                                <h5 class="title">Erling Haaland Leads Premier League Top Scorers 2022</h5>
                                <p class="description">Until the competition break for the 2022 World Cup, Haaland remains
                                    the top scorer of the 2022/2023 Premier League .</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <a href="#" class="d-block">
                        <div class="card news-card">
                            <img src=" {{ asset('img/B19JEGB3046.jpg') }}" alt="News Image">
                            <div class="card-body">
                                <span class="tag">Premier League</span>
                                <h5 class="title">Chelsea were humiliated 1-4 at Brighton headquarters</h5>
                                <p class="description">Chelsea were humiliated by losing with a big score of 1-4 at
                                    Brighton headquarters in Matchday 14 of the Premier League.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <a href="#" class="d-block">
                        <div class="card news-card">
                            <img src=" {{ asset('img/B20LLSS1659.JPG') }}" alt="News Image">
                            <div class="card-body">
                                <span class="tag">Premier League</span>
                                <h5 class="title">Garnacho led Manchester United to beat Fulham</h5>
                                <p class="description">Midfielder Christian Eriksen not only put United ahead in the 14th
                                    minute but also scored his first goal for United since joining.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!-- partner section  -->

    <section class="partner-section">
        <div class="container-fluid ">
            <h2 class="section-title"><i class="fa-solid fa-handshake"></i> Our Partners</h2>
            <ul class="partner-list">
                <!-- Partner 1 -->
                <li>
                    <a href="#" class="partner-logo-container">
                        <img src=" {{ asset('img/Safaricom-Logo.webp') }}" alt="Partner Logo" class="partner-logo">
                    </a>
                </li>
                <!-- Partner 2 -->
                <li>
                    <a href="#" class="partner-logo-container">
                        <img src=" {{ asset('img/Azam-TV-FKF.webp') }}" alt="Partner Logo" class="partner-logo">
                    </a>
                </li>
                <!-- Partner 3 -->
                <li>
                    <a href="#" class="partner-logo-container">
                        <img src=" {{ asset('img/logo-KFK.png') }}" alt="Partner Logo" class="partner-logo">
                    </a>
                </li>
                <!-- Partner 4 -->
                <li>
                    <a href="#" class="partner-logo-container">
                        <img src=" {{ asset('img/mozzartbet.webp') }}" alt="Partner Logo" class="partner-logo">
                    </a>
                </li>
            </ul>

        </div>
        </div>
    </section>
@endsection
