<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Features
- User Dashboard
- Admin Dashboard
- Email Notifications
- Subscriber Form

# Laravel Blog System

A modern, high-performance blogging platform built with **Laravel 12** and **Bootstrap v5**. This project features a full administrative dashboard, category management, backend validation, view detail page and blog CRUD.

---

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.2+)
- **Frontend:** Bootstrap v5
- **Database:** SQLite (Default) / MySQL

---

## Installation Steps

Follow these instructions to get a local development environment up and running.

### 1. Clone the Repository
```bash
git clone https://github.com/AungBhoneMyat3612/laravel-blog-web
cd Blog
```
### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Environment Setup

Copy the example environment file and generate your application key:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Database Configuration

By default, the project is set to use SQLite.

- Create the database file: touch database/database.sqlite

```bash
php artisan migrate --seed
```

### 5. File Storage

```bash
php artisan storage:link
```
---

## Development Workflow

- Start the Laravel Server

```bash
php artisan server
```
