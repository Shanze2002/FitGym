<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About FitZone Gym</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      background-image:
        linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url('https://images.unsplash.com/photo-1554284126-aa88f22d8b74?auto=format&fit=crop&w=1470&q=80');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      font-family: "Segoe UI", "Roboto", "Helvetica Neue", sans-serif;
      color: white;
    }

    .about-card {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      padding: 40px;
      max-width: 1000px;
      margin: 80px auto;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(10px);
    }

    h1, h3 {
      color: #00c6ff;
      text-shadow: 1px 1px 5px black;
    }

    p {
      font-size: 1.1rem;
      line-height: 1.6;
    }

    .gallery {
      margin-top: 40px;
    }

    .gallery img {
      border-radius: 15px;
      transition: 0.4s ease;
      width: 100%;
      height: 220px;
      object-fit: cover;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      cursor: pointer;
    }

    .gallery img:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    }

    .btn-back {
      margin-top: 40px;
    }

    @media (max-width: 768px) {
      .about-card {
        padding: 25px;
        margin: 40px 20px;
      }
    }
  </style>
</head>
<body>

<div class="about-card text-white">
  <h1 class="text-center mb-4">About FitZone Gym</h1>

  <p>Welcome to <strong>FitZone</strong>, your ultimate destination for health, strength, and transformation. We’re more than just a gym — we’re a vibrant community built on motivation, wellness, and results.</p>

  <h3>🏋️ Who We Are</h3>
  <p>FitZone was founded to inspire every individual to achieve their personal best. Whether you're here to build muscle, lose weight, or just feel better — we’re here to help.</p>

  <h3>💪 Our Facilities</h3>
  <p>
    - State-of-the-art gym equipment<br>
    - Group classes (Zumba, Yoga, HIIT)<br>
    - Personal trainers & nutrition plans<br>
    - Steam rooms, lockers & lounge area<br>
    - 24/7 smart access for members
  </p>

  <h3>🎯 Why Choose Us?</h3>
  <p>
    - Certified trainers & modern ambiance<br>
    - Friendly, inclusive community<br>
    - Convenient location in Colombo<br>
    - Affordable membership plans
  </p>

  <h3>🕒 Hours & Contact</h3>
  <p>
    Mon–Fri: 5 AM – 11 PM<br>
    Sat–Sun: 6 AM – 9 PM<br>
    📞 +94 77 123 4567 | 📧 info@fitzone.lk
  </p>

  <!-- Gallery Section: Add your photos here -->
  <div class="gallery mt-5">
    <div class="row g-4">
      <!-- Photo 1 -->
      <div class="col-md-4">
        <img src="abo1.jpeg" alt="Gym Image 1" class="img-fluid">
      </div>
      
      <!-- Photo 2 -->
      <div class="col-md-4">
        <img src="abo2.jpeg" alt="Gym Image 2" class="img-fluid">
      </div>

      <!-- Photo 3 -->
      <div class="col-md-4">
        <img src="abo3.jpeg" alt="Gym Image 3" class="img-fluid">
      </div>

      <!-- ADD MORE PHOTOS BELOW BY COPYING THIS BLOCK -->
      <!--
      <div class="col-md-4">
        <img src="YOUR_PHOTO_URL_HERE" alt="Description" class="img-fluid">
      </div>
      -->
    </div>
  </div>

  <div class="text-center btn-back">
    <a href="http://localhost/FITGYM/main/index.php" class="btn btn-outline-light">⬅ Back to Home</a>
  </div>
</div>

</body>
</html>



