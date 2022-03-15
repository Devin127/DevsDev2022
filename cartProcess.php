<?php      
   // SHOPPING CART LOGIC
if(isset($_POST['add_to_cart']))
{
    $id = $_GET['id'];
    $quantity = $_POST['quantity'];
    $query = "SELECT * FROM product WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $item_array = array(
        'id' => $_GET['id'],
        'productName' => $row['productName'],
        'price' => $row['price'],
        'quantity' => $quantity
    );
    $_SESSION['shopping_cart'][] = $item_array;
} 
if(isset($_GET['action']))
{
    if($_GET['action'] == 'delete')
    {
        foreach($_SESSION['shopping_cart'] as $keys => $values)
        {
            if($values['id'] == $_GET['id'])
            {
                unset($_SESSION['shopping_cart'][$keys]);
                // echo '<script>alert("Item Removed")</script>';
                // echo '<script>window.location="index.php"</script>';
            }
        }
    }
}


    ?>