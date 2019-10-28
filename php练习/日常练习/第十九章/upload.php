<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploading...</title>
</head>
<body>
    <h1>Uploading file...</h1>
    <?php
        if ($_FILES['userfile']['error']>0) {
            # code...
            echo 'Problem';
            switch ($_FILES['userfile']['error']) {
                case 1: echo 'File exceeded upload_max_fileize';
                break;
            
                case 2: echo 'File exceeded upload_max_size';
                break;

                case 3: echo 'File only partially uploaded';
                break;

                case 4: echo 'No file uploaded';
                break;

                case 6: echo 'Cannot upload file:No temp directory specified';
                break;

                case 7: echo 'Upload failed:Cannot write to disk';
                break;

                default:
                    # code...
                    break;
            }
            exit;
        }
        // Does the file have the right MIME type?
        if ($_FILES['userfile']['type'] != 'text/plain') {
            echo 'Problem:file is not plain text';
            exit;
        }

        //Put the file where we'd like it
        $upfile = 'uploads/'.$_FILES['userfile']['name'];
        if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
            if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile)) {
                echo 'Problem:Could not move file to destination directory';
                exit;
            }
        } 

        else {
            echo 'Problem:possible file upload attack.Filename:';
            echo $_FILES['userfile']['name'];
            exit;
        }

        echo 'File uploaded successfully?<br><br>';

        // remove possible HTML and PHP tags from the file's contents

        $contents = file_get_contents($upfile);
        $contents = strip_tags($contents);
        file_put_contents($_FILES['userfile']['name'], $contents);

        // show what was uploaded

        echo '<p>Preview of uploaded file contents:<br/><hr/>';
        echo nl2br($contents);
        echo '<br/><hr/>';
    ?>
</body>
</html>