@extends('templateBootstrap')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Links</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #111a33, #20305b, #2d427c);
      color: #fff;
      font-family: 'Poppins', sans-serif;
      padding: 40px 20px;
    }

    .container {
      max-width: 900px;
      margin: auto;
      padding: 40px 30px;
      background-color: rgba(255, 255, 255, 0.06);
      border-radius: 20px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    h1 {
      font-size: 36px;
      font-weight: 600;
      margin-bottom: 30px;
    }

    .link-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: center;
    }

    .link-button {
      display: inline-block;
      background: linear-gradient(135deg, #f2a2a6, #f6bdbd);
      color: #fff;
      padding: 14px 24px;
      border-radius: 14px;
      text-decoration: none;
      font-weight: 500;
      min-width: 180px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .link-button:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 26px;
      }
      .link-button {
        min-width: 140px;
        font-size: 14px;
        padding: 12px 18px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>My Links</h1>
    <a href="welcome" class="link-button" target="_blank">💫 Welcome 💫</a>
    <a href="pertama" class="link-button" target="_blank">🥇 Pertama 🥇</a>
    <a href="layout" class="link-button" target="_blank">🛠️ Layout 🛠️</a>
    <a href="template" class="link-button" target="_blank">🖼️ Template 🖼️</a>
    <a href="js1" class="link-button" target="_blank">🧮 Calculator 🧮</a>
    <a href="validasi" class="link-button" target="_blank">✅ Validation ✅</a>
    <a href="aespalinktree" class="link-button" target="_blank">🌳 Linktree 🌳</a>
    <a href="ets" class="link-button" target="_blank">👩🏻‍💻 ETS 👩🏻‍💻</a>
    <a href="blog" class="link-button" target="_blank">🛜 Blog 🛜</a>
  </div>
</body>
</html>
@endsection
