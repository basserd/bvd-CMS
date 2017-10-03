<!DOCTYPE html>
<html>
	<head>
		<script
			src="https://code.jquery.com/jquery-3.2.1.min.js"
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			crossorigin="anonymous"></script>
		<script src="codemirror/lib/codemirror.js"></script>
		<link rel="stylesheet" href="codemirror/lib/codemirror.css">
		<script src="codemirror/mode/javascript/javascript.js"></script>
	</head>
	<body>
		<h1>Realtime Text Editor</h1>
		<form id="preview-form" method="post" action="">
			<textarea class="codemirror-textarea" name="codemirror" id="mytextarea">Hello, World!</textarea><br>
			<input type="submit" name="preview-form-submit" id="preview-form-submit" value="Submit">
		</form>

		<div class="mirror-container"></div>
	</body>
	<footer>
		<script>
			jQuery( document ).ready( function() {
				var code = jQuery( ".codemirror-textarea" )[0];
				var editor = CodeMirror.fromTextArea( code, {
					lineNumbers : true, matchBrackets : true, mode : "htmlmixed"
				} );

				jQuery( "#preview-form" ).submit( function( e ) {
					e.preventDefault();
					var value = editor.getValue();

					jQuery( value ).appendTo( jQuery( '.mirror-container' ) );

					if ( value.length == 0 ) {
						alert( "Missing comment!" );
					}
				} );
			} );
		</script>
	</footer>
</html>
