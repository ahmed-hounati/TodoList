<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Board Interface</title>
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
                        <a href="<?php echo URLROOT; ?>/projects" class="block">Projects</a>
                    </li>
                    <li class="mb-4">
                        <a href="" class="block">Tasks</a>
                    </li>
                    <li class="mb-4">
                        <a href="<?php echo URLROOT; ?>/users/logout" class="block">logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="w-5/6 p-4">
            <div class="flex justify-between">
                <button class="px-4 py-2 bg-blue-500 text-white rounded">Add Task +</button>
                <input type="search" class="flex-grow p-2 mr-4 border rounded" placeholder="Search ...">
                <button class="px-4 py-2 bg-blue-500 text-white rounded">Add Multiple +</button>
            </div>

            <div class="flex">
                <div class="w-1/3 m-4 bg-white rounded shadow-md">
                    <div class="p-4 bg-gray-200 border-b font-bold text-center rounded-t">To do</div>
                    <ul>
                        <li class="p-4 border-b list-none">
                            Task Name
                            <div class="flex justify-end mt-2">
                                <button class="px-4 py-2 mr-2 bg-yellow-500 rounded">Edit</button>
                                <button class="px-4 py-2 bg-red-500 text-white rounded">Delete</button>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="w-1/3 m-4 bg-white rounded shadow-md">
                    <div class="p-4 bg-gray-200 border-b font-bold text-center rounded-t">In progress</div>
                    <!-- Tasks will be dynamically inserted here -->
                </div>

                <div class="w-1/3 m-4 bg-white rounded shadow-md">
                    <div class="p-4 bg-gray-200 border-b font-bold text-center rounded-t">Done</div>
                    <!-- Tasks will be dynamically inserted here -->
                </div>
            </div>
        </div>
    </div>

</body>

</html>