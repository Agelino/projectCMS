<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Hero - CMS Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow p-4 flex flex-col">
      <h1 class="text-xl font-bold mb-5">CMS Landing Page</h1>

      <nav class="flex flex-col gap-2">
        <a href="edit-navbar.php" class="p-2 rounded hover:bg-gray-200">Navbar Section</a>
        <a href="edit-hero.php" class="p-2 rounded bg-blue-600 text-white">Hero Section</a>
        <a href="edit-about.php" class="p-2 rounded hover:bg-gray-200">About Section</a>
        <a href="edit-highlight.php" class="p-2 rounded hover:bg-gray-200">Highlight Section</a>
        <a href="edit-article.php" class="p-2 rounded hover:bg-gray-200">Article Section</a>
        <a href="edit-footer.php" class="p-2 rounded hover:bg-gray-200">Footer Section</a>
      </nav>

      <div class="mt-auto text-xs text-gray-500 pt-4">
        Logged in as Admin
      </div>
    </aside>

    <!-- Content Area -->
    <main class="flex-1 p-8 overflow-auto">

      <h2 class="text-2xl font-bold mb-6">Edit Hero Section</h2>

      <form class="bg-white p-6 rounded-lg shadow max-w-2xl">

        <div class="mb-5">
          <label class="block font-semibold mb-1">Hero Title</label>
          <input 
            type="text" 
            name="hero_title" 
            class="border p-3 rounded w-full"
            placeholder="Masukkan judul hero..."
            value="Selamat Datang di Produk Kami"
          />
        </div>

        <div class="mb-5">
          <label class="block font-semibold mb-1">Hero Description</label>
          <textarea 
            name="hero_description" 
            rows="4"
            class="border p-3 rounded w-full"
          >Solusi modern untuk kebutuhan Anda.</textarea>
        </div>

        <div class="mb-5">
          <label class="block font-semibold mb-1">Button Text</label>
          <input 
            type="text" 
            name="hero_button" 
            class="border p-3 rounded w-full"
            value="Mulai Sekarang"
          />
        </div>

        <div class="mb-5">
          <label class="block font-semibold mb-1">Button Link</label>
          <input 
            type="text" 
            name="hero_link" 
            class="border p-3 rounded w-full"
            placeholder="https://contoh.com"
            value="#"
          />
        </div>

        <button 
          type="submit" 
          class="bg-blue-600 text-white px-5 py-3 rounded hover:bg-blue-700"
        >
          Simpan Perubahan
        </button>

      </form>

    </main>

  </div>

</body>
</html>
