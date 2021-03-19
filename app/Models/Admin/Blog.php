<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $table = 'blogs';
    /**
     * @var array
     */
    protected $fillable = [
        'title', 'body'
    ];
    
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users ()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
