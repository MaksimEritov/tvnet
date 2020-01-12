<!doctype html>
<html lang="EN-en">
@include('layout.head')
<body>
    @include('ui.loader')
    @include('ui.header')
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>
@include('ui.footer')
@include('layout.footer')
</html>
