<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php
require_once __DIR__.'/Classes/User.php';
require_once __DIR__.'/Classes/UserPremium.php';
require_once __DIR__.'/Classes/Prodotti.php';
require_once __DIR__.'/Classes/CartaCredito.php';

$utente1 = new User('Pavel', 'Minuti', 'pminuti@gmail.com');
$utentePre1 = new UserPremium('Gianluca', 'Morelli', 20);

$prodotto1 = new Prodotti('Crocchette monoproteiche', 50, 'Cane');
$prodotto2 = new Prodotti('Graffiatoio', 25, 'Gatti');
$prodotti3 = new Prodotti('Cuccia in resina', 35, 'Cane');

$cartaCredito1 = new CartaCredito('1234567891012345', '11-2023', '13293');
$cartaCredito2 = new CartaCredito('9876543211234567', '01-2022', '53027');

$utente1->setCartaCredito($cartaCredito2);

$utentePre1->setCartaCredito($cartaCredito1);

var_dump($utente1);
var_dump($utentePre1);

?>