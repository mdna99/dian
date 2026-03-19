<?php
// --- 1. LOGIKA PENYIMPANAN RSVP (JSON) ---
$file_db = 'ucapan_tamu.json';

if (isset($_GET['action']) && $_GET['action'] == 'kirim') {
    $nama = htmlspecialchars($_POST['nama'] ?? 'Tamu');
    $hadir = htmlspecialchars($_POST['kehadiran'] ?? 'Hadir');
    $pesan = htmlspecialchars($_POST['ucapan'] ?? '');

    $data_baru = [
        "nama" => $nama,
        "hadir" => $hadir,
        "ucapan" => $pesan,
        "waktu" => date('d M Y, H:i')
    ];

    $list = file_exists($file_db) ? json_decode(file_get_contents($file_db), true) : [];
    if (!is_array($list)) {
        $list = [];
    }
    array_unshift($list, $data_baru);
    file_put_contents($file_db, json_encode($list));

    echo json_encode(["status" => "success"]);
    exit;
}
$daftar_ucapan = file_exists($file_db) ? json_decode(file_get_contents($file_db), true) : [];
if (!is_array($daftar_ucapan)) {
    $daftar_ucapan = [];
}

// --- Nama Tamu Undangan dari URL parameter ---
$nama_tamu = isset($_GET['nama']) ? htmlspecialchars(urldecode($_GET['nama'])) : 'Tamu Undangan';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Walimatul 'Urs Elly & Dian Nafi'</title>

    <!-- Open Graph / Social Media Meta (1920x1080 Portrait) -->
    <meta property="og:title" content="Walimatul 'Urs - Elly & Dian Nafi'">
    <meta property="og:description" content="Kami mengundang Bapak/Ibu/Saudara/i untuk hadir di acara pernikahan kami.">
    <meta property="og:image" content="assets/DianEllyDecor-01.jpg">
    <meta property="og:image:width" content="1080">
    <meta property="og:image:height" content="1920">
    <meta property="og:type" content="website">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;600&family=Sacramento&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* --- 2. CSS CUSTOM (Gaya Mocca & Earth Tone) --- */
        :root {
            --mocca-dark: #001840;
            --mocca-light: #102a71;
            --cream: #fefae0;
            --white-trans: rgba(255, 255, 255, 0.85);
        }

        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #3a2a20;
            /* warna frame desktop */
            color: var(--mocca-dark);
        }

        /* Kunci tampilan ke mobile-only */
        #mobile-frame {
            max-width: 430px;
            margin: 0 auto;
            background-color: var(--cream);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
        }

        /* Pastikan semua konten fit di mobile frame */
        @media (min-width: 431px) {
            body {
                display: flex;
                justify-content: center;
                align-items: flex-start;
                min-height: 100vh;
            }
        }

        /* Pastikan semua konten fit di mobile frame */
        @media (max-width: 361px) {
            #mobile-frame {
                max-width: 360px;
            }

            #navbar {
                max-width: 360px;
            }
            #cover {
                max-width: 360px;
            }
        }

        /* Scroll Snapping Container */
        #main-scroll {
            height: 100vh;
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
            scroll-behavior: smooth;
        }

        .section {
            min-height: 100vh;
            width: 100%;
            scroll-snap-align: start;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
            position: relative;
            background-size: cover;
            background-position: center;
        }

        /* Typography */
        .serif {
            font-family: 'Playfair Display', serif;
        }

        .cursive {
            font-family: 'Sacramento', cursive;
            font-size: 3rem;
        }
        .cursive-sm {
            font-family: 'Sacramento', cursive;
            font-size: 1.75rem;
        }

        .text-mocca {
            color: var(--mocca-dark);
        }

        /* Cover Overlay */
        #cover {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 430px;
            height: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('assets/DianEllyDecor-01.jpg') center/cover;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            transition: transform 1s ease-in-out;
        }

        .shadow-custom {
           box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
        }

        /* Card Style */
        .card-custom {
            background: var(--white-trans);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--mocca-light);
            width: 100%;
            max-width: 450px;
        }
        .card-custom-rsvp {
            background: var(--white-trans);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--mocca-light);
            width: 100%;
            max-width: 450px;
            height: 60vh;
            overflow: hidden;
        }
        /* Card Style */
        .card-custom-pill {
            background-image: url('assets/BGall-08.jpg');
            padding: 140px 30px;
            margin-bottom: 40px;
            border: 3px solid var(--mocca-light);
            width: 100%;
            max-width: 450px;
            max-height: 700px;
            overflow: hidden;
        }

        /* Card Style */
        .card-custom-transparent {
            background: transparent;
            margin-top: 7rem;
            padding: 30px;
            width: 100%;
            max-width: 450px;
        }

        /* Countdown */
        .timer-box {
            background: var(--mocca-dark);
            color: white;
            padding: 10px;
            border-radius: 10px;
            min-width: 70px;
            margin: 5px;
        }

        /* Button */
        .btn-mocca {
            background: var(--mocca-dark);
            color: white;
            border-radius: 50px;
            padding: 10px 25px;
            border: none;
        }

        .btn-mocca:hover {
            background: var(--mocca-light);
            color: white;
        }

        /* Navbar Bottom */
        #navbar {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 430px;
            background: white;
            display: none;
            justify-content: space-around;
            padding: 12px 0;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.05);
            z-index: 1000;
        }

        #navbar a {
            color: #999;
            text-decoration: none;
            font-size: 10px;
            text-align: center;
        }

        #navbar a.active {
            color: var(--mocca-dark);
            font-weight: bold;
        }

        #navbar i {
            display: block;
            font-size: 18px;
            margin-bottom: 3px;
        }
        
        /* Custom Spacing - Bootstrap 5 hanya sampai pt-5 */
        .pt-7 {
            padding-top: 7rem !important; /* Sesuaikan nilainya */
        }

        /* Animasi Awan */
        img[alt="AwanF"] {
            animation: gerakAwanF 4s ease-in-out infinite alternate;
        }
        @keyframes gerakAwanF {
            0% { transform: translateX(-8px); }
            100% { transform: translateX(8px); }
        }
        /* Animasi Awan */
        img[alt="Awan"] {
            animation: gerakAwan 4s ease-in-out infinite alternate;
        }
        @keyframes gerakAwan {
            0% { transform: translateY(-8px); }
            100% { transform: translateY(8px); }
        }
        /* Animasi Flower Dekorasi BottomFlower */
        img[alt="Flower Dekorasi BottomFlower"] {
            animation: gerakFlower 3s ease-in-out infinite alternate;
        }
        @keyframes gerakFlower {
            0% { transform: translateY(0px); }
            100% { transform: translateY(10px); }
        }

        /* Animasi CropUP */
        img[alt="Element Dekorasi CropUP"] {
            animation: zoomInOut 3s ease-in-out infinite alternate;
        }
        @keyframes zoomInOut {
            0% { transform: scale(1); }
            100% { transform: scale(1.05); }
        }
        /* Animasi Sayap */
        img[alt="Element Dekorasi Sayap"] {
            transform: translate(-50%, -50%);
            animation: zoomInOutSayap 3s ease-in-out infinite alternate;
        }
        @keyframes zoomInOutSayap {
            0% { transform: translate(-50%, -45%) scale(1); }
            100% { transform: translate(-50%, -50%) scale(1.05); }
        }

        /* Music Control Button */
        #musicControl {
            position: fixed;
            bottom: 70px;
            right: 20px;
            width: 45px;
            height: 45px;
            background-color: var(--mocca-light);
            color: white;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            cursor: pointer;
            z-index: 1001;
            display: none;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            align-items: center;
            justify-content: center;
        }
        #musicControl:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0,0,0,0.4);
        }
        #musicControl:active {
            transform: scale(0.8);
            box-shadow: 0 1px 5px rgba(0,0,0,0.3);
            transition: transform 0.08s ease, box-shadow 0.08s ease;
        }
        #musicControl.btn-pop {
            animation: btnPop 0.4s ease;
        }
        @keyframes btnPop {
            0%   { transform: scale(0.75); }
            50%  { transform: scale(1.15); }
            75%  { transform: scale(0.95); }
            100% { transform: scale(1); }
        }
        #musicControl .ripple-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.6);
            animation: rippleExpand 0.5s ease-out forwards;
            pointer-events: none;
        }
        @keyframes rippleExpand {
            0%   { transform: scale(1); opacity: 1; }
            100% { transform: scale(2); opacity: 0; }
        }
        #musicControl.playing {
            animation: musicPulse 2s ease-in-out infinite;
        }
        @keyframes musicPulse {
            0%, 100% { box-shadow: 0 4px 15px rgba(0,0,0,0.3); }
            50% { box-shadow: 0 4px 20px rgba(0,24,64,0.6); }
        }
        @media (min-width: 431px) {
            #musicControl {
                right: calc(50% - 215px + 20px);
            }
        }
    </style>
