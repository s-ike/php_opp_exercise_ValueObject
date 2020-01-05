<?php
namespace Tax;

class SalesTaxes
{
    private $sales_taxes;

    public function __construct(array $sales_taxes)
    {
        $this->sales_taxes = $sales_taxes;
    }

    public function getRateFromConrtactDate(ContractDate $contract_date) :float
    {
        foreach ($this->sales_taxes as $sales_tax) {
            if ($sales_tax->isAfterEnforcementDate($contract_date)) {
                return $sales_tax->rate;
            }
            return 0.0;
        }
    }
}
