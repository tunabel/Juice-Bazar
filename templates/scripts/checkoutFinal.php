<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_REQUEST['finalBtn'])) {
        $cart = $_SESSION['cart'];
        $memberId = isset($_SESSION['memberId']) ? $_SESSION['memberId'] : 0;
        $promoId = isset($_SESSION['promoid']) ? $_SESSION['promoid'] : 'NULL';
        $note = isset($_SESSION['memberId']) ? $_REQUEST['c_order_notes'] : 'Tên: ' . $_REQUEST['c_name'] . '- Địa chỉ: ' . $_REQUEST['c_address'] . '- SĐT: ' . $_REQUEST['c_phone'] . '- Note: ' . $_REQUEST['c_order_notes'];

        $sql = "INSERT INTO Orders(MemberId,PromoId,Note) VALUES ($memberId,$promoId,'" . $note . "')";
        if (mysqli_query($con, $sql)) {
            $order_id = mysqli_insert_id($con);
            $sqlDetail = "";
            foreach ($cart as $key => $value) {
                $product_detail_id = (int) $key;
                $sale_price = (int) $value['price'];
                $quantity = (int) $value['quantity'];
                $sqlDetail .= "INSERT INTO OrderDetail(OrderId,ProductDetailId,SalePrice,Quantity) VALUES ($order_id,$product_detail_id,$sale_price,$quantity);";
            }

            if (mysqli_multi_query($con, $sqlDetail)) {
                unset($_SESSION['cart']);
                unset($_SESSION['promovalue']);
                unset($_SESSION['promoname']);
                unset($_SESSION['promoid']);
                unset($_SESSION['totalPrice']);
                echo "<script>location='?section=checkoutfinal'</script>";
            } else {
                mysqli_query($con, "DELETE FROM Ordes WHERE OrderId = $order_id");
                echo "<script>alert('Xác nhận đơn hàng thất bại!')</script>";
            }
        } else echo "<script>alert('Xác nhận đơn hàng thất bại!')</script>";
    }
}
