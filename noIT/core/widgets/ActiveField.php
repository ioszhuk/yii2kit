<?php

namespace noIT\core\widgets;

use Yii;
use noIT\core\helpers\Html;
use vova07\imperavi\Widget;

class ActiveField extends \yii\widgets\ActiveField
{
    public $template = "{label}\n{input}\n{hint}\n{error}";

    private $editorDefaultConfig;

	public function getDefaultConfig()
	{
		if($this->editorDefaultConfig === null) {
			$this->setDefaultConfig();
		}

		return $this->editorDefaultConfig;
	}

    public function setDefaultConfig()
    {
    	$this->editorDefaultConfig = Yii::$app->defaultEditorAssetComponent->getAsset($this->model);
    }

    /**
     * Renders the whole field.
     * This method will generate the label, error tag, input tag and hint tag (if any), and
     * assemble them into HTML according to [[template]].
     * @param string|callable $content the content within the field container.
     * If `null` (not set), the default methods will be called to generate the label, error tag and input tag,
     * and use them as the content.
     * If a callable, it will be called to generate the content. The signature of the callable should be:
     *
     * ```php
     * function ($field) {
     *     return $html;
     * }
     * ```
     *
     * @return string the rendering result.
     */
    public function render($content = null)
    {
        if ($content === null) {

            if (!isset($this->parts['{input}'])) {
                $this->textInput();
            }
            if (!isset($this->parts['{label}'])) {
                $this->label();
            }

            if (!isset($this->parts['{error}'])) {
                $this->error();
            }
            if (!isset($this->parts['{hint}'])) {
                $this->hint(null);
            }

            $content = strtr($this->template, $this->parts);
        } elseif (!is_string($content)) {
            $content = call_user_func($content, $this);
        }

        return $this->begin() . "\n" . $content . "\n" . $this->end();
    }


    public function editor($editorConfig = [])
    {
	    $options = [];

	    $options = array_merge($this->inputOptions, $options);

	    if ($this->form->validationStateOn === ActiveForm::VALIDATION_STATE_ON_INPUT) {
		    $this->addErrorClassIfNeeded($options);
	    }

	    $this->addAriaAttributes($options);

	    $this->adjustLabelFor($options);

	    $this->parts['{input}'] = Html::activeTextarea($this->model, $this->attribute, $options);

	    // custom
	    if(!$editorConfig) {
		    $editorConfig = $this->getDefaultConfig();
	    }

	    return $this->widget(Widget::className(), $editorConfig);
    }

}