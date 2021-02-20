# yii2-notyf

Alternative alert - success - error - warning - information - confirmation messages for Yii framework.

Based on JavaScript library: https://github.com/caroso1222/notyf

## Install

``composer require --prefer-dist ereminmdev/yii2-notyf``

## Documentation

https://github.com/caroso1222/notyf#global-configuration

## Use

Use in view:

```
<?php

NotyfAsset::register($this);

$this->registerJs('
// Create an instance of Notyf
var notyf = new Notyf();

// Display an error notification
notyf.error("You must fill out the form before moving forward");

// Display a success notification
notyf.success("Your changes have been successfully saved!");

');
?>
```
