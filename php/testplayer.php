 <?php
	$layoutType = $_POST["layoutType"];
	$generateURL = urlencode('generateTSConfig.php?layoutType='.$layoutType);
	// echo the first bit (headers, start of body tag, etc).
 	echo '<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!--  BEGIN Browser History required section -->
	<link rel="stylesheet" type="text/css" href="history/history.css" />
	<!--  END Browser History required section -->

	<title></title>
	<script src="AC_OETags.js" language="javascript"></script>

	<!--  BEGIN Browser History required section -->
	<script src="history/history.js" language="javascript"></script>
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<!--  END Browser History required section -->

	<style>
		body { margin: 0px; overflow:hidden }
	.hide{
		display: none;
	}
	</style>
	</head>
	<body>

		<form id="form" method="POST" action="?">
		    <fieldset>
		        <legend>Setup</legend>
		        <div class="input select">
		            <label for="layoutType">Layout: </label>
		            <select name="layoutType" id="layoutType">
		                <option value="vr">Vertical</option>
		                <option value="hr">Horizontal</option>
		                <option value="gr">Grid</option>
		            </select>
		        </div>
		    </fieldset>
		    <div class="submit">
		        <input type="submit" value="Submit" />
		    </div>
		</form>

		<div id="TimeGraphDiv">
		  	<embed id="TimeGraphFlex" src="TimeGraphFlex.swf?license=2498382f5249277454ec3a716f31dfea&config='.$generateURL.'" 
			  	width="100%" height="100%">
				</embed>
			</div>
		</body>

	<script type="text/javascript">
		$(document).ready(function(){
		    $("#layoutType").change(function(){
		 
		        if ($(this).val() == "gr" ) {
		 
		            $("#hide1").slideDown("fast"); //Slide Down Effect
		 
		        } else {
		 
		            $("#hide1").slideUp("fast");    //Slide Up Effect
		 
		        }
		    });
		});
 	</script>

	</html>';

?>