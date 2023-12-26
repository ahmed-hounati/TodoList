<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/6 h-screen bg-blue-500 text-white">
            <div class="p-4">
                <div class="mb-6 text-2xl font-bold">DataWare</div>
                <ul>
                    <li class="mb-4">
                        <a href="dashboard.php" class="block">Dashboard</a>
                    </li>
                    <li class="mb-4">
                        <a href="project.php" class="block">Projects</a>
                    </li>
                    <li>
                        <a href="team.php" class="block">Team</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="w-5/6 p-4">
            <div class="flex justify-between">
                <button class="px-4 py-2 bg-blue-500 text-white rounded">Add Project +</button>
                <input type="search" class="flex-grow p-2 mr-4 border rounded" placeholder="Search Projects ...">
            </div>

            <div class="flex flex-wrap mt-4">
                <!-- Project Cards -->
                <div class="w-1/3 p-4">
                    <div class="bg-white rounded shadow-md">
                        <div class="p-4 font-bold text-xl">Project Name 1</div>
                        <!-- Additional project details can be added here -->
                    </div>
                </div>

                <div class="w-1/3 p-4">
                    <div class="bg-white rounded shadow-md">
                        <div class="p-4 font-bold text-xl">Project Name 2</div>
                        <!-- Additional project details can be added here -->
                    </div>
                </div>

                <!-- Add more project cards as needed -->
            </div>
        </div>
    </div>

</body>

</html>