<div>
    <ul class="nav nav-tabs">
    <li class="nav-item">
            <a class="nav-link<?= (isset($_GET['formSlug']) && $_GET['formSlug'] === 'devenir-membre-de-l-a-n-e-r-a-n-a-en-2025') ? ' active' : '' ?>" aria-current="item" href="?page=<?= $_GET['page'] ?>&item=orders&formType=Membership&formSlug=devenir-membre-de-l-a-n-e-r-a-n-a-en-2025">Adhérants</a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?= (isset($_GET['item']) && $_GET['item'] === 'orders' && !isset($_GET['formSlug'])) ? ' active' : '' ?>" href="?page=<?= $_GET['page'] ?>&item=orders">Billets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?= (isset($_GET['item']) && $_GET['item'] === 'payments') ? ' active' : '' ?>" href="?page=<?= $_GET['page'] ?>&item=payments">Paiements</a>
        </li>
        <li class="nav-item">
            <a class="nav-link<?= (isset($_GET['type']) && $_GET['type'] === 'payments') ? ' active' : '' ?>" href="?page=<?= $_GET['page'] ?>&type=Donation">Donations</a>
        </li>
        <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> -->
        <li class="nav-item">
            <a class="nav-link disabled">A venir</a>
        </li>
    </ul>
</div>