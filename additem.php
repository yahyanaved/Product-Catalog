<?php
// Include config file
require_once "config.php";
// Define variables and initialize with empty values
 
// Processing form data when form is submitted
// Check input errors before inserting in database
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["product_id"])){
    // Prepare an update statement
    try{
        $p_name = $_POST["product_name"];
        $p_desc = $_POST['product_desc'];
        $sql = "Insert into items (p_id,store_id,discount,stock) VALUES (?,?,?,?);";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iiii",$_POST["product_id"], $_POST["storeid"], $_POST["discount"], $_POST["stock"]);
            
            // Set parameters
            // Attempt to execute the prepared statement
            //adding a comment to commit
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: productadmin.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
    }
    catch(Error $e){
        echo $e;
    }
        
    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to add the product to listing.</p>
                    <?php 
                    $product_id = $_GET["productid"];
                    $sql = "SELECT *
                    from products p";
                    $values = mysqli_query($link,$sql);
                    $row1 = mysqli_fetch_array($values, MYSQLI_ASSOC)
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control"
                                value="<?php echo $row1['p_name']?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <input type="text" name="product_desc" class="form-control"
                                value="<?php echo $row1['p_desc']?>" readonly>
                            <span class="invalid-feedback">
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="text" name="stock" class="form-control" value="1">
                            <span class="invalid-feedback">
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Discount</label>
                            <input type="text" name="discount" class="form-control" value="0">
                            <span class="invalid-feedback">
                            </span>
                        </div>
                        <input type = "hidden" name = "product_id" value = "<?php echo $product_id ?>">
                        <input type = "hidden" name = "storeid" value = "<?php echo $_GET['storeid'] ?>">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>