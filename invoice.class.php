<?php
require_once("payable.class.php");
class Invoice implements Payable {
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    private static $invoice_count = 0;
    
    public function __construct($mypart_number, $mypart_description, $myquantity, $myprice_per_item) {
        self::$invoice_count++;
        $this->part_number = $mypart_number;
        $this->part_description = $mypart_description;
        $this->quantity = $myquantity;
        $this->price_per_item = $myprice_per_item;
        
    }
    public function getPartNumber() {
        return $this->part_number;
    }
    public function getPartDescription() {
        return $this->part_description;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getPricePerItem() {
        return $this->price_per_item;
    }
    public function getPaymentAmount() {
        return $this->getPricePerItem() * $this->getQuantity();
    }
    public function toString() {
        echo "Invoice PartNumber: " . $this->getPartNumber() . " Description: " . $this->getPartDescription() . " Quantity: " . $this->getQuantity() . " Prce per item " . $this->getPricePerItem() . "Payment Amount: " . $this->getPaymentAmount();
    }
    public static function getInvoiceCount() {
        return self::invoice_count;
    }
}

?>