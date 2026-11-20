# Kush Synthetics - Complete Folder Structure

```
kush-synthetics/
│
├── 🌐 STATIC HTML PAGES (Hosting Ready)
│   ├── index.html                   # Home page / Company overview
│   ├── about.html                   # About Us, History, Mission & Infrastructure
│   ├── products.html                # Products gallery / listing
│   ├── quality.html                 # Quality Control & ISO 9001:2008 Certifications
│   ├── news.html                    # News & Updates
│   ├── contact.html                 # Contact details (India, USA, Europe)
│   ├── ks-bix.html                  # Product Detail: KS - BIX (Biaxial Fabric)
│   ├── ks-qux.html                  # Product Detail: KS - QUX (Quadaxial Fabric)
│   ├── ks-trx.html                  # Product Detail: KS - TRX (Triaxial Fabric)
│   ├── ks-ud.html                   # Product Detail: KS – UD 0° or 90° (Unidirectional Fabric)
│   └── stitch-bonded.html           # Product Detail: Stitch Bonded Non Crimp Fabrics (NCFs)
│
├── ⚙️ CONFIGURATION & SEO FILES
│   ├── .gitattributes               # Language stats configuration (keeps repo marked as HTML)
│   ├── .gitignore                   # Ignores temp, IDE, and OS cache files
│   ├── .nojekyll                    # Disables Jekyll processing on GitHub Pages
│   ├── robots.txt                   # Crawler rules for Google & other search engines
│   ├── sitemap.xml                  # XML Sitemap for all 11 pages
│   ├── README.md                    # Project documentation & GitHub Pages deployment guide
│   └── _php_backup.zip              # Compressed archive of all PHP source & templates
│
├── 🎨 ASSETS FOLDER (assets/)
│   ├── css/                         # Stylesheets
│   │   ├── bootstrap.min.css        # Responsive layout grid & styles
│   │   ├── font-awesome.min.css     # FontAwesome icon styles
│   │   └── style.css                # Custom site design & responsive CSS
│   │
│   ├── fonts/                       # Web & Icon Fonts
│   │   ├── fontawesome-webfont*     # FontAwesome webfonts (eot, svg, ttf, woff)
│   │   └── glyphicons-halflings*    # Bootstrap Glyphicons
│   │
│   ├── images/                      # Media & Graphics
│   │   ├── logo.png                 # Main header & footer logo
│   │   ├── Kush_logo-big.png        # Brand logo asset
│   │   ├── home-slider.jpg          # Homepage top slider banner
│   │   ├── about-slider.jpg         # About page top slider banner
│   │   ├── about-image1.jpg         # About Us history section image
│   │   ├── about-image2.jpg         # About Us mission section image
│   │   ├── about-image3.jpg         # About Us infrastructure section image
│   │   ├── world.jpg                # Quality page global map graphic
│   │   ├── 1-k.png, 1-k1.png, ...   # Product showcase slider images
│   │   ├── ks-bix.png               # Product image: Biaxial Fabric
│   │   ├── ks-qux.png, ks-qux1.png  # Product images: Quadaxial Fabric
│   │   ├── ks-trx.png, ks-trx1.png  # Product images: Triaxial Fabric
│   │   ├── ks-ud-main.png           # Product image: Unidirectional Fabric
│   │   ├── stitch_bonded.png        # Product image: Stitch Bonded Fabric
│   │   └── plus.png, quality.png    # UI icons & badges
│   │
│   ├── js/                          # JavaScript Libraries & Main Scripts
│   │   ├── jquery-1.11.2.min.js     # jQuery Core library
│   │   ├── bootstrap.min.js         # Bootstrap UI components
│   │   ├── idangerous.swiper.min.js # Swiper banner slider
│   │   ├── masonry.pkgd.min.js      # Masonry responsive portfolio grid
│   │   └── all.js                   # Mobile menu toggler & slider init
│   │
│   └── scripts/                     # Fallback alias directory for js/
│
└── 🗄️ PHP BACKUP & MODULAR TEMPLATES (_php_backup/)
    ├── 🧩 modular/                  # Reusable PHP Components
    │   ├── head.php                 # Dynamic HTML <head> with meta tags & CSS links
    │   ├── header.php               # Header markup with logo & mobile menu toggle
    │   ├── menu.php                 # Navigation menu with active item logic
    │   └── footer.php               # Footer markup, copyright & script tags
    │
    ├── 📄 Modular PHP Pages
    │   ├── index.php                # Uses modular components
    │   ├── about.php                # Uses modular components
    │   ├── products.php             # Uses modular components
    │   ├── quality.php              # Uses modular components
    │   ├── news.php                 # Uses modular components
    │   ├── contact.php              # Uses modular components
    │   ├── ks-bix.php               # Uses modular components
    │   ├── ks-qux.php               # Uses modular components
    │   ├── ks-trx.php               # Uses modular components
    │   ├── ks-ud.php                # Uses modular components
    │   └── stitch-bonded.php        # Uses modular components
    │
    ├── ⚡ Static Generator
    │   └── generate_static.php      # Rebuilds all 11 HTML pages into root folder
    │
    └── 📦 original_php/             # Raw untouched original PHP files (Safe Archive)
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
        ├── stitch-bonded.php
        └── footer.php
```
