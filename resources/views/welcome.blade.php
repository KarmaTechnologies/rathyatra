<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rathyatra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="{{ asset('images/iskconabidslogo.webp') }}" alt="ISKCON Abids">
        </div>
        <a href="#" class="donate-btn js-open-donate">Donate Now</a>
    </nav>

    <!-- Hero Section -->
    <section class="hero">

    <div class="hero-container">

        <div class="hero-left">

            <span class="festival-badge">
                ✨ Grand Rath Yatra Festival 2026
            </span>

            <h1 data-aos="fade-up">
                Support Lord Jagannath’s
                <span>Grand Rath Yatra</span>
                With Your Seva
            </h1>

            <p>
                Your contribution helps organize prasadam distribution,
                decoration, seva, and spiritual outreach.
            </p>

            <div class="hero-buttons">
                <a href="#" class="primary-btn js-open-donate">Donate Now</a>
                <a href="#choose-your-seva" class="secondary-btn">View Schemes</a>
            </div>

        </div>

        <div class="hero-right">
            <img src="images/jagannath_img.webp" alt="Lord Jagannath">
        </div>

    </div>

</section>

<!--section-3 progress bar-->
<section class="stats-section">
    <div class="stats-card">

        <div class="donation-progress" role="progressbar" aria-label="Donation progress" aria-valuemin="0" aria-valuemax="100" aria-valuenow="68">
            <div class="progress-fill" style="width: 68%;"></div>
        </div>

        <div class="stat-box">
            <h2>₹8.2L</h2>
            <p>Raised</p>
        </div>

        <div class="stat-box">
            <h2>₹12L</h2>
            <p>Goal</p>
        </div>

        <div class="stat-box">
            <h2>786</h2>
            <p>Donors</p>
        </div>

        <div class="stat-box">
            <h2>15</h2>
            <p>Days Left</p>
        </div>

    </div>


</section>


<!--section -4 donation schemes-->

<section class="seva-section" id="choose-your-seva">

  <div class="section-heading">
    <h2>Choose Your Seva</h2>
    <p>Support Rath Yatra through your preferred offering</p>
  </div>

  <!-- CATEGORY 1 -->
  <div class="category-block">
    <div class="category-label">
      <span>👑 &nbsp; Chief Patrons – Maha Annadan Sevas</span>
    </div>
    <div class="seva-grid">

      <div class="seva-card">
        <div class="seva-icon">🍽️</div>
        <h3>Maha Annadan (Diamond)</h3>
        <p>Grand sacred feeding for thousands of devotees.</p>
        <h4>₹1,51,000</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(0)">View</button>
        </div>
      </div>

      <div class="seva-card">
        <div class="seva-icon">🌟</div>
        <h3>Maha Annadan (Platinum)</h3>
        <p>Premium feast offering blessed to all pilgrims.</p>
        <h4>₹1,01,000</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(1)">View</button>
        </div>
      </div>

      <div class="seva-card">
        <div class="seva-icon">🥇</div>
        <h3>Maha Annadan (Gold)</h3>
        <p>Sacred mahaprasad feast for hundreds of bhaktas.</p>
        <h4>₹51,000</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(2)">View</button>
        </div>
      </div>

      <div class="seva-card">
        <div class="seva-icon">🥈</div>
        <h3>Maha Annadan (Silver)</h3>
        <p>Divine prasad distribution to devoted pilgrims.</p>
        <h4>₹21,000</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(3)">View</button>
        </div>
      </div>

    </div>
  </div>

  <!-- CATEGORY 2 -->
  <div class="category-block">
    <div class="category-label">
      <span>🍛 &nbsp; Annadan Sevas</span>
    </div>
    <div class="seva-grid">

      <div class="seva-card">
        <div class="seva-icon">🍛</div>
        <h3>Prasadam Seva</h3>
        <p>Feed devotees with sacred prasadam during the yatra.</p>
        <h4>₹1,101</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(4)">View</button>
        </div>
      </div>

      <div class="seva-card">
        <div class="seva-icon">🥗</div>
        <h3>Bhog Seva</h3>
        <p>Offer a complete bhog thali to the Lord daily.</p>
        <h4>₹5,100</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(5)">View</button>
        </div>
      </div>

      <div class="seva-card">
        <div class="seva-icon">🫙</div>
        <h3>Khichdi Seva</h3>
        <p>Sponsor khichdi mahaprasad for pilgrims.</p>
        <h4>₹2,100</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(6)">View</button>
        </div>
      </div>

    </div>
  </div>

  <!-- CATEGORY 3 -->
  <div class="category-block">
    <div class="category-label">
      <span>🙏 &nbsp; Darshan Sevas</span>
    </div>
    <div class="seva-grid">

      <div class="seva-card">
        <div class="seva-icon">🌸</div>
        <h3>Flower Decoration Seva</h3>
        <p>Offer beautiful flowers to adorn the Lord's chariot.</p>
        <h4>₹2,100</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(7)">View</button>
        </div>
      </div>

      <div class="seva-card">
        <div class="seva-icon">🚩</div>
        <h3>Rath Decoration Seva</h3>
        <p>Support the grand divine chariot decoration.</p>
        <h4>₹5,100</h4>
        <div class="card-actions">
          <button class="btn-donate js-open-donate">Donate</button>
          <button class="btn-view" onclick="openPanel(8)">View</button>
        </div>
      </div>

    </div>
  </div>

