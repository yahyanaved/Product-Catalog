<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 800px;
            margin: 0 auto;
            overflow-y: scroll;
        }

        #dashboard {
            padding-left: 80px;
            padding-top: 50px;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="text-inverse-secondary bg-secondary">
        <h1 id='dashboard'>Admin Dashboard</h1>
        <div style="padding-left: 20%">
            <a href="productadmin.php" class="btn btn-success "><i class="fa fa-plus"></i> View Products</a>
            <?php
            $storeid = 1;
            if (isset($_GET['storeid'])) {
                $storeid = $_GET['storeid'];
            } ?>
            <a href="viewitems.php?storeid= <?php echo $storeid ?>" class="btn btn-success"><i class="fa fa-plus"></i> View
                Listed Items</a>
        </div>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        </div>
    </div>
    <div class="container-fluid">
    </div>
</body>

</html>