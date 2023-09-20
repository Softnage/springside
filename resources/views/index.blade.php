@extends('layouts.web')

@section('page_head')
    {!! seo() !!}

    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link href="https://unpkg.com/pattern.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
@endsection

@section('page_content')
    <div class="page-content bg-white">

        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/springside-hero.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/springside-hero-2.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="content-block">


            {{-- Our Story ==== --}}
            <div class="section-area section-sp1 our-story mt-5" style="background-color:#f3fcfd;">
                <div class="container">
                    <div class="row align-items-center d-flex">
                        <div class="col-lg-7 col-md-12 heading-bx p-lr">
                            <div class="video-bx">
                                <img class='img-thumbnail' src="{{ asset('images/feat-3.jpg') }}"
                                    alt="{{ content('app.name') }}" data-aos='fade-right' />
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 heading-bx" data-aos='fade-left'>
                            <h2 class="m-b10 font-2">
                                Welcome to
                                <br />
                                <span class="clr-1">Spring Side Academy</span>
                            </h2>
                            <p>
                                Spring Side Academy is a school within the Kumasi catchment area, specifically at
                                Atasomanso. Our thriving school community includes Nursery and Primary classes.
                                <br>
                                Our grounds provide great opportunities for outdoor learning, as well as play, sport and
                                family events. Our vision is to foster educational excellence as all pupils prepare to
                                become successful citizens. We challenge children to achieve their best through...
                            </p>
                            <a href="#" class="btn btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-area section-sp1 our-other-story">
                <div class="container">
                    <div class="row align-items-center d-flex">
                        <div class="col-lg-5 col-md-12 heading-bx" data-aos='fade-right'>
                            <h2 class="m-b10 font-2">A Loving Community</h2>
                            {{-- <h5 class="fw4">It is a long established fact that a reade.</h5> --}}
                            <p>
                                Every child is of equal importance and unique. Pupils and
                                members of our community are valued for what they are rather
                                than what they can do and are given every opportunity for
                                educational development to the highest level possible. We are
                                all equal in the sight of God.
                                If you would like to visit our school please contact the school
                                office.
                            </p>
                            {{-- <a href="#" class="btn btn-sm">Read More</a> --}}
                        </div>
                        <div class="col-lg-7 col-md-12 heading-bx p-lr">
                            <div class="video-bx">
                                <img class='img-thumbnail' src="{{ asset('images/feat-1.jpg') }}" alt=""
                                    data-aos='fade-left' />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-area section-sp1 our-story" style="background-color:#f3fcfd;">
                <div class="container">
                    <div class="row align-items-center d-flex">
                        <div class="col-lg-7 col-md-12 heading-bx p-lr">
                            <div class="video-bx">
                                <img class='img-thumbnail' src="{{ asset('images/feat-2.jpg') }}" alt=""
                                    data-aos='fade-right' />
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 heading-bx" data-aos='fade-left'>
                            <h2 class="m-b10 font-2">An Exciting Play-based Learning Environment</h2>
                            {{-- <h5 class="fw4">It is a long established fact that a reade.</h5> --}}
                            <p>
                                At {{ content('app.name') }}, we are keen on creating an
                                exciting play-based learning environment for our kids. We believe
                                that children learn best when they are doing what they enjoy,
                                and since every child loves to play, we learn through games and
                                exciting challenges.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Our Story END ==== --}}


            <div class="video-sec">
                <div class="video-sec-hol container">
                    <div class="video-sec-top">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3>
                                    A Brief Overview of {{ content('app.name') }}
                                </h3>
                            </div>
                            <div class="col-12 col-md-6">
                                <p>
                                    Get to know more about {{ content('app.name') }}, watch our
                                    overview video to get a more visual experience about our
                                    activities and standards.
                                </p>
                                <a class='btn btn-sm' href="{{ route('about') }}">Learn More <i
                                        class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="video-sec-bottom">
                        <div class="video-sec-bottom-hol img-thumbnail">
                            <iframe src="https://www.youtube.com/embed/Pnv1luYE3lU" allowfullscreen allowtransparency
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <section class="news-page">
                <div class="title-box">
                    <div class="title">
                        <p>NEWS AND EVENTS</p>
                    </div>
                </div>


                <div class="main-box">

                    <div class="news-box">

                        <div class="news-box11">
                            <img src="https://cdn.discordapp.com/attachments/996799073799647254/1151133199230058526/IMG-20230912-WA0022.jpg"
                                alt="IMAGE OF ">
                        </div>

                        <div class="news-box2">

                            <div class="div1">
                                <p>Alfred-Ace Ayeyi Acheampong-WINNER </p>
                                <span>APENTENG 1001 STORY WRITING PROJECT 2023</span>
                            </div>

                            <div class="div2">
                                <p>
                                    Adorned in his crown of victory, Alfred-Ace Ayeyi Acheampong
                                    unleashed his profound creativity and imagination to win the
                                    <em>Apenteng 1001 Story Writing Project 2023</em>.
                                    Though faced with the talents of other writers just as good as himself,
                                    he came supreme to win the competition.
                                </p>
                            </div>

                            <div class="div3">
                                <div><a href="">READ MORE</a></div>
                            </div>

                        </div>

                    </div>


                    <div class="news-box">

                        <div class="news-box11">
                            <img src="https://cdn.discordapp.com/attachments/996799073799647254/1151133198525415555/IMG-20230912-WA0023.jpg"
                                alt="IMAGE OF ">
                        </div>

                        <div class="news-box2">

                            <div class="div1">
                                <p>NANA KWAME NKANSAH-WINNER</p>
                                <span>EDI FY CRANE'S TYPING PROJECT 2023</span>
                            </div>

                            <div class="div2">
                                <p>
                                    Toast to the winner of the ultimate showcase of typing prowess ;
                                    EDI FY CRANE'S TYPING PROJECT 2023 ! In an era where digital
                                    communication and keyboard proficiency are paramount,
                                    this competition served as a testament to the skills and
                                    dedication of Nana Kwame Nkansah - who having mastered the
                                    art of typing, came out the victor.
                                </p>
                            </div>

                            <div class="div3">
                                <div><a href="">READ MORE</a></div>
                            </div>

                        </div>

                    </div>

                    <div class="news-box">

                        <div class="news-box11">
                            <img src="https://cdn.discordapp.com/attachments/996799073799647254/1151133563438239754/IMG-20230912-WA0019.jpg"
                                alt="IMAGE OF ">
                        </div>

                        <div class="news-box2">

                            <div class="div1">
                                <p>2023 SMARTRIBE ABACUS AND VERDIC MATHS COMPETITION AT SPRINGSIDE</p>
                                <p></p>
                            </div>

                            <div class="div2">
                                <p>
                                    Unlocking the potential of young minds, the magic of mental mathematics
                                    at the "2023 SMARTRIBE Abacus and Vedic Maths Competition" hosted at the
                                    prestigious Springside venue was nothing short of brilliant.
                                    This event is a celebration of mathematical brilliance and mental
                                    agility among students who have mastered the art of abacus and Vedic mathematics
                                </p>
                            </div>

                            <div class="div3">
                                <div><a href="">READ MORE</a></div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>


            {{-- Extra Curricula --}}
            <div class="section-area section-sp2 home-extra-curricula">
                <div class="home-extra-curricula-left">
                    <div class="extra-carousel owl-carousel" style="background-color:#135597!important;">

                        <div class="item card ec-activity">
                            <img class="card-img-top"
                                src="https://cdn.discordapp.com/attachments/996799073799647254/1151133198525415555/IMG-20230912-WA0023.jpg"
                                alt="" />
                            <div class="card-body">
                                <h5>Prioritizing Student Needs and Difficulties</h5>
                                <p>
                                    We provide an engaging environmenet which encourages students to voice out their most
                                    intriguing and imaginative questions.
                                </p>
                            </div>
                        </div>
                        <div class="item card ec-activity">
                            <img class="card-img-top"
                                src="https://cdn.discordapp.com/attachments/996799073799647254/1151133564088373358/IMG-20230912-WA0006.jpg"
                                alt="" />
                            <div class="card-body">
                                <h5>Regular Competitive Programs </h5>
                                <p>
                                    We engage students in regular competitions and an environment where your child will be
                                    actively
                                    involved in many new learning experiences & enrichment
                                    opportunities.
                                </p>
                            </div>
                        </div>

                        <div class="item card ec-activity">
                            <img class="card-img-top"
                                src="https://cdn.discordapp.com/attachments/996799073799647254/1151133199704018984/IMG-20230912-WA0008.jpg"
                                alt="" />
                            <div class="card-body">
                                <h5>Brain Development Programs</h5>
                                <p>
                                    We provide environments where your child will be actively involved in
                                    cognition-developing programs to elevate both intellect and intuition.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-extra-curricula-right">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0093941035057!2d-1.6253296857144353!3d6.6457539951945845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb913bfadaeb6b%3A0xfa401b75304550f6!2sSpring%20Side%20Academy!5e0!3m2!1sen!2sgh!4v1637167617199!5m2!1sen!2sgh"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>
            {{-- Extra Curricula END --}}

            {{-- Jumbo --}}
            <div class="section-area section-sp2 container">
                <div class="home-jumbo">
                    <div class="img-hol pattern-dots-sm">
                        <img src="{{ asset('images/journey.jpg') }}" alt="" />
                    </div>
                    <div class="home-jumbo-left">
                    </div>
                    <div class="home-jumbo-right">
                        <img src="{{ asset('images/office-pin.png') }}" alt="" class="office-pin">
                        <div>
                            <h3>
                                Educating the <span>Hand</span>, <span>Heart</span> and <span>Mind</span>.
                                <p>
                                    The function of education is to teach one to think intensively
                                    and to think critically. The most dangerous criminal may be the man gifted with reason,
                                    but with no morals.
                                    <br>
                                    Intelligence plus character; that is
                                    the goal of true education. This is the focus of education
                                    here at {{ content('app.name') }}.
                                </p>

                        </div>
                    </div>
                </div>
            </div>
            {{-- Jumbo END --}}

            {{-- Contact --}}
            <div class="container">
                @include('includes.contact-section')
            </div>
            {{-- Contact END --}}

        </div>

    </div>

    <script src="https://cdn.plyr.io/3.6.9/plyr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script type="text/javascript">
        const overviewVideo = new Plyr('#overview-video');
    </script>

    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection
