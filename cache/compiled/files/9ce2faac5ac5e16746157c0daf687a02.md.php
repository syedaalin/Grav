<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/pages/home/default.md',
    'modified' => 1767235896,
    'size' => 10396,
    'data' => [
        'header' => [
            
        ],
        'frontmatter' => '',
        'markdown' => '<style>
  /* --- 1. THEME VARIABLES --- */
  :root {
    --primary: #0e7490;    /* Deep Teal */
    --primary-dark: #164e63;
    --accent: #d97706;     /* Islamic Gold */
    --accent-light: #fcd34d;
    --bg-page: #f8fafc;
    --bg-card: #ffffff;
    --text-main: #1f2937;
    --text-muted: #6b7280;
    --shadow-card: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    --shadow-hover: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
  }

  /* --- 2. BASE STYLES --- */
  body {
    font-family: \'Segoe UI\', system-ui, sans-serif;
    background-color: var(--bg-page);
    color: var(--text-main);
    line-height: 1.6;
    margin: 0;
  }

  h1, h2, h3 {
    font-family: \'Georgia\', serif;
    color: var(--primary-dark);
    margin-top: 0;
  }

  a { text-decoration: none; }

  /* --- 3. ANIMATIONS --- */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .animate-load {
    animation: fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    opacity: 0; 
  }
  .delay-1 { animation-delay: 0.1s; }
  .delay-2 { animation-delay: 0.2s; }
  .delay-3 { animation-delay: 0.3s; }

  /* --- 4. HERO SECTION --- */
  .hero-banner {
    background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
    color: white;
    padding: 60px 30px;
    border-radius: 16px;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: var(--shadow-hover);
    margin-bottom: 50px;
  }

  /* Abstract Pattern Overlay */
  .hero-banner::before {
    content: "";
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 20px 20px;
    opacity: 0.3;
  }

  .hero-content { position: relative; z-index: 2; }

  .hero-btn {
    background: var(--accent);
    color: white;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: bold;
    display: inline-block;
    margin-top: 20px;
    transition: transform 0.2s, box-shadow 0.2s;
    box-shadow: 0 4px 15px rgba(217, 119, 6, 0.4);
  }

  .hero-btn:hover {
    transform: translateY(-2px);
    background: #b45309;
    box-shadow: 0 8px 20px rgba(217, 119, 6, 0.6);
  }

  /* --- 5. GRID SYSTEM (Replaces Tables) --- */
  .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 25px;
    margin: 30px 0;
  }

  /* --- 6. SERVICE CARDS --- */
  .service-card {
    background: var(--bg-card);
    padding: 25px;
    border-radius: 12px;
    box-shadow: var(--shadow-card);
    border: 1px solid rgba(0,0,0,0.03);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-hover);
    border-color: var(--primary);
  }

  .icon-box {
    font-size: 2.5rem;
    margin-bottom: 15px;
    display: inline-block;
  }

  .card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: var(--primary);
  }

  .card-link {
    margin-top: 20px;
    color: var(--accent);
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }
  .card-link:hover { text-decoration: underline; }

  /* --- 7. QUOTE SECTION --- */
  .quote-box {
    background: #fffbeb; /* Light yellow tint */
    border-left: 6px solid var(--accent);
    padding: 40px;
    border-radius: 8px;
    text-align: center;
    margin: 60px 0;
    box-shadow: var(--shadow-card);
  }

  .arabic-text {
    font-family: \'helvetica\', \'Traditional Arabic\', serif;
    font-size: 2.2rem;
    color: var(--primary-dark);
    margin: 20px 0;
    line-height: 1.8;
  }

  /* --- 8. COURSE LIST (Compact Grid) --- */
  .course-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--shadow-card);
    transition: transform 0.2s;
    border-left: 4px solid var(--primary);
    display: flex;
    align-items: center;
    padding: 15px;
  }
  
  .course-card:hover {
    transform: scale(1.02);
    box-shadow: var(--shadow-hover);
  }

  .course-icon { font-size: 1.8rem; margin-right: 15px; }
  .course-info { flex-grow: 1; }
  .course-btn {
    background: var(--primary);
    color: white;
    padding: 5px 15px;
    border-radius: 4px;
    font-size: 0.8rem;
  }

</style>

