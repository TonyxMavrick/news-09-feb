<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CapitolScope - USA News & Daily Updates</title>
  <meta name="description" content="Delivering fast, reliable, and well-structured USA news with integrity and transparency.">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="header-top">
        <a href="index.html" class="logo">CapitolScope</a>
        
        <nav class="nav-desktop">
          <a href="about.html">About</a>
          <a href="contact.html">Contact</a>
        </nav>

        <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>

      <!-- Categories Navigation -->
      <nav class="categories-nav">
        <ul>
          <li><a href="category.html?id=politics">US Politics</a></li>
          <li><a href="category.html?id=economy">Economy & Business</a></li>
          <li><a href="category.html?id=world">World News</a></li>
          <li><a href="category.html?id=technology">Technology</a></li>
          <li><a href="category.html?id=health">Health</a></li>
          <li><a href="category.html?id=sports">Sports</a></li>
          <li><a href="category.html?id=entertainment">Entertainment</a></li>
          <li><a href="category.html?id=opinion">Opinion & Analysis</a></li>
        </ul>
      </nav>

      <!-- Mobile Menu -->
      <div id="mobileMenu" class="mobile-menu">
        <a href="category.html?id=politics">US Politics</a>
        <a href="category.html?id=economy">Economy & Business</a>
        <a href="category.html?id=world">World News</a>
        <a href="category.html?id=technology">Technology</a>
        <a href="category.html?id=health">Health</a>
        <a href="category.html?id=sports">Sports</a>
        <a href="category.html?id=entertainment">Entertainment</a>
        <a href="category.html?id=opinion">Opinion & Analysis</a>
        <div style="border-top: 1px solid #e5e7eb; margin-top: 0.5rem; padding-top: 0.5rem;">
          <a href="about.html">About</a>
          <a href="contact.html">Contact</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main>
    <!-- Hero Slider -->
    <section class="hero-slider">
      <div class="slider-container">
        <!-- Slide 1 -->
        <div class="slide active">
          <img src="https://images.unsplash.com/photo-1467251589161-f9c68fa14c59?w=1080" alt="White House" class="slide-image">
          <div class="slide-content">
            <span class="category-badge">US Politics</span>
            <h2 class="slide-headline">White House Announces New Economic Measures</h2>
            <p class="slide-summary">President unveils comprehensive plan to address inflation and boost middle-class economic growth.</p>
          </div>
          <a href="article.html?id=1" style="position: absolute; inset: 0; z-index: 5;"></a>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1626635050547-0e5ca1baa9a9?w=1080" alt="Winter Storm" class="slide-image">
          <div class="slide-content">
            <span class="category-badge">World News</span>
            <h2 class="slide-headline">Major Weather Alert Issued Across Multiple US States</h2>
            <p class="slide-summary">National Weather Service warns of severe winter storm system approaching.</p>
          </div>
          <a href="article.html?id=2" style="position: absolute; inset: 0; z-index: 5;"></a>
        </div>

        <!-- Slide 3 -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1762341114881-669da93fef88?w=1080" alt="Technology" class="slide-image">
          <div class="slide-content">
            <span class="category-badge">Technology</span>
            <h2 class="slide-headline">Tech Giants Report Record Quarterly Growth</h2>
            <p class="slide-summary">Leading technology companies exceed market expectations with strong earnings.</p>
          </div>
          <a href="article.html?id=3" style="position: absolute; inset: 0; z-index: 5;"></a>
        </div>

        <!-- Navigation Buttons -->
        <button class="slider-btn prev" onclick="prevSlide()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <button class="slider-btn next" onclick="nextSlide()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>

        <!-- Dots -->
        <div class="slider-dots">
          <span class="dot active" onclick="goToSlide(0)"></span>
          <span class="dot" onclick="goToSlide(1)"></span>
          <span class="dot" onclick="goToSlide(2)"></span>
        </div>
      </div>
    </section>

    <div class="container">
      <!-- Browse by Category -->
      <section class="mb-6">
        <h2 class="section-title">Browse by Category</h2>
        <div class="category-grid">
          <a href="category.html?id=politics" class="category-card">
            <h3>US Politics</h3>
          </a>
          <a href="category.html?id=economy" class="category-card">
            <h3>Economy & Business</h3>
          </a>
          <a href="category.html?id=world" class="category-card">
            <h3>World News</h3>
          </a>
          <a href="category.html?id=technology" class="category-card">
            <h3>Technology</h3>
          </a>
          <a href="category.html?id=health" class="category-card">
            <h3>Health</h3>
          </a>
          <a href="category.html?id=sports" class="category-card">
            <h3>Sports</h3>
          </a>
          <a href="category.html?id=entertainment" class="category-card">
            <h3>Entertainment</h3>
          </a>
          <a href="category.html?id=opinion" class="category-card">
            <h3>Opinion & Analysis</h3>
          </a>
        </div>
      </section>

      <!-- Latest News -->
      <section class="mb-6">
        <h2 class="section-title">Latest News</h2>
        <div class="news-grid">
          <a href="article.html?id=1" class="news-card">
            <img src="https://images.unsplash.com/photo-1467251589161-f9c68fa14c59?w=1080" alt="White House" class="news-image">
            <div class="news-content">
              <span class="news-category">US Politics</span>
              <h3 class="news-headline">White House Announces New Economic Measures</h3>
              <p class="news-summary">President unveils comprehensive plan to address inflation and boost middle-class economic growth through targeted tax reforms and infrastructure investment.</p>
              <div class="news-meta">
                <span>Sarah Johnson</span>
                <span>January 23, 2026</span>
              </div>
            </div>
          </a>

          <a href="article.html?id=2" class="news-card">
            <img src="https://images.unsplash.com/photo-1626635050547-0e5ca1baa9a9?w=1080" alt="Winter Storm" class="news-image">
            <div class="news-content">
              <span class="news-category">World News</span>
              <h3 class="news-headline">Major Weather Alert Issued Across Multiple US States</h3>
              <p class="news-summary">National Weather Service warns of severe winter storm system approaching the Midwest and East Coast, urging residents to prepare for heavy snow and ice.</p>
              <div class="news-meta">
                <span>Michael Torres</span>
                <span>January 23, 2026</span>
              </div>
            </div>
          </a>

          <a href="article.html?id=3" class="news-card">
            <img src="https://images.unsplash.com/photo-1762341114881-669da93fef88?w=1080" alt="Technology" class="news-image">
            <div class="news-content">
              <span class="news-category">Technology</span>
              <h3 class="news-headline">Tech Giants Report Record Quarterly Growth</h3>
              <p class="news-summary">Leading technology companies exceed market expectations with strong earnings reports, driven by AI innovations and cloud services expansion.</p>
              <div class="news-meta">
                <span>David Chen</span>
                <span>January 22, 2026</span>
              </div>
            </div>
          </a>
        </div>
      </section>

      <!-- Why Trust CapitolScope -->
      <section class="trust-section">
        <h2 class="section-title text-center">Why Trust CapitolScope</h2>
        <div class="trust-grid">
          <div class="trust-item">
            <div class="trust-icon">🇺🇸</div>
            <h3>USA-Focused Reporting</h3>
            <p style="font-size: 0.875rem; color: #6b7280;">Dedicated coverage of American news and events</p>
          </div>
          <div class="trust-item">
            <div class="trust-icon">✓</div>
            <h3>Fact-Checked Articles</h3>
            <p style="font-size: 0.875rem; color: #6b7280;">Every story verified for accuracy and credibility</p>
          </div>
          <div class="trust-item">
            <div class="trust-icon">⚖️</div>
            <h3>Neutral & Transparent</h3>
            <p style="font-size: 0.875rem; color: #6b7280;">Unbiased journalism committed to the truth</p>
          </div>
          <div class="trust-item">
            <div class="trust-icon">📰</div>
            <h3>Daily Updates</h3>
            <p style="font-size: 0.875rem; color: #6b7280;">Breaking news alerts and continuous coverage</p>
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-grid">
          <div>
            <h3>CapitolScope</h3>
            <p style="font-size: 0.875rem;">Delivering fast, reliable, and well-structured USA news with integrity and transparency.</p>
          </div>
          <div>
            <h4>Categories</h4>
            <ul>
              <li><a href="category.html?id=politics">US Politics</a></li>
              <li><a href="category.html?id=economy">Economy & Business</a></li>
              <li><a href="category.html?id=world">World News</a></li>
              <li><a href="category.html?id=technology">Technology</a></li>
            </ul>
          </div>
          <div>
            <h4>More News</h4>
            <ul>
              <li><a href="category.html?id=health">Health</a></li>
              <li><a href="category.html?id=sports">Sports</a></li>
              <li><a href="category.html?id=entertainment">Entertainment</a></li>
              <li><a href="category.html?id=opinion">Opinion & Analysis</a></li>
            </ul>
          </div>
          <div>
            <h4>Information</h4>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="privacy.html">Privacy Policy</a></li>
              <li><a href="terms.html">Terms & Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 CapitolScope. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
