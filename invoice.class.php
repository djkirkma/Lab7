<?php
require_once("payable.class.php");
class Invoice implements Payable {
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    //static invoice count function
    private static $invoice_count = 0;
    
    //constuct function
    public function __construct($mypart_number, $mypart_description, $myquantity, $myprice_per_item) {
        self::$invoice_count++;
        $this->part_number = $mypart_number;
        $this->part_description = $mypart_description;
        $this->quantity = $myquantity;
        $this->price_per_item = $myprice_per_item;
        
    }
    //Get functions
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
        echo "<b>Invoice</b> <br>Part Number: " . $this->getPartNumber() . "<br>Description: " . $this->getPartDescription() . "<br>Quantity: " . $this->getQuantity() . "<br>Price per item: $" . $this->getPricePerItem() ."<br>Payment Amount: $" . $this->getPaymentAmount();
    }
    //Static get invoice count function
    public static function getInvoiceCount() {
        return self::$invoice_count;
    }
}

?>