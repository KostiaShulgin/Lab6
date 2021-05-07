<html lang="en">
<link rel="stylesheet" type="text/css" href="{{ asset('headstyle.css') }}" >
<body>
<div id="menu">
    <nav>
        <a href="/main">Books</a>
        <a href="/authors">Authors</a>
    </nav>
</div>
<div id="content">
    @yield('content')
</div>
</body>
</html>
