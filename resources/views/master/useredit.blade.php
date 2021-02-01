@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data Anggota</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ url('update', $data->id)}}">
			{{ csrf_field() }}
                   <div class="card-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="txtnama" placeholder="Nama" value = {{ $data -> nama }}>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="txtalamat" placeholder="alamat"value = {{ $data -> alamat }}>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="datetgllhr"value = {{ $data -> tgllhr }}>
                        </div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input type="email" class="form-control" name="txtemail" placeholder="E-Mail"value = {{ $data -> email }}>
                        </div>
                        <div class="form-group">
                            <label>No. Handphone</label>
                            <input type="text" class="form-control" name="txtnohp" placeholder="No. Handphone"value = {{ $data -> nohp }}>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
