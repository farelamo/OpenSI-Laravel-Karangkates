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
                                                <h5 class="card-title" style="font-size: 1.6rem">Surat Keterangan Usaha</h5>
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
                                                            <th>Nama Usaha</th>
                                                            <th>Approve</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($usaha as $data)
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

                                                                @if ($data->nomor_surat != null)
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
                                                                        <a href="/print/usaha/{{$data->id}}" class="h3">
                                                                            <i class="fas fa-print m-1"></i>
                                                                        </a>
                                                                        <a href="#" class="h3"
                                                                            data-toggle="modal" data-target="#edit"
                                                                            onclick='edit("{{ $data->id }}")'>
                                                                            <i class="fas fa-edit m-1"></i>
                                                                        </a>
                                                                        <p id="{{ $data->id }}" class="d-none">
                                                                            {{ $data->nama }},
                                                                            {{ $data->jenis }},
                                                                            {{ $data->tempat }},
                                                                            {{ $data->pemasaran }},
                                                                            {{ $data->tahun_berdiri }}
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
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama usaha" required>
                        @error('nama') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jenis" placeholder="Masukkan jenis usaha" required>
                        @error('jenis') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="tempat" placeholder="Masukkan tempat usaha" required></textarea>
                        @error('tempat') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="pemasaran" placeholder="Masukkan area pemasaran" required></textarea>
                        @error('pemasaran') <span class="error">{{ $message }}</span> @enderror
                    </div>
                     <div class="form-group">
                        <input type="number" class="form-control" name="tahun_berdiri" placeholder="Masukkan tahun berdiri usaha" required>
                        @error('tahun_berdiri') <span class="error">{{ $message }}</span> @enderror
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
                            <p>Nama Usaha</p>
                            <input type="text" class="form-control" name="nama" id="eNama" required>
                            @error('nama') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Jenis Usaha</p>
                            <input type="text" class="form-control" name="jenis" id="eJenis" required>
                            @error('jenis') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Tempat Usaha</p>
                            <input type="text" class="form-control" name="tempat" id="eTempat" required>
                            @error('tempat') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Area Pemasaran</p>
                            <input type="text" class="form-control" name="pemasaran" id="ePemasaran" required>
                            @error('pemasaran') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <p>Tahun Berdiri</p>
                            <input type="number" class="form-control" name="tahun_berdiri" id="eTahun" required>
                            @error('tahun_berdiri') <span class="error">{{ $message }}</span> @enderror
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
            document.getElementById("eId").value        = id;
            document.getElementById("eNama").value      = data[0].trim()
            document.getElementById("eJenis").value     = data[1].trim()
            document.getElementById("eTempat").value    = data[2].trim()
            document.getElementById("ePemasaran").value = data[3].trim()
            document.getElementById("eTahun").value     = data[4].trim()
            document.getElementById('formEdit').action = "/surat-usaha/" + id;
        }

        function hapus(id) {
            var data = (document.getElementById(id).textContent).split(",")
            document.getElementById("dId").value = id
            document.getElementById("dhapus").textContent = 'Apakah anda yakin ingin menghapus "' + data[0] + '"?'
            document.getElementById('formHapus').action = "/surat-usaha/" + id;
        }
    </script>
@endpush
