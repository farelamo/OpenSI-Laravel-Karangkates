<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        
        <title>404 Not Found</title>

        @include('partials/head')
    </head>
    <body class="error-page error-404">
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="container d-flex align-content-stretch flex-wrap">
                <div class="row">
                    <div class="col d-flex align-content-stretch flex-wrap">
                        <div class="error-page-image"></div>
                        <div class="error-page-text">
                            <h3>Oops.. Ada kesalahan</h3>
                            <p>Halaman yang anda tuju tidak tersedia<br>Silahkan coba halaman lain</p>
                            <div class="error-page-actions">
                                <a href="#" class="btn btn-secondary">Hubungi Kami</a>
                                <a href="/dashboard" class="btn btn-primary">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('partials/script')
    </body>
</html>