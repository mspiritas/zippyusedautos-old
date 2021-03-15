<?php
    require('model/database.php');
    require('model/class_db.php');
    require('model/make_db.php');
    require('model/type_db.php');
    require('model/vehicle_db.php');

    $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
    $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
    $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
    $make = filter_input(INPUT_POST, 'Make', FILTER_SANITIZE_STRING);
    $type = filter_input(INPUT_POST, 'Type', FILTER_SANITIZE_STRING);
    $class = filter_input(INPUT_POST, 'Class', FILTER_SANITIZE_STRING);

    $price_f = "$".($price);

    $action = filter_input(INPUT_POST, 'action');
        if ($action) {
            $action = filter_input(INPUT_GET, 'action');
            if (!$action) {
                $action = 'list_vehicles';
            }
        }
    
    
        switch($action) {
            case "list_vehicles":
                $vehicles = get_vehicles();
                include('view/vehicle_list.php');
                break;

            case "add_vehicle":
                add_vehicle($vehicle_id);
                header("Location: .?vehicle_id=$vehicle_id");
                break;

            case "add_make":
                add_make($vehicle_id);
                header("Location: .?action=list_vehicles");
                break;

            case "add_type":
                add_type($vehicle_id);
                header("Location: .?action=list_vehicles");
                break;

            case "add_class":
                add_class($vehicle_id);
                header("Location: .?action=list_vehicles");
                break;

            case "delete_vehicle":
                if ($vehicle_id) {
                    delete_vehicle($vehicle_id);
                    header("Location: .?vehicle_id=$vehicle_id");
                } else {
                    $error = "Missing vehicle ID.";
                    include('view/error.php');
                }
                break;

        default:
            $vehicles = get_vehicles_by_price();
            include('view/vehicle_list.php');
    }

