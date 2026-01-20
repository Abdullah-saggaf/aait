# Quick Start Guide

## 🚀 Running the Website

The website is ready to run! Follow these simple steps:

### Option 1: Quick Start (Already Set Up)

```bash
# Navigate to project directory
cd C:\Users\sagga\OneDrive\Desktop\AAIT\laravel-app

# Start the development server
php artisan serve
```

Then open your browser to: **http://localhost:8000**

### Option 2: Fresh Installation

If starting from scratch or on a new machine:

```bash
# 1. Install PHP dependencies
composer install

# 2. Copy environment file
cp .env.example .env

# 3. Generate application key
php artisan key:generate

# 4. Install Node dependencies
npm install

# 5. Build assets
npm run build

# 6. Start server
php artisan serve
```

---

## 📄 Page URLs

Visit these pages in your browser:

### Main Pages
- Homepage: http://localhost:8000
- Contact: http://localhost:8000/contact

### About Section
- About Us: http://localhost:8000/about
- Our Mission: http://localhost:8000/about/mission
- Quality Policy: http://localhost:8000/about/quality

### Services
- Calibration: http://localhost:8000/services/calibration
- Inspection: http://localhost:8000/services/inspection
- Certification: http://localhost:8000/services/certification
- Maintenance: http://localhost:8000/services/maintenance
- Training: http://localhost:8000/services/training

### Other Pages
- Partners: http://localhost:8000/partners
- System Certification: http://localhost:8000/license/system
- Equipment Certification: http://localhost:8000/license/equipment
- Personal Certification: http://localhost:8000/license/personal

---

## 🎨 Color Scheme

- **Navy:** #151741 (Primary - navbar, footer, headings)
- **Lime:** #B0D236 (Accent - buttons, links, highlights)
- **Light:** #ECF4E0 (Background)

---

## 📝 Quick Customization

### Change Logo
Replace: `public/images/logo.svg` with your logo file

### Edit Content
Files are in: `resources/views/`
- Homepage: `home.blade.php`
- About pages: `about/*.blade.php`
- Services: `services/*.blade.php`
- Contact: `contact/index.blade.php`

### Update Partners List
Edit: `routes/web.php` (line ~50, the $partners array)

### Change Colors
Edit: `resources/css/theme.css` (CSS variables at top)

---

## 🛠️ Development Commands

```bash
# Start development server
php artisan serve

# Build assets for development (with hot reload)
npm run dev

# Build assets for production
npm run build

# View routes
php artisan route:list

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

---

## ✅ What's Included

- ✅ 17 fully designed pages
- ✅ Responsive mobile design
- ✅ Bootstrap 5 components
- ✅ Custom navy/lime theme
- ✅ Contact form (front-end)
- ✅ SEO meta tags
- ✅ Bootstrap Icons
- ✅ Professional content
- ✅ No database needed

---

## 🌐 Browser Support

Works on:
- Chrome, Firefox, Safari, Edge (latest versions)
- Mobile browsers (iOS Safari, Chrome Mobile)
- All screen sizes (phone, tablet, desktop)

---

## 📦 Tech Stack

- Laravel 11.x
- Bootstrap 5.3.2
- Bootstrap Icons 1.11.1
- Vite build tool
- Blade templating

---

## 🎯 Key Features

- Dropdown navigation menus
- Active page highlighting
- Sticky navbar
- Responsive design
- Contact form with validation
- Service detail pages
- Partners showcase
- Certification information
- Company history and values

---

## 💡 Tips

1. **Logo**: The placeholder logo is at `public/images/logo.svg`. Replace it with your actual company logo for the best look.

2. **Content**: All content is editable in the Blade files. Feel free to adjust text, add images, or modify layouts.

3. **Colors**: The entire color scheme can be changed by editing just the CSS variables in `theme.css`.

4. **No Database**: This is a pure front-end site. The contact form shows a success message but doesn't store data. Add database support later if needed.

5. **Production**: When ready for production, run `npm run build` and deploy the entire Laravel project to your hosting.

---

## 🆘 Troubleshooting

**Server won't start?**
```bash
php artisan serve --port=8001  # Try a different port
```

**Assets not loading?**
```bash
npm run build  # Rebuild assets
```

**Page not found?**
```bash
php artisan route:clear  # Clear route cache
```

**General issues?**
```bash
php artisan optimize:clear  # Clear all caches
```

---

## 📞 Project Info

**Project:** National Engineering Organization Website
**Type:** Multi-page calibration & inspection company website
**Status:** ✅ Complete and ready to use
**Pages:** 17 fully functional pages
**Design:** Professional, corporate, mobile-responsive

---

**Happy browsing! 🎉**

Your website is live at: http://localhost:8000
