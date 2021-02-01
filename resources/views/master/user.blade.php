@extends('layout.app')

@section('style')
<link rel="stylesheet" href="{{asset ('')}}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset ('')}}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('script')
<!-- DataTables -->
<script src="{{asset('')}}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('')}}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('')}}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('')}}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript">
   $(function () {
    var table = $('anggotas').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ asset('') }}list",
        columns: [
            { data: 'id', name: 'id' },
            {data: 'nama', name: 'nama'},
            {data: 'alamat', name: 'alamat'},
            {data: 'email', name: 'email'},
              {data: 'jabatan', name: 'jabatan'},
            {
             data: null,
             className: "center",
             defaultContent: '<a href="#" class="edit btn btn-primary btn-sm"><i class="far fa-edit"></i></a>' 
            }
        ]
    });

    $('anggotas').on( 'click', 'a.edit', function () {
        var data = table.row( $(this).parents('tr') ).data();
        var txt = '{{asset('')}}edit/'+data.id;
        location = txt;
    } );
    
  });
</script>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <a href="{{asset('')}}add" type="button" class="btn btn-block btn-primary col-2">Tambah</a>
            <table class="table table-bordered table-hover">
                
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>E-mail</th>
                         <th>Jabatan </th>
                         <th>Action</th>
                    </tr>
              
                @foreach ($dataanggota as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>   
               <td>{{$item -> nama}}</td>
               <td>{{$item -> alamat}}</td>
                   <td>{{$item -> email}}</td> 
                       <td>{{$item -> jabatan}}</td>
                    <td>
                        <a href="{{ url('edit', $item -> id)}}"><i class="fas fa-edit"></i></a> 
                    </td>
                </tr>
                
                   @endforeach
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
