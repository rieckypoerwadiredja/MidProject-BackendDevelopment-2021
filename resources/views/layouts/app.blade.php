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

@elseif ($judul == 'About Us')
    @include('about')
    @yield('about')

@elseif ($judul == 'User')
    @include('user')
    @yield('user')
@else

@endif


@include('layouts.footer')
@yield('footer')

