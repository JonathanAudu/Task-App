<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="container text-center">
    <h1 class="mt-4">Task Manager</h1>
</div>
<div class="container body-container">
    <h2>Create Tasks</h2>
    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="form-row">
            <div class="col-4">
                <select name="project_id" class="form-control">
                    <option value="">Choose a project</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <input type="text" name="name" class="form-control" placeholder="Enter task name" required>
            </div>
            <div class="col-2">
                <input type="number" name="priority" class="form-control" placeholder="Enter priority" required>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Create Task</button>
            </div>
        </div>
    </form>


    <h2>Tasks</h2>

    <ul id="task-list">
        @foreach($tasks as $task)
            <li>
                {{ $task->name }} (Priority: {{ $task->priority }}) - Project: {{ optional($task->project)->name }}
                <div class="task-buttons">
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-primary">Edit</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<form action="{{ route('projects.store') }}" method="POST" class="mb-4">
    @csrf
    <div class="form-row mt-4">
        <div class="col-8 offset-2">
            <h5>Create New Project</h5>
            <div class="form-row">
                <div class="col-9">
                    <input type="text" name="name" class="form-control" placeholder="Create a Project" required>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">Create Project</button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
