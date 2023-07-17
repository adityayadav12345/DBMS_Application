# Database Web Application

This is a web application that interacts with a database to perform various operations, such as viewing, searching, inserting, updating, and deleting records. The application is built using HTML, CSS, JavaScript, and PHP, and it uses a MySQL database for data storage.

## Getting Started

To get started with the web application, follow the instructions below:

### Prerequisites

- Install a local server environment such as XAMPP or WAMP to run the PHP code and host the application locally.
- Ensure that you have MySQL installed and running on your local machine.

### Installation

1. Clone the repository or download the project files to your local machine.

```shell
git clone https://github.com/your-username/database-web-app.git
```

2. Set up the database:

- Create a new MySQL database using a tool like phpMyAdmin or the MySQL command line.
- Import the provided database schema file (e.g., `database.sql`) into your MySQL database.

3. Configure the database connection:

- Update the database credentials in the PHP files located in the `api/` directory. Open each PHP file (e.g., `api/view-first-record.php`) and update the MySQL connection parameters with your database credentials.

### Usage

1. Start your local server environment (e.g., XAMPP, WAMP) and make sure that the Apache and MySQL services are running.

2. Open your web browser and navigate to the project folder on your local server (e.g., `http://localhost/database-web-app`).

3. You can use the following command to start the local server:

```shell
php -S localhost:8000
```

4. Open your web browser and visit `http://localhost:8000` to access the web application.

5. Follow the instructions and input any required information in the provided fields. The results or status of each operation will be displayed on the webpage or in the browser's console.

6. Explore the JavaScript, HTML, and CSS files to understand the implementation and customize the application according to your needs.
