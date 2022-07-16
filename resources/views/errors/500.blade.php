@extends('master')

@section('isi')
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="container d-flex align-content-stretch flex-wrap">
            <div class="row">
                <div class="col d-flex align-content-stretch flex-wrap">
                    <div class="error-page-image"></div>
                    <div class="error-page-text">
                        <h3>Internal Server Error</h3>
                        <p>Ooopss... Something went wrong.<br>Try refreshing the page or contact our help center.</p>
                        <div class="error-page-actions">
                            <a href="#" class="btn btn-secondary">Help Center</a>
                            <a href="index.html" class="btn btn-primary">Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
