<header>
    <nav>
        <div class="logo">
            <img src="{{Vite::asset('resources/images/favicon.ico')}}" alt="">
        </div>
        <div class="menu">
            <ul>
                @foreach ($menuNav as $item)
                <li >{{$item}}</li>
                    
                @endforeach
            </ul>
        </div>
    </nav>
    <div id="jumbotron"></div>
</header>