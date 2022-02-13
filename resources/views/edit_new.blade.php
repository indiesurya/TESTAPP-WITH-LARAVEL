@extends('layouts.main')
@section('container')
<div class="editnew">
    <div class="halaman1">
        <h1>{{ $title }}</h1>
        <form action="" method="POST">
            <label for="">Nama Task</label>
            <input type="text" name="name_task" autocomplete="off" value="New1"><br>
            <label for="">Deskripsi Task</label><br><br>
            <textarea class="ckeditor" id="ckedtor" name="desc_task" value="Desc Task">Desc Task</textarea><br>
            <button type="submit" name="updnew" class="newtask">Update Task</button>
        </form>
    </div>
</div>
@endsection