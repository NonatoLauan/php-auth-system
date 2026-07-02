# PHP Authentication System

A lightweight authentication system built with native PHP, featuring user registration, login, and session management. The project uses a custom MVC-like structure, PDO for database access, and secure password hashing.

---

## 🚀 Features

- User registration system
- User login system
- Session management
- Secure password hashing
- PDO-based database access
- Lightweight MVC-like architecture (no frameworks)

---

## 🧠 Architecture Overview

This project follows a simplified MVC-inspired structure:

- `public/` → Entry point of the application
- `app/` → Core application logic (controllers, models, services)
- `config/` → Configuration files (database, environment settings)
- `autoload` → Custom class autoloading using `spl_autoload_register`

The `Application` class acts as a simple router, handling HTTP requests (GET/POST) and directing them to the appropriate methods.

---

## 📁 Project Structure
