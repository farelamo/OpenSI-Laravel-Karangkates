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
                                                                        <a href="#" class="h3"
                                                                            data-toggle="modal" data-target="#edit"
                                                                            onclick='edit("{{ $data->id }}")'>
                                                                            <i class="fas fa-edit m-1"></i>
                                                                        </a>
                                                                        <p id="{{ $data->id }}" class="d-none">
                                                                            {{ $data->nomor_surat }},
                                                                        </p>
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
                            <p>Nomor Surat</p>
                            <input type="text" class="form-control" name="nomor_surat" id="eNomorSurat" placeholder="Masukkan nomor surat" required>
                            @error('nomor_surat') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan & Approve</button>
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
            document.getElementById("eNomorSurat").value    = data[0].trim()
            document.getElementById('formEdit').action = "/admin/surat-kematian/" + id;
        }
    </script>
@endpush
