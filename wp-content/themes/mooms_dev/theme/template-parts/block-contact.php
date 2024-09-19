<section class="contact-block" id="contact" style="background-image: url('<?= getImageAsset('contact-bg.jpg'); ?>');">
	<div class="bg-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 info">
				<div class="contact-info">
					<h2 class="block-title text-white"><?= getOption('company'); ?></h2>
					<p class="address text-white fw-bold">
						<?= getOption('address'); ?>
					</p>
					<p class="phone">
						<a href="tel:<?= getOption('phone_number'); ?>" class="phone text-white fw-bold"><?= getOption('phone_number'); ?></a>
					</p>
					<p class="email">
						<a href="mailto:<?= getOption('email'); ?>" class="email text-white fw-bold"><?= getOption('email'); ?></a>
					</p>
				</div>

				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.2232808373387!2d108.20873707585424!3d16.053899139846678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b7816c1f95%3A0x1709d0e702a0259a!2zMTMyIEzDqiDEkMOsbmggTMO9LCBWxKluaCBUcnVuZywgVGhhbmggS2jDqiwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1725433156000!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>

			</div>
			<div class="col-12 col-lg-6 form">
				<form id="contactform" action="./contact/contact-process.php" method="post" class="form-submit">
					<h3 class="title text-white text-center"><?= _e('Get in touch We’ll help your business', 'gaumap'); ?></h3>
					<div class="form-group">
						<input type="text" id="fullname" name="fullname" placeholder="Full name" require>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
							<path d="M229.19 213c-15.81-27.32-40.63-46.49-69.47-54.62a70 70 0 1 0-63.44 0C67.44 166.5 42.62 185.67 26.81 213a6 6 0 1 0 10.38 6c19.21-33.19 53.15-53 90.81-53s71.6 19.81 90.81 53a6 6 0 1 0 10.38-6M70 96a58 58 0 1 1 58 58a58.07 58.07 0 0 1-58-58"></path>
						</svg>
					</div>
					<div class="form-group">
						<input type="email" id="email" name="email" placeholder="Email here" require>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M5 5h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V8a3 3 0 0 1 3-3m0 1c-.5 0-.94.17-1.28.47l7.78 5.03l7.78-5.03C18.94 6.17 18.5 6 18 6zm6.5 6.71L3.13 7.28C3.05 7.5 3 7.75 3 8v9a2 2 0 0 0 2 2h13a2 2 0 0 0 2-2V8c0-.25-.05-.5-.13-.72z"></path>
						</svg>
					</div>
					<div class="form-group">
						<textarea name="message" id="nomessagete" placeholder="Message here" row="4"></textarea>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
							<path d="m226.83 61.17l-32-32a4 4 0 0 0-5.66 0l-96 96A4 4 0 0 0 92 128v32a4 4 0 0 0 4 4h32a4 4 0 0 0 2.83-1.17l96-96a4 4 0 0 0 0-5.66M126.34 156H100v-26.34l68-68L194.34 88ZM200 82.34L173.66 56L192 37.66L218.34 64ZM220 128v80a12 12 0 0 1-12 12H48a12 12 0 0 1-12-12V48a12 12 0 0 1 12-12h80a4 4 0 0 1 0 8H48a4 4 0 0 0-4 4v160a4 4 0 0 0 4 4h160a4 4 0 0 0 4-4v-80a4 4 0 0 1 8 0">
							</path>
						</svg>
					</div>
					<button name="submit" type="submit" class="submit font-style linear-color border-corner" id="submit">send message now</button>
				</form>
			</div>
		</div>
	</div>
</section>