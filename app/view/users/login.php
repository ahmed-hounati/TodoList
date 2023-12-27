<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-semibold mb-4">Login</h1>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email:</label>
                <input type="email" id="email" name="email" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300 <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password:</label>
                <input type="password" id="pasword" name="pasword" class="border rounded w-full py-2 px-3 focus:outline-none focus:ring focus:border-blue-300 <?php echo (!empty($data['pasword_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['pasword']; ?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="flex justify-between items-center mb-4">
                <a href="<?php echo URLROOT; ?>/users/signup" class="text-blue-500">No account? Sign Up</a>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Sign Up</button>
            </div>
        </form>
    </div>

</body>

</html>