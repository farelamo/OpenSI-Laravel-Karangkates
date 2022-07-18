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
                font-size: 13pt
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
                        <p class="head" style="text-decoration: underline; font-size: 12pt">Jl. Pandan No. 05 (0341) 383881 Kode Pos 65165</p>
                    </div>
                </div>
            </div>
            <h5 class="head ml-5" style="text-decoration: underline; margin-top: 8%">SURAT KETERANGAN DOMISILI  </h5>
            <p class="head ml-5" style="font-size: 10pt; margin-top: -7px">Nomor {{ $global->nomor_surat }}</p>
            

            <p style="margin-left: 3%" class="font">1. Yang Bertandatangan di bawah ini : Kepala Desa Karangkates Kecamatan Sumberpucung Kabupaten Malang, dengan ini  menerangkan bahwa : </p>
            <div class=" font">
                <div class="d-flex justify-content-center table-left">
                    <p>
                        a. Nama <span style="margin-left: 22.2%; margin-right: 1.8%">:</span>{{Auth::user()->fname}} {{Auth::user()->lname}}<br>
                        b. Jenis Kelamin <span style="margin-left: 11.9%; margin-right: 1.8%">:</span>{{Auth::user()->gender}}<br>
                        c. Tempat/Tanggal Lahir <span style="margin-left: 1.75%; margin-right: 1%">:</span> {{ Auth::user()->tempat_lahir }}, {{ Auth::user()->tanggal_lahir }}<br>
                        d. NIK <span style="margin-left: 25.1%; margin-right: 1%">:</span> {{Auth::user()->nik}}<br>
                        e. Kewarganegaraan <span style="margin-left: 6.2%; margin-right: 1%">:</span> {{Auth::user()->kewarganegaraan}}<br>
                        f. Agama <span style="margin-left: 21.5%; margin-right: 1%">:</span> {{Auth::user()->agama}}<br>
                        g. Status Perkawinan <span style="margin-left: 5.7%; margin-right: 1%">:</span> {{Auth::user()->status_perkawinan}}<br>
                        h. Pekerjaan <span style="margin-left: 16.75%; margin-right: 1%">:</span> {{Auth::user()->pekerjaan}}<br>
                        i. Alamat <span style="margin-left: 21.7%; margin-right: 1%">:</span> {{Auth::user()->alamat}}<br>
                    </p>
                </div>
            </div>

            <p class="font" style="margin-left: 3%">2. Penduduk tersebut di atas benar-benar warga Desa Karangkates Kecamatan Sumberpucung Kabupaten Malang dan semasa hidupnya berdomisili di alamat tersebut diatas.</p>
            <p class="font" style="margin-left: 3%">3. Demikian Surat Keterangan ini dibuat dengan sebenar-benarnya dan agar dapat dipergunakan sebagai persyaratan administrasi membuat Akte Kematian serta kepada yang berkepentingan diharap maklum.</p>
            <div style="text-align: right; margin-right: 4.9%">
                <p class="font">
                    Karangkates, @php setlocale(LC_ALL, 'IND'); echo strftime('%d %B %Y'); @endphp<br>
                    Kepala Desa Karangkates

                </p>
                <p style="margin-top: 15%; margin-right: 18.5%">Pak Kades</p>
            </div>
        </div>
    </body>
</html>