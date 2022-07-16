<!DOCTYPE html>
<html lang="en">
    @include('partials/head')
    <body>
        
        {{-- <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div> --}}
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-container">
            
                @include('partials/headnav')
                @include('partials/navbar')

                @include('sweetalert::alert')
                <div class="main-content">
                    @yield('isi')
                </div>
                @include('partials/footer')
            </div>
        </div>
        
        @yield('modal')
        @include('partials/script')
        @stack('scripts')
    </body>
</html>