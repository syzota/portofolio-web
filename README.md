<img width="1920" height="1200" alt="Screenshot (200)" src="https://github.com/user-attachments/assets/0a34f7c9-3890-4a16-9932-3120ab4fb776" /><h1 align="center">✮ Personal Portfolio: To the Passengers!</h1>
<p align="center">
  <i>A repository made for the Website-Based Programming for course in practicum; was made by Putri Syafana Afrillia (NIM: 2409116015). </i>
</p>

## **Introduction** ★

Mini Project ini merupakan dokumentasi hasil pembuatan website sederhana **Portofolio** berbasis **HTML dan CSS**, menggunakan _VUE JS dan Bootstrap_.

---

## **Portofolio Hands-On** ⸝⸝.ᐟ⋆.ᐟ
### Features Checklist ᯓ★

- [x] Section Home (Hero Section)
- [x] Section About Me / Skillset (Deskripsi & Pengalaman)
- [x] Section Certificates (Grid Layout)
- [x] Progress Bar untuk Skillset
- [x] Navigate Bar dan Gambar 
- [x] Integrasi Vue JS dan Bootstrap
- [x] Penggunaan struktur dasar HTML dan CSS untuk styling
- [x] Rapi, responsif dan statis.

# **Project Documentations** ⋆˚࿔.ᐟ

## Library Structure ⊹ ࣪ ˖ ✔

Below is the structure of the **_library_ folder** which contains the main codes that are executed.

```

├── assets/              # Assets gambar, icon, dan background
│   ├── icons/           # Kumpulan icon
│   └── ...              # Foto sertifikat dan dekorasi
├── index.html           # File utama (Struktur & Vue Instance)
└── style.css            # Custom styling 

```

## Program Flows ⭑ & Graphical User Interface (GUI) —͟͟͞͞★

### Navigation Bar ⍟

<img width="1789" height="103" alt="image" src="https://github.com/user-attachments/assets/cd157ecf-32b3-475a-b8ef-8e0068101a67" />

Navigasi ini menggunakan komponen dari **Bootstrap 5** yang dimodifikasi menjadi _floating_ menggunakan CSS custom. Komponen ini tetap berada di atas halaman (_fixed-top_) untuk memudahkan navigasi pengguna.

``` html
<body>
    <div id="app">
        <nav class="navbar fixed-top custom-navbar">
            <div class="container">
                <div class="d-flex align-items-center">
                    <img src="assets/icons/sticky_note.png" alt="logo" class="me-2" style="width:28px;">
                    <a class="navbar-brand fw-bold text-white" style="text-shadow: 3px 3px 3px rgba(255, 255, 255, 0.08);" href="#">Portofolio</a>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold nav-pill" href="#home">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
```

### Home & Hero ⍟

<img width="1920" height="1200" alt="image" src="https://github.com/user-attachments/assets/941539ed-33a2-4944-bae8-adbbdf5667e9" />

Bagian ini menampilkan halaman utama dengan menggunakan **Bootstrap Container** untuk menjaga konten tetap di tengah. Di sini banyak gambar dekoratif yang ditambahkan yang tujuannya agar website tidak terkesan membosankan. Banyak pula class yang diambil dari CSS yang mengatur supaya tombol teks dan gambar sesuai dengan format yang diinginkan juga konsisten.

``` html
        <section id="home" class="hero-section">
            <img src="assets/file.png" class="full-image hero-decor">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="hero-name">Putri S. Afrillia</h1>
                        <h2 class="hero-role">Designer & Developer ✮ </h2>
                        <p class="mt-3 hero-desc">Doing my breath out of Information System Major.</p>
                        <div class="mt-4">
                            <a href="#about" class="btn pill me-3 px-4">Get to know.</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center position-relative mt-5 mt-lg-0">
                        <img src="assets/postcard.png" class="full-image">
                    </div>
                </div>
            </div>
            <img src="assets/skill.png" class="full-image hero-decor">
        </section>
```
Berikut adalah bagian perkenalan diri yang juga menjadi bagian dari _Hero Section_, terdiri dari nama, status, dan _button_ untuk lompat ke bagian _About Me_.

<img width="1920" height="1200" alt="Screenshot (197)" src="https://github.com/user-attachments/assets/06e347e0-3473-41e7-95ec-1179df167320" />

Di bawah ini adalah gambar pelengkap yang menunjukkan bahwa pengguna sedang menggulir ke bagian bawah (_skillset/about_).

<img width="1920" height="1200" alt="Screenshot (198)" src="https://github.com/user-attachments/assets/5ce1c2e9-bfca-4a1b-8baf-f7c9b1a3c720" />

### About Me .✦

Di sini berisi deskripsi pengalaman dan _skillset_ yang divisualisasikan dengan Bootstrap Progress Bar, kedua bagian dibungkus dengan masing-masing _card_ yang juga di-_styling_ lewat CSS.

