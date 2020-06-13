<?php

foreach ($employees as $employee) :

?>

<div class"employee" style="margin: 0 auto; width: 40%; padding: 10px; border: 1px solid #000;">
    <?php echo $employee['FirstName'] ?>
    <?php echo $employee['LastName'] ?> -
    <?php echo $employee['Title'] ?>
</div>

<?php endforeach; ?>