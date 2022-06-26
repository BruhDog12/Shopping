<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shopping</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&family=Thasadith:ital,wght@1,400;1,700&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/983df0f4db.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nuosu+SIL&display=swap" rel="stylesheet">
</head>

<body>
    <br>

    <div class="containerNav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <b><a class="navbar-brand" href="shop.php"><i class="fa-solid fa-bag-shopping"></i>&nbsp;Shopping</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </b>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <div class="nav-cart">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">
                                    <div class="cart1">
                                        ตะกร้า<i class="fa-solid fa-cart-shopping" &nbsp;></i>
                                    </div>
                                    <div class="cart-count">
                                        5
                                    </div>
                                </a>
                            </li>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="login1">
                                    ล็อกอิน<i class="fa-regular fa-address-card">&nbsp;</i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <div class="comments1">
                                    ติดต่อ<i class="fa-solid fa-comments"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="container">
        <div class="sidebar">
            <input type="text" class="sidebar-search" placeholder="Search something...">

            <a href="#" class="sidebar-items">
                เสื้อผ้า
            </a>

            <a href="#" class="sidebar-items">
                อุปกรณ์การเรียน
            </a>
        </div>
        <div class="product">
            <div class="product-items">
                <img class="product-img" src="shopProject/microsoft surface laptop 4.jpg" alt="microsoft surface laptop">
                <div class="group-text">
                    <p>ชื่อสินค้า : x </p>
                    <p>ราคา : x บาท</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" style="">
        <div class="modal_bg"></div>
        <div class="modal_page">
            <div class="btn_close">
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <br>
            <div class="modal_desc_content">
                <img class="modal_img" src="shopProject/microsoft surface laptop 4.jpg" alt="">
                <div class="modal_desc_detail">
                    <p style="font-family: 'Nuosu SIL', serif;">Name of product : x</p>
                    <p style="font-family:courier;">Price : x</p>
                    <br>
                    <div class="btn-control">
                        <button class="btn_buy">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="modal_bg"></div>
        <div class="modal_page">
            <h2>My cart</h2>
            <br>
            <div class="cart_list_items">
                <div class="cart_list_left">
                    <img src="" alt="">
                    <div class="cart_list_detail">
                        <p>product name</p>
                        <p>Price</p>
                    </div>
                </div>
                <div class="cart_list_right">

                </div>
            </div>
        </div>
    </div>
</body>

</html>