</head>

<body>
    <div id="mobile-frame">

        <div id="cover">
            <h5 class="mb-3 text-uppercase" style="letter-spacing: 3px;">Walimatul 'Urs</h5>
            <h1 class="cursive mb-4">Elly & Dian Nafi'</h1>
            <div class="text-center mt-5">
                <p class="small mb-1">Kepada Yth. Bapak/Ibu/Saudara/i:</p>
                <h4 class="mb-4"><?= $nama_tamu ?></h4>
                <button class="btn btn-light rounded-pill px-4" onclick="bukaUndangan()">
                    <i class="fas fa-envelope-open-text me-2"></i> Buka Undangan
                </button>
            </div>
        </div>

        <div id="main-scroll">

            <section id="home" class="section d-flex flex-column overflow-hidden"
                style="background-image: url('assets/BGall-01.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 0;">
                 <!-- Awan kiri -->
                <img src="assets/AwanHome1-11.png" alt="Awan" class="position-absolute" style="left: 0px; top: 13%; width: 90px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome2-14.png" alt="Awan" class="position-absolute" style="left: 0px; top: 25%; width: 172px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome3-13.png" alt="AwanF" class="position-absolute" style="left: 45px; top: 37%; width: 130px; z-index: 2; pointer-events: none;">
                <!-- Awan kanan -->
                <img src="assets/AwanHome4-12.png" alt="AwanF" class="position-absolute" style="right: 0px; top: 15%; width: 100px; z-index: 2; pointer-events: none;">
                <img src="assets/AwanHome5-16.png" alt="Awan" class="position-absolute" style="right: 0px; top: 23%; width: 120px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome6-15.png" alt="AwanF" class="position-absolute" style="right: 28px; top: 36%; width: 90px; z-index: 2; pointer-events: none;">
                <div class="text-center d-flex flex-column justify-content-center align-items-center px-3 pt-5 pb-2 position-relative"
                    style="flex: 2;">
                    <!-- <p class="fst-italic mb-2">Bismillahirrahmanirrahim</p> -->
                    <h2 class="serif position-relative" style="z-index: 1;"><strong>Walimatul Ursy</strong></h2>
                    <div class="position-relative d-inline-block" style="z-index: 1;">
                        <img src="assets/Element-16.png" alt="Element Dekorasi Sayap"
                            class="position-absolute top-50 start-50" style="width: 350px; z-index: 0;">
                        <img src="assets/ED800x800.png" alt="Foto Mempelai" class="img-fluid position-relative"
                            style="max-width: 300px; border-radius: 50%; z-index: 1;">
                    </div>
                    <h1 class="cursive text-mocca position-relative pt-5" style="z-index: 1;"><strong>Elly & Dian Nafi'</strong></h1>
                    <p class="lead fw-bold position-relative" style="z-index: 1;">Sabtu, 11 April 2026</p>
                    <!-- <div class="mt-4 px-3" style="max-width: 500px;">
                        <p class="small">"Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu
                            isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya..."
                            (Ar-Rum: 21)</p>
                    </div> -->
                </div>
                <div class="d-flex justify-content-center align-items-end position-relative" style="flex: 1;">
                    <img src="assets/FlowerUP.png" alt="Flower Dekorasi BottomFlower"
                        class="position-absolute bottom-0 start-0 w-100" style="height: auto; z-index: 99;">
                    <img src="assets/Element-13.png" alt="Element Dekorasi" class="position-relative"
                        style="max-width: 100%; max-height: 100%; object-fit: contain; z-index: 1;">
                </div>
            </section>

            <section id="ayat" class="section" style="background-image: url('assets/BGall-02.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 0;">
                <div class="container text-center">
                    <h2 class="serif text-mocca"><strong><i>Bismillahirrahmanirrahim</i></strong></h2>
                    <p class="small"><br>"Di antara tanda-tanda (kebesaran)-Nya ialah bahwa Dia
                            menciptakan pasangan-pasangan untukmu dari (jenis) dirimu
                            sendiri agar kamu merasa tenteram kepadanya. Dia menjadikan di antaramu rasa cinta dan kasih sayang. Sesungguhnya
                            pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."<br><br>
                        <strong>(QS. Ar-Rum: 21)</strong></p>
                </div>
            </section>
            <section id="couple-wanita" class="section" style="background-image: url('assets/BGall-03.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 0;">
                <img src="assets/Element-11.png" alt="Element Dekorasi CropUP" class="position-absolute top-0 start-0 w-100" style="height: auto; z-index: 99;">
                <!-- Awan kiri -->
                <img src="assets/AwanHome1-11.png" alt="Awan" class="position-absolute" style="left: 0px; top: 42%; width: 90px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome3-13.png" alt="AwanF" class="position-absolute" style="left: 18px; top: 58%; width: 80px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome1-11.png" alt="Awan" class="position-absolute" style="left: 0px; bottom: 6%; width: 80px; z-index: 2; pointer-events: none;">
                <!-- Awan kanan -->
                <img src="assets/AwanHome5-16.png" alt="Awan" class="position-absolute" style="right: 0px; top: 52%; width: 90px; z-index: 0; pointer-events: none;">
                
                <div class="text-center d-flex flex-column justify-content-center align-items-center px-3 pt-7 pb-2 position-relative"
                    style="flex: 2;">
                    <!-- <h2 class="serif text-mocca"><br><strong><i>Bismillahirrahmanirrahim</i></strong></h2> -->
                        <p class="small">Maha suci Allah SWT yang telah menciptakan makhluk-Nya
                        berpasang-pasangan.
                        Tanpa mengurangi rasa hormat, dengan ini kami bermaksud
                        mengundang Bapak/Ibu/Saudara/i untuk hadir pada acara
                        pernikahan kami:</p>
                    <div class="position-relative d-inline-block" style="z-index: 1;">
                        <img src="assets/Element-16.png" alt="Element Dekorasi Sayap"
                            class="position-absolute top-50 start-50" style="width: 350px; z-index: 0;">
                        <img src="assets/Potrait-03.png" alt="Foto Mempelai" class="img-fluid shadow-custom position-relative rounded-pill" width="160" height="200"
                            style="object-fit:cover; border: 3px solid var(--mocca-light); z-index: 1;">
                    </div>
                    <br>
                    <h3 class="cursive-sm text-mocca"><strong>Siti Elly Fatimah</strong></h3>
                    <p class="small">Putri dari Bapak Abdul Japar <br> & Ibu Ngatmi</p>
                    <p class="small">Klokah, RT 03 RW 02, Kunduran, Blora</p>
                    <h1 class="cursive my-2">&</h1>
                </div>
            </section>
            <section id="couple-pria" class="section" style="background-image: url('assets/BGall-04.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 0;">
                <!-- Awan kiri -->
                <img src="assets/AwanHome1-11.png" alt="Awan" class="position-absolute" style="left: 0px; top: 20%; width: 90px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome3-13.png" alt="AwanF" class="position-absolute" style="left: -47px; top: 57%; width: 120px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome5-16.png" alt="Awan" class="position-absolute" style="right: 0px; top: 6%; width: 80px; z-index: 2; pointer-events: none;">
                <!-- Awan kanan -->
                <img src="assets/AwanHome5-16.png" alt="Awan" class="position-absolute" style="right: 0px; top: 54%; width: 90px; z-index: 0; pointer-events: none;">
                
                <div class="text-center d-flex flex-column justify-content-center align-items-center px-3 pt-5 pb-2 position-relative"
                    style="flex: 2;">
                    <div class="position-relative d-inline-block" style="z-index: 1;">
                        <img src="assets/Element-16.png" alt="Element Dekorasi Sayap"
                            class="position-absolute top-50 start-50" style="width: 350px; z-index: 0;">
                        <img src="assets/Potrait-02.png" alt="Foto Mempelai" class="img-fluid shadow-custom position-relative rounded-pill" width="160" height="200"
                            style="object-fit:cover; border: 3px solid var(--mocca-light); z-index: 1;">
                    </div>
                    <br>
                    <h3 class="cursive-sm text-mocca"><strong>Muhammad Dian Nafi' Aziz</strong></h3>
                    <p class="small">Putra dari Bapak Abdul Aziz <br> & Ibu Imroah Sya'baniyah</p>
                    <p class="small">Sedahromo Kidul, RT 01 RW 09, Kartasura, Sukoharjo</p>
                </div>
                <div class="d-flex justify-content-center align-items-end position-relative" style="flex: 1; overflow: hidden;">
                    <img src="assets/FlowerUP.png" alt="Flower Dekorasi BottomFlower"
                        class="position-absolute bottom-0 start-0 w-100" style="height: auto; z-index: 99;">
                    <img src="assets/Element-12.png" alt="Element Dekorasi" class="position-relative"
                        style="max-width: 100%; max-height: 100%; object-fit: contain; z-index: 1;">
                </div>
            </section>

            <section id="event" class="section">
                <div class="card-custom-pill shadow-custom rounded-pill text-center">
                    <div class="d-flex justify-content-center align-items-end position-relative" style="flex: 1;">
                            <img src="assets/Element-11.png" alt="Flower Dekorasi" CropUP
                            class="position-absolute" style="left: -10%; top: -140px; width: 120%; z-index: 1; pointer-events: none;">
                    </div>
                    <h2 class="serif text-mocca mb-4"><strong>Waktu & Tempat</strong></h2>
                    <div class="mb-4">
                        <h5 class="fw-bold"><i class="fas fa-ring me-2"></i>Akad Nikah</h5>
                        <p class="small">Pukul 08.00 WIB</p>
                    </div>
                    <div class="mb-4">
                        <h5 class="fw-bold"><i class="fas fa-utensils me-2"></i>Resepsi</h5>
                        <p class="small">Pukul 09.00 WIB - Selesai </p>
                    </div>
                    <hr class="w-50 mx-auto">
                    <div class="mb-4">
                        <p class="small"><strong>Sabtu, 11 April 2026</strong></p>
                        <p class="small"><strong>Kediaman Mempelai Wanita</strong> <br> Klokah, RT 03 RW 02, Kunduran, Blora</p>
                    </div>
                    <a href="https://maps.app.goo.gl/dZggBc4nMascRSDB7" target="_blank" class="btn btn-mocca btn-sm">
                        <i class="fas fa-map-marker-alt me-1"></i> Lihat Lokasi
                    </a>
                    <div class="d-flex justify-content-center align-items-end position-relative" style="flex: 1;">
                        <img src="assets/FlowerUP.png" alt="Flower Dekorasi BottomFlower"
                            class="position-absolute" style="left: -10%; bottom:50px; width: 120%; z-index: 1; pointer-events: none;">
                        <img src="assets/Element-13.png" alt="Element Dekorasi" class="position-relative"
                            style="left: 0px; bottom: -30px; width: 120%; z-index: 0; pointer-events: none;">
                    </div>
                </div>

                <div class="mt-2 d-flex justify-content-center" id="timer">
                    <div class="timer-box" style="box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);">
                        <h4 id="days">00</h4><span>Hari</span>
                    </div>
                    <div class="timer-box" style="box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);">
                        <h4 id="hours">00</h4><span>Jam</span>
                    </div>
                    <div class="timer-box" style="box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);">
                        <h4 id="mins">00</h4><span>Menit</span>
                    </div>
                    <div class="timer-box" style="box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);">
                        <h4 id="secs">00</h4><span>Detik</span>
                    </div>
                </div>
            </section>
            <section id="rsvp" class="section"
                style="background-image: url('assets/BGall-08.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 0; overflow: hidden;">
                <img src="assets/Element-14.png" alt="Element Dekorasi CropUP" class="position-absolute top-0 start-0 w-100" style="height: auto; z-index: 99; pointer-events: none;">
                <!-- Konten RSVP -->
                <div class="text-center d-flex flex-column justify-content-center align-items-center px-3 pb-2 position-relative" style="flex: 2;">
                    <div class="card-custom-rsvp text-center">
                        <h5 class="serif text-mocca mb-3"><strong>R S V P & W I S H E S</strong></h5>
                        <!-- Form RSVP -->
                        <form id="rsvpForm" method="POST">
                            <div class="mb-2">
                                <input class="form-control form-control-sm" placeholder="Nama" name="nama"
                                    required style="background:transparent; color:var(--mocca-dark); border:1px solid var(--mocca-dark);">
                            </div>
                            <div class="mb-2">
                                <select class="form-select form-select-sm" name="kehadiran" required
                                    style="background:transparent; color:var(--mocca-dark); border:1px solid var(--mocca-dark);">
                                    <option value="" disabled selected style="color:#ccc;">Konfirmasi Kehadiran</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <textarea class="form-control form-control-sm" name="ucapan" rows="3"
                                    placeholder="Ucapan & Doa"
                                    style="background:transparent; color:var(--mocca-dark); border:1px solid var(--mocca-dark);"></textarea>
                            </div>
                            <button type="submit"
                                class="btn btn-sm text-dark border-dark d-inline-flex align-items-center gap-1 px-3 py-1"
                                style="background-color:transparent; font-size:0.8rem;">
                                Kirim
                            </button>
                        </form>
                        <!-- List ucapan -->
                        <ul id="wishesList" class="list-group text-dark mt-4 text-start" aria-live="polite" aria-relevant="additions" role="log" style="font-size:0.85rem; max-height:220px; overflow-y:auto; padding-left:0; list-style:none;">
                            <?php if (!empty($daftar_ucapan)) foreach ($daftar_ucapan as $u): ?>
                            <li class="list-group-item bg-transparent border-0 mb-2 px-0">
                                <strong><?= htmlspecialchars($u['nama']) ?></strong>
                                <span class="badge" style="background-color:var(--mocca-dark);"><?= htmlspecialchars($u['hadir']) ?></span><br>
                                <small><?= htmlspecialchars($u['ucapan']) ?></small><br>
                                <small class="text-muted"><?= htmlspecialchars($u['waktu']) ?></small>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-end position-absolute" style="flex: 1; bottom: -80px; left: 0; right: 0; overflow: hidden; pointer-events: none;">
                    <img src="assets/FlowerUP.png" alt="Flower Dekorasi BottomFlower"
                        class="position-absolute bottom-0 start-0 w-100" style="height: auto; z-index: 99; pointer-events: none;">
                    <img src="assets/Element-13.png" alt="Element Dekorasi" class="position-relative"
                        style="max-width: 100%; bottom: -20px; max-height: 100%; object-fit: contain; z-index: 1; pointer-events: none;">
                </div>
            </section>
            <section id="gift" class="section"
                style="background-image: url('assets/BGall-08.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 0; overflow: hidden;">
                <img src="assets/Element-11.png" alt="Element Dekorasi CropUP" class="position-absolute end-0 w-100" style="top: -45px; height: auto; z-index: 99; pointer-events: none;">
                <div class="text-center d-flex flex-column justify-content-center align-items-center px-3 pb-2 position-relative" style="flex: 2;">
                    <div class="card-custom-rsvp text-center">
                        <h5 class="serif text-mocca mb-3"><strong>Wedding Gift</strong></h5>
                        <p id="gift-text" class="text-dark text-center mb-3" 
                            style="font-size: 0.9rem; font-family: 'Open Sans', sans-serif;">
                            Doa dan restu kalian adalah hadiah paling berarti bagi kami. Namun bila rekan semua berkenan
                            untuk memberikan tanda kasih, berikut kami sampaikan informasinya.
                        </p>
                        <!-- Tombol-tombol -->
                        <div class="text-dark d-flex justify-content-center flex-wrap gap-2 mb-3">
                            <!-- Tombol Rekening -->
                            <button onclick="document.getElementById('rekening-info').style.display='block'; document.getElementById('gift-text').style.display='none'"
                                class="btn btn-sm text-dark border-dark d-inline-flex align-items-center gap-1 px-3 py-1"
                                style="background-color: transparent; font-size: 0.8rem;">
                                <i class="bi bi-gift"></i> Klik Disini
                            </button>

                            <!-- Tombol WA -->
                            <a href="https://wa.me/6289515339949?text=Halo%2C+saya+ingin+konfirmasi+pengiriman+hadiah+pernikahan+untuk+Elly+%26+Dian."
                                target="_blank"
                                class="btn btn-sm text-dark border-dark  d-inline-flex align-items-center gap-1 px-3 py-1"
                                style="background-color: transparent; font-size: 0.8rem;">
                                <i class="bi bi-whatsapp"></i> Konfirmasi
                            </a>
                        </div>
                        <!-- Info Rekening -->
                        <div id="rekening-info" style="display: none;">
                            <div class="text-white p-3 rounded-3" style="background: rgba(0,0,0,0.4);">

                                <!-- BSI -->
                                <div class="text-start border border-light rounded p-2 mb-3 position-relative">
                                    <p class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                        BSI - <span class="text-white" id="bsi">7338103543
                                        </span>
                                        <button onclick="copyToClipboard('bsi')"
                                            class="btn btn-sm text-white position-absolute end-0 top-0 mt-1 me-2"
                                            style="background: transparent;">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </p>
                                    <p class="mb-0" style="font-size: 0.75rem;">a.n. MUHAMMAD DIAN NAFI AZIZ</p>
                                </div>

                                <!-- Seabank -->
                                <div class="text-start border border-light rounded p-2 mb-3 position-relative">
                                    <p class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                        Seabank - <span class="text-white"
                                            id="seabank">901608097910</span>
                                        <button onclick="copyToClipboard('seabank')"
                                            class="btn btn-sm text-white position-absolute end-0 top-0 mt-1 me-2"
                                            style="background: transparent;">
                                            <i class="bi bi-clipboard"></i>
                                        </button>
                                    </p>
                                    <p class="mb-0" style="font-size: 0.75rem;">a.n. SITI ELLY FATIMAH</p>
                                </div>



                                <!--Alamat Kirim Kado -->
                                <div class="text-start border border-light rounded p-2 mb-2">
                                    <p class="mb-1 fw-bold" style="font-size: 0.9rem;">
                                        <i class="bi bi-gift me-1"></i>Kado
                                    </p>
                                    <p class="mb-0" style="font-size: 0.75rem;">
                                        <span class="fw-semibold">Nama Penerima : Siti Elly Fatimah</span> <br> Klokah, RT 03 RW 02, Kunduran, Blora<br>
                                        <i class="bi bi-whatsapp me-1"></i> +62 895-1533-9949
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-end position-absolute" style="flex: 1; bottom: -80px; left: 0; right: 0; overflow: hidden; pointer-events: none; overflow-y: hidden;">
                    <img src="assets/FlowerUP.png" alt="Flower Dekorasi BottomFlower"
                        class="position-absolute bottom-0 start-0 w-100" style="height: auto; z-index: 99; pointer-events: none;">
                    <img src="assets/Element-13.png" alt="Element Dekorasi" class="position-relative"
                        style="max-width: 100%; bottom: -20px; max-height: 100%; object-fit: contain; z-index: 1; pointer-events: none;">
                </div>
            </section>
            <section id="thanks" class="section d-flex flex-column overflow-hidden"
                style="background-image: url('assets/BGall-01.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 0;">
                <img src="assets/Element-11.png" alt="Element Dekorasi CropUP" class="position-absolute end-0 w-100" style="top: -45px; height: auto; z-index: 99; pointer-events: none;">

                 <!-- Awan kiri -->
                <img src="assets/AwanHome1-11.png" alt="Awan" class="position-absolute" style="left: 0px; top: 20%; width: 90px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome2-14.png" alt="Awan" class="position-absolute" style="left: 0px; top: 67%; width: 172px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome3-13.png" alt="AwanF" class="position-absolute" style="left: 45px; top: 37%; width: 130px; z-index: 2; pointer-events: none;">
                <!-- Awan kanan -->
                <img src="assets/AwanHome4-12.png" alt="AwanF" class="position-absolute" style="right: -20px; top: 15%; width: 100px; z-index: 2; pointer-events: none;">
                <img src="assets/AwanHome5-16.png" alt="Awan" class="position-absolute" style="right: 0px; top: 63%; width: 120px; z-index: 0; pointer-events: none;">
                <img src="assets/AwanHome6-15.png" alt="AwanF" class="position-absolute" style="right: 28px; top: 36%; width: 90px; z-index: 2; pointer-events: none;">
                <div class="text-center d-flex flex-column justify-content-center align-items-center px-3 pt-5 pb-2 position-absolute"
                    style="flex: 2; top: 35%; left: 50%; transform: translate(-50%, -50%);">
                    <div class="position-relative d-inline-block" style="z-index: 1;">
                        <img src="assets/Element-16.png" alt="Element Dekorasi Sayap"
                            class="position-absolute top-50 start-50" style="width: 350px; z-index: 0;">
                        <img src="assets/ED800x800.png" alt="Foto Mempelai" class="img-fluid position-relative"
                            style="max-width: 300px; border-radius: 50%; z-index: 1;">
                    </div>
                    <div class="mt-2 px-2" style="max-width: 560px;">
                        <p class="small">Merupakan suatu kehormatan dan kebahagiaan bagi kami sekeluarga apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan do’a restu kepada kedua mempelai. Atas kehadiran serta do’a restunya, kami ucapkan terima kasih.</p>
                        <p class="small"><strong>Elly & Dian Nafi'</strong></p>
                    </div>
                </div>
                <div class="position-absolute text-center text-light" style="bottom: 60px; border-radius:10px; padding:15px; margin-top:5px; background:none; z-index: 999;">
                    <p style="margin:0; ">Created & Develope By: <br><a class="text-light"
                            href="https://instagram.com/bambang.suko/"><span
                                style="font-weight:bold;">@bambang.suko</span></a></p>
                </div>
                <div class="d-flex justify-content-center align-items-end position-absolute" style="flex: 1; bottom: -20px; left: 0; right: 0; overflow: hidden; pointer-events: none; overflow-y: hidden;">
                    <img src="assets/FlowerUP.png" alt="Flower Dekorasi BottomFlower"
                        class="position-absolute bottom-0 start-0 w-100" style="height: auto; z-index: 99; pointer-events: none;">
                    <img src="assets/Element-13.png" alt="Element Dekorasi" class="position-relative"
                        style="max-width: 100%; bottom: -20px; max-height: 100%; object-fit: contain; z-index: 0; pointer-events: none;">
                </div>
            </section>
        </div>
    </div><!-- /#mobile-frame -->

    <nav id="navbar">
        <a href="javascript:void(0)" onclick="scrolling('#home')"><i class="fas fa-home"></i>Home</a>
        <a href="javascript:void(0)" onclick="scrolling('#couple-wanita')"><i class="fas fa-heart"></i>Mempelai</a>
        <a href="javascript:void(0)" onclick="scrolling('#event')"><i class="fas fa-calendar-alt"></i>Acara</a>
        <a href="javascript:void(0)" onclick="scrolling('#rsvp')"><i class="fas fa-comments"></i>RSVP</a>
    </nav>

    <audio id="musik" loop>
        <source src="assets/Anisa-Rahma_Anandito-Pernikahan-Impian.mp3" type="audio/mpeg">
    </audio>

    <!-- Tombol Play/Pause Music -->
    <button id="musicControl" aria-label="Toggle Music">
        <i class="fas fa-pause"></i>
    </button>

    <script>
        const musikAudio = document.getElementById('musik');
        const musicControl = document.getElementById('musicControl');

        function bukaUndangan() {
            document.getElementById('cover').style.transform = 'translate(-50%, -100%)';
            document.getElementById('navbar').style.display = 'flex';

            // Show music button and play
            musicControl.style.display = 'flex';
            musikAudio.play().then(() => {
                musicControl.classList.add('playing');
            }).catch(() => console.log('Autoplay blocked, tap music button'));
        }

        // Toggle play/pause with tactile animation
        musicControl.addEventListener('click', () => {
            const icon = musicControl.querySelector('i');

            // Ripple ring effect
            const ripple = document.createElement('span');
            ripple.classList.add('ripple-ring');
            musicControl.appendChild(ripple);
            ripple.addEventListener('animationend', () => ripple.remove());

            // Pop spring animation
            musicControl.classList.remove('btn-pop', 'playing');
            void musicControl.offsetWidth; // force reflow
            musicControl.classList.add('btn-pop');

            if (musikAudio.paused) {
                musikAudio.play();
                icon.classList.remove('fa-play');
                icon.classList.add('fa-pause');
                setTimeout(() => musicControl.classList.add('playing'), 400);
            } else {
                musikAudio.pause();
                icon.classList.remove('fa-pause');
                icon.classList.add('fa-play');
            }
        });

        function scrolling(id) {
            document.querySelector(id).scrollIntoView({ behavior: 'smooth' });
        }

        // Countdown Logic (2 April 2026)
        const target = new Date("April 11, 2026 08:00:00").getTime();
        setInterval(() => {
            const now = new Date().getTime();
            const diff = target - now;
            document.getElementById('days').innerText = Math.floor(diff / (1000 * 60 * 60 * 24));
            document.getElementById('hours').innerText = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            document.getElementById('mins').innerText = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            document.getElementById('secs').innerText = Math.floor((diff % (1000 * 60)) / 1000);
        }, 1000);

        // AJAX RSVP
        let rsvpForm = document.getElementById('rsvpForm');
        if (rsvpForm) {
            rsvpForm.onsubmit = function (e) {
                e.preventDefault();
                const data = new FormData(this);
                fetch('?action=kirim', { method: 'POST', body: data })
                    .then(res => res.json())
                    .then(res => {
                        if (res.status === 'success') {
                            alert('Ucapan terkirim, terima kasih!');
                            location.reload();
                        }
                    })
                    .catch(err => {
                        alert('Gagal mengirim ucapan. Silakan coba lagi.');
                        console.error('RSVP Error:', err);
                    });
            };
        }

        // Randomize Awan Animation
        document.querySelectorAll('img[alt="Awan"]').forEach(awan => {
            let randomDuration = (Math.random() * 4 + 4).toFixed(2); // 4s - 8s
            let randomDelay = (Math.random() * 5).toFixed(2); // 0s - 5s
            awan.style.animationDuration = randomDuration + 's';
            awan.style.animationDelay = '-' + randomDelay + 's';
        });
        // Randomize AwanF Animation
        document.querySelectorAll('img[alt="AwanF"]').forEach(awanF => {
            let randomDuration = (Math.random() * 4 + 4).toFixed(2); // 4s - 8s
            let randomDelay = (Math.random() * 5).toFixed(2); // 0s - 5s
            awanF.style.animationDuration = randomDuration + 's';
            awanF.style.animationDelay = '-' + randomDelay + 's';
        });
    </script>
</body>

</html>