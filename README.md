# Kush Synthetics Pvt. Ltd. - Static Website

A high-performance static website for **Kush Synthetics Pvt. Ltd.**, ready for direct deployment to **GitHub Pages**, **Cloudflare Pages**, or any static web host.

---

## Clean URL Directory Routes

All routes use folder-based clean URLs (with `index.html` inside each directory) so URLs are clean without `.html` extensions:

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
├── _php_backup/                    # Modular PHP Source & Static Generator
│   ├── modular/                    # Reusable PHP modules
│   │   ├── head.php
│   │   ├── header.php
│   │   ├── menu.php
│   │   └── footer.php
│   ├── index.php
│   ├── about/index.php
│   ├── products/
│   │   ├── index.php
│   │   ├── ks-ud/index.php
│   │   ├── ks-bix/index.php
│   │   ├── ks-trx/index.php
│   │   ├── ks-qux/index.php
│   │   └── stitch-bonded/index.php
│   ├── quality/index.php
│   ├── news/index.php
│   ├── contact/index.php
│   ├── generate_static.php         # Generates static HTML folder structure
│   └── original_php/               # Untouched original raw PHP backup
│
├── .gitattributes
├── .gitignore
├── .nojekyll
├── robots.txt
├── sitemap.xml
├── FOLDER_STRUCTURE.md
└── _php_backup.zip
```

---

## How to Update Content & Regenerate Static HTML

The website source code is organized into clean, reusable PHP modules inside `_php_backup/modular/`:
- **Header & Logo**: Edit `_php_backup/modular/header.php`
- **Navigation Bar**: Edit `_php_backup/modular/menu.php`
- **Footer & Scripts**: Edit `_php_backup/modular/footer.php`
- **Meta / Head**: Edit `_php_backup/modular/head.php`
- **Page Contents**: Edit the respective page in `_php_backup/<route>/index.php`

To regenerate all static HTML files automatically, run:

```bash
php _php_backup/generate_static.php
```

Or with full XAMPP PHP path on Windows:

```powershell
C:\xampp\php\php.exe _php_backup\generate_static.php
```

---

## GitHub Pages Deployment

1. Go to repository **Settings** on GitHub: `https://github.com/7dayscreation/kush-synthetics/settings/pages`
2. Under **Build and deployment** > **Source**, select **Deploy from a branch**.
3. Under **Branch**, select `main` branch and `/ (root)` folder.
4. Click **Save**. The website will be live in minutes at:  
   `https://7dayscreation.github.io/kush-synthetics/`
