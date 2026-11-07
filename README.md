# Mario Lasić — Portfolio

A personal portfolio for presenting my skills and projects to potential employers. I am building it with Laravel and learning Vue through the project.

## Project status

Development is in progress. The home page includes an introduction, About, skills and a downloadable CV.
The project listing has responsive cards. Individual project pages render Markdown descriptions and show
technologies, status and a source-code link. The screenshot carousel has manual controls and a changing
image caption. The contact form is still being completed.

The source code remains public on GitHub and can be run locally. Public deployment is planned after a
larger showcase project has been completed and added to the portfolio.

First release scope:

- An introduction and skills overview.
- A project listing and individual project pages with descriptions and screenshots.
- A downloadable CV.
- A contact form.
- A custom, responsive design.
- A public deployment after the showcase project has been added.

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
| `/projects/{slug}` | Project details; unknown slugs and placeholders return 404 |

## Check production assets locally

Stop the Vite development server, then build the frontend assets:

```bash
npm run build
```

Keep the Laravel development server running and refresh the browser. Laravel will load the generated assets from `public/build`.

## Manual checks

- Open Home, Projects and `/projects/gymlog` directly and refresh each page.
- Check that unknown project slugs and `/projects/coming-soon` return 404.
- Navigate between Home and Projects using their links.
- Check the browser's Back and Forward buttons.
- Check the browser console for errors.
- Confirm that the pages also work with built assets after stopping Vite.
