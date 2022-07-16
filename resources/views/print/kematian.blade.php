<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <style type="text/css">
            .font {
                font-size: 15pt
            }

            .head {
                text-align: center
            }

            .table-left {
                text-align: left;
                margin-left: 30%
            }

            table tr td,
            table tr th{
                font-size: 10pt
            }
        </style>
        <div class="container">
            <div style="width: 100%">
                <div class="justify-content-between">
                    <div class="position-absolute">
                        <img style="height: 200px" src="{{ asset('images/Logo.png')}}" alt="Logo Malang">
                    </div>
                    <div class="font position-relative mb-5" style="top: 30px">
                        <h4 class="head">PEMERINTAH KABUPATEN MALANG</h4>
                        <h4 class="head" >KECAMATAN SUMBER PUCUNG</h4>
                        <h3 class="head">DESA KARANGKATES</h3>
                        <p class="head" style="text-decoration: underline">Jl. Pandan No. 05 (0341) 383881 Kode Pos 65165 Desa Karangkates</p>
                    </div>
                </div>
            </div>
            <h3 class="head mr-5" style="text-decoration: underline; margin-top: 8%">SURAT KEMATIAN</h3>
            <p class="head mr-5">Nomor </p>
            

            <p style="margin-left: 18%" class="font">Yang Bertandatangan di bawah ini Kepala Desa Karangkates Kecamatan Sumberpucung</p>
            <p class="font" style="margin-left: 15%">Kabupaten Malang menerangkan bahwa : </p>
            <div class="container font">
                <div class="row table-left">
                    <div class="col-0">
                        Nama
                    </div>
                    <div class="col-0" style="margin-left: 14.8%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->nama }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>NIK</p>
                    </div>
                    <div class="col-0" style="margin-left: 17%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->nik }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>Tempat/Tanggal lahir </p>
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->tempat_lahir }}, {{ $kematian->tanggal_lahir }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>Alamat</p>
                    </div>
                    <div class="col-0" style="margin-left: 13.8%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->alamat }}
                    </div>
                </div>
            </div>

            <p class="font" style="margin-left: 15%">Telah Meninggal dunia pada : </p>
            
            <div class="container font">
                <div class="row table-left">
                    <div class="col-0">
                        Hari
                    </div>
                    <div class="col-0" style="margin-left: 14.8%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->hari }}, Jam {{ $kematian->jam }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>Tanggal</p>
                    </div>
                    <div class="col-0" style="margin-left: 17%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->tanggal }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>Di</p>
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->daerah }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>Disebabkan karena</p>
                    </div>
                    <div class="col-0" style="margin-left: 13.8%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->sebab }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>Dimakamkan di</p>
                    </div>
                    <div class="col-0" style="margin-left: 17%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->tempat_makam }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>Pada Hari/Jam</p>
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                       {{ $kematian->hari_makam }}, Jam {{ $kematian->tanggal_makam }}
                    </div>
                </div>
                <div class="row table-left">
                    <div class="col-0">
                        <p>Tanggal</p>
                    </div>
                    <div class="col-0" style="margin-left: 13.8%">
                        :
                    </div>
                    <div class="col-0" style="margin-left: 1%">
                        {{ $kematian->tanggal_makam }}
                    </div>
                </div>
            </div>
            <p class="font" style="margin-left: 15%">Surat keterangan ini dibuat atas dasar yang sebenarnya dan dapat dipergunakan sebagai mana mestinya.</p>
        </div>
    </body>
    {{-- @php dd($kematian); @endphp --}}
</html>