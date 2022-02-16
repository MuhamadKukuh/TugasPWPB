<a href="{{ Route('index') }}">List-Siswa</a>
<form action="{{ url('/insert') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <input type="text" name="nama">
    <input type="text" name="nis">
    
        <select name="kelas" id="">
            @foreach ($kelas as $item)
                <option value="{{ $item->id }}">{{ $item->kelas }}</option>
            @endforeach
        </select>
    
    <button>Kirim</button>
</form>