<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado\Cargo;
use App\Models\Empleado\Empleado;

class EmpleadosController extends Controller
{
    //public function index(){------------>> esta es una forma de implementar la accion index
    //$titulo = "Vista principal de empleados";
    //return view('Empleados.index', ['titulo'=>$titulo]); ----->>
    //}

    //public function index(){
    //$titulo = "Vista principal de empleados";
    //return view('Empleados.index', compact('titulo')); //----->>reemplazo lo anterior por este "compact" el cual funciona como un arreglo
    //}

    public function index()
    {
        $titulo = "Vista principal de empleados";
        $empleados = Empleado::orderBy('id', 'desc')->paginate(5);
        $cargos = Cargo::all();
        return view('Empleados.index', compact('titulo', 'empleados', 'cargos'));
    }

    public function crear()
    {
        $titulo = "Vista crear de empleados";
        return view('Empleados.crear');
    }
    public function mostrar()
    {
        $titulo = "Vista mostar de empleados";
        return view('Empleados.mostrar');
    }

    public function editar()
    {
        $titulo = "Vista crear de empleados";
        return view('Empleados.editar');
    }

    public function guardar()
    {

        $campos = request()->validate([
            'nombre' => 'required|min:3',
            'edad' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'idCargo' => 'required'

        ]);
        Empleado::create($campos);


        return redirect('empleados')->with('mensaje', 'Empleado guardado');
    }

    public function actualizar(Empleado $empleado)
    {

        $campos = request()->validate([
            'nombre' => 'required|min:3',
            'edad' => 'required',
            'direccion' => 'required',
            'email' => 'required|email',
            'idCargo' => 'required'

        ]);
        $empleado->update($campos);

        return redirect('empleados')->with('mensaje', 'Empleado actualizado');
    }


    public function eliminar(Empleado $empleado)
    {
        $empleado->delete();
        return redirect('empleados')->with('mensaje', 'Empleado eliminado');
    }
}
