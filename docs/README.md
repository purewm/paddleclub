
# PureWebMedia's PaddleClub Project Documentation

## Overview

Designed by PureWebMedia, PaddleClub project is designed to provide a centralized platform for various paddling clubs to manage their events, members, and communications. Built on Drupal 11, the platform is intended to be scalable, maintainable, and easy for clubs to customize to meet their specific needs. 

## Purpose

- To offer a unified solution for paddling clubs to manage their activities.
- To provide customization options for individual clubs while maintaining a consistent user experience.
- To ensure the platform is simple to use and easy to maintain.

## Tools and Technologies

- **Drupal 11**: The main content management system for building the multi-site platform.
- **Bootstrap 5**: Used as the base theme for developing a custom Drupal subtheme, allowing for modern and responsive design.
- **Visual Studio Code (VSC)**: The primary code editor for this project, chosen for its robust features and support for extensions.
- **GitHub**: Version control and collaboration platform used to manage the project codebase.
- **BEM Naming Convention**: Used for structuring CSS classes to improve code readability, maintainability, and scalability.

#### BEM naming convention 
**Block**: The main entity that represents a distinct part of the UI, such as a container or component. E.g., `.card`, `.menu`. 
**Element**: A part of the block that has no standalone meaning and is semantically tied to the block. E.g., `.card__title`, `.menu__item`.  
**Modifier**: A flag or state that changes the appearance or behavior of a block or element. E.g., `.card--featured`, `.menu__item--active`.

### Key VSC Extensions

1. **PHP Intelephense**: For enhanced PHP development and debugging.
2. **Twig Language 2**: To support Twig templating, essential for Drupal theming.
3. **YAML**: For handling YAML configuration files used throughout Drupal.
4. **GitLens**: To provide better Git integration and version control capabilities.
5. **Live Sass Compiler**: For compiling SCSS files to CSS directly within VSC, supporting styling needs without the need for additional build tools.

## Project Structure

- **/web**: The Drupal root directory.
- **/themes/custom/paddleclub**: Custom theme directory based on Bootstrap 5.
- **/scss**: Directory for SCSS files, used for theming and customization.
- **/css**: Directory for compiled CSS files.

## Development Workflow

1. **Clone the Repository**: Use `git clone <repo-url>` to clone the project repository from GitHub.
2. **Start DDEV Environment**: Navigate to the project directory and run `ddev start` to initiate the local development environment.
3. **Install Drupal**: Use Drush to install Drupal with the appropriate settings in `settings.php`.

## Customization

Each club site can:
- Set a primary color for branding via the Drupal admin interface.
- Customize event names and settings specific to their activities.

## Contributions

Follow Drupal coding standards and use the provided Git workflow for feature development and bug fixes. All changes should be reviewed through pull requests on GitHub.

