<?php
$pageTitle = "Kush Synthetics Pvt.Ltd. - Home";
$currentPage = "home";
include __DIR__ . '/modular/head.php';
?>
<body>
	<div class="preload"><ul class="loader"><li></li><li></li><li></li></ul></div>
	<?php include __DIR__ . '/modular/header.php'; ?>

	<div class="container main-wpapper">
    <div class="row">
		<div class="main-home-page">
			<img src="assets/images/home-slider.jpg" alt="Kush Synthetics">
		</div>
    </div>
    <div class="row">
       <div class="muse-template">
			<h2>Welcome to Kush Synthetics</h2>
			<p align="justify">Kush Synthetics is a privately owned manufacturer of industrial textile products. Kush started manufacturing Multiaxial and Biaxial fabrics in 2005 at Gandhidham in Gujarat, India.</p>
       </div>
    </div>
    <div class="row">
        <div class="col-50">
            <div class="portfolio-baner swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                       <div class="bg">
                           <img src="assets/images/1-k.png" alt="portfolio" class="center_img" data-width-img="590" data-height-img="437">
                        </div>   
                    </div>
                    <div class="swiper-slide">
                       <div class="bg">
                           <img src="assets/images/1-k1.png" alt="portfolio" class="center_img" data-width-img="590" data-height-img="437">
                        </div>   
                    </div>
                    <div class="swiper-slide">
                       <div class="bg">
                           <img src="assets/images/1-k2.png" alt="portfolio" class="center_img" data-width-img="590" data-height-img="437">
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="col-50">
             <div class="agency-block">
                 <h4>OUR PRODUCTS</h4>
                <p align="justify">Kush manufactures Uni-directional, biaxial and multiaxial fabrics through stitch-bonding of material made of unbent fibres with no elongation. Therefore these fabrics are also called Non – Crimp Fabrics or NCFs.</p><br>
                <span><a href="products.php">More details</a></span>
             </div>
        </div>
    </div>
    
	</div>

	<?php include __DIR__ . '/modular/footer.php'; ?>

</body>
</html>
