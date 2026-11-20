# Kush Synthetics Pvt. Ltd. - Static Website

A high-performance static website for **Kush Synthetics Pvt. Ltd.**, ready for direct deployment to **GitHub Pages**, **Cloudflare Pages**, or any static web host.

---

## Site Structure & Routes

| Route | Source File | Description |
| :--- | :--- | :--- |
| `/` or `/index.html` | `index.html` | Homepage & company overview |
| `/about.html` | `about.html` | About Us, History, Mission & Infrastructure |
| `/products.html` | `products.html` | Products gallery & overview |
| `/quality.html` | `quality.html` | Quality Management System & ISO 9001:2008 Certifications |
| `/news.html` | `news.html` | News & announcements |
| `/contact.html` | `contact.html` | Contact information (India, USA, Europe) |
| `/ks-bix.html` | `ks-bix.html` | Product details: KS - BIX (Biaxial Fabric) |
| `/ks-qux.html` | `ks-qux.html` | Product details: KS - QUX (Quadaxial Fabric) |
| `/ks-trx.html` | `ks-trx.html` | Product details: KS - TRX (Triaxial Fabric) |
| `/ks-ud.html` | `ks-ud.html` | Product details: KS – UD 0° or 90° (Unidirectional Fabric) |
| `/stitch-bonded.html` | `stitch-bonded.html` | Product details: Stitch Bonded Non Crimp Fabrics (NCFs) |

---

## Directory Organization

```
kush-synthetics/
├── .gitattributes          # Configures linguist to vendor PHP backup
├── .gitignore              # Ignores OS/IDE cache and temp files
├── .nojekyll               # Disables Jekyll processing on GitHub Pages
├── index.html              # Static HTML Homepage
├── about.html              # Static HTML About page
├── products.html           # Static HTML Products page
├── quality.html            # Static HTML Quality page
├── news.html               # Static HTML News page
├── contact.html            # Static HTML Contact page
├── ks-bix.html             # Static HTML Biaxial Fabric page
├── ks-qux.html             # Static HTML Quadaxial Fabric page
├── ks-trx.html             # Static HTML Triaxial Fabric page
├── ks-ud.html              # Static HTML Unidirectional Fabric page
├── stitch-bonded.html      # Static HTML Stitch Bonded Fabric page
├── robots.txt              # Search engine crawler instructions
├── sitemap.xml             # XML Sitemap for SEO indexing
├── README.md               # Project documentation
├── assets/
│   ├── css/                # Stylesheets (bootstrap, font-awesome, style.css)
│   ├── fonts/              # Icon fonts (FontAwesome, Glyphicons)
│   ├── images/             # Images & logos
│   └── js/                 # JavaScript libraries & main script
└── _php_backup/            # Full modular PHP source & generator
    ├── modular/
    │   ├── head.php        # Modular HTML <head> with meta & CSS links
    │   ├── header.php      # Modular <header> with logo & menu
    │   ├── menu.php        # Modular navigation menu with active state
    │   └── footer.php      # Modular <footer> & script tags
    ├── generate_static.php # Static HTML generation script
    ├── index.php
    ├── about.php
    ├── products.php
    ├── quality.php
    ├── news.php
    ├── contact.php
    ├── ks-bix.php
    ├── ks-qux.php
    ├── ks-trx.php
    ├── ks-ud.php
    └── stitch-bonded.php
```

---

## How to Update Content & Regenerate Static HTML

The website source code is organized into clean, reusable PHP modules inside `_php_backup/modular/`:
- **Header & Logo**: Edit `_php_backup/modular/header.php`
- **Navigation Bar**: Edit `_php_backup/modular/menu.php`
- **Footer & Scripts**: Edit `_php_backup/modular/footer.php`
- **Meta / Head**: Edit `_php_backup/modular/head.php`
- **Page Contents**: Edit the respective page in `_php_backup/<page>.php`

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
