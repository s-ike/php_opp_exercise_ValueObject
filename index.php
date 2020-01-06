<?php

use Tax\ContractDate;
use Tax\AmountExcludingTax;
use Tax\AmountIncludingTax;
use Tax\AppliedSalesTaxRate;

require_once __DIR__.'/vendor/autoload.php';

$amount1 = new AmountExcludingTax(100);
$amount2 = new AmountExcludingTax(10);
$total = $amount1->add($amount2);
echo $total->getAmount(), PHP_EOL;
echo nl2br("\n");

$contract_date = ContractDate::conclude();
$rate = new AppliedSalesTaxRate($contract_date);
echo sprintf('Rate: %f', $rate->getRate()), PHP_EOL;
echo nl2br("\n");

$amount_including_tax_instance = new AmountIncludingTax($total, $rate);
echo sprintf('Amount including tax: %d', $amount_including_tax_instance->getAmount()), PHP_EOL;
