<?php
/**
 * The global redux var
 */ 
global $wayup_options; 
?>

<div class="contact">
	<!-- Title -->
	<?php if($wayup_options['footer_contacts_title']){?>
		<p class="contact__title"><?php echo $wayup_options['footer_contacts_title'] ?></p>
	

	<ul class="contact__list">

		<!-- Address -->
		<?php if($wayup_options['footer_address']){?>
			<li class="contact__item">
				<svg width="20" height="25">
					<use xlink:href="#pin" />
				</svg>
				<p class="contact__text contact__text_address"><?php echo  $wayup_options['footer_address']; ?></p>
			</li>
		<?}?>

		<!-- Phones -->
		<?php if($wayup_options['footer_phone_number']){?>
			<li class="contact__item">
				<svg width="21" height="21">
					<use xlink:href="#phone" />
				</svg>
				<div class="contact__phones">	
					<?php
						$numbers = $wayup_options['footer_phone_number'];
						foreach($numbers as $number){
							if($number){?>
								<a href="tel:<?php echo esc_attr($number); ?>" class="contact__text contact__text_phone"><?php echo esc_attr($number); ?></a>
							<?}
						}?>
				</div>
			</li>
		<?}?>
		

		<!-- Email -->
		<?php if(!empty($wayup_options['footer_email'])){?>
			<li class="contact__item">
				<svg width="25" height="19">
					<use xlink:href="#mail" />
				</svg>
				<p class="contact__text contact__text_mail"><?php echo $wayup_options['footer_email']; ?></p>
			</li>
		<?}?>
	</ul>
	<?}?>
</div>