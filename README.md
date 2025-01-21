# Modern

## Description

Modern gives the Matomo interface a minimalist design with an updated colour scheme.

Modern makes it easier than ever to stay on brand. The white header means that you can simply upload your organisation’s logo – without clashing with the original Matomo header colour.

Now also with optional dark mode and the option to change the background of the page header.

The design is focused on usability and accessibility. Colours are selected to maintain a good contrast ratio. The navigation design is updated to improve focus on the main content. Support for keyboard navigation is enhanced, compared to the default Matomo interface.

Modern is maintained by usability and accessibility specialists at the [Whitespace agency](https://whitespace.se).

## Dark mode

![Dark mode](https://github.com/whitespace-se/matomo-modern-theme/blob/main/screenshots/2_dark_mode.png?raw=true)

We added dark mode as an option from version 1.1.0.

You can select the **Dark** or **Light** appearance as a default option, or make it change **automatically** with sunset (Light ⇢ Dark) and sunrise (Dark ⇢ Light).

## Custom header background colour

![Custom background colour](https://github.com/whitespace-se/matomo-modern-theme/blob/main/screenshots/3_custom_background_color.png?raw=true)

We added this configuraton as an option from version 1.1.0.

Fill in a colour code. HEX, rgb, rgba, hsl and hsla colours are allowed.

This can be particularly useful for dev/staging environments where you want to clearly signal that it's not the production environment.

## Options

![Modern options](https://github.com/whitespace-se/matomo-modern-theme/blob/main/screenshots/4_options.png?raw=true)

Edit the options from Administration > System > General Settings

## Config

Configuration can be overriden in `config.ini.php`

```php
[Modern]
modernDarkMode = 0
modernHeaderBackgroundColor = "#ff5100"
```

### Options for dark mode

- `modernDarkMode = 0` - Make it change _automatically_ with sunset (Light ⇢ Dark) and sunrise (Dark ⇢ Light)
- `modernDarkMode = 1` - Only **Dark** mode
- `modernDarkMode = 2` - Only **Light** mode

### Header background color

Fill in a colour code as a string. HEX, rgb, rgba, hsl and hsla colours are allowed.

```php
modernHeaderBackgroundColor = "#ff5100"
```

## Whitespace & Matomo

We provide support for configuration, operation, and web analytics using Matomo. Our customer portfolio includes over 30 public sector organizations, such as the [Swedish Tax Agency](https://skatteverket.se/), [Swedish National Archives](https://riksarkivet.se/), [Uppsala Municipality](https://www.uppsala.se/), [Trelleborg Municipality](https://www.trelleborg.se/), [Eslöv Municipality](https://eslov.se/), [Swedish Social Insurance Agency](https://www.forsakringskassan.se/), [Statistics Sweden](https://scb.se/), and [Umeå University](https://www.umu.se).

Learn more about [Whitespace & Matomo](https://whitespace.se/matomo/).
