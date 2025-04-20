<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

# 🍔 Food Commerce

**Food Commerce** is a web-based food and beverage marketplace platform, specially built for campus communities. It supports **online pre-orders**, **role-based authentication**, and auto-rendered dashboards based on user roles.

> Current version: `v0.02`

---

## ✨ Key Features

### 👥 Authentication & Access
- ✅ **Campus Member Registration Validation**  
  - only verified campus users can register
- 🔐 **Role-Based Redirect After Login**  
  - students → redirected to home  
  - admin & sellers → redirected to their own dashboards
- 🚪 **Protected Dashboard Access**  
  - students are restricted from accessing admin/seller dashboard

### 📊 Dashboard & UI
- 🧭 **Dual Dashboards on a Single URL**  
  - the system auto-renders admin or seller dashboard based on role
- ⚙️ **Livewire + Breeze Integration**  
  - dynamic interface using Livewire components
- 🛠️ **Custom Error Pages**  
  - available for `404 not found`, `403 forbidden` and `503 service unavailable`

### 🧱 Database & Seeder
- 📦 **User Table Migration**
- 🌱 **User Seeder**  
  - includes admin, seller, UEC, and student roles  
  - default password: `123` for all seeded users

### 📧 Password Reset
- ✉️ **Forgot Password Feature**  
  - sends reset link via email  
  - *requires Gmail SMTP setup in `.env`*

---

## ⚙️ Tech Stack

- **Framework:** Laravel 12
- **Frontend:** Breeze + Livewire + TailwindCSS
- **Database:** MySQL
- **Local Server:** WAMP / XAMPP
- **Email Service:** Gmail SMTP

---

## 🚀 Installation (Local Setup)

1. Clone the repository and go to the project directory:
   ```sh
   git clone https://github.com/your-username/food-commerce.git
   cd food-commerce

2. Install dependencies:
   ```sh
   composer install
   npm install

3. Copy .env file:
   ```sh
   cp .env.example .env

4. Generate application key:
   ```sh
   php artisan key:generate

5. Set up your .env with database credentials, then run:
   ```sh
   php artisan migrate --seed

6. Set up your .env with database credentials, then run:
   ```sh
   php artisan migrate --seed

7. Start local development servers:
    In one terminal:
    ```sh
    php artisan serve
    ```
    In a separate terminal:
    ```sh
    npm run dev
    ```
## 📌 NOTE
Make sure to configure Gmail SMTP in your .env file for the Password Reset feature to work properly.
```env
MAIL_MAILER=smtp  
MAIL_HOST=smtp.gmail.com  
MAIL_PORT=587  
MAIL_USERNAME=your_gmail@gmail.com  
MAIL_PASSWORD=your_app_password  
MAIL_ENCRYPTION=tls  
MAIL_FROM_ADDRESS=your_gmail@gmail.com  
MAIL_FROM_NAME="${APP_NAME}"  
```
💡 don't forget to enable 2-step verification and create an App Password on your Google Account settings!
