<?php

use yii\base\Model;
use yii\helpers\Html;
use yii\web\View;

/** @var $qtd int */
/** @var $this View */
/** @var $model Model */
/** @var $attribute string */
/** @var $value string */
/** @var $name string */
/** @var $id string */
?>
<div class="rating-container">
    <?php
    if ($model) {
        if ($value) {
            echo Html::activeHiddenInput($model, $attribute, ['class' => 'input-rating', 'value' => $value, 'id' => $id]);
        } else {
            echo Html::activeHiddenInput($model, $attribute, ['class' => 'input-rating', 'id' => $id]);
        }
    } else {
        if ($value) {
            echo Html::hiddenInput($name, $value, ['class' => 'input-rating', 'id' => $id]);
        } else {
            echo Html::hiddenInput($name, '', ['class' => 'input-rating', 'id' => $id]);
        }
    }
    for ($i = 1; $i <= $qtd; $i++):
        ?>
        <img src="<?= $path ?>/imgs/fav-gray.svg" data-value="<?= $i ?>" data-path="<?= $path ?>" class="star grey">
    <?php
    endfor;
    ?>
</div>