<?php
namespace Tax;

class AmountIncludingTax
{
    private $amount;

    public function __construct(
        AmountExcludingTax $amount_excluding_tax,
        AppliedSalesTaxRate $applied_sales_tax_rate
    ) {
        $this->amount = (int)($amount_excluding_tax->getAmount() * (1 + $applied_sales_tax_rate->getRate()));
    }

    public function getAmount() :int
    {
        return $this->amount;
    }
}