<img width="1920" height="1200" alt="Screenshot (199)" src="https://github.com/user-attachments/assets/1978c6ed-ba72-47fd-a35a-46561af4f4ed" />

``` dart
        <section id="about" class="py-5">
            <div class="container">
                <h2 class="hero-name text-center">Skillset ✮ </h2>
                <p class="text-center hero-role mb-5">It's not about these; it's about gaining and lock your self.</p>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold hero-role text-center mb-4">Skills ✪</h5>
                                <div v-for="skill in skills" :key="skill.name" class="mb-3">
                                    <p class="text-white mb-1">{{ skill.name }}</p>
                                    <div class="progress">
                                        <div class="progress-bar" :style="{ width: skill.level + '%' }">
                                            {{ skill.level }}%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold hero-role text-center mb-4">Experiences ✪</h5>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <img src="assets/head.png" class="img-fluid">
                                    </div>
                                    <div class="col-7">
                                        <p class="hero-desc">
                                            An IT student who has grown through more than 20 committees, five organizations, currently serve as Head of the Advocacy. I've carried the responsibility of being class representative. With a GPA of 3.98, I keep pushing the better out of me.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
```

### Certificates Gallery .✦ ݁˖

Daftar sertifikat disusun menggunakan _Bootstrap Card_ di dalam sistem _grid_ agar rapi di berbagai ukuran _device_, misalnya jika dibuka pada perangkat _mobile_, akan tersusun ke bawah. Mulai _page_ ini sampai footer, efek blue perlahan-lahan muncul jika pengguna menggulir ke bawah.

<img width="1920" height="1200" alt="Screenshot (200)" src="https://github.com/user-attachments/assets/99803488-dbce-4c97-943e-08128bbb65b7" />


``` html
        <section id="certificates" class="py-5 certificates-section">
            <div class="container">
                <h2 class="text-center fw-bold mb-5 hero-name">Certificates ࣪𖤐 </h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4" v-for="cert in certs" :key="cert.title">
                        <div class="card shadow-sm h-100 text-center">
                            <img :src="cert.img" class="card-img-top">
                            <div class="card-body">
                                <h6 class="fw-bold text-white">{{ cert.title }}</h6>
                                <p class="small text-white">{{ cert.year }}</p>
                                <a :href="cert.img" target="_blank" class="pill">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
```

### Footer .✦ ݁˖

Model _footer_ biasa yang _background_-nya diatur blur lewat CSS. 

<img width="1903" height="140" alt="image" src="https://github.com/user-attachments/assets/dcb77082-86c2-44e4-83b6-c155f2b24652" />

``` html
        <footer class="footer-section text-center py-4">
            <p class="hero-desc mx-auto">© 2026 - To the Passengers by Putri. All rights reserved.</p>
        </footer>
    </div>
```

## **Bonus Scores ゛⸝⸝.ᐟ⋆

### Bootstrap 5 .✦ ݁˖

Nilai tambah diterpkan pada pemanfaatan komponen dari Bootstrap seperti di bawah ini.

| Nama                        | Keterngan                                                                   |
| --------------------------- | --------------------------------------------------------------------------- |
| **Navbar**                  | Navigasi yang tetap berada di atas saat di-scroll.                          |
| **Responsive Breakpoints**  | Menggunakan col-lg-6 dan col-md-4 agar tampilan menyesuaikan HP/Laptop.     |
| **Spacing Utilities**       | Penggunaan py-5, mt-4, dan mb-5 untuk tata letak yang rapi                  |

### Vue JS .✦ ݁˖

Menggunakan Vue JS untuk mengelola data, sehingga daftar skill dan sertifikat tidak ditulis manual berkali-kali di HTML, melainkan menggunakan _v-for_.

``` html
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const { createApp } = Vue
        createApp({
            data() {
                return {
                    skills: [
                        { name: '.𖥔 ݁ Communication', level: 99 },
                        { name: '˖ ✦ Designing', level: 80 },
                        { name: '✮ ⋆ Developing', level: 75 },
                        { name: '˚｡𖦹 Team-work', level: 71 },
                        { name: ' 𓆩✶𓆪 Leadership', level: 70 }
                    ],
                    certs: [
                        { title: 'Ketua Panitia Mubes INFORSA', year: '2026', img: 'assets/mubes.jpg' },
                        { title: 'Fullstack Web Developer', year: '2025', img: 'assets/stack.png' },
                        { title: 'Ketua Panitia Makrab TAROT', year: '2024', img: 'assets/makrab.png' }
                    ]
                }
            }
        }).mount('#app')
    </script>
```

### More Details .✦ ݁˖

Kode di bawah ini dipakai untuk kustomisasi atau personalisasi nama browser dan ikon yang muncul di tab browser. Ada juga  _import_ font dari luar _library_, di konteks ini digunakan dari Google, lalu diikuti tautan CDN dari Bootstrap.

``` html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To the Passengers.</title>
    <link rel="icon" type="image/png" href="assets/icons/paint_alt.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>
```





