<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Ujian - {{ $hasil->nama_siswa }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #000;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 18px;
        }

        .header p {
            margin: 2px 0;
        }

        .info-table,
        .nilai-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .info-table td,
        .nilai-table th,
        .nilai-table td {
            padding: 8px;
            border: 1px solid #000;
        }

        .nilai-table th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .nilai-table td {
            text-align: center;
        }

        .footer {
            margin-top: 40px;
            text-align: right;
        }

        .signature {
            margin-top: 60px;
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>{{ $sekolah }}</h1>
        <p>{{ $alamat }}</p>
        <hr style="border: 1px solid #000;">
        <h3>Hasil Ujian Siswa</h3>
    </div>

    <table class="info-table">
        <tr>
            <td><strong>Nama Siswa</strong></td>
            <td>{{ $hasil->nama_siswa }}</td>
        </tr>
        <tr>
            <td><strong>Nama Ujian</strong></td>
            <td>{{ $hasil->nama_ujian }}</td>
        </tr>
        <tr>
            <td><strong>Jadwal Ujian</strong></td>
            <td>{{ \Carbon\Carbon::parse($hasil->jadwal)->translatedFormat('d F Y H:i') }}</td>
        </tr>
        <tr>
            <td><strong>Waktu Mulai</strong></td>
            <td>{{ $hasil->waktu_mulai }}</td>
        </tr>
        <tr>
            <td><strong>Waktu Selesai</strong></td>
            <td>{{ $hasil->waktu_selesai }}</td>
        </tr>
    </table>

    <table class="nilai-table">
        <thead>
            <tr>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>{{ number_format($hasil->nilai, 0, '', '') }}</strong></td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        <p>Rajagaluh, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
    </div>

    <div class="signature">
        <p><strong>Kepala Sekolah</strong></p>
        <br><br><br>
        <p><u>___________________________</u></p>
    </div>

</body>

</html>
