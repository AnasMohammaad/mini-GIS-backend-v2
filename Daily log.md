# Daily Work Log

## Day 1 Fri 9 Jan 2026 :  Searching for a GIS concept & how to implement it
**Tasks Completed:**
* Understanding the basics of GIS and its application in different domain.
* Shearching for how setup Laravel & PostgreSQL.

**Problems Faced:**
* *Issue:* The storage capacity of the laptop is almost full.
* *Solution:* Check the laptop, delete unused programs, and transfer files to an external hard drive.

## Day 2 Sat 10 Jan 2026 : Backend Setup & Database
**Tasks Completed:**
*Learned using Laravel and how to create a project.
*Initialized Laravel project and configured PostgreSQL connection.
*continue Learneing Laravel.

**Problems Faced:**
* *Issue:* Errors in configured settings and a lack of understanding of them.
* *Solution:*Ask who used Laravel,research on google,Laravel doc, and use AI tools to understand the problem.

## Day 3 Sun 11 Jan 2026: Backend Setup & API Development & GIS Research
**Tasks Completed:**
* Created migration for `locations` table.
* Implemented `Location` model and basic Controller logic.
* Built REST API endpoints (`index`, `store`, `show`).
* Researched GIS concepts: Learned the difference between standard JSON and GeoJSON.
* Implemented the special `GET /api/locations/geojson` endpoint.

**Problems Faced:**
* *Issue:
        * Connection problems PostgreSQL with Laravel.
        * Mapbox requires data in a specific "FeatureCollection" structure.
* *Solution:
        * Google search and copying the solution to project "temporary".
        * Used Laravel's `map()` function to transform my database rows into the nested JSON structure required by    GeoJSON.

## Day 4 Mon 12 Jan 2026: Frontend Integration & update Documentation
**Tasks Completed:**
* Created `map.html` using Mapbox GL JS.
* Connected the frontend to the backend API using `fetch()`.
* Populated the database with real Riyadh locations using a Seeder.

**Problems Faced:**
* *Issue:* Markers were not showing up initially.
* *Solution:* Realized I needed to wait for the map 'load' event before fetching data. Also verified the token was correct.

## Day 5 Tue 13 Jan 2026:Pagination, Category Summary, and Docker.
