<?php

if (isset($_POST['submit'])) {
    $number = $_POST['submit'] + 1;
} else {
    $number = 0;
}



var_dump($_POST);

?>

<html>
<head>
    <title>Didinam vienetu</title>
</head>
<body>
<form method="post">
    <button name="submit" value="<?php print $number; ?>"<?php print $number; ?>></button>
</form>
<?php for ($img = 0; $img < $number; $img++): ?>
<img src="https://www.bbcgoodfood.com/sites/default/files/glossary/banana-crop.jpg">
<?php endfor; ?>
</body>
</html>