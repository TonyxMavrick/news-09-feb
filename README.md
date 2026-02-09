# CapitolScope - Static HTML Version

This is a converted version of the CapitolScope news website in plain HTML, CSS, and JavaScript.

## Files Included

### Main Pages
- `index.html` - Homepage with hero slider, category cards, and latest news
- `article.html` - Article detail page (dynamic content loaded via URL parameter)
- `category.html` - Category listing page (dynamic content loaded via URL parameter)
- `about.html` - About Us page
- `contact.html` - Contact page
- `privacy.html` - Privacy Policy (needs to be created)
- `terms.html` - Terms & Conditions (needs to be created)

### Assets
- `styles.css` - Complete stylesheet with responsive design
- `script.js` - JavaScript for interactivity and dynamic content

## How to Use

### Option 1: Open Directly in Browser
1. Navigate to the `/public` folder
2. Double-click `index.html` to open in your default browser
3. All internal links will work correctly

### Option 2: Local Web Server (Recommended)
For best results, serve the files through a local web server:

**Using Python:**
```bash
cd public
python -m http.server 8000
```
Then open http://localhost:8000 in your browser

**Using Node.js (http-server):**
```bash
npm install -g http-server
cd public
http-server
```

**Using PHP:**
```bash
cd public
php -S localhost:8000
```

## Features

✅ **Fully Responsive** - Works on desktop, tablet, and mobile
✅ **Auto-advancing Hero Slider** - Showcases featured articles
✅ **Category Navigation** - Browse news by topic
✅ **Dynamic Content** - Articles load via JavaScript
✅ **No Dependencies** - Pure HTML/CSS/JS (no frameworks needed)
✅ **Modern Design** - Clean, professional news website aesthetic

## Page Structure

### Homepage (`index.html`)
- Hero slider with 3 featured articles
- 8 category cards for easy navigation
- Latest news grid
- "Why Trust CapitolScope" section
- Responsive header and footer

### Article Page (`article.html`)
Opens with URL parameter: `article.html?id=1`
- Full article content
- Author information and publish date
- Social sharing buttons
- Breadcrumb navigation
- Featured image

### Category Page (`category.html`)
Opens with URL parameter: `category.html?id=politics`
- Filtered news by category
- Grid layout of articles
- Dynamic page title

## Customization

### Adding More Articles
Edit the `newsData.articles` array in `script.js`:

```javascript
{
  id: "4",
  category: "politics",
  headline: "Your Headline",
  summary: "Your summary...",
  content: "Full article content...",
  author: "Author Name",
  publishDate: "January 23, 2026",
  image: "https://your-image-url.jpg",
  featured: false
}
```

### Changing Colors
The main brand color is defined in `styles.css`. Search for `#b91c1c` (red-700) and replace with your color.

### Adding New Pages
1. Copy the structure from any existing page
2. Update the header/footer if needed
3. Add your content in the main section
4. Link to it from the navigation

## Browser Compatibility

Works in all modern browsers:
- Chrome/Edge (latest)
- Firefox (latest)
- Safari (latest)
- Mobile browsers (iOS Safari, Chrome)

## Notes

- **Images**: Currently using Unsplash for placeholder images
- **No Backend**: All content is stored in JavaScript (client-side only)
- **SEO Ready**: Each page has proper meta tags and semantic HTML
- **Accessible**: Uses semantic HTML and proper ARIA labels

## Converting Back to React

If you need to convert back to React:
1. Use the React Router setup from the original project
2. Convert HTML files to JSX components
3. Move data from `script.js` to a data file
4. Use React hooks for state management

## Production Deployment

For production:
1. Host all files in the `/public` folder
2. Ensure proper MIME types are served
3. Enable GZIP compression on your server
4. Add proper caching headers
5. Consider adding a sitemap.xml for SEO

## Support

For the original React version, check the main project repository.
