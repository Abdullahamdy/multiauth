<form method="POST" action="{{route('supplierCRUD.store')}}">
    @csrf

    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
           <input class="form-controller" name = "name"  placeholder="اسم المورد">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">email</label>
            <input name = "email"  placeholder="ايميل المورد">
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">password</label>
            <input name = "password"  placeholder="ادخل الباسورد">
          </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
