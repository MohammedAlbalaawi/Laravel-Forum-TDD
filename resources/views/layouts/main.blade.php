
<div>
    <a href="{{'/threads'}}">All Threads</a>
    <a href="{{'/login'}}">login</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{route('logout')}}"
                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </form>
</div>

