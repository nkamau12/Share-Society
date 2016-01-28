
<div class="navbar navbar-default navbar-fixed-top">
    <div class="bs-example">
        <ul class="nav nav-tabs" id="tabmenu">
            @for($i = 0; $i<$activem; $i++)
                <li id="{!! $i+1 !!}"><a data-toggle="tab" href="{!!"#client".($i+1) !!}" id="{!! $i+1 !!}">{!! $members[$i]['name'] !!}</a></li>
            @endfor
            <li class="active" id="homes"><a data-toggle="tab" href="#New" id="homes">New</a></li>

        </ul>
        <div class="tab-content">
            <div id="New" class="tab-pane fade in active">
                @include('partials.generalnav')
            </div>

            @for($i = 0; $i<$activem; $i++)
                <div id="{!!"client".($i+1) !!}" class="tab-pane fade">
                    @include('partials.clientnav',['currentclient'=>($i+1)])
                </div>
            @endfor
        </div>
    </div>
</div>
