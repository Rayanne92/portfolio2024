<?php

$title = "Rayanne MTIMET – Développeur Web, Freelance à Paris";
$description = "Passionné par le Web depuis 16 ans, je propose des services de Développement Web en Freelance. Basé à Paris, je crée et optimise des sites internet pour des clients en France et à l'étranger, offrant des solutions personnalisées.";
$keywords = "Rayanne MTIMET, Développeur Web, Freelance, Paris, Île-de-France";
$occupation = "Développeur Web";

?>

<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="keywords" content="<?php echo $keywords; ?>">

        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:description" content="<?php echo $description; ?>">
        <meta property="og:url" content="https://www.rayanne.fr">
        <meta property="og:type" content="website">

        <?php include('public/build/link.php'); ?>

        <title><?php echo $title; ?></title>

    </head>

    <body>
        
        <!-- Header -->
        <?php include('public/build/header.php'); ?>

        <!-- Accueil -->
        <article id="home">
            <section>
                <div>
                    <h1><?php echo $occupation; ?></h1>
                    <p><?php echo $description; ?></p>
                    <a href="https://wa.me/33615684272?text=Bonjour,%20après%20avoir%20visité%20votre%20site%20web,%20j'ai%20quelques%20questions%20à%20vous%20poser.%20Seriez-vous%20disponible%20pour%20en%20discuter%20?" target="_blank">
                        <button>
                            <i class='bx bxs-envelope'></i>
                            <span>M'envoyer un message</span>
                        </button>
                    </a>
                </div>
                <div>
                    <img src="public/images/home-icon.png" alt="Photo de Rayanne MTIMET">
                </div>
            </section>
            <aside>
                <div>
                    <i class='bx bx-cube'></i>
                    <h2>17</h2>
                    <p>Projets achevés</p>
                </div>
                <div>
                    <i class='bx bx-coffee'></i>
                    <h2>2</h2>
                    <p>Années d'expériences</p>
                </div>
            </aside>
        </article>

        <!-- À propos de moi -->
        <article id="about">
            <section>
                <div>
                    <h3>À propos de moi</h3>
                    <p>À 16 ans, je commençais déjà à créer des sites internet, principalement en autodidacte. Ensuite, j’ai continué à me spécialiser dans le développement web grâce à mes études, notamment lorsque j’ai effectué mon <strong>BTS Services Informatiques aux Organisations</strong> de 2022 à 2024.</p>
                    <p>Au cours de mes formations et expériences professionnelles, j'ai acquis des compétences dans plusieurs langages de programmation. En front-end, je maîtrise <strong>HTML</strong>, <strong>CSS</strong>, <strong>Sass</strong>, et <strong>JavaScript</strong>, y compris des frameworks et bibliothèques comme <strong>React</strong> et <strong>Vue.js</strong>. En back-end, j'ai une solide expérience avec <strong>Java</strong>, <strong>PHP</strong>, et <strong>Python</strong>. De plus, je suis familiarisé avec les bases de données relationnelles comme <strong>MySQL</strong> et <strong>PostgreSQL</strong>, ainsi que les bases de données <strong>NoSQL</strong> comme <strong>MongoDB</strong>. Cette polyvalence me permet de concevoir et de développer des applications web complètes et performantes.</p>
                    <p>Je dispose donc <strong>d'une expertise en développement web</strong>, englobant à la fois le front-end et le back-end. Par ailleurs, je suis compétent dans la gestion de serveurs sous les systèmes d'exploitation Windows et Linux, notamment <strong>Ubuntu</strong>, <strong>Debian</strong> et <strong>CentOS</strong>. Mon expérience comprend également une maîtrise de divers systèmes de gestion de contenu (CMS) tels que <strong>Shopify</strong>, <strong>WordPress</strong>, <strong>PrestaShop</strong>, entre autres.</p>
                    <p>Depuis plus de 2 ans je suis <strong><?php echo $occupation; ?> en Freelance</strong>. Basé à Paris, je propose mes services dans toute la France, ainsi qu’à l’étranger en travail à distance pour <strong>accompagner les entreprises dans la création de leur site internet</strong>, la mise à jour ou l’optimisation de ceux-ci.</p>
                </div>
                <div>
                    <img src="public/images/about-icon.png" alt="Photo de Rayanne MTIMET">
                </div>
            </section>
        </article>

        <!-- D'où je tiens mes compétences ? -->
        <article id="skills">
            <section>
                <h3>D'où je tiens mes compétences ?</h3>
                <div class="skills-list">
                    <div>
                        <img src="public/images/studies-icon.png" alt="">
                        <h4>01. Études</h4>
                        <p>Titulaire d’un BTS Services Informatiques aux Organisations, j’ai pu acquérir par mes études des compétences assez diverses et pointues dans le domaine du web.</p>
                    </div>
                    <div>
                        <img src="public/images/experiences-icon.png" alt="">
                        <h4>02. Éxpériences</h4>
                        <p>Avec 8 mois de stage et plus de 2 ans en Freelance, j’ai acquis une expérience importante sur divers projets. Cela me permet de pouvoir vous accompagner sur un large panel de compétences.</p>
                    </div>
                    <div>
                        <img src="public/images/passion-icon.png" alt="">
                        <h4>03. Passion</h4>
                        <p>“Et la seule façon de faire du bon travail, c’est d’aimer ce que l’on fait”. La passion est le meilleur carburant pour la motivation. Si je fais tout cela aujourd’hui c’est avant tout par passion pour la création et pour le web.</p>
                    </div>
                </div>
            </section>
        </article>

        <!-- Pourquoi auriez-vous besoin de moi ? -->
        <article id="services">
            <section>
                <h3>Pourquoi auriez-vous besoin de moi ?</h3>
                <p>Que ce soit pour la création ou l'optimisation de votre site internet, ou pour des conseils en référencement, je suis à votre disposition pour vous aider à augmenter vos ventes ou à lancer efficacement votre activité en ligne.</p>
                <div class="services-list">
                    <div>
                        <img src="public/images/design-icon.png" alt="">
                        <h4>04. Design</h4>
                        <p>L'importance du rendu graphique ne doit pas être sous-estimée, car il reflète les valeurs de votre entreprise. Investir dans un design distinctif et personnalisé vous permettra de vous démarquer de la concurrence.</p>
                    </div>
                    <div>
                        <img src="public/images/development-icon.png" alt="">
                        <h4>05. Développement</h4>
                        <p>Que ce soit pour une mise à jour ou une création complète, je vous propose un accompagnement personnalisé dans votre projet de site internet. Cela vous permettra de développer votre activité grâce à une présence en ligne efficace.</p>
                    </div>
                    <div>
                        <img src="public/images/seo-icon.png" alt="">
                        <h4>06. Référencement</h4>
                        <p>Votre site est en ligne, mais le nombre de visiteurs n'est pas à la hauteur de vos attentes ? Augmentez votre visibilité grâce à une prestation SEO. Analysons et optimisons ensemble votre contenu pour améliorer votre positionnement.</p>
                    </div>
                </div>
            </section>
        </article>

        <!-- Footer -->
        <?php include('public/build/footer.php'); ?>

    </body>

</html>