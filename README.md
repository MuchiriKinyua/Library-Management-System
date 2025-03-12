# Library Management System

![Screenshot from 2025-03-12 14-46-03](https://github.com/user-attachments/assets/5700c121-b4be-4921-9f15-fd1207ba1983)

# Overview

The Library Management System is a web-based application designed to efficiently manage library operations such as book inventory, member records, borrowings, and reservations. Built with Laravel, it ensures seamless book tracking, digital resource management, and fine processing.

![Screenshot from 2025-02-21 07-38-10](https://github.com/user-attachments/assets/f7a0b9ac-e5e2-4a56-8aac-feed22aee53d)

# Features

Books Management: Add, edit, delete, and categorize books.

Borrow & Return System: Track book loans, due dates, and returns.

Members Management: Maintain records of library members.

Reservations & Waiting List: Allow members to reserve books and join waiting lists.

Fines & Payments: Automate fine calculation and manage payments.

Reports & Analytics: Generate reports on borrowing trends, overdue books, and library statistics.

Staff & Scheduling: Manage staff details and work schedules.

Digital & External Resources: Handle online reading materials and external library integrations.

Audit Logs & Notifications: Track all library activities and send alerts.

# Tech Stack

Backend: Laravel (PHP)

Frontend: Blade Templates, Bootstrap, JavaScript

Database: MySQL

Authentication: Laravel Breeze / Sanctum

# Installation

## Clone the Repository

    git clone https://github.com/MuchiriKinyua/library-management.git

cd library-management

## Install Dependencies

composer install
npm install

## Setup Environment Variables

Rename .env.example to .env and configure database settings.

cp .env.example .env
php artisan key:generate

## Migrate the Database

php artisan migrate --seed

## Run the Application

php artisan serve

Visit http://127.0.0.1:8000/ in your browser.

# Usage

Login as Admin: Manage books, members, and transactions.

Add Books & Members: Enter book details, categories, and users.

Issue Books: Assign books to members and track returns.

Manage Fines & Reports: View overdue books and payments.

Generate Reports: Analyze library usage and trends.

# Roles & Permissions

Admin: Full access to all modules.

Librarian: Manage books, loans, and members.

Member: Browse books, borrow, and view fines.

# Future Enhancements

QR Code Scanning: For quick book check-in/out.

Mobile App Integration: Access library from mobile devices.

Advanced Search & Filtering: Improve book discovery.
