<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

    <ul class="list-reset flex flex-col">
        <li class=" w-full h-full py-3 px-2 border-b border-light-border {{ Request::is('dashboard') ? 'bg-white' : '' }}">
            <a href="/dashboard" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                Dashboard
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-light-border {{ Request::is('dashboard/posts*') ? 'bg-white' : '' }}">
            <a href="/dashboard/posts" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                My Posts
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
    </ul>

    @can('admin')
        <h6 class="font-sans font-hairline text-gray-500 mt-2 ml-4">
            <span>Administrator</span>
        </h6>
        <ul class="list-reset flex flex-col">
            <li class="w-full h-full py-3 px-2 border-b border-light-border {{ Request::is('dashboard/categories*') ? 'bg-white' : '' }}">
                <a href="/dashboard/categories" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <i class="fa fa-grip-vertical float-left mx-2"></i>
                    Post Categories
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a>
            </li>
        </ul>
    @endcan
</aside>