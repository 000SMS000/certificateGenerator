# Project

Certificate Generator - Laravel Application

# Deployment Platform

Render (Docker Deployment)

## Assignment2

### Docker Challenge
The biggest challenge was configuring Laravel to run inside Docker with SQLite support. This was solved by 
installing pdo_sqlite and setting correct file permissions.

### Docker Codes
docker --version
docker build -t certificate-generator .
docker run -p 8000:8000 certificate-generator

### GitHub Learning
I learned how to manage a professional repository structure, write meaningful commits, and use Docker for 
reproducible environments.

## GitHub Codes
git init
git status
git add.
git commit
git push

# Assignment3


## Issues Encountered and Solutions

### 1. Internal Server Error (500)

**Problem:**
After deployment, the application displayed a 500 Internal Server Error page.

**Cause:**
The application environment variables were not configured correctly on Render.

**Solution:**
Added the required environment variables, including:

 APP_KEY
 APP_ENV
 APP_DEBUG
 SESSION_DRIVER

---

### 2. SQLite Database Error

**Problem:**
Laravel generated the following error:

Database file at path does not exist.

**Cause:**
The application was initially configured to use SQLite, but the database file was not available in the deployment environment.

**Solution:**
The application was modified to work without a database because database storage was not required for the certificate generation functionality.

Changes included:

* Using file-based sessions.
* Removing database dependency from deployment configuration.
* Removing SQLite-related settings from the Docker deployment process.

---

### 3. Session Storage Issue

**Problem:**
Laravel attempted to read session data from a database table.

**Cause:**
Session configuration was still pointing to database storage.

**Solution:**
Changed the session driver to:

SESSION_DRIVER=file

This allowed Laravel to store session data in files instead of a database.

---

### 4. Docker Deployment Verification

**Actions Performed:**

 Built the Docker image successfully.
 Ran the container locally.
 Verified Laravel application accessibility.
 Deployed the Dockerized application to Render.
 Verified successful production deployment.

---

## Final Result

The Certificate Generator application was successfully deployed using Docker on Render.

The application is accessible online and generates PDF certificates without requiring a database system.
