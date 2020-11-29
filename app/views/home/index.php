<?php
$this->view('home/cabecario');
?>

<!-- Navigation-->
<?php
$this->view('home/menu');
?>

<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="assets/img/perfil.jpeg" alt="" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Egeverton Marcelino</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Programador WEB - PHP - Delphi - C C# - Arduino Java Scrip - CSS </p>
    </div>
</header>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <?php
            $this->view('home/items');
            ?>
        </div>
    </div>
</section>

<!-- About Section-->s
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Sobre</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 mr-auto">
                <p class="lead">
                    My name is Egeverton Marcelino<br><br>
                    Four words to describe me are Enthusiastic, Dynamic, Organized and Strategic.<br><br>
                    Some of my favorite sports and games are Racing, Programming and Puzzle.<br><br>
                    Three things that make me happy are: Solve problems, Create solutions and Improve things.<br><br>
                    My favorite subjects are Programming, Robotics, Physics and Mathematics.<br><br>
                </p>
            </div>
            <div class="col-lg-6 ml-auto">
                <p class="lead">
                    Student and self-taught with experience in Windows (7/8/8.1/10), Linux
                    (slackware/ubuntu/kali/lite/slax/etc) and BSD (OpenBSD/FreeBSD) environments.<br><br>
                    Computer Maintenance (Computer Assembly/Disassembly/Formatting, Resolution Software and Hardware
                    Problems).<br><br>
                    Network Installation and Maintenance (Installation and Configuration of Wifi/Radio/Cabeda
                    Networks).<br><br>
                    DESKTOP/WEB PROGRAMMER in WINDOWS and LINUX environments with experience in PASCAL/DELPHI/OBJECT
                    SQL/SQLITE, HTML/CSS/JAVASCRIPT and PHP.<br><br>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php
                $this->view('home/form');
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">
                    Araguaína - TO
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/jolopesqueiroz"
                    target="_blank"><i class="fab fa-fw fa-github"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/jo-lopes-412187131"
                    target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">More About Me</h4>
                <p class="lead mb-0">
                    You can see my miscellaneous projects at
                    <a href="https://mega.nz/folder/q0ZDVC7b#1yP-wQMCJYdeIgwRroAqTA" target="_blank">mega folder</a>
                    <br>
                    We can talk about them at
                    <a href="https://mega.nz/chat/ykZzXawB#O8jwT4jflSJy47wOkkX0zQ" target="_blank">mega folder chat</a>
                    <br>
                    You can add me at
                    <a href="https://mega.nz/C!q9YGxAyK" target="_blank">mega contact</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © Jo Lopes Queiroz 2020</small></div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
            class="fa fa-chevron-up"></i></a>
</div>

<!-- Portfolio Modals-->
<?php
$this->view('home/modals');
?>

<?php
$this->view('home/rodape');
?>