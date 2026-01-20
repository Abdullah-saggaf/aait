# National Engineering Organization - Calibration & Inspection Website

A professional, responsive multi-page website for a Saudi Arabian calibration & inspection company built with Laravel and Bootstrap 5.

## Project Overview

This website showcases calibration, inspection, certification, maintenance, and training services provided to industries across Saudi Arabia, including Saudi Aramco. The site features:

- Clean, corporate design with navy (#151741), lime (#B0D236), and light (#ECF4E0) color scheme
- Fully responsive Bootstrap 5 layout
- Multiple service pages with detailed information
- Partners showcase
- License validation information
- Contact form (front-end only demonstration)

## Tech Stack

- **Framework:** Laravel 11.x
- **UI:** Bootstrap 5.3.2 (via CDN)
- **Icons:** Bootstrap Icons 1.11.1
- **CSS:** Custom theme with CSS variables
- **Build Tool:** Vite

## Installation & Setup

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & npm

### Installation Steps

1. **Install PHP dependencies:**
   ```bash
   composer install
   ```

2. **Set up environment file:**
   ```bash
   cp .env.example .env
   ```

3. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

4. **Install Node dependencies:**
   ```bash
   npm install
   ```

5. **Build assets:**
   ```bash
   npm run dev
   ```
   
   Or for production:
   ```bash
   npm run build
   ```

6. **Add logo image:**
   - Place your company logo at `public/images/logo.png`
   - Recommended dimensions: ~200px width with transparent background
   - The logo will display at 40px height in the navbar

7. **Start development server:**
   ```bash
   php artisan serve
   ```

8. **Visit the website:**
   - Open your browser to: `http://localhost:8000`

## Site Structure

### Pages

- **Home** (`/`) - Landing page with hero, services overview, and CTAs
- **About Us** (`/about`) - Company history and information
  - Our Aim & Mission (`/about/mission`)
  - Quality Policy (`/about/quality`)
- **Services** - Five service pages:
  - Calibration Services (`/services/calibration`)
  - Inspection Services (`/services/inspection`)
  - Certification Services (`/services/certification`)
  - Maintenance & Repair (`/services/maintenance`)
  - Training Services (`/services/training`)
- **Partners** (`/partners`) - Partner companies showcase
- **License Validation** - Three certification pages:
  - System Certification (`/license/system`)
  - Equipment Certification (`/license/equipment`)
  - Personal Certification (`/license/personal`)
- **Contact Us** (`/contact`) - Contact form (front-end demo)

### Color Scheme

The site uses a custom color palette defined in `resources/css/theme.css`:

- **Navy:** `#151741` - Primary brand color (navbar, footer, headings)
- **Lime:** `#B0D236` - Accent color (buttons, highlights, links)
- **Light:** `#ECF4E0` - Background color

### Key Features

1. **Responsive Navigation** - Mobile-friendly navbar with dropdowns
2. **Active States** - Current page highlighting in navigation
3. **Consistent Branding** - Navy and lime theme throughout
4. **Bootstrap Components** - Cards, alerts, forms, and icons
5. **SEO Ready** - Meta tags and semantic HTML
6. **Contact Form** - Client-side validation with success message

## Customization

### Updating Content

- **Company information:** Edit views in `resources/views/about/`
- **Services:** Edit views in `resources/views/services/`
- **Partners list:** Edit the array in `routes/web.php` (partners route)
- **Contact info:** Edit `resources/views/contact/index.blade.php`

### Changing Colors

Edit `resources/css/theme.css` and update the CSS variables:
```css
:root{
  --neo-navy: #151741;    /* Change primary color */
  --neo-lime: #B0D236;    /* Change accent color */
  --neo-light: #ECF4E0;   /* Change background color */
}
```

### Adding Database (Optional)

This is a front-end only implementation. To add database functionality:

1. Configure `.env` database settings
2. Create migrations: `php artisan make:migration create_table_name`
3. Run migrations: `php artisan migrate`
4. Create models: `php artisan make:model ModelName`
5. Add controllers: `php artisan make:controller ControllerName`

## File Structure

```
laravel-app/
├── app/
│   └── Http/Controllers/          (Controllers created but not used - routes use closures)
├── public/
│   └── images/
│       └── logo.png               (Add your logo here)
├── resources/
│   ├── css/
│   │   └── theme.css              (Custom CSS theme)
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php      (Main layout)
│       ├── partials/
│       │   ├── navbar.blade.php   (Navigation)
│       │   └── footer.blade.php   (Footer)
│       ├── about/                 (About pages)
│       ├── services/              (Service pages)
│       ├── partners/              (Partners page)
│       ├── license/               (License/Certification pages)
│       ├── contact/               (Contact page)
│       └── home.blade.php         (Homepage)
└── routes/
    └── web.php                    (All routes defined here)
```

## About the Company

**National Engineering Organization** provides ISO/IEC 17025:2005 calibration and inspection services across Saudi Arabia.

- **Established:** 2005 (reorganized April 24, 2014)
- **Services:** Calibration, Inspection, Certification, Maintenance, Training
- **Clients:** Saudi Aramco, SABIC, and major industries across Saudi Arabia
- **Approvals:** ARAMCO-approved technical staff
- **Traceability:** NIST, NPL (UK), PTB, and national laboratories

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
