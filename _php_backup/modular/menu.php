<?php
$currentPage = isset($currentPage) ? $currentPage : '';
$rootPrefix = isset($rootPrefix) ? $rootPrefix : '';
$homeLink = ($rootPrefix === '') ? './' : $rootPrefix;
?>
<div class="row">
    <div class="navigation">
        <nav> 
            <a href="<?php echo $homeLink; ?>" class="<?php echo ($currentPage === 'home') ? 'active' : ''; ?>">HOME</a>
            <a href="<?php echo $rootPrefix; ?>about/" class="<?php echo ($currentPage === 'about') ? 'active' : ''; ?>">ABOUT</a>
            <a href="<?php echo $rootPrefix; ?>products/" class="<?php echo (in_array($currentPage, ['products', 'ks-ud', 'ks-bix', 'ks-trx', 'ks-qux', 'stitch-bonded'])) ? 'active' : ''; ?>">PRODUCTS</a>
            <a href="<?php echo $rootPrefix; ?>quality/" class="<?php echo ($currentPage === 'quality') ? 'active' : ''; ?>">QUALITY</a>
            <a href="<?php echo $rootPrefix; ?>news/" class="<?php echo ($currentPage === 'news') ? 'active' : ''; ?>">NEWS</a>
            <a href="<?php echo $rootPrefix; ?>contact/" class="<?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">CONTACT</a>
        </nav>
    </div>
</div>
