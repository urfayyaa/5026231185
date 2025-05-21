<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Grid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="layout8.css">
    <style>
        .detail-header {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            font-weight: bold;
            background: white;
            border-bottom: 2px solid #E0E0E0;
        }
        .back-btn {
            font-size: 24px;
            color: black;
            border: none;
            background: none;
            margin-right: 10px;
        }
        .user-info {
            background-color: white;
            padding: 15px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .profile-box {
            width: 90px;
            height: 160px;
            background-color: #E0E0E0;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin: auto;
        }
        .profile-box img {
            width: 50%;
            height: auto;
            opacity: 0.6;
        }
        .alat-card {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            border-radius: 8px;
            background-color: #F5F5F5;
            margin-bottom: 15px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .alat-img img {
            width: 100px;
            border-radius: 8px;
        }
        .alat-title {
            font-size: 14px;
            font-weight: bold;
        }
        .alat-text {
            font-size: 12px;
            color: #555;
        }
        .profile-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }
        .card-custom {
            background: #f8f8f8;
            border-radius: 10px;
            padding: 15px;
        }
        .equipment-img {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }
        .label {
        font-size: 12px; 
        color: gray; 
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 2px;
        }
        .value {
        font-size: 16px;
        font-weight: bold;
        padding-bottom: 5px;
        border-bottom: 2px solid black;
        display: block;
        width: 100%;
        }  
       .detail-header {
       padding: 8px 12px; 
       font-size: 14px; 
       }
       .navbar {
       padding: 5px 0; 
       }
       .navbar-logo {
       width: 50px; 
       height: 50px;
       object-fit: cover;
       border-radius: 50%; 
       border: 5px solid black; 
       }
    </style>

</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="row">
            <div class="col-12 bg-light py-3 text-center">
                <div class="navbar">
                    <img src="img/LogoCekDong1.png" alt="Logo" class="navbar-logo">
                </div>
            </div>
        </div>
        
        <!-- Banner -->
        <div class="row">
            <div class="col-12">
                <div class="banner">
                    <img src="img/backgrounditstv.png" alt="Banner" class="img-fluid">
                </div>
            </div>
        </div>
        
        <!-- Detail Peminjaman -->
        <div class="row">
            <div class="col-12 bg-light text-black py-2 d-flex align-items-center">
                <button class="btn text-black me-2" onclick="goBack()" style="font-size: 1.5rem;">&#8249;</button>
                <span>Detail Peminjaman</span>
            </div>
        </div>

        <!-- Informasi User -->
        <div class="row user-info align-items-center p-3 shadow-sm bg-white rounded">
            <div class="col-3 text-center">
                <div class="profile-box">
                    <img src="img/contact.jpg" alt="Profile">
                </div>
            </div>
            <div class="col-9">
                <p class="label">Nama</p>
                <p class="value">Yanuar</p>
                <p class="label">Acara / Kegiatan</p>
                <p class="value">Liputan Pengukuhan Proffesor</p>
                <p class="label">Tanggal</p>
                <p class="value">20/11/24 - 22/11/2024</p>
                <p class="label">Waktu</p>
                <p class="value">07.00 - 19.00</p>
            </div>
        </div>
 
         <!-- Garis Pemisah -->
         <div class="separator"></div>

         <!-- Daftar Alat -->
         <div class="row p-3">
             <!-- Alat 1 -->
             <div class="col-12 alat-card mb-4 p-3"
                 style="background-color: #ECECEC; border-radius: 10px;">
                 <div class="row align-items-center">
                     <div class="col-4 text-center">
                         <img src="img/cam1.png"
                             alt="Kamera Canon EOS 4000D" class="alat-img">
                         <h6 class="alat-nama mt-2 text-center"
                             style="font-weight: bold;">CANON EOS 4000D</h6>
                     </div>
                     <div class="col-8">
                         <h5 class="alat-title"
                             style="font-weight: bold;">Deskripsi Alat</h5>
                         <p class="alat-text" style="text-align: justify;">
                             Canon EOS 4000D adalah kamera DSLR entry-level
                             yang dirancang untuk fotografer pemula yang
                             ingin menjelajahi dunia fotografi dengan lebih
                             serius. Kamera ini memiliki sensor APS-C 18
                             megapiksel, prosesor gambar DIGIC 4+, dan
                             kemampuan merekam video Full HD, menjadikannya
                             pilihan yang andal untuk menangkap gambar
                             berkualitas tinggi. Dengan sistem autofokus 9
                             titik dan konektivitas Wi-Fi built-in, pengguna
                             dapat dengan mudah membidik subjek secara akurat
                             dan membagikan hasilnya langsung ke perangkat
                             lain.
                         </p>
                     </div>
                 </div>
             </div>

             <!-- Alat 2 -->
             <div class="col-12 alat-card mb-4 p-3" style="background-color: #ECECEC; border-radius: 10px;">
                 <div class="row align-items-center">
                     <div class="col-4 text-center">
                         <img src="img/lighting4.png" alt="Tripod LED 204" class="alat-img">
                         <h6 class="alat-nama mt-2 text-center" style="font-weight: bold;">Tripod LED 204</h6>
                     </div>
                     <div class="col-8">
                         <h5 class="alat-title" style="font-weight: bold;">Deskripsi Alat</h5>
                         <p class="alat-text" style="text-align: justify;">
                             Tripod LED 204 memberikan stabilitas optimal untuk fotografi dan videografi, dengan tinggi yang dapat disesuaikan dan lampu LED bawaan. 
                             Tripod LED 204 memberikan stabilitas optimal untuk fotografi dan videografi, dengan tinggi yang dapat disesuaikan dan lampu LED bawaan.
                             Tripod LED 204 memberikan stabilitas optimal untuk fotografi dan videografi, dengan tinggi yang dapat disesuaikan dan lampu LED bawaan.
                         </p>
                     </div>
                 </div>
             </div>
             <style>
                 .alat-nama {
                     display: block;
                     text-align: center;
                     font-weight: bold;
                 }
             </style>
         </div>
     </div>
 </div>
 </body>
</html>