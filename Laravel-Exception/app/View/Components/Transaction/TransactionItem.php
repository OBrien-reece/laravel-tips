<?php

namespace App\View\Components\Transaction;

use Illuminate\View\Component;

class TransactionItem extends Component
{

    public $transaction;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.transaction.transaction-item');
    }
}
