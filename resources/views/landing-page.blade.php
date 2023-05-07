<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    {{-- Vendors --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <link href="{{ asset('assets/vendors/img-lightbox/css/img-lightbox.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    {{-- Responsive --}}
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @vite([])
</head>

<body>

    <div class="global-wrapper">
        <div class="mobile-navbar">
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#events">Events</a></li>
                <li class="nav-item"><a href="#gallery">Gallery</a></li>
                <li class="nav-item"><a href="#location">Location</a></li>
                <li class="nav-item"><a href="#donation">Donation</a></li>
                <li class="nav-item"><a href="#rsvp">RSVP</a></li>
            </ul>
        </div>

        <nav class="custom-navbar">
            <ul class="nav-menu">
                <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#events">Events</a></li>
                <li class="nav-item"><a href="#gallery">Gallery</a></li>
                <li class="nav-item"><a href="#location">Location</a></li>
                <li class="nav-item dropdown">
                    <a href="#others" class="dropdown-toggle" data-bs-toggle="dropdown">Others <span
                            class="caret"></span></a>
                    <div class="dropdown-menu" style="width: 200px;">
                        <a href="#donation">Donation</a>
                        <a href="#rsvp">RSVP</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="accent-wrapper">
            <img class="first-side-accent" src="{{ asset('assets/images/sakura-side-accent.png') }}"
                alt="Sakura - Aksen Awal">
            <img class="second-side-accent" src="{{ asset('assets/images/sakura-side-accent.png') }}"
                alt="Sakura - Aksen Kedua">
            <img class="third-side-accent" src="{{ asset('assets/images/sakura-side-accent.png') }}"
                alt="Sakura - Aksen Ketiga">
        </div>

        <div class="audio-wrapper">
            <audio controls loop id="myAudio" autoplay>
                <source src="{{ asset('assets/vendors/audioplayer/BrianMcKnightJr-MarryYourDaughter.mp3') }}"
                    type="audio/mpeg" />
            </audio>
        </div>

        <main>
            <section id="home">
                <div class="hero">
                    <div class="hero-overlay"></div>
                    <div class="hero-content">
                        <h4 data-aos="fade-down" data-aos-delay="0">のウエディング</h4>
                        <h1 data-aos="fade-down" data-aos-delay="800">Rina & Asep</h1>
                        <a href="#rsvp" data-aos="fade-up" data-aos-delay="1400">
                            <button class="btn-cta">Beri Ucapan</button>
                        </a>
                    </div>
                </div>
            </section>

            <section id="events">
                <div class="introduction">
                    <div data-aos="fade-up">
                        <x-custom-heading title="Rangkaian Acara" />
                    </div>

                    <div class="sambutan-acara" data-aos="fade-up" data-aos-delay="600">
                        <img src="{{ asset('assets/images/bismillah.png') }}" width="329" alt="">

                        <p>Assalamualaikum Warahmatullahi Wabarakatuh</p>
                        <p>Dengan memohon rahmat dan ridho dari Allah SWT, Kami
                            akan menyelenggarakan resepsi pernikahan Putra-Putri Kami:</p>
                    </div>

                    <div class="couples">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 bride-person" data-aos="fade-right"
                                data-aos-delay="600">
                                <div class="custom-frame">
                                    <div class="custom-frame-overlay">
                                        <div class="sakura-circle"></div>
                                        <img src="{{ asset('assets/images/bride.jpg') }}" alt="Bride">
                                    </div>
                                </div>

                                <div class="couple-desc">
                                    <h4>Rina Agus</h4>
                                    <p>Anak pertama dari pasangan Bpk. Mamat Syamsudin dan Ibu Khosasih</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 groom-person" data-aos="fade-left"
                                data-aos-delay="600">
                                <div class="custom-frame">
                                    <div class="custom-frame-overlay">
                                        <div class="sakura-circle"></div>
                                        <img src="{{ asset('assets/images/groom.jpg') }}" alt="Groom">
                                    </div>
                                </div>

                                <div class="couple-desc">
                                    <h4>Asep Jajang Khoerudin</h4>
                                    <p>Anak bungsu dari pasangan Bpk. Yayat Hidayat dan Ibu Siti Aminah</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="agenda">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="flip-left" data-aos-delay="400">
                                <x-card-agenda title="Akad Nikah" date="Sabtu, 20 Februari 2023" timeStart="15.00"
                                    timeEnd="17.00" location="Kediaman Mempelai Pria di Jl. Kusumadinata"
                                    icon="icon-ring.png" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="flip-right" data-aos-delay="800">
                                <x-card-agenda title="Resepsi Pernikahan" date="Minggu, 10 Mei 2023"
                                    timeStart="08.00" timeEnd="Selesai"
                                    location="Gedung Serbaguna Cianjur Raya, Cianjur, Jawa Barat"
                                    icon="icon-bucket.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gallery">
                <div data-aos="fade-down">
                    <x-custom-heading title="Gallery" />
                </div>
                <div class="gallery-wrapper">
                    <div class="row indent">
                        @for ($i = 1; $i <= 9; $i++)
                            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ asset('assets/images/prewedding/' . $i . '.png') }}" class="img-lightbox-link zoomed-image" aria-hidden="true" rel="lightbox">
                                    <img src="{{ asset('assets/images/prewedding/' . $i . '.png') }}"
                                        alt="Gambar ke-{{ $i }}">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>

            <section id="location">
                <div data-aos="fade-up">
                    <x-custom-heading title="Location" />
                </div>
                <div class="location-wrapper">
                    <iframe data-aos="fade-up" data-aos-delay="200"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.4337941473751!2d107.09253851841505!3d-6.802037159887983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684dfa10a2e0cd%3A0x5e5c9d723b346de2!2skp%20Banjarpinang!5e0!3m2!1sen!2sid!4v1683033655927!5m2!1sen!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>

            <section id="donation">
                <div data-aos="fade-down">
                    <x-custom-heading title="Donation" />
                </div>

                <div class="donation-wrapper">
                    <div class="card-donation">
                        <div class="left-donation">
                            <div class="giving-hand-box" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('assets/images/icon-donation.png') }}" alt="Donasi">
                            </div>
                            <div class="description-box" data-aos="fade-down" data-aos-delay="600">
                                <p>Bantulah kami merayakan hari bahagia kami dengan memberikan donasi sukarela ke
                                    rekening
                                    yang tertera atau dengan scan QR Code. Setiap sumbangan dari Anda sangat berarti
                                    bagi
                                    kelancaran pernikahan kami. </p>
                            </div>
                        </div>
                        <div class="right-donation" data-aos="zoom-in" data-aos-delay="600">
                            <button class="btn-bca">
                                <img src="{{ asset('assets/images/payment-bca.png') }}" alt="BCA">
                                Transfer BCA
                            </button>
                            <button class="btn-qris" data-aos="fade-down">
                                <img src="{{ asset('assets/images/payment-qris.png') }}" alt="QRIS">
                                Scan QRIS
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="rsvp">
                <div data-aos="fade-down">
                    <x-custom-heading title="RSVP" />
                </div>

                <div class="rsvp-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <img class="accent-top-left" src="{{ asset('assets/images/sakura-garnish.png') }}"
                        alt="Aksen Atas Kanan">
                    <div class="rsvp-box">
                        <img class="accent-bottom" src="{{ asset('assets/images/accent-bottom.png') }}"
                            alt="Aksen Bawah">
                        <form action="/send-email">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_pengirim" class="form-label text-white">Nama Pengirim</label>
                                <input type="text" name="nama_pengirim" class="form-control" id="nama_pengirim"
                                    placeholder="Masukkan nama Anda" value="{{ old('nama_pengirim') }}">
                            </div>
                            <div class="mb-3">
                                <label for="email_pengirim" class="form-label text-white">Email Pengirim</label>
                                <input type="email" class="form-control" name="email_pengirim" id="email_pengirim"
                                    placeholder="Masukkan email Anda" value="{{ old('email_pengirim') }}">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label text-white">Pesan</label>
                                <textarea class="form-control" name="pesan" placeholder="Tinggalkan pesan disini..." id="floatingTextarea"
                                    cols="30" rows="5">{{ old('pesan') }}</textarea>
                            </div>
                            <button type="submit" class="btn-rsvp">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p>Created with <img src="{{ asset('assets/images/heart.svg') }}" alt=""> by <a target="_blank"
                    href="https://github.com/tamathecxder">tamathecxder</a> | Copyright &copy; 2023</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ asset('assets/vendors/img-lightbox/js/img-lightbox.js') }}"></script>

    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}")
        </script>
    @elseif (Session::has('error'))
        <script>
            toastr.error("{{ Session::get('error') }}")
        </script>
    @endif

    <script>
        imgLightbox("img-lightbox-link");
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
