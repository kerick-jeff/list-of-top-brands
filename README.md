# List of Top Brands

<img width="1220" alt="image" src="https://github.com/user-attachments/assets/d12bf466-671a-4105-84e8-6719f97ab8c1" />

A beautiful mobile-friendly fullstack application for managing top brands with geolocation support.

## Table of Contents
- [Demo](#demo)
- [Features](#features)
- [Project Structure](#project-structure)
- [Tech Stack](#tech-stack)
- [Local Development Setup](#local-development-setup)
  - [Backend (Laravel)](#backend-laravel)
  - [Frontend (Angular)](#frontend-angular)
- [Docker Setup](#docker-setup)
- [API Documentation](#api-documentation)
- [Troubleshooting](#troubleshooting)
- [Screenshots](#screenshots)

## Demo

A quick lookaround: [WATCH](https://www.loom.com/share/90bdac2125554fa1a09d3e1121dc3fab?sid=b5ca5b7e-2bba-4a86-8ccb-c530f1e492f7)

## Features

### Core Functionality
- 🌍 Geolocation-based content (Cloudflare `CF-IPCountry` header)
- 📱 Responsive UI with Tailwind CSS
- 🖼️ Image upload handling (Base64 or file)
- 📊 CRUD operations for brand management
- 🔄 Real-time data synchronization

### Developer Experience
- 📚 Automated API docs with Scribe
- 🐳 Dockerized development environment
- 🧪 Pre-configured database seeding
- 🔍 Request validation with Form Requests

## Project Structure

By default, Laravel and Angular frameworks come with a lot of files. These file structures would help navigate the important files that were affected while working on the this project.

<img width="767" alt="Screenshot 2025-05-03 at 02 03 38" src="https://github.com/user-attachments/assets/cb4ffa75-bf2c-450d-ad82-377f6152a073" />

### Backend (Laravel REST API)

<img width="582" alt="Screenshot 2025-05-03 at 02 03 10" src="https://github.com/user-attachments/assets/9441af00-40ec-45fd-90a8-4e4eed0af5f3" />

### Frontend (Angular Web Application)

<img width="582" alt="Screenshot 2025-05-03 at 02 02 36" src="https://github.com/user-attachments/assets/eaea0acc-5df1-4b4a-a433-c4f901dcbb2f" />

## Tech Stack

| Component       | Technology                          |
|-----------------|-------------------------------------|
| **Backend**     | Laravel 12, PHP 8.2+, MySQL 8.0+    |
| **Frontend**    | Angular 16+, Tailwind CSS 4+        |
| **API Docs**    | Scribe (OpenAPI 3.0)                |
| **Container**   | Docker with multi-stage builds      |
| **Deployment**  | Nginx (production)                  |

## Local Development Setup

### Prerequisites
- PHP 8.2+
- Composer 2.x
- MySQL 8.0+
- Node.js 18+
- Angular CLI 19+

### Backend (Laravel)

```
# Clone repository
git clone https://github.com/kerick-jeff/list-of-top-brands.git
cd list-of-top-brands

# Install dependencies
composer install

# Configure environment
cp .env.example .env
# Edit .env with your database credentials. Also, ensure storage is using the public disk

# Setup database
php artisan migrate
php artisan db:seed  # Optional: Populate with sample data

# Link storage
php artisan storage:link

# Start development server
php artisan serve
```

Access API at: http://localhost:8000/api/v1

### Frontend (Angular)

```
cd resources/angular

# Install dependencies
npm install

# Start development server
npm start
```

Access app at: http://localhost:4200

## Docker Setup

This is an alternative to the Backend and Frontend setup discussed above.

```
# Build and start containers
docker compose up -d --build

# Run migrations
docker compose exec laravel php artisan migrate

# Seed database (optional)
docker compose exec laravel php artisan db:seed

# Link storage
docker compose exec laravel php artisan storage:link
```

### Access services

| Service      | URL                         |
|--------------|-----------------------------|
| Laravel API  | http://localhost:8000       |
| Angular App  | http://localhost:4200       |
| API Docs     | http://localhost:8000/docs  |

### Key Docker Commands

```
# Rebuild containers
docker compose up -d --force-recreate --build

# View logs
docker compose logs -f angular

# Run artisan commands
docker compose exec laravel php artisan [command]
```

## API Documentation

Access interactive docs at: http://localhost:8000/docs

There is also a public Postman collection: See [HERE](https://documenter.getpostman.com/view/3497755/2sB2j4gXF9).

## Troubleshooting

### Common Issues

Image Uploads Not Working
- Verify storage/app/public is linked to public/storage
- Check FILESYSTEM_DISK=public in .env

CORS Errors
- Ensure proper CORS headers in config/cors.php
- Verify Angular's api.config.ts has correct base URL

Docker MySQL Issues (M1 Mac)
```
# In docker-compose.yml
db:
  platform: linux/amd64
```

Angular Not Updating

```
docker compose exec angular npm install
docker compose restart angular
```

## Screenshots

<img width="1220" alt="image" src="https://github.com/user-attachments/assets/01b7c605-5c6b-43cc-b443-2502773b28c5" />

<img width="1423" alt="image" src="https://github.com/user-attachments/assets/8e711d78-5b7e-4121-8193-78b10199f03e" />

<img width="1423" alt="image" src="https://github.com/user-attachments/assets/ea84f290-f6de-4ff0-9fa4-0960a41e107b" />

<img width="1423" alt="image" src="https://github.com/user-attachments/assets/f38e09e5-b113-4378-a66e-5d4585ab3b9a" />
