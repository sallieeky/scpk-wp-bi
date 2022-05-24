@extends("layout.layout")
@section("css")
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
@endsection
@section("content")
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kelola Pengguna</h1>
        </div>
    </div><!--/.row-->

    {{-- <div class="panel panel-container">
        <div class="row">
            <div class="col-md-6 @if(Auth::user()->role == "user") col-md-4 @endif no-padding">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                        <div class="large">{{ $total_pendaftar }}</div>
                        <div class="text-muted">Total Pendaftar</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 @if(Auth::user()->role == "user") col-md-4 @endif no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-check-circle" style="color: green"></em>
                        <div class="large">100</div>
                        <div class="text-muted">Total Penerima Beasiswa</div>
                    </div>
                </div>
            </div>
            @if(Auth::user()->role == "user")
            <div class="col-md-4 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                    @if($authWp['rank'] <= 100)
                    <div class="row no-padding"><em class="fa fa-xl fa-check" style="color:aquamarine"></em>
                        <div class="large">Lulus</div>
                        <div class="text-muted">Status</div>
                    </div>
                    @else
                    <div class="row no-padding"><em class="fa fa-xl fa-times" style="color:salmon"></em>
                        <div class="large">Tidak Lulus</div>
                        <div class="text-muted">Status</div>
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div><!--/.row-->
    </div> --}}

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <h3><strong>Daftar Akun Pendaftar Beasiswa</strong></h3>
                    <table class="table table-dashed table-bordered display" id="dataTables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>IPK</th>
                                <th>Jumlah Tanggungan</th>
                                <th>Uang Kuliah Tunggal (UKT)</th>
                                <th>Penghasilan Orang Tua</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($akun as $ak)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ak->nama }}</td>
                                <td>{{ $ak->email }}</td>
                                <td>{{ $ak->ipk }}</td>
                                <td>{{ $ak->jml_tanggungan }}</td>
                                <td>{{ $ak->ukt }}</td>
                                <td>{{ $ak->penghasilan_ortu }}</td>
                                <td>
                                    <a href="/kelola-akun/delete/{{ $ak->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("script")
<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTables').DataTable();
    } );
</script>
@endsection