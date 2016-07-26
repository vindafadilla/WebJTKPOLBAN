# Simple Report

Penjelasan tentang penggunaan Git

## Sekilas Git

Pada dasarnya Git bekerja seperti sebuah  *content tracker* yang menyimpan histori sebuah  file  system  (direktori  dan  file)  dalam  bentuk  full  backup.  Hanya  saja,  kemudian  terbukti bahwa Git juga bisa digunakan sebagai SCM (  Source Code Management) sehingga Git menjadi sangat populer seperti saat ini.

Git  adalah  sistem  yang  terdistribusi  mirip jaringan  *peer-to-peer*.  Central  repository  hanya berfungsi  sebagai  perantara  dalam  proses  sinkronisasi.  Secara  teknis  kita  bisa  melakukan sinkronisasi langsung antar repositori tapi hal ini sangat tidak disarankan.

Kurang lebih repositori yang ada di Git semua mempunyai derajat yang sama, artinya user yang memiliki repositori tersebut dapat membuat branch, melakukan commit dan reset atau revert, memanipulasi histori secara independen tanpa harus berkomunikasi dengan server dan repositori yang lain.

Saat kita memerlukan sinkronisasi, maka kita dapat melakukan push ke Git server dan user yang lain melakukan fetch (ambil) kemuadian merge (menggabungkan) update terbaru di Git server dengan repositori. Ini untuk kurang lebih menyamakan repositori lokal yang dimiliki oleh seorang user dengan user yang lain melalui Git server.

