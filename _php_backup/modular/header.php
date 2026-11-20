<?php
$rootPrefix = isset($rootPrefix) ? $rootPrefix : '';
$homeLink = ($rootPrefix === '') ? './' : $rootPrefix;
?>
<header>
    <div class="container">
        <div class="row">
            <div class="logo"><a href="<?php echo $homeLink; ?>"><img src="<?php echo $rootPrefix; ?>assets/images/logo.png" alt="Kush Synthetics Logo"/></a></div>
            <div class="nav-menu-icon">
                <a href="#"><i></i></a>
            </div> 
        </div>
        <?php include __DIR__ . '/menu.php'; ?>
    </div>
</header>
