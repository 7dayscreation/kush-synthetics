# Kush Synthetics Pvt. Ltd. - Static Website

A high-performance static website for **Kush Synthetics Pvt. Ltd.**, ready for direct deployment to **GitHub Pages**, **Cloudflare Pages**, or any static web host.

---

## Clean URL Directory Routes

All routes follow the directory-based clean URL pattern (`folder/index.html`) so URLs display cleanly without `.html` extensions:

| Clean URL Route | Source File | Description |
| :--- | :--- | :--- |
| `/` | `index.html` | Homepage & company overview |
| `/about/` | `about/index.html` | About Us, History, Mission & Infrastructure |
| `/products/` | `products/index.html` | Products gallery & overview |
| `/products/ks-ud/` | `products/ks-ud/index.html` | KS – UD 0° or 90° (Unidirectional Fabric) |
| `/products/ks-bix/` | `products/ks-bix/index.html` | KS - BIX (Biaxial Fabric) |
| `/products/ks-trx/` | `products/ks-trx/index.html` | KS - TRX (Triaxial Fabric) |
| `/products/ks-qux/` | `products/ks-qux/index.html` | KS - QUX (Quadaxial Fabric) |
| `/products/stitch-bonded/` | `products/stitch-bonded/index.html` | Stitch Bonded Non Crimp Fabrics (NCFs) |
| `/quality/` | `quality/index.html` | Quality Management System & ISO 9001:2008 Certifications |
| `/news/` | `news/index.html` | News & announcements |
| `/contact/` | `contact/index.html` | Contact information (India, USA, Europe) |

---

## Directory Organization

```
kush-synthetics/
│
├── index.html                      # Homepage (sitename/)
│
├── about/                          # About section (sitename/about/)
│   └── index.html
│
├── products/                       # Products section (sitename/products/)
│   ├── index.html                  # Products listing & gallery
│   ├── ks-ud/                      # (sitename/products/ks-ud/)
│   │   └── index.html
│   ├── ks-bix/                     # (sitename/products/ks-bix/)
│   │   └── index.html
│   ├── ks-trx/                     # (sitename/products/ks-trx/)
│   │   └── index.html
│   ├── ks-qux/                     # (sitename/products/ks-qux/)
│   │   └── index.html
│   └── stitch-bonded/              # (sitename/products/stitch-bonded/)
│       └── index.html
│
├── quality/                        # Quality section (sitename/quality/)
│   └── index.html
│
├── news/                           # News section (sitename/news/)
│   └── index.html
│
├── contact/                        # Contact section (sitename/contact/)
│   └── index.html
│
├── assets/                         # Centralized Assets
│   ├── css/                        # bootstrap, font-awesome, style.css
│   ├── fonts/                      # FontAwesome, Glyphicons
│   ├── images/                     # Logos, sliders, product photos
│   └── js/                         # jQuery, bootstrap, swiper, masonry, all.js
│
├── .gitattributes                  # Repository settings
├── .gitignore                      # Ignore rules
├── .nojekyll                       # GitHub Pages Jekyll bypass
├── CNAME                           # Custom domain configuration (kushsynthetics.co.in)
├── robots.txt                      # Crawler instructions
├── sitemap.xml                     # XML Sitemap
└── FOLDER_STRUCTURE.md             # Complete structure documentation
```

---

## GitHub Pages Deployment

1. Go to repository **Settings** on GitHub: `https://github.com/7dayscreation/kush-synthetics/settings/pages`
2. Under **Build and deployment** > **Source**, select **Deploy from a branch**.
3. Under **Branch**, select `main` branch and `/ (root)` folder.
4. Custom Domain is set via `CNAME` (`kushsynthetics.co.in`).
5. Ensure **Enforce HTTPS** is enabled.
