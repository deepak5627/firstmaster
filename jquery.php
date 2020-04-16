<!DOCTYPE html>
<html>
	<head>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<title>Dynamic Add squares usng jquery</title>
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

		<div class="outer">
			
		</div>
		<button  type="button" id="btn">Add</button>
		<button  type="button" id="btn_rmv">Remove</button>
	</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
			var element = $("<div class='inner'></div>");
			element.appendTo('.outer');
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

