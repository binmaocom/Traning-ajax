<!DOCTYPE html>
<html>
	<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		jQuery(document).ready(function($){
			function loadXMLDoc(){
				$.ajax({
					url:'ajax_info.txt',
				})
				.done(function( msg ) {
					$("#myDiv").html( msg );
					$("#load-more").remove();
				});
			}
			$('#load-more').on('click.redsand', function(){
				loadXMLDoc();
			});
		});
	</script>
	</head>
	<body>
		<h2>Let AJAX change this text</h2>
		<p id="myDiv">Aenean vulputate eleifend tellus. Ut leo. Praesent adipiscing. In dui magna, posuere eget, vestibulum et, tempor auctor, justo...</p>
		<button id="load-more" type="button" >Load more...</button>
	</body>
</html>