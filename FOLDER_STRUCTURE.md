# Kush Synthetics - Complete Clean URL Folder Structure

All routes follow the directory-based clean URL pattern (`folder/index.html`) so URLs display cleanly without `.html` extensions.

```
kush-synthetics/
│
├── 🌐 CLEAN URL FOLDER ROUTES
│   ├── index.html                   # sitename/ (Home page)
│   │
│   ├── about/                       # sitename/about/
│   │   └── index.html               # About Us, History, Mission, Infrastructures
│   │
│   ├── products/                    # sitename/products/
│   │   ├── index.html               # Products listing & gallery
│   │   ├── ks-ud/                   # sitename/products/ks-ud/
│   │   │   └── index.html           # KS – UD 0° or 90° (Unidirectional Fabric)
│   │   ├── ks-bix/                  # sitename/products/ks-bix/
│   │   │   └── index.html           # KS - BIX (Biaxial Fabric)
│   │   ├── ks-trx/                  # sitename/products/ks-trx/
│   │   │   └── index.html           # KS - TRX (Triaxial Fabric)
│   │   ├── ks-qux/                  # sitename/products/ks-qux/
│   │   │   └── index.html           # KS - QUX (Quadaxial Fabric)
│   │   └── stitch-bonded/           # sitename/products/stitch-bonded/
│   │       └── index.html           # Stitch Bonded Non Crimp Fabrics (NCFs)
│   │
│   ├── quality/                     # sitename/quality/
│   │   └── index.html               # Quality Control & ISO 9001:2008 Certifications
│   │
│   ├── news/                        # sitename/news/
│   │   └── index.html               # News & Updates
│   │
│   └── contact/                     # sitename/contact/
│       └── index.html               # Contact details (India, USA, Europe)
│
├── ⚙️ CONFIGURATION & SEO FILES
│   ├── .gitattributes               # Language stats configuration (keeps repo marked as HTML)
│   ├── .gitignore                   # Ignores temp, IDE, and OS cache files
│   ├── .nojekyll                    # Disables Jekyll processing on GitHub Pages
│   ├── robots.txt                   # Crawler rules for Google & other search engines
│   ├── sitemap.xml                  # XML Sitemap with clean URL structure
│   ├── README.md                    # Project documentation & deployment guide
│   ├── FOLDER_STRUCTURE.md          # This documentation
│   └── _php_backup.zip              # Compressed archive of all PHP source & templates
│
├── 🎨 ASSETS FOLDER (assets/)
│   ├── css/                         # Stylesheets
│   │   ├── bootstrap.min.css        # Responsive layout grid & styles
│   │   ├── font-awesome.min.css     # FontAwesome icon styles
│   │   └── style.css                # Custom theme & responsive CSS (Google Fonts HTTPS)
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
    ├── 📄 Modular PHP Pages (Clean Directory Structure)
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
    │   └── contact/index.php
    │
    ├── ⚡ Static Generator
    │   └── generate_static.php      # Rebuilds all clean URL HTML pages into root
    │
    └── 📦 original_php/             # Raw untouched original PHP files (Safe Archive)
```
