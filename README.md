#UTS Pemrograman Web - TehYung 

Nama: Fitri Ramadhani
NIM: 252410103019
Kelas: Pemrograman Berbasis Website F

Website yang saya buat disini bernama TehYung, yaitu aplikasi buat pengelolaan stok untuk kedai teh gitu. Website ini dibuat dengan Laravel 13 memakai arsitektur MVC dan Blade sebagai template enginenya. Data menu disimpan dalam bentuk array di Controller. Tema yang saya pilih adalah pengelolaan stok menu. Jadi Pemilik kedai ataupun karyawan bisa melihat ringkasan jumlah menu, total stok, dan jumlah menu yang stoknya menipis, lalu melihat daftar lengkap menu beserta harga dan statusnya.


#Alur Aplikasi

Login -> Dashboard -> Profil -> Pengelolaan. Username nanti dikirim sebagai request parameter dan dijaga middleware CekUsername.

#Screenshot

screenshots/login.png
screenshots/dashboard.png
screenshots/profil.png
screenshots/pengelolaan.png
