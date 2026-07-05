# The Green Hunters — Website (Laravel)

Static one-page site for The Green Hunters UG (scooter fleet cleaning,
rebalancing, battery swap, transport, and repair — Bremen), wrapped in a
Laravel project.

## What's included

```
routes/web.php                     -> single route, serves the homepage
resources/views/welcome.blade.php  -> the whole page
public/css/app.css                 -> all styles
public/js/app.js                   -> contact form placeholder handler
```

No controllers, no database, no models — just routing + a Blade view + assets.

## Setup

1. Create a fresh Laravel project:

    ```bash
    composer create-project laravel/laravel green-hunters
    cd green-hunters
    ```

2. Unzip these files into it (overwrites the default welcome page/route):

    ```bash
    unzip ~/Downloads/green-hunters-laravel-simple.zip -d .
    ```

3. Run it:

    ```bash
    php artisan serve
    ```

4. Open **http://127.0.0.1:8000**

That's the whole setup — no `.env` changes or `php artisan migrate` needed
for this version.

## Contact form

The form on the page doesn't send anywhere yet — submitting it just shows
an alert (see `public/js/app.js`). To make it functional, you'd add a route

- controller to handle the POST request (happy to build that when you want it).

## Notes

- Fonts load from Google Fonts via CDN — needs internet access to render
  the Archivo Expanded / Barlow Condensed / Inter / IBM Plex Mono typefaces.
- No Impressum/Datenschutz page yet — required for a live German business
  site, let me know if you want it added.
