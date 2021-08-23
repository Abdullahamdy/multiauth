<form method="post" action="{{route("supplierCRUD.update",$supplier->id)}}">
    @csrf
    @method('put')

<input name='name'>
<input name='email'>
<input name='password'>
<button type = "submit">Edit</button>

</form>
