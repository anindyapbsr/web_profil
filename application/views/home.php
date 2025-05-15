<?php $this->load->view('template/header'); ?>

<!-- Home -->
<article id="top" class="wrapper style1">
    <div class="container">
        <div class="row">
            <div class="col-4 col-5-large col-12-medium">
                <span class="image fit"><img src="<?= base_url('assets/images/pic00.jpg'); ?>" alt="" /></span>
            </div>
            <div class="col-8 col-7-large col-12-medium">
                <header>
                    <h1>Halo. Saya <strong>AnindyaP</strong>.</h1>
                </header>
                <p>Ini adalah <strong>Profil</strong> singkat untuk memenuhi tugas uts praktek pemrograman web
                    menggunakan <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net">HTML5 UP</a>.
                </p>
                <a href="#work" class="button large scrolly">Tentang Saya</a>
            </div>
        </div>
    </div>
</article>

<!-- Work -->
<article id="work" class="wrapper style2">
    <div class="container">
        <header>
            <h2>Sedikit Tentang Saya</h2>
            <p>Saya senang mencoba hal baru dan cepat bosan dengan kegiatan monoton</p>
        </header>
        <div class="row aln-center">
            <?php
				$works = [
					['icon' => 'fa-', 'title' => 'Menikmati Alam'],
					['icon' => 'fa-', 'title' => 'Mencoba Makanan Baru'],
					['icon' => 'fa-', 'title' => 'Menonton film dan Drama'],
				];
				foreach ($works as $work):
			?>
            <div class="col-4 col-6-medium col-12-small">
                <section class="box style1">
                    <span class="icon solid featured <?= $work['icon']; ?>"></span>
                    <h3><?= $work['title']; ?></h3>
                </section>
            </div>
            <?php endforeach; ?>
        </div>
        <footer>
            <p> Apakah anda menyukainya?</p>
            <a href="#portfolio" class="button large scrolly">Lihat Portofolio Saya</a>
        </footer>
    </div>
</article>

<!-- Portfolio -->
<article id="portfolio" class="wrapper style3">
    <div class="container">
        <header>
            <h2>Disini Portofolio Saya</h2>
            <p>Saya akan menampilkan galeri saya saja hehehe.</p>
        </header>
        <div class="row">
            <?php
                for ($i = 0; $i <= 6; $i++): // Mengubah dari 1 menjadi 0 agar sesuai dengan nama file pic00.jpg
                    // Menggunakan sprintf untuk format nama file dengan angka 0 di depan jika kurang dari 10
                    $image_name = sprintf('pic%02d.jpg', $i);
            ?>
            <div class="col-4 col-6-medium col-12-small">
                <article class="box style2">
                    <a href="#" class="image featured"><img src="<?= base_url('assets/images/' . $image_name); ?>"
                            alt="Gambar Portofolio <?= $i; ?>" /></a>
                </article>
            </div>
            <?php endfor; ?>
        </div>
        <footer>

            <a href="#contact" class="button large scrolly">Hubungi Saya</a>
        </footer>
    </div>
</article>

<!-- Contact -->
<article id="contact" class="wrapper style4">
    <div class="container medium">
        <header>
            <h2>Berikan Kesan Baik Untuk Saya</h2>
        </header>
        <div class="row">
            <div class="col-12">
                <form method="post" action="#">
                    <div class="row">
                        <div class="col-6 col-12-small">
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                        <div class="col-6 col-12-small">
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" id="subject" placeholder="Subject" />
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" value="Send Message" /></li>
                                <li><input type="reset" value="Clear Form" class="alt" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <hr />
                <h3>Find me on ...</h3>
                <ul class="social">
                    <?php
						$socials = ['twitter','facebook-f','dribbble','linkedin-in','tumblr','google-plus','github'];
						foreach ($socials as $sosmed):
					?>
                    <li><a href="#" class="icon brands fa-<?= $sosmed; ?>"><span
                                class="label"><?= ucfirst($sosmed); ?></span></a></li>
                    <?php endforeach; ?>
                </ul>
                <hr />
            </div>
        </div>
        <footer>
            <ul id="copyright">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>
    </div>
</article>

<?php $this->load->view('template/footer'); ?>