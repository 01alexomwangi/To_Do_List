<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@if($task != null) Update Task @else Create Task @endif</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow w-full max-w-md">
    <h1 class="text-2xl font-bold text-center mb-6">@if($task != null) Update Task @else Create Task @endif</h1>

    <form @if($task != null) action="/tasks/{{ $task->id }}" @else action="/tasks" @endif  method="POST" class="space-y-4">

        @csrf

        @if($task != null)
            @method('PUT')
        @endif

        <div>
            <label class="block mb-1 font-medium">Title</label>
            <input type="text" name="title"
                   value="@if($task != null) {{ $task->title }} @endif"
                   class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                   required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" rows="4"
                      class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-blue-300">@if($task != null) {{ $task->description }} @endif</textarea>
        </div>

        <button
            class="
            @if($task == null)
            w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700
            @else
             w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700
            @endif">
            @if($task != null) Update @else Save Task @endif
        </button>
    </form>
</div>

</body>
</html>
