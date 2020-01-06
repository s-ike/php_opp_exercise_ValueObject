<?php
namespace Tax;

class AppliedSalesTaxRate
{
    private $sales_tax_apply_rule = null;
    private $rate = null;

    public function __construct(ContractDate $contract_date)
    {
        if (! $this->sales_tax_apply_rule) {
            $this->sales_tax_apply_rule = new SalesTaxApplyRule();
        }
        // $rate を算出
        $this->rate = $this->sales_tax_apply_rule->applyRule($contract_date);
    }

    public function getRate() :float
    {
        return $this->rate;
    }
}
