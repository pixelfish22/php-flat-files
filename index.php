<?php 
//opens file
$file = fopen("black_knight.txt", "r") or die("Unable to open file!");
// read files
$file_data = fread($file,filesize("black_knight.txt"));
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
        <form action="new_line_adder.php" method="POST">
            <fieldset>
                <legend>Add This Line to the end</legend>
                <input type="text" name="newLine"/>
                <input type="submit">
            </fieldset>
        </form>
        <pre><?php echo $file_data; ?></pre>
    </body>
</html>