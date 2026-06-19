# Deployment Guide

This project is ready for hosting after building assets.

## What to upload
- The full Laravel project folder: `agency-platform/`
- The built frontend assets in `public/build/`
- The portfolio images in `public/portfolio/`
- The background logo in `public/red-sea-logo.png`
- The optional video asset in `public/sea-video.mp4`

## Before upload
- Run `npm run build`
- Run `php artisan test`
- Set production environment values in `.env`
- Make sure `APP_KEY` is set
- Make sure storage permissions are writable

## Notes
- The `apply` page uses the built Vite assets.
- The portfolio gallery uses real images from `public/portfolio/`.
- The form submission flow is unchanged and still posts to `/apply`.

