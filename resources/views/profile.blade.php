<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
    }

    .profile-container {
        text-align: center;
        background-color: #fff;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        width: 400px;
        height: 500px;
        transition: transform 0.3s ease;
    }

    .profile-image img {
    border-radius: 50%; /* Mengubah sudut gambar menjadi lingkaran */
    border: 2px solid #ccc;
    padding: 10px;
    width: 200px; /* Ukuran lebar gambar */
    height: 200px; /* Ukuran tinggi gambar */
    filter: grayscale(100%); /* Membuat gambar hitam putih */
    transition: transform 0.3s ease, border-color 0.3s ease, filter 0.3s ease;
}



    /* Efek hover pada gambar profil: Berubah menjadi berwarna */
    .profile-image img:hover {
        transform: scale(1.1); /* Membesarkan gambar */
        border-color: #0007bff; /* Mengubah warna border saat di-hover */
        filter: grayscale(0); /* Menghilangkan efek hitam putih (kembali berwarna) */
    }

    /* Informasi profil */
    .profile-info {
        margin-top: 20px;
    }

    .profile-field {
        background-color: #e0e0e0;
        margin: 10px 0;
        padding: 10px;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Efek hover pada box profile */
    .profile-container:hover {
        transform: scale(1.05); /* Membesarkan seluruh kotak saat di-hover */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Efek bayangan lebih besar saat di-hover */
    }

    /* Efek hover pada field */
    .profile-field:hover {
        background-color: #87CEFA;
        color: #fff; /* Mengubah warna teks menjadi putih saat di-hover */
    }
</style>


</head>
<body>
    <div class="profile-container">
        <div class="profile-image">
            <img src="Gambar/honkai-star-wallpaper-chibi.jpg" alt="Profile Picture">
        </div>
        <div class="profile-info">
            <div class="profile-field">Muhamad Rofiq</div>
            <div class="profile-field">Kelas A</div>
            <div class="profile-field">NPM 2217051098</div>
        </div>
    </div>
</body>
</html>
