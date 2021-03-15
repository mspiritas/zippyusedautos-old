<?php include('view/header.php'); ?>

<table>
    <tr>
        <td class="sort-menus">
            <form class="sort-form" action="." method="get" name="sort">
                <input type="hidden" name="action" value="sort_vehicles">
                <select name="vehicle_id" required>
                    <option value="0">--Sort All Vehicles--</option>
                    <option value="Price">Price</option>
                    <option value="Year">Year</option>
                </select>
                <button>Go</button>
            </form>
        </td>
    </tr>
</table>
<table class="displays">
    <tr>
        <td class="sort-menus">
            <form action="." method="get">
                <input type="hidden" name="action" value="sort_by_make">
                <select name="vehicle_id" required>
                    <option value="0">--Display by Make--</option>
                    <?php foreach($vehicles as $vehicle) : ?>
                    <?php if ($vehicle_id == $vehicle['Make']) { ?>
                        <option value="<?= $vehicle['Make'] ?>" selected>
                    <?php } else { ?>
                        <option value="<?= $vehicle['ID'] ?>">
                    <?php } ?>
                            <?= $vehicle['Make'] ?>
                        </option>
                        <?php endforeach; ?>
                </select>
                <button>Go</button> 
            </form>
        </td>
        <td class="sort-menus">
            <form action="." method="get">
                <input type="hidden" name="action" value="sort_by_make">
                <select name="vehicle_id" required>
                    <option value="0">--Display by Type--</option>
                    <?php foreach($vehicles as $vehicle) : ?>
                    <?php if ($vehicle_id == $vehicle['Type']) { ?>
                        <option value="<?= $vehicle['Type'] ?>" selected>
                    <?php } else { ?>
                        <option value="<?= $vehicle['ID'] ?>">
                    <?php } ?>
                            <?= $vehicle['Type'] ?>
                        </option>
                        <?php endforeach; ?>
                </select>
                <button>Go</button> 
            </form>
        </td>
        <td class="sort-menus">
            <form action="." method="get">
                <input type="hidden" name="action" value="sort_by_make">
                <select name="vehicle_id" required>
                    <option value="0">--Display by Class--</option>
                    <?php foreach($vehicles as $vehicle) : ?>
                    <?php if ($vehicle_id == $vehicle['Class']) { ?>
                        <option value="<?= $vehicle['Class'] ?>" selected>
                    <?php } else { ?>
                        <option value="<?= $vehicle['ID'] ?>">
                    <?php } ?>
                            <?= $vehicle['Class'] ?>
                        </option>
                        <?php endforeach; ?>
                </select>
                <button>Go</button> 
            </form>
        </td>
    </tr>
</table>
<section> 
    <table class="display-vehicles">
        <tr>
            <th class="table-header">Price</th>
            <th class="table-header">Make</th>
            <th class="table-header">Model</th>
            <th class="table-header">Year</th>
            <th class="table-header">Type</th>
            <th class="table-header">Class</th>
        </tr>
        <?php foreach ($vehicles as $vehicle) : ?>
        <tr>
            <td><p><?php echo htmlspecialchars($price_f); ?><?= $vehicle['price'] ?></p></td>
            <td><p><?= $vehicle['Make'] ?></p></td>
            <td><p><?= $vehicle['model'] ?></p></td>
            <td><p><?= $vehicle['year'] ?></p></td>
            <td><p><?= $vehicle['Type'] ?></p></td>
            <td><p><?= $vehicle['Class'] ?></p></td>
        </tr>
        <?php endforeach ; ?>  
    </table>
</section>
<?php include('view/footer.php') ?>