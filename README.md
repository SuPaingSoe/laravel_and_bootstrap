## System for Private University

## Purpose

Intent to use in MBA private university and manage the followings:

-   Student information
-   Lecturers information
-   Subjects which are teach in university or class
-   MBA batch list
-   Assignments collections list, add new assignments for all corresponding students
-   Old questions collections list, add old questions for corresponding academic years
-   Thesis paper collections as library for all corresponding student’s reference
-   Lecturers and subjects mapping for students who want to check lecture’s profile

## System Users

1. Admin
2. Users
    - Students
    - Lecturers

## Main Features

## Basic

1. Manage information (CRUD)
2. List Information with pagination
3. Upload & Download files
4. Sorting columns and searching for information

## Advance

1. Dashboard for Admin (Admin can only see it)
2. Middleware
3. Q & A section with comments and replies from users
4. Info Auto-mail sending for new user creation

## Usability for Each User

1. Admin Panel

Manage students, lectures information. And also, upload and manage for subjects, old questions and papers.

Details are as follow:

-   Can register student information to system.
-   Can register teacher profile information to system.
-   Can register new batch to system.
-   Can register new subject to system.
-   Can register user for system
    -   Auto mail send to created user for their username and password to login
    -   Using Mailtrap Email Sandbox Service (https://mailtrap.io/)
-   Can upload assignment for all batch.
-   Can upload old questions for all batch.
-   Can upload paper for all batch
-   Can edit student information to system.
-   Can edit teacher profile information to system.
-   Can edit assignment for all batch. (Insert page create)
-   Can edit old questions for all batch.
-   Can edit paper for all batch.
-   Can edit batch to system.
-   Can edit subject information
-   Can edit user information

2. User Panel

a. Students

-   Can check subjects which are need to study in MBA
-   Can check teachers profile who are teaching at university
-   Can check old questions for all previous batch
-   Can download old questions for all previous batch
-   Can check students list from all previous batch
-   Can check assignment from all previous batch
-   Can download assignments for all previous batch

b. Lecturers

-   Can check lecturers profile page
-   Can check students information from all batch
-   Can check subjects which are need to study in MBA
-   Can check old questions for all previous batch
-   Can check assignments from all previous batch
-   Can check papers from all previous batch
-   Can download old questions for all previous batch
-   Can download assignments for all previous batch
-   Can download papers from all previous batch

## Used

1. Front-End

-   Bootstrap 5

2. Back-End

-   Laravel Framework
-   Mysql
-   Apache

## DB Structure

## Tables and Description

-   assignments -> Collect all assignments from all subjects and batch
-   batches -> MBA batch collection
-   mbas -> Batch, lecturers and subjects list for management
-   students -> MBA students from all batch
-   subjects -> Subjects list which are studied at MBA
-   teachers -> Lecturers list from all batch
-   users -> User list who have authorize to use this system
-   papers -> All papers from all batch
-   oldquestions -> All questions from all batch
-   Comments -> Q&A session for all users
-   replies -> Q&A session for all users
