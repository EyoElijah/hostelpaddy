<html>
    <head>
        <link rel="stylesheet" href="{{ asset('files/vendor/animate/css/animate.min.css') }}">
    </head>

    <body>

        <h1>Hello User</h1>

        <form method="POST" action="{{ route('student.logout') }}">
            @csrf
            <a href="{{ route('student.logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ ('Logout') }}
            </a>
        </form>
    </body>
</html>

