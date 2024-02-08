<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Part</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <a href="{{ route('part.create') }}"> create </a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>nama</th>
                <th>mobil</th>
                <th>plat</th>
                <th>supplier</th>
                <th>asuransi</th>
                <th>tgl</th>
                <th>edit</th>
                <th>hapus</th>
            </tr>
            @foreach($parts as $part)
            <tr>
                <td>{{ $part->nama }}</td>
                <td>{{ $part->mobil }}</td>
                <td>{{ $part->plat }}</td>
                <td>{{ $part->supplier }}</td>
                <td>{{ $part->asuransi }}</td>
                <td>{{ $part->tgl }}</td>
                <td>
                    <a href="{{ route('part.edit', ['part' => $part]) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('part.destroy', ['part'=>$part]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>