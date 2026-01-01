<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">

<div class="max-w-3xl mx-auto">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">To-Do List</h1>

        <a href="{{route('tasks.create')}}"
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            ➕ Add Task
        </a>
    </div>

    @forelse($tasks as $task)
        <div class="bg-white p-5 rounded-xl shadow mb-4 flex justify-between">
            <div>
                <h3 class="text-lg font-semibold">{{ $task->title }}</h3>
                <p class="text-gray-600">{{ $task->description }}</p>
            </div>

            <div class="flex gap-2">
                <a href="{{ route('tasks.edit',$task->id) }}"
                   class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">
                    Edit
                </a>

                <form action="{{ route('tasks.delete',$task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @empty
        <div class="bg-white p-6 rounded-xl shadow text-center text-gray-500">
            No tasks yet 🚀
        </div>
    @endforelse
</div>

</body>
</html>
