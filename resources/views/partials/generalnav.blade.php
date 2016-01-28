<div class="container">
    <div class="navbar-header">
        <a href="/" class="navbar-brand">SHARE Society</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-main">
        @if(Auth::check())
            <ul class="nav navbar-nav">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li class="dropdown">
                <li><a href="/create">Create</a></li>
                </li>
                <li>
                    <a href="/stats">Stats</a>
                </li>
            </ul>
        @endif
        <ul class="nav navbar-nav navbar-right">

            @if(Auth::check())
                <li>
                    <a href="/auth/logout">Sign Out</a>
                </li>
            @else
                <li>
                    <a href="/">Sign In</a>
                </li>
            @endif
        </ul>

    </div>
</div>