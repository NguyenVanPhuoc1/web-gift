<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use App\Models\Policy;

class PolicyTranslation extends Model
{
    use HasFactory,HasUuids;
    
    protected $table = 'policy_translations';
    protected $guarded = ['id'];
    public function policy()
    {
        return $this->belongsTo(Policy::class);
    }
}