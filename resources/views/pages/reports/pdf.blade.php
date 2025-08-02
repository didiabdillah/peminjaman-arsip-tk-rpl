<!DOCTYPE html>
<html>
<head>
    <title>Laporan Peminjaman Arsip</title>
    <style>
        table { width: 100%; border-collapse: collapse }
        th, td { border: 1px solid black; padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h2>Laporan Laporan Peminjaman Arsip</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pengguna</th>
                <th>Arsip</th>
                <th>Status</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowings as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->user->name }}</td>
                <td>{{ $b->archive->title }}</td>
                <td>{{ ucfirst($b->status) }}</td>
                <td>{{ $b->borrow_date ?? '-' }}</td>
                <td>{{ $b->return_date ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
