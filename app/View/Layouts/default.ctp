<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
<?php 
	$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');
	$isiPhone = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPhone');

if($isiPad){ ?>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, maximum-scale=0.8, user-scalable=no" />
<?php }else { ?>
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, maximum-scale=0.8, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
<?php } ?>
	<meta name="description" content="<?php //echo $page_meta_description; ?>"/>
	<meta name="author" content="Fifthlight Media"/>
	<meta name="keywords" content="<?php //echo $page_meta_keywords; ?>"/>
	
	
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'SAF - To create opportunity for children from underprivileged background in Ghana'; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('foundation.css');
		echo $this->Html->css('normalize.css');
		echo $this->Html->css('font-awesome.min.css');
		echo $this->Html->css('admin'.DS.'style.css');
		echo $this->Html->css('style.css');
	?>
	<noscript>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url(DS.'css'.DS.'styleNoJS.css', true); ?>" />
	</noscript>
	<!-- Add fancyBox main JS and CSS files -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->Html->url(DS.'fancyBox'.DS.'source'.DS.'jquery.fancybox.css?v=2.1.5', true); ?>" media="screen" />
	<?php
		echo $this->Html->script('vendor'.DS.'modernizr');
		echo $this->Html->script('vendor'.DS.'jquery');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php 
		echo $this->fetch('content'); 
		echo $this->element('admin'.DS.'menu'); 
		
		echo $this->Html->script('vendor'.DS.'fastclick');
		echo $this->Html->script('vendor'.DS.'jquery.ba-cond.min');
		echo $this->Html->script('vendor'.DS.'jquery.slitslider');
		echo $this->Html->script('vendor'.DS.'jquery.form');
		echo $this->Html->script('vendor'.DS.'jquery.validate');
		echo $this->Html->script('foundation.min');
	?>
	<script src="<?php echo $this->Html->url(DS.'fancyBox'.DS.'source'.DS.'jquery.fancybox.js?v=2.1.5', true); ?>"></script>
	<script src="<?php echo $this->Html->url(DS.'fancyBox'.DS.'source'.DS.'helpers'.DS.'jquery.fancybox-buttons.js?v=1.0.5', true); ?>"></script>
	<script src="<?php echo $this->Html->url(DS.'fancyBox'.DS.'source'.DS.'helpers'.DS.'jquery.fancybox-media.js?v=1.0.6', true); ?>"></script>
	<?php
		echo $this->Html->script('admin'.DS.'fancybox');
	?>
	<script>	
		$(function() {
		
			var Page = (function() {

				var $navArrows = $( '#nav-arrows' ),
					$nav = $( '#nav-dots > span' ),
					slitslider = $( '#slider' ).slitslider( {
						onBeforeChange : function( slide, pos ) {

							$nav.removeClass( 'nav-dot-current' );
							$nav.eq( pos ).addClass( 'nav-dot-current' );

						}
					} ),

					init = function() {

						initEvents();
						
					},
					initEvents = function() {

						// add navigation events
						$navArrows.children( ':last' ).on( 'click', function() {

							slitslider.next();
							return false;

						} );

						$navArrows.children( ':first' ).on( 'click', function() {
							
							slitslider.previous();
							return false;

						} );

						$nav.each( function( i ) {
						
							$( this ).on( 'click', function( event ) {
								
								var $dot = $( this );
								
								if( !slitslider.isActive() ) {

									$nav.removeClass( 'nav-dot-current' );
									$dot.addClass( 'nav-dot-current' );
								
								}
								
								slitslider.jump( i + 1 );
								return false;
							
							} );
							
						} );

					};

					return { init : init };

			})();

			Page.init();

			/**
			 * Notes: 
			 * 
			 * example how to add items:
			 */

			/*
			
			var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
			
			// call the plugin's add method
			ss.add($items);

			*/
		
		});
		
		// Icon Click Focus
		$('.s-icon').click(function(){
			$('input#search').focus();
		});
	
		// On Search Submit and Get Results
		function search() {
		    var query_value = $('input#search').val();
		    $('.search-string').html(query_value);
		    if(query_value !== ''){
		        $.ajax({
		            type: "POST",
		            url: "<?php echo $this->Html->url(DS.'pages'.DS.'search', true); ?>",
		            data: { query: query_value },
		            cache: false,
		            success: function(html){
		                $("ul#results").html(html);
		            }
		        });
		    }return false;
		}
	
		$("input#search").on("keyup", function(e) {
		    // Set Timeout
		    clearTimeout($.data(this, 'timer'));

		    // Set Search String
		    var search_string = $(this).val();
			
			if(search_string == ''){
				search_string = $("input#search").val();
			}
					
		    // Do Search
		    if(search_string == '') {
		        $(".results-wrap").fadeOut();
				$('h4#results-text').fadeOut();
		    }else{
		        $(".results-wrap").fadeIn();
				$('h4#results-text').fadeIn();
		        $(this).data('timer', setTimeout(search, 100));
		    };
			
			e.preventDefault();
		});
		
		// On Search Submit and Get Results
		function more_search() {
		    var query_value = $('input#more-search').val();
		    $('.search-string').html(query_value);
		    if(query_value !== ''){
		        $.ajax({
		            type: "POST",
		            url: "<?php echo $this->Html->url(DS.'pages'.DS.'ajax_search', true); ?>",
		            data: { query: query_value },
		            cache: false,
		            success: function(html){
		                $("ul#results").html(html);
		            }
		        });
		    }return false;
		}
	
		$("input#more-search").on("keyup", function(e) {
		    // Set Timeout
		    clearTimeout($.data(this, 'timer'));

		    // Set Search String
		    var search_string = $(this).val();
			
			if(search_string == ''){
				search_string = $("input#more-search").val();
			}
					
		    // Do Search
		    if(search_string == '') {
		        $(".results-wrap-1").fadeOut();
				$('h4#results-text').fadeOut();
		    }else{
		        $(".results-wrap-1").fadeIn();
				$('h4#results-text').fadeIn();
		        $(this).data('timer', setTimeout(more_search, 100));
		    };
			
			e.preventDefault();
		});
		
		$('body').click(function(){
			$(".results-wrap").fadeOut();
		});
		
		$(".search-close").click(function(){
		    $(".results-wrap").fadeOut();
		});
		
		$(document).ready(function() {
			$(".fancybox-thumb").fancybox({
				padding		: 0,
				helpers	: {
					title	: {
						type: 'outside'
					},
					thumbs	: {
						width	: 50,
						height	: 50
					},
					helpers : {
								media : {}
							}
				}
			});
		});
		
      $(document).foundation();
    </script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-78730596-1', 'auto');
	  ga('send', 'pageview');

	</script>
	  
</body>
</html>
