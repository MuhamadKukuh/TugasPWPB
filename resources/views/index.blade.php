@extends('template.main')
@section('content')
    <div class="container pt-3 pb-3">
        <a href="{{ url('/') }}">tambah Siswa</a>
        <table border="2" style="margin-top: 10px" class="table table-striped">
            <tr>
                <td>No</td>
                <td>Image</td>
                <td>Nama</td>
                <td>NIS</td>
                <td>Kelas</td>
                <td>delete/edit</td>
            </tr>
            @foreach ($kelas as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><img src="{{ asset('images/'. $item->image) }}" alt="" style="max-width: 150px; border-radius:100px"></td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->kelas->kelas }}</td>
                    <td>
                        <a href="{{ url('/edit/'. $item->id ) }}">edit</a>
                        <a href="{{ url('/delete/'. $item->id ) }}">hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
