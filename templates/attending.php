	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>RSVP</h2>
					<p class="rsvp-text">Please fill out this form to RSVP. Thanks!</p>
				</div>
				<form class="rsvp-password">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<div class="col-md-12 col-sm-12 question-attending-show">
							<p class="password-text"></p>
							<div class="form-group">
								<label for="password" class="sr-only">Password</label>
									<input type="text" class="form-control" id="password-original" name="password" placeholder="Password">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-default btn-block">Continue</button>
				</form>
			</div>
			</div>
			<div class="row animate-box">
				<form class="form-inline rsvp-form">
					<div class="col-md-10 col-md-offset-1">

						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<label for="attending" class="sr-only">How many people are in your party?</label>
								<p class="form-label-p">How many people are in your party?</p>
								<select name="partycount" id="partycount-select" class="form-control form-select">
									<?php for($i = 1; $i <= 5; $i++): ?>
										<option><?php echo $i; ?></option>
									<?php endfor; ?>
								</select>
							</div>
						</div>

						<?php for($i = 1; $i <= 5; $i++): ?>
							<div class="rsvp-form-<?php echo $i;?> rsvp-form-common">
								<?php if ($i != 1): ?>
									<h4 class="guest-label"><br>Guest <?php echo $i;?></h4>
								<?php endif; ?>
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label for="name" class="sr-only">Name</label>
										<p class="form-label-p">Name</p>
										<input type="name" class="form-control" id="name-<?php echo $i;?>" placeholder="Name" name="name-<?php echo $i;?>">
									</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label for="attending" class="sr-only">Will you be attending?</label>
										<p class="form-label-p">Will you be attending? <span class="name-label-common name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span></p>
										<select name="attending-<?php echo $i;?>" class="form-control form-select question-attending">
										    <option value="" disabled selected></option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
								</div>

								<div class="col-md-12 col-sm-12 question-block-menu question-attending-show">
									<div class="form-group">
										<label for="attending" class="sr-only">Menu Choice</label>
										<p class="form-label-p">Menu choice <span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span></p>
										<select name="menu-<?php echo $i;?>" class="form-control form-select">
										    <option value="" disabled selected></option>
											<option>Salmon</option>
											<option>Filet Mignon</option>
										</select>
									</div>
								</div>

								<div class="col-md-12 col-sm-12 question-block-shuttle question-attending-show">
									<div class="form-group">
										<label for="attending" class="sr-only">Do you plan on using the shuttle?</label>
										<p class="form-label-p">A shuttle will be available to bring guests from the Aloft Bolingbrook hotel to the wedding on the 3rd. Do you plan to use the shuttle? <span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span> </p>
										
										<select name="shuttle-<?php echo $i;?>" class="form-control form-select">
										    <option value="" disabled selected></option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
								</div>

								<div class="col-md-12 col-sm-12 question-attending-show">
									<div class="form-group">
										<label for="comments" class="sr-only">Dietary Restrictions</label>
										<p class="form-label-p">Dietary Restrictions<span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span> </p>
										<input type="text" class="form-control" id="Dietary" name="dietary-<?php echo $i;?>" placeholder="Do you have any dietary restrictions?">
									</div>
								</div>

								<div class="col-md-12 col-sm-12 question-attending-show">
									<div class="form-group">
										<label for="contact" class="sr-only">Contact Information</label>
										<p class="form-label-p">Contact Information <span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span> </p>
										<input type="text" class="form-control" id="contact" name="contact-<?php echo $i;?>" placeholder="Contact Information">
									</div>
								</div>
								
								<div class="col-md-12 col-sm-12 question-attending-show">
									<div class="form-group">
										<label for="comments" class="sr-only">Comments</label>
										<p class="form-label-p">Other comments <span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span> </p>
										<input type="text" class="form-control" id="comments" name="comments-<?php echo $i;?>" placeholder="Other comments or well wishes">
									</div>
								</div>
							</div>
					<?php endfor; ?>
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-12 col-sm-12">
									<p class="error-text" style="color:white"></p>
							</div>
						</div>

					<input type="hidden" id="password-copy" name="password" placeholder="Password">

						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-12 col-sm-12">
								<button type="submit" class="btn btn-default btn-block rsvp-submit-send">Send</button>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
	</div>