<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\ModernTheme;

use Piwik\Plugin;

class ModernTheme extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $vars)
    {
        $vars->fontFamilyBase = '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Cantarell, "Helvetica Neue", sans-serif';
    }
}
