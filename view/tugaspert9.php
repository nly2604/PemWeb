<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Kategori Usia Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <style>
        :root {
            --beige: #F2EBE3;
            --dark-brown: #4A3728;
            --accent-tan: #E6DED5;
            --coffee-light: #C7B7A3;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--beige);
            color: var(--dark-brown);
            padding: 50px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .wad {
            background-color: var(--accent-tan);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            font-weight: 600;
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid var(--coffee-light);
            border-radius: 8px;
            background-color: var(--beige);
            color: var(--dark-brown);
            font-family: inherit;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: var(--dark-brown);
            color: var(--beige);
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s;
        }
        button:hover {
            opacity: 0.9;
        }
        .result-box {
            margin-top: 25px;
            padding: 15px;
            background-color: var(--beige);
            border-left: 5px solid var(--dark-brown);
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="wad">
    <h2>Cek Kategori Usia</h2>
    
    <form method="POST" action="">
        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" id="nama" name="nama" required placeholder="Masukkan nama...">
        
        <label for="umur">Umur (Tahun):</label>
        <input type="number" id="umur" name="umur" min="1" max="100" required placeholder="Masukkan umur...">
        
        <button type="submit" name="submit">Cek Kategori</button>
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        
        $nama = htmlspecialchars($_POST['nama']);
        $umur = (int) $_POST['umur']; 
        
        if ($umur < 13) {
            $kategori = "Anak-anak";
        } elseif ($umur >= 13 && $umur <= 17) {
            $kategori = "Remaja";
        } elseif ($umur >= 18 && $umur <= 59) {
            $kategori = "Dewasa";
        } else {
            $kategori = "Lansia";
        }
        
        echo "<div class='result-box'>";
        echo "<h3>Hasil Analisis:</h3>";
        echo "<p>Halo <strong>$nama</strong>, berdasarkan umur Anda yang bernilai <strong>$umur</strong> tahun, Anda termasuk dalam kategori: <strong>$kategori</strong>.</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>