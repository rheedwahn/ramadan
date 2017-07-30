<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ramadan</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('ramadhan/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ramadhan/font/roboto/Roboto-Regular.woff2') }}">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('ramadhan/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('ramadhan/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    @include('header.header')

    @yield('content')    

    @yield('ramadan')

    @yield('contact_section')

    @yield('map')

    @include('footer.footer')
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/jquery-3.1.1.min.js') }}">
    
       
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
    </script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/tether.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('ramadhan/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ramadhan/js/app.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif
    </script>
    <script type="text/javascript">
        $('#formcontact').click(function(){
        
          //prevent a form from submitting if no email
          if((document.getElementById("form30").value == "") && (document.getElementById("form31").value == "")){
            document.getElementById("errorMessage").innerHTML = "please provide email and password";
            //to STOP the form from submiting
            return false;
          }
          else{
            //reset and allow the form to submit
            document.getElementById("errorMessage").innerHTML = "";
            return true;
          }
       })

        function myFunction() {
              var msg = document.getElementById("az1");
              msg.scrollIntoView();
            }

            
        document.getElementById("demo").innerHTML = Date.parse(startdate).add(1).days();
    </script>
</body>

</html>
