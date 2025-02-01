<?php ob_start() ?>
<!--Contenu-->
<div class="container-fluid">
    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="ratio ratio-16x9 my-5 mx-5 px-5">
                <iframe src="https://www.youtube.com/embed/Ic81Hrta_gg?si=48aYON94VIX_8wyA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 pb-5 fs-5">
            <h1 class="mb-4 text-center  text-success">À propos de l'association ANERANA</h1>
            <p> L'association <strong>ANERANA</strong> à Nice a pour objectifs principaux de réaliser des <strong>animations et promotions culturelles</strong> à titre éducatif, ainsi que d'intervenir auprès du <strong>public défavorisé</strong> et/ou en situation de dépendance. </p>
            <p>Notre association a pour vocation de proposer des activités éducatives et culturelles enrichissantes, accessibles à tous, et en particulier aux personnes en situation de dépendance ou défavorisées. Nous nous engageons à offrir des moments de convivialité et de solidarité, pour découvrir, apprendre et partager.</p>
            <p>Notre association est régie par la loi 1901 et domiciliée à Nice.</p>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>
<?php $contenu = ob_get_clean()  ?>
<?php require_once 'views/gabarit.php'; ?>