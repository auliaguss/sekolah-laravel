<h1>Student List</h1>
<br/>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#
      </th>
        <th scope="col">Name</th>
        <th scope="col">School</th>
        <th scope="col">Grade</th>
        <th scope="col">Department</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($siswa as $s)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$s->name}}</td>
      <td>{{$s->school}}</td>
      <td>{{$s->grade}}</td>
      <td>{{$s->department}}</td>
      <td>{{$s->phone}}</td>
      <td>{{$s->email}}</td>
      <td>
      </td>
    </tr>
  @endforeach


  </tbody>
</table>