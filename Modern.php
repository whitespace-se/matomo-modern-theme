<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\Modern;

use Piwik\Plugin;

class Modern extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
            'AssetManager.addStylesheets' => 'addStylesheets',
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
        $vars->colorWidgetExportedBackgroundBase = 'transparent';
        $vars->colorWidgetBorder = 'var(--theme-color-widget-border)';
    }

    public function addStylesheets(&$mergedContent) {
        $settings = new \Piwik\Plugins\Modern\SystemSettings();
        
        // Dark mode: Automatic, dark or light
        $darkMode = $settings->modernDarkMode->getValue();
        if($darkMode === 0){
            $mergedContent .= "
            @media (prefers-color-scheme: dark) {";
        }
        if($darkMode === 0 || $darkMode === 1){
            $mergedContent .= "
                :root {
                --theme-color-background-base: rgb(22, 27, 34);
                --theme-color-background-contrast: rgb(22, 27, 34);
                --theme-color-background-high-contrast: rgb(48, 54, 61);
                --theme-color-text-contrast: rgb(201, 209, 217);
                --theme-color-menu-contrast-background: rgb(13, 17, 23);
                --theme-color-headline-alternative: rgb(201, 209, 217);
                --theme-color-header-background: rgb(22, 27, 34);
                --theme-color-widget-background: rgb(22, 27, 34);
                --theme-color-header-text: rgb(255, 255, 255);
                --theme-color-menu-contrast-text-selected: rgb(255, 255, 255);
                --theme-color-text: rgb(201, 209, 217);
                // Custom
                --darkmode-color-border: rgb(48, 54, 61);
                --darkmode-color-codeblock: rgb(255, 255, 255);
                --darkmode-color-codeblock-background: rgb(13, 17, 23);
                --darkmode-color-header-active-link: rgb(255, 255, 255);
                --darkmode-color-header-background: rgb(13, 17, 23);
                --darkmode-color-hover: rgb(13, 17, 23);
                }";
        }
        if($darkMode === 0) {
            $mergedContent .= "
            }
            ";
        }

        // Set header background color
        $headerBackgroundColor = $settings->modernHeaderBackgroundColor->getValue();
        if($headerBackgroundColor !== '') {
            $mergedContent .= "
            body:not(#loginPage) nav {
                background-color: $headerBackgroundColor !important;
                box-shadow: none;
            }
            ";
        }
    }
    
}
