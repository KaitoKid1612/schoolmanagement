@extends('admin_layout')
@section('admin_content')
<form action="" method="POST">
    <div class="card-body">

        <div class="form-group">
            <label for="menu">Tên Loại Sự Kiện</label>
            <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh mục">
        </div>

        <div class="form-group">
            <label>Mã Sự Kiện </label>
            <textarea name="description" class="form-control"></textarea>
        </div>

    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Loại Sự Kiện</button>
    </div>
    @csrf
</form>
@endsection