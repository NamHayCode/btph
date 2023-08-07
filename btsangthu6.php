<?php 
session_start();
error_reporting(0);
$flaga = 0;
$flagb = 0;
$product = array(
        1 => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh_giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'status' => 1,
        ),
        2 => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh_giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'status' => 0,
        ),
        3 => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh_giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'status' => 1,
        ),
        4 => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh_giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'status' => 0,   
        ),
        5 => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh_giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'status' => 0,
        ),
        6 => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh_giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'status' => 1,
        ),
        7 => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh_giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'status' => 1,
        ),
        8 => array(
            'name' => 'Samsung Galaxy Z Flip4 5G 512GB',
            'price' => '19.990.000',
            'đánh_giá' => '31',
            'img' => 'https://th.bing.com/th/id/OIP.3nO7MGzGT0EO1-HHFYs_nQAAAA?w=211&h=210&c=7&r=0&o=5&dpr=1.3&pid=1.7',
            'status' => 0,   
        )
    );
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fake_product = array(
        'name' => $_POST["name"],
        'price' => $_POST["price"],
        'đánh_giá' => $_POST["đánh_giá"],
        'img' => $_POST["img"],
        'status' => $_POST["status"],
    );

    $flagb += 1;
    if ($flagb > $flaga) {
        $max_key = max(array_keys($product)) + 1;
        $product[$max_key] = $fake_product;
        $_SESSION['prduct'] = $product;
        $flaga = $flagb;
    }
}

if (!isset($_SESSION['prduct'])) {
    $_SESSION['prduct'] = $product;
}
?>

$_SESSION['prduct'] = $product;
?>
<div class="content">
    <h2>Sản phẩm nổi bật</h2>
    <div class="box">
        <?php 
            foreach ($product as $key => $item) {
                if ($item['status'] == 1) {
                    ?>
                    <div class="card">
                    <?php
                    echo "Status: " . $item['status'] . "<br>";
                    echo "ID: " . $key . "<br>";
                    echo "Name: " . $item['name'] . "<br>";
                    echo "Price: " . $item['price'] . "<br>";
                    echo "đánh_giá: " . $item['đánh_giá'] . "<br>";
                    echo "<img src='" . $item['img'] . "' alt='Product Image'><br>";
                    ?>
                    </div>
                    <?php 
                }
            }
        ?>
    </div>
    <h2>Sản phẩm mới</h2>
    <div class="box">
        <?php 
            foreach ($product as $key => $item) {
                if ($item['status'] == 0) {
                    ?>
                    <div class="card">
                    <?php
                    echo "Status: " . $item['status'] . "<br>";
                    echo "ID: " . $key . "<br>";
                    echo "Name: " . $item['name'] . "<br>";
                    echo "Price: " . $item['price'] . "<br>";
                    echo "đánh_giá: " . $item['đánh_giá'] . "<br>";
                    echo "<img src='" . $item['img'] . "' alt='Product Image'><br>";
                    ?>
                    </div>
                    <?php 
                }
            }
        ?>
    </div>
</div>
<div>
<form id="form1" name="form1" method="post" action="">
  <table width="338" height="205" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="130" height="35"> <strong> Status:</strong></td>
    <td width="208">      <input name="status" type="number" id="textfield9" value="<?php echo $_POST["status"];?>" /></td>
</tr>
<tr>
    <td width="130" height="35"> <strong> Name:</strong></td>
    <td width="208">      <input name="name" type="text" id="textfield9" value="<?php echo $_POST["name"];?>" /></td>
</tr>
<tr>
    <td width="130" height="35"> <strong> Price:</strong></td>
    <td width="208">      <input name="price" type="text" id="textfield9" value="<?php echo $_POST["price"];?>" /></td>
</tr>
<tr>
    <td width="130" height="35"> <strong> Đánh giá:</strong></td>
    <td width="208">      <input name="đánh_giá" type="text" id="textfield9" value="<?php echo $_POST["đánh_giá"];?>" /></td>
</tr>
<tr>
    <td width="130" height="35"> <strong> img src:</strong></td>
    <td width="208">      <input name="img" type="text" id="textfield9" value="<?php echo $_POST["img"];?>" /></td>
</tr>

    <td height="34" colspan="2" align="center">
      <input type="submit" name="button" id="button" value="submit" />
    </td>
    <tr>
    
  </table>
</form>
</div>
<style>
    p{
        margin: 5px;
        
    }
    .card{
        width: 360px;
        
    }
    .box{
        display: flex;
        text-align: center;
    }
    .content{
        text-align: center;
    }
    ul{
        list-style-type: none;
    }
</style>