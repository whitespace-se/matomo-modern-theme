<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\DarkModeTheme;

use Piwik\Plugin;

class DarkModeTheme extends Plugin
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
        $vars->colorBrand = 'var(--theme-color-brand)';
        $vars->colorBrandContrast = 'var(--theme-color-brand-contrast)';
        $vars->colorText = 'var(--theme-color-text)';
        $vars->colorTextLight = 'var(--theme-color-text-light)';
        $vars->colorTextLighter = 'var(--theme-color-text-lighter)';
        $vars->colorTextContrast = 'var(--theme-color-text-contrast)';
        $vars->colorLink = 'var(--theme-color-link)';
        $vars->colorBaseSeries = 'var(--theme-color-base-series)';
        $vars->colorHeadlineAlternative = 'var(--theme-color-headline-alternative)';
        $vars->colorHeaderBackground = 'var(--theme-color-header-background)';
        $vars->colorHeaderText = 'var(--theme-color-header-text)';
        $vars->colorMenuContrastText = 'var(--theme-color-menu-contrast-text)';
        $vars->colorMenuContrastTextSelected = 'var(--theme-color-menu-contrast-text-selected)';
        $vars->colorMenuContrastTextActive = 'var(--theme-color-menu-contrast-text-active)';
        $vars->colorMenuContrastBackground = 'var(--theme-color-menu-contrast-background)';
        $vars->colorWidgetExportedBackgroundBase = 'var(--theme-color-widget-exported-background-base)';
        $vars->colorWidgetTitleText = 'var(--theme-color-widget-title-text)';
        $vars->colorWidgetTitleBackground = 'var(--theme-color-widget-title-background)';
        $vars->colorBackgroundBase = 'var(--theme-color-background-base)';
        $vars->colorBackgroundTinyContrast = 'var(--theme-color-background-tiny-contrast)';
        $vars->colorBackgroundLowContrast = 'var(--theme-color-background-low-contrast)';
        $vars->colorBackgroundContrast = 'var(--theme-color-background-contrast)';
        $vars->colorBackgroundHighContrast = 'var(--theme-color-background-high-contrast)';
        $vars->colorBorder = 'var(--theme-color-border)';
        $vars->colorCode = 'var(--theme-color-code)';
        $vars->colorCodeBackground = 'var(--theme-color-code-background)';
        $vars->colorWidgetBackground = 'var(--theme-color-widget-background)';
    }
}