Dalam latihan ini server yang saya gunakan adalah github ( https://github.com/ ).

Cara kerja Git, misalkan kita mempunyai 3 file File A, File B, dan File C. Kita upload ke melalui Git Server versi 1 dari ketiga File tersebut. Ternyata pada program yang kita buat ada beberapa perubahan yang harus dilakukan pada File A dan File C, maka File A dan File C ini ketika kita upload akan berubah sesuai update kita lakukan. Pada File B memang tidak dilakukan perubahan, namun File B tersebut tetap akan di upload juga hanya saja versinya akan tetap sama, yaitu versi 1 pada upload versi 2. Lalu, pada versi 3 File B ternyata harus diubah, tetapi File A dan File C tetap. File A dan File C akan tetap di upload dengan File B tapi menggunakan versi sebelumnya yaitu versi 2, karena mereka tidak mengalami perubahan pada versi 3. 

![Gambar GitHistori](https://www.dropbox.com/s/jgdnxdaxikhdwjx/Capture3.PNG?dl=0)
<img src="https://www.dropbox.com/s/jgdnxdaxikhdwjx/Capture3.PNG?dl=0">
Lebih Lanjut dapat dilihat pada Cara penggunaan Git dan Pemahaman Git Branch.

Beberapa istilah yang ada pada Git

 - Working directory
 Working directory atau working tree atau working copy adalah directory di komputer kita (lokal) yang memiliki repositori. 
 - Repositori
 Repositori adalah database yang menyimpan histori dari working copy.
 - Commit
 Commit adalah kondisi working directory pada satu waktu (snapshot) yang direkam dalam histori. Bisa berarti proses penyimpanan snapshot juga.
 - Staging Index
 Perubahan yangterjadi dalam direktori kerja tidak langsung disimpan dalam repositori, tetapi harus disipan dulu dalam staging index. Repositori akan diperbaharusi setelah kita melakukan commit file yang ada dalam staging index.
 - Staged File
 Staged File adalah File yang ada di dalam staging index.
 - Unstaged File
 Unstaged File adalah file yang sudah di modifikasi tetapi belum masuk ke dalam staging index.
 - Branch
 Setiap repositori memiliki minimal satu cabang (branch) yang disebut master branch. kita bisa membuat lebih dari satu cabang dalam satu repositori dimana masing-masing cabang memiliki histori sendiri-sendiri.  Cabang-cabang ini nantinya bisa digabungkan satu sama lain melalui proses merging.
 - Merge
 Merge adalah proses penggabungan sebuah branch laun ke dalam branch di mana kita berada.
 - Untracked File
 Untracked File adalah file yang tidak pernah dimasukkan ke dalam staging index sehingga file tersebut berada di luar kontrol Git.
 - Tracked File
 Tracked File adalah file yang di kontrol atau di monitor oleh Git.
 - HEAD
 HEAD adalah pointer/referensi yang merujuk pada commit terakhir.
 - Push
 Push adalah proses sinkronisasi antara repositori lokal dengan remote repositori.
 - Fetch
 Fetch adalah kebalikan dari push. Di dalam proses ini semua commit terbaru dikirim ke repositori lokal.

## Praktik Penggunaan Git

Penggunaan Git

* Saya menggunakan repositori github agar project yang saya kerjakan dapat di develop oleh orang lain juga, maka saya membuat akun pada https://github.com/ .
* Lalu, setelah saya sudah membuat akun, saya mendownload aplikasi git pada https://git-scm.com/downloads untuk memudahkan dalam pengelolaan project.
* Setelah mengdownload git saya menginstallnya pada device. Lebih jauh saya akan menjelaskan pembuatan repositori di github menggunakan Git Bash pada OS Windows.
* Setelah Git terinstall pada desktop, paket installannya berisi mysisgit, Git GUI, Git Bash (Git console). Git Bash merupakan aplikasi konsol yang disertakan dalam instalasi mysisgit. Konsol ini adalah emulator linux terminal untuk windows jadi beberapa perintah linux dapat digunakan disini.
* Saya membuka git yaitu pertama, klik kanan pada direktori yang kita ingin kelola dengan git. Lalu, klik "Git Bash Here" di context-menu.
* Dari sini kita dapat mulai mencoba memahami perilaku Git dengan menggunakan Git Bash. 
* Kita akan mengupload file direktori yang telah kita pilih tersebut ke git server yaitu github pada cabang utama atau master branch.
* Pertama-tama kita harus membuat repositori dengan melalui proses inisialisasi terlebih dahulu yang terdiri dari 2 langkah yaitu inisialisasi repositori, lalu yang kedua initial commit. Karena kita menggunakan Git Bash langsung pada directory yang kita pilih, maka otomatis working copy yang berjalan adalah directory yang kita pilih. Setelah itu, jalankan perintah git init di direktori tersebut. Perintah ini akan membuat subdirektori baru bernama .git . Repositori yang baru kita buat belum bisa digunakan karena Git tidak tahu apa yang harus dikontrol sampai kita melakukan initial commit, caranya dengan menggunakan perintah git add <nama file atau jika ingin semua file pada direktori dapat menggunakan titik>. Contoh
git add .
Lalu, kita dapat menjalankan git commit -m "< keterangan >". Contoh 
git commit -m "v0.1"
Pada saat perintah ini dijalankan, maka Git akan menduplikasi versi terakhir working copy kemudian menggunakan file yang ada di staging index untuk memperbaharui duplikasi tersebut dan menyimpannya dalam versi terbaru. Argumen -m adalah argumen opsional yang berisi keterangan ( commit message ). Argumen ini digunakan jika kita ingin menulis hanya satu baris keterangan singkat.
Lalu untuk menguploadnya ke Git server dengan perintah git remote add origin <em>remote repository URL</em>. Contoh
<!-- Untuk menambah URL dimana lokal repositori kita akan di push-->
git remote add origin https://github.com/vindafadilla/WebJTKPOLBAN.git
<!--Untuk memverifikasi remote URL yang baru -->
git remote -v 
Kemudian push perubahan yang ada pada lokal repositori kita ke GitHub. Biasanya di awal kita harus memasukkan email dan password kita.
<!-- Perintah untuk push ke repositori Git pada master branch atau cabang utama-->
git push origin master
Direktori lokal berhasil di masukkan ke dalam Git server GitHub.
<img src="https://www.dropbox.com/s/afzg095bnu94oml/Capture4.PNG?dl=0">
<img src="https://www.dropbox.com/s/exxbx2g72jh7aot/Capture2.PNG?dl=0">
* Untuk mengecek proses tersebut berhasil kita dapat membuka akun GitHub kita. Untuk saya sendiri, saya menyimpannya pada https://github.com/vindafadilla/WebJTKPOLBAN atau https://github.com/vindafadilla/WebJTKPOLBAN/tree/master
* Tahap awal belajar Git selesai

## Pemahaman Git Branch

Pemahaman ini berdasarkan referensi http://nvie.com/posts/a-successful-git-branching-model/
Pada Simple Report ini saya akan menjelaskan penjelasan singkatnya saja dan laporan praktek yang telah saya buat.
Pertama kelebihan Git dibandingkan Centralized source code control system atau Centralized Version Control System (CVCS) seperti Subversion, ClearCase, CVS dan lain-lain yang hanya menggunakan satu repositori untuk menyimpan semua revisi file, masing-masing orang yang bekerja memiliki full copy dari repositori sehingga jika salah satu repositori rusak, recovery bisa dilakukan dengan mudah, cukup dengan mengkopi repositori lain. Sehingga ketakutan akan merging/branching terutama jika terjadi konflik sedikit lebih terkurangi. Untuk QePon yang telah dijelaskan oleh pak Mahmud Galela, terdapat dua server yaitu server untuk production dan server untuk development. 

Susunan repositori yang akan bekerja baik pada branching model ini adalah cetral "truth" repo. Namun harus diingat bahwa repo ini hanya dipertimbangkan untuk menjadi pusat utama (karena Git mempunyai konsep DVCS/ Distributed VCS secara teknisnya memang tidak ada hal seperti central repo). Kita akan menganggap repo ini sebagai origin. Tiap developer akan mem -pull dan push ke origin. Namun tiap developer juga mem-pull perubahan dari peers ke form sub team. 

Cabang Utama/main branch
Dua cabang utama pada central repo:
<ul>
<li>master</li>
<li>develop</li>
</ul>

Pada origin/master : source code di branch ini menggambarkan state production, sedangkan state/develop : source code pada branch ini memperlihatkan state pengembangan paling akhir yang diubah untuk release selanjutnya.

Cabang Pendukung/ Supporting Branch

<ul>
<li>Feature branches</li>
<li>Release branches</li>
<li>Hotfix branches</li>
</ul>

Untuk Feature branch, saat kita mengembangkan program kita pada origin/develop ada kemungkinan kita juga akan mengembangkan fitur-fitur baru untuk aplikasinya, di feature branch inilah source code digambarkan. Ketika pada tahap develop, dan source code kita telah memenuhi requirement untuk rilis dan bug yang ada sudah cukup teratasi maka kita dapat membuat Release branch. Release branch ini sendiri digunakan untuk mensupport hal-hal yang dibutuhkan untuk merilis aplikasi. Yang terakhir hotfix branch ketika source code pada state production terdapat bug yang segera harus diatasi maka dibuatlah branch ini. 

## Praktik Penggunaan Git Branch Menggunakan GitHub

Setelah di penjelasan sebelumnya terdapat praktik membuat repositori GitHub pada master branch selanjutnya saya membuat branch pada origin/develop 
Pertama-tama saya membuat branch baru dengan perintah 
git checkout -b develop
Lalu saya membuat feature baru pada develop
git checkout -b < nama fitur baru > develop
Setelah melakukan perubahan pada feature satu selanjutnya saya pertama-tama akan open pull request untuk mencoba merge branch, lalu pilih new pull request ketika memilih new pull request, nantinya akan terlihat perubahannya.
Lalu, saya melakukan merge pull request setelah di compare sebelumnya.

Sejauh ini saya telah berhasil mencoba membuat 6 branch termasuk master branch. Lalu, saya melakukan release dari source code yang sudah di develop. Saya juga sudah mencoba hotfix. 

Untuk gambar-gambar proses melakukan branching git dapat dilihat di 
https://www.dropbox.com/sh/uoo4rhqvu0omrxi/AACIppfYmqOzVFE-bKpS2j0La?dl=0
