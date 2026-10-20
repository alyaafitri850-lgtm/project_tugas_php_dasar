<?php 
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Alya Fitriani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "alyaa@upi.edu",
        "nilai" => 95
    ],
        
    [
        "nim" => "25002",
        "nama" => "Dita Amaliya",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "didit@upi.edu",
        "nilai" => 75
    ],

     [
        "nim" => "25003",
        "nama" => "Friska Agustina",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "friska@upi.edu",
        "nilai" => 40
    ],

     [
        "nim" => "25004",
        "nama" => "Adi Imrul",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "adimrul@upi.edu",
        "nilai" => 84
    ],

     [
        "nim" => "25005",
        "nama" => "Caca Marica",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "merica@upi.edu",
        "nilai" => 60
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f5fa;
            margin: 0;
            padding: 40px;
        }

        .container {
            background-color: white;
            max-width: 1200px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px  15px rgba(0, 0, 0, 0.1);
        }

        table {
            border-collapse:  collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eaf1ff;
        }

        .lulus {
            color: green;
            font-weight: bold;
        }

        .tidak-lulus {
            color: red;
            font-weight: bold;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        @media (max-width: 768px) {
            body {
                padding: 15px;
            }

            .container {
                padding: 15px;
            }

            .table-wrapper {
                over-flow-x: auto;
            }

            .header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Mini Website PHP Dasar</p>
            </div>
            <a href="form_pesan.php" class="btn btn-primary">Isi Form Pesan</a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($mahasiswa as $data): ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["nim"]; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["jurusan"]; ?></td>
                        <td><?php echo $data["email"]; ?></td>
                        <td><?php echo $data["nilai"]; ?></td>

                        <td> <?php
                            if ($data["nilai"] >= 80) {
                                echo "A";
                            } elseif ($data["nilai"] >= 70) {
                                echo "B";
                            } elseif ($data["nilai"] >= 60) {
                                echo "C";
                            } else {
                                echo "D";
                            }
                            ?>
                        </td>

                        <td>
                            <?php
                            if ($data["nilai"] >= 70) {
                                echo "<span class='lulus'>Lulus</span>";
                            } else {
                                echo "<span class='tidak-lulus'>Tidak Lulus</span>";
                            }
                            ?>
                        </td>

                        <td>
                            <a href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= urlencode($data["nama"]) ?>&jurusan=<?= urlencode($data["jurusan"]) ?>&email=<?= urlencode($data["email"]) ?>&nilai=<?= $data["nilai"] ?>"
                               class="btn btn-primary btn-sm">
                                Lihat Detail
                            </a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

