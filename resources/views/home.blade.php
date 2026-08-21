<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<style>
    body {
        background-color: black;
        font-family: Arial, sans-serif;
    }
</style>

<body>
    <x-navbar />
    <main>
        <div class="flex justify-center items-center h-screen ">
            <h1 class="text-4xl font-bold text-white">Welcome to My Portfolio</h1>
        </div>
    </main>
</body>

</html>
