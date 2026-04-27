<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To the Passengers.</title>
    <link rel="icon" type="image/png" href="assets/icons/paint_alt.png">

    <!-- Panggil font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="app">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand fixed-top custom-navbar">
            <div class="container">
                <div class="d-flex align-items-center">
                    <img src="assets/icons/sticky_note.png" alt="logo" class="me-2" style="width:28px;">
                    <a class="navbar-brand fw-bold" style="color:white; text-shadow: 3px 3px 3px rgba(255, 255, 255, 0.081);" href="#">Portofolio</a>
                </div>

                <ul class="navbar-nav ms-auto flex-row"> 
                    <li class="nav-item me-3"> <a class="nav-link fw-bold nav-pill" href="#about">Get to know.</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link fw-bold nav-pill" href="assets/cv.pdf" target="_blank" rel="noopener noreferrer">Download CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold nav-pill" href="https://github.com/syzota" target="_blank" rel="noopener noreferrer">View GitHub</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- HERO -->
        <section id="home" class="hero-section">

            <img src="assets/file.png" class="full-image hero-decor">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="hero-name">Putri S. Afrillia</h1>
                        <h2 class="hero-role">Designer & Developer ✮ </h2>
                        <p class="mt-3 hero-desc">
                            Doing my breath out of Information System Major. 
                        </p>

                        <div class="mt-4">
                            <a href="#about" class="btn pill me-3 px-4">Get to know.</a>
                            <a href="assets/cv.pdf" target="_blank" rel="noopener noreferrer" class="btn pill px-4">Download CV</a>
                            <a href="https://github.com/syzota" target="_blank" rel="noopener noreferrer" class="btn pill px-4">View GitHub</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center position-relative mt-5 mt-lg-0">
                        <img src="assets/postcard.png" class="full-image">
                    </div>
                </div>
            </div>

            <img src="assets/skill.png" class="full-image hero-decor">

        </section>

        <!-- ABOUT -->
        <section id="about" class="py-5">
            <div class="container">

                <h2 class="hero-name text-center">Skillset ✮ </h2>
                    <p class="text-center hero-role">
                        It's not about these; it's about gaining and lock your self.
                    </p>
                <div class="row">

                    <!-- Skills -->
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title fw-bold hero-role text-center">Skills ✪</h5>

                                <div v-for="skill in skills" :key="skill.name">
                                    <p class="text-white">{{ skill.name }}</p>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger"
                                            :style="{ width: skill.level + '%' }">
                                            {{ skill.level }}%
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Pengalaman -->
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100 ">
                            <div class="card-body">
                                <h5 class="card-title fw-bold hero-role text-center">Experiences ✪</h5>
                                <div class="row align-items-center mt-3">
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

        </section>

        <!-- CERTIFICATES -->
        <section id="certificates" class="py-5 certificates-section">
            <div class="container">

                <h2 class="text-center fw-bold mb-4 hero-name">Certificates ࣪𖤐 </h2>

                <div class="row">

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="assets/mubes.jpg" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="fw-bold text-white">Ketua Panitia Musyawarah Besar INFORSA</h6>
                                <p class="small text-white">2026</p>
                                <a href="assets/mubes.jpg" target="_blank" class="pill">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="assets/stack.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="fw-bold text-white">Fullstack Web Developer</h6>
                                <p class="small text-white">2025</p>
                                <a href="assets/stack.png" target="_blank" class="pill">Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="assets/makrab.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="fw-bold text-white">Ketua Panitia Malam Keakraban TAROT</h6>
                                <p class="small text-white">2024</p>
                                <a href="assets/makrab.png" target="_blank" class="pill">Details</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- FOOTER -->
        <footer class="footer-section text-center py-4">
            <p class="hero-desc">© 2026 - To the Passengers by Putri. All rights reserved.</p>
        </footer>

    </div> <!-- tutup #app -->

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
                    ]
                }
            }
        }).mount('#app')
    </script>

</body>
</html>
