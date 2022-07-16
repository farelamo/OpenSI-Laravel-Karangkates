@extends('master')

@section('isi')
    <div class="main-wrapper container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title">
                    <p class="page-desc"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="page-content">
                            <div class="page-info container">
                                <nav aria-label="breadcrumb">
                                    <div class="main-wrapper container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5 class="card-title" style="font-size: 1.6rem">Surat Kematian</h5>
                                                <div class="card-tools" style="margin-top: -50px">
                                                    <a href="#" class="btn btn btn-outline-primary float-right"
                                                    data-toggle="modal" data-target="#tambah">
                                                        <i class="fas fa-plus"></i> Tambah Surat 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="table-responsive" style="margin-top: 20px">
                                                <table id="myTable" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nomor Surat</th>
                                                            <th>Nama Almarhum</th>
                                                            <th>Approve</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($kematian as $data)
                                                            <tr>
                                                                <td class="text-center">{{ $loop->iteration }}</td>

                                                                @if ($data->nomor_surat == NULL)
                                                                   <td style="color: red">
                                                                        <b>Perlu Approval</b>
                                                                    </td>
                                                                @else
                                                                    <td>{{ $data->nomor_surat }}</td>
                                                                @endif

                                                                <td>{{ $data->nama }}</td>

                                                                @if ($data->approve === 1)
                                                                    <td>
                                                                        <button class="btn btn-success" disabled>Sudah Approve</button>
                                                                    </td>
                                                                @else
                                                                    <td>
                                                                        <button class="btn btn-danger" disabled>Belum Approve</button>
                                                                    </td>
                                                                @endif

                                                                <td>
                                                                    <div class="d-flex">
                                                                        <a href="/print/kematian/{{$data->id}}" class="h3">
                                                                            <i class="fas fa-print m-1"></i>
                                                                        </a>
                                                                        <a href="#" class="h3" 
                                                                            data-toggle="modal" data-target="#edit"
                                                                            onclick='edit("{{ $data->id }}")'>
                                                                            <i class="fas fa-edit m-1"></i>
                                                                        </a>
                                                                        <p id="{{ $data->id }}" class="d-none">
                                                                            {{ $data->nama }},
                                                                            {{ $data->nik }},
                                                                            {{ $data->tempat_lahir }},
                                                                            {{ $data->tanggal_lahir }},
                                                                            {{ $data->alamat}},
                                                                            {{ $data->hari }},
                                                                            {{ $data->jam }},
                                                                            {{ $data->tanggal }},
                                                                            {{ $data->daerah }},
                                                                            {{ $data->sebab }},
                                                                            {{ $data->tempat_makam }},
                                                                            {{ $data->hari_makam }},
                                                                            {{ $data->jam_makam }},
                                                                            {{ $data->tanggal_makam }}
                                                                        </p>
                                                                        <a href="#" class="h3"
                                                                            data-toggle="modal" data-target="#hapus"
                                                                            onclick='hapus("{{ $data->id }}")'>
                                                                            <i class="fas fa-trash-alt m-1"></i>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tfoot>
                                                        @empty
                                                            <tr colspan="3">
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                                <td>No data</td>
                                                            </tr>
                                                        @endforelse
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form">
                    @csrf

                    <div class="form-group">
                        <p>Nama Almarhum</p>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama almarhum" required>
                        @error('nama') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>NIK Almarhum</p>
                        <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK almarhum" required>
                        @error('nik') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Tempat Lahir Almarhum</p>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan tempat lahir almarhum" required>
                        @error('tempat_lahir') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Tanggal Lahir Almarhum</p>
                        <input type="text" class="form-control" name="tanggal_lahir" onfocus="(this.type='date')" placeholder="Masukkan tanggal lahir almarhum" required>
                        @error('tanggal_lahir') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Alamat Tinggal Almarhum</p>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat tinggal almarhum" required>
                        @error('alamat') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Hari Kematian Almarhum</p>
                        <input type="text" class="form-control" name="hari" placeholder="Masukkan hari kematian (contoh: Selasa)" required>
                        @error('hari') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Jam Kematian Almarhum</p>
                        <input type="text" class="form-control" name="jam" placeholder="Masukkan jam kematian (contoh: 09.50)" required>
                        @error('jam') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Tanggal Kematian Almarhum</p>
                        <input type="text" class="form-control" name="tanggal" onfocus="(this.type='date')" placeholder="Masukkan tanggal kematian" required>
                        @error('tanggal') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Daerah Kematian Almarhum</p>
                        <textarea class="form-control" name="daerah" placeholder="Masukkan daerah kematian" required></textarea>
                        @error('daerah') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Sebab Kematian Almarhum</p>
                        <textarea class="form-control" name="sebab" placeholder="Masukkan sebab kematian" required></textarea>
                        @error('sebab') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Tempat Makam Almarhum</p>
                        <textarea class="form-control" name="tempat_makam" placeholder="Masukkan tempat pemakaman" required></textarea>
                        @error('tempat_makam') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Hari Pemakaman Almarhum</p>
                        <input type="text" class="form-control" name="hari_makam" placeholder="Masukkan hari pemakaman (contoh: Senin)" required>
                        @error('hari_makam') <span class="error">{{ $message }}</span> @enderror
                    </div>
                     <div class="form-group">
                        <p>Jam Pemakaman Almarhum</p>
                        <input type="text" class="form-control" name="jam_makam" placeholder="Masukkan jam pemakaman (contoh: 10.30)" required>
                        @error('jam_makam') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <p>Tanggal Pemakaman Almarhum</p>
                        <input type="text" onfocus="(this.type='date')" class="form-control" name="tanggal_makam" placeholder="Masukkan tanggal pemakaman" required>
                        @error('tanggal_makam') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Buat surat</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="formEdit" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" class="d-none" id="eId" name="id" required>
                        <div class="form-group">
                            <p>Nama Almarhum</p>
                            <input type="text" class="form-control" name="nama" id="eNama" placeholder="Masukkan nama almarhum" required>
                            @error('nama') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>NIK Almarhum</p>
                            <input type="text" class="form-control" name="nik" id="eNik" placeholder="Masukkan NIK almarhum" required>
                            @error('nik') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Tempat Lahir Almarhum</p>
                            <input type="text" class="form-control" name="tempat_lahir" id="eTempatLahir" placeholder="Masukkan tempat lahir almarhum" required>
                            @error('tempat_lahir') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Tanggal Lahir Almarhum</p>
                            <input type="text" class="form-control" name="tanggal_lahir" id="eTanggalLahir" onfocus="(this.type='date')" placeholder="Masukkan tanggal lahir almarhum" required>
                            @error('tanggal_lahir') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Alamat tinggal Almarhum</p>
                            <input type="text" class="form-control" name="alamat" id="eAlamat" placeholder="Masukkan alamat tinggal almarhum" required>
                            @error('alamat') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Hari Kematian Almarhum</p>
                            <input type="text" class="form-control" name="hari" id="eHari" placeholder="Masukkan hari kematian" required>
                            @error('hari') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Jam Kematian Almarhum</p>
                            <input type="text" class="form-control" name="jam" id="eJam" placeholder="Masukkan jam kematian" required>
                            @error('jam') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Tanggal Kematian Almarhum</p>
                            <input type="date" class="form-control" name="tanggal" id="eTanggal" placeholder="Masukkan tanggal kematian" onfocus="(this.type='date')" required>
                            @error('tanggal') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Daerah Kematian Almarhum</p>
                            <textarea class="form-control" name="daerah" placeholder="Masukkan daerah kematian" id="eDaerah" required></textarea>
                            @error('daerah') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Sebab Kematian Almarhum</p>
                            <textarea class="form-control" name="sebab" placeholder="Masukkan sebab kematian" id="eSebab" required></textarea>
                            @error('sebab') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Tempat Pemakaman Almarhum</p>
                            <textarea class="form-control" name="tempat_makam" placeholder="Masukkan tempat pemakaman" id="eTempatMakam" required></textarea>
                            @error('tempat_makam') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Hari Pemakaman Almarhum</p>
                            <input type="text" class="form-control" name="hari_makam" id="eHariMakam" placeholder="Masukkan hari pemakaman" required>
                            @error('hari_makam') <span class="error">{{ $message }}</span> @enderror
                        </div>
                         <div class="form-group">
                            <p>Jam Pemakaman Almarhum</p>
                            <input type="text" class="form-control" name="jam_makam" id="eJamMakam" placeholder="Masukkan jam pemakaman" required>
                            @error('jam_makam') <span class="error">{{ $message }}</span> @enderror
                        </div>
                         <div class="form-group">
                            <p>Tanggal Pemakaman Almarhum</p>
                            <input type="date" class="form-control" name="tanggal_makam" id="eTanggalMakam"  placeholder="Masukkan tanggal pemakaman" onfocus="(this.type='date')" required>
                            @error('tanggal_makam') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" method="post" id="formHapus">
                        @csrf
                        @method('DELETE')
                        
                        <div class="form-group">
                            <input type="hidden" class="d-none" id="dId" name="id" required>
                            <p id="dhapus"></p>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">

        function edit(id) {
            var data = (document.getElementById(id).textContent).split(",")
            document.getElementById("eId").value            = id;
            document.getElementById("eNama").value          = data[0].trim()
            document.getElementById("eNik").value           = data[1].trim()
            document.getElementById("eTempatLahir").value   = data[2].trim()
            document.getElementById("eTanggalLahir").value  = data[3].trim()
            document.getElementById("eAlamat").value        = data[4].trim()
            document.getElementById("eHari").value          = data[5].trim()
            document.getElementById("eJam").value           = data[6].trim()
            document.getElementById("eTanggal").value       = data[7].trim()
            document.getElementById("eDaerah").value        = data[8].trim()
            document.getElementById("eSebab").value         = data[9].trim()
            document.getElementById("eTempatMakam").value   = data[10].trim()
            document.getElementById("eHariMakam").value     = data[11].trim()
            document.getElementById("eJamMakam").value      = data[12].trim()
            document.getElementById("eTanggalMakam").value  = data[13].trim()
            document.getElementById('formEdit').action = "/surat-kematian/" + id;
        }

        function hapus(id) {
            var data = (document.getElementById(id).textContent).split(",")
            document.getElementById("dId").value = id
            document.getElementById("dhapus").textContent = 'Apakah anda yakin ingin menghapus "' + data[0] + '"?'
            document.getElementById('formHapus').action = "/surat-kematian/" + id;
        }
    </script>
@endpush
