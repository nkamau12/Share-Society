<div class="container">
    <div class="navbar-header">
        <a href="/" class="navbar-brand">SHARE Society</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{action('membercontroller@show',[$currentclient])}}"+>Previous Purchases</a>
                </li>
                <li>
                    <a href="{{action('membercontroller@edit',[$currentclient])}}">Edit</a>
                </li>
                <li>
                    <a href="{{url('members/'.$currentclient.'/create')}}">Purchase</a>
                </li>
            </ul>
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