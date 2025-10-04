<?php

namespace caiobrendo\ratinginput;

use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\web\View;

class Rating extends Widget
{
    public $model;
    public $attribute;
    public $value = '';
    public $name = '';
    public $qtdStar = 5;
    public $starHeight = '29px';
    public $starSpace = '10px';


    /**
     * {@inheritDoc}
     */
    public function init()
    {
        parent::init();
        if (($this->model && !$this->attribute) || ($this->attribute && !$this->model)) {
            throw new InvalidConfigException('Pass the model and the attribute or a name!');
        }
        if ((!$this->model || !$this->attribute) && !$this->name) {
            throw new InvalidConfigException('Pass the model and the attribute or a name!');
        }
        if ($this->model && !$this->model instanceof Model) {
            throw new InvalidConfigException('The model has been instance of yii\base\Model');
        }
        if (!is_int($this->qtdStar)) {
            throw new InvalidConfigException('The qtdStar must be int');
        }
    }

    /**
     * {@inheritDoc}
     */
    public function run()
    {
        $asset = RatingAsset::register($this->getView());
        $this->registerCss($this->getView());
        $path = $asset->baseUrl;
        $qtd = $this->qtdStar;
        $id = $this->id ?: Html::getInputId($this->model, $this->attribute);
        return $this->render('index.php', ['qtd' => $qtd, 'path' => $path, 'model' => $this->model, 'attribute' => $this->attribute, 'value' => $this->value, 'name' => $this->name, 'id' => $id]);
    }

    /**
     * @param $view View
     */
    private function registerCss($view)
    {
        $css = '.star{';
        $css .= "height: $this->starHeight;";
        $css .= "margin-right: $this->starSpace;";
        $css .= '}';

        $view->registerCss($css);
    }
}