<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-decoration: none;
        }

        th, td {
            border: 1px solid #333;
            padding: 8px; /* Sedikit tambahan padding untuk keterbacaan */
            text-align: left; /* Untuk perataan teks */
        }

        th {
            background-color: #CABCBC;
        }

        td {
            background-color: #E4D9D9;
        }

        a {
            color: #007BFF; /* Warna biru untuk link */
            text-decoration: none; /* Menghilangkan garis bawah pada link */
        }

        a:hover {
            text-decoration: underline; /* Menambahkan garis bawah saat hover */
        }
    </style>
</head>
<body>
    <?php
        $data = [
            [
              "position" => 1,
              "url" => "https://www.nike.com/",
              "title" => "Nike. Just Do It. Nike.com",
              "description" => "Nike delivers innovative products, nike"
            ],
            [
              "position" => 2,
              "url" => "https://www.instagram.com/nike/?hl=de",
              "title" => "Nike (@nike) • Instagram photos and videos",
              "description" => "255m Followers, 147 Following, 1019 Posts - melihat pengetahuan tentang nike"
            ],
            [
              "position" => 3,
              "url" => "https://twitter.com/nike",
              "title" => "Nike - Twitter",
              "description" => "Welcome to Nike FC.nike brand terkenal,..."
            ],
            [
              "position" => 4,
              "url" => "https://en.wikipedia.org/wiki/Nike,_Inc.",
              "title" => "Nike, Inc. - Wikipedia",
              "description" => "Nike, capcut wikipedia 12,..."
            ],
            [
              "position" => 5,
              "url" => "https://www.youtube.com/user/nike",
              "title" => "Nike - YouTube",
              "description" => "ini adalah pihk nike aku..."
            ],
            [
              "position" => 6,
              "url" => "https://www.footlocker.com/category/brands/nike.html",
              "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
              "description" => "ini adalah chanel youtube nya nike.."
            ]
        ];
    ?>
    <table>
        <thead>
            <tr>
                <th>Position</th>
                <th>URL</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) : ?>
            <tr>
                <td><?php echo htmlspecialchars($row["position"], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><a href="<?php echo htmlspecialchars($row["url"], ENT_QUOTES, 'UTF-8'); ?>" target="_blank"><?php echo htmlspecialchars($row["url"], ENT_QUOTES, 'UTF-8'); ?></a></td>
                <td><?php echo htmlspecialchars($row["title"], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($row["description"], ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
