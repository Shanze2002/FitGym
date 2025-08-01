<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF- />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FitGym - Yoga & Flexibility</title>

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
      background: url('https://images.unsplash.com/photo-1595433562696-c1c6d33b7ec2?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
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
      background: linear-gradient(135deg, rgba(34, 34, 34, 0.85), rgba(85, 85, 85, 0.5));
      z-index: -1;
    }

    .container {
      max-width: 1100px;
      margin: 60px auto 80px;
      background: rgba(0, 0, 0, 0.7);
      padding: 50px 40px 60px;
      border-radius: 18px;
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.45);
      animation: fadeInUp 1s ease forwards;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      margin: 0 0 30px;
      text-align: center;
      color: #d6f8e6;
      text-shadow: 0 4px 10px rgba(0, 0, 0, 0.8);
      text-transform: uppercase;
    }

    .description {
      font-weight: 300;
      font-size: 1.3rem;
      line-height: 1.75;
      max-width: 900px;
      margin: 0 auto 50px;
      color: #f0f0f0cc;
      text-align: center;
    }

    .payment-info {
      max-width: 650px;
      margin: 0 auto 60px;
      background: rgba(255, 255, 255, 0.08);
      padding: 28px 30px;
      border-radius: 15px;
      border: 1.5px solid #8ef5c3;
      box-shadow: 0 0 25px #8ef5c355;
      color: #d0fff0;
      text-align: center;
      font-size: 1.15rem;
      font-weight: 500;
    }

    .payment-info h2 {
      margin-bottom: 18px;
      font-size: 2rem;
      color: #b2ffe0;
      text-shadow: 0 2px 8px #7dfcbecc;
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
      box-shadow: 0 8px 20px rgba(0, 255, 170, 0.4);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 35px rgba(0, 255, 170, 0.8);
    }

    .back-button {
      text-align: center;
      margin-top: 50px;
    }

    .back-button a {
      display: inline-block;
      text-decoration: none;
      color: white;
      background: #2ed8a7;
      padding: 12px 28px;
      border-radius: 30px;
      font-weight: 600;
      font-size: 1rem;
      transition: background 0.3s ease, transform 0.2s ease;
      box-shadow: 0 4px 12px rgba(46, 216, 167, 0.5);
    }

    .back-button a:hover {
      background: #1cb98a;
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
        font-size: 2.5rem;
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
    <h1>Yoga & Flexibility</h1>

    <section class="description">
      <p>
        Our Yoga & Flexibility classes focus on building balance, strength, mobility, and inner calm. Perfect for all ages and fitness levels, these sessions blend dynamic stretching, mindful breathing, and guided meditation to improve your overall flexibility and reduce stress.
      </p>
      <p>
        Whether you're recovering from intense workouts or seeking mental clarity, these classes offer a rejuvenating experience for mind and body.
      </p>
    </section>

    <section class="payment-info">
      <h2>Payment Options</h2>
      <p>
        <strong>Drop-in Class:</strong> $12 per session <br/>
        <strong>Weekly Pass:</strong> $40 (3 sessions/week) <br/>
        <strong>Monthly Unlimited:</strong> $120/month <br/>
        Payment accepted via card, cash, or mobile transfer.
      </p>
    </section>

    <section class="gallery">
      <img src="y1.jpg" alt="Yoga Pose" />
      <img src="y2.jpg" alt="Stretching in class" />
      <img src="y3.jpg" alt="Meditation" />
      <img src="y4.jpg" alt="Outdoor Yoga" />
      <img src="y5.jpg" alt="Group Yoga" />
      <img src="y6.jpg" alt="Flexible Movement" />
    </section>

    <div class="back-button">
      <a href="javascript:history.back()">← Back</a>
    </div>
  </div>
</body>
</html>
