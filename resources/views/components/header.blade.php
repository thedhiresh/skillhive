<!-- Navigation Bar -->
<nav class="bg-lightblue shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    
    <!-- Logo -->
    <a href="/">
      <div class="flex items-center">
        <span class="text-2xl font-bold text-skyblue">Skill<span class="text-lightpink">Hive</span></span>
      </div>
    </a>
    
    <!-- Nav Buttons -->
    <div class="space-x-4">
      @auth 
        <a href="/dashboard" class="px-4 py-2 bg-skyblue text-skyblue border rounded hover:bg-blue-100 transition">Dashboard</a>
      @else
        <a href="/login" class="px-4 py-2 text-skyblue border border-skyblue rounded hover:bg-skyblue hover:bg-blue-100 transition">Log In</a>
        <a href="/register" class="px-4 py-2 bg-skyblue border rounded hover:bg-blue-100 hover:border-skyblue transition">Register</a>
      @endauth
    </div>
    
  </div>
</nav>
