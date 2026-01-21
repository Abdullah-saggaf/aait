# NEO Lab & Instrumentation Services - Setup Guide

## Project Overview
Laravel 11 + Bootstrap 5 front-end website for calibration and inspection services company.
Premium design matching mtech-sa.com quality standards.

## Quick Start

### Prerequisites
- PHP 8.2+
- Composer
- Node.js & npm

### Installation Steps

1. **Install PHP Dependencies**
```bash
composer install
```

2. **Install Node Dependencies**
```bash
npm install
```

3. **Environment Setup**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Build Assets**
```bash
npm run build
```

5. **Start Development Server**
```bash
php artisan serve
```

Visit: http://127.0.0.1:8000

## Features

### Brand Colors
- Primary Navy: #151741
- Accent Lime: #B0D236
- Light Background: #ECF4E0

### Pages (17 Total)

**Main:**
- Home (/)

**About Us (/about):**
- About Us
- Our Aim & Mission
- Quality Policy

**Scope & Services (/services):**
- Calibration Services
- Inspection Services
- Certification Services
- Maintenance & Repair Services
- Training Services

**Partners (/partners)**

**License Validation (/license):**
- System Certification
- Equipment Certification
- Personal Certification

**Contact Us (/contact)**

### Interactive Features

1. **Navbar Scroll Effect**
   - Adds shadow on scroll
   - Hover dropdowns

2. **KPI Counter Animation**
   - Count-up animation on scroll into view
   - Homepage statistics

3. **Solutions Overview Tabs**
   - Category pill switching
   - Dynamic content display
   - Smooth transitions

4. **Contact Form (Demo)**
   - Prevents real submission
   - Shows success alert
   - Client-side validation

5. **License Validation (Demo)**
   - Certificate ID input
   - Demo validation alert

## File Structure

```
laravel-app/
├── public/
│   ├── css/
│   │   └── theme.css (compiled)
│   ├── js/
│   │   └── site.js (interactions)
│   └── images/
│       ├── logo.svg
│       ├── logo1.svg
│       ├── logo2.svg
│       └── logo3.svg
├── resources/
│   ├── css/
│   │   └── theme.css (source)
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── partials/
│       │   ├── navbar.blade.php
│       │   └── footer.blade.php
│       ├── components/
│       │   ├── page-hero.blade.php
│       │   └── cta-section.blade.php
│       ├── home.blade.php
│       ├── about/
│       │   ├── index.blade.php
│       │   ├── mission.blade.php
│       │   └── quality.blade.php
│       ├── services/
│       │   ├── calibration.blade.php
│       │   ├── inspection.blade.php
│       │   ├── certification.blade.php
│       │   ├── maintenance.blade.php
│       │   └── training.blade.php
│       ├── partners/
│       │   └── index.blade.php
│       ├── license/
│       │   ├── system.blade.php
│       │   ├── equipment.blade.php
│       │   └── personal.blade.php
│       └── contact/
│           └── index.blade.php
└── routes/
    └── web.php (all routes)
```

## Development

### Build Assets for Development
```bash
npm run dev
```

### Build Assets for Production
```bash
npm run build
```

### Watch for Changes
```bash
npm run dev
```

## Design System

### Typography
- Headings: Bold, Navy (#151741)
- Body: System fonts, #333
- Line height: 1.7

### Components

**Cards (neo-card):**
- 16px border radius
- Subtle shadow
- Hover lift effect
- 2rem padding

**Buttons:**
- Primary: Lime background (#B0D236)
- Outline: Lime border
- 8px border radius
- Hover lift + shadow

**Sections:**
- Consistent padding: 5rem (py-5)
- Alternating backgrounds
- Centered titles with lime underline

### Interactions

**Smooth Transitions:**
- 0.3s cubic-bezier timing
- Transform on hover
- Color transitions

**Animations:**
- Fade in on load
- Count up for KPIs
- Smooth tab switching

## Content Guidelines

### Company Info
- Established: 2005 (under Metals Services)
- Reorganized: April 24, 2014
- ISO/IEC 17025:2005 aligned
- ARAMCO approved personnel
- Traceability: NIST, NPL (UK), PTB

### Calibration Scope
- Pressure
- Temperature / Humidity
- Electrical
- Electronics
- Torque
- Dimensional
- Mass
- Control Valves
- Onsite Services
- Acoustical

## Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Performance
- Minimal JavaScript (vanilla JS only)
- Optimized CSS (6.59 KB gzipped)
- Bootstrap 5 from CDN
- Fast page loads

## Notes

- **NO DATABASE**: Pure front-end Laravel
- **NO BACKEND**: All forms are demo only
- **NO EMAIL**: Contact form shows alert
- **DEMO VALIDATION**: License validation is simulated

## Customization

### Change Brand Colors
Edit `resources/css/theme.css`:
```css
:root {
  --neo-navy: #151741;
  --neo-lime: #B0D236;
  --neo-light: #ECF4E0;
}
```

### Add New Pages
1. Create view in `resources/views/`
2. Add route in `routes/web.php`
3. Update navbar in `partials/navbar.blade.php`

### Modify Interactions
Edit `public/js/site.js` for behavior changes.

## Support
For questions or issues, refer to Laravel documentation:
https://laravel.com/docs

---

**Project Status:** ✅ Production Ready
**Version:** 1.0.0
**Last Updated:** January 21, 2026
