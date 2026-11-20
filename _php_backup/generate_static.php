<?php
/**
 * Static HTML Generator for Kush Synthetics Pvt.Ltd.
 * Generates portable, folder-based clean URL static HTML pages for GitHub Pages / Static Hosting.
 */

ini_set('default_charset', 'UTF-8');
if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('UTF-8');
}

$sourceDir = __DIR__;
$outputDir = dirname(__DIR__);

$pages = [
    [
        'source' => $sourceDir . '/index.php',
        'target' => $outputDir . '/index.html',
    ],
    [
        'source' => $sourceDir . '/about/index.php',
        'target' => $outputDir . '/about/index.html',
    ],
    [
        'source' => $sourceDir . '/products/index.php',
        'target' => $outputDir . '/products/index.html',
    ],
    [
        'source' => $sourceDir . '/quality/index.php',
        'target' => $outputDir . '/quality/index.html',
    ],
    [
        'source' => $sourceDir . '/news/index.php',
        'target' => $outputDir . '/news/index.html',
    ],
    [
        'source' => $sourceDir . '/contact/index.php',
        'target' => $outputDir . '/contact/index.html',
    ],
    [
        'source' => $sourceDir . '/products/ks-ud/index.php',
        'target' => $outputDir . '/products/ks-ud/index.html',
    ],
    [
        'source' => $sourceDir . '/products/ks-bix/index.php',
        'target' => $outputDir . '/products/ks-bix/index.html',
    ],
    [
        'source' => $sourceDir . '/products/ks-trx/index.php',
        'target' => $outputDir . '/products/ks-trx/index.html',
    ],
    [
        'source' => $sourceDir . '/products/ks-qux/index.php',
        'target' => $outputDir . '/products/ks-qux/index.html',
    ],
    [
        'source' => $sourceDir . '/products/stitch-bonded/index.php',
        'target' => $outputDir . '/products/stitch-bonded/index.html',
    ],
];

$phpBinary = 'C:\\xampp\\php\\php.exe';
if (!file_exists($phpBinary)) {
    $phpBinary = 'php';
}

echo "Starting Folder-Based Static HTML Generation...\n";

foreach ($pages as $p) {
    $srcPath = $p['source'];
    $dstPath = $p['target'];

    if (!file_exists($srcPath)) {
        echo "Error: Source file not found: $srcPath\n";
        continue;
    }

    $targetDir = dirname($dstPath);
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Execute PHP to capture clean rendered output
    $cmd = escapeshellarg($phpBinary) . ' ' . escapeshellarg($srcPath);
    $html = shell_exec($cmd);

    if (empty($html)) {
        echo "Failed to render: $srcPath\n";
        continue;
    }

    file_put_contents($dstPath, $html);
    $relTarget = str_replace($outputDir . DIRECTORY_SEPARATOR, '', $dstPath);
    $relTarget = str_replace($outputDir . '/', '', $relTarget);
    echo "Generated: $relTarget (" . strlen($html) . " bytes)\n";
}

echo "All folder-based static HTML pages generated successfully!\n";
