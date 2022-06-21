<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Shopping Cart1</title>
</head>
<body>
    <div id="shopping-cart">
        <div class="txt-heading">Shopping Cart</div>
        <a href="index.php?action=empty" id="btnEmpty">empty cart</a>
        <table class="table table-dark table-striped-columns" cellpadding="10" cellspacing="1" border="2">
            <tbody>
                <tr>
                    <th style="text-align: center;" width="5%">Name</th></th>
                    <th style="text-align: center;" width="15%">Code</th></th>
                    <th style="text-align: center;" width="5%">Quantity</th></th>
                    <th style="text-align: center;" width="10%">Price</th></th>
                    <th style="text-align: center;" width="5%">Remove</th></th>
                </tr>
                <tr>
                    <td><img src="shopProject/camera eos 90d.jpg" width="50px" height="50px" class="cart-item-image" alt="camera"></td>
                    <td>camera</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">$1000</td>
                    <td style="text-align: center;"><a href="#" class="btnRemove-action"><img src="shopProject/icon-delete.png" width="20px" height="20px" alt="Remove"</a></td>
                </tr>
                <tr>
                    <td><img src="shopProject/microsoft surface laptop 4.jpg" width="50px" height="50px" class="cart-item-image" alt="camera"></td>
                    <td>microsoft surface laptop 4</td>
                    <td style="text-align: center;">1</td>
                    <td style="text-align: center;">$1000</td>
                    <td style="text-align: center;"><a href="#" class="btnRemove-action"><img src="shopProject/icon-delete.png" width="20px" height="20px" alt="Remove"</a></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"></td>
                    <td align="center">2</td>
                    <td align="center" colspan="2">$2000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="product-grid">
        <div class="txt-heading">Products</div>
        <div class="product-item">
            <form action="index.php?action=add&code">
                <div class="product-image">
                    <img src="shopProject/camera eos 90d.jpg" width="50px" height="50px" alt="image">
                </div>
                <div class="product-title-footer">
                    <div class="product-title">camera</div>
                    <div class="product-price">$1000</div>
                    <div class="cart-action">
                        <input type="text" class="product-quantity" value="1" size="2">
                        <input type="submit" value="Add to cart" class="btnAddAction">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>