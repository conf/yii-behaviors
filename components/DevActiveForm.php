<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace developeruz\behaviors\components;

use Yii;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

class DevActiveForm extends ActiveForm
{
    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    public function beginForm($action, $method, $options)
    {
        return Html::beginForm($action, $method, $options);
    }

    public function endForm()
    {
        return Html::submitButton('Сохранить').Html::endForm();
    }
}