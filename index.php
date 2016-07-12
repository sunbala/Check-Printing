

<!DOCTYPE html>
<html>
<head>
	<title>Check Management Software Demo</title>	
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="crossorigin="anonymous"></script>
	<style>
		.drager {
			height: 40px;
			padding: 5px;
			border: none;
			top: 30px;
			left: 50px;
			position: absolute !important;
			display:none;
		}
		ul {
			display: none;
		}

	</style>
</head>
<body>

	<button id="addtext">Add Name</button>
	<button id="adddate">Add Date</button>
	<button id="addamnt">Add Amount</button>
	<button id="addamnt-words">Add Amount in Words</button>
	<div style="width:100%;" id="container">
	<form method="post">
		<div id="name-chck" class="name-chck drager">

			<input placeholder="Enter the Payee Name" style="background:none; border:none; width:680px; height:35px; font-size:25px; font-weight: bold;" type="text" id="txt"+n />

			<ul>
				<li class="posX"+n></li>
				<li class="posY"+n></li>
			</ul>
		</div>
		
		<div id="date-chck" class="date-chck drager">

			<input placeholder="Enter the Date" style="background:none; border:none; width:170px; height:35px; font-size:25px; font-weight: bold;" type="text" id="txt"+n />

			<ul>
				<li class="posX"+n></li>
				<li class="posY"+n></li>
			</ul>
		</div>
		
		<div id="amoumt-chck" class="amount-chck drager">

			<input placeholder="Enter the Amount in Numbers" style="background:none; border:none; width:240px; height:35px; font-size:25px; font-weight: bold;" type="text" id="txt"+n />

			<ul>
				<li class="posX"+n></li>
				<li class="posY"+n></li>
			</ul>
		</div>
		
		<div id="amount-words" class="amount-words drager">

			<input placeholder="Enter the Amount in Words" style="background:none; border:none; width:780px; height:35px; font-size:25px; font-weight: bold;" type="text" id="txt"+n />

			<ul>
				<li class="posX"+n></li>
				<li class="posY"+n></li>
			</ul>
		</div>
		<input id="submit" type="submit" value="Submit"/>
		</form>
	</div>
	<img src="img/cheque.jpg" style="width: 90%;">
	<script>



$( document ).ready(function() {






  
	$('#addtext').click(function(){    
		$('#name-chck').css({'display':'block'});
	});
	$('#adddate').click(function(){    
		$('#date-chck').css({'display':'block'});
	});
	$('#addamnt').click(function(){    
		$('#amoumt-chck').css({'display':'block'});
	});
	$('#addamnt-words').click(function(){    
		$('#amount-words').css({'display':'block'});
	});
$('#name-chck').draggable({
  	 drag: function(){
            var offset = $(this).offset();
            var xPosName = offset.left;
            var yPosName = offset.top;
        }
  });
  $('#date-chck').draggable({
  	 drag: function(){
            var offset = $(this).offset();
            var xPosDate = offset.left;
            var yPosDate = offset.top;
        }
  });
  $('#amoumt-chck').draggable({
  	 drag: function(){
            var offset = $(this).offset();
            var xPosAmnt = offset.left;
            var yPosAmnt = offset.top;
        }
  });
  $('#amount-words').draggable({
  	 drag: function(){
            var offset = $(this).offset();
            var xPosWord = offset.left;
            var yPosWord = offset.top;
        }
  });
  
  });
</script>
</body>
</html>