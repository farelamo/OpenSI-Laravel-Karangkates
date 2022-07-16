<div class="horizontal-bar">
    <div class="logo-box"><a href="#" class="logo-text">Connect</a></div>
    <a href="#" class="hide-horizontal-bar"><i class="material-icons">close</i></a>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="horizontal-bar-menu">
                    <ul>
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li><a href="#">Buat Surat<i class="material-icons">keyboard_arrow_down</i></a>
                            @if (Auth::user()->role == "user")
                                <ul>
                                    <li><a href="/surat-usaha">Usaha</a></li>
                                    <li><a href="/surat-kematian">Kematian</a></li>
                                    <li> <a href="/surat-lainnya">Surat Lainnya</a></li>
                                </ul>
                            @else
                                <ul>
                                    <li><a href="/admin/surat-usaha">Usaha</a></li>
                                    <li><a href="/admin/surat-kematian">Kematian</a></li>
                                    <li> <a href="/admin/surat-lainnya">Surat Lainnya</a></li>
                                </ul>
                                <li><a href="/user">Pengaturan Admin</a></li>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>