<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style type="text/css">
		.outer{
			
			height: 350px;
			border: 2px solid gray;
		}
		.inner{
			width: 100px;
			height: 100px;
			background-color:#000; 
			display: inline-block;;
			margin: 2px;
		}
		.greenColor{
			background-color:green; 
		}
	</style>
</head>
<body>
	<form>
		<input type="text" name="row" class="row">
		<input type="text" name="column" class="column">

		<button type="button" name="button" id="button" class="button">Show Square</button>
		<button  type="button" id="btn_rmv">Remove</button>
	</form>
	<br>
	<br>
	<br>
		<div class="outer"></div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	
		$('#button').click(function(){
			$( ".outer" ).empty();

			var row1 = $( ".row" ).val();
			console.log(row1);
			var row = $( ".row" ).val();
			var col = $( ".column" ).val();

			var squares = row * col ; 
			for(var i=1;i<=squares;i++){
				var element = $("<div class='inner'></div>");
				element.appendTo('.outer');	
			}
			
		});
		$('.outer').on('click','.inner',function(e){
		e.preventDefault();
		    $(this).toggleClass('greenColor');
			// $(this).css({"background-color": "green"});
		})

		
	$('#btn_rmv').on("click", function(){
	    $('.outer .inner:last').remove();
	});
	});

</script>
