<?php
require_once "vendor/autoload.php";

use Faker\Fake;
$fake=new Fake();
?>
<?php for ($i=0; $i < 10; $i++): ?>
    <h1><?php echo $fake->Name  ;?></h1>
    <h2><?php echo $fake->Phone." : ".$fake->Address ;?></h2>

<?php endfor; ?>