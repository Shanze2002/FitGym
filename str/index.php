<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FitGym - Strength Training</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

  <style>
    *, *::before, *::after {
      box-sizing: border-box;
    }

    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: url('https://images.unsplash.com/photo-1583454110551-21f2fa2e1e76?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      color: #f4f4f4;
      position: relative;
      overflow-x: hidden;
    }

    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background: linear-gradient(135deg, rgba(34, 34, 34, 0.9), rgba(85, 85, 85, 0.7));
      z-index: -1;
    }

    .container {
      max-width: 1100px;
      margin: 60px auto 80px;
      background: rgba(0, 0, 0, 0.7);
      padding: 50px 40px 60px;
      border-radius: 18px;
      box-shadow: 0 12px 35px rgba(255, 82, 82, 0.35);
      animation: fadeInUp 1s ease forwards;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.8rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      margin: 0 0 30px;
      text-align: center;
      color: #fff0f0;
      text-shadow: 0 4px 12px rgba(255, 82, 82, 0.9);
      text-transform: uppercase;
      user-select: none;
    }

    .description {
      font-weight: 300;
      font-size: 1.3rem;
      line-height: 1.75;
      max-width: 900px;
      margin: 0 auto 50px;
      color: #f0e7e7cc;
      text-align: center;
    }

    .payment-info {
      max-width: 650px;
      margin: 0 auto 60px;
      background: rgba(255, 255, 255, 0.08);
      padding: 28px 30px;
      border-radius: 15px;
      border: 1.8px solid #ff6767;
      box-shadow: 0 0 25px #ff6767aa;
      color: #ffd7d7;
      text-align: center;
      font-size: 1.15rem;
      font-weight: 500;
      letter-spacing: 0.02em;
      user-select: none;
    }

    .payment-info h2 {
      margin-bottom: 18px;
      font-size: 2rem;
      font-weight: 700;
      color: #ffb3b3;
      text-shadow: 0 2px 8px #ff5252bb;
    }

    .payment-info strong {
      color: #ffeaea;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 24px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .gallery img {
      width: 100%;
      height: 185px;
      border-radius: 15px;
      object-fit: cover;
      box-shadow: 0 8px 20px rgba(255, 82, 82, 0.6);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      filter: drop-shadow(0 0 0.4rem #ff5a5a70);
    }

    .gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 35px rgba(255, 82, 82, 0.8);
    }

    .back-button {
      text-align: center;
      margin-top: 50px;
    }

    .back-button a {
      display: inline-block;
      text-decoration: none;
      color: white;
      background: #ff5252;
      padding: 12px 28px;
      border-radius: 30px;
      font-weight: 600;
      font-size: 1rem;
      transition: background 0.3s ease, transform 0.2s ease;
      box-shadow: 0 4px 12px rgba(255, 82, 82, 0.5);
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
      .container {
        padding: 40px 25px 50px;
      }
      h1 {
        font-size: 2.8rem;
      }
      .description {
        font-size: 1.1rem;
      }
      .payment-info {
        font-size: 1rem;
        padding: 22px 20px;
      }
      .gallery img {
        height: 160px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Strength Training</h1>

    <section class="description">
      <p>
        Strength training at FitGym focuses on building muscle, improving bone density, and enhancing full-body performance. Our certified trainers guide you through weightlifting, resistance exercises, and functional strength routines tailored to your fitness level.
      </p>
      <p>
        Whether you're aiming to bulk up, tone down, or increase functional strength, our programs help you build a strong, confident body while minimizing injury risk.
      </p>
    </section>

    <section class="payment-info">
      <h2>Payment Options for Strength Training</h2>
      <p>
        <strong>Single Session:</strong> LKR2000 per session <br/>
        <strong>Monthly Plan:</strong> LKR150000 (3 sessions/week) <br/>
        <strong>Personalized Plan:</strong> Starting from LKR65000/month <br/>
        Accepting: Cash, Card, or Online Payments
      </p>
    </section>

    <section class="gallery">
      <img src="st1.jpg" alt="Deadlift Training" />
      <img src="st2.jpg" alt="Barbell Workout" />
      <img src="st3.jpg" alt="Squat Rack" />
      <img src="st4.jpg" alt="Kettlebell Session" />
      <img src="st5.jpg" alt="Strength Trainer" />
      <img src="st6.jpg" alt="Pull-Up Exercise" />
    </section>

    <div class="back-button">
      <a href="javascript:history.back()">← Back</a>
    </div>
  </div>
</body>
</html>
