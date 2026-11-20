<?php
$rootPrefix = isset($rootPrefix) ? $rootPrefix : '';
$homeLink = ($rootPrefix === '') ? './' : $rootPrefix;
?>
	<footer>
		<div class="container">
			<div class="row">
				<div class="button-top">
					<div class="button-totop">
						<span>&lt;</span>
					</div>
				</div>
				<div class="footer-logo">
					<a href="<?php echo $homeLink; ?>"><img src="<?php echo $rootPrefix; ?>assets/images/logo.png" alt="Kush Synthetics Logo"/></a>
					<div class="copyright">
						<span>&copy; 2015 Copyright - Created by 7 Days Creation</span>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- JS includes -->
  	<script src="<?php echo $rootPrefix; ?>assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
   	<script src="<?php echo $rootPrefix; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  	<script src="<?php echo $rootPrefix; ?>assets/js/idangerous.swiper.min.js" type="text/javascript"></script>
	<script src="<?php echo $rootPrefix; ?>assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
  	<script src="<?php echo $rootPrefix; ?>assets/js/all.js" type="text/javascript"></script>
