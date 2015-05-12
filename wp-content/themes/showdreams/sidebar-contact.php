<div class="mini-contact">
	<span class="mini-contact__btn"><i class="icon-envelope"></i><span>Click here and Contact Us</span></span>
	<div class="mini-contact__form animated">
		<span class="mini-contact__close icon-close"></span>
		<div class="mini-contact__header">
			Contact Us
		</div>
		<div class="mini-contact__message">
			For more information about our services.
		</div>
		<div class="mini-contact__form__container">
			<form action="<?php echo home_url( '/helpers/contact.php' ); ?>" data-remote data-remote-success-message="Message Sent">
				<textarea name="mini-comments" id="mini-comments" cols="30" rows="10" required></textarea>
				<input type="email" name="mini-email" id="mini-email" required />
				<input type="submit" class="mini-btn" value="Send">
			</form>
			<span class="response"></span>
		</div>
		
	</div>
</div>

<?php 
	