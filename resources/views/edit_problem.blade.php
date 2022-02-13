@extends('layouts.main')
@section('container')
<div class="content-task">
    <div class="halaman">
        <h1>{{ $title }}</h1>
    </div>
</div>
<br>
<div class="detail">
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Nama Task</label><br>
        <input type="text" name="name_task" value="Problem1" required><br>
        <label for="">Test Steps</label>
        <textarea name="test_steps">P</textarea>
        <label for="">Data Test</label>
        <textarea name="test_data">P</textarea>
        <label for="">Expected Result</label>
        <input type="text" name="exp_result" value="P">
        <label for="">Result</label>
        <input type="text" name="result" value="p">
        <label for="">Source</label><br> <br>
        <img src="" style=" width: 50%; vertical-align:middle;" alt=""></td>
        <input type="file" name="source"><input type="hidden" name="old" value="">
        <button type=" submit" name="updproblem" class="newtask">Update Task</button>
        <br>
        <br>
    </form>
</div>
@endsection