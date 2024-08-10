# 📂 File Archiving Project

## 🚀 Description
This project is a simple file archiving application built using **PHP**, **HTML**, and **Bootstrap**. It was created during the first month of an internship as a practice exercise in PHP native coding. The application allows users to log in, upload files, and categorize them by type, with dynamic fields appearing based on the selected category. The project is still in development, with additional features being added as the learning process progresses.

---

## 📜 Table of Contents
- [Installation](#-installation)
- [Usage](#-usage)
- [Configuration](#-configuration)
- [Challenges](#-challenges)
- [Contributing](#-contributing)
- [License](#-license)
- [Contact](#-contact)

---

## 🛠️ Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/barinale/GedProject-Docker.git
2. **Navigate to the project directory:**
   cd GedProject-Docker
3. **Build and start the Docker containers::**
   docker-compose up -d
4. **Access the application:**
   Open your web browser and go to http://localhost:8080
5. **Optional - Running on XAMPP::**
   Instructions for running the project on XAMPP will be added later.
   
## 📸 Usage

1. **Create a Login:**  
   ![Login Screen](screenshots/login.png)

   Navigate to the login page and create a user account with your credentials.

2. **Upload a File:**  
   ![Upload Screen](screenshots/upload.png)

   After logging in, go to the file upload page. You can upload files and categorize them by type. For each type, different fields will appear based on the category selected (e.g., Email, Command, Estimate).

3. **Check Uploaded Files:**  
   ![File List](screenshots/files.png)

   To view all the files you have uploaded, go to the file list page. You can see a list of all uploaded files and their categories.

**Note:** Ensure you have Docker running (or XAMPP if using that setup) and have followed the configuration steps before attempting to use the application.


## ⚙️ Configuration

The project uses a `config.php` file for configuration settings. You need to update this file to match your environment. 

**Configuration File: `config.php`**

        ```php
        <?php
        define('BASE_PATH', "/project/GedProject"); // URL for Ubuntu
        // define('BASE_PATH', "/Project/Ged"); // URL Base Windows
        
        // Variable for Database
        define('URL','mysql');
        define('USERNAME','root');
        define('PASSWORD','secret');
        define('DATABASE','GedDatabase');
Notes:

        BASE_PATH: Set this to the base URL path where your project is located. Adjust the path according to your operating system.
        Database Settings: Update URL, USERNAME, PASSWORD, and DATABASE to match your database configuration.


## 🧠 Challenges

### 1. **Docker Integration**
**Challenge:**  
Incorporating Docker into the project and automating the SQL queries to create the database and tables automatically after running `docker-compose up`.

**Solution:**  
Implemented a `Dockerfile` and `docker-compose.yml` to manage the project's containers. Added scripts and configurations to automate the setup of the database schema during container initialization.

### 2. **Data Persistence with Docker Volumes**
**Challenge:**  
Ensuring that data, including uploaded files and database entries, persists even after the Docker containers are stopped and restarted.

**Solution:**  
Utilized Docker volumes to persist data between container restarts. Configured volumes in `docker-compose.yml` to store database data and uploaded files, ensuring that no data is lost when containers are stopped or restarted.

### 3. **Switching from MySQL to PostgreSQL**
**Challenge:**  
Experimenting with PostgreSQL as a replacement for MySQL, marking the first experience with PostgreSQL.

**Solution:**  
Modified database configurations and queries to be compatible with PostgreSQL. Implemented necessary adjustments for schema setup and data handling. Updated Docker configuration to use PostgreSQL as the database service.

## 🤝 Contributing
If you would like to contribute to this project, please follow these steps:
1. Fork the repository on GitHub.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push your changes to the branch (`git push origin feature-branch`).
5. Open a pull request on GitHub with a description of your changes.

Any contributions, whether it's new features, bug fixes, or suggestions, are welcome!

## 📜 License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📬 Contact
For any questions or issues, please feel free to open an issue on GitHub or contact me at mekkmohammed08@gmail.com.


