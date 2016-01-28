<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Share Society</title>
    <link rel="stylesheet" href="/css/all.css">
</head>
<body style="padding-top: 100px;">

    <div class="container">

        <?php $activec = isset($_POST['id']) ? $_POST['id'] : 0;  ?>
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
        var text=0;
        $(function() {
            $("#tabmenu").click(function(event) {
                text = event.target.id;
                if(text.localeCompare("homes")==0){
                    window.location.href = "/home";
                    localStorage.setItem('lastTab', $(this).attr('href'));
                }else{
                    $.ajax({
                        type: "POST",
                        url: "app.blade.php",
                        data:{ vid:"text"}
                    })
                    window.location.href = "/members/"+text;
                }

            });
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

        });
        document.getElementById("checks").checked=true|false

    </script>
    <?php $activec = isset($_POST['vid']) ? $_POST['vid'] : 0;  ?>
    @yield('footer')
</body>
</html>