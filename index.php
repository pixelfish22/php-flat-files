<?php 
//opens file
$file = fopen("black_night.txt", "r") or die("Unable to open file!");
// read files
$file_data = fread($file,filesize("black_night.txt"));
// closes file
fclose($file);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flat File Mini Assignment</title>
    </head>
    <body>
        <h1>The Black Knight</h1>
        <pre><?php echo $file_data; ?></pre>
    </body>
</html>