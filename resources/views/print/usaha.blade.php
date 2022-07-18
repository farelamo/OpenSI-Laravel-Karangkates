<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <style type="text/css">
            @page { size: 21cm 33cm portrait; }
            
            .font {
                font-size: 15pt
            }

            .head {
                text-align: center
            }

            .table-left {
                text-align: left;
                margin-left: 15%
            }

        </style>
        <div>
            <div style="width: 100%">
                <div class="justify-content-between">
                    <div class="position-absolute">
                        <img style="height: 100px; margin: 20% 0%% 0% 30%" src="{{ $logo }}" alt="Logo Malang">
                    </div>
                    <div class="font position-relative mb-2 ml-5" style="top: 30px">
                        <h6 class="head">PEMERINTAH KABUPATEN MALANG</h6>
                        <h6 class="head" >KECAMATAN SUMBER PUCUNG</h6>
                        <h5 class="head">DESA KARANGKATES</h5>
                        <p class="head" style="text-decoration: underline; font-size: 12pt">Jl. Pandan No. 05 (0341) 383881 Kode Pos 65165 Desa Karangkates</p>
                    </div>
                </div>
            </div>
            <h5 class="head ml-5" style="text-decoration: underline; margin-top: 8%">SURAT KETERANGAN USAHA</h5>
            <p class="head ml-5" style="font-size: 10pt; margin-top: -7px">Nomor {{ $usaha->nomor_surat }}</p>
            

            <p style="margin-left: 3%" class="font">1. Diberikan kepada : </p>
            <div class=" font">
                <div class="d-flex justify-content-center table-left">
                    <p>
                        a. Nama Lengkap <span style="margin-left: 12.9%; margin-right: 1%">:</span> {{Auth::user()->fname}} {{Auth::user()->lname}}<br>
                        b. Jenis Kelamin <span style="margin-left: 14.7%; margin-right: 1%">:</span> {{Auth::user()->gender}}<br>
                        c. Tempat/Tanggal Lahir <span style="margin-left: 3%; margin-right: 1%">:</span> {{ Auth::user()->tempat_lahir }}, {{ Auth::user()->tanggal_lahir }}<br>
                        d. Kewarganegaraan <span style="margin-left: 8.15%; margin-right: 1%">:</span> {{Auth::user()->kewarganegaraan}}<br>
                        e. Pemegang KTP Nomor <span style="margin-left: 0.9%; margin-right: 1%">:</span> {{Auth::user()->nik}}<br>
                        f. Alamat <span style="margin-left: 26%; margin-right: 1%">:</span> {{Auth::user()->alamat}}<br>
                    </p>
                </div>
            </div>

            <p class="font" style="margin-left: 3%">2. Bahwa orang tersebut diatas benar-benar memiliki usaha : </p>
            
            <div class=" font">
                <div class="d-flex justify-content-center table-left">
                    <p>
                        a. Nama Usaha <span style="margin-left: 10.8%; margin-right: 1%">:</span> {{ $usaha->nama}}<br>
                        b. Jenis Usaha <span style="margin-left: 11.9%; margin-right: 1%">:</span> {{$usaha->jenis}}<br>
                        c. Tempat Usaha <span style="margin-left: 8.6%; margin-right: 1%">:</span> {{ $usaha->tempat }}<br>
                        d. Pemasaran <span style="margin-left: 13.2%; margin-right: 1%">:</span> {{$usaha->pemasaran}}<br>
                        e. Berdiri Sejak Tahun <span style="margin-left: 0.9%; margin-right: 1%">:</span> {{$usaha->tahun_berdiri}}<br>
                    </p>
                </div>
            </div>
            <p class="font" style="margin-left: 3%">3. Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagai persyaratan administrasi di Bank Mandiri dan kepada pihak yang berkepentingan harap menjadikan periksa</p>
            <div style="text-align: right; margin-right: 4.9%">
                <p class="font">
                    <p style="margin-right: 4.2%; margin-bottom: 0.5%">Karangkates, @php setlocale(LC_ALL, 'IND'); echo strftime('%d %B %Y'); @endphp</p>
                    An. Kepala Desa Karangkates<br>
					<p style="margin-bottom: 15%; margin-right: 15%; margin-top: 0.5%">Sekretaris Desa<p>


                    <p style="margin-right: 14.1%;">nama sekretaris</p>
                </p>
            </div>
        
        </div>
    </body>
</html>