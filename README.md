# Landscaping BD

Official website for **Landscaping BD** — professional landscaping, rooftop garden design, vertical gardening, natural grass installation, garden design, tree plantation, landscape maintenance and industrial support services across Bangladesh.

🌿 *Enhancing Nature. Elevating Spaces.*

## Tech Stack

- **Laravel 13** (PHP 8.2+)
- **Tailwind CSS v4** + **Vite**
- **Livewire 4** + **Alpine.js**
- **Filament 5** — admin panel (`/admin`)
- MySQL (production) / SQLite (local)

## Local Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
npm install && npm run build
php artisan migrate
php artisan serve
```

Then open `http://127.0.0.1:8000`. Admin panel at `/admin`.

## Features

- Modern, animated, fully responsive landscaping website
- Scroll-reveal animations, count-up stats, premium UI
- Pages: Home, About, Landscaping Services, Industrial Services, Projects, Gallery, Shop, Team, Contact
- Filament admin for managing dynamic content

---

© 2026 Landscaping BD. All Rights Reserved.
