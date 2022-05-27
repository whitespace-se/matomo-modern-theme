<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\DarkMode;

use Piwik\Settings\Setting;
use Piwik\Settings\FieldConfig;

/**
 * Defines Settings for DarkMode.
 */
class SystemSettings extends \Piwik\Settings\Plugin\SystemSettings
{
    /** @var Setting */
    public $modernDarkMode;

    // /** @var Setting */
    // public $modernHeaderBackgroundColor;

    protected function init()
    {
        $this->modernDarkMode = $this->createModernDarkModeSetting();
        $this->modernDarkMode->setIsWritableByCurrentUser(false);
        // $this->modernHeaderBackgroundColor = $this->createModernHeaderBackgroundColorSetting();
        // $this->modernHeaderBackgroundColor->setIsWritableByCurrentUser(false);
    }

    private function createModernDarkModeSetting()
    {
        return $this->makeSetting('modernDarkMode', true, FieldConfig::TYPE_BOOL, function (FieldConfig $field) {
            $field->title = 'Dark mode';
            $field->uiControl = FieldConfig::UI_CONTROL_CHECKBOX;
        });
    }

    // private function createModernHeaderBackgroundColorSetting()
    // {
    //     return $this->makeSetting('modernHeaderBackgroundColor', '', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
    //         $field->title = 'Header background color';
    //         $field->uiControl = FieldConfig::UI_CONTROL_TEXT;
    //         $field->description = 'Define custom header background colo. HEX, rgb, rgba, hsl and hsla colors are allowed.';
    //         $field->validate = function ($value, $setting) {
    //             preg_match('/^(#(?:[0-9a-f]{2}){2,4}|#[0-9a-f]{3}|(?:rgba?|hsla?)\((?:\d+%?(?:deg|rad|grad|turn)?(?:,|\s)+){2,3}[\s\/]*[\d\.]+%?\))$/', $value, $match);
    //             if (empty($match)) {
    //                 throw new \Exception("Value $value is invalid");
    //             }
    //         };
    //     });
    // }
}
