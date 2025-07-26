<!DOCTYPE html>
<html>
<head>
    <title>Borrowings Report</title>
    <style>
        table { width: 100%; border-collapse: collapse }
        th, td { border: 1px solid black; padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h2>Borrowings Report</h2>
    <table>
        <thead>
            <tr>
                <th>User</th><th>Archive</th><th>Status</th><th>Borrow Date</th><th>Return Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowings as $b)
            <tr>
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
