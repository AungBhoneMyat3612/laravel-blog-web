<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex">
            <a href="/#blogs" class="nav-link">Blogs</a>
            {{-- @if (auth()->check()) @auth() @guest --}}
            @auth
                @can('admin')
                    <a href="/admin/blogs" class="nav-link">Dashboard</a>
                @endcan

                <a href="" class="nav-link">Welcome {{ auth()->user()->name }}</a>
                
                <img src="{{ auth()->user()->avatar }}" width="45" height="45" class="rounded-circle" alt="">

                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link">Logout</button>
                </form>
            @else
                <a href="/register" class="nav-link">Register</a>
                <a href="/login" class="nav-link">Login</a>
            @endauth 
        </div>
    </div>
</nav>
