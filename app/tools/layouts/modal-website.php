<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title">Website Quotation Request</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="contact-block">
					<form id="contactForm" method="post" action="">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
                        </div>
                        <div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select name="type" id="type" class="form-control custom-select" required data-error="Please choose type of website">
									<option value="">Select type of Website you need</option>
		 							<option value="Business Website">Business Website</option>
									<option value="Ecommerce Website">Ecommerce Website</option>
									<option value="Blog">Blog</option>
									<option value="Portifolio Website">Portifolio Website</option>
								</select>
								
								<div class="help-block with-errors"></div>
							</div> 
						</div>						
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="description" name="description" placeholder="Website short Description" rows="8" data-error="Write short Description of what you need your website for" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Request Now Now</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
                </div>
                
            </div>
        </div>
    </div>