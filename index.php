<!DOCTYPE html>

<head>
<meta charset="utf-8" />
	<title>GS Dev Test</title>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Bootstrap Form</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>GS Dev Test</h2>
		<form method="post" enctype="multipart/form-data" action="">
		
			
			<div id="fib">
			</div>

			<p><br>	

			<div class="form-group">
				<label for="input1">Input 1:</label>
				<input type="text" class="form-control" id="input1" name="input1" 
					value="<?php echo (isset($_POST['input1']) ? $_POST['input1'] : '' );?>">
			</div>
			<div class="form-group">
				<label for="input2">Input 2:</label>
				<input type="text" class="form-control" id="input2" name="input2"
				value="<?php echo (isset($_POST['input2']) ? $_POST['input2'] : '' );?>" >
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
			
			<?php 
				error_reporting(0);
				if($_POST){
					function fibonacci($n,$first,$second )
					{
						$fib = [$first,$second];
						for($i=1;$i<$n;$i++)
						{
							$fib[] = $fib[$i]+$fib[$i-1];
						}
						return $fib;
					}
					$fibo1 = array_sum(fibonacci(($_POST['input1'] - 1), 1, 1));
					$fibo2 = array_sum(fibonacci(($_POST['input2'] - 1), 1, 1));
					
					$fiboAvg = (($fibo2 + $fibo1) / 2);
					
					
					echo "<p>&nbsp;</p><p>
					Average value is : ".($fiboAvg)."
					</p>";
					
				}
			?>
				
		</form>
	</div>

	<!-- Include Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>