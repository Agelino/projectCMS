<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Footer</title>
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
      <a href="highlight.php" class="p-2 rounded hover:bg-gray-100 block">Highlight Section</a>
      <a href="article.php" class="p-2 rounded hover:bg-gray-100 block">Article Section</a>
      <a href="footer.php" class="p-2 rounded bg-blue-600 text-white block">Footer Section</a>
    </nav>

    <div class="mt-auto text-xs text-gray-500">
      CMS - Footer Editor
    </div>
  </aside>

  <!-- MAIN CONTENT -->
  <div class="ml-64 w-full p-10">

    <div class="max-w-3xl mx-auto bg-white p-8 shadow-md rounded-lg">
      <h1 class="text-3xl font-bold mb-6">Edit Footer Section</h1>

      <form action="update_footer.php" method="POST" class="space-y-5">

        <!-- Footer Text -->
        <div>
          <label class="block font-medium mb-1">Footer Text</label>
          <textarea
            name="footer_text"
            rows="3"
            class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300"
            placeholder="Enter footer text"
          ></textarea>
        </div>

        <!-- Social Media -->
        <div>
          <label class="block font-medium mb-2">Social Media Links</label>
          <div class="space-y-3">
            <input type="text" name="facebook" class="w-full p-3 border rounded-lg" placeholder="Facebook URL">
            <input type="text" name="instagram" class="w-full p-3 border rounded-lg" placeholder="Instagram URL">
            <input type="text" name="twitter" class="w-full p-3 border rounded-lg" placeholder="Twitter URL">
            <input type="text" name="youtube" class="w-full p-3 border rounded-lg" placeholder="YouTube URL">
          </div>
        </div>

        <!-- Copyright -->
        <div>
          <label class="block font-medium mb-1">Copyright</label>
          <input type="text" name="copyright" class="w-full p-3 border rounded-lg"
            placeholder="© 2025 Your Brand. All rights reserved.">
        </div>

        <!-- Buttons -->
        <div class="flex justify-between">
          <a href="footer.php"
            class="px-5 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition">
            Cancel
          </a>

          <button type="submit"
            class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Save Changes
          </button>
        </div>

      </form>
    </div>

  </div>

</body>
</html>
