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
            <h5 class="head ml-5" style="text-decoration: underline; margin-top: 8%">SURAT KETERANGAN BELUM MENIKAH</h5>
            <p class="head ml-5" style="font-size: 10pt; margin-top: -7px">Nomor {{ $global->nomor_surat }}</p>
            

            <p style="margin-left: 3%" class="font">Yang Bertandatangan di bawah ini kami Kepala Desa Karangkates menerangkan dengan sebenarnya bahwa : </p>
            <div class=" font">
                <div class="d-flex justify-content-center table-left">
                    <p>
                        Nama <span style="margin-left: 22.2%; margin-right: 1.8%">:</span>{{Auth::user()->fname}} {{Auth::user()->lname}}<br>
                        Jenis Kelamin <span style="margin-left: 11.9%; margin-right: 1.8%">:</span>{{Auth::user()->gender}}<br>
                        Tempat/Tanggal Lahir <span style="margin-left: 1.5%; margin-right: 1%">:</span> {{ Auth::user()->tempat_lahir }}, {{ Auth::user()->tanggal_lahir }}<br>
                        Status Perkawinan <span style="margin-left: 5.7%; margin-right: 1%">:</span> {{Auth::user()->status_perkawinan}}<br>
                        NIK <span style="margin-left: 25%; margin-right: 1%">:</span> {{Auth::user()->nik}}<br>
                        Agama <span style="margin-left: 20.6%; margin-right: 1%">:</span> {{Auth::user()->agama}}<br>
                        Kewarganegaraan <span style="margin-left: 6%; margin-right: 1%">:</span> {{Auth::user()->kewarganegaraan}}<br>
                        Pekerjaan <span style="margin-left: 16.6%; margin-right: 1%">:</span> {{Auth::user()->pekerjaan}}<br>
                        Alamat <span style="margin-left: 20.5%; margin-right: 1%">:</span> {{Auth::user()->alamat}}<br>
                    </p>
                </div>
            </div>

            <p class="font" style="margin-left: 3%"><span style="margin-left: 3%">Menerangkan dengan sebenarnya bahwa yang tersebut diatas benar-benar</span> warga Desa Karangkates Kecamatan Sumberpucung Kabupaten Malang dan sepanjang penelitian kami, yang bersangkutan memang tidak tercatat dalam buku daftar perkawinan di Desa Karangkates</p>
            <p class="font" style="margin-left: 3%"><span style="margin-left: 3%">Selanjutnya surat keterangan ini akan dipergunakan untuk kelengkapan</span> Administrasi melamar pekerjaan.</p>
            <p class="font" style="margin-left: 3%"><span style="margin-left: 3%">Demikian surat keterangan ini dibuat dan dikeluarkan dengan sebenarnya</span> dan agar dapat dipergunakan sebagaimana mestinya.</p>
            <div style="text-align: right; margin-right: 4.9%">
                <p class="font">
                    Karangkates, @php setlocale(LC_ALL, 'IND'); echo strftime('%d %B %Y'); @endphp<br>
                    <span style="margin-right: 7.5%">Yang bersangkutan</span>
                </p>
                <p class="font" style="margin-top: 8%; margin-right: 14%">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</</p>
            </div>

            <div style="float: left; margin-left: 5%">
                <p class="font">
                    <span style="margin-left: 23%">Mengetahui,</span> <br>
                    KUA Sumberpucung
                </p>
            </div>
            <div style="float: right; margin-right: 5%">
                <p class="font">
                    Kepala Desa Karangkates<br>
                </p>
                <p style="margin-top: 30%">pakdes</p>
            </div>
        </div>
    </body>
</html>