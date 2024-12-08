@extends('welcome')

@section('content')
<h1>
    Liste des articles
    <a href="/articles/add" class="btn btn-sm btn-success">+</a>
</h1>

<table class="table table-striped">
    <thead>
       <tr>
          <th class="col">#</th>
          <th class="col">Titre</th>
          <th class="col">Desctiption</th>
          <th class="col">Publié</th>
          <th class="col">
             <a href="#" class="btn btn-sm btn-outline-danger">Corbeille(0)</a>
          </th>
       </tr>
    </thead>
    <tbody>
          <tr>
             <td class="col">1</td>
             <td class="col">Article 1</td>
             <td class="col">Une desctiption...</td>
             <td class="col">OUI</span>
             </td>
             <td class="col">
                <a href="#" class="btn btn-sm btn-outline-info">Detail</a>
                <a href="#" class="btn btn-sm btn-outline-warning">Edit</a>
                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
             </td>
          </tr>
    </tbody>
 </table>
@endsection
