<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembayaran</title>
    <link rel="stylesheet" href="assets/styles_form.css">
</head>
<body>

    <div class="container">
        <h1>Formulir Pembayaran</h1>
        <form id="payment-form">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" placeholder="Masukkan Nama Lengkap" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan Email" required>

            <label for="amount">Jumlah Pembayaran</label>
            <input type="number" id="amount" name="amount" placeholder="Masukkan Jumlah" required>

            <label for="payment-method">Metode Pembayaran</label>
            <select id="payment-method" name="payment-method" required>
                <option value="">Pilih Metode Pembayaran</option>
                <option value="credit-card">Kartu Kredit</option>
                <option value="paypal">PayPal</option>
                <option value="bank-transfer">Transfer Bank</option>
            </select>

            <button type="button" onclick="togglePaymentInfo()">Tampilkan Informasi Pembayaran</button>

            <div class="payment-info" id="payment-info">
                <label for="card-number">Nomor Kartu Kredit</label>
                <input type="text" id="card-number" name="card-number" placeholder="Masukkan Nomor Kartu Kredit">

                <label for="expiry-date">Tanggal Kadaluarsa</label>
                <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY">

                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Masukkan CVV">
            </div>

            <button type="submit">Kirim Pembayaran</button>
        </form>
    </div>

    <script>
        function togglePaymentInfo() {
            const paymentInfo = document.getElementById('payment-info');
            paymentInfo.style.display = paymentInfo.style.display === 'block' ? 'none' : 'block';
        }
    </script>

</body>
</html>
