<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Certificate Generator

## Description

Certificate Generator is a Laravel-based web application that allows users to generate professional PDF certificates instantly through a simple and user-friendly interface.

---

## Features

* User-friendly interface
* Generate professional PDF certificates
* Instant certificate download
* Dockerized application
* Production deployment on Render
* 
---

## Tech Stack

* Laravel 12
* PHP 8.4
* DomPDF
* Tailwind CSS
* Docker
* Render

---

## Live Demo

https://certificategenerator-y6tm.onrender.com

---

## Local Installation

Clone the repository:

```bash
git clone https://github.com/000SMS000/certificateGenerator.git
cd certificateGenerator
```

Install dependencies:

```bash
composer install
```

Create environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Run the application:

```bash
php artisan serve
```

Open:

```text
http://localhost:8000
```

---

## Docker Deployment

Build the Docker image:

```bash
docker build -t certificate-generator .
```

Run the container:

```bash
docker run -p 8000:8000 certificate-generator
```

Open:

```text
http://localhost:8000
```

---

## Production Deployment

The application was deployed using Docker on Render.

Deployment URL:

https://certificategenerator-y6tm.onrender.com

Environment:

* PHP 8.4
* Laravel 12
* Docker
* Render Cloud Platform

Storage:

* File-based sessions
* No database required

---

## Deployment Challenges

During deployment, several issues were encountered and resolved:

* APP_KEY configuration
* SQLite configuration issues
* Session driver configuration
* Environment variables setup on Render

All issues were successfully resolved, and the application is now running in production.

---

## Screenshots

Deployment screenshots are available in:

```text
docs/screenshots/
```

---

## Author

Mahmoud Srour

Islamic University of Gaza
