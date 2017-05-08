	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>RSVP Here</h2>
					<p class="rsvp-text">Please fill out this form to RSVP. Thanks!</p>
				</div>
				<button type="submit" class="btn btn-default rsvp-start btn-block">Send Response</button>
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
										<select name="attending-<?php echo $i;?>" class="form-control form-select">
											<option>Accepts with Pleasure</option>
											<option>Declines with Regret</option>
										</select>
									</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label for="attending" class="sr-only">Menu Choice</label>
										<p class="form-label-p">Menu choice <span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span></p>
										<select name="menu-<?php echo $i;?>" class="form-control form-select">
											<option>Salmon</option>
											<option>Filet Mignon</option>
										</select>
									</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label for="attending" class="sr-only">Do you plan on using the shuttle?</label>
										<p class="form-label-p">A shuttle will be available to bring guests from the Aloft Bolingbrook hotel to the wedding on the 3rd. Do you plan to use the shuttle? <span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span> </p>
										
										<select name="shuttle-<?php echo $i;?>" class="form-control form-select">
											<option>Yes</option>
											<option>No</option>
											<option>Maybe</option>
										</select>
									</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label for="attending" class="sr-only">We will host a casual goodbye breakfast on Sept. 4th at the Aloft Bolingbrook. Do you plan to attend? </label>
										<p class="form-label-p">We will host a casual goodbye breakfast on Sept. 4th at the Aloft Bolingbrook. Do you plan to attend? <span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span> </p>
										
										<select name="breakfast-<?php echo $i;?>" class="form-control form-select">
											<option>Yes</option>
											<option>No</option>
											<option>Maybe</option>
										</select>
									</div>
								</div>

								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label for="comments" class="sr-only">Comments</label>
										<p class="form-label-p">Other comments <span class="name-label-common name-label-<?php echo $i;?>">(Guest <?php echo $i;?>)</span> </p>
										<input type="text" class="form-control" id="comments" name="comments-<?php echo $i;?>" placeholder="Other comments or well wishes">
									</div>
								</div>
							</div>
					<?php endfor; ?>
						</div>
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