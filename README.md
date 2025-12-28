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

2. **Start Apache**
    Make sure Apache is running in XAMPP.

3. **Open Postman**
    Enter the following URL to test the dummy endpoint:

    http://localhost/contest-api/test


    Expected Response
    You should get the following JSON response:

    {
    "status": "success",
    "message": "Test endpoint reached successfully."
    }
