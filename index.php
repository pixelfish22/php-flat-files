<?php 
$file_ref = fopen("black_knight.txt", "r") or die("I just died");
$file_data = fread($file_ref, filesize("black_knight.txt"));
fclose($file_ref);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flat File Mini Assignment</title>
    </head>
    <body>
        <h1>Demo</h1>
        <form action="">
        	<label> What you wanna say!</label>
        	<input type="text" name="new_line">
        	<button type="submit">Yup!</button>
    	</form>
        <pre> <?php echo $file_data; ?> </pre>
    </body>
</html>