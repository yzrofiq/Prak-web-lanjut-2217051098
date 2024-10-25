<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    // Disable mass assignment protection for 'id'
    protected $guarded = ['id'];

    // Define the relationship with the UserModel
    public function users()
    {
        // Foreign key should be lowercase 'jurusan_id' following Laravel convention
        return $this->hasMany(UserModel::class, 'jurusan_id');
    }

    // Specify the table name
    protected $table = 'jurusan'; // Keep lowercase for consistency

    // Method to get all jurusan
    public function getJurusan() 
    {
        return $this->all();
    }
}
