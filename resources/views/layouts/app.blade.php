<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <div id="app">
        {{-- header start --}}
        @include('includes.header')
        {{-- header end --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('includes.script')
</body>
</html>
