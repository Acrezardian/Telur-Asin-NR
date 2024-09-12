<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pemesanan</title>
    <link rel="stylesheet" href="assets/styles_form.css">
</head>
<body>

    <div class="container">
        <h1>Formulir Pemesanan</h1>
        <form id="order-form">
            <label for="full-name">Nama Lengkap</label>
            <input type="text" id="full-name" name="full-name" placeholder="Masukkan Nama Lengkap" required>

            <label for="address">Alamat Domisili</label>
            <input type="text" id="address" name="address" placeholder="Masukkan Alamat Domisili" required>

            <label for="whatsapp">Nomor WhatsApp</label>
            <input type="tel" id="whatsapp" name="whatsapp" placeholder="Masukkan Nomor WhatsApp" required>

            <label for="product">Produk</label>
            <select id="product" name="product" required onchange="updateProductImage()">
                <option value="">Pilih Produk</option>
                <option value="telur-rebus">Telur Rebus</option>
                <option value="telur-bakar">Telur Bakar</option>
            </select>

            <div id="product-image-container">
                <!-- Gambar produk akan ditampilkan di sini -->
            </div>

            <label for="quantity">Jumlah Beli</label>
            <input type="number" id="quantity" name="quantity" placeholder="Masukkan Jumlah" required>

            <label for="payment-method">Metode Pembayaran</label>
            <input type="text" id="payment-method" name="payment-method" value="Qris" readonly>

            <button type="submit">Kirim Pesanan</button>
        </form>
    </div>

    <script>
        function updateProductImage() {
            const product = document.getElementById('product').value;
            const productImageContainer = document.getElementById('product-image-container');

            let imageUrl = '';

            switch (product) {
                case 'telur-rebus':
                    imageUrl = 'assets/image/telurrebus.jpg'; // Ganti dengan URL gambar telur rebus
                    break;
                case 'telur-bakar':
                    imageUrl = 'assets/image/telurbakar.jpg'; // Ganti dengan URL gambar telur bakar
                    break;
                default:
                    imageUrl = '';
            }

            if (imageUrl) {
                productImageContainer.innerHTML = `<img src="${imageUrl}" alt="${product}" class="product-image">`;
            } else {
                productImageContainer.innerHTML = '';
            }
        }
    </script>
    
</body>
</html>
