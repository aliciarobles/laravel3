<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = 'prestamos';

    public static function eliminar($id){
        $prestamo = Prestamo::find($id);
        if(isset($prestamo)) {
            $prestamo->delete();
            return redirect()->route('index')->with('success', 'Préstamo eliminado correctamente.');
        }

        return "No existe ese ID del prestamo";

    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}
