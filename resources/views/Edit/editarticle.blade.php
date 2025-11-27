<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Article - CMS Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

  <div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow p-4 flex flex-col">
      <h1 class="text-xl font-bold mb-5">CMS Landing Page</h1>

      <nav class="flex flex-col gap-2">
        <a href="edit-navbar.php" class="p-2 rounded hover:bg-gray-200">Navbar Section</a>
        <a href="edit-hero.php" class="p-2 rounded hover:bg-gray-200">Hero Section</a>
        <a href="edit-about.php" class="p-2 rounded hover:bg-gray-200">About Section</a>
        <a href="edit-highlight.php" class="p-2 rounded hover:bg-gray-200">Highlight Section</a>
        <a href="edit-article.php" class="p-2 rounded bg-blue-600 text-white">Article Section</a>
        <a href="edit-footer.php" class="p-2 rounded hover:bg-gray-200">Footer Section</a>
      </nav>

      <div class="mt-auto text-xs text-gray-500 pt-4">
        Logged in as Admin
      </div>
    </aside>

    <!-- Content Area -->
    <main class="flex-1 p-8 overflow-auto">

      <h2 class="text-2xl font-bold mb-6">Edit Article Section</h2>

      <form class="bg-white p-6 rounded-lg shadow max-w-3xl">

        <!-- SECTION TITLE -->
        <div class="mb-5">
          <label class="block font-semibold mb-1">Article Title</label>
          <input 
            type="text"
            name="article_title"
            class="border p-3 rounded w-full"
            placeholder="Masukkan title untuk section article..."
            value="Artikel Terbaru"
          />
        </div>

        <!-- SECTION DESCRIPTION -->
        <div class="mb-5">
          <label class="block font-semibold mb-1">Article Description</label>
          <textarea 
            name="article_description"
            rows="3"
            class="border p-3 rounded w-full"
          >Kumpulan artikel terbaru dan informatif untuk Anda baca.</textarea>
        </div>

        <hr class="my-6">

        <!-- MULTIPLE ARTICLES FORM -->
        <h3 class="text-xl font-semibold mb-4">Daftar Artikel</h3>

        <!-- ARTICLE ITEM 1 -->
        <div class="border p-4 rounded mb-5 bg-gray-50">
          <h4 class="font-semibold mb-3">Artikel 1</h4>

          <label class="block text-sm font-medium mb-1">Judul Artikel</label>
          <input type="text" class="border p-2 rounded w-full mb-3" value="Judul Artikel Pertama">

          <label class="block text-sm font-medium mb-1">Deskripsi</label>
          <textarea rows="3" class="border p-2 rounded w-full mb-3">Deskripsi singkat artikel pertama...</textarea>

          <label class="block text-sm font-medium mb-1">Link Artikel</label>
          <input type="text" class="border p-2 rounded w-full mb-3" value="#">

          <label class="block text-sm font-medium mb-1">Gambar (URL)</label>
          <input type="text" class="border p-2 rounded w-full" value="https://via.placeholder.com/400x250">
        </div>

        <!-- ARTICLE ITEM 2 -->
        <div class="border p-4 rounded mb-5 bg-gray-50">
          <h4 class="font-semibold mb-3">Artikel 2</h4>

          <label class="block text-sm font-medium mb-1">Judul Artikel</label>
          <input type="text" class="border p-2 rounded w-full mb-3" value="Judul Artikel Kedua">

          <label class="block text-sm font-medium mb-1">Deskripsi</label>
          <textarea rows="3" class="border p-2 rounded w-full mb-3">Deskripsi singkat artikel kedua...</textarea>

          <label class="block text-sm font-medium mb-1">Link Artikel</label>
          <input type="text" class="border p-2 rounded w-full mb-3" value="#">

          <label class="block text-sm font-medium mb-1">Gambar (URL)</label>
          <input type="text" class="border p-2 rounded w-full" value="https://via.placeholder.com/400x250">
        </div>

        <!-- ADD NEW ARTICLE (BUTTON ONLY UI) -->
        <button 
          type="button"
          class="mb-6 bg-gray-200 px-4 py-2 rounded hover:bg-gray-300"
        >
          + Tambah Artikel Baru
        </button>

        <!-- SAVE BUTTON -->
        <button 
          type="submit" 
          class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700"
        >
          Simpan Perubahan
        </button>

      </form>

    </main>

  </div>

</body>
</html>
