<?php
namespace Tax;

class ContractDate
{
    private $date;

    /**
     * コンストラクタ
     *
     * @param DateTime $date
     */
    private function __construct(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * 契約締結時に呼び出す用
     *
     * @return ContractDate
     */
    public function conclude() :ContractDate
    {
        return new ContractDate(new DateTime(null, new DateTimeZone('Asia/Tokyo')));
    }

    /**
     * リポジトリからの読み出し用
     *
     * @param DateTime $date
     *
     * @return ContractDate
     */
    public function reconstruct(DateTime $date) :ContractDate
    {
        return new ContractDate($date);
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
