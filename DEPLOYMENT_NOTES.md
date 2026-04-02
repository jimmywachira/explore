# Deployment Notes

## Vercel Behavior (Important)

- This project is a native PHP site (`index.php` + PHP view includes).
- On Vercel, PHP files are not executed in this setup, so the browser downloads `.php` files instead of rendering pages.
- This is expected when a PHP runtime is not present.

### Recommended Fix

- Deploy this repository to a PHP-capable host (for example: shared cPanel hosting, Render with PHP runtime, Railway with PHP, or a VPS with Apache/Nginx + PHP-FPM).
- Keep Vercel only if you migrate the app to a Vercel-supported runtime (for example Next.js/Node) or pre-render it as static HTML.

### Quick Verification After Moving Host

- Open `/` and ensure HTML renders (no file download prompt).
- Open `/about.php` and `/contact.php` to confirm PHP includes resolve.
- Open `/sitemap.xml` and `/robots.txt` to verify crawl endpoints.

## PHP Deployment (Recommended Path)

This repo now includes a production `Dockerfile` for PHP + Apache and rewrite support.

### Option A: Render (Fastest)

1. Push this repository to GitHub.
2. In Render, create a new **Web Service** from this repo.
3. Render will detect `render.yaml` and deploy the Docker service.
4. After deploy, use your Render URL (example):
   - `https://your-app.onrender.com/`
   - `https://your-app.onrender.com/about.php`
   - `https://your-app.onrender.com/contact.php`
   - `https://your-app.onrender.com/sitemap.xml`
   - `https://your-app.onrender.com/robots.txt`

### Option B: Railway / Any Docker Host

1. Create a new project from this GitHub repo.
2. Select Docker deployment.
3. Expose port `80`.
4. Verify the same 5 URLs above on the generated domain.

### Option C: VPS (Ubuntu + Docker)

```bash
git clone <your-repo-url>
cd explore
docker build -t xplore-site .
docker run -d --name xplore -p 80:80 xplore-site
```

Then verify:

- `http://<server-ip>/`
- `http://<server-ip>/about.php`
- `http://<server-ip>/contact.php`
- `http://<server-ip>/sitemap.xml`
- `http://<server-ip>/robots.txt`

## SEO Setup

- Sitemap URL for Google Search Console: `https://your-domain.com/sitemap.xml`
- Robots URL: `https://your-domain.com/robots.txt`
- Submit the sitemap in Google Search Console after deployment and confirm indexing for the main pages.
- Keep the canonical URLs aligned with the production domain in the shared head partial.

## Vercel Static Export Workflow

- Run `php static-export.php` before deploying to Vercel.
- This generates static pages (`index.html`, `about.html`, `contact.html`, etc.), `sitemap.xml`, and `robots.txt`.
- For production sitemap/robots domain values, run with a site URL:
  - PowerShell: `$env:STATIC_SITE_URL = "https://your-real-domain.com"; php static-export.php`
  - Cmd: `set STATIC_SITE_URL=https://your-real-domain.com && php static-export.php`
- `vercel.json` handles clean URLs and redirects old `.php` links to extensionless routes.

## Pages Covered

- Home
- About
- Contact
- Testimonials
- Car Importation
- Inspection Guidance
- Shipping and Clearing
- Vehicle Sourcing Support

## Verification Checklist

- Confirm `/sitemap.xml` returns valid XML.
- Confirm `/robots.txt` is publicly accessible.
- Verify each service page includes Service structured data.
- Check title tags and meta descriptions after production deploy.
