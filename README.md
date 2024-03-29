# WordPress Theme Development Environment

Welcome to your WordPress Theme Development Environment! This template is designed to streamline the setup process for developing custom WordPress themes. By leveraging Docker, you can have a WordPress site up and running in minutes, ready for you to start coding your custom theme, `DevTemplate`. Let's get started!

## Prerequisites

Before you begin, ensure you have Docker installed and running on your system. If you haven't installed Docker yet, you can find the installation guide for your specific operating system at the [Docker documentation](https://docs.docker.com/get-docker/).

## Installation

### Step 1: Launching the Environment

First, clone this repository to your local machine using the following command:

```bash
git clone <repository-url>
```

Navigate into the cloned directory:

```bash
cd <cloned-directory-name>
```

Start your WordPress development environment using Docker Compose:

```bash
docker-compose up
```

This command builds and starts the containers needed for your WordPress site. The first time you run this command, it may take a few minutes to download and build everything.

### Step 2: Setting Up WordPress

After the containers are up and running, open your web browser and go to:

```
http://localhost:8000
```

You will be greeted by the WordPress installation wizard. Follow the steps to set up your WordPress site, including selecting your language, and filling in the site information and admin account details.

### Step 3: Activating the Custom Theme

Once logged into your WordPress admin dashboard, navigate to:

```
Appearance -> Themes
```

Here, you'll find the `DevTemplate` theme ready to be activated. Simply hover over the theme and click the 'Activate' button.

## Starting Development

With your development environment set up and your custom theme activated, you're ready to start coding! Your theme's files are located in the `theme` directory. Modify these files to begin developing your custom WordPress theme.

## Support

If you encounter any issues or have questions, feel free to open an issue on the GitHub repository, or consult the [WordPress Codex](https://codex.wordpress.org/) and [Docker Documentation](https://docs.docker.com/) for more information.

---

Happy coding! 🚀