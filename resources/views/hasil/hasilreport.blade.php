<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Hasil Perangkingan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        th, td {
            text-align: left;
            padding: 8px; /* Reduce padding to fit content within the page */
            font-size: 14px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <h1>Data Hasil Perangkingan</h1>
    </center>
    <table align="center">
        <thead>
            <tr>
                <th class="center">Nama</th>
                <th class="center">Hasil</th>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td style="text-align: center;">{{ $row->calon->nama_calon}}</td>
                    <td style="text-align: center;">{{ $row->hasil}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>