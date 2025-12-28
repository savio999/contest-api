# contest-api

Contest API (REST) built with **PHP OOP**.  
This API allows users to participate in contests, answer questions, and track scores. 

---

## Features

- RESTful API using **PHP OOP**  
- Front controller pattern with `index.php`  
- Routing compatible with:
  - PHP built-in server  
  - Apache `.htaccess` (FallbackResource)  
- Postman-ready testing  

---

## Tech Stack

| Layer | Technology |
|-------|------------|
| Language | PHP (OOP) |
| Database | MySQL / MariaDB |
| Web Server | Apache |
| API Testing | Postman |
| Version Control | Git|

## Quick Start

Follow these steps to test the dummy API:

1. **Clone the project**  
    Copy the repository into your XAMPP `htdocs` folder

2. **Start Apache and MYSQL**
    Make sure Apache and MYSQL is running in XAMPP.

3. **Configure Environment**
    Enter host,username and password in .env file in project root

4. **Setup DB and Tables**
    - The `/setup-db` endpoint is intended only for initial DB setup. 
        ```http
        POST /setup-db
        ```
        Postman
        ```http
        http://localhost/contest-api/setup-db (POST)        
        ```
        Successful Response will be:
        ```json
        {
           "status": "success",
           "message": "Database and tables created successfully"
        }

        ```


