<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}
html,body {
        display: grid;
        height: 100%;
        width: 100%;
        place-items: center;
        background-color: #8ec5fc;
        background-image: linear-gradient(62deg, #8ec5fc 0%, #e0c3fc 100%);
    }
.register-continer {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 8px;
    color: #555;
}

input {
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}


.signup-link{
padding: 10px 0px 0px 0px;
}

    </style>
</head>
<body>
    <div class="continer">
        <h2>Register</h2>
        <form action="proses_register.php" method="post">

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="namalengkap">Nama Lengkap:</label>
            <input type="namalengkap" id="namalengkap" name="namalengkap" required>

            <label for="alamat">Alamat:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <div class="signup-link">Belum punya akun??<a href="#">Daftar sekarang</a></div>
        </form>
    </div>
</body>
</html>