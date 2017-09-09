<title> @yield('title','sample_app')</title>
@include('layout._header')
@include('layout._css')
<div class="container content-main" style="margin-top:50px;">

        @yield('content')

</div>
@include('layout._footer')
@include('layout._js')