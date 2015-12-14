<?php
namespace igorshadurin\pjaxloadingmodal;

use Yii;
use yii\web\AssetBundle;
use yii\base\InvalidConfigException;
use yii\base\InvalidCallException;

/**
 *
 * @author Ihar Shaduryn
 *
 */
class PjaxLoadingModalAsset extends AssetBundle
{
    const VENDOR_ALIAS = '@vendor/igorshadurin/yii2-pjax-loading-modal/';

    public $sourcePath = BootswatchAsset::VENDOR_ALIAS;
    /**
     * @var string name of the active bootswatch theme. When NULL, no bootswatch theme
     * is applied.
     */
    public static $theme = null;
    public $depends = [
        //'yii\bootstrap\BootstrapAsset'
    ];

    /**
     * Initialize the class properties depending on the current active theme.
     *
     * When debug mode is disabled, the minified version of the css is used.
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->css = [
			$this->sourcePath.'pjax-loading-modal.css';
        ];

        // optimized asset publication : only publish bootswatch theme folders and font folder.

        /*$this->publishOptions['beforeCopy'] = function ($from, $to) {
            if (is_dir($from)) {
                $name = pathinfo($from, PATHINFO_BASENAME);
                return !in_array($name, ['2', 'api', 'assets', 'bower_components', 'tests', 'help', 'global', 'default']);
            } else {
                $ext = pathinfo($from, PATHINFO_EXTENSION);
                return in_array($ext, ['css', 'eot', 'svg', 'ttf', 'woff', 'woff2']);
            }
        };*/

        parent::init();
    }
}
