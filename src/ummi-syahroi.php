<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wedding of Ummi & Syahroi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- Primary Meta Tags -->
    <meta name="title" content="The Wedding of Ummi & Syahroi">
    <meta name="description" content="Minggu, 04 Januari 2026">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://nicecreative.site/ummi-syahroi.php">
    <meta property="og:title" content="The Wedding of Ummi & Syahroi">
    <meta property="og:description" content="Minggu, 04 Januari 2026">
    <meta property="og:image" content="https://nicecreative.site/image/roy/cv.png">
    <meta property="og:image:secure_url" content="https://nicecreative.site/image/roy/cv.png">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://nicecreative.site/ummi-syahroi.php">
    <meta name="twitter:title" content="The Wedding of Ummi & Syahroi">
    <meta name="twitter:description" content="Minggu, 04 Januari 2026">
    <meta name="twitter:image" content="https://nicecreative.site/image/roy/cv.png">



    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            /* Supaya scroll di mainContent */
        }

        #mainContent {
            height: 100vh;
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
            background: url('image/bgbng.jpg') no-repeat center center;
            background-size: cover;
            /* background full layar */
            background-attachment: fixed;
            /* bg tetap saat scroll */
        }

        .section {
            min-height: 100vh;
            scroll-snap-align: start;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.0);
            /* transparan agar bg tetap terlihat */
        }

        /* optional: efek sedikit gelap supaya konten terbaca */
        .section-content {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            max-width: 400px;
            text-align: center;
        }

        #navbar a.active {
            background-color: #4e2d2b;
            border-radius: 50px;
        }

        #mainContent {
            height: 100vh;
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
        }
    </style>
</head>

