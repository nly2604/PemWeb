<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Smartphone - Praktikum Web</title>
    <!-- Menghubungkan ke file CSS eksternal -->
    <link rel="stylesheet" href="../asset/style4.css">
</head>
<body>

    <header>
        <h1>Daftar Smartphone</h1>
    </header>

    <main id="content">
        <table class="smartphone-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Brand</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <!-- Baris 1: Apple -->
                <tr>
                    <td rowspan="2">1</td>
                    <td rowspan="2">Apple</td>
                    <td>[Gambar iPhone]</td>
                    <td><strong>iPhone 16 Pro Max</strong><br>
                        Dengan desain titanium yang memukau. Kontrol Kamera. Dolby Vision 4K 120 fps. Dan chip A18 Pro.
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="price">Rp 20.000.000</td>
                </tr>

                <!-- Baris 2: Samsung -->
                <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2">Samsung</td>
                    <td>[Gambar Samsung]</td>
                    <td><strong>Samsung Galaxy S24 Ultra</strong><br>
                        HP premium dengan layar besar, S Pen, kamera canggih, dan performa sangat mewah.
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="price">Rp 18.000.000</td>
                </tr>

                <!-- Baris 3: Xiaomi -->
                <tr>
                    <td rowspan="2">3</td>
                    <td rowspan="2">Xiaomi</td>
                    <td>[Gambar Xiaomi]</td>
                    <td><strong>Xiaomi 12 (8/256)</strong><br>
                        HP flagship dengan performa kencang, desain elegan, dan harga lebih terjangkau.
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="price">Rp 8.000.000</td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer id="footer">
        <p>&copy; 2026 Web Praktikum CSS</p>
    </footer>

</body>
</html>