</section>

<!-- OVERLAY -->
<div class="panel-overlay" id="overlay" onclick="closePanel()"></div>

<!-- SLIDE-IN PANEL -->
<div class="seva-panel" id="sevaPanel">
  <div class="panel-header">
    <button class="panel-close" onclick="closePanel()">✕</button>
    <div class="panel-header-icon" id="panelIcon"></div>
    <h3 id="panelTitle"></h3>
    <div class="panel-price" id="panelPrice"></div>
  </div>
  <div class="panel-body">
    <div class="benefits-title">Seva Benefits</div>
    <ul class="benefits-list" id="benefitsList"></ul>
    <button class="read-more-btn" id="readMoreBtn" onclick="toggleReadMore()" style="display:none">
      + View all benefits
    </button>
  </div>
  <div class="panel-footer">
    <button class="btn-donate js-open-donate">🙏 Donate Now</button>
  </div>
</div>

<!-- Donation Form Popup -->
<div class="donate-overlay" id="donateOverlay"></div>

<div class="donate-modal" id="donateModal" role="dialog" aria-modal="true" aria-labelledby="donateModalTitle">
  <button class="donate-modal-close" id="donateModalClose" aria-label="Close donation form">✕</button>

  <h3 id="donateModalTitle">PERSONAL DETAILS</h3>

  <form class="donate-form" id="donateForm">
    <div class="form-field">
      <label for="donorName">Enter Name</label>
      <input type="text" id="donorName" name="name" required>
    </div>

    <div class="form-field">
      <label for="donorEmail">Enter Email Id</label>
      <input type="email" id="donorEmail" name="email" required>
    </div>

    <div class="form-field">
      <label for="donorMobile">Enter Mobile Number</label>
      <input type="tel" id="donorMobile" name="mobile" inputmode="numeric" required>
    </div>

    <div class="form-field">
      <label for="donorDob">Enter Date Of Birth</label>
      <input type="date" id="donorDob" name="dob" required>
    </div>

    <p class="terms-text">
      By continuing, you are agreeing to
      <a href="https://iskconhyderabad.com/terms-and-conditions/" target="_blank" rel="noopener noreferrer">
        Terms of Use and Privacy Policy
      </a>
    </p>

    <button type="submit" class="donate-submit-btn">Continue</button>
  </form>
</div>


<!--why donate section-->
<section class="why-section">

    <div class="why-container">

        <div class="why-image">
            <img src="images/why_donate.jpeg" alt="">
        </div>

        <div class="why-content">
            <h2>Why Your Donation Matters</h2>

            <div class="benefit-box">
                <h3>10,000+ Devotees</h3>
                <p>Support a festival attended by thousands.</p>
            </div>

            <div class="benefit-box">
                <h3>Prasadam Distribution</h3>
                <p>Help distribute sanctified food.</p>
            </div>

            <div class="benefit-box">
                <h3>Transparent Utilization</h3>
                <p>Every donation is used responsibly.</p>
            </div>
        </div>

    </div>
</section>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>



<footer class="footer">

    <div class="footer-container">

        <div class="footer-left">
            <img src="images/iskconabidslogo.webp" alt="ISKCON Logo">
        </div>

        <div class="footer-right">
            <p>📍 Hare Krishna Land,
5/4/743-745, Nampally Station Road
Opp. G Pulla Reddy, Abids,  Hyderabad,
Telangana, India 500001</p>
            <p>📞 +91 63005 68905</p>
            <p>✉ bidsiskcon@gmail.com </p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 ISKCON Abids Rath Yatra. All rights reserved.</p>
    </div>

</footer>

</body>
</html>