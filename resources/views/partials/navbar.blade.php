
<div class="navbar navbar-default navbar-fixed-top">

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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Groups<span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="download">
                        <li><a href="/groups/create">Create</a></li>
                        <li><a href="/groups/edit">Search/Edit</a></li>
                        <li><a href="/groups/previousp">Previous Purchases</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/stats">Stats</a>
                </li>
                <li>
                    <a href="/pform">Purchase</a>
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
</div>