<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;


    protected $table = 'sales';
    protected $primaryKey = 'sale_id';

    protected $fillable = [
        'client_id',
        'product_id',
        'sale_date',
        
    ];
    protected $dates = ['sale_date']; 
    
    
  
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}

