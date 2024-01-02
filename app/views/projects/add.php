<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>add a project</title>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-semibold mb-4">add project</h1>
        <form action="<?php echo URLROOT; ?>/projects/add" method="post">
            <div class="mb-4">
                <label for="project_name" class="block text-gray-600">Project Name:</label>
                <input type="text" id="project_name" name="project_name" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="final_date" class="block text-gray-600">Final date:</label>
                <input type="date" id="final_date" name="final_date" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex justify-between items-center mb-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Add</button>
            </div>
        </form>
    </div>

</body>

</html>