<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Centro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="center-center">
        <div class="">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="main-wrapper">
                <main class="content text-left">
                    <h1 class="text-center">Centro</h1>
                    <p>This is the personal hub of firstname lastname.
                        While only the owner can sign in and make changes,
                        you may subscribe to receive their content updates!
                        Consider installing Centro on your own web host,
                        to create your own personal hub.
                    </p>
                    <h2>Follow a Site</h2>
                    <form method="post" action="{{ url('follow') }}">
                        <div class="field">
                            <label for="url">URL</label>
                            <input type="url" name="url" id="url">
                        </div>
                        <div class="field">
                            <label for="site-name">Name</label>
                            <input type="text" name="name" id="site-name">
                        </div>
                        <div class="field">
                            <label for="site-description">Description</label>
                            <input type="text" name="description" id="site-description">
                        </div>
                        <div class="buttons">
                            <input type="submit" name="btn_submit" value="Follow Site">
                        </div>
                    </form>
                </main>
            </div>

            <div class="footer-wrapper">
                <p class="text-center">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </p>
            </div>
        </div>
    </body>
</html>
