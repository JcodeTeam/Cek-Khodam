<?php
$khodam = [
    [
        "nama_khodam" => "Serigala Sumatra",
        "gambar_khodam" => "serigala.jpg"
    ],
    [
        "nama_khodam" => "Macan Putih",
        "gambar_khodam" => "macan.jpg"
    ],
    [
        "nama_khodam" => "Harimau Bayang",
        "gambar_khodam" => "harimau.jpg"
    ]
];

// Pilih khodam secara acak
$peluang = $khodam[array_rand($khodam)];

$kdm = $peluang["nama_khodam"];
$gbr = $peluang["gambar_khodam"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Khodam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table, th, td {
            border: 3px solid; /* Border tebal untuk efek animasi */
            border-color: red; /* Warna awal border */
            animation: borderFlicker 1s infinite; /* Terapkan animasi */
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        td img {
            max-width: 150px;
            height: auto;
        }
        form {
            text-align: center;
            margin: 20px;
        }
        input[type="text"] {
            padding: 8px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }

        /* Animasi border berkelap-kelip */
        @keyframes borderFlicker {
            0% { border-color: red; }
            25% { border-color: blue; }
            50% { border-color: green; }
            75% { border-color: yellow; }
            100% { border-color: red; }
        }
    </style>
</head>
<body>

    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php if (isset($_POST["submit"])): ?>
        <table>
            <tr>
                <th>Nama</th>
                <th>Khodam</th>
                <th>Gambar</th>
            </tr>
            <tr>
                <td><?= htmlspecialchars($_POST["nama"]); ?></td>
                <td><?= $kdm; ?></td>
                <td><img src="img/<?= htmlspecialchars($gbr); ?>" alt="Gambar Khodam"></td>
            </tr>
        </table>
    <?php endif; ?>

</body>
</html>
