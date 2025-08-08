<?php ob_start() ?>
<!--Contenu-->

  <div class="container py-5">
    <div class="text-center">
      <h2 class="mb-4">MEMBRES ÉLUS DU BUREAU :</h2>
      <ul class="list-unstyled fs-5">
        <li><strong>Président :</strong> Pierre Marseille</li>
        <li><strong>Vice-président :</strong> Michaël Benture</li>
        <li><strong>Secrétaire :</strong> Violaine Gonzalez</li>
        <li><strong>Secrétaire Adjointe :</strong> Yolande Gonzalez</li>
        <li><strong>Secrétaire Adjoint :</strong> Stéphane Bargiarelli</li>
        <li><strong>Trésorière :</strong> Isabelle Garcia</li>
        <li><strong>Trésorier Adjoint :</strong> Éric Acchiardi</li>
      </ul>
    </div>
  </div>
<?php $contenu = ob_get_clean()  ?>
<?php require_once 'views/gabarit.php'; ?>