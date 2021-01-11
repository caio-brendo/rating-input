<p align="center">
    <h1 align="center">Rating Input</h1>
    <br>
</p>

Rating input is a widget for yii2 framework to render a input for rating. 

[![Latest Stable Version](https://img.shields.io/packagist/v/caio-brendo/rating-input)](https://packagist.org/packages/caio-brendo/rating-input)
[![Total Downloads](https://img.shields.io/packagist/dm/caio-brendo/rating-input?color=green)](https://packagist.org/packages/caio-brendo/rating-input)


DIRECTORY STRUCTURE
-------------------

      src/             contains source code of widget
      src/assets       contains assets definition
      src/views        contains view files



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.6.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this widget using the following command:

~~~
composer require caio-brendo/rating-input
~~~

USAGE
------------

### With model

If you have a model, you can use the following code:

```php
<?php 
use yii\widgets\ActiveForm;
use caiobrendo\Rating;
$form = ActiveForm::begin(['id' => 'rating-form']); ?>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'rating')->widget(Rating::class) ?>
        </div>     
    </div>
ActiveForm::end();
```
### Without model
If you don't have a model, you can use the following code:

```php
<?php 
use caiobrendo\Rating;
?>
    <div class="row">
        <div class="col-md-12">
            <?= Rating::widget([
                'name' => 'rating',
                'id' => 'rating-id'
            ])?>
        </div>     
    </div>
```

JAVASCRIPT EVENTS
------------

```javascript
$('.input-rating').on('beforeChange', (event) => {
    console.log('beforeChange', event);
})

$('.input-rating').on('afterChange', (event) => {
    console.log('afterChange', event);
})
```

SETTINGS
------------
The widget supports all parameters that one would pass for any [Yii Input Widget](https://github.com/yiisoft/yii2/blob/master/framework/widgets/InputWidget.php). The additional parameter settings specially available for the rating input widget configuration are:

* model: The model for rendering input.
* attribute: The attribute for rendering input.
* value: The initial or actual value of the rating.
* name: The name of the entry. This is used for modelless widget.
* qtdStar: Star quantity to be selected;
* starHeight: Height for star. Must be a valid css height.
* starSpace: Space between the stars. Must be a valid css.