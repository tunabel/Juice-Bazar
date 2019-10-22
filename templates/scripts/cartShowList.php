<?php
if (isset($_SESSION['cart'])) {
    $listCart = $_SESSION['cart'];
    $totalPrice = 0;
    foreach ($listCart as $key => $value) {
        $sql = "SELECT * FROM      Product
                            JOIN   Productdetail ON Product.ProductId = Productdetail.ProductId
                            JOIN   Capacity      ON ProductDetail.CapacityId = Capacity.CapacityId
                WHERE ProductDetail.ProductDetailId = $key";
        $rs = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($rs);
        $subPrice = $value['price'] * $value['quantity'];
        ?>

        <div class="row my-3 border-bottom list-cart" id="<?= $key ?>">
            <div class="col-4 col-md-2">
                <a href="#!"><img src="<?php echo $row['Image'] ?>" alt="<?php echo $row['Name'] ?>" class="mr-2 img-fluid"></a>
            </div>
            <div class="col-8 col-md-10">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="h-100 d-flex flex-column">
                            <div class="cart-juice-name"><?php echo $row['Name'] ?></div>
                            <span class="cart-juice-volume"><?php echo $row['Capacity'] ?> ml</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 mt-3 mt-md-0 d-flex justify-content-between">
                        <span class="d-sm-block d-md-none">Đơn giá:&nbsp;</span>
                        <span class="h5 mx-md-auto mx-0"><?php echo number_format($row['Price'], 0, '.', '.') ?>₫</span>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="juice-qty-pill mx-auto" style="height: 40px; width: 120px">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="js-btn-minus js-btn-quantity" type="button" data-productDetailId="<?= $key ?>">
                                        <i class="fas fa-minus-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control text-center juice-qty-input px-1 js-change-quantity" id="<?= 'quantity' . $key ?>" data-productDetailId="<?= $key ?>" value="<?php echo $value['quantity'] ?>" name="quantity" aria-label="Quantity" style="width: 60px; background-color: transparent">
                                <div class="input-group-append">
                                    <button class="js-btn-plus js-btn-quantity" type="button" data-productDetailId="<?= $key ?>">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="row">
                            <div class="col-12 mt-2 mt-lg-0 d-flex justify-content-between">
                                <span class="d-sm-block d-lg-none">Tổng:&nbsp;</span>
                                <span class="h5 mx-lg-auto mx-0 font-weight-bold"><span id="<?= 'subPrice' . $key ?>"><?php echo number_format($subPrice, 0, '.', '.') ?></span><span>₫</span></span>
                            </div>
                            <div class="col-12 text-right">
                                <button type="button" class="btn btn-link cart-delete-btn p-0 mt-2 js-cart-delete" data-productDetailId="<?= $key ?>"><i class="far fa-trash-alt mb-2"></i></button>
                                <input type="hidden" class="form-control" name="priceDelete" value="<?= $subPrice ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
        $totalPrice += $subPrice;
    }
    $_SESSION['totalPrice'] = $totalPrice;
}
?>