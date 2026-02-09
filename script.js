// CapitolScope JavaScript

// News Data
const newsData = {
  categories: [
    { id: "politics", name: "US Politics" },
    { id: "economy", name: "Economy & Business" },
    { id: "world", name: "World News" },
    { id: "technology", name: "Technology" },
    { id: "health", name: "Health" },
    { id: "sports", name: "Sports" },
    { id: "entertainment", name: "Entertainment" },
    { id: "opinion", name: "Opinion & Analysis" }
  ],
  
  articles: [
    {
      id: "1",
      category: "politics",
      headline: "White House Announces New Economic Measures",
      summary: "President unveils comprehensive plan to address inflation and boost middle-class economic growth through targeted tax reforms and infrastructure investment.",
      content: `The White House today announced a sweeping set of economic measures aimed at addressing concerns about inflation and promoting sustainable economic growth. The new plan includes targeted tax reforms, increased infrastructure investment, and support for small businesses across the country.\n\nIn a press conference this morning, the President outlined the key components of the economic package, which has been in development for the past six months in consultation with economic advisors and congressional leaders from both parties.\n\n"This is about building an economy that works for everyone, not just those at the top," the President stated. "We're taking concrete steps to reduce the burden on middle-class families while ensuring our economy remains strong and competitive."\n\nThe measures include tax credits for working families, investment in clean energy infrastructure, and programs to support workforce development. Economic experts have offered mixed reviews of the plan, with some praising its comprehensive approach while others express concerns about implementation costs.\n\nCongressional leaders are expected to review the proposals in the coming weeks, with hearings scheduled to begin next month.`,
      author: "Sarah Johnson",
      publishDate: "January 23, 2026",
      image: "https://images.unsplash.com/photo-1467251589161-f9c68fa14c59?w=1080",
      featured: true
    },
    {
      id: "2",
      category: "world",
      headline: "Major Weather Alert Issued Across Multiple US States",
      summary: "National Weather Service warns of severe winter storm system approaching the Midwest and East Coast, urging residents to prepare for heavy snow and ice.",
      content: `A major winter storm system is barreling toward the Midwest and East Coast, prompting the National Weather Service to issue weather alerts for more than 20 states.`,
      author: "Michael Torres",
      publishDate: "January 23, 2026",
      image: "https://images.unsplash.com/photo-1626635050547-0e5ca1baa9a9?w=1080",
      featured: true
    },
    {
      id: "3",
      category: "technology",
      headline: "Tech Giants Report Record Quarterly Growth",
      summary: "Leading technology companies exceed market expectations with strong earnings reports, driven by AI innovations and cloud services expansion.",
      content: `Major technology companies delivered impressive quarterly earnings this week, surpassing Wall Street expectations.`,
      author: "David Chen",
      publishDate: "January 22, 2026",
      image: "https://images.unsplash.com/photo-1762341114881-669da93fef88?w=1080",
      featured: true
    }
  ]
};

// Mobile Menu Toggle
function toggleMobileMenu() {
  const menu = document.getElementById('mobileMenu');
  if (menu) {
    menu.classList.toggle('active');
  }
}

// Hero Slider
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(index) {
  slides.forEach(slide => slide.classList.remove('active'));
  dots.forEach(dot => dot.classList.remove('active'));
  
  if (index >= slides.length) currentSlide = 0;
  if (index < 0) currentSlide = slides.length - 1;
  
  if (slides[currentSlide]) {
    slides[currentSlide].classList.add('active');
  }
  if (dots[currentSlide]) {
    dots[currentSlide].classList.add('active');
  }
}

function nextSlide() {
  currentSlide++;
  showSlide(currentSlide);
}

function prevSlide() {
  currentSlide--;
  showSlide(currentSlide);
}

function goToSlide(index) {
  currentSlide = index;
  showSlide(currentSlide);
}

// Auto-advance slider
let sliderInterval;
function startSlider() {
  sliderInterval = setInterval(nextSlide, 5000);
}

function stopSlider() {
  clearInterval(sliderInterval);
}

// Initialize slider
if (slides.length > 0) {
  showSlide(0);
  startSlider();
  
  // Pause on hover
  const sliderContainer = document.querySelector('.slider-container');
  if (sliderContainer) {
    sliderContainer.addEventListener('mouseenter', stopSlider);
    sliderContainer.addEventListener('mouseleave', startSlider);
  }
}

// Get article by ID
function getArticleById(id) {
  return newsData.articles.find(article => article.id === id);
}

// Get articles by category
function getArticlesByCategory(categoryId) {
  return newsData.articles.filter(article => article.category === categoryId);
}

// Get category name
function getCategoryName(categoryId) {
  const category = newsData.categories.find(cat => cat.id === categoryId);
  return category ? category.name : '';
}

// Load article detail
function loadArticleDetail() {
  const urlParams = new URLSearchParams(window.location.search);
  const articleId = urlParams.get('id');
  
  if (!articleId) {
    window.location.href = 'index.html';
    return;
  }
  
  const article = getArticleById(articleId);
  
  if (!article) {
    window.location.href = '404.html';
    return;
  }
  
  // Update page content
  document.getElementById('categoryBadge').textContent = getCategoryName(article.category);
  document.getElementById('articleHeadline').textContent = article.headline;
  document.getElementById('articleSummary').textContent = article.summary;
  document.getElementById('articleAuthor').textContent = article.author;
  document.getElementById('articleDate').textContent = article.publishDate;
  
  if (article.image) {
    document.getElementById('articleImage').src = article.image;
    document.getElementById('articleImage').alt = article.headline;
  }
  
  // Format content with paragraphs
  const contentDiv = document.getElementById('articleContent');
  if (contentDiv && article.content) {
    const paragraphs = article.content.split('\n\n');
    contentDiv.innerHTML = paragraphs.map(p => `<p>${p}</p>`).join('');
  }
  
  // Update breadcrumb
  document.getElementById('categoryLink').href = `category.html?id=${article.category}`;
  document.getElementById('categoryLink').textContent = getCategoryName(article.category);
}

// Load category page
function loadCategoryPage() {
  const urlParams = new URLSearchParams(window.location.search);
  const categoryId = urlParams.get('id');
  
  if (!categoryId) {
    window.location.href = 'index.html';
    return;
  }
  
  const category = newsData.categories.find(cat => cat.id === categoryId);
  
  if (!category) {
    window.location.href = '404.html';
    return;
  }
  
  document.getElementById('categoryTitle').textContent = category.name;
  
  const articles = getArticlesByCategory(categoryId);
  const grid = document.getElementById('newsGrid');
  
  if (articles.length === 0) {
    grid.innerHTML = '<p class="text-center">No articles available in this category yet.</p>';
    return;
  }
  
  grid.innerHTML = articles.map(article => `
    <a href="article.html?id=${article.id}" class="news-card">
      <img src="${article.image}" alt="${article.headline}" class="news-image">
      <div class="news-content">
        <span class="news-category">${getCategoryName(article.category)}</span>
        <h3 class="news-headline">${article.headline}</h3>
        <p class="news-summary">${article.summary}</p>
        <div class="news-meta">
          <span>${article.author}</span>
          <span>${article.publishDate}</span>
        </div>
      </div>
    </a>
  `).join('');
}

// Initialize page-specific functions
document.addEventListener('DOMContentLoaded', function() {
  // Check which page we're on and initialize accordingly
  if (document.getElementById('articleHeadline')) {
    loadArticleDetail();
  } else if (document.getElementById('categoryTitle')) {
    loadCategoryPage();
  }
});
