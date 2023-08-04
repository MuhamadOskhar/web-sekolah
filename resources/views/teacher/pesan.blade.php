@extends('components.template_teacher')

@section('title', "Lihat Pesan")
@section('mainContainer')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Lihat Pesan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Lihat Pesan</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="info-box mb-3 bg-info">
                    <span class="info-box-icon"><i class="fas fa-info"></i></span>
        
                    <div class="info-box-content">
                        <h2>Pesan Terbaru</h2>
                    </div>
                </div>
            </div>
            @if ($banyak_pesan_terbaru > 0)
                @foreach ($pesan_terbaru as $data)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <strong>{{ $data->user->name }}</strong>
                            <p>{{ $data->message }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
            <div class="col-md-12">
                <div class="info-box mb-3 bg-white row justify-content-center py-4">
                    <h5 class="text-center text-muted">Tidak ada pesan baru !</h5>
                </div>
            </div>
            @endif
            <div class="col-md-12">
                <div class="info-box mb-3 bg-success">
                    <span class="info-box-icon"><i class="fas fa-check"></i></span>
                    <div class="info-box-content">
                        <h2>Pesan Lama</h2>
                    </div>
                </div>
            </div>
        </div>
        @if ($banyak_pesan_lama > 0)
            @foreach ($pesan_lama as $data)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <strong>{{ $data->user->name }}</strong>
                        <p>{{ $data->message }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12">
                <div class="info-box mb-3 bg-white row justify-content-center py-4">
                    <h5 class="text-center text-muted">Tidak ada pesan !</h5>
                </div>
            </div>
        @endif
    </div>
</section>
@endsection