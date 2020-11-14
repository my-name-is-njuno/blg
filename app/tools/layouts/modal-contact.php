<div id="my-modal-contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="my-modal-title-contact">Send a Message</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="contact-block">
					<form id="contactForm-contact" method="post" action="">
					  <div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="name-contact" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email-contact" class="form-control" name="email" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
                        </div>
                        
											
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message-contact" name="message" placeholder="Short message" rows="8" data-error="Write your message here" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit-contact" type="submit">Send Message</button>
								<div id="msgSubmit-contact" class="h3 text-center hidden"></div> 
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