<div style="max-width: 1100px; margin: 0 auto; padding: 20px;">

  <div class="hero-banner animate-load">
    <div class="hero-content">
      <h1 style="color:white; font-size: 2.5rem; margin-bottom: 10px;">Learn Quran, Fiqh & More From Shia Scholars.</h1>
      <p style="font-size: 1.1rem; opacity: 0.9; max-width: 700px; margin: 0 auto;">
        At Aabtaab, we bring accessible and affordable Shia Islamic education to everyone no matter where you are in the world.
      </p>
      <a href="#services" class="hero-btn">VIEW ALL SERVICES</a>
    </div>
  </div>

  <div id="services" class="animate-load delay-1">
    <h2 style="text-align: center; font-size: 2rem;">Our Services 🤲</h2>
    <div class="grid-container">
      
      <div class="service-card">
        <div>
          <span class="icon-box">🕌</span>
          <div class="card-title">Niyabat Ziyarat</div>
          <p style="color: var(--text-muted);">Have a representative perform Ziarat on your behalf at holy shrines with sincerity and devotion.</p>
        </div>
        <a href="#" class="card-link">View Details →</a>
      </div>

      <div class="service-card">
        <div>
          <span class="icon-box">🌾</span>
          <div class="card-title">Zakat</div>
          <p style="color: var(--text-muted);">Purify your wealth through our Zakat services, ensuring accurate distribution to rightful recipients.</p>
        </div>
        <a href="#" class="card-link">View Details →</a>
      </div>

      <div class="service-card">
        <div>
          <span class="icon-box">⚖️</span>
          <div class="card-title">Khums</div>
          <p style="color: var(--text-muted);">Easily fulfill the obligation of paying Khums with proper calculation and Shariah compliance.</p>
        </div>
        <a href="#" class="card-link">View Details →</a>
      </div>

      <div class="service-card">
        <div>
          <span class="icon-box">🕯️</span>
          <div class="card-title">Ijarah</div>
          <p style="color: var(--text-muted);">Hire someone to perform religious duties (prayers/fasts) on behalf of your departed loved ones.</p>
        </div>
        <a href="#" class="card-link">View Details →</a>
      </div>

      <div class="service-card">
        <div>
          <span class="icon-box">🛡️</span>
          <div class="card-title">Expiation</div>
          <p style="color: var(--text-muted);">Make up for missed fasts or broken oaths through properly guided expiation services.</p>
        </div>
        <a href="#" class="card-link">View Details →</a>
      </div>

      <div class="service-card">
        <div>
          <span class="icon-box">🐑</span>
          <div class="card-title">Sacrifice</div>
          <p style="color: var(--text-muted);">Sadqah, Expiation or Aqiqah Qurbani on your behalf with complete adherence to Islamic principles.</p>
        </div>
        <a href="#" class="card-link">View Details →</a>
      </div>

    </div>
  </div>

  <div class="quote-box animate-load delay-2">
    <strong style="color: var(--accent); text-transform: uppercase; letter-spacing: 1px;">Quote of the Day</strong>
    <h3 style="margin-top: 10px;">Prophet Muhammad (SAWW)</h3>
    
    <div class="arabic-text">
      ظِلُّ الْمُؤْمِنِ يَوْمَ الْقِيَامَةِ صَدَقَتُهُ
    </div>
    
    <p style="font-style: italic; font-size: 1.2rem; color: #555;">
      "The believer\'s shade on the Day of Resurrection will be his charity"
    </p>
    <br>
    <a href="#" class="hero-btn" style="background: #ef4444; box-shadow: 0 4px 15px rgba(239, 68, 68, 0.4);">❤️ GIVE TODAY</a>
  </div>

  <div class="animate-load delay-3">
    <h2 style="text-align: center;">Popular Courses 📚</h2>
    <p style="text-align: center; color: var(--text-muted); margin-bottom: 30px;">Pick A Course To Get Started</p>
    
    <div class="grid-container" style="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));">
      
      <div class="course-card">
        <div class="course-icon">💡</div>
        <div class="course-info">
          <strong>Ethics (Akhlaq)</strong><br>
          <span style="font-size: 0.85rem; color:#666;">Path to Moral Perfection</span>
        </div>
        <a href="#" class="course-btn">Enroll</a>
      </div>

      <div class="course-card">
        <div class="course-icon">📜</div>
        <div class="course-info">
          <strong>Islamic History</strong><br>
          <span style="font-size: 0.85rem; color:#666;">Master the Narrative</span>
        </div>
        <a href="#" class="course-btn">Enroll</a>
      </div>

      <div class="course-card">
        <div class="course-icon">⚖️</div>
        <div class="course-info">
          <strong>Jurisprudence (Fiqh)</strong><br>
          <span style="font-size: 0.85rem; color:#666;">Foundations of Law</span>
        </div>
        <a href="#" class="course-btn">Enroll</a>
      </div>

      <div class="course-card">
        <div class="course-icon">📖</div>
        <div class="course-info">
          <strong>Nahjul Balagha</strong><br>
          <span style="font-size: 0.85rem; color:#666;">Book of Eloquence</span>
        </div>
        <a href="#" class="course-btn">Enroll</a>
      </div>

      <div class="course-card">
        <div class="course-icon">🕋</div>
        <div class="course-info">
          <strong>Quran</strong><br>
          <span style="font-size: 0.85rem; color:#666;">Arabic & Tajweed</span>
        </div>
        <a href="#" class="course-btn">Enroll</a>
      </div>

    </div>
  </div>

</div>'
    ]
];
