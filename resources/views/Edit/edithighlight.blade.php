<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Highlight Section</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-white shadow p-4 flex flex-col gap-3 fixed h-full">
    <h1 class="text-xl font-semibold mb-4">Landing Page CMS</h1>

    <nav class="flex flex-col gap-2">
      <a href="navbar.php" class="p-2 rounded hover:bg-gray-100 block">Navbar Section</a>
      <a href="hero.php" class="p-2 rounded hover:bg-gray-100 block">Hero Section</a>
      <a href="about.php" class="p-2 rounded hover:bg-gray-100 block">About Section</a>
      <a href="highlight.php" class="p-2 rounded bg-blue-600 text-white block">Highlight Section</a>
      <a href="article.php" class="p-2 rounded hover:bg-gray-100 block">Article Section</a>
      <a href="footer.php" class="p-2 rounded hover:bg-gray-100 block">Footer Section</a>
    </nav>

    <div class="mt-auto text-xs text-gray-500">
      CMS - Highlight Editor
    </div>
  </aside>

  <!-- MAIN CONTENT -->
  <div class="ml-64 w-full p-10">

    <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">

      <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit Highlight Section</h1>

      <form action="update_highlight.php" method="POST" enctype="multipart/form-data" class="space-y-5">

        <!-- Judul Highlight -->
        <div>
          <label class="block text-gray-700 font-medium mb-1">Highlight Title</label>
          <input
            type="text"
            name="highlight_title"
            class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300"
            placeholder="Enter highlight title"
          />
        </div>

        <!-- Deskripsi Highlight -->
        <div>
          <label class="block text-gray-700 font-medium mb-1">Highlight Description</label>
          <textarea
            name="highlight_desc"
            rows="4"
            class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300"
            placeholder="Enter highlight description"
          ></textarea>
        </div>

        <!-- Upload Gambar -->
        <div>
          <label class="block text-gray-700 font-medium mb-1">Highlight Image</label>
          <input
            type="file"
            name="highlight_image"
            class="w-full p-2 border rounded-lg"
          />
        </div>

        <!-- Tombol -->
        <div class="flex justify-between">
          <a href="highlight.php"
            class="px-5 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition">
            Cancel
          </a>

          <button
            type="submit"
            class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
          >
            Save Changes
          </button>
        </div>

      </form>

    </div>

  </div>

</body>
</html>
