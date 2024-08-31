<p align="center" style="margin-top: 20px;margin-bottom: 20px">
  <img src="https://philum.callvgroup.net/images/philum.png" alt="Philum" height="120"/>
</p>

# Philum - A Lightweight PHP Framework

Philum is a minimalist PHP framework designed for developers who need a straightforward and efficient tool for building web applications. With a focus on simplicity and performance, Philum provides all the essentials you need without the bloat.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
  - [Cloning the Repository](#cloning-the-repository)
  - [Using Composer](#using-composer)
- [Configuration and Setup](#configuration-and-setup)
- [Defining Routes](#defining-routes)
- [Contributing](#contributing)
- [License](#license)

## Features

Philum comes with a rich set of features to help you build robust and scalable web applications:

- **MVC Architecture**: Organize your application with the Model-View-Controller (MVC) pattern, separating your business logic, user interface, and data models.
- **Query Builder / ORM**: Easily interact with your database using an intuitive query builder or object-relational mapping (ORM).
- **Routing**: Define clean and readable URL routes with a powerful routing system.
- **Cookie Management**: Manage cookies with ease, providing a simple API for setting and retrieving cookies.
- **Crypto**: Secure your data with built-in encryption and decryption methods.
- **Mailer**: Send emails effortlessly using the built-in mailer component.
- **Session Management**: Handle user sessions securely and efficiently.
- **Form Validation**: Validate user input with a flexible and extendable form validation system.
- **HTTP Request and Response**: Work with HTTP requests and responses using a simple and consistent API.

## Installation

Philum can be installed either by cloning the repository directly or using Composer.

### Cloning the Repository

To get started by cloning the repository, use the following command:

```bash
git clone https://github.com/refkinscallv/Philum.git
```

### Using Composer

Alternatively, you can install Philum via Composer:

```bash
composer create-project refkinscallv/philum
```

## Configuration and Setup

Once Philum is installed, follow these steps to configure and set up your environment:

1. **Build the Project**

   Compile and prepare your project by running:

   ```bash
   php cli build
   ```

2. **Update the Project (Optional)**

   If you need to update your project, use:

   ```bash
   php cli update
   ```

3. **Start the Built-In PHP Server**

   To run your application using PHP's built-in server, execute:

   ```bash
   php cli start
   ```

   This command will start the server, allowing you to view your application in a web browser.

## Defining Routes

Philum uses a simple and intuitive routing system. Routes are defined in `app/Routes/Route.php`. Below is an example of how to define routes:

```php
<?php

use RF\Router\Route;

// Registering modules
Route::register([
    __DIR__ . "\\module\\system"
]);

// Custom 404 Page
Route::set404([Philum\App\Controllers\Page::class, 'page404']);

// Defining routes
Route::get("",  [Philum\App\Controllers\Welcome::class, 'index']);
Route::get("/new-path", function() {
    // Custom logic for this route
});
```

- **Module Registration**: Modules can be registered using `Route::register()`.
- **Custom 404 Handling**: Set a custom handler for 404 errors using `Route::set404()`.
- **Defining GET Routes**: Use `Route::get()` to define your GET routes.

## Contributing

We welcome contributions from the community! If you'd like to contribute to Philum, please follow these steps:

1. **Fork the Repository**: Create a personal fork of the repository on GitHub.
2. **Clone Your Fork**: Clone your forked repository to your local machine.
3. **Create a Feature Branch**: Create a new branch for your feature or bug fix.
4. **Make Changes**: Implement your changes in the feature branch.
5. **Submit a Pull Request**: Push your changes to your forked repository and submit a pull request to the main repository.

For detailed guidelines on contributing, please refer to the [CONTRIBUTING.md](CONTRIBUTING.md) file.

## License

Philum is open-source software licensed under the [MIT License](LICENSE). You are free to use, modify, and distribute this software in your own projects.

---

Thank you for choosing Philum! We hope this framework helps you build your projects quickly and efficiently. If you encounter any issues or have suggestions for improvement, please feel free to open an issue or contribute to the project.
