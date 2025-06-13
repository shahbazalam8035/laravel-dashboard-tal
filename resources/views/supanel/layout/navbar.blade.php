<nav class="bg-gray-100 border-b border-gray-200">
    <div class="container mx-auto px-4 py-2 flex items-center justify-between">
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" id="menu-toggle">Toggle Menu</button>
        <div class="ml-auto">
            <span>Welcome, Admin</span>
        </div>
        <div>
            <form id="logout-form" action="#" method="POST" style="display: inline;">
                @csrf
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>

