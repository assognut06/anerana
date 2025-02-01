<?php ob_start() ?><!--Contenu-->
<!--Contenu-->
<div class="pt-2">
<div class="row py-2 mx-5">
  <h1 class="text-center mb-5 text-primary"><i class="bi bi-person-lines-fill me-3"></i>Une question contactez-nous !</h1>
  <?php
  if (isset($_POST['envoyer']) and $_POST['envoyer'] = 'Envoyer') {
    /*echo "<pre>";
                print_r($_POST);
                echo "</pre>";*/
    $message = "Prénon : " . $_POST['first_name'] . "Nom : " . $_POST['last_name'] . "\nEmail : " . $_POST['email'] . " - Telephone : " . $_POST['tel'] . "\nMessage : " . $_POST['message'];
    if (mail('pierre.marseille@sfr.fr', 'Message du site ANERANA sur Gnut06.org', $message)) {
        echo '<p class="alert">Votre message a bien été envoyé</p>';
    } else {
        echo '<p class="alert alert-danger">Erreur lors de l\'envoi du message. Veuillez réessayer plus tard.</p>';
    }
  }

  ?>
  <div class="col-12 col-lg-7 order-lg-2">
    <p><span class="text-danger">*</span> : champ obligatoire</p>
    <form class="row g-4 mb-5" method="POST" action="?page=contact">
      <div class="col-lg-6">
        <input type="text" class="form-control" name="first_name" placeholder="Prénom*" aria-label="First name" required>
      </div>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="last_name" placeholder="Nom*" aria-label="Last name" required>
      </div>
      <div class="col-lg-6">
        <input type="email" class="form-control" placeholder="Email*" name="email" aria-label="email" required>
      </div>
      <div class="col-lg-6">
        <input type="tel" class="form-control" placeholder="Numéro de téléphone" name="tel" aria-label="telephone">
      </div>
      <div class="col-12">
        <textarea name="message" rows="5" class="form-control" placeholder="Entrer ici votre message*" aria-label="message" required></textarea>
      </div>
      <div class="col-12 text-center">
        <button type="sumit" name="envoyer" value="Envoyer" class="btn btn-primary">Envoyer votre message</button>
      </div>
    </form>
  </div>
  <div class="col-12 col-lg-5 text-center order-lg-1"><img class="img-fluid shadow-lg rounded-3" src="images/474714242_2385211035169700_9055685857759645210_n.jpg" alt="Alger. Immeubles rue Charles Vallin." width="50%"></div>
</div>
</div>
<?php $contenu = ob_get_clean()  ?>


<?php require_once 'views/gabarit.php'; ?>