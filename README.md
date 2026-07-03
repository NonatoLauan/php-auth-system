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
- Custom autoloading using `spl_autoload_register`

The `Application` class acts as a simple router, handling HTTP requests (GET/POST) and directing them to the appropriate methods.

---

## 📁 Project Structure


php-auth-system/
│
├── app/
│ ├── Application.php
│ └── (future controllers, models, services)
│
├── config/
│ └── database.php
│
├── public/
│ └── index.php
│
├── .gitignore
└── README.md


---

## ⚙️ How It Works

### 1. Entry Point

The application starts at:


public/index.php


This file initializes the autoloader and runs the main `Application` class.

---

### 2. Request Handling

The `Application` class handles requests based on HTTP method:

- `GET` → Displays registration form  
- `POST` → Processes registration data  

This is done through a simple internal router using `switch ($_SERVER['REQUEST_METHOD'])`.

---

### 3. Registration Flow

1. User submits registration form  
2. Data is received via `$_POST`  
3. Basic validation is performed  
4. Password is securely hashed using `password_hash()`  
5. (Future) Data is stored in database using PDO  

---

## 🔐 Security Features

- Password hashing using `password_hash()`
- Prepared statements with PDO (SQL injection protection)
- Basic input validation
- Separation of concerns (routing vs logic)

---

## 🛠️ Technologies Used

- PHP (Vanilla)
- PDO (Database layer)
- HTML (forms/views)
- Apache or PHP built-in server

---

## 📌 Project Status

This project is currently in early development stage:

- Core routing implemented
- Registration flow in progress
- Login system not yet completed
- Database integration in progress

---

## 🎯 Future Improvements

- Full login system
- Logout functionality
- Persistent sessions
- Database integration (MySQL/PostgreSQL)
- Improved MVC separation
- Input validation layer
- Error handling system
- JWT-based API version (future upgrade)

---

## 👨‍💻 Author

Developed as a learning project focused on understanding authentication systems, backend structure, and PHP fundamentals.

---

## 📄 License

This project is open-source and available for learning purposes.
