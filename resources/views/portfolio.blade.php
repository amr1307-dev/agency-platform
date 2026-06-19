<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio — Red Sea Digital Pro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Tajawal:wght@200;300;400;500;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --white: #FAFAF8;
      --off-white: #F0EDE8;
      --charcoal: #1A1A1A;
      --warm-gray: #8A8680;
      --indigo: #4A5CF6;
      --font-en: 'Inter', -apple-system, sans-serif;
      --font-ar: 'Tajawal', sans-serif;
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: var(--font-en);
      background: var(--white);
      color: var(--charcoal);
      -webkit-font-smoothing: antialiased;
    }

    .header {
      padding: 32px 8%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid rgba(26,26,26,0.05);
    }

    .header .brand {
      font-weight: 300;
      font-size: 1.1rem;
      letter-spacing: 0.05em;
    }

    .header .brand span { color: var(--indigo); }

    .header nav a {
      font-size: 0.8rem;
      font-weight: 400;
      letter-spacing: 0.05em;
      color: var(--warm-gray);
      margin-left: 28px;
      transition: color 0.3s;
    }

    .header nav a:hover { color: var(--indigo); }

    .hero {
      padding: 12vh 8% 8vh;
      text-align: center;
    }

    .hero h1 {
      font-weight: 300;
      font-size: clamp(2rem, 3.5vw, 3.5rem);
      letter-spacing: 0.02em;
      margin-bottom: 12px;
    }

    .hero p {
      font-weight: 300;
      color: var(--warm-gray);
      font-size: clamp(0.95rem, 1.1vw, 1.1rem);
      max-width: 600px;
      margin: 0 auto;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
      gap: 40px;
      padding: 0 8% 12vh;
    }

    .project {
      position: relative;
      overflow: hidden;
    }

    .project img {
      width: 100%;
      height: auto;
      display: block;
      border: 1px solid rgba(26,26,26,0.04);
      transition: transform 0.6s cubic-bezier(0.23,1,0.32,1);
    }

    .project:hover img {
      transform: scale(1.02);
    }

    .project .info {
      padding: 20px 0 0;
    }

    .project .info h3 {
      font-weight: 400;
      font-size: 1rem;
      letter-spacing: 0.02em;
      margin-bottom: 4px;
    }

    .project .info .type {
      font-size: 0.7rem;
      font-weight: 400;
      letter-spacing: 0.08em;
      color: var(--indigo);
      text-transform: uppercase;
      margin-bottom: 6px;
    }

    .project .info p {
      font-size: 0.85rem;
      font-weight: 300;
      color: var(--warm-gray);
      line-height: 1.6;
    }

    .footer {
      padding: 40px 8%;
      text-align: center;
      font-size: 0.75rem;
      font-weight: 300;
      color: var(--warm-gray);
      border-top: 1px solid rgba(26,26,26,0.05);
      letter-spacing: 0.03em;
    }

    @media (max-width: 600px) {
      .grid { grid-template-columns: 1fr; gap: 32px; }
      .header { flex-direction: column; gap: 12px; }
      .header nav a { margin: 0 10px; }
    }
  </style>
</head>
<body>
  <header class="header">
    <div class="brand">Red Sea <span>Digital Pro</span></div>
    <nav>
      <a href="/">Home</a>
      <a href="/apply">Submit Brief</a>
      <a href="/portfolio">Portfolio</a>
      <a href="/admin/login">Admin</a>
    </nav>
  </header>

  <section class="hero">
    <h1>Our Work</h1>
    <p>A selection of brands, websites, and digital experiences we've designed and built.</p>
  </section>

  <section class="grid">
    @foreach($projects as $project)
    <div class="project">
      <img src="/portfolio/{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy">
      <div class="info">
        <div class="type">{{ $project['type'] }}</div>
        <h3>{{ $project['title'] }}</h3>
        <p>{{ $project['description'] }}</p>
      </div>
    </div>
    @endforeach
  </section>

  <footer class="footer">
    Red Sea Digital Pro · Elite Performance Luxury Agency
  </footer>
</body>
</html>
