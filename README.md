# Task Manager
Task Manager is a web application built with Laravel that allows users to manage tasks and projects.

## Features
<ul>
<li>Create tasks and assign them to projects</li>
<li>Set priority for tasks</li>
<li>Edit and update tasks</li>
<li>Delete tasks</li>
<li>Create new projects</li>
</ul>

## Installation
<ol>
<li>Clone the repository to your local machine.</li>
<li>Install the required dependencies using Composer:
<blockquote>composer install </blockquote></li>
<li>Create a copy of the .env.example file and rename it to .env. Update the database connection details in the .env file.</li>
<li>Generate an application key:
<blockquote>php artisan key:generate</blockquote></li>
<li>Run the database migrations:
<blockquote>php artisan migrate</blockquote></li>
<li>Start the local development server:
<blockquote>php artisan serve </blockquote></li>
<li>Access the application in your web browser at http://localhost:8000.</li>
</ol>

## Usage
<ol>
<li>Create a new project:</li>
<ul>
<li>Click on the "Create New Project" button and enter the project name.</li>
<li>Click "Create Project" to create the project.</li>
</ul>

<li>Create a new task:</li>

<ul>
<li>Choose a project from the dropdown menu.</li>
<li>Enter the task name and priority.</li>
<li>Click "Create Task" to create the task.</li>
</ul>

<li>View and manage tasks:</li>

<ul>
<li>Tasks are listed on the page with their name, priority, and project.<li>
<li>To delete a task, click the "Delete" button next to the task.</li>
<li>To edit a task, click the "Edit" button next to the task.</li>
</ul>

<li>Edit a task:</li>
<ul>
<li>Update the task name, priority, or project.</li>
<li>Click "Update Task" to save the changes.</li>
</ul>

<li>Reorder tasks:</li>
<ul>
<li>Reordering tasks is done by dragging and dropping tasks to the desired position.</li>
</ul>
</ol>

## Contributing
<p>Contributions to the Task Manager project are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.</p>

## Credits
<p>The Task Manager application is developed using Laravel, an open-source PHP framework. The code in this repository is written by Jonathan Audu .</p>
