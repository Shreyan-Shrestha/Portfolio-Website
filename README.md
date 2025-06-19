SeepMela 2082
<h2>Group Project</h2>
<h3>Dynamically generating Portfolio Website using Php Laravel and MySql</h3>
Members
<ul>
  <li><p>Shreyan Shrestha</p></li>
  <li>Dipak</li>
  <li>Nabin</li>
  <li>Bishal</li>
</ul>

Instructions:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>README - Laravel Project</title>
    <!-- GitHub Markdown CSS for styling -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.2.0/github-markdown.min.css">
    <style>
        .markdown-body {
            box-sizing: border-box;
            min-width: 200px;
            max-width: 980px;
            margin: 0 auto;
            padding: 45px;
        }

        @media (max-width: 767px) {
            .markdown-body {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <article class="markdown-body">
        <h1>Laravel Project</h1>
        <p>This is a Laravel-based web application that uses MySQL as its database. Follow the instructions below to pull and run the project on your local device.</p>

        <h2>Prerequisites</h2>
        <p>Before setting up the project, ensure you have the following installed on your device:</p>
        <ul>
            <li><strong>PHP</strong> (>= 8.1)</li>
            <li><strong>Composer</strong> (Dependency Manager for PHP)</li>
            <li><strong>MySQL</strong> (or another SQL database supported by Laravel)</li>
            <li><strong>Node.js</strong> and <strong>NPM</strong> (for front-end assets)</li>
            <li><strong>Git</strong></li>
        </ul>

        <h2>Setup Instructions</h2>
        <ol>
            <li>
                <strong>Clone the Repository</strong>
                <p>Clone the project to your local machine using the following command:</p>
                <pre><code>git clone https://github.com/your-username/your-repository-name.git</code></pre>
                <p>Navigate to the project directory:</p>
                <pre><code>cd your-repository-name</code></pre>
            </li>
            <li>
                <strong>Install PHP Dependencies</strong>
                <p>Install the required PHP packages using Composer:</p>
                <pre><code>composer install</code></pre>
            </li>
            <li>
                <strong>Set Up Environment File</strong>
                <p>Copy the example environment file to create your <code>.env</code> file:</p>
                <pre><code>cp .env.example .env</code></pre>
                <p>Open the <code>.env</code> file in a text editor and configure your database settings:</p>
                <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password</code></pre>
                <p>Replace <code>your_database_name</code>, <code>your_database_username</code>, and <code>your_database_password</code> with your actual MySQL database credentials.</p>
            </li>
            <li>
                <strong>Generate Application Key</strong>
                <p>Generate a unique application key for your Laravel project:</p>
                <pre><code>php artisan key:generate</code></pre>
            </li>
            <li>
                <strong>Set Up the Database</strong>
                <p>Create a MySQL database for the project (e.g., using a MySQL client like phpMyAdmin or the MySQL CLI):</p>
                <pre><code>CREATE DATABASE your_database_name;</code></pre>
                <p>Run the migrations to set up the database schema:</p>
                <pre><code>php artisan migrate</code></pre>
                <p>Optionally, seed the database with sample data (if seeders are included):</p>
                <pre><code>php artisan db:seed</code></pre>
            </li>
            <li>
                <strong>Install Front-End Dependencies</strong>
                <p>Install and compile the front-end assets using NPM:</p>
                <pre><code>npm install
npm run dev</code></pre>
                <p>For production, use:</p>
                <pre><code>npm run build</code></pre>
            </li>
            <li>
                <strong>Run the Application</strong>
                <p>Start the Laravel development server:</p>
                <pre><code>php artisan serve</code></pre>
                <p>By default, the application will be available at <a href="http://localhost:8000">http://localhost:8000</a>. Open this URL in your browser to access the project.</p>
            </li>
        </ol>

        <h2>Additional Notes</h2>
        <ul>
            <li><strong>Storage Permissions</strong>: Ensure the <code>storage</code> and <code>bootstrap/cache</code> directories are writable by your web server. You can set permissions using:
                <pre><code>chmod -R 775 storage bootstrap/cache</code></pre>
            </li>
            <li><strong>Troubleshooting</strong>: If you encounter issues, check the Laravel logs in <code>storage/logs/laravel.log</code> for details.</li>
            <li><strong>Custom Configuration</strong>: If the project requires additional configuration (e.g., third-party API keys), check the <code>.env.example</code> file for required variables.</li>
        </ul>

        <h2>Contributing</h2>
        <p>Contributions are welcome! Please follow these steps:</p>
        <ol>
            <li>Fork the repository.</li>
            <li>Create a new branch (<code>git checkout -b feature/your-feature</code>).</li>
            <li>Commit your changes (<code>git commit -m 'Add your feature'</code>).</li>
            <li>Push to the branch (<code>git push origin feature/your-feature</code>).</li>
            <li>Open a Pull Request.</li>
        </ol>

        <h2>License</h2>
        <p>This project is licensed under the <a href="LICENSE">MIT License</a>.</p>
    </article>
</body>
</html>

License
This project is licensed under the MIT License.

