# VAP - Photography Booking & Client Management Portal

## Overview

VAP is a full-stack photography booking and client management portal built using PHP and MySQL. The project was designed to simulate a real-world business workflow where clients can book photography sessions and administrators can manage bookings through a dashboard.

This project combines photography portfolio presentation with backend business logic, CRUD operations, and workflow management.

---

## Features

### Frontend Features

* Responsive homepage
* Photography portfolio gallery
* Photo and video portfolio sections
* Services section
* Contact section
* Social media integration
* Professional modern UI design

### Backend Features

* Photography session booking form
* MySQL database integration
* Booking storage system
* Admin dashboard
* Booking status workflow
* CRUD operations

  * Create bookings
  * Read bookings
  * Update booking status
  * Delete bookings

---

## Technologies Used

### Frontend

* HTML
* CSS
* JavaScript

### Backend

* PHP
* MySQL

### Tools

* XAMPP
* Git
* GitHub
* VS Code

---

## Project Structure

```bash
vap/
│
├── index.php
├── booking.php
├── dashboard.php
│
├── includes/
│   └── db.php
│
├── assets/
│   ├── css/
│   │   └── style.css
│   │
│   ├── js/
│   │   └── script.js
│   │
│   ├── images/
│   │
│   └── videos/
│
└── README.md
```

---

## Database Setup

### Database Name

```sql
vap
```

### Table Name

```sql
bookings
```

### Table Structure

| Column Name  | Type    |
| ------------ | ------- |
| id           | INT     |
| name         | VARCHAR |
| email        | VARCHAR |
| phone        | VARCHAR |
| session_type | VARCHAR |
| details      | TEXT    |
| status       | VARCHAR |

---

## How to Run the Project

### Step 1

Install XAMPP.

### Step 2

Move the project folder into:

```bash
C:/xampp/htdocs/
```

### Step 3

Start:

* Apache
* MySQL

from XAMPP Control Panel.

### Step 4

Create a MySQL database named:

```sql
vap
```

### Step 5

Create the `bookings` table.

### Step 6

Open the project in browser:

```bash
http://localhost/vap
```

---

## Screenshots

### Homepage

<img width="1783" height="917" alt="image" src="https://github.com/user-attachments/assets/c0140ef5-ec91-4135-aa3e-03f79ac7c603" />


### Booking Form

<img width="1865" height="873" alt="image" src="https://github.com/user-attachments/assets/298955df-9dab-4bb5-8efa-553cccf70a5f" />


### Dashboard

<img width="1882" height="914" alt="image" src="https://github.com/user-attachments/assets/9255738e-1ac9-4b98-8f0b-ed2ff2a14e32" />


---

## Learning Outcomes

Through this project, I learned:

* PHP backend development
* MySQL database integration
* CRUD operations
* Workflow management
* Frontend and backend integration
* Git and GitHub workflow
* Project organization and structure
* Debugging and troubleshooting

---

## Future Improvements

* Authentication system
* Admin login protection
* Booking search and filters
* Email notifications
* Better dashboard analytics
* Deployment to live hosting

---

## Author

Vignesh Alle

GitHub:
[https://github.com/VgnesA](https://github.com/VgnesA)

Instagram:
[https://www.instagram.com/vignesh_alle/](https://www.instagram.com/vignesh_alle/)
