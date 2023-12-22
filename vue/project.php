<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Projects</title>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto my-8">
        <h1 class="text-3xl font-bold mb-4">Your Kanban Board</h1>

        <!-- Project Section -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Projects</h2>
            <!-- Add Project Form -->
            <form class="flex items-center mb-4">
                <input type="text" class="border rounded-l py-2 px-3 w-full" placeholder="New Project Name">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-r">Add Project</button>
            </form>
            <!-- Display Projects -->
            <div class="flex space-x-4">
                <!-- Example Project Card -->
                <div class="bg-white rounded-lg p-4 w-1/3">
                    <h3 class="font-semibold text-lg mb-2">Project Name</h3>
                    <!-- Display Project Tasks -->
                    <ul>
                        <li class="flex items-center mb-2">
                            <div class="w-4 h-4 bg-green-500 mr-2"></div>
                            Task 1
                        </li>
                        <!-- More Tasks... -->
                    </ul>
                    <!-- Add Task Form -->
                    <form class="mt-2">
                        <input type="text" class="border rounded py-1 px-2 w-full" placeholder="New Task Name">
                        <button type="submit" class="bg-blue-500 text-white py-1 px-2 rounded">Add Task</button>
                    </form>
                </div>
                <!-- More Project Cards... -->
            </div>
        </section>

        <!-- User Tasks Section -->
        <section>
            <h2 class="text-xl font-semibold mb-4">Your Tasks</h2>
            <!-- Display User Tasks -->
            <ul>
                <li class="flex items-center mb-2">
                    <div class="w-4 h-4 bg-yellow-500 mr-2"></div>
                    Your Task 1
                </li>
                <!-- More User Tasks... -->
            </ul>
        </section>
    </div>

</body>

</html>