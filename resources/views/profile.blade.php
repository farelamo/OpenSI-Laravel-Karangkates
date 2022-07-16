@extends('master')

@section('isi')
    <div class="page-container">
        <div class="page-content">
            <div class="main-wrapper container">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="">
                                    <p class="font-weight-bold fs-3 d-flex align-items-center mb-0">Profile</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="/profile/{{ $data['id'] }}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-md-4 p-5">
                                    <div class="avatar-item mb-0">
                                        <img src="{{ $data['picture'] ? asset('/storage/profile/' . $data['picture']) : asset('/images/profile/avatar-1.png') }}"
                                            data-toggle="modal" data-target="#editFoto" alt="image" id="fotoprofil"
                                            class="img-fluid" style="width: 100%; object-fit: cover; height: 300px;">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="form-group col">
                                            <label>Nama Depan</label>
                                            <input type="text" class="form-control" placeholder="Nama Depan" name="fname"
                                                value="{{ $data['fname'] }}">
                                            @error('fname') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group col">
                                            <label>Nama Belakang</label>
                                            <input type="text" class="form-control" placeholder="Nama Belakang" name="lname"
                                                value="{{ $data['lname'] }}">
                                            @error('lname') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="email" name="email"
                                                value="{{ $data['email'] }}">
                                            @error('email') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col">
                                            <label>gender</label>
                                                <select class="js-states form-control" name="gender" tabindex="-1" style="display: none; width: 100%">
                                                    <option value="kosong">Pilih Gender</option>
                                                    @foreach ($gender as $item)
                                                        <option value="{{$item}}" 
                                                            @if($item == $data['gender']) 
                                                                selected
                                                            @endif
                                                        >{{$item}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            @error('gender') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" placeholder="tempat lahir" name="tempat_lahir"
                                                value="{{ $data['tempat_lahir'] }}">
                                            @error('tempat_lahir') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group col">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control" placeholder="tanggal lahir" name="tanggal_lahir"
                                                value="{{ $data['tanggal_lahir'] }}">
                                            @error('tanggal_lahir') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="margin-bottom: 2%">
                                            <label>Agama</label>
                                            <select class="js-states form-control" name="agama" tabindex="-1" style="display: none; width: 100%">
                                                <option value="kosong">Pilih Agama</option>
                                                @foreach ($agama as $item)
                                                    <option value="{{$item}}" 
                                                        @if($item == $data['agama']) 
                                                            selected
                                                        @endif
                                                    >{{$item}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('agama') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="col">
                                            <label>Status</label>
                                            <select class="js-states form-control" name="status" tabindex="-1" style="display: none; width: 100%">
                                                <option value="kosong">Pilih Status</option>
                                                @foreach ($status as $item)
                                                    <option value="{{$item}}" 
                                                        @if($item == $data['status']) 
                                                            selected
                                                        @endif
                                                    >{{$item}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('status') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" placeholder="Nomor Induk Kependudukan" name="nik"
                                                value="{{ $data['nik'] }}">
                                            @error('nik') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group col">
                                            <label>Kewarganegaraan</label>
                                            <input type="text" class="form-control" placeholder="Kewarganegaraan" name="kewarganegaraan"
                                                value="{{ $data['kewarganegaraan'] }}">
                                            @error('kewarganegaraan') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" class="form-control" placeholder="pekerjaan" name="pekerjaan"
                                            value="{{ $data['pekerjaan'] }}">
                                        @error('pekerjaan') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat" placeholder="alamat">{{ $data['alamat'] }}</textarea>
                                        @error('alamat') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="text-right mt-5">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
     <div class="modal fade" id="editFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Foto</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="/photo-profile/{{ $data['id'] }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="modal-body">
                        <label for="">Upload foto : </label>
                        <input class="form-control" type="file" name="picture">
                        @error('picture') <span class="error" style="color: red; font-weight: bold">{{ $message }}</span> @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/admin.js') }}"></script>
@endpush
