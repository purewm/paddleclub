
# PaddleClub Theme Development

## Overview

The PaddleClub theme is built using 'gowilds' as a base theme, and 'paddleclub_sub' as the subtheme. If other clubs need specific theming changes, copy the paddleclub_sub theme and place it in that site's directory (for ex: sites/siska/themes/paddleclub_siska). This way it is not available to other sites. 
The theme is customized using SCSS, with Live Sass Compiler handling any compilation directly within Visual Studio Code.

## Directory Structure

- **/themes/custom/paddleclub**: Main theme directory for PaddleClub.
- **/scss**: Contains all SCSS files for theme customization.
- **/css**: Contains the compiled CSS files.

## Customizing the Theme

- Modify SCSS variables to change gowilds_sub default styles but do not alter the base theme.
- Add custom SCSS files for additional design elements and layout adjustments.
- Use Twig templates to manage HTML structure and integrate dynamic content.

## Adding Styles

1. Create SCSS files in the `/scss` directory for any new styles.
2. Import new SCSS files into `styles.scss` to ensure they are included in the compilation.
3. Save the SCSS file to trigger the Live Sass Compiler and update the CSS in the subtheme, gowilds_sub.

## Best Practices

- Use consistent naming conventions for classes and variables.
- Keep SCSS modular by breaking down styles into smaller, manageable files.
- Regularly update and test the theme to ensure compatibility with new versions of Drupal and Bootstrap.

