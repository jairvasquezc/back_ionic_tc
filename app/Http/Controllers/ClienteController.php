<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Obtener información completa de un cliente.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $cliente = Cliente::with([
            'persona:id,razon_social,numero_documento',
            'ventasPasajes:id,id_cliente,id_viaje,costo,fecha_venta',
            'encomiendasRemitente:id,id_remitente,id_viaje,costo_total,estado_envio',
            'encomiendasDestinatario:id,id_destinatario,id_viaje,costo_total,estado_envio'
        ])->find($id, ['id', 'persona_id']);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente no encontrado'], 404);
        }

        return response()->json($cliente);
    }

}