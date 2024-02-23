<?php 
/**
 * link calendly
 * 
 * 
 * 
 * 
 *  */


 $link_calendly_book_appoiment = get_field('link_calendly_book_appoinment', 'options');
?>

<div class="container-links-custom">
    <a href="<?php echo $link_calendly_book_appoiment;?>" target="_blank" class="button-cta-book-call">
        <div class="icon_cta">
            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.2553 8.73389H9.74753C9.38821 8.73389 9.09692 9.02517 9.09692 9.3845V12.7305C9.09692 13.0898 9.38821 13.3811 9.74753 13.3811H14.2553C14.6147 13.3811 14.906 13.0898 14.906 12.7305V9.3845C14.906 9.02517 14.6147 8.73389 14.2553 8.73389Z" fill="black" />
                <path d="M7.12477 21.5079C5.6609 21.1071 4.40034 20.4507 3.3489 19.5387C2.251 18.5802 1.42322 17.4358 0.868456 16.0997C0.290457 14.7288 0 13.0558 0 11.0836C0 9.11146 0.290457 7.43846 0.868456 6.02977C1.42322 4.6937 2.251 3.54932 3.3489 2.59083C4.40034 1.68171 5.6609 1.02529 7.12477 0.621566C8.60317 0.209125 10.221 0 11.9811 0C13.7413 0 15.3794 0.20622 16.8927 0.621566C18.3943 1.03691 19.6636 1.69043 20.7034 2.59083C21.7548 3.49994 22.5652 4.64722 23.1316 6.02977C23.7096 7.43556 24 9.12018 24 11.0836C24 13.0471 23.7096 14.7288 23.1316 16.0997C22.5652 17.4823 21.7548 18.6296 20.7034 19.5387C19.6636 20.4362 18.3914 21.0926 16.8927 21.5079C15.4259 21.9088 13.7906 22.1092 11.9811 22.1092C10.1716 22.1092 8.55379 21.9088 7.12477 21.5079ZM15.0309 16.6312C15.9051 16.4541 16.6313 16.1288 17.2122 15.6553C17.8018 15.1354 18.2287 14.5313 18.4872 13.8487C18.7719 13.1168 18.9113 12.1932 18.9113 11.0836C18.9113 9.9741 18.769 9.03885 18.4872 8.28368C18.2258 7.59821 17.8018 6.99697 17.2122 6.47707C16.6196 5.99201 15.8935 5.6609 15.0309 5.48372C14.1101 5.29493 13.0935 5.19908 11.9811 5.19908C10.8687 5.19908 9.85502 5.29493 8.93138 5.48372C8.06874 5.6609 7.34262 5.99201 6.7501 6.47707C6.13434 6.97374 5.69866 7.57497 5.43725 8.28368C5.15261 9.04175 5.01319 9.9741 5.01319 11.0836C5.01319 12.1932 5.15551 13.1168 5.43725 13.8487C5.69575 14.5574 6.13434 15.1616 6.7501 15.6553C7.32809 16.1288 8.05712 16.4541 8.93138 16.6312C9.91311 16.8317 10.9297 16.9333 11.9811 16.9333C13.0326 16.9333 14.0491 16.8346 15.0309 16.6312Z" fill="#121212" />
            </svg>
        </div>
        <!-- /.icon_cta -->
        <div class="text_cta">
            prenota una call
        </div>
        <!-- /.text_cta -->
    </a>
    <!-- /.button-cta-book-call -->
    <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
			Launch static backdrop modal
		</button>

		<!-- Modal -->
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Understood</button>
					</div>
				</div>
			</div>
		</div>

</div>
<!-- /.container-links-custom -->
