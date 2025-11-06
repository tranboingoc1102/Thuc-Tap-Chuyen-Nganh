@extends('layout/admin')
@section('body')
  
  <div class="card-footer">
        <table class="table table-dark table-bordered border-primary">
              <h1>PRODUCT</h1>
              <a-href="" class="btn btn-primary"> Add</a>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Picture</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><i class="fa-regular fa-image"></i></td>
      <td><i class="fa-regular fa-pen-to-square"></i></td>
      <td><i class="fa-solid fa-trash"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
       <td><i class="fa-regular fa-image"></i></td>
       <td><i class="fa-regular fa-pen-to-square"></i></td>
       <td><i class="fa-solid fa-trash"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
       <td><i class="fa-regular fa-image"></i></td>
       <td><i class="fa-regular fa-pen-to-square"></i></td>
       <td><i class="fa-solid fa-trash"></i></td>
    </tr>
  </tbody>
</table>
    </div>
@endsection
 