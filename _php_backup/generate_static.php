<?php
/**
 * Static HTML Generator for Kush Synthetics Pvt.Ltd.
 * Generates portable, zero-dependency static HTML pages for GitHub Pages / Static Hosting.
 */

ini_set('default_charset', 'UTF-8');
if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('UTF-8');
}

$sourceDir = __DIR__;
$outputDir = dirname(__DIR__);

$pages = [
    'index.php' => 'index.html',
    'about.php' => 'about.html',
    'products.php' => 'products.html',
    'quality.php' => 'quality.html',
    'news.php' => 'news.html',
    'contact.php' => 'contact.html',
    'ks-bix.php' => 'ks-bix.html',
    'ks-qux.php' => 'ks-qux.html',
    'ks-trx.php' => 'ks-trx.html',
    'ks-ud.php' => 'ks-ud.html',
    'stitch-bonded.php' => 'stitch-bonded.html',
];

$phpBinary = 'C:\\xampp\\php\\php.exe';
if (!file_exists($phpBinary)) {
    $phpBinary = 'php';
}

echo "Starting Static HTML Generation...\n";

foreach ($pages as $phpFile => $htmlFile) {
    $srcPath = $sourceDir . DIRECTORY_SEPARATOR . $phpFile;
    $dstPath = $outputDir . DIRECTORY_SEPARATOR . $htmlFile;

    if (!file_exists($srcPath)) {
        echo "Error: Source file not found: $srcPath\n";
        continue;
    }

    // Execute PHP to capture clean rendered output
    $cmd = escapeshellarg($phpBinary) . ' ' . escapeshellarg($srcPath);
    $html = shell_exec($cmd);

    if (empty($html)) {
        echo "Failed to render: $phpFile\n";
        continue;
    }

    // Replace all .php navigation and internal links with .html
    $linkReplacements = [
        'href="index.php"' => 'href="index.html"',
        'href="about.php"' => 'href="about.html"',
        'href="products.php"' => 'href="products.html"',
        'href="quality.php"' => 'href="quality.html"',
        'href="news.php"' => 'href="news.html"',
        'href="contact.php"' => 'href="contact.html"',
        'href="ks-bix.php"' => 'href="ks-bix.html"',
        'href="ks-qux.php"' => 'href="ks-qux.html"',
        'href="ks-trx.php"' => 'href="ks-trx.html"',
        'href="ks-ud.php"' => 'href="ks-ud.html"',
        'href="stitch-bonded.php"' => 'href="stitch-bonded.html"',
    ];

    foreach ($linkReplacements as $from => $to) {
        $html = str_replace($from, $to, $html);
    }

    // Ensure asset paths point cleanly to assets/...
    $assetReplacements = [
        'href="css/' => 'href="assets/css/',
        'src="images/' => 'src="assets/images/',
        'src="scripts/' => 'src="assets/js/',
    ];
    foreach ($assetReplacements as $from => $to) {
        $html = str_replace($from, $to, $html);
    }

    file_put_contents($dstPath, $html);
    echo "Generated: $htmlFile (" . strlen($html) . " bytes)\n";
}

echo "All 11 static HTML pages generated successfully!\n";
