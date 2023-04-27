<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'current_saving',
        'previous_saving',
        'current_balance',
        'previous_balance',
        'currency',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financialActivities()
    {
        return $this->hasMany(FinancialActivity::class);
    }
}
