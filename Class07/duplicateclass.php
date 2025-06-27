<?php

include_once("Invoice/printer.php") ;
include_once("Pdf/printer.php") ;

use App\Invoice\Printer as InvoicePrinter;
use App\Pdf\Printer as pdfPrinter;

$pdfPrint = new pdfPrinter() ;
$invoicePrint = new InvoicePrinter();

$pdfPrint->print();
echo "\n";
$invoicePrint->print();