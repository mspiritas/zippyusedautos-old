<?php include('header.php'); ?>

<table>
    <tr>
        <td class="sort-menus">
            <form class="sort-form" action="index.php" method="get" value="year">
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
            <td><p><?= $vehicle['price'] ?></p></td>
            <td><p><?= $vehicle['Make'] ?></p></td>
            <td><p><?= $vehicle['model'] ?></p></td>
            <td><p><?= $vehicle['year'] ?></p></td>
            <td><p><?= $vehicle['Type'] ?></p></td>
            <td><p><?= $vehicle['Class'] ?></p></td>
        </tr>
        <?php endforeach ; ?>  
    </table>
</section>

<?php include('footer.php') ?>