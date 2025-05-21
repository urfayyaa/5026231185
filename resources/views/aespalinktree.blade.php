<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>aespa Linktree</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a2e0e6b1b4.js" crossorigin="anonymous"></script>
  <style>
    body {
      background-color: #fac1c1;
      font-family: 'Fredoka One', sans-serif;
      text-align: center;
      color: white;
      padding-bottom: 100px;
    }

    h1, h2, h3, h4, h5, h6, p, a, .btn, .card, .video-overlay-title {
      font-family: 'Fredoka One', sans-serif;
      font-weight: normal;
    }

    .profile-img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin: 30px auto 10px;
      display: block;
    }

    .btn-custom {
      background-color: #f2a2a6;
      border-radius: 30px;
      padding: 23px 20px;
      color: white;
      font-weight: normal;
      margin: 15px auto;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      position: relative;
      max-width: 70vw;
      box-shadow: 0 4px 12px rgba(1, 1, 1, 0.20);
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .btn-custom:hover {
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.20);
      transform: translateY(-2px);
    }

    a.btn-custom,
    a.btn-custom:hover,
    a.btn-custom:visited,
    a.btn-custom:active {
      color: white;
    }

    .btn-custom img {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      width: 40px;
      height: 40px;
      border-radius: 50%;
    }

    .btn-custom .btn-text {
      display: inline-block;
      width: 100%;
      text-align: center;
    }

    .btn-ellipsis {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      color: white;
    }

    .section-title {
      margin: 40px 0 20px;
      font-weight: 900;
      font-size: 18px;
    }

    .card-custom {
      background-color: #f2a2a6;
      border-radius: 25px;
      padding: 20px;
      margin: 20px auto;
      max-width: 70vw;
      color: white;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .carousel-inner img {
      height: 200px;
      object-fit: cover;
      border-radius: 12px;
    }

    .video-container {
      margin-bottom: 30px;
      position: relative;
      overflow: hidden;
      border-radius: 16px;
      width: 100%;
      max-width: 70vw;
      margin: 0 auto;
      transition: all 0.3s ease;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(1, 1, 1, 0.20);
    }

    .video-container::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 50%;
      background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
      z-index: 1;
      pointer-events: none;
      border-bottom-left-radius: 16px;
      border-bottom-right-radius: 16px;
      box-shadow: 0 4px 12px rgba(1, 1, 1, 0.20);
    }

    .video-container:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .video-container:hover .custom-play-button {
      transform: scale(1.1) translate(-50%, -50%);
    }

    .embed-responsive {
      border-radius: 16px;
      overflow: hidden;
    }

    .video-overlay-title {
      position: absolute;
      bottom: 10px;
      left: 15px;
      color: white;
      padding: 6px 12px;
      font-weight: normal;
      font-size: 17px;
      border-radius: 8px;
      z-index: 2;
    }

    .video-options-icon {
      position: absolute;
      bottom: 10px;
      right: 15px;
      font-size: 20px;
      cursor: pointer;
      z-index: 2;
    }

    .social-icons {
      margin-top: 20px;
      display: flex;
      justify-content: center;
    }

    .social-icons a {
      margin: 0 10px;
      color: white;
      font-size: 24px;
      transition: transform 0.3s ease;
      cursor: pointer;
    }

    .social-icons a:hover {
      transform: scale(1.2);
    }

    .join-btn {
      background-color: white;
      color: black;
      border-radius: 25px;
      padding: 10px 10px;
      font-weight: bold;
      margin-top: 20px;
      display: inline-block;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease;
      opacity: 0.8;
      font-family: 'Inter', sans-serif;
    }

    .join-btn:hover {
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
      transform: translateY(-2px);
      text-decoration: none;
      opacity: 1;
      color: black;
    }

    .custom-play-button {
      width: 40px;
      height: 40px;
      background: rgba(255, 255, 255, 0.75);
      border-radius: 50%;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .custom-play-button .triangle {
      width: 0;
      height: 0;
      border-left: 14px solid black;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      margin-left: 4px;
    }

    .album-carousel {
    background-color: #f2a2a6;
    padding: 15px 15px;
    border-radius: 25px;
    margin: 20px 0;
    width: 100%;
    max-width: 70vw; /* samakan dengan lebar video */
    overflow: hidden;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 4px 12px rgba(1, 1, 1, 0.20);
  }

  .carousel-ellipsis {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 22px;
  font-weight: bold;
  color: white;
  cursor: pointer;
  z-index: 15;
}

  .album-carousel h5 {
    text-align: center;
    font-size: 0.85 rem;
    font-weight: normal;
    margin-bottom: 5px;
    margin-top: 5px;
    color: white;
  }

  .carousel-container {
    position: relative;
  flex-direction: column;
  align-items: center; /* biar isi container-nya center secara horizontal */
  justify-content: center;
  margin: 0 auto;
  padding: 0;
  }

  .narrow-carousel {
  max-width: 70vw; /* atau sama kayak video */
  width: 100%;
  margin: 0 auto;
  color:transparent;
}

  .carousel-track {
    display: flex;
    gap: 15px;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding-bottom: 10px;
  }

  .carousel-track::-webkit-scrollbar {
    display: none;
  }

  .album-item {
    flex: 0 0 auto;
    width: 180px;
    background-color: #f2a2a6;
    border-radius: 15px;
    padding: 5 px;
    text-align: center;
    color: white;
    margin-top: 15px;
  }

  .album-item img {
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
  }

  .album-item p {
    margin-top: 10px;
    font-size: 0.85rem;
    font-weight: normal;
  }

  .nav-btn {
    background: white;
   border: none;
   width: 50px;
   height: 50px;
   border-radius: 50%; /* bikin bulat sempurna */
   display: flex;
   align-items: center;
   justify-content: center;
   font-size: 1.0rem;
   color: #f2a2a6; /* warna ikon panah */
   box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
   cursor: pointer;
   position: absolute;
   top: 40%;
   left: 89%;
   transform: translateY(-50%);
   z-index: 5;
   transition: transform 0.2s ease, background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .nav-btn:hover {
  transform: translateY(-50%) scale(1.1); /* zoom dikit */
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
  }

  .nav-btn:active {
  transform: translateY(-50%) scale(0.95);
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
 }

  .nav-left {
    left: 10px;
  }

  .nav-right {
    right: 10px;
  }

  .arrow {
  width: 20px;       /* Panjang panah */
  height: 20px;      /* Sama besar untuk segitiga */
  position: relative;
  display: inline-block;
}

.arrow::before {
  content: '';
  position: absolute;
  top: 55%;
  left: 35%;
  width: 14px;
  height: 14px;
  border-right: 2px solid #f2a2a6;
  border-bottom: 2px solid #f2a2a6;
  transform: translate(-50%, -50%) rotate(-45deg);
  transition: all 0.3s ease;
}

.arrow.left::before {
  transform: translate(-50%, -50%) rotate(135deg);
  top: 55%;
  left: 60%;
}

.arrow.right::before {
  transform: translate(-50%, -50%) rotate(-45deg);
  top: 55%;
  left: 35%;
}

  </style>
</head>
<body>
    <div class="mx-auto" style="width: 500px; max-width: 100%;">
  <img src="https://ugc.production.linktr.ee/1c0ff630-951f-44f1-b6d1-279943c6c920_aespa-wearing-Chopards-Happy-Sport-Happy-Hearts-and-Happy-Diamonds-collections-2-extend-scaled-1.jpeg?io=true&size=avatar-v3_0" class="profile-img" alt="aespa" />
  <h4 style="font-weight: 900;">aespa <img src="img/Official.svg" alt="Tanda centang" style="width: 20px; height: 20px;"></h4>
  <p style="font-weight: normal;">ZOOM ZOOM – out now</p>

  <div class="container">

    <a href="#" class="btn btn-custom"
    data-toggle="modal"
    data-target="#mainModal"
    data-title="ZOOM ZOOM"
    data-desc="aespa's ZOOM ZOOM on Spotify"
    data-img="img/zoomzoom.jpeg"
    data-embed="https://open.spotify.com/embed/track/3DZwsHxTYjCcMUTcSkATPl?utm_source=generator">
   <img src="img/zoomzoom.jpeg" alt="Zoom Zoom" />
   <span class="btn-text">Stream ZOOM ZOOM</span>
   <span
  class="btn-ellipsis"
  data-toggle="modal"
  data-target="#modalZoomZoom"
  data-title="ZOOM ZOOM"
  data-desc="aespa's ZOOM ZOOM on Spotify"
  data-img="img/zoomzoom.jpeg"
  data-embed="https://open.spotify.com/embed/artist/6YVMFz59CuY7ngCxTxjpxE?utm_source=generator"
>
  &#8942;
</span>
 </a>


 <a href="#" class="btn btn-custom"
 data-toggle="modal"
 data-target="#mainModal"
 data-title="Better Things"
 data-desc="aespa's Better Things on Spotify"
 data-img="img/betterthings.jpeg"
 data-embed="https://open.spotify.com/embed/track/6zZWoHlF2zNSLUNLvx4GUl?utm_source=generator">
<img src="img/betterthings.jpeg" alt="Better Things" />
<span class="btn-text">Stream Better Things</span>
<span
  class="btn-ellipsis"
  data-toggle="modal"
  data-target="#modalBetterThings"
  data-title="Better Things"
  data-desc="aespa's Better Things on Spotify"
  data-img="img/betterthings.jpeg"
  data-embed="https://open.spotify.com/embed/artist/6YVMFz59CuY7ngCxTxjpxE?utm_source=generator"
>
  &#8942;
</span>
</a>

<!-- Modal Dinamis -->
<div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-body text-center" style="padding: 2rem;">
        <img id="modalThumbnail" src="" class="img-fluid rounded mb-3" style="border-radius: 12px; max-height: 200px;" alt="Video Thumbnail" />
        <h5 id="modalTitle" class="mb-2 font-weight-bold"></h5>
        <p id="modalDesc" class="mb-3" style="font-weight: normal;"></p>

        <!-- Spotify iframe -->
        <iframe id="spotifyEmbed" style="border-radius:12px"
          src="" width="100%" height="352" frameBorder="0" allowfullscreen=""
          allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
        </iframe>
      </div>
    </div>
  </div>
</div>

  <!-- Modal untuk ellipsis Zoom Zoom -->
<div class="modal fade" id="modalZoomZoom" tabindex="-1" role="dialog" aria-labelledby="zoomZoomLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-body text-center" style="padding: 2rem;">
        <img id="modalThumbnail" src="" class="img-fluid rounded mb-3" style="border-radius: 12px; max-height: 200px;" alt="Video Thumbnail" />
        <h5 id="modalTitle" class="mb-2 font-weight-bold"></h5>
        <p id="modalDesc" class="mb-3" style="font-weight: normal;"></p>
        <iframe id="modalSpotifyEmbed" style="border-radius:12px"
    src="" width="100%" height="352" frameBorder="0" allowfullscreen=""
    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
  </iframe>
         <!-- Tombol yang mengarah ke link Spotify -->
         <a id="modalLink" href="https://open.spotify.com/embed/artist/6YVMFz59CuY7ngCxTxjpxE?utm_source=generator" target="_blank" class="btn btn-custom" style="text-decoration: none;">Watch on Spotify</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal untuk ellipsis Better Things -->
<div class="modal fade" id="modalBetterThings" tabindex="-1" role="dialog" aria-labelledby="betterThingsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-body text-center" style="padding: 2rem;">
        <img id="modalThumbnail" src="" class="img-fluid rounded mb-3" style="border-radius: 12px; max-height: 200px;" alt="Video Thumbnail" />
        <h5 id="modalTitle" class="mb-2 font-weight-bold"></h5>
        <p id="modalDesc" class="mb-3" style="font-weight: normal;"></p>
        <iframe id="modalSpotifyEmbed" style="border-radius:12px"
    src="" width="100%" height="352" frameBorder="0" allowfullscreen=""
    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
  </iframe>
         <!-- Tombol yang mengarah ke link Spotify -->
         <a id="modalLink" href="https://open.spotify.com/embed/artist/6YVMFz59CuY7ngCxTxjpxE?utm_source=generator" target="_blank" class="btn btn-custom" style="text-decoration: none;">Watch on Spotify</a>
      </div>
    </div>
  </div>
</div>


<div class="section-title">official merch</div>

<!-- Album Carousel - 4th Mini Album -->
<div class="narrow-carousel">
<div class="album-carousel">
  <h5>4th Mini Album</h5>
  <span class="carousel-ellipsis" data-toggle="modal" data-target="#modal4thAlbum">&#8942;</span>
  <div class="carousel-container">
    <button class="nav-btn nav-left" onclick="scrollCarousel('carousel4thTrack', -1)">
      <span class="arrow left"></span>
    </button>
    <div class="carousel-track" id="carousel4thTrack">
      <div class="album-item">
        <a href="https://global.shop.smtown.com/products/the-4th-mini-album-drama-giant-ver?_pos=2&_sid=6f5afe3a4&_ss=r" target="_blank">
        <img src="img/4thalbumgiantver.jpeg" alt="Album 1" />
        </a>
        <p>[Pre-Order] aespa The 4th Mini Album Giant Ver</p>
      </div>
      <div class="album-item">
        <a href="https://global.shop.smtown.com/products/aespa-the-4th-mini-album-drama-drama-ver?_pos=1&_sid=6f5afe3a4&_ss=r" target="_blank">
        <img src="img/4thalbumdramaver.jpeg" alt="Album 2" />
        </a>
        <p>[Pre-Order] aespa The 4th Mini Album Drama Ver</p>
      </div>
      <div class="album-item">
        <a href="https://global.shop.smtown.com/products/the-4th-mini-album-drama-scene-ver?_pos=3&_sid=6f5afe3a4&_ss=r" target="_blank">
        <img src="img/4thalbumscenever.jpeg" alt="Album 3" />
        </a>
        <p>[Pre-Order] aespa The 4th Mini Album Scene Ver</p>
      </div>
      <div class="album-item">
        <a href="https://global.shop.smtown.com/products/the-4th-mini-album-drama-giant-ver?_pos=2&_sid=6f5afe3a4&_ss=r" target="_blank">
        <img src="img/4thalbumgiantver.jpeg" alt="Album 4" />
        </a>
        <p>[Pre-Order] aespa The 4th Mini Album Full Ver</p>
      </div>
    </div>
    <button class="nav-btn nav-right" onclick="scrollCarousel('carousel4thTrack', 1)">
      <span class="arrow right"></span>
    </button>
  </div>
</div>

<!-- Modal untuk 4th Mini Album -->
<div class="modal fade" id="modal4thAlbum" tabindex="-1" role="dialog" aria-labelledby="modal4thLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-body text-center" style="padding: 2rem;">
        <img id="modalThumbnail" src="" class="img-fluid rounded mb-3" style="border-radius: 12px; max-height: 200px;" alt="Video Thumbnail" />
        <h5 id="modalTitle" class="mb-2 font-weight-bold"></h5>
        <p id="modalDesc" class="mb-3" style="font-weight: normal;"></p>
        <a id="modalLink" href="https://global.shop.smtown.com/search?q=aespa+4th+anniversary&_pos=1&_psq=4th&_ss=e&_v=1.0&type=product" target="_blank" class="btn btn-custom" style="text-decoration: none;">Shop More!</a>
      </div>
    </div>
  </div>
</div>

<!-- Album Carousel - 3rd Mini Album -->
<div class="album-carousel">
  <h5>3rd Mini Album</h5>
  <span class="carousel-ellipsis" data-toggle="modal" data-target="#modal3rdAlbum">&#8942;</span>
  <div class="carousel-container">
    <button class="nav-btn nav-left" onclick="scrollCarousel('carousel3rdTrack', -1)">
      <span class="arrow left"></span>
    </button>
    <div class="carousel-track" id="carousel3rdTrack">
      <div class="album-item">
        <a href="https://global.shop.smtown.com/products/exclusive-photocard-the-3rd-mini-album-my-world-scrunchie-box-set?_pos=1&_psq=aespa+3rd+album&_ss=e&_v=1.0" target="_blank">
        <img src="img/3rdalbumscrunchie.jpeg" alt="Album 1" />
        </a>
        <p>The 3rd Mini Album 'MY WORLD'</p>
      </div>
      <div class="album-item">
        <a href="https://global.shop.smtown.com/products/exclusive-photocard-the-3rd-mini-album-my-world-scrunchie-box-set?_pos=1&_psq=aespa+3rd+album&_ss=e&_v=1.0" target="_blank">
        <img src="img/3rdalbumgreen.jpeg" alt="Album 2" />
        </a>
        <p>The 3rd Mini Album 'MY WORLD'</p>
      </div>
      <div class="album-item">
        <a href="https://global.shop.smtown.com/products/exclusive-photocard-the-3rd-mini-album-my-world-scrunchie-box-set?_pos=1&_psq=aespa+3rd+album&_ss=e&_v=1.0" target="_blank">
        <img src="img/3rdalbumfull.jpeg" alt="Album 3" />
        </a>
        <p>The 3rd Mini Album 'MY WORLD'</p>
      </div>
      <div class="album-item">
        <a href="https://global.shop.smtown.com/products/exclusive-photocard-the-3rd-mini-album-my-world-scrunchie-box-set?_pos=1&_psq=aespa+3rd+album&_ss=e&_v=1.0" target="_blank">
        <img src="img/3rdalbum3ver.jpeg" alt="Album 4" />
        </a>
        <p>[The 3rd Mini Album 'MY WORLD'</p>
      </div>
    </div>
    <button class="nav-btn nav-right" onclick="scrollCarousel('carousel3rdTrack', 1)">
      <span class="arrow right"></span>
    </button>
  </div>
</div>
</div>
</div>

<!-- Modal untuk 3rd Mini Album -->
<div class="modal fade" id="modal3rdAlbum" tabindex="-1" role="dialog" aria-labelledby="modal3rdLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px;">
      <div class="modal-body text-center" style="padding: 2rem;">
        <img id="modalThumbnail" src="" class="img-fluid rounded mb-3" style="border-radius: 12px; max-height: 200px;" alt="Video Thumbnail" />
        <h5 id="modalTitle" class="mb-2 font-weight-bold"></h5>
        <p id="modalDesc" class="mb-3" style="font-weight: normal;"></p>
        <a id="modalLink" href="https://global.shop.smtown.com/search?q=aespa+4th+anniversary&_pos=1&_psq=4th&_ss=e&_v=1.0&type=product" target="_blank" class="btn btn-custom" style="text-decoration: none;">Shop More!</a>
      </div>
    </div>
  </div>
</div>

    <div class="section-title">videos</div>
    <div class="mx-auto" style="width: 470px; max-width: 100%;">
    <div class="mb-4">
    <!-- Video 1 -->
    <div class="video-container position-relative" style="max-width: 70vw; margin: 0 auto;">
      <img src="img/performancevideo.jpeg" alt="Thumbnail" class="img-fluid" style="border-radius: 16px; cursor: pointer;" onclick="this.outerHTML='<div class=\'embed-responsive embed-responsive-16by9\'><iframe class=\'embed-responsive-item\' src=\'https://www.youtube.com/embed/hb73cGFLzKk?autoplay=1\' allowfullscreen></iframe></div>'" />
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 48px; color: white;">
        <div class="custom-play-button" onclick="playVideo(this, 'https://www.youtube.com/embed/hb73cGFLzKk')">
            <svg width="32" height="32" viewBox="0 0 100 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 25C35 21.6863 38.5817 19.8455 41.2679 21.6325L72.0718 41.6325C74.758 43.4195 74.758 47.5805 72.0718 49.3675L41.2679 69.3675C38.5817 71.1545 35 69.3137 35 66V25Z" fill="black"/>
            </svg>
        </div>
      </div>
      <div class="video-overlay-title">Better Things Performance Video</div>
      <div class="video-options-icon"  onclick="showModal('Better Things Performance Video', 'aespa\'s new single “Better Things” is out! Listen and download on your favorite platform.', 'linktreeimg/performancevideo.jpeg', 'https://www.youtube.com/watch?v=hb73cGFLzKk')">
        <i class="fas fa-ellipsis-v fa-xs text-white" style="font-size: 12px; position: relative; top: -7px;"></i>
      </div>

    </div>
    </div>

    <div class="mb-4">
    <!-- Video 2 -->
    <div class="video-container position-relative" style="max-width: 70vw; margin: 0 auto;">
      <img src="img/theperformancestage.jpeg" alt="Thumbnail" class="img-fluid" style="border-radius: 16px; cursor: pointer;" onclick="this.outerHTML='<div class=\'embed-responsive embed-responsive-16by9\'><iframe class=\'embed-responsive-item\' src=\'https://www.youtube.com/embed/k7KkaPKmFIQ?autoplay=1\' allowfullscreen></iframe></div>'" />
      <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 48px; color: white;">
        <div class="custom-play-button" onclick="playVideo(this, 'https://www.youtube.com/embed/k7KkaPKmFIQ')">
            <svg width="30" height="30" viewBox="0 0 100 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M35 25C35 21.6863 38.5817 19.8455 41.2679 21.6325L72.0718 41.6325C74.758 43.4195 74.758 47.5805 72.0718 49.3675L41.2679 69.3675C38.5817 71.1545 35 69.3137 35 66V25Z" fill="black"/>
            </svg>
        </div>
      </div>
      <div class="video-overlay-title">Better Things The Performance Stage</div>
      <div class="video-options-icon" onclick="showModal('Better Things The Performance Stage', 'aespa\'s new single “Better Things” is out! Listen and download on your favorite platform.', 'linktreeimg/performancevideo.jpeg', 'https://www.youtube.com/watch?v=k7KkaPKmFIQ')">
        <i class="fas fa-ellipsis-v text-white" style="font-size: 12px; "  ></i>
      </div>
    </div>
    </div>
    </div>

    <div class="social-icons">
      <a href="https://www.instagram.com/aespa_official/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@aespa_official" target="_blank"><i class="fab fa-tiktok"></i></a>
      <a href="https://www.youtube.com/@aespa" target="_blank"><i class="fab fa-youtube"></i></a>
      <a href="https://open.spotify.com/artist/6YVMFz59CuY7ngCxTxjpxE" target="_blank"><i class="fab fa-spotify"></i></a>
      <a href="https://music.apple.com/artist/aespa/1549966472" target="_blank"><i class="fas fa-music"></i></a>
    </div>

    <a href="https://linktr.ee/aespa?utm_source=linktree_profile_share&ltsid=6845d1e9-2848-403d-8f81-632cf007817e" class="join-btn">✶ Join aespa on Linktree</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="border-radius: 15px;">
        <div class="modal-body text-center" style="padding: 2rem;">
          <img id="modalThumbnail" src="" class="img-fluid rounded mb-3" style="border-radius: 12px; max-height: 200px;" alt="Video Thumbnail" />
          <h5 id="modalTitle" class="mb-2 font-weight-bold"></h5>
          <p id="modalDesc" class="mb-3" style="font-weight: normal;"></p>
          <a id="modalLink" href="https://www.youtube.com/@aespa" target="_blank" class="btn btn-custom" style="text-decoration: none;">Watch on YouTube</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function showModal(title, description, thumbnail, link) {
      document.getElementById('modalTitle').innerText = title;
      document.getElementById('modalDesc').innerText = description;
      document.getElementById('modalThumbnail').src = thumbnail;
      document.getElementById('modalLink').href = link;
      $('#videoModal').modal('show');
    }

    function playVideo(button, videoUrl) {
    const container = button.closest('.video-container');
    container.innerHTML = `
      <div class='embed-responsive embed-responsive-16by9'>
        <iframe class='embed-responsive-item' src='${videoUrl}?autoplay=1' allowfullscreen></iframe>
      </div>
    `;
    }

    function scrollCarousel(carouselId, direction) {
    const track = document.getElementById(carouselId);
    const scrollAmount = 150 * direction; // seberapa jauh scroll-nya
    const step = 5; // Seberapa jauh per langkah
    const duration = 400; // dalam milidetik
    const start = track.scrollLeft;
    const startTime = performance.now();

    function animateScroll(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const ease = 0.5 * (1 - Math.cos(Math.PI * progress)); // easeInOut

      track.scrollLeft = start + scrollAmount * ease;

      if (progress < 1) {
      requestAnimationFrame(animateScroll);
      } else {
      updateNavButtons(carouselId); // Update tombol setelah scroll selesai
      }
    }

    requestAnimationFrame(animateScroll);
  }

 function updateNavButtons(trackId) {
  const track = document.getElementById(trackId);
  const leftBtn = track.parentElement.querySelector('.nav-left');
  const rightBtn = track.parentElement.querySelector('.nav-right');

  // Cek posisi scroll
  if (track.scrollLeft <= 0) {
    leftBtn.style.display = 'none';  // Sembunyikan tombol kiri
  } else {
    leftBtn.style.display = 'flex';
  }

  if (track.scrollLeft + track.offsetWidth >= track.scrollWidth - 1) {
    rightBtn.style.display = 'none'; // Sembunyikan tombol kanan
  } else {
    rightBtn.style.display = 'flex';
  }
}

document.addEventListener('DOMContentLoaded', () => {
  updateNavButtons('carousel4thTrack');
  updateNavButtons('carousel3rdTrack');
});

$('#mainModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Tombol yang diklik

    // Ambil data dari tombol
    var title = button.data('title');
    var desc = button.data('desc');
    var img = button.data('img');
    var embed = button.data('embed');

    // Masukkan ke modal
    var modal = $(this);
    modal.find('#modalTitle').text(title);
    modal.find('#modalDesc').text(desc);
    modal.find('#modalThumbnail').attr('src', img);
    modal.find('#spotifyEmbed').attr('src', embed);
  });

  // Bersihin iframe saat modal ditutup
  $('#mainModal').on('hidden.bs.modal', function () {
    $('#spotifyEmbed').attr('src', '');
  });

  document.querySelectorAll('.btn-ellipsis').forEach(el => {
  el.addEventListener('click', function(e) {
    e.stopPropagation(); // Biar gak trigger modal utama
    const target = el.getAttribute('data-target'); // ambil id modal
    if (target) {
      const modal = new bootstrap.Modal(document.querySelector(target));
      modal.show();
    }
  });
});

  </script>
</div>
</body>
</html>
