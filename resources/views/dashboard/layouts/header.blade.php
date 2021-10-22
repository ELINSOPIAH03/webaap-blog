<header class="bg-nav">
    <div class="flex justify-between">
        <div class="p-1 mx-3 inline-flex items-center">
            <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
            <h1 class="text-white p-2">Blog App</h1>
        </div>
        <form action="/logout" method="post">
            @csrf
            <div class="p-1 flex flex-row items-center">
                <button type="submit" class="text-white block px-5 py-2 mt-2 font-semibold hover:text-gray-300">Logout</button>
            </div>
        </form>
    </div>
</header>