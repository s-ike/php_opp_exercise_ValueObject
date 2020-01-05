<?php

use Tax\AmountExcludingTax;
use Tax\ContractController;

require_once __DIR__.'/vendor/autoload.php';

$contract_controller = new ContractController();

$conclude = $contract_controller->conclude();


$amount1 = new AmountExcludingTax(100);
$amount2 = new AmountExcludingTax(10);
$total = $amount1->add($amount2);
echo $total->amount;
