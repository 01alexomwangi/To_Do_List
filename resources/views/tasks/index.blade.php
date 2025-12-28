<h1>To-Do List</h1>

<a href="{{ route('tasks.create') }}">➕ Add Task</a>

@foreach($tasks as $task)
    <div>
        <h3>{{ $task->title }}</h3>
        <p>{{ $task->description }}</p>

        <a href="{{ route('tasks.edit', $task) }}">Edit</a>

        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
