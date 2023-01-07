<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */


namespace harrytang\bootstrapsocial;

use yii\helpers\Html;

/**
 * Class Button
 * @package harrytang\bootstrapsocial* 
 */
class Button extends Widget
{

    public $iconOnly=false;

    public $button='';
    public $link='#';

    /**
     * @var string the button label
     */
    public $label = 'Button';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;


    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        $this->register();

        /* link */
        $this->options=array_merge($this->options, ['href'=>$this->link]);


        $class='btn-block btn-social btn-'.$this->button;
        if($this->iconOnly)
        {
            $class='btn-social-icon btn-'.$this->button;
        }
        if($this->encodeLabel)
        {
            $this->label=Html::encode($this->label);
        }
        Html::addCssClass($this->options, 'btn '.$class);

    }

    /**
     * Renders the widget.
     */
    public function run()
    {

            echo Html::beginTag('a', $this->options);
            echo Html::tag('i', '', ['class'=>'fa fa-'.$this->button]);
            echo $this->iconOnly?'':$this->label;
            echo Html::endTag('a');

    }

} 