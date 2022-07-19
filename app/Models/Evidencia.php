<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model{
    protected $fillable = ['evid_descri','tipoEvid_id'];
    protected $primaryKey = 'evid_id';
}