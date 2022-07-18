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
                                                <h5 class="card-title" style="font-size: 1.6rem">Surat Lainnya</h5>
                                                <div class="card-tools" style="margin-top: -50px">
                                                    <button type="submit" class="btn btn btn-outline-primary float-right" 
                                                            data-toggle="modal" data-target="#tambah"
                                                    >
                                                        <i class="fas fa-plus"></i> Tambah Surat 
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="table-responsive" style="margin-top: 20px">
                                                <table id="myTable" class="display" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nomor Surat</th>
                                                            <th>Jenis</th>
                                                            <th>Approve</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($surat_global as $data)
                                                            <tr>
                                                                <td class="text-center">{{ $loop->iteration }}</td>

                                                                @if ($data->nomor_surat == NULL)
                                                                   <td style="color: red">
                                                                        <b>Perlu Approval</b>
                                                                    </td>
                                                                @else
                                                                    <td>{{ $data->nomor_surat }}</td>
                                                                @endif

                                                                <td>{{ $data->jenis }}</td>

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
                                                                        <p id="{{ $data->id }}" class="d-none">
                                                                            {{ Auth::user()->fname }}, {{ Auth::user()->lname }}
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

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <form class="forms-sample" method="post">
                        @csrf
                        
                        <div class="form-group">
                            <h5>Pastikan data profile anda telah terisi semua ! !</h5>
                        </div>

                        <div style="margin-bottom: 15px">
                        <select class="js-states form-control" name="jenis" tabindex="-1" style="display: none; width: 100%">
                            <option value="kosong">Pilih Jenis</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Surat Domisili">Surat Domisili</option>
                        </select>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Ya, Lanjutkan</button>
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
        function hapus(id) {
            var data = (document.getElementById(id).textContent).split(",")
            document.getElementById("dId").value = id
            document.getElementById("dhapus").textContent = 'Apakah anda yakin ingin menghapus surat "' + data[0] + '"?'
            document.getElementById('formHapus').action = "/surat-lainnya/" + id;
        }
    </script>
@endpush
