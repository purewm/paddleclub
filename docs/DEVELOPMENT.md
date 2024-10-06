
# Development Guidelines

## Setting Up Your Environment

1. **Update Your Package Managers:** Whether you use Homebrew (Mac), Scoop (Windows), or APT (Linux) make sure your packages are up to date. 
2. **Install DDEV**: Follow the DDEV installation guide to set up your local development environment.
3. **Clone the Project**: Use `git clone <repo-url>` to clone the repository.
4. **Start DDEV**: Run `ddev start` from the project root directory to start the DDEV containers.

## Code Standards

- Adhere to Drupal coding standards for all PHP, Twig, and YAML files.
- Use the Prettier extension in VSC for consistent code formatting.

## Using Visual Studio Code

### Extensions to Use

- **PHP Intelephense**: Essential for working with PHP in Drupal.
- **Twig Language 2**: For working with Twig templates.
- **YAML**: To manage YAML configuration files effectively.
- **GitLens**: Enhances the Git capabilities within VSC.
- **Live Sass Compiler**: Automatically compiles SCSS to CSS, ensuring that styles are updated in real-time.

### Compiling SCSS

1. Ensure the Live Sass Compiler extension is active in VSC.
2. Save changes in SCSS files located in the `/scss` directory to automatically compile to CSS in the `/css` directory.

## Git Workflow

- Use feature branches for development (`feature/branch-name`).
- Write clear and concise commit messages.
- Submit changes via pull requests for code review.

