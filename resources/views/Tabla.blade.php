@extends('Plantilla')

@section('contenido')

    <h1> Stock </h1>
    
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Estante</th>
                <th scope="col">Categoria</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Odisea</td>
                <td>Omero</td>
                <td>C203</td>
                <td>Mitologia</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob Keys</td>
                <td>Tarkus</td>
                <td>k103</td>
                <td>Ficción</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <!--<td colspan="2">Larry the Bird</td>-->
                <td>Baldor</td>
                <td>Baldor</td>
                <td>A010</td>
                <td>Matematicas</td>
              </tr>
            </tbody>
          </table>
    </div>

@stop