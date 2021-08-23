<a href="{{route('supplierCRUD.create')}}">اضافه مستخدم</a>


<table id="datatable" class="table  table-hover table-sm table-bordered p-0"
data-page-length="50"
style="text-align: center">
<thead>
<tr>
 <th>#</th>
 <th>name</th>
 <th>email</th>


</tr>
</thead>
<tbody>
@foreach($suppliers as $student)
 <tr>

 <td>{{$student->name}}</td>
 <td>{{$student->email}}</td>

     <td>
         <a href="{{route('supplierCRUD.edit',$student->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">edit</a>
         <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_Student{{ $student->id }}" title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
<form method="post" action="{{route('supplierCRUD.destroy',$student->id)}}">
    @method('delete')
    @csrf
<button>DElete</button>
</form>

        </td>
 </tr>
@endforeach
</table>
