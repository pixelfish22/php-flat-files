<?php 
$file_ref = fopen("black_knight.txt", "r");
$file_data = fread($file_ref, 500);
fclose($file_ref);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flat File Mini Assignment</title>
    </head>
    <body>
        <h1>Demo</h1>
        <pre> <?php echo $file_data; ?> </pre>
    </body>
</html>