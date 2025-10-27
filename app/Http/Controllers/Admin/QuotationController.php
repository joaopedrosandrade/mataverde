<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quotation;

class QuotationController extends Controller
{
    public function index()
    {
        $quotations = Quotation::orderBy('created_at', 'desc')->get();
        $unreadCount = Quotation::where('is_read', false)->count();
        
        return view('admin.quotations.index', compact('quotations', 'unreadCount'));
    }

    public function show($id)
    {
        $quotation = Quotation::findOrFail($id);
        
        // Marcar como lido
        if (!$quotation->is_read) {
            $quotation->update(['is_read' => true]);
        }
        
        return view('admin.quotations.show', compact('quotation'));
    }

    public function destroy($id)
    {
        $quotation = Quotation::findOrFail($id);
        $quotation->delete();

        return redirect()->route('admin.quotations.index')
            ->with('success', 'Orçamento excluído com sucesso!');
    }
}
