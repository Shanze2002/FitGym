<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trainer - John Silva</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

  <style>
    *, *::before, *::after {
      box-sizing: border-box;
    }

    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: url('https://images.unsplash.com/photo-1605296867077-3b1c0b56b5c5?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      min-height: 100vh;
    }

    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background: linear-gradient(135deg, rgba(0, 0, 0, 0.85), rgba(100, 100, 100, 0.4));
      z-index: -1;
    }

    .container {
      max-width: 1000px;
      margin: 60px auto;
      background: rgba(0, 0, 0, 0.75);
      padding: 40px;
      border-radius: 18px;
      box-shadow: 0 12px 35px rgba(255, 255, 255, 0.15);
      animation: fadeInUp 1s ease;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      text-align: center;
      margin-bottom: 20px;
      color: #e0f7ff;
      text-shadow: 0 4px 12px rgba(255, 255, 255, 0.3);
    }

    .bio {
      text-align: center;
      font-size: 1.2rem;
      color: #f0f0f0;
      max-width: 800px;
      margin: 0 auto 40px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 24px;
      margin-bottom: 40px;
    }

    .gallery img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 8px 18px rgba(200, 200, 200, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 35px rgba(255, 255, 255, 0.6);
    }

    .payment {
      background: rgba(255, 255, 255, 0.08);
      padding: 20px;
      border-radius: 15px;
      text-align: center;
      border: 1px solid #d9d9d9;
      color: #eee;
      margin-bottom: 40px;
    }

    .payment h2 {
      font-size: 1.8rem;
      margin-bottom: 10px;
      color: #d4f1ff;
    }

    .back-button {
      text-align: center;
    }

    .back-button a {
      display: inline-block;
      padding: 12px 28px;
      background-color: #666;
      color: #fff;
      font-weight: 600;
      text-decoration: none;
      border-radius: 30px;
      box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .back-button a:hover {
      background: #444;
      transform: translateY(-2px);
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 650px) {
      h1 {
        font-size: 2.2rem;
      }
      .bio {
        font-size: 1rem;
      }
      .gallery img {
        height: 160px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>John Silva</h1>
    <div class="bio">
      <p>
        Certified in strength & conditioning with 8+ years transforming lives. John’s programs are built to challenge the body, unlock true physical potential, and build long-term strength through safe and effective training strategies.
      </p>
    </div>

    <div class="gallery">
      <img src="f1.jpg" alt="Strength Training" />
      <img src="f3.jpg" alt="Coach with Dumbbells" />
      <img src="f2.jpg" alt="Functional Fitness" />
      <img src="f4.jpg" alt="Strength Session" />
    </div>

    <div class="payment">
      <h2>Training Rates</h2>
      <p>
        <strong>1-on-1 Strength Session:</strong> LKR3500/hour<br/>
        <strong>Weekly Plan (3 sessions):</strong> LKR15000/week<br/>
        <strong>Full Month Package:</strong> LKR45000 (includes progress tracking & meal advice)
      </p>
    </div>

    <div class="back-button">
      <a href="http://localhost/FITGYM/main/index.php">← Back</a>
    </div>
  </div>
</body>
</html>

    </div>
  </div>
</body>
</html>
