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
            <h5 class="head ml-5" style="text-decoration: underline; margin-top: 8%">SURAT KEMATIAN</h5>
            <p class="head ml-5" style="font-size: 10pt; margin-top: -7px">Nomor {{ $kematian->nomor_surat }}</p>
            

            <p style="margin-left: 3%" class="font">Yang Bertandatangan di bawah ini Kepala Desa Karangkates Kecamatan Sumberpucung Kabupaten Malang, menerangkan bahwa : </p>
            <div class=" font">
                <div class="d-flex justify-content-center table-left">
                    <p>
                        Nama <span style="margin-left: 25.6%; margin-right: 3%">:</span> {{$kematian->nama}}<br>
                        NIK <span style="margin-left: 29%; margin-right: 3%">:</span> {{$kematian->nik}}<br>
                        Tempat/Tanggal Lahir <span style="margin-left: 1.7%; margin-right: 3%">:</span> {{ $kematian->tempat_lahir }}, {{ $kematian->tanggal_lahir }}<br>
                        Alamat <span style="margin-left: 24%; margin-right: 3%">:</span> {{$kematian->alamat}}<br>
                    </p>
                </div>
            </div>

            <p class="font" style="margin-left: 3%">Telah Meninggal dunia pada : </p>
            
            <div class=" font">
                <div class="d-flex justify-content-center table-left">
                    <p>
                        Hari <span style="margin-left: 28%; margin-right: 3%">:</span> {{ $kematian->hari }}, Jam {{ $kematian->jam }}<br>
                        Tanggal <span style="margin-left: 22%; margin-right: 3%">:</span> {{$kematian->tanggal}}<br>
                        Di <span style="margin-left: 31%; margin-right: 3%">:</span> {{ $kematian->daerah }}<br>
                        Disebabkan karena <span style="margin-left: 5.2%; margin-right: 3%">:</span> {{$kematian->sebab}}<br>
                        Dimakamkan di <span style="margin-left: 11%; margin-right: 3%">:</span> {{$kematian->tempat_makam}}<br>
                        Pada Hari/Jam <span style="margin-left: 12%; margin-right: 3%">:</span> {{ $kematian->hari_makam }}, Jam {{ $kematian->tanggal_makam }}<br>
                        Tanggal <span style="margin-left: 22%; margin-right: 3%">:</span> {{$kematian->tanggal_makam}}<br>
                    </p>
                </div>
            </div>
            <p class="font" style="margin-left: 3%">Surat keterangan ini dibuat atas dasar yang sebenarnya dan dapat dipergunakan sebagai mana mestinya.</p>
            <div style="text-align: right; margin-right: 4.9%">
                <p class="font">
                    Karangkates, @php setlocale(LC_ALL, 'IND'); echo strftime('%d %B %Y'); @endphp<br>
                    Kepala Desa Karangkates
                </p>
            </div>
        
        </div>
    </body>
</html>