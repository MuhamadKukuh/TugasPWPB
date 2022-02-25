@extends('template.main')
@section('content')
<form action="{{ url('/update/'. $data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- @csrf --}}
    <input type="file" name="image">
    note: jika tidak ingin mengupdate foto tidak usah isi
    <input type="text" name="nama" value="{{ $data->nama }}">
    <input type="text" name="nis" value="{{ $data->nis }}">
    
        <select name="kelas" id="">
            @foreach ($kelas as $item)
                <option value="{{ $item->id }}">{{ $item->kelas }}</option>
            @endforeach
        </select>
    
    <button>Kirim</button>
</form>
@endsection