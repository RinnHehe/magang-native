<!-- header.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Properti</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Pastikan ada nilai z-index tinggi */
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
<nav class="bg-gray-800 fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-2">
                <!-- Logo -->
                <img src="pict/logo2.png" alt="Logo" class="w-10 h-auto">
                <!-- Title -->
                <a class="text-xl font-bold text-white" href="index.php">Rental Properti</a>
            </div>
            <div class="flex space-x-4">
                <a href="index.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pemesanan</a>
                <a href="order.php" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Modifikasi Pemesanan</a>
            </div>
        </div>
    </div>
</nav>
    <div class="container mx-auto mt-16">
