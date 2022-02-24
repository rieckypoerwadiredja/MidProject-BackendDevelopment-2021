@include('layouts.nav')
@yield('nav')



@if ($judul == 'Home')
     @include('index')
     @yield('index')

@elseif ($judul == 'Course')
     @include('course')
     @yield('course')

@elseif ($judul == 'Login-Register')
        @include('log-reg')
        @yield('login')
@else

@endif


@include('layouts.footer')
@yield('footer')

