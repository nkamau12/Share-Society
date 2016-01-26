<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Share Society</title>
    <link rel="stylesheet" href="/css/all.css">
</head>
<body style="padding-top: 100px;">

    <div class="container">
        @include('partials/navbar')
        @include('flash::message')

        @yield('content')
    </div>

    <script src="/js/all.js"></script>
    <script>
        //$('#flash-overlay-modal').modal();
        $('div.alert').not('alert-important').delay(3000).slideUp(300);
    </script>
    <script>
        $(function() {
            // for bootstrap 3 use 'shown.bs.tab', for bootstrap 2 use 'shown' in the next line
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                // save the latest tab; use cookies if you like 'em better:
                localStorage.setItem('lastTab', $(this).attr('href'));
            });

            // go to the latest tab, if it exists:
            var lastTab = localStorage.getItem('lastTab');
            if (lastTab) {
                $('[href="' + lastTab + '"]').tab('show');
            }
            $("#tabmenu").click(function(event) {

                var text = event.target.id;
                if(text.localeCompare("homes")==0){
                    window.location.href = "/home";
                    localStorage.setItem('lastTab', $(this).attr('href'));
                }
            });
        });
    </script>
    @yield('footer')
</body>
</html>