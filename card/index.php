<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FitGym - Cardio Category</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

  <style>
    /* Reset */
    *, *::before, *::after {
      box-sizing: border-box;
    }

    body, html {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: url('https://images.unsplash.com/photo-1554284126-2f7f01de136e?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      color: #f4f4f4;
      position: relative;
      overflow-x: hidden;
    }

    /* Overlay */
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background: linear-gradient(135deg, rgba(255, 82, 82, 0.8), rgba(255, 125, 125, 0.6));
      z-index: -1;
      filter: brightness(0.6);
    }

    .container {
      max-width: 1100px;
      margin: 60px auto 80px;
      background: rgba(0,0,0,0.65);
      padding: 50px 40px 60px;
      border-radius: 18px;
      box-shadow: 0 12px 35px rgba(255, 82, 82, 0.45);
      animation: fadeInUp 1s ease forwards;
    }

    /* Heading */
    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.8rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      margin: 0 0 30px;
      text-align: center;
      color: #ffeaea;
      text-shadow: 0 4px 12px rgba(255, 82, 82, 0.9);
      text-transform: uppercase;
      user-select: none;
    }

    /* Description */
    .description {
      font-weight: 300;
      font-size: 1.3rem;
      line-height: 1.75;
      max-width: 900px;
      margin: 0 auto 50px;
      color: #f0e7e7cc;
      text-align: center;
      letter-spacing: 0.02em;
    }

    /* Payment Info */
    .payment-info {
      max-width: 650px;
      margin: 0 auto 60px;
      background: rgba(255, 255, 255, 0.1);
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
      transition: background-color 0.3s ease;
    }

    .payment-info:hover {
      background: rgba(255, 255, 255, 0.18);
      box-shadow: 0 0 45px #ff6767dd;
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

    /* Gallery */
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
      cursor: pointer;
      filter: drop-shadow(0 0 0.3rem #ff5a5a80);
      transition: transform 0.35s ease, box-shadow 0.35s ease, filter 0.35s ease;
    }

    .gallery img:hover {
      transform: scale(1.07) rotate(1deg);
      box-shadow: 0 15px 35px rgba(255, 82, 82, 0.9);
      filter: drop-shadow(0 0 1rem #ff4949cc);
      z-index: 2;
    }

    /* Back Button */
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

    /* Animations */
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

    /* Responsive */
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
  <div class="container" role="main" aria-label="Cardio Training Information and Gallery">
    <h1>Cardio Training</h1>

    <section class="description">
      <p>
        Cardio workouts are essential for heart health, endurance, and burning calories. Our cardio classes at FitGym combine high-energy exercises like treadmill runs, cycling, and interval training designed to boost your stamina and accelerate fat loss.
      </p>
      <p>
        Whether you’re a beginner or an advanced athlete, our cardio sessions will help you reach your fitness goals with fun, motivating group workouts and personalized training.
      </p>
    </section>

    <section class="payment-info" aria-label="Payment options for Cardio Classes">
      <h2>Payment Options for Cardio Classes</h2>
      <p>
        <strong>Single Class:</strong> LKR1000 per session <br/>
        <strong>Monthly Unlimited:</strong> LKR20000/month <br/>
        <strong>3-Month Package:</strong> $LKR60000 (save 10%) <br/>
        Payment can be made via credit card, debit card, or PayPal.
      </p>
    </section>

    <section class="gallery" aria-label="Gallery of cardio workouts">
      <img src="car1.jpg" alt="Treadmill Workout" loading="lazy" />
      <img src="car2.jpg" alt="Indoor Cycling" loading="lazy" />
      <img src="car3.jpg" alt="Rowing Machine" loading="lazy" />
      <img src="car4.jpg" alt="Group Cardio Class" loading="lazy" />
      <img src="car5.jpg" alt="Jump Rope Workout" loading="lazy" />
      <img src="car6.jpg" alt="High Intensity Interval Training" loading="lazy" />
    </section>

    <div class="back-button">
      <a href="http://localhost/FITGYM/main/index.php">← Back</a>
    </div>
  </div>
</body>
</html>

