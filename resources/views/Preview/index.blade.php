<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>CMS Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

  <div class="flex h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow p-4 flex flex-col gap-3 fixed h-full">
      <h1 class="text-xl font-semibold mb-4">Landing Page CMS</h1>
      <nav class="flex flex-col gap-2">
        <a href="navbar.php" class="p-2 rounded hover:bg-gray-100 block">Navbar Section</a>
        <a href="hero.php" class="p-2 rounded hover:bg-gray-100 block">Hero Section</a>
        <a href="about.php" class="p-2 rounded hover:bg-gray-100 block">About Section</a>
        <a href="highlight.php" class="p-2 rounded hover:bg-gray-100 block">Highlight Section</a>
        <a href="article.php" class="p-2 rounded hover:bg-gray-100 block">Article Section</a>
        <a href="footer.php" class="p-2 rounded hover:bg-gray-100 block">Footer Section</a>
      </nav>

      <div class="mt-auto text-xs text-gray-500">
        Prototype CMS - PHP Version
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 ml-64 p-8">
      <h2 class="text-2xl font-semibold">Selamat Datang di CMS Landing Page</h2>
      <p class="mt-3 text-gray-600">
        Silakan pilih section di sidebar untuk mulai mengedit.
      </p>
    </main>

  </div>

</body>
</html>
