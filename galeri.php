<?php 

include 'menu.php'; 

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri MAJT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0px;
        }
        .container {
            display: flex;
            gap: 30px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .card {
            position: relative;
            width: 250px;
            height: 150px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .card-title {
            position: flex;
            bottom: 10px;
            left: 10px;
            color: white;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.6);
            padding: 5px 10px;
            border-radius: 5px;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: black;
        }
        .highlight {
            color: #007b5e;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Galeri Masjid At-Taqwa Muhammadiyah Jawa Tengah</h2>
    <?php
        $images = [
            ["src" => "tema/img/dalammasjid.png", "title" => "Dalam Masjid"],
            ["src" => "tema/img/baginasi.JPG", "title" => "Masjid AtTaqwa"],
            ["src" => "tema/img/takjil.JPG", "title" => "Masjid AtTaqwa 2"],
            ["src" => "tema/img/ramadhan.JPG", "title" => "Masjid AtTaqwa 3"],
            ["src" => "tema/img/ramadhan2.JPG", "title" => "Masjid AtTaqwa 4"],
            ["src" => "tema/img/ramadhan3.JPG", "title" => "Masjid AtTaqwa 5"],
            ["src" => "tema/img/ramadhan4.JPG", "title" => "Masjid AtTaqwa 6"],
            ["src" => "tema/img/ramadhan5.JPG", "title" => "Masjid AtTaqwa 7"],
            ["src" => "tema/img/ramadhan6.JPG", "title" => "Masjid AtTaqwa 8"],
            ["src" => "tema/img/ramadhan7.JPG", "title" => "Masjid AtTaqwa 9"],
            ["src" => "tema/img/ramadhan8.JPG", "title" => "Masjid AtTaqwa 10"],
            ["src" => "tema/img/ramadhan9.JPG", "title" => "Masjid AtTaqwa 11"],
            ["src" => "tema/img/ramadhan10.JPG", "title" => "Masjid AtTaqwa 12"],
            ["src" => "tema/img/ramadhan11.JPG", "title" => "Masjid AtTaqwa 13"],
            ["src" => "tema/img/ramadhan12.JPG", "title" => "Masjid AtTaqwa 14"],
            ["src" => "tema/img/ramadhan13.JPG", "title" => "Masjid AtTaqwa 15"],
            ["src" => "tema/img/ramadhan14.JPG", "title" => "Masjid AtTaqwa 16"],
            ["src" => "tema/img/ramadhan15.JPG", "title" => "Masjid AtTaqwa 17"],
            ["src" => "tema/img/ramadhan16.JPG", "title" => "Masjid AtTaqwa 18"],
            ["src" => "tema/img/ramadhan17.JPG", "title" => "Masjid AtTaqwa 18"]
        ];
        ?>
    <div class="container">
        <?php foreach ($images as $image) { ?>
            <div class="card">
                <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['title']; ?>">
                <div class="card-title"> <?php echo $image['title']; ?> </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>


<?php include 'bawah.php'; ?>