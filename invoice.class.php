<?php
require_once("payable.class.php")
public class Invoice implements Payable {
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    private $invoice_count;
    
    public function __construct() {
        
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
    public function PricePerItem() {
        
    }
    public function getPaymentAmount() {
        
    }
    public function toString() {
        
    }
    public function getInvoiceCount() {
        return $this0>invoice_count;
    }
}

?>