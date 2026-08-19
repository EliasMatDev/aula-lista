<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ActividadController extends Controller
{
    // Muestra la pagina y entrega las actividades a la vista
    public function index(): Response
    {
        return Inertia::render('actividades', [
            'actividades' => Actividad::latest()->get()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $datos = request->validate([
            'titulo' => ['required', 'string', 'max:100'],
            'materia' => ['required', 'string', 'max:60'],
        ]);

        Actividad::create($datos);

        return back()->with('success', 'Actividad agregada correctamente.');
    }

    public function update(Actividad $actividad): RedirectResponse
    {
        $actividad->update([
            'completada' => !$actividad->completada,
        ]);

        return back();
    }

    public function destroy(Actividad $actividad): RedirectResponse
    {
        $actividad->delete();

        return back()->with('success', 'Actividad eliminada correctamente.');
    }
}
