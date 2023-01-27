<?php
[_FILES] => Array ( 
[file] => Array ( 
      [name] => blob 
        [type] => image/png 
        [tmp_name] => /tmp/phpC9g8rU 
        [error] => 0 
        [size] => 1062301 
    ) 
)
move_uploaded_file(
    $_FILES['file']['tmp_name'], 
    $_SERVER['DOCUMENT_ROOT'] . "file"
); 
?>