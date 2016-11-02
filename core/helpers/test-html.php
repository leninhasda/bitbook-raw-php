<?php
/**
 * Created by IntelliJ IDEA.
 * User: yasirtaher
 * Date: 2016/11/02
 * Time: 19:49
 */
include "Html.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Class</title>
    <meta charset="utf-8"/>
</head>
<body>
<?php

//div tag test
$div = new Html('div');
$div->attr(array(
    'id' => 'testID',
));
echo $div;

//input tag test
$input = new html('input');
$input->attr(array(
    'id' => 'title',
    'name' => 'title',
    'value' => 'My Awesome Site'
));

echo $input;


?>

</body>
</html>