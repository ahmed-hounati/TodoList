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
                        <a href="" class="block">Projects</a>
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
                <a href="<?php echo URLROOT; ?>/projects/add" class="px-4 py-2 bg-blue-500 text-white rounded">Add Project +</a>
                <input type="search" class="flex-grow p-2 mr-4 border rounded" placeholder="Search Projects ...">
            </div>

            <?php foreach ($data['projects'] as $project) : ?>
                <a href="<?php echo URLROOT; ?>/tasks/tasks">
                    <div class="flex flex-wrap mt-4">
                        <div class="w-1/3 p-4">
                            <div class="bg-white rounded shadow-md">
                                <h2 class="p-4 font-bold text-3xl"><?php echo $project->project_name ?></h2>
                                <p class="p-4 font-bold"><?php echo $project->start_date ?></p>
                                <p class="p-4 font-bold"><?php echo $project->final_date ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>