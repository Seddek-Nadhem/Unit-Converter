## 📏 Unit Converter Web App

A clean, stateless web application built with PHP for converting various units of Length, Weight, and Temperature. This project features a custom "handwritten" UI and dynamic PHP routing without the need for a database.

## ✨ Features

* **Multi-Category Conversion:** Dedicated pages for Length, Weight, and Temperature.
* **Stateless Architecture:** Form submissions are handled on the same page using `$_SERVER['REQUEST_METHOD']` with no database overhead.
* **Dynamic Navigation:** A shared `header.php` component dynamically highlights the active tab based on the current URL.
* **Smart Math Logic:** Uses a "Base Unit" strategy for Length (Meters) and Weight (Grams) to calculate conversions efficiently, and custom formula routing for Temperature (Celsius base).
* **Data Validation:** HTML5 form validation prevents impossible inputs (e.g., negative physical lengths or weights).

## 📁 Project Structure

```text
├── header.php         # Shared HTML head and dynamic navigation
├── index.php          # Entry point (redirects to length.php)
├── length.php         # Length conversion logic and form
├── weight.php         # Weight conversion logic and form
├── temperature.php    # Temperature conversion logic and form
├── style.css          # Global stylesheet
├── favicon.png        # 32x32px browser tab icon
└── README.md          # Project documentation
```

## 🚀 Getting Started
To run this project locally, you need a PHP environment. The instructions below use Laravel Herd, but XAMPP or MAMP will also work.

1. Clone the repository:
```bash
git clone https://github.com/seddek-nadhem/unit-converter.git
```

2. Navigate to the project directory:
```bash
cd unit-converter
```

3. Serve the application:

If using Laravel Herd, simply link the directory:
```bash
herd link
```

4. Open in Browser:

Navigate to http://unit-converter.test to use the application. 

## Inspiration

- Project was done on instructions from the backend projects beginner page on roadmap.sh
https://roadmap.sh/projects/unit-converter





