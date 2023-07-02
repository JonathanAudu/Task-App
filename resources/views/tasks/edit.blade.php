<!DOCTYPE html>
<html>
<head>
    <title>Task Manager - Edit Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="container">
    <h1 class="mt-4">Edit Task</h1>

    <form action="{{ route('tasks.update', $task) }}" method="POST" class="mb-4">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-8">
                <input type="text" name="name" value="{{ $task->name }}" class="form-control" required>
            </div>
            <div class="col-2">
                <input type="number" name="priority" value="{{ $task->priority }}" class="form-control" required>
            </div>
            <div class="col-2">
                <select name="project_id" class="form-control">
                    <option value="">No Project</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}" {{ $task->project_id == $project->id ? 'selected' : '' }}>
                            {{ $project->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update Task</button>
    </form>

    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
</div>
</body>
</html>
