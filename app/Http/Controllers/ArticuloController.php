<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use App\Articulo;

class ArticuloController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;

        if ($buscar==''){
            $articulos = Articulo::join('categories', 'articulos.idcategoria','=','categories.id')
                ->select('articulos.id','articulos.idcategoria','articulos.codigo','articulos.nombre','categories.nombre as nombre_categoria','articulos.precio_venta','articulos.stock','articulos.descripcion','articulos.condicion')
                ->orderBy('articulos.id','desc')->paginate(3);
        }
        else{

            $articulos = Articulo::join('categories', 'articulos.idcategoria','=','categories.id')
                ->select('articulos.id','articulos.idcategoria','articulos.codigo','articulos.nombre','categories.nombre as nombre_categoria','articulos.precio_venta','articulos.stock','articulos.descripcion','articulos.condicion')
                ->where('articulos.'.$criterio, 'like', '%'. $buscar . '%')
                ->orderBy('articulos.id','desc')->paginate(3);
        }


        return [
            'pagination' => [
                'total'        => $articulos->total(),
                'current_page' => $articulos->currentPage(),
                'per_page'     => $articulos->perPage(),
                'last_page'    => $articulos->lastPage(),
                'from'         => $articulos->firstItem(),
                'to'           => $articulos->lastItem(),
            ],
            'articulos' => $articulos
        ];
    }

    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $articulos = new Articulo();
        $articulos->idcategoria = $request->idcategoria;
        $articulos->codigo = $request->codigo;
        $articulos->nombre = $request->nombre;
        $articulos->precio_venta = $request->precio_venta;
        $articulos->stock = $request->stock;
        $articulos->descripcion = $request->descripcion;
        $articulos->condicion = '1';
        $articulos->save();
    }

    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $articulos = Articulo::findOrFail($request->id);
        $articulos->idcategoria = $request->idcategoria;
        $articulos->codigo = $request->codigo;
        $articulos->nombre = $request->nombre;
        $articulos->precio_venta = $request->precio_venta;
        $articulos->stock = $request->stock;
        $articulos->descripcion = $request->descripcion;
        $articulos->condicion = '1';
        $articulos->save();
    }

    public function desactivar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $articulos = Articulo::findOrFail($request->id);
        $articulos->condicion = '1';
        $articulos->save();
    }

    public function activar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        $articulos = Articulo::findOrFail($request->id);
        $articulos->condicion = '1';
        $articulos->save();
    }
}
