<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'type_financial_activity',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function savingAccount()
    {
        return $this->hasOne(Saving::class);
    }

    public function spendingAccount()
    {
        return $this->hasOne(Spending::class);
    }

    public function incomeAccount()
    {
        return $this->hasOne(Income::class);
    }

}
