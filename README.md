Here's an updated version of the readme file:

# Full Stack TEST Accendo

This project is a demo for a Full Stack TEST for Accendo. The project consists of two Laravel applications, a teacher_app and a student_app, that communicate with each other via a REST API.

## Requirements
- Docker
- Docker Compose

## Getting Started
1. Clone the repository:
   ```
   git clone https://github.com/MkharzomMAL/MyApp_demo.git
   ```
2. Navigate to the project directory:
   ```
   cd project-name
   ```
3. Start the containers:
   ```
   docker-compose up -d
   ```
   This command will start the containers in detached mode, so you can continue to use your terminal.
4. Run the database migrations:
   ```
   docker-compose run --rm teacher_app php artisan migrate
   docker-compose run --rm student_app php artisan migrate
   ```
   This command will run the migrations to create the necessary database tables.
5. Seed the database (optional):
   ```
   docker-compose run --rm teacher_app php artisan db:seed
   docker-compose run --rm student_app php artisan db:seed
   ```
   This command will seed the database with some sample data.
6. You should now be able to access the apps in your browser. The teacher_app is available at http://localhost:8000 and the student_app is available at http://localhost:8001.

## Usage
The teacher_app provides endpoints to create, update, and delete homework assignments. The student_app provides an endpoint for submitting a solution to a homework assignment.

## Shutting Down
To stop the containers, run the following command:
```
docker-compose down
```
