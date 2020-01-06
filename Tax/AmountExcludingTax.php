<?php
namespace Tax;

class AmountExcludingTax
{
    private $amount;

    /**
     * コンストラクタ
     *
     * @param int $amount 税抜き金額
     */
    public function __construct(int $amount)
    {
        if (! $this->isValid($amount)) {
            throw new \InvalidArgumentException('AmountExcludingTax class construct is only accepts positive integers. Input was: '.$amount);
        }
        $this->amount = $amount;
    }

    /**
     * 有効な税抜き金額であるかを返す
     *
     * @param int $amount 税抜き金額
     *
     * @return bool
     */
    private function isValid(int $amount) :bool
    {
        return 0 <= $amount;
    }

    /**
     * 税抜き金額同士を加算する
     *
     * @param AmountExcludingTax $amount_excluding_tax 税抜き金額
     *
     * @return AmountExcludingTax 税抜き金額
     */
    public function add(AmountExcludingTax $amount_excluding_tax) :AmountExcludingTax
    {
        // 税抜き金額同士を加算する
        // 引数には同じAmountExcludingTaxだけ渡せるよう設計
        return new AmountExcludingTax($this->amount + $amount_excluding_tax->getAmount());
    }

    public function getAmount() :int
    {
        return $this->amount;
    }
}