<body style="margin:0; padding:0; font-family:Arial,sans-serif; overflow-x:hidden;">

    <!-- Cover Intro -->
    <div id="cover"
        style="position:fixed; top:0; left:0; width:100%; height:100vh; background:url('image/khoiris/bgbng.jpg') no-repeat center center/cover; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; z-index:9999; transition:all 1s ease-in-out;">
        <img src="image/roy/uslogo.png" alt="Deskripsi gambar" width="300" height="280">
        <h1 style="font-size:25px; margin-bottom:50px; font-family:'Playfair Display', serif; color:#000;">
            Ummi & Syahroi
        </h1>

        <p class='fs-7 mb-1'>Kepada Yth <br> Bapak/Ibu/Saudara/i :</p>
        <p class='fs-6 fw-bold'>Mas Hamzah DEMA</p>
        <button id="openInvitation"
            style="background-color:#7a4b44; border:none; padding:10px 25px; border-radius:30px; color:white; font-size:14px; margin-top:15px; cursor:pointer;">
            <i class="fas fa-envelope-open-text"></i> Buka Undangan
        </button>
    </div>


    <!-- Main Content (default hidden di belakang cover) -->
    <div id="mainContent" style="opacity:0; transition:opacity 1s ease-in-out;">

        <!-- Section Welcome -->
        <section id="welcome" class="section" style="background:url('image/roy/roi5.png') no-repeat center center; 
         background-size:cover; 
         position:relative; 
         display:flex; 
         flex-direction:column; 
         justify-content:center; 
         align-items:center; 
         text-align:center; 
         min-height:100vh; 
         width:100%; 
         height:100vh; 
         overflow:hidden;">

            <!-- Animasi bunga atas -->
            <img src="image/khoiris/bgbunga1.png" alt="Bunga Atass" style="position:absolute; top:-100px; left:50%; transform:translateX(-50%); width:100%; opacity:1;
           animation:gerakBungaAtass 3s ease-in-out infinite alternate;">
            <!-- Definisi keyframes -->
            <style>
                @keyframes gerakBungaAtass {
                    0% {
                        top: -80px;
                    }

                    100% {
                        top: -50px;
                    }
                }
            </style>

            <!-- Animasi bunga bawah -->
            <img src="image/khoiris/an1.png" alt="Bunga Bawah" style="position:absolute; bottom:60px; left:50%; transform:translateX(-50%); width:100%; opacity:1;
         animation:gerakBungaBawah 3s ease-in-out infinite alternate;">

            <style>
                @keyframes gerakBungaBawah {
                    0% {
                        bottom: 60px;
                    }

                    100% {
                        bottom: 100px;
                    }
                }
            </style>

        </section>

        <!-- Section Home -->
        <section id="home" class="section" style="background:url('image/bgwtr.png') no-repeat center center; 
         background-size:cover; 
         position:relative; 
         display:flex; 
         flex-direction:column; 
         justify-content:center; 
         align-items:center; 
         text-align:center; 
         min-height:100vh; 
         width:100%; 
         height:100vh; 
         overflow:hidden;">



            <!-- Animasi bunga bawah -->
            <img src="image/khoiris/bng2.png" alt="Bunga" style="position:absolute; top:-120px; left:50%; transform:translateX(-50%); width:1000px; opacity:1;
         animation:gerakBungaKananKiri 3s ease-in-out infinite alternate;">

            <style>
                @keyframes gerakBungaKananKiri {
                    0% {
                        transform: translateX(-50%) translateX(-30px);
                    }

                    100% {
                        transform: translateX(-50%) translateX(30px);
                    }
                }
            </style>


            <!-- Animasi bunga bawah -->
            <img src="image/khoiris/bng1.png" alt="Bunga" style="position:absolute; bottom:30px; left:50%; transform:translateX(-50%); width:1000px; opacity:1;
         animation:gerakBungaKananKiri 3s ease-in-out infinite alternate;">

            <style>
                @keyframes gerakBungaKananKiri {
                    0% {
                        transform: translateX(-50%) translateX(-30px);
                    }

                    100% {
                        transform: translateX(-50%) translateX(30px);
                    }
                }
            </style>


            <div class="p-4 text-center">

                <img class="gn mb-4" src="image/khoiris/gn1.png" alt="Bismillah Icon"
                    style="width:60px; opacity:0; transform:translateY(30px); transition:all 1s ease-in-out 0.9s;">

                <p class="fs-7 fst-italic"
                    style="font-size:12px; opacity:0; transform:translateY(30px); transition:all 1s ease-in-out 0.9s;">
                    Bismillahirrahmanirrahim
                </p>

                <p class="fw-semibold"
                    style="font-size:14px; opacity:0; transform:translateY(30px); color:#7a4b44; transition:all 1s ease-in-out 0.9s;">
                    "Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia menciptakan pasangan-pasangan untukmu dari
                    (jenis) dirimu sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta
                    dan kasih sayang."
                </p>

                <p style="font-size:12px; opacity:0; transform:translateY(30px); transition:all 1s ease-in-out 0.9s;">
                    (QS. Ar-Rum :21)
                </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>

        </section>



        <!-- Section Couple -->
        <section id="couple" class="section" style="background:url('image/bgwtr.png') no-repeat center center; 
         background-size:cover; 
         position:relative; 
         display:flex;">

            <!-- Animasi bunga atas -->
            <img src="image/khoiris/bgbunga1.png" alt="Bunga Atass" style="position:absolute; top:-100px; left:50%; transform:translateX(-50%); width:100%; opacity:1;
           animation:gerakBungaAtass 3s ease-in-out infinite alternate;">
            <!-- Definisi keyframes -->
            <style>
                @keyframes gerakBungaAtass {
                    0% {
                        top: -60px;
                    }

                    100% {
                        top: -30px;
                    }
                }
            </style>

            <!-- Animasi bunga bawah -->
            <!--<img src="image/khoiris/bgbunga2.png" alt="Bunga Bawah" -->
            <!--  style="position:absolute; bottom:60px; left:50%; transform:translateX(-50%); width:100%; opacity:1;-->
            <!--         animation:gerakBungaBawah 3s ease-in-out infinite alternate;">-->

            <!--<style>-->
            <!--  @keyframes gerakBungaBawah {-->
            <!--    0%   { bottom:60px; }-->
            <!--    100% { bottom:100px; }-->
            <!--  }-->
            <!--</style>-->


            <!-- Animasi bunga bawah -->
            <img src="image/khoiris/an1.png" alt="Bunga Bawah" style="position:absolute; bottom:60px; left:50%; transform:translateX(-50%); width:100%; opacity:1;
         animation:gerakBungaBawah 3s ease-in-out infinite alternate;">

            <style>
                @keyframes gerakBungaBawah {
                    0% {
                        bottom: 60px;
                    }

                    100% {
                        bottom: 100px;
                    }
                }
            </style>



            <div class="d-flex flex-wrap justify-content-center align-items-center"
                style="gap:40px; position:relative; z-index:2; margin-bottom:100px;"> <!-- naikkan konten ke atas -->
                <div class="container my-4">
                    <div class="row justify-content-center align-items-center g-3">
                        <!-- Wanita -->
                        <div class="col-md-5 d-flex align-items-center">
                            <div style="max-width:200px; margin-right:15px;">
                                <img src="image/roy/umi.png" alt="Ummi" style="width:150px; height:150px; border-radius:10px;
             box-shadow:0 5px 15px rgba(0,0,0,0.2); border:4px solid #fff;">
                            </div>
                            <div>
                                <h3 class="fw-semibold"
                                    style="font-size:17px; color:#7a4b44; font-family:'Playfair Display', serif;">Ummi
                                    Nurul <br> Fadhilah, S.H.</h3>
                                <p style="font-size:14px;">Putri Pertama dari Bapak Miswanto & Ibu Sumiyati <br>
                                    (Magetan, Jawa Timur)</p>
                                <p style="font-size:12px;">
                                    <a href="https://www.instagram.com/nf_fadhilah/?igsh=cGlrMDRudnV1eDRj#"
                                        target="_blank" style="
      text-decoration: none; 
      color: #7a4b44; /* Warna teks diubah jadi coklat */
      font-weight: bold;
      
      /* Style Button Transparan */
      display: inline-block;
      background-color: rgba(255, 255, 255, 0.5); /* Putih Transparan */
      border: 1px solid rgba(255, 255, 255, 0.8);
      padding: 6px 18px;
      border-radius: 50px;
      backdrop-filter: blur(4px);
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      margin-top: 10px; /* Jarak sedikit dari elemen atasnya */
   ">
                                        <i class="fa-brands fa-instagram" style="margin-right: 5px;"></i>
                                        @nf_fadhilah
                                    </a>
                                </p>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <!-- Pria -->
                        <div class="mt-3 col-md-5 d-flex align-items-center flex-row-reverse">
                            <div style="max-width:200px; margin-left:15px;">
                                <img src="image/roy/roi.png" alt="Cholis" style="width:150px; height:150px; border-radius:10px;
             box-shadow:0 5px 15px rgba(0,0,0,0.2); border:4px solid #fff;">
                            </div>
                            <div class="text-end">
                                <h3 class="fw-semibold"
                                    style="font-size:17px; color:#7a4b44; font-family:'Playfair Display', serif;">
                                    Mohamad <br> Ridwan Syahroi, S.Sos.
                                </h3>
                                <p style="font-size:14px;">
                                    Putra Pertama dari Bapak Jayin & Ibu Siti Sungatmi <br> (Blora, Jawa Tengah)
                                </p>
                                <p style="font-size:12px;">
                                    <a href="https://www.instagram.com/mr_syahroi?igsh=MW81YXo3M3M0Z2UxdQ=="
                                        target="_blank" style="
      text-decoration: none; 
      color: #7a4b44; /* Warna teks diubah jadi coklat */
      font-weight: bold;
      
      /* Style Button Transparan */
      display: inline-block;
      background-color: rgba(255, 255, 255, 0.5); /* Putih Transparan */
      border: 1px solid rgba(255, 255, 255, 0.8);
      padding: 6px 18px;
      border-radius: 50px;
      backdrop-filter: blur(4px);
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      margin-top: 10px; /* Jarak sedikit dari elemen atasnya */
   ">
                                        <i class="fa-brands fa-instagram" style="margin-right: 5px;"></i>
                                        @mr_syahroi
                                    </a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>





        <!-- Section Event -->
        <section id="event" class="section"
            style="display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; padding:40px 20px; min-height:100vh; position:relative;">


            <div style="margin-bottom:200px;"> <!-- Naikkan konten agar tidak tertutupi navbar -->
                <!-- Akad Nikah -->
                <div
                    style="background:#fff; border:2px solid #7a4b44; border-radius:10px; padding:20px; margin:20px auto; max-width:350px; box-shadow:0 5px 15px rgba(0,0,0,0.1);">
                    <h1 class="fw-semibold"
                        style="font-size:22px; margin-top:15px; color:#7a4b44; font-family:'Pacifico', cursive;">Akad
                        Nikah</h1>
                    <p class="fs-7 fw-semibold" style="line-height:1.2; margin:0;">Minggu, 04 Januari 2026</p>
                    <p class="mb-2" style="line-height:1.2; margin:0;">Pukul 07.00 WIB</p>
                    <p style="font-size:14px; line-height:1.2; margin:0;">Kediaman Mempelai Wanita
                    </p>

                    <br>

                    <h1 class="fw-semibold"
                        style="font-size:22px; margin-top:15px; color:#7a4b44; font-family:'Pacifico', cursive;">Resepsi
                    </h1>
                    <p class="fs-7 fw-semibold" style="line-height:1.2; margin:0;">Minggu, 04 Januari 2026</p>
                    <p class="mb-2" style="line-height:1.2; margin:0;">Pukul 09.00 WIB</p>
                    <p style="font-size:14px; line-height:1.2; margin:0;">Kediaman Mempelai Wanita (Teguhan 01/01,
                        Sidokerto, Kec. Sidorejo, Kab. Magetan)

                    <div class="mt-2 mb-2">
                        <!-- Tombol Buka Maps -->
                        <a href="https://goo.gl/maps/PYvoSARnSFJcJdGE9?g_st=ac" target="_blank"
                            class="btn btn-sm d-inline-flex align-items-center"
                            style="background-color:#7a4b44; color:white; font-weight:600; border-radius:6px; padding:6px 12px; margin-top:8px;">
                            <i class="bi bi-geo-alt-fill me-1"></i> Buka Maps
                        </a>
                    </div>

                    <hr>

                    <h1 class="fw-semibold"
                        style="font-size:22px; margin-top:15px; color:#7a4b44; font-family:'Pacifico', cursive;">Ngunduh
                        Mantu</h1>
                    <p class="fs-7 fw-semibold" style="line-height:1.2; margin:0;">Kamis, 08 Januari 2026</p>
                    <p class="mb-2" style="line-height:1.2; margin:0;">Pukul 10.00 WIB</p>
                    <p style="font-size:14px; line-height:1.2; margin:0;">Kediaman Mempelai Pria
                    </p>

                    <div class="mt-2 mb-2">
                        <!-- Tombol Buka Maps -->
                        <a href="https://goo.gl/maps/4LhAKSuKaodk8AVcA?g_st=ac" target="_blank"
                            class="btn btn-sm d-inline-flex align-items-center"
                            style="background-color:#7a4b44; color:white; font-weight:600; border-radius:6px; padding:6px 12px; margin-top:8px;">
                            <i class="bi bi-geo-alt-fill me-1"></i> Buka Maps
                        </a>
                    </div>

                </div>

                <!-- Countdown -->
                <h3 class="fw-semibold" style="margin-top:10px; color:#7a4b44; font-size:16px;">Hitung Mundur Menuju
                    Acara</h3>
                <div class="mb-0" id="countdown"
                    style="display:flex; justify-content:center; gap:15px; margin-top:20px; flex-wrap:wrap;">
                    <div
                        style="background:#fff0d8ff; padding:15px; border-radius:10px; min-width:70px;  box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                        <h3 class="fw-semibold" id="days" style="margin:0; font-size:22px; color:#7a4b44;">0</h3>
                        <p style="margin:0; font-size:14px;">Hari</p>
                    </div>
                    <div
                        style="background:#fff0d8ff; padding:15px; border-radius:10px; min-width:70px;  box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                        <h3 class="fw-semibold" id="hours" style="margin:0; font-size:22px; color:#7a4b44;">0</h3>
                        <p style="margin:0; font-size:14px;">Jam</p>
                    </div>
                    <div
                        style="background:#fff0d8ff; padding:15px; border-radius:10px; min-width:70px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                        <h3 class="fw-semibold" id="minutes" style="margin:0; font-size:22px; color:#7a4b44;">0</h3>
                        <p style="margin:0; font-size:14px;">Menit</p>
                    </div>
                    <div
                        style="background:#fff0d8ff; padding:15px; border-radius:10px; min-width:70px;  box-shadow:0 2px 5px rgba(0,0,0,0.1);">
                        <h3 class="fw-semibold" id="seconds" style="margin:0; font-size:22px; color:#7a4b44;">0</h3>
                        <p style="margin:0; font-size:14px;">Detik</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section RSVP -->
        <section id="rsvp" class="section"
            style="display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; padding:40px 20px; min-height:100vh; position:relative;">

            <!-- Konten RSVP -->
            <div class="container position-relative" style="z-index:2; max-width:600px; margin-bottom:150px;">
                <div style="background:#ffffff;  border:2px solid #7a4b44; border-radius:10px; padding:1.5rem; color:white;">

                    <h5 class=" text-dark display-5 mb-0" style="font-family:'Castoro Titling', serif; font-size:1.5rem">
                        <span style="font-family:'Pinyon Script', cursive; font-size:2.5rem;">R</span>SVP
                        <span style="font-family:'Cinzel', serif; font-size:1.5rem;">&amp;</span>
                        <span style="font-family:'Pinyon Script', cursive; font-size:2.5rem;">W</span>ISHES
                    </h5>

                    <!-- Form RSVP -->
                    <form id="rsvpForm" method="POST" onsubmit="return submitWish(event)">
                        <div class="mb-2">
                            <input type="text" class="form-control form-control-sm" placeholder="Nama" name="nama" required="" style="background:transparent; color:dark; border:1px solid dark;">
                        </div>
                        <div class="mb-2">
                            <select class="form-select form-select-sm" name="kehadiran" required="" style="background:transparent; color:dark; border:1px solid dark;">
                                <option value="" disabled="" selected="" style="color:#ccc;">Konfirmasi Kehadiran</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <textarea class="form-control form-control-sm" name="ucapan" rows="3" placeholder="Ucapan &amp; Doa" style="background:transparent; color:dark; border:1px solid dark;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm text-dark border-dark d-inline-flex align-items-center gap-1 px-3 py-1" style="background-color:transparent; font-size:0.8rem;">
                            Kirim <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>

                    <!-- List ucapan -->
                    <ul id="wishesList" class="list-group text-dark mt-4 text-start" aria-live="polite" aria-relevant="additions" role="log" style="font-size:0.85rem; max-height:220px; overflow-y:auto; padding-left:0; list-style:none;"><li style="margin-bottom:10px;"><strong>Nanda Violita</strong> : Congratulations ummiii dan suami ✨✨ wish nya (pasti) sakinah mawaddah warahmah yaaa
