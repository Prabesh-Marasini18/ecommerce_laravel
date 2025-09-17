<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>E-commerce Navbar</title>
  <style>
    :root {
      --primary: #1a0892;
      --light-primary: #efe9f1;
      --secondary: #a62fd2;;
      --text: #666666;
    }
  </style>
</head>
<body class="bg-[var(--light-primary)]">
  <!-- Navbar -->
  <header class="bg-white shadow-md border-b border-gray-200">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">

      <!-- Logo -->
      <div class="flex items-center space-x-2 cursor-pointer">
        <img src="{{asset (Storage::url($company->logo))}}" alt="Logo" class="w-10 h-10">
        <span class="text-2xl font-bold text-[var(--primary)]">{{$company->name}}</span>
      </div>

    <!-- Search Bar -->
    <div class="hidden md:flex mx-6 w-120">
    <input
        type="text"
        placeholder="Search products..."
        class="w-full px-4 py-2 border border-[var(--primary)] rounded-l-full focus:outline-none focus:ring-2 focus:ring-[var(--secondary)]"
    />
    <button class="bg-[var(--primary)] text-white px-5 rounded-r-full hover:bg-[var(--secondary)] transition">
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
    </div>


      <!-- Login -->
      <div>
        <a href="#login"
           class="px-5 py-2 rounded-full border border-[var(--primary)] text-[var(--primary)] font-medium hover:bg-[var(--primary)] hover:text-white transition">
          Login
        </a>
      </div>
    </div>

    <!-- Mobile Search -->
    <div class="md:hidden px-4 pb-3">
      <input
        type="text"
        placeholder="Search products..."
        class="w-full px-4 py-2 border border-[var(--primary)] rounded-full focus:outline-none focus:ring-2 focus:ring-[var(--secondary)]"
      />
    </div>
  </header>
</body>
</html>
