@extends('layouts.app')

@section('contenedor')

<h1 class="title"> Lista de Producciones </h1>

<div class="buttons">
  
    <a href="{{url('/producciones/create')}}" class="button is-primary"> Adicionar </a>
  
  </div>
<table class="table">
    <thead>
        <th>Nro</th>
        <th>Area </th>
        <th>Empresa</th>
        <th>fecha</th>
    
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
@endsection
