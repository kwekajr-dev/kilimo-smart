@if(Auth::check())
    <div class="profile-dropdown absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1">
        <div class="px-4 py-3 border-b border-gray-100">
            <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
            <p class="text-xs text-gray-600 truncate">{{ Auth::user()->telephone }}</p>
        </div>
        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-user mr-2 text-gray-500"></i> Profile
        </a>
        <a href="{{ route('profile.settings') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-cog mr-2 text-gray-500"></i> Settings
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <i class="fas fa-sign-out-alt mr-2 text-gray-500"></i> Logout
            </button>
        </form>
    </div>
@endif