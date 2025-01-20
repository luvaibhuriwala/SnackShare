# SnackShare
**Snack Share** is a Laravel-based web application designed to facilitate food sharing within an institute. It allows users to share excess food and request food items efficiently, promoting sustainability and community engagement.

---

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Screenshots](#screenshots)
- [License](#license)

---

## Features

- **Food Sharing**: Users can share food by specifying the menu, quantity, and expiration time.
- **Food Requesting**: Users can request available food items and contact the giver.
- **Authentication**: Secure user authentication using Laravel's built-in features.
- **Institute-Specific Listings**: Food listings are filtered based on the user's institute.
- **Real-Time Updates**: Automatically updates food availability after a request is made.
- **Responsive Design**: Mobile-friendly interface built with Bootstrap.

---

## Requirements

- PHP >= 8.0
- Composer
- MySQL >= 5.7
- Node.js (for compiling frontend assets)
- Laravel 9.x

---

## Installation

1. **Clone the Repository**
   ```bash
   git clone [https://github.com/luvaibhuriwala/SnackShare.git
   cd snack-share

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   npm run dev

3. **Configure Environment**
  - Copy .env.example to .env:
   ```bash
   cp .env.example .env
  - Set up database credentials and application details in the .env file.

4. **Run Migrations**
   ```bash
   php artisan migrate

5. **Start the Development Server**
   ```bash
   php artisan serve

---

## Usage

1. **Login or Register**: Access the login page and register as a user.
2. **Share Food**: Navigate to the "Share Food" page, add details, and share food items.
3. **View Available Food**: Browse the "Available Food" section to see what's available.
4. **Request Food**: Select an item, specify the quantity, and submit a request.

---

Developed by Luvai Bhuriwala
Email: luvaibhuriwala@gmail.com
GitHub: (https://github.com/luvaibhuriwala/)

   

