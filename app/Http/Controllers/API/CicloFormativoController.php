<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CicloFormativo;
use Illuminate\Http\Request;
use App\Http\Resources\CicloFormativoResource;
use App\Models\FamiliaProfesional;
use Illuminate\Validation\Rule;

class CicloFormativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, FamiliaProfesional $familiaProfesional)
    {
        $query = CicloFormativo::where('familia_profesional_id', $familiaProfesional->id);
        if ($request->search) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

        return CicloFormativoResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, FamiliaProfesional $familiaProfesional)
    {

        if ($request->user()->email !== config('app.admin.email')) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $validatedData = $request->validate([
            'nombre'      => 'required|string|max:255',
            'codigo'      => 'required|string|unique:ciclos_formativos,codigo',
            'descripcion' => 'nullable|string',
            'grado'       => ['required', 'string', Rule::in(['basico', 'medio', 'superior'])], 
        ]);

        $cicloFormativo = $familiaProfesional->ciclosFormativos()->create($validatedData);

        return new CicloFormativoResource($cicloFormativo);
    }

    /**
     * Display the specified resource.
     */
    public function show(FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        return new CicloFormativoResource($cicloFormativo);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        if ($request->user()->email !== config('app.admin.email')) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $validatedData = $request->validate([
            'nombre'      => 'required|string|max:255',
            'codigo'      => 'required|string|unique:ciclos_formativos,codigo',
            'descripcion' => 'nullable|string',
            'grado'       => ['required', 'string', Rule::in(['basico', 'medio', 'superior'])], 
        ]);

        $cicloFormativo->update($validatedData);

        return new CicloFormativoResource($cicloFormativo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, FamiliaProfesional $familiaProfesional, CicloFormativo $cicloFormativo)
    {
        if ($request->user()->email !== config('app.admin.email')) {
            return response()->json(['message' => 'No autorizado'], 403);
        }
        try {
            $cicloFormativo->delete();
            return response()->json([
                'message' => 'CicloFormativo eliminado correctamente'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
