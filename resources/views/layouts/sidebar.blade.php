<div class="w-1/5 bg-gray-800 min-h-screen px-4 py-6">
    <div class="mb-8">
        <header class="font-medium px-2 text-gray-500 text-xs">
            Main
        </header>

        <a href="#" class="block text-gray-200 px-2 py-2">Dashboard </a>
    </div>


    @if (Auth::user()->can('create playlists'))
    <div class="mb-8">
        <header class="font-medium px-2 text-gray-500 text-xs">
            Playlists
        </header>

        <a href="#" class="block text-gray-200 px-2 py-2">Create </a>
        <a href="" class="block text-gray-200 px-2 py-2">Table </a>
    </div>
    @endif


    @if (Auth::user()->can('create tags'))
    <div class="mb-8">
        <header class="font-medium px-2 text-gray-500 text-xs">
            Tags
        </header>

        <a href="#" class="block text-gray-200 px-2 py-2">Create </a>
        <a href="" class="block text-gray-200 px-2 py-2">Table </a>
    </div>
    @endif


    @can('show users')
    <div class="mb-8">
        <header class="font-medium px-2 text-gray-500 text-xs">
            Users
        </header>

        <a href="" class="block text-gray-200 px-2 py-2">Table </a>
    </div>
    @endcan

    <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Logout') }}
            </x-responsive-nav-link>
        </form>
    </div>
</div>
