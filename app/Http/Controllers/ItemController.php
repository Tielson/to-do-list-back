<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController
{
    // Retorna uma lista de itens
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }

    // Armazena um novo item
    public function store(Request $request)
    {
        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

    // Mostra um item específico
    public function show($id)
    {
        $item = Item::find($id);
        if ($item) {
            return response()->json($item);
        } else {
            return response()->json(['message' => 'Item not found'], 404);
        }
    }

    // Atualiza um item específico
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        if ($item) {
            $item->update($request->all());
            return response()->json($item);
        } else {
            return response()->json(['message' => 'Item not found'], 404);
        }
    }

    // Remove um item específico
    public function destroy($id)
    {
        $item = Item::find($id);
        if ($item) {
            $item->delete();
            return response()->json(['message' => 'Item deleted']);
        } else {
            return response()->json(['message' => 'Item not found'], 404);
        }
    }
}