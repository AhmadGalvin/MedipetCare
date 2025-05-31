<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
</head>
<body>
    <h1>Form Registrasi User</h1>

    <form method="POST" action="{{ url('/api/register') }}">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Konfirmasi Password:</label><br>
        <input type="password" name="password_confirmation" required><br><br>

        <button type="submit">Register</button>
    </form>

    <script>
document.querySelector('form').addEventListener('submit', async function(e) {
    e.preventDefault(); // cegah reload halaman

    const formData = new FormData(this);
    const data = {};
    formData.forEach((value, key) => data[key] = value);

    try {
        const response = await fetch('/api/register', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data),
        });

        const result = await response.json();

        if (response.ok) {
            alert('Registrasi berhasil! Selamat datang, ' + result.user.name);
            // Kamu bisa redirect atau reset form di sini
        } else {
            alert('Error: ' + (result.message || JSON.stringify(result.errors)));
        }
    } catch (error) {
        alert('Terjadi kesalahan: ' + error.message);
    }
});
</script>

</body>
</html>