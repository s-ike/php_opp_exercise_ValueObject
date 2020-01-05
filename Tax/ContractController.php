<?php
namespace Tax;

class ContractController
{
    private $contract_amount;

    /**
     * 税込金額を計算する
     *
     * @param int   $amountExcludingTax 税別金額
     * @param float $salesTaxRate       消費税率
     *
     * @return int 税込金額
     */
    public function calculateAmountIncludingTax(int $amountExcludingTax, float $salesTaxRate) :int
    {
        return (int)($amountExcludingTax * (1.0 + $salesTaxRate));
    }

    /**
     * 契約締結する
     */
    public function conclude()
    {
        $amountExcludingTax = 100;
        $salesTaxRate = 0.05;
        // 省略
        $amountIncludingTax = $this->calculateAmountIncludingTax($amountExcludingTax, $salesTaxRate);
        $contract_amount = new ContractAmount();
        $contract_amount->AmountIncludingTax = $amountIncludingTax;
        $contract_amount->SalesTaxRate = $salesTaxRate;
        // 省略
        print_r($contract_amount);
    }
}
