<?php
require('WriteHTML.php');

$pdf = new PDF_HTML();
$pdf->AddPage();
$pdf->Image('logo.png',18,20,33);
// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->SetFont('DejaVu','',14);
$pdf->WriteHTML('<para><h1>WEBSITE THƯƠNG MẠI ĐIỆN TỬ - MUA HÀNG TRỰC TUYỂN</h1><br>Website: <u>www.sieuthithunuoi.com</u></para><br><br>');
$pdf->SetFont('DejaVu','',7);
$pdf->WriteHTML('<p>Mã đơn hàng/ Order no: '.$_POST['oid'].'</p><br><p>Ngày đặt hàng/ Order date: '.$_POST['create_time'].'</p><br><p>Phương thức thanh toán/ Payment method : Thanh toán tiền mặt khi nhận hàng</p><br><p>Phương thức vận chuyển/ Shipping method: Miễn phí vận chuyển ( 2 - 3 ngày làm việc trừ T7 và CN )</p><br><br><hr>');

    $pdf->SetFont('DejaVu','',7);		
for ($i = 1; $i <= $_POST['stt']; $i++) {
	$pdf->WriteHTML('<p>Sản phẩm : '.$_POST['product'.$i.''].' <p><br><p>Số lượng : '.$_POST['number'.$i.''].'   <p><br><p>Giá : '.$_POST['price'.$i.''].'</p><br>');
}		

$pdf->SetFont('DejaVu','',7);
$pdf->WriteHTML('<br><p>Phí vận chuyển/ Shipping Free : 0 <u>đ</u></p><br><p>Tổng cộng/Total : '.$_POST['total'].'</p>');

$pdf->SetFont('DejaVu','',7);
$pdf->WriteHTML('<br><br><hr><p>Thông tin thanh toán/ Billing info.<br><p>'.$_POST['name'].'<br>'.$_POST['phone'].'</p><br><br><hr><p> Địa chỉ giao hàng / Shipping info</p><br><p>'.$_POST['address'].'</p><br>');

$pdf->SetFont('DejaVu','',6);
$pdf->Output(); 
?>