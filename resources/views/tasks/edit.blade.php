<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow w-full max-w-md">
    <h1 class="text-2xl font-bold text-center mb-6">Edit Task</h1>

    <form action="/tasks/{{ $task->id }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Title</label>
            <input type="text" name="title"
                   value="{{ $task->title }}"
                   class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-green-300"
                   required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" rows="4"
                      class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-green-300">{{ $task->description }}</textarea>
        </div>

        <button
            class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
            Update Task
        </button>
    </form>
</div>

</body>
</html>
