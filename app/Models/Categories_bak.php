<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','parent_id','active','created_at', 'updated_at'];
}
