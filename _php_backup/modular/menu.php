<?php
$currentPage = isset($currentPage) ? $currentPage : '';
?>
<div class="row">
    <div class="navigation">
        <nav> 
            <a href="index.php" class="<?php echo ($currentPage === 'home') ? 'active' : ''; ?>">HOME</a>
            <a href="about.php" class="<?php echo ($currentPage === 'about') ? 'active' : ''; ?>">ABOUT</a>
            <a href="products.php" class="<?php echo (in_array($currentPage, ['products', 'ks-ud', 'ks-bix', 'ks-trx', 'ks-qux', 'stitch-bonded'])) ? 'active' : ''; ?>">PRODUCTS</a>
            <a href="quality.php" class="<?php echo ($currentPage === 'quality') ? 'active' : ''; ?>">QUALITY</a>
            <a href="news.php" class="<?php echo ($currentPage === 'news') ? 'active' : ''; ?>">NEWS</a>
            <a href="contact.php" class="<?php echo ($currentPage === 'contact') ? 'active' : ''; ?>">CONTACT</a>
        </nav>
    </div>
</div>
