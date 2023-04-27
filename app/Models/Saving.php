<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    use HasFactory;

    public function financialActivity()
    {
        return $this->belongsTo(FinancialActivity::class);
    }
}
