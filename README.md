# ✏️ Risca

## ℹ️ About

Risca is a simple and intuitive task management web application designed to help users quickly and efficiently create, manage, and organize their tasks.

---

## ✨ Features

- **Task management (CRUD):** allows users to create, view, edit, and delete tasks.
- **Search and filtering:** allows users to search for tasks by title or filter them by status (completed or pending).
- **Minimalist interface:** features a clean and intuitive design that provides a pleasant user experience.
- **Responsive design:** application pages adapt to different screen sizes and devices.
- **Security:** implements robust validation mechanisms to help maintain the integrity of stored data.

---

## 💻 Technologies

### 🎨 Front-end

- **HTML:** markup language used to define the structure and content of application pages.
- **CSS:** stylesheet language used to define the design and visual appearance of application pages.
- **JavaScript:** programming language used to add interactivity to application pages.
- **Bootstrap:** CSS and JavaScript framework that streamlines development and facilitates the creation of responsive pages.
- **Bootstrap Icons:** Bootstrap icon library used to enhance the visual appearance of the application.
- **Axios:** HTTP client used to perform asynchronous HTTP requests.

### 🛠️ Development tools

- **npm:** package manager used to install and manage the project's JavaScript dependencies.
- **esbuild:** bundler and minifier used to optimize the project's CSS and JavaScript files.
- **Composer:** dependency manager used to install and manage the project's PHP dependencies.

### ⚙️ Back-end

- **PHP:** programming language used to handle the application's logic and business rules.
- **Bramus Router:** PHP library used to handle HTTP request routing.
- **PHP dotenv:** PHP library used to load environment variables from a `.env` file.
- **PHPMailer:** PHP library used to send emails from the application.

### 🗄️ Database

- **MySQL:** relational database management system (RDBMS) used to store and manage application data.

---

## 📋 Requirements

- **npm:** v11.19.0 or later.
- **Composer:** v2.10.3 or later.
- **PHP:** v8.3.6 or later.
- **MySQL:** v8.0.46 or later.

---

## 🚀 Getting started

1. Clone the repository:

```bash
git clone https://github.com/vitorggsouza/risca.git
```

2. Navigate to the project directory:

```bash
cd risca/
```

3. Install the front-end dependencies:

```bash
npm install
```

4. Install the back-end dependencies:

```bash
composer install
```

5. Copy `.env.example` to a new `.env` file and configure the environment variables:

```bash
cp .env.example .env
```

6. Import the database schema:

```bash
mysql -u your_username -p your_db < db/schema.sql
```

7. Start the development script:

```bash
npm run dev
```

8. Alternatively, run the production build script to generate optimized assets:

```bash
npm run build
```

9. Start the local development server:

```bash
php -S localhost:8000 -t public/
```

---

## 📂 Project structure

```plaintext
risca/
├── db/                 # Database files (schema.sql)
├── design/             # Design assets (palette.jpeg)
├── public/             # Public files (index.php, images, optimized assets)
├── src/                # Source code (CSS, JavaScript, and PHP)
├── .env.example        # Example environment variables
├── .gitignore          # Files and directories ignored by Git
├── build.js            # Build script (esbuild)
├── composer.json       # Composer configuration
├── LICENSE             # Project license
├── package.json        # npm configuration
└── README.md           # Project documentation
```

---

## 🚦 Status

In development.

---

## 📜 License

This project is distributed under the terms of the **MIT License**. For more information, see the [LICENSE](LICENSE) file.

---

Developed by **Vitor Souza**.