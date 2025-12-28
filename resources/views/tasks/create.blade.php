<h1>Create Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Title">
    <br>

    <textarea name="description" placeholder="Description"></textarea>
    <br>

    <button type="submit">Save</button>
</form>
