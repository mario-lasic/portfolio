# Mario Lasić — Portfolio

A personal portfolio for presenting my skills and projects to potential employers. I am building it with Laravel and learning Vue through the project.

## Project status

The initial development foundation is complete. The home and projects pages currently contain placeholder content, with navigation handled by Inertia. Local development and the initial production asset build have been verified.

Planned for the first release:

- An introduction and skills overview.
- A dedicated page showcasing real projects.
- A downloadable CV.
- A contact form.
- A custom, responsive design.
- A public deployment.

## Technology

- Laravel 13
- Vue 3 with JavaScript
- Inertia.js 3
- Vite 8

The default local setup uses SQLite for Laravel infrastructure, including database-backed sessions and cache.

## Requirements

- PHP 8.4.1 or newer, compatible with the committed Composer lock file; development verified with PHP 8.5.
- The PHP extensions required by Laravel, including PDO SQLite.
- Composer 2.
- Node.js 22.12 or newer and npm.

## First-time local setup

The following commands use a Unix shell:

```bash
git clone https://github.com/mario-lasic/portfolio.git
cd portfolio
composer install
npm ci
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
```

The default environment example uses SQLite and logs outgoing mail locally.

## Local development

Start Laravel in one terminal:

```bash
php artisan serve
```

Start Vite in a second terminal, from the project directory:

```bash
npm run dev
```

Open [http://127.0.0.1:8000](http://127.0.0.1:8000).

Current routes:

| Route | Page |
| --- | --- |
| `/` | Home |
| `/projects` | Projects |

## Check production assets locally

Stop the Vite development server, then build the frontend assets:

```bash
npm run build
```

Keep the Laravel development server running and refresh the browser. Laravel will load the generated assets from `public/build`.

## Manual checks

- Open both routes directly and refresh each page.
- Navigate between Home and Projects using their links.
- Check the browser's Back and Forward buttons.
- Check the browser console for errors.
- Confirm that the pages also work with built assets after stopping Vite.
