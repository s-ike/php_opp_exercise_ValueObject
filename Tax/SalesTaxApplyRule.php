<?php
namespace Tax;

class SalesTaxApplyRule
{
    private $sales_taxes;

    public function __construct()
    {
        $sales_taxes = [];
        $sales_taxes[] = new SalesTax(new DateTime(2019, 10, 1), 0.10);
        $sales_taxes[] = new SalesTax(new DateTime(2014, 4, 1), 0.08);
        $sales_taxes[] = new SalesTax(new DateTime(1997, 4, 1), 0.05);
        $sales_taxes[] = new SalesTax(new DateTime(1989, 4, 1), 0.03);
        $this->sales_taxes = new SalesTaxes($sales_taxes);
    }

    public function applyRule(ContractDate $contract_date) :float
    {
        return $this->sales_taxes->getRateFromConrtactDate($contract_date);
    }
}
