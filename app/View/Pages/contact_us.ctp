<div class="large-12 columns gray-bg">
	<?php
		echo '<div class="bg-img-contact" style="background-image:url('.$this->Html->url(DS.'img'.DS.'banners'.DS.'thumb'.DS.'large'.DS.$banner['Banner']['banner_image'], true).');"><div class="overlay"></div></div>';
	?>
	<div class="large-12 columns contact-wrapper antialiased">
		<?php echo $this->element('head'); ?>
		<div class="large-12 columns content text-center">
			<div class="row">
				<div class="large-12 columns contact">
					<div class="large-5 columns right text-left contact-info">
						<h4>contact info</h4>
						<?php 
							echo $this->Html->image('saf-logo.png', array('alt' => 'saf'));
							echo '<br /><br />';
							if($contacts){
								foreach($contacts as $contact):
									echo $contact['PageContent']['content'];
								endforeach;
							}
						?>
					</div>
					<div class="large-7 columns left text-left">
						<div id="output-message"></div>
							<div class="large-12">
							<?php echo $this->Form->create('Contact', array('url' => array('controller' => 'pages', 'action' => 'process'), 'id' => 'contact', 'type' => 'file')); 
								echo $this->Form->input('name', array('label'=>false, 'placeholder'=>'Name', 'div'=>false, 'class'=>'required'));
								echo $this->Form->input('email', array('label'=>false, 'placeholder'=>'Email', 'div'=>false, 'class'=>'required email'));
								echo $this->Form->input('subject', array('label'=>false, 'placeholder'=>'Subject', 'div'=>false));
								echo $this->Form->textarea('message', array('label'=>false, 'placeholder'=>'Message', 'div'=>false, 'class'=>'required'));
							?>
							</div>
							<div class="large-12">
								<br />
								<input type="submit" class="button tiny" value="SEND" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo $this->element('footer_misc'); ?>
<script>
	//<![CDATA[
	//prepare the form when the DOM is ready
	$(document).ready(function() {
	    var options = {
	        target:        '#output-message',   // target element(s) to be updated with server response
	        beforeSubmit:  showRequest,  // pre-submit callback
	        success:       showResponse  // post-submit callback

	        // other available options:
	        //url:       url         // override for form's 'action' attribute
	        //type:      type        // 'get' or 'post', override for form's 'method' attribute
	        //dataType:  null        // 'xml', 'script', or 'json' (expected server response type)
	        //clearForm: true        // clear all form fields after successful submit
	        //resetForm: true        // reset the form after successful submit

	        // $.ajax options can be used here too, for example:
	        //timeout:   3000
	    };

	    $("#contact").validate();
	    // bind form using 'ajaxForm'
	    $('#contact').ajaxForm(options);
	});

	// pre-submit callback
	function showRequest(formData, jqForm, options) {
	    // formData is an array; here we use $.param to convert it to a string to display it
	    // but the form plugin does this for you automatically when it submits the data
	    var queryString = $.param(formData);

	    // jqForm is a jQuery object encapsulating the form element.  To access the
	    // DOM element for the form do this:
	    // var formElement = jqForm[0];
		
		if(confirm('You are about to send the information below to SAF. Please confirm... \n\n Name: ' + $("#ContactName").val()
			+ '\n\n Email: ' + $("#ContactEmail").val()
			+ '\n\n Subject: ' + $("#ContactSubject").val()
			+ '\n\n Message: ' + $("#ContactMessage").val()
	        + '')){
	        return true;
	    }else {
	        // here we could return false to prevent the form from being submitted;
	        // returning anything other than false will allow the form submit to continue
	        return false;
	    }
	}

	// post-submit callback
	function showResponse(responseText, statusText, xhr, $form)  {
	    // for normal html responses, the first argument to the success callback
	    // is the XMLHttpRequest object's responseText property

	    // if the ajaxForm method was passed an Options Object with the dataType
	    // property set to 'xml' then the first argument to the success callback
	    // is the XMLHttpRequest object's responseXML property

	    // if the ajaxForm method was passed an Options Object with the dataType
	    // property set to 'json' then the first argument to the success callback
	    // is the json data object returned by the server

	    //alert('status: ' + statusText + '\n\nresponseText: \n' + responseText +
	      //  '\n\nThe output div should have already been updated with the responseText.');
	      $('#output-message').css('display', 'block');
		  //$("#output-message").html('<br />' + responseText);
	      $('#contact').get(0).reset();
	}
	//]]>
	
    $(document).ready(function () {

        // you want to enable the pointer events only on click;

        $('#map_canvas').addClass('scrolloff'); // set the pointer events to none on doc ready
        $('#canvas').on('click', function () {
            $('#map_canvas').removeClass('scrolloff'); // set the pointer events true on click
        });

        // you want to disable pointer events when the mouse leave the canvas area;

        $("#map_canvas").mouseleave(function () {
            $('#map_canvas').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
        });
    });
</script>