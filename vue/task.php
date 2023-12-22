<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Tasks</title>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Your Kanban Board</h1>

        <!-- Task Section -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Tasks</h2>
            <!-- Add Task Form -->
            <form class="flex items-center mb-4">
                <input type="text" class="border rounded-l py-2 px-3 w-full" placeholder="New Task Name">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-r">Add Task</button>
            </form>
            <!-- Display Tasks -->
            <ul>
                <li class="flex items-center mb-2">
                    <div class="w-4 h-4 bg-green-500 mr-2"></div>
                    Task 1
                </li>
                <!-- More Tasks... -->
            </ul>
        </section>
    </div>

</body>

</html>