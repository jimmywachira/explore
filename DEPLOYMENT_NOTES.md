# Deployment Notes

## SEO Setup

- Sitemap URL for Google Search Console: `https://your-domain.com/sitemap.xml`
- Robots URL: `https://your-domain.com/robots.txt`
- Submit the sitemap in Google Search Console after deployment and confirm indexing for the main pages.
- Keep the canonical URLs aligned with the production domain in the shared head partial.

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
