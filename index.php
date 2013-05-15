<!doctype html>
<html>

<?php include 'components/head.php'; ?>

<body>

<p class="confirm-notification hide">PLEASE LOGIN FOR FULL ACCESS. Your password has been sent to email@email.com. <a href="#">Resend My Password</a> or <a href="#">Change Email Address</a></p>

<div class="left-bar-tablet">
    <?php include 'components/leftBarMenuTablet.php'; ?>
</div>

<div class="content">
	<?php include 'components/navBar.php'; ?>

	<div class="wrapper">
		<div class="main-content">

            <div class="hide">
                <h6 class="bedugger-title large-desktop">Large desktop | min-width: 1200px</h6>
                <h6 class="bedugger-title desktop">Desktop | min-width: 1024px</h6>
                <h6 class="bedugger-title tablet-landscape">Tablet landscape and down | max-width: 1024px</h6>
                <h6 class="bedugger-title small-tablet-landscape">Small Tablet landscape and down | max-width: 800px</h6>
                <h6 class="bedugger-title tablet-portrait">Tablet portrait and down | max-width: 768px</h6>
                <h6 class="bedugger-title small-tablet-portrait">Small tablet portrait  and down | max-width: 600px</h6>
                <h6 class="bedugger-title mobile-landscape">Phone Landscape and down | max-width: 480px</h6>
                <h6 class="bedugger-title mobile-portrait">Phone Portrait | max-width: 320px</h6>
            </div>

			<!-- Pager -->
			<?php include 'components/pager.php'; ?>

			<!-- User STatus | Show on Desktop and Landscape Tablet -->
			<?php include 'components/userStatus.php'; ?>

			<div class="row-fluid">
				<section class="widget-group wg-profile-pictures">
					<header>
						<h1 class="profile-pictures-title">
							<a href="/user/" title="youngwildblond">youngwildblond</a>
						</h1>

						<a class="webcam online" href="#" title="Connect Now"><!-- add class="online" when online -->
							<i class="icon-facetime-video"></i>
							Connect Now
						</a>
					</header>

					<article class="widget w-profile-pictures">
						<img class="profile-picture" src="images/avatar/230x230_2.jpg" alt="Profile picture" />

						<nav class="profile-picture-navigation">
							<a class="button-left" role="button" href="#">&larr;</a>
							<a class="button-right" role="button" href="#">&rarr;</a>
						</nav>
					</article>
				</section><!-- .wg-profile-pictures -->

				<!-- Thumb Navigation Mobile -->
				<?php include 'components/thumbNavigationMobile.php'; ?>

				<section class="widget-group wg-profile-chip">
                    <div class="show-desktop">
                        <ul class="nav nav-tabs">
                            <li class="active">
                               <a data-toggle="tab" href="#profile-chip-user">User</a>
                            </li>

                            <li>
                               <a data-toggle="tab" href="#profile-chip-stats">Stats</a>
                            </li>

                            <li>
                               <a data-toggle="tab" href="#profile-chip-swing">How We Swing</a>
                            </li>

                            <li>
                               <a data-toggle="tab" href="#profile-chip-history">History</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="profile-chip-user">
                                <?php include 'components/profileChipUser.php'; ?>
                            </div>

                            <div class="tab-pane" id="profile-chip-stats">
                                <?php include 'components/profileChipStats.php'; ?>
                            </div>

                            <div class="tab-pane" id="profile-chip-swing">
                                <?php include 'components/profileChipSwing.php'; ?>
                            </div>

                            <div class="tab-pane" id="profile-chip-history">
                                <?php include 'components/profileChipHistory.php'; ?>
                            </div>
                        </div>
                    </div>

                    <div class="show-tablet show-mobile">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#profile-user-type-mobile">User</a>
                            </li>

                            <li>
                               <a data-toggle="tab" href="#profile-chip-stats-mobile">Stats</a>
                            </li>

                            <li>
                               <a data-toggle="tab" href="#profile-chip-swing-mobile">How We Swing</a>
                            </li>

                            <li>
                               <a data-toggle="tab" href="#profile-chip-history-mobile">History</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="profile-user-type-mobile">
                                <?php include 'components/profileChipUser.php'; ?>
                            </div>

                            <div class="tab-pane" id="profile-chip-stats-mobile">
                                <?php include 'components/profileChipStats.php'; ?>
                            </div>

                            <div class="tab-pane" id="profile-chip-swing-mobile">
                                <?php include 'components/profileChipSwing.php'; ?>
                            </div>

                            <div class="tab-pane" id="profile-chip-history-mobile">
                                  <?php include 'components/profileChipHistory.php'; ?>
                            </div>
                        </div>
                    </div>

                    <form class="widget w-send-message" action="#" method="post" name="#">
                        <div class="control-group">
                            <div class="controls">
                                <textarea placeholder="Type your message here"></textarea>
                            </div>
                         </div>
                         
                        <input type="submit" class="btn btn-small btn-success" value="send message" />
                    </form>
                </section><!-- .wg-profile-chip -->
			</div>

			<!-- Thumb Navigation-->
			<?php include 'components/thumbNavigation.php'; ?>

			<!-- Profile Chip Info - Desktop and Phone View -->
			<?php include 'components/carousel.php'; ?>

			<!-- Profile Chip Info - Desktop View -->
			<?php include 'components/profileInfoChip.php'; ?>

			<!-- Profile Chip Info - Tablet and Phone View -->
			<?php include 'components/profileInfoChipTablet.php'; ?>

			<?php include 'components/ad_desktop.php'; ?>

			<?php include 'components/ad_phone.php'; ?>

			<!-- Pager -->
			<?php include 'components/pager.php'; ?>
		</div><!-- .main-content -->

		<?php include 'components/leftBar.php'; ?>

		<?php include 'components/rightBar.php'; ?>
	</div><!-- .wrapper -->

	<div class="shadow"></div>
</div><!-- .content -->

<script>
	// Push Left Bar
    $('.button-navigation').click(function () {
      $('.button-navigation').toggleClass('active');

      $('body').toggleClass('pushed');
    });

    // Hide Left Bar
    $('.shadow').click(function () {
      $('.button-navigation').removeClass('active');

      $('body').removeClass('pushed');
    });

    // Show all Menu Tabs on mobile
    $('.button-more').click(function () {
      $('.wg-menu-activity').toggleClass('show-featured-menu');
    });

    // Hide Banner on mobile
    $('.wg-phone-ad .button-close').click(function () {
      $('.wg-phone-ad').hide();
    });

    $('.w-swinger a').click(function () {
        $(this).closest('.tab-pane').css('overflow', 'fixed');
    });

    // Carousel
    $(document).ready(function() {
        var item               = $('.w-carousel .item'),
            itemCount          = item.size(),
            itemWidth          = item.outerWidth(true),
            frameWidth         = $('.w-carousel .wrap').size(),
            containerWidth     = itemCount * itemWidth;

            //console.log(frameWidth);

        //$('.w-carousel .carousel-inner').css('width', function() {
        //   return containerWidth;
        //});

        //$(window).resize(function() {
        //    var frameNewWidth = $('.w-carousel .wrap').size(),
        //        itemNewWidth  = frameNewWidth / 5;

            //console.log(frameNewWidth);
            //console.log(itemNewWidth);

        //   $(this).find('.item').css('width', function() {
        //        return itemNewWidth;
        //    });
        //});
    });

</script>

</body>
</html>