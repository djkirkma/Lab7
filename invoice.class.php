<?php
require_once("payable.class.php")
public class Invoice implements Payable {
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    private static $invoice_count = 0;
    
    public function __construct() {
        self::invoice_count++;
    }
    public function getPartNumber() {
        return $this->part_number
    }
    public function getPartDescription() {
        return $this->part_description;
    }
    public function getQuantity() {
        return $this->quantity;
    }
    public function getPricePerItem() {
        return $this->price_per_item
    }
    public function getPaymentAmount() {
        return $this->getPricePerItem() * $this->getQuantity();
    }
    public function toString() {
        echo "Invoice PartNumber: " . $this->getPartNumber() . " Description: " . $this->getPartDescription . " Quantity: " . $this->getQuantity . " Prce per item " . $this->getPricePerItem() . "Pyament Amount: " . $this->getPaymentAmount;
    }
    public function getInvoiceCount() {
        return self::invoice_count;
    }
}

?>