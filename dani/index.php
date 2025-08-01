<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trainer - Daniel Perera</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

  <style>
    *, *::before, *::after {
      box-sizing: border-box;
    }

    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: url('https://images.unsplash.com/photo-1554284126-2f7f01de136e?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      min-height: 100vh;
    }

    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background: linear-gradient(135deg, rgba(0, 0, 0, 0.85), rgba(255, 60, 60, 0.4));
      z-index: -1;
    }

    .container {
      max-width: 1000px;
      margin: 60px auto;
      background: rgba(0, 0, 0, 0.75);
      padding: 40px;
      border-radius: 18px;
      box-shadow: 0 12px 35px rgba(255, 70, 70, 0.3);
      animation: fadeInUp 1s ease;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      text-align: center;
      margin-bottom: 20px;
      color: #ffdada;
      text-shadow: 0 4px 12px rgba(255, 82, 82, 0.5);
    }

    .bio {
      text-align: center;
      font-size: 1.2rem;
      color: #ffecec;
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
      box-shadow: 0 8px 18px rgba(255, 82, 82, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 35px rgba(255, 82, 82, 0.6);
    }

    .payment {
      background: rgba(255, 255, 255, 0.08);
      padding: 20px;
      border-radius: 15px;
      text-align: center;
      border: 1px solid #ff9090;
      color: #ffeaea;
      margin-bottom: 40px;
    }

    .payment h2 {
      font-size: 1.8rem;
      margin-bottom: 10px;
      color: #ffbcbc;
    }

    .back-button {
      text-align: center;
    }

    .back-button a {
      display: inline-block;
      padding: 12px 28px;
      background-color: #ff5252;
      color: #fff;
      font-weight: 600;
      text-decoration: none;
      border-radius: 30px;
      box-shadow: 0 4px 12px rgba(255, 82, 82, 0.5);
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .back-button a:hover {
      background: #e63c3c;
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
    <h1>Daniel Perera</h1>
    <div class="bio">
      <p>
        High-energy coach passionate about cardio, bootcamps, and weight loss journeys. Daniel leads dynamic group sessions and personal training designed to push limits, burn calories, and inspire long-term transformation with a fun, motivating atmosphere.
      </p>
    </div>

    <div class="gallery">
      <img src="b1.png" alt="Cardio Workout" />
      <img src="b2.png" alt="Bootcamp Class" />
      <img src="b3.png" alt="Running Drill" />
      <img src="b4.png" alt="HIIT Session" />
    </div>

    <div class="payment">
      <h2>Training Packages</h2>
      <p>
        <strong>Cardio Blast:</strong> LKR3000/session <br/>
        <strong>Bootcamp Series:</strong> LKR15000/week (Mon–Fri) <br/>
        <strong>Weight Loss Plan:</strong> LKR35000/month (3x/week + meal guide)
      </p>
    </div>

    <div class="back-button">
      <a href="http://localhost/FITGYM/main/index.php">← Back</a>
    </div>
  </div>
</body>
</html>
