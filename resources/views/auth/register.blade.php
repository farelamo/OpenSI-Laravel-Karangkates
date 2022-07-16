@include('partials/head')

<body class="auth-page sign-in">

    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="auth-form">
                        <div class="row">
                            <div class="col">
                                <div class="logo-box"><a href="#" class="logo-text">SmartService</a></div>
                                <form method="POST" action="/register">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col p-1">
                                            <input type="text" class="form-control @error('fname') is-invalid @enderror"
                                                name="fname" placeholder="Enter first name">

                                            @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col p-1">
                                            <input type="text" class="form-control @error('lname') is-invalid @enderror"
                                                name="lname" placeholder="Enter last name">

                                            @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col p-1">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col p-1">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                                name="password" required autocomplete="new-password" placeholder="Password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col p-1">
                                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Enter tempat lahir">

                                            @error('tempat_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col p-1">
                                            <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Enter tanggal lahir">

                                            @error('tanggal_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col p-1">
                                            <select class="js-states form-control" name="agama" tabindex="-1" style="display: none; width: 100%">
                                                <option value="">Pilih Agama</option>
                                                <option value="islam">Islam</option>
                                                <option value="protestan">Protestan</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                                <option value="khonghucu">Khonghucu</option>
                                            </select>

                                            @error('agama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col p-1">
                                            <select class="js-states form-control" name="status_perkawinan" tabindex="-1" style="display: none; width: 100%">
                                                <option value="">Pilih Status</option>
                                                <option value="belum kawin">Belum Kawin</option>
                                                <option value="kawin">Kawin</option>
                                                <option value="cerai hidup">Cerai Hidup</option>
                                                <option value="cerai mati">Cerai Mati</option>
                                            </select>

                                            @error('status_perkawinan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col p-1">
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                                name="nik" value="{{ old('nik') }}" placeholder="Enter nik">

                                            @error('nik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col p-1">
                                            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror"
                                                name="pekerjaan" value="{{ old('pekerjaan') }}" placeholder="Enter pekerjaan">

                                            @error('pekerjaan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col p-1">
                                            <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                                name="kewarganegaraan" value="{{ old('kewarganegaraan') }}" placeholder="Enter kewarganegaraan">

                                            @error('kewarganegaraan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col p-1">
                                            <select class="js-states form-control" name="gender" tabindex="-1" style="display: none; width: 100%">
                                                <option value="">Pilih Gender</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>

                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group p-1">
                                        <div class="form-group">
                                        <textarea class="form-control" name="alamat" placeholder="Enter alamat"></textarea>
                                        @error('alamat') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                    </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block btn-submit">Sign Up</button>
                                    <div class="auth-options">
                                        <div class="custom-control custom-checkbox form-group">
                                            <input type="checkbox" class="custom-control-input">
                                        </div>
                                        <a href="/" class="forgot-link">Already have an account?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-xl-block">
                    <div class="auth-image"></div>
                </div>
            </div>
        </div>
    </div>

    @include('partials/script')
</body>
<html>
