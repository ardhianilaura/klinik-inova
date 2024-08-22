<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klinik Inova</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Klinik Inova</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                    @if(Auth::user()->role === 'dokter')
                    <li><a href="#">Transaksi</a></li>
                    <li><a href="#">Laporan</a></li>
                    @elseif(Auth::user()->role === 'admin')
                    <li><a href="{{ route('admin.wilayah.index') }}">Master Wilayah</a></li>
                    <li><a href="{{ route('admin.users.index') }}">Master User</a></li>
                    <li><a href="{{ route('admin.pegawai.index') }}">Master Pegawai</a></li>
                    <li><a href="{{ route('admin.tindakan.index') }}">Master Tindakan</a></li>
                    <li><a href="{{ route('admin.obat.index') }}">Master Obat</a></li>
                    @elseif(Auth::user()->role === 'pegawai')
                    <li><a href="{{ route('pegawai.pendaftaran.index') }}">Pendaftaran Pasien</a></li>
                    <li><a <a href="{{ route('pegawai.tindakan.index') }}">Tindakan</a></li>
                    <li><a href="#">Pembayaran Tagihan Pasien</a></li>
                    @elseif(Auth::user()->role === 'kasir')
                    <li><a href="#">Pembayaran Tagihan Pasien</a></li>
                    @endif
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> {{ Auth::user()->email }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a>Level: {{ Auth::user()->role }}</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <form id="logout-form" action="{{ route('actionlogout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link">
                                        <i class="fa fa-power-off"></i> Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container" style="margin-top: 70px;"> <!-- Adjust margin-top for fixed navbar -->
        @yield('konten')
    </div>
</body>

</html>