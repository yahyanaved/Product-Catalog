<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <div style="padding-left: 10%;">
            <a href="viewitems.php" class="btn btn-success"><i class=""></i> View Listed Items</a>
        </div>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Categories</h2>
                        <a href="productcreate.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add
                            Product</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    $sql = "SELECT *
                    from products p 
                    left join categories c on c.category_id = p.c_id";
                    $result = mysqli_query($link, $sql);
                    // Attempt select query execution
                    echo '<table class="table table-bordered table-striped">
                        ';
                    echo "
                        <thead>
                            ";
                    echo "
                            <tr>
                                ";
                    echo "
                                <th>Product Name</th>";
                    echo "
                                <th>Product Description</th>";
                    echo "
                                <th>Category Name</th>";
                    echo "
                                <th>Price</th>";
                    echo "
                            </tr>";
                    echo "
                        </thead>";
                    echo "
                        <tbody>
                            ";
                    while ($row = mysqli_fetch_array($result)) {
                        echo "
                            <tr>
                                ";
                        echo "
                                <td>" . $row['p_id'] . "</td>";
                        echo "
                                <td>" . $row['p_desc'] . "</td>";
                        echo "
                                <td>" . $row['c_name'] . "</td>";
                        echo "
                                <td>" . $row['price'] . "</td>";
                        echo '
                                <td style="width: 30%">
                                    ';
                        echo '<a href="productupdate.php?product_id=' . $row['p_id'] . '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                        echo '<a href="productdelete.php?productid=' . $row['p_id'] . '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                        echo '<a href="additem.php?storeid=' . '1' . '&productid=' . $row['p_id'] . '" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add To Listing</a>';
                        echo "
                                </td>";
                        echo "
                            </tr>";
                    }
                    echo "
                        </tbody>";
                    echo "
                    </table>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

    </div>
</body>

</html>