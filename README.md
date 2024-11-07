# NeLtech

NeLtech is an online e-commerce website that displays products with two main features: filter by category and search. The application is built using **Laravel 11** and styled with **Bootstrap**.

## Features

- **Filter by Category**: Easily browse products by selecting desired categories.
- **Search Functionality**: Quickly find products using the search bar.

## Technologies Used

- **Laravel 11**: A PHP framework for web artisans.
- **Bootstrap**: A CSS framework for responsive web design.

## Installation Guide

Follow these steps to set up the project locally:

1. **Clone the Repository**:

    ```bash
    git clone https://github.com/nielxfb/neltech-laravel.git
    cd NeLtech
    ```

2. **Install Composer Dependencies**:

    ```bash
    composer install
    ```

3. **Install NPM Dependencies**:

    ```bash
    npm install
    ```

4. **Copy the Environment File**:

    ```bash
    cp .env.example .env
    ```

5. **Generate Application Key**:

    ```bash
    php artisan key:generate
    ```

6. **Configure the `.env` File**:

    Update the `.env` file with your database credentials and other necessary configurations.

7. **Run Migrations**:

    ```bash
    php artisan migrate
    ```

8. **Build Assets**:

    ```bash
    npm run dev
    ```

9. **Start the Development Server**:

    ```bash
    php artisan serve
    ```

10. **Access the Application**:

    Open your browser and navigate to `http://localhost:8000`.

## Usage

- Navigate through products using category filters.
- Use the search bar to find specific products.

## Contribution

Contributions are welcome. Please fork the repository and create a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
