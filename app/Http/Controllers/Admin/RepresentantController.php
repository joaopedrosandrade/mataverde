<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Representant;

class RepresentantController extends Controller
{
    public function index()
    {
        $representants = Representant::orderBy('created_at', 'desc')->get();
        $unreadCount = Representant::where('is_read', false)->count();
        
        return view('admin.representants.index', compact('representants', 'unreadCount'));
    }

    public function show($id)
    {
        $representant = Representant::findOrFail($id);
        
        // Marcar como lido
        if (!$representant->is_read) {
            $representant->update(['is_read' => true]);
        }
        
        return view('admin.representants.show', compact('representant'));
    }

    public function destroy($id)
    {
        $representant = Representant::findOrFail($id);
        $representant->delete();

        return redirect()->route('admin.representants.index')
            ->with('success', 'Candidatura excluída com sucesso!');
    }
}
