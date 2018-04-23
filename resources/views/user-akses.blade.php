@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h4>User dengan akses</h4>
            @if(count($user_akses) > 0)
            <table class="table table-hover table-striped">
                <thead>
                    <th>#</th>
                    <th>username</th>
                    <th>akses</th>
                </thead>
                <tbody>
                    @foreach($user_akses as $key => $user)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->hak_akses}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else

            <h6>Tidak ada user dengan akses</h6>

            @endif
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h4>User tanpa akses</h4>
            @if($user_tanpa_akses->count() > 0)
            <table class="table table-hover table-striped">
                <thead>
                    <th>#</th>
                    <th>username</th>
                    <th>akses</th>
                    <th>Hapus</th>
                </thead>
                <tbody>
                    @foreach($user_tanpa_akses as $key => $user)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$user->username}}</td>
                        <td>
                            <form method="POST" class="form_akses" action="{{route('set_user_akses', $user->id_user)}}">
                                @csrf
                            <select class="form-control akses" name="akses">
                                <option disabled selected>Pilih akses</option>

                                @foreach($hak_akses as $akses)
                                <option value="{{$akses->id_hak_akses}}">{{ $akses->hak_akses }}</option>
                                @endforeach
                            </select>

                        </td>
                        <td><a href="{{route('delete-user', $user->id_user)}}" class="btn btn-danger btn-block"><span class="fa fa-trash text-white"></span></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @else
            <h6>Tidak ada user tanpa akses</h6>
            @endif
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">

$('.akses').change(function() {
    $('.form_akses').submit();
});

</script>
@endsection