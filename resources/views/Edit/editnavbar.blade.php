<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Edit Navbar - CMS Landing Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

  <div class="flex h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow p-4 flex flex-col gap-3 fixed h-full">
      <h1 class="text-xl font-semibold mb-4">Landing Page CMS</h1>

      <nav class="flex flex-col gap-2">
        <a href="navbar.php" class="p-2 rounded bg-blue-600 text-white block">Navbar Section</a>
        <a href="hero.php" class="p-2 rounded hover:bg-gray-100 block">Hero Section</a>
        <a href="about.php" class="p-2 rounded hover:bg-gray-100 block">About Section</a>
        <a href="highlight.php" class="p-2 rounded hover:bg-gray-100 block">Highlight Section</a>
        <a href="article.php" class="p-2 rounded hover:bg-gray-100 block">Article Section</a>
        <a href="footer.php" class="p-2 rounded hover:bg-gray-100 block">Footer Section</a>
      </nav>

      <div class="mt-auto text-xs text-gray-500">
        CMS - Navbar Editor
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 ml-64 p-8">

      <h2 class="text-2xl font-semibold mb-6">Edit Navbar</h2>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        <!-- FORM EDITOR -->
        <div class="bg-white p-6 shadow rounded">
          <h3 class="text-lg font-semibold mb-4">Navbar Settings</h3>

          <!-- Logo -->
          <label class="block font-medium text-sm">Logo Text</label>
          <input id="logoText" class="border w-full p-2 rounded mb-4" value="NamaBrand">

          <!-- Menu -->
          <label class="block font-medium text-sm">Menu (pisah baris)</label>
          <textarea id="menuList" class="border w-full p-2 rounded mb-4" rows="4">About
Highlight
Article</textarea>

          <!-- Auth Buttons -->
          <label class="block font-medium text-sm">Sign In Text</label>
          <input id="signinText" class="border w-full p-2 rounded mb-4" value="Sign In">

          <label class="block font-medium text-sm">Sign Up Text</label>
          <input id="signupText" class="border w-full p-2 rounded mb-4" value="Sign Up">

          <!-- BUTTON -->
          <button id="apply" class="bg-blue-600 text-white px-4 py-2 rounded">
            Terapkan ke Preview
          </button>
        </div>

        <!-- LIVE PREVIEW -->
        <div class="bg-white p-6 shadow rounded">
          <h3 class="text-lg font-semibold mb-4">Preview</h3>

          <nav id="previewNav" class="w-full bg-white shadow-sm p-4 flex items-center justify-between">

            <div class="flex items-center gap-3">
              <span id="pLogo" class="text-xl font-semibold">NamaBrand</span>
            </div>

            <div id="pMenu" class="hidden md:flex items-center gap-6">
              <a class="hover:text-blue-600">About</a>
              <a class="hover:text-blue-600">Highlight</a>
              <a class="hover:text-blue-600">Article</a>
            </div>

            <div class="flex items-center gap-4">
              <a id="pSignin" class="hover:text-blue-600 cursor-pointer">Sign In</a>
              <a id="pSignup" class="px-4 py-2 bg-blue-600 text-white rounded cursor-pointer">
                Sign Up
              </a>
            </div>

          </nav>

        </div>

      </div>
    </main>

  </div>


  <script>
    document.getElementById("apply").addEventListener("click", () => {

      // Logo
      document.getElementById("pLogo").textContent =
        document.getElementById("logoText").value;

      // Menu
      const menuRaw = document.getElementById("menuList").value.split("\n");
      const menuContainer = document.getElementById("pMenu");
      menuContainer.innerHTML = "";
      menuRaw.forEach(item => {
        if (item.trim() !== "") {
          const link = document.createElement("a");
          link.textContent = item.trim();
          link.className = "hover:text-blue-600 cursor-pointer";
          menuContainer.appendChild(link);
        }
      });

      // Sign In / Sign Up
      document.getElementById("pSignin").textContent =
        document.getElementById("signinText").value;

      document.getElementById("pSignup").textContent =
        document.getElementById("signupText").value;
    });
  </script>

</body>
</html>
