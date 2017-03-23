<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/posts"><i class="fa fa-home fa-lg"></i></a>
            <a class="nav-link" href="/posts/create">Compose</a>

            @if (Auth::guest())
				<a class="nav-link ml-auto" href="/login-user">Login</a>
				<a class="nav-link" href="/register-user">Register</a>
            @else
                <a class="nav-link ml-auto" href="/logout-user">Logout</a>
                <a class="nav-link" href="#">{{ auth()->user()->name }}&nbsp;&nbsp;<i class="fa fa-user-circle-o"></i> </a>
            @endif
            
        </nav>
    </div>
</div>
