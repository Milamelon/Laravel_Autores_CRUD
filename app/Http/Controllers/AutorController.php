<?php
 
namespace App\Http\Controllers;
 
use App\Models\Autor;
use Illuminate\Http\Request;
 
class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::get();
        return view('autores.index', compact('autores')); //el compact es para pasar la variable autores a la vista
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores = Autor::all();
        return view('autores.insertar', compact('autores')); //el compact es para pasar la variable autores a la vista
    }
 
    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {

         $request->validate([
        'codigo_autor' => [
            'required',
            'unique:autores,codigo_autor',
            'regex:/^AUT\d{3}$/'
        ],
        'nombre_autor' => 'required|string|max:255',
        'nacionalidad' => 'required|string|max:255',
    ], [
        'codigo_autor.unique' => 'El código ya existe',
        'codigo_autor.regex' => 'El código debe tener el formato AUTXXX',
    ]);

    $autor = new Autor();
    $autor->codigo_autor = $request->codigo_autor;
    $autor->nombre_autor = $request->nombre_autor;
    $autor->nacionalidad = $request->nacionalidad;
    $autor->save();
    return redirect()->back()->with('success', 'Autor creado correctamente');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
         
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        //
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $codigo_autor){
    $request->validate([
        'nombre_autor' => 'required|string|max:255',
        'nacionalidad' => 'required|string|max:255',
    ]);
    // Actualizar el autor
    $autor = Autor::where('codigo_autor', $codigo_autor)->firstOrFail();// Buscar el autor por su código, la funcion firstOrFail() devuelve el primer registro que coincide con la consulta o lanza una excepción si no se encuentra ningún registro.
    $autor->nombre_autor = $request->nombre_autor;
    $autor->nacionalidad = $request->nacionalidad;
    $autor->save();
    return redirect()->route('autores.index')->with('success', 'Autor actualizado correctamente');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        try {
        $autor->delete();
        return redirect()->route('autores.index')->with('success', 'Autor eliminado correctamente');
    } catch (\Illuminate\Database\QueryException $e) {
        return redirect()->route('autores.index')->with('error', 'No se puede eliminar el autor porque tiene libros asociados.');
    }
    }
}