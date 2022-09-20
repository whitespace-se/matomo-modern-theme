# Modern

## Description

Modern gives the Matomo interface a minimalist design with an updated colour scheme.

Modern makes it easier than ever to stay on brand. The white header means that you can simply upload your organisation’s logo – without clashing with the original Matomo header colour.

Now also with optional dark mode and the option to change the background of the page header.

The design is focused on usability and accessibility. Colours are selected to maintain a good contrast ratio. The navigation design is updated to improve focus on the main content. Support for keyboard navigation is enhanced, compared to the default Matomo interface.

Modern is maintained by usability and accessibility specialists at the [Whitespace agency](https://whitespace.se).

## Dark mode

![Dark mode](https://github.com/whitespace-se/matomo-modern-theme/blob/master/screenshots/2_dark_mode.png?raw=true)

We added dark mode as an option from version 1.1.0.

You can select the **Dark** or **Light** appearance as a default option, or make it change **automatically** with sunset (Light ⇢ Dark) and sunrise (Dark ⇢ Light).

## Custom header background color

![Custom background color](https://github.com/whitespace-se/matomo-modern-theme/blob/master/screenshots/3_custom_background_color.png?raw=true)

We added custom header background color as an option from version 1.1.0.

Fill in a the color code. HEX, rgb, rgba, hsl and hsla colors are allowed.

This can especially useful for dev/staging environments where you clearly wants to 

## Options

![Modern options](https://github.com/whitespace-se/matomo-modern-theme/blob/master/screenshots/4_options.png?raw=true)

Edit the options from Administration > System > General Settings
## Config

Configuration can be overriden in `config.ini.php`

```php
[Modern]
modernDarkMode = 0
modernHeaderBackgroundColor = "#ff5100"
```

### Options for dark mode
- `modernDarkMode = 0` - Make it change *automatically* with sunset (Light ⇢ Dark) and sunrise (Dark ⇢ Light)
- `modernDarkMode = 1` - Only **Dark** mode
- `modernDarkMode = 2` - Only **Light** mode

### Header background color

Fill in a the color code as a string. HEX, rgb, rgba, hsl and hsla colors are allowed.

```php
modernHeaderBackgroundColor = "#ff5100"
```
## Whitespace & Matomo

We offer support for configuration, operation and web analysis with Matomo. The customer list includes 30+ organizations in the public sector - e.g. [The Swedish Tax Agency](https://skatteverket.se/), [The Swedish National Archives](https://riksarkivet.se/), [Uppsala municipality](https://www.uppsala.se/), [Trelleborg Municipality](https://www.trelleborg.se/), [Eslöv municipality](https://eslov.se/), the [Swedish Social Insurance Agency](https://www.forsakringskassan.se/), [Statistics Sweden](https://scb.se/) & [Umeå University](https://www.umu.se).

Read about [Whitespace & Matomo](https://whitespace.se/matomo/)
