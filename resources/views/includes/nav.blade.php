<header class='header'>
    <nav class='navbar'>
        
        <a href="{{route('dashboard')}}">
            <img class="logo" src="{{('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDYKMlHkj6rqUVuxwVJIIhYKkaTC43eS2m9tGaZMsockz30pXD9giL63TkE3yCEUPSO-o&usqp=CAU')}}" alt="logo">
        </a>
        <form class="input_search" method="GET" action="">
            <input type="text" class="input_search__input" placeholder="Search Posts">
            
        </form>        
        <ul class="navlinks">
            <li><a href="{{route('add')}}">Add Posts</a></li>
            <li><a href="{{'/questions/'.Auth::id()}}">My Posts</a></li>
            @if(Auth::user()->permission)
            <li class="menu">
                <a href="/admin">All users</a>
            </li>
            @endif
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </nav>
</header>