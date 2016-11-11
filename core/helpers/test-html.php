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

//echo Html::tag('div', 'Tag Div test', ['id' => '1', 'value' => '123']);


//just for selfcloser tag testing
//echo Html::tag('input', '', ['id' => '1', 'value' => '123']);
//
//
echo Html::a('www.test.com', 'asdasd', ['id' => '1', 'class' => 'aa 123']);

echo CHR(10);
echo CHR(10);
echo CHR(10);

echo Html::urlTo('www.fast.com');

echo CHR(10);
echo CHR(10);
echo CHR(10);
//echo Html::span('asdasd', ['id' => '1', 'class' => 'a 123']);
//
//echo Html::passwordInput(['name' => 'testName', 'id' => '1', 'class' => 'a 123']);
//
//echo Html::div('Hasda', ['id' => '1', 'class' => 'a 123']);

//$test = Html::textarea('', ['id' => '1', 'class' => 'a 123', 'placeholder' => 'test input']);
//$test .= Html::input('text', ['id' => '1', 'class' => 'a 123', 'placeholder' => 'test input']);


echo Html::beginForm('/form/test()', 'post', ['id' => '1', 'class' => 'a 123']);
echo Html::input('text', ['id' => '1', 'class' => 'a 123', 'placeholder' => 'test input']);
echo Html::passwordInput(['name' => 'testName', 'id' => '1', 'class' => 'a 123']);
echo Html::endForm();
//echo Html::input('text', ['id' => '1', 'class' => 'a 123', 'placeholder' => 'test input']);
?>


</body>
</html>