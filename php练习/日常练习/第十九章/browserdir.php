<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Browse Directories</title>
</head>
<body>

<h1>Browsing</h1>

    <?php

        $current_dir='uploads/';

        $dir=opendir($current_dir);

        echo"<p>Upload directory is$current_dir</p>";

        echo'<p>Directory Listing:</p><ul>';

        while(false!==($file=readdir($dir)))

        {

        //strip out the two entries of.and..

        if($file!="." && $file!="..")

        {

        echo"<li>$file</li>";

        }

        }

        echo'</ul>';

        closedir($dir);

    ?>
</body>
</html>