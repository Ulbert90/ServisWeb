<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LNS SMG</title>
  <link href="src/output.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
  <style>
    .carousel-item {
      display: none;
    }

    .carousel-item.active {
      display: block;
    }
  </style>
</head>

<body class="bg-gray-100 text-gray-800" x-data="{ open: false }">

  <?php 
    include_once 'layout/navbar.php';
  ?>

  <main class="bg-gray-700">
  <?php 
    include_once 'layout/crousel.php';
    ?>

    <div id="about">
    <div class="py-16 bg-white">  
      <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
          <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
            <div class="md:5/12 lg:w-5/12">
              <img src="img/person.jpg" alt="image" loading="lazy" width="70%" height="" style="border-radius: 50%;">
            </div>
            <div class="md:7/12 lg:w-6/12">
              <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">LanaService And Reparation</h2>
              <p class="mt-6 text-gray-600">Selamat datang di LanaService And Reparation, mitra terpercaya Anda dalam semua hal yang berhubungan dengan layanan dan perbaikan. Didirikan dengan komitmen terhadap keunggulan dan kepuasan pelanggan, kami mengkhususkan diri dalam memberikan layanan perbaikan berkualitas tinggi untuk berbagai macam peralatan dan perangkat elektronik.</p><hr>
              <h2 class="text-2xl mt-6 text-gray-900 font-bold md:text-4xl">Misi Kami</h2>
              <p class="mt-6 text-gray-600">Misi kami adalah memberikan layanan perbaikan yang andal, efisien, dan berkualitas tinggi yang melebihi harapan pelanggan kami. Kami memahami ketidaknyamanan yang disebabkan oleh perangkat yang rusak, dan kami berdedikasi untuk mengembalikan ketenangan pikiran Anda dengan memperbaiki peralatan dan elektronik Anda secepat mungkin.</p><hr>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div id="servis">
  <?php 
    include_once 'layout/servis.php';
    ?>
  </div>

  <div id="kontak" class="bg-gray-100 flex items-center justify-center min-h-screen">
    <script src="wa.js"></script>
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Hubungi Kami</h1>
        <form id="contactForm" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama:</label>
                <input type="text" id="name" name="name" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Pesan:</label>
                <textarea id="message" name="message" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Kirim</button>
        </form>
    </div>
  </div>
  </main>

  <footer class="bg-gray-800 py-4">
    <div class="container mx-auto text-center text-gray-400">
      &copy; 2024 Servis Handphone. All rights reserved.
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
