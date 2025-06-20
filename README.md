# 🏫 School Management CRUD Module (CodeIgniter 4 - HMVC)

A basic CRUD app for managing school partners built using **CodeIgniter 4** with **HMVC structure**.

---

## 📦 Features Implemented

- List all schools with pagination and search
- Add a new school with form validation
- Edit school details
- Delete a school with confirmation
- Input validation for email and number of students
- Clean MVC & HMVC architecture

---

## 🚀 Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/school-crud.git
cd school-crud
```

### 2. Set Up `.env`

Copy `.env.example` to `.env` and set up your database:

```ini
database.default.hostname = localhost
database.default.database = school_db
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
```

### 3. Import the SQL

Use the included SQL to create the table and seed data:

```bash
mysql -u root -p school_db < school_table_seed.sql
```

### 4. Serve the Project

```bash
php spark serve --port=8080
```

Access: [http://localhost:8080](http://localhost:8080)

---

## 🔐 Demo Credentials

No login system implemented (public module).  
Future enhancement could include admin login and role-based access.

---

## 📁 HMVC Module Structure

```
/application
  /modules
    /school
      /controllers/School.php
      /models/School_model.php
      /views/
        form.php
        list.php
```