Senantiasa diberi kebahagiaan, keberkahan dan kelancaran dalam menjalani kehidupan dan peran barunya. 
Dan maaf bgt aku blm bisa hadir di hari bahagia kalian🙏 happy wedding ya</li><li style="margin-bottom:10px;"><strong>Muthi</strong> : Selamat ya umii, semoga menjadi keluarga yg sakinah mawaddah warahmah🌼🫶🏻 maaf yaa belum bisa datang, karena sedang ada acara🙏🏻</li><li style="margin-bottom:10px;"><strong>Fina</strong> : Selamat atas pernikahannya umii, maaf kan aku yang gak bisa datang karna satu dan lain hal.
selamat menempuh hidup baru,, semoga menjadi keluarga yang sakinah mawaddah warahmah. </li><li style="margin-bottom:10px;"><strong>Fian Mufidati</strong> : -</li><li style="margin-bottom:10px;"><strong>Sofia</strong> : بَارَكَ اللَّهُ لَكَ وَبَارَكَ عَلَيْكَ وَجَمَعَ بَيْنَكُمَا فِي خَيْرٍ 🤲🏻
Semoga menjadi keluarga yang sakinah mawaddah warahmah serta di karunia keturunan yang sholeh dan sholehah ✨ Ummi &amp; Suami ✨</li><li style="margin-bottom:10px;"><strong>rayaaa</strong> : maafff gabisaaa hadirr lagi ada event jugaa semogaa menjadi keluarga sakinah mawadah warahmah langgeng sampee jannahnyaa sehatt selalu keduanyaa dilancarkan dari persiapan sampee hari H</li><li style="margin-bottom:10px;"><strong>Naziiii</strong> : Mass roiii slamattt gaee anak seng akeh jare meh tok pondoke podo bapake okeee intine slamat ge koe yo mass ngapuro iso doake tok hehe</li><li style="margin-bottom:10px;"><strong>Habib zubet </strong> ✅: Samawa mas royyy berkah dan barokah </li><li style="margin-bottom:10px;"><strong>darwisy</strong> ✅: selamat mas royyyyyyyy semoga sakinah mawadah wa rohmah di keki keturunan seng okeh yo mas😄 lancar " sampek hari H mass kuhhh</li><li style="margin-bottom:10px;"><strong>Raisa</strong> : Waaaah congratulations mas , semoga menjadi keluarga yang sakinah mawadah dan warahmah . Aamiin 🤲🏻🤲🏻</li><li style="margin-bottom:10px;"><strong>Migor </strong> : masyaallah umi........ 
semoga lancar sampai hari H dan menjadi keluarga yang sakinah mawaddah warohmah. </li><li style="margin-bottom:10px;"><strong>Nidha </strong> : Selamattt ummi dan pasangan, semoga lancar sampai hari H nyaa, semoga sakinah mawadah warahmah aamiin..🤲🏻☺️🌹✨</li><li style="margin-bottom:10px;"><strong>Bunga</strong> ✅: Omo omo omo, akhirnya, selamat mbk umiiiiii, lancar sampai hari H yaaaa. </li><li style="margin-bottom:10px;"><strong>Arum &amp; Partner </strong> : MaasyaaAllah.. akhirnyaaa selamat umi sayang 💕 lancar² sampai hari H nya yaaa 💗</li><li style="margin-bottom:10px;"><strong>Pao2 </strong> ✅: MaasyaaAllah tabarakallah laa hawlaa wa laa quwwata illa billah, alhamdulillah akhirnya di tahap ini yah mi, setelah sekian panjang perjuangan mempersiapkannya, semoga Allah permudah selalu jalannya sampai hari-H acara, Allah ridhoi dan karuniai selalu, langgeng dunia akhirat yah sayang kuu 🤲🏻🥰💕 </li><li style="margin-bottom:10px;"><strong>Murti Diah</strong> ✅: Maa sya Allah... baarakallah.. sakinah mawaddah wa rahmah yaaa ummi dan calon... ❤️❤️❤️</li><li style="margin-bottom:10px;"><strong>Antika</strong> : Masya allah semoga menjadi keluarga yang samawa ya ummi 
Semoga langgeng terus sama mas nya 
Semoga lancar sampai hari H ya 
Maaf aku blm bisa hadir di hari bahagia kamu mu tapi doa ku selalu menyertaimu 🥰😍</li><li style="margin-bottom:10px;"><strong>Puput </strong> : Masya Allah pokonya Sakinah Mawaddah Warohmah ya umengku sayangggg ❤️😭🫶🏻</li><li style="margin-bottom:10px;"><strong>Atika</strong> ✅: Wiii MasyaAllah lancar sampai hari H ya mbak umikk😍</li><li style="margin-bottom:10px;"><strong>Karisma</strong> ✅: Masyaallaahhh bestie kuhhhh,,,🥹
Ga bisa berkata2 poko nya ur both harus bahagia n Samawa till jannahnya Allah yaaa,,,,,,
Jalani krikil, jalani gelombangnya, jalani susah senengnya n jalani semuanya bareng2 yaaa🥹🤗
</li></ul>
                </div>
            </div>
        </section>


        <!-- Section Quotes -->
        <!--        <section id="story" class="section"-->
        <!--            style="position:relative; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; padding:40px 20px; min-height:100vh;">-->

        <!--            <div class="p-4 section-content" style="margin-bottom:100px; max-width:600px; text-align:center;">-->
        <!--                <br>-->
        <!--                <br>-->
        <!--                <h1 class="fw-semibold" style="font-size:35px; margin-top:15px; color:#7a4b44; font-family:'Pacifico', cursive;">Our Story</h1>-->
        <!--                <br>-->
        <!--                <p style="font-size:16px; line-height:1.6; color:#333; margin-bottom:15px;">-->
        <!--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>-->
        <!--                <p style="font-size:16px; line-height:1.6; color:#333; margin-bottom:15px;">-->
        <!--                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.          -->
        <!--                </p>-->
        <!--                <p style="font-size:16px; line-height:1.6; color:#333; margin-bottom:15px;">-->
        <!--                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. -->
        <!--                <br>-->
        <!--                <br>-->
        <!--            </div>-->

        <!-- Animasi bunga bawah -->
        <!--            <img src="image/khoiris/an1.png" alt="Bunga Bawah"-->
        <!--                style="position:absolute; bottom:90px; left:50%; transform:translateX(-50%); width:100%; opacity:1;-->
        <!--           animation:gerakBungaBawahh 3s ease-in-out infinite alternate;">-->

        <!--        </section>-->

        <style>
            @keyframes gerakBungaBawahh {
                0% {
                    transform: translateX(-50%) translateY(0);
                }

                100% {
                    transform: translateX(-50%) translateY(-20px);
                }
            }
        </style>



        <!-- Section Gallery -->
        <section id="gallery" class="section"
            style="display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; padding:40px 20px; min-height:100vh;">

            <div class="p-4 section-content" style="max-width:800px; width:100%; text-align:center;">
                <h1 class="fw-semibold mb-4" style="font-size:35px; color:#7a4b44; font-family:'Pacifico', cursive;">Our
                    Gallery</h1>

                <div class="gallery-grid">
                    <div class="gallery-item"><img src="image/roy/01.png" alt="Gallery 1"></div>
                    <div class="gallery-item"><img src="image/roy/02.png" alt="Gallery 2"></div>
                    <div class="gallery-item"><img src="image/roy/03.png" alt="Gallery 3"></div>
                    <div class="gallery-item"><img src="image/roy/04.png" alt="Gallery 4"></div>
                    <div class="gallery-item"><img src="image/roy/05.png" alt="Gallery 5"></div>
                    <div class="gallery-item"><img src="image/roy/06.png" alt="Gallery 6"></div>
                </div>
            </div>
        </section>

        <style>
            .gallery-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                /* selalu 2 kolom */
                gap: 15px;
            }

            .gallery-item {
                position: relative;
                width: 100%;
                aspect-ratio: 3 / 5;
                /* Rasio 3:4 (portrait) */
                overflow: hidden;
                border-radius: 10px;
            }

            .gallery-item img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform .4s ease;
            }

            .gallery-item:hover img {
                transform: scale(1.05);
            }
        </style>


        <!-- Bagian 7: Wedding Gift Section -->
        <section id="gift" class="section" style="background-size: cover; 
           background-position: center; 
           background-repeat: no-repeat; 
           min-height: 100vh; padding: 80px 15px;">


            <!-- Content -->
            <div class="container position-relative" style="z-index: 2; max-width: 600px;">
                <div class="p-4 rounded" style="background: #ffffff; 
                    color: white;">

                    <!-- Judul -->
                    <h5 class="text-center display-5 mb-3"
                        style="font-family: 'Castoro Titling', serif; font-size: 1.5rem; color:#7a4b44;">
                        <span
                            style="font-family: 'Pinyon Script', cursive; font-size: 2.5rem; color:#7a4b44;">W</span>EDDING
                        <span
                            style="font-family: 'Pinyon Script', cursive; font-size: 2.5rem; color:#7a4b44;">G</span>IFT
                    </h5>

                    <!-- Paragraf -->
                    <p class="text-dark text-center mb-3"
                        style="font-size: 0.9rem; font-family: 'Open Sans', sans-serif;">
                        Doa dan restu kalian adalah hadiah paling berarti bagi kami. Namun bila rekan semua berkenan
                        untuk memberikan tanda kasih, berikut kami sampaikan informasinya.
                    </p>

                    <!-- Tombol-tombol -->
                    <div class="text-dark d-flex justify-content-center flex-wrap gap-2 mb-3">
                        <!-- Tombol Rekening -->
                        <button onclick="document.getElementById('rekening-info').style.display='block'"
                            class="btn btn-sm text-dark border-dark d-inline-flex align-items-center gap-1 px-3 py-1"
                            style="background-color: transparent; font-size: 0.8rem;">
                            <i class="bi bi-gift"></i> Klik Disini
                        </button>

                        <!-- Tombol WA -->
                        <a href="https://wa.me/6285729889029?text=Halo%2C+saya+ingin+konfirmasi+pengiriman+hadiah+pernikahan+untuk+Ummi+%26+Syahroi."
                            target="_blank"
                            class="btn btn-sm text-dark border-dark  d-inline-flex align-items-center gap-1 px-3 py-1"
                            style="background-color: transparent; font-size: 0.8rem;">
                            <i class="bi bi-whatsapp"></i> Konfirmasi
                        </a>
                    </div>

                    <!-- Info Rekening -->
                    <div id="rekening-info" style="display: none;">
                        <div class="text-white p-3 rounded-3" style="background: rgba(0,0,0,0.4);">

                            <!-- BRI -->
                            <div class="border border-light rounded p-2 mb-3 position-relative">
                                <p class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                    <i class="bi bi-bank2 me-1"></i> BSI - <span class="text-white" id="bsi">7140362004
                                    </span>
                                    <button onclick="copyToClipboard('bsi')"
                                        class="btn btn-sm text-white position-absolute end-0 top-0 mt-1 me-2"
                                        style="background: transparent;">
                                        <i class="bi bi-clipboard"></i>
                                    </button>
                                </p>
                                <p class="mb-0" style="font-size: 0.85rem;">a.n. Mohamad Ridwan Syahroi</p>
                            </div>

                            <!-- BRI -->
                            <div class="border border-light rounded p-2 mb-3 position-relative">
                                <p class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                    <i class="bi bi-bank2 me-1"></i> Seabank - <span class="text-white"
                                        id="seabank">901053859786</span>
                                    <button onclick="copyToClipboard('seabank')"
                                        class="btn btn-sm text-white position-absolute end-0 top-0 mt-1 me-2"
                                        style="background: transparent;">
                                        <i class="bi bi-clipboard"></i>
                                    </button>
                                </p>
                                <p class="mb-0" style="font-size: 0.85rem;">a.n. Ummi Nurul Fadhilah</p>
                            </div>



                            <!--Alamat Kirim Kado -->
                            <div class="border border-light rounded p-2 mb-2">
                                <p class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                    <i class="bi bi-gift me-1"></i>Kado
                                </p>
                                <p class="mb-0" style="font-size: 0.85rem;">
                                    <span class="fw-semibold">Nama Penerima : Ummi Nurul Fadhilah</span> <br> Teguhan
                                    01/01, Sidokerto, Kec. Sidorejo, Kab. Magetan
                                    <br>
                                    <i class="bi bi-whatsapp me-1"></i> 085729889029
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>




        <section id="thanks" class="section"
            style="display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center; padding:20px 20px 150px 20px; min-height:100vh;">
            <div class="p-4 section-content" style="max-width:600px; text-align:center; background:none; padding:0;">
                <h2 style="
                    font-family: 'Pacifico', cursive; 
                    font-size: 40px; 
                    color: #7a4b44; 
                    margin-bottom: 30px;
                    
                    /* PEMAKSAAN STYLE KOTAK */
                    display: inline-block !important;
                    background-color: rgba(255, 255, 255, 0.8) !important; /* Putih 80% */
                    padding: 10px 40px !important;
                    border-radius: 50px !important;
                    border: 2px solid #7a4b44 !important; /* Garis tepi coklat */
                    box-shadow: 0 5px 15px rgba(0,0,0,0.2) !important; /* Bayangan */
                ">
                    Terima Kasih
                </h2>

                <img src="image/roy/09.jpg" alt="Foto Mempelai"
                    style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; border: 5px solid #ffffff; margin-bottom: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">

                <p style="font-size:16px; line-height:1.6; color:#333; margin-bottom:20px;">
                    Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir
                    dan memberikan do'a restu kepada kedua mempelai.
                </p>

                <p style="font-weight:bold; font-size:16px; color:#7a4b44; margin-bottom:10px;">Hormat Kami Yang
                    Mengundang</p>
                <h2 style="font-family:'Pacifico', cursive; font-size:40px; color:#7a4b44; margin-bottom:20px;">Ummi &
                    Syahroi</h2>

                <div style="border-radius:10px; padding:15px; margin-top:5px; background:none;">
                    <p style="margin:0; color:#7a4b44;">Created & Develope By: <a class="text-dark"
                            href="https://instagram.com/bambang.suko/"><span
                                style="font-weight:bold;">@bambang.suko</span></a></p>
                </div>
            </div>
        </section>


    </div>

    <!-- Navbar -->
    <div id="navbar"
        style="display:none; justify-content:space-around; background-color:#7a4b44; position:fixed; bottom:0; width:100%; padding:10px 0; z-index:100;">
        <a href="#couple"
            style="text-decoration:none; color:#fff; font-size:10px; text-align:center; flex:1; border-radius:50px;"><i
                class="fas fa-heart" style="font-size:20px; display:block;"></i>Mempelai</a>
        <a href="#event"
            style="text-decoration:none; color:#fff; font-size:10px; text-align:center; flex:1; border-radius:50px;"><i
                class="fas fa-calendar-alt" style="font-size:20px; display:block;"></i>Acara</a>
        <a href="#rsvp"
            style="text-decoration:none; color:#fff; font-size:10px; text-align:center; flex:1; border-radius:50px;"><i
                class="fas fa-check-circle" style="font-size:20px; display:block;"></i>RSVP</a>
        <a href="#gallery"
            style="text-decoration:none; color:#fff; font-size:10px; text-align:center; flex:1; border-radius:50px;"><i
                class="fas fa-image" style="font-size:20px; display:block;"></i>Gallery</a>
        <a href="#gift"
            style="text-decoration:none; color:#fff; font-size:10px; text-align:center; flex:1; border-radius:50px;"><i
                class="fa-solid fa-gift" style="font-size:20px; display:block;"></i>Gift</a>

    </div>

    <!-- Audio Music -->
    <audio id="bgMusic" loop>
        <source src="music/musik.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Tombol Play/Pause Music dengan ikon -->
    <button id="musicControl" style="
  position:fixed;
  bottom:70px;
  right:20px;
  background-color:#7a4b44;
  color:white;
  border:none;
  padding:12px 15px;
  border-radius:10px;
  cursor:pointer;
  z-index:10000;
  display:none; /* disembunyikan dulu */
  font-size:18px;
