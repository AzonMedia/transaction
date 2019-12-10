<?php
declare(strict_types=1);

namespace Azonmedia\Transaction;

use Azonmedia\Patterns\ScopeReference;

class TransactionManager
{
    public function __construct()
    {

    }

    public function begin(string $transction_type, ?ScopeReference $ScopeReference) : Transaction
    {

    }

    public function commit()
    {

    }
}