<?php
$title = 'Consommation journalière par catégorie client';
ob_start()
?>

<h2>Consommation journalière par catégorie client par date</h2>

<table>
    <tr>
        <th>jour</th>
        <th>catégorie client</th>
        <th>Puissance moyenne journalière en kw</th>
    </tr>

    <?php
        while ($data = $takedata->fetch()) {
            ?>
            <tr>
                <td><?= $data['Jour'] ?></td>
                <td><?= $data['Catégorie client'] ?></td>
                <td><?=$data['Puissance moyenne journalière (W)']/1000?></td>
            </tr>
            <?php
        }
    ?>
    </table>

<?php

$content = ob_get_clean();
require 'view/baseView.php';

?>