">
        <i class="p-1 fas fa-pause"></i>
    </button>



    <script>
        const cover = document.getElementById('cover');
        const mainContent = document.getElementById('mainContent');
        const openInvitation = document.getElementById('openInvitation');
        const bgMusic = document.getElementById('bgMusic');
        const musicControl = document.getElementById('musicControl');
        const navLinks = document.querySelectorAll('#navbar a');

        function updateNavbarActive() {
            let current = '';
            const sections = mainContent.querySelectorAll('.section');

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (mainContent.scrollTop >= sectionTop - 100 && mainContent.scrollTop < sectionTop + sectionHeight - 100) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
        }

        // Scroll listener untuk navbar
        mainContent.addEventListener('scroll', updateNavbarActive);

        // Smooth scroll navbar
        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const target = mainContent.querySelector(this.getAttribute('href'));
                if (target) {
                    mainContent.scrollTo({
                        top: target.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Buka undangan
        openInvitation.addEventListener('click', () => {
            // fade cover
            cover.style.opacity = '0';
            setTimeout(() => cover.style.display = 'none', 1000);

            // tampilkan mainContent
            mainContent.style.opacity = '1';
            document.getElementById('navbar').style.display = 'flex';

            // scroll ke top dulu
            mainContent.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

            // **Panggil updateNavbarActive setelah scroll**
            setTimeout(updateNavbarActive, 500);

            // play music (catch error jika browser blok auto-play)
            bgMusic.play().catch(() => console.log('Klik tombol musik untuk memulai audio'));

            // tampilkan tombol musik
            musicControl.style.display = 'block';
        });

        // Tombol play/pause
        musicControl.addEventListener('click', () => {
            const icon = musicControl.querySelector('i');
            if (bgMusic.paused) {
                bgMusic.play();
                icon.classList.remove('fa-play');
                icon.classList.add('fa-pause');
            } else {
                bgMusic.pause();
                icon.classList.remove('fa-pause');
                icon.classList.add('fa-play');
            }
        });
    </script>


    <script>
        // Buka undangan
        document.getElementById('openInvitation').addEventListener('click', function () {
            const cover = document.getElementById('cover');
            const main = document.getElementById('mainContent');
            cover.style.opacity = '0';
            cover.style.pointerEvents = 'none';
            setTimeout(() => {
                cover.style.display = 'none';
                main.style.opacity = '1';
            }, 1000);

            // Navbar muncul
            document.getElementById('navbar').style.display = 'flex';

            // Animasi fade-in + slide-up untuk elemen teks
            const elements = main.querySelectorAll('h1,h2,h3,p');
            elements.forEach((el, i) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, i * 300);
            });

            // Animasi khusus untuk img dengan class="gn"
            const gnImages = main.querySelectorAll('img.gn');
            gnImages.forEach((img, i) => {
                setTimeout(() => {
                    img.style.opacity = '1';
                    img.style.transform = 'translateY(0)';
                }, i * 400); // bisa beda delay kalau mau
            });


            const coupleMembers = document.querySelectorAll('.couple-member');
            coupleMembers.forEach((el, i) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, i * 300 + 500);
            });

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

    <script>
        // Navbar active on scroll untuk mainContent
        const mainContent = document.getElementById('mainContent');
        const sections = mainContent.querySelectorAll('.section');
        const navLinks = document.querySelectorAll('#navbar a');

        function updateNavbarActive() {
            let current = '';
            sections.forEach(section => {
                // posisi section relatif ke mainContent
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;

                if (mainContent.scrollTop >= sectionTop - 100 && mainContent.scrollTop < sectionTop + sectionHeight - 100) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').substring(1) === current) {
                    link.classList.add('active');
                }
            });
        }

        // Listener scroll pada mainContent
        mainContent.addEventListener('scroll', updateNavbarActive);

        // Inisialisasi saat halaman pertama kali terbuka
        updateNavbarActive();

        // Smooth scroll navbar
        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const target = mainContent.querySelector(this.getAttribute('href'));
                if (target) {
                    mainContent.scrollTo({
                        top: target.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>




    <script>
        // Countdown Timer
        function startCountdown() {
            const countDownDate = new Date("jan 4, 2026 07:00:00").getTime();

            const x = setInterval(function () {
                const now = new Date().getTime();
                const distance = countDownDate - now;

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                const minutes = Math.floor(
                    (distance % (1000 * 60 * 60)) / (1000 * 60)
                );
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("countdown").innerHTML =
                        "Acara sudah dimulai!";
                }
            }, 1000);
        }
        window.onload = startCountdown;
    </script>


    <!-- Script Modal -->
    <script>
        const openBtn = document.getElementById('openRSVP');
        const modal = document.getElementById('rsvpModal');
        const closeBtn = document.getElementById('closeRSVP');

        openBtn.addEventListener('click', () => {
            modal.style.display = 'flex';
        });

        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) modal.style.display = 'none';
        });
    </script>

    <script>
        // Fungsi untuk submit form via AJAX
        async function submitWish(event) {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);

            try {
                const response = await fetch('ummi-syahroi.php?action=submit', {
                    method: 'POST',
                    body: formData
                });

                if (!response.ok) {
                    const errorData = await response.json();
                    alert('Error: ' + (errorData.error || 'Gagal submit data'));
                    return false;
                }

                const result = await response.json();

                if (result.success) {
                    form.reset();
                    loadWishes(); // Reload list wishes tanpa refresh page
                    alert('Ucapan berhasil dikirim, terima kasih!');
                }
            } catch (err) {
                alert('Terjadi kesalahan saat mengirim data.');
                console.error(err);
            }
            return false;
        }

        // Fungsi untuk load wishes via AJAX dan update list
        async function loadWishes() {
            try {
                const response = await fetch('ummi-syahroi.php?action=get_wishes');
                if (!response.ok) throw new Error('Gagal load wishes');

                const html = await response.text();
                document.getElementById('wishesList').innerHTML = html;
            } catch (err) {
                document.getElementById('wishesList').innerHTML = '<li>Gagal memuat ucapan.</li>';
                console.error(err);
            }
        }

        // Load wishes saat halaman pertama kali dibuka
        document.addEventListener('DOMContentLoaded', () => {
            loadWishes();
        });
    </script>

    <!-- JS for Copy Function -->
    <script>
        function copyToClipboard(id) {
            const el = document.getElementById(id);
            navigator.clipboard.writeText(el.innerText).then(() => {
                el.innerText = el.innerText + ' ✓';
                setTimeout(() => {
                    el.innerText = el.innerText.replace(' ✓', '');
                }, 1500);
            });
        }
    </script>


    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516"
        integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg=="
        data-cf-beacon='{"version":"2024.11.0","token":"862bd68cd5bf485f8fb88dfb4bf52a85","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}'
        crossorigin="anonymous"></script>
</body>

</html>