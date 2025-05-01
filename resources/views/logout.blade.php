@if(Auth::check())
    <form method="POST" action="{{ route('logout') }}" id="logout-form">
        @csrf
        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
            <i class="fas fa-sign-out-alt mr-2 text-gray-500"></i> Logout
        </button>
    </form>
@endi