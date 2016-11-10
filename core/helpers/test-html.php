<?php
/**
 *
 * @author: Y T
 *
 */
include "html.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML Class</title>
    <meta charset="utf-8"/>
</head>
<body>
<?php

echo Html::tag('div', 'asdasd', ['id' => '1', 'value' => '123']);





//just for selfcloser tag testing
echo Html::tag('input', '', ['id' => '1', 'value' => '123']);


echo Html::a('www.test.com', 'asdasd', ['id' => '1', 'class' => 'aa 123']);

echo Html::span('asdasd', ['id' => '1', 'class' => 'a 123']);

echo Html::passwordInput(['name' => 'testName', 'id' => '1', 'class' => 'a 123']);

echo Html::div('Hasda', ['id' => '1', 'class' => 'a 123']);
?>


</body>
</html>