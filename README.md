<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Certificate Generator

## Description
A simple Laravel web application that generates professional PDF certificates based on user input.

## Features
- User-friendly UI
- Generate PDF certificates
- Download certificate instantly
- Dockerized application

---

## Tech Stack
- Laravel
- PHP 8.4
- DomPDF
- Tailwind CSS
- Docker

---

## Run with Docker

### Build image
docker build -t certificate-generator .

### Run container
docker run -p 8000:8000 certificate-generator

### Open in browser
http://localhost:8000
