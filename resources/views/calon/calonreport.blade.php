<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Calon Penerima Beasiswa</title>

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
        <h1>Data Calon Penerima Beasiswa</h1>
    </center>
    <table>
        <thead>
            <tr>
                <th class="center">Nama</th>
                <th class="center">Tempat Lahir</th>
                <th class="center">Tanggal Lahir</th>
                <th class="center">Jenis Kelamin</th>
                <th class="center">Alamat</th>
                <th class="center">Email</th>
                <th class="center">Agama</th>
                <th class="center">Penghasilan</th>
                <th class="center">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $row->nama_calon }}</td>
                    <td class="center">{{ $row->tempat_lahir }}</td>
                    <td class="center">{{ $row->tanggal_lahir }}</td>
                    <td class="center">{{ $row->jenis_kelamin }}</td>
                    <td class="center">{{ $row->alamat }}</td>
                    <td class="center">{{ $row->email }}</td>
                    <td class="center">{{ $row->agama }}</td>
                    <td class="center">{{ $row->penghasilan }}</td>
                    <td class="center">{{ $row->nilai_tes }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
