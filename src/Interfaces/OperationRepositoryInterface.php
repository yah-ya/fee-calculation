<?php
namespace Yahyya\FeeCalulation\Interfaces;

interface OperationRepositoryInterface{
    public function get():array;
    public function filterByUserId(int $userId):static;
    public function filterByWeek($date):static;
    public function filterByType($type):static;
}
