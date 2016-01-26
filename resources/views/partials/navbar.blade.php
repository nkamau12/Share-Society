
<div class="navbar navbar-default navbar-fixed-top">
    <div class="bs-example">
        <ul class="nav nav-tabs" id="tabmenu">
            <li><a data-toggle="tab" href="#sectionB" id="">Client1</a></li>
            <li class="active"><a data-toggle="tab" href="#New" id="homes">New</a></li>

        </ul>
        <div class="tab-content">
            <div id="New" class="tab-pane fade in active">
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
                                        <li><a href="/groups/create">Create</a></li>
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
            </div>

            <div id="sectionB" class="tab-pane fade">
                <div class="container">
                    <div class="navbar-header">
                        <a href="/" class="navbar-brand">SHARE Society</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar-main">
                        @if(Auth::check())
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="/groups/previousp">Previous Purchases</a>
                                </li>
                                <li>
                                    <a href="/groups/edit">Edit</a>
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
        </div>
    </div>
</div>
