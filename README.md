# 🏫 School Management System

A modular CodeIgniter 4 project for managing schools, students, and session notes — using HMVC structure with Bootstrap UI.

## 📦 Features Implemented

### ✅ Assignment 1: Schools CRUD (HMVC)
- Add/edit/delete schools
- Search and pagination
- Bootstrap-styled UI
- Flash messages and validation
- Soft delete support

### ✅ Assignment 5: Session Notes Management
- Add session notes per student
- Timestamped records
- View and search notes
- Bootstrap UI

### ✅ Students Module (Custom Addition)
- Add/list students
- Link to their session notes
- Uses HMVC pattern

### ✅ Dashboard Homepage
- Centralized navigation to Schools and Students

---

## 📁 Folder Structure (HMVC-Style)

app/
├── Modules/
│ ├── Schools/
│ ├── Students/
│ └── Notes/
└── Views/
└── home.php


---

## 🛠️ Setup Instructions

1. Clone repo / download zip
2. Run `composer install`
3. Configure `.env` (DB credentials, environment)
4. Create and migrate tables:
   - `schools`, `students`, `session_notes`
5. Run development server:
   ```bash
   php spark serve --port=8080
6 . Visit: http://localhost:8080


📦 Database Tables
schools
id, school_name, contact_person, email, num_students, status, created_at, updated_at, deleted_at

students
id, name, email, phone, created_at, updated_at

session_notes
id, student_id, note_text, created_at, updated_at



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
