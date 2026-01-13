# Mini GIS Backend Service - Locations Management API

## 📌 Project Overview
This project is a GIS-enabled backend service designed to manage Points of Interest (POIs) on a map. It demonstrates:
* **Backend Engineering:** Using Laravel 10 and PostgreSQL.
* **GIS Concepts:** Handling Latitude/Longitude and GeoJSON formatting.
* **Visualization:** Using Mapbox GL JS to render points on an interactive map.

## 🚀 Features
* **RESTful API:** Create, Read, Update, and Delete (CRUD) locations.
* **GeoJSON Support:** A dedicated endpoint (`/api/locations/geojson`) that returns data in standard `FeatureCollection` format for map integration.
* **Interactive Map:** A frontend interface centered on Riyadh, Saudi Arabia, displaying location markers with popups.

## 🛠️ Setup Instructions

### Prerequisites
* PHP 8.1 or higher
* Composer
* PostgreSQL

### Installation Steps
1.  **Clone the Repository**
    ```bash
    git clone <YOUR_GITHUB_REPO_LINK>
    cd <YOUR_PROJECT_FOLDER>
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    ```

3.  **Environment Setup**
    * Rename `.env.example` to `.env`.
    * Update your database credentials in `.env`:
        ```env
        DB_CONNECTION=pgsql
        DB_HOST=127.0.0.1
        DB_PORT=5432
        DB_DATABASE=your_database_name
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
        ```

4.  **Database Migration & Seeding**
    ```bash
    php artisan migrate
    php artisan db:seed --class=LocationsSeeder
    ```

5.  **Run the Server**
    ```bash
    php artisan serve
    ```

## 🗺️ API Endpoints

| Method | Endpoint | Description |
| :--- | :--- | :--- |
| `GET` | `/api/locations` | List all locations (supports pagination). |
| `POST` | `/api/locations` | Create a new location. |
| `GET` | `/api/locations/{id}` | Retrieve a single location by ID. |
| `GET` | `/api/locations/geojson` | **GIS Special:** Returns locations as a GeoJSON FeatureCollection. |
| `GET` | `/api/locations?category=` | **:** Returns a count of locations per category. |

## 🌍 How to View the Map
1.  Ensure the Laravel server is running (`php artisan serve`).
2.  Open your browser and navigate to:
    `http://127.0.0.1:8000/map.html`
3.  You should see markers for locations in Riyadh (e.g., Kingdom Centre, PNU).

## 📝 Assumptions
* **Mapbox Token:** The Mapbox access token is included directly in the `map.html` file for demonstration purposes. In a production environment, this would be secured via environment variables.
* **Frontend Location:** The `map.html` file is placed in the `public/` directory to serve it easily from the same domain as the API, avoiding CORS (Cross-Origin Resource Sharing) complexity during development.
