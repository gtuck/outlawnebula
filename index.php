<?php
// outlawnebula.com — Outlaw Nebula Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Outlaw Nebula</title>

  <meta name="description" content="Outlaw Nebula — where creativity, technology, and the cosmos collide. A frontier for innovation, storytelling, and digital exploration. Coming soon." />
  <meta name="keywords" content="Outlaw Nebula, digital frontier, creative technology, innovation, space media, Garth Tuck, exploration" />
  <meta name="author" content="Garth Tuck" />
  <meta name="robots" content="index, follow" />

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Outlaw Nebula" />
  <meta property="og:description" content="Where creativity, technology, and the cosmos collide. Coming soon." />
  <meta property="og:image" content="https://outlawnebula.com/images/outlaw-nebula.jpg" />
  <meta property="og:url" content="https://outlawnebula.com/" />
  <meta property="og:type" content="website" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Outlaw Nebula" />
  <meta name="twitter:description" content="Where creativity, technology, and the cosmos collide. Coming soon." />
  <meta name="twitter:image" content="https://outlawnebula.com/images/outlaw-nebula.jpg" />

  <!-- Favicon -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

  <!-- Bulma CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@vizuaalog/bulmajs@0/dist/bulma.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    body {
      position: relative;
      min-height: 100vh;
      margin: 0;
      background:
        linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.75)),
        url('images/space-background.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
      font-family: "Helvetica Neue", Arial, sans-serif;
      overflow: hidden;
      animation: fadeInBackground 2s ease-in-out;
    }
    @keyframes fadeInBackground {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    img.splash {
      width: 60vw;
      max-width: 600px;
      height: auto;
      border-radius: 1rem;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.7);
      animation: fadeIn 3s ease-in-out;
    }
    h1 {
      font-size: 2.2rem;
      margin-top: 1.5rem;
      font-weight: 600;
      letter-spacing: 0.05em;
      text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      animation: fadeIn 3.5s ease-in-out;
    }
    p.subtitle {
      font-size: 1.2rem;
      opacity: 0.9;
      text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      animation: fadeIn 4s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <header role="banner">
    <nav class="is-hidden" aria-hidden="true">
      <a href="#main">Skip to content</a>
    </nav>
  </header>

  <main id="main" role="main">
    <section class="hero is-fullheight is-transparent">
      <div class="hero-body">
        <div class="container has-text-centered">
          <figure class="image is-inline-block">
            <img
              class="splash"
              src="images/outlaw-nebula.jpg"
              alt="Outlaw Nebula cosmic splash image"
              loading="lazy"
            />
          </figure>
          <h1>Outlaw Nebula</h1>
          <p class="subtitle">The frontier of creativity, technology, and imagination.</p>
          <p class="subtitle"><em>Coming Soon</em></p>
        </div>
      </div>
    </section>
  </main>

  <footer class="has-text-centered" style="padding: 1.5rem 0;">
    <p>&copy; <?php echo date('Y'); ?> Outlaw Nebula · All rights reserved.</p>
  </footer>
</body>
</html>
