@extends('layouts.main')
@section('container')
<div class="content-task">
    <div class="halaman">
        <h1>Detail {{ $page }}</h1>
    </div>
</div>
<br>
<div class="detail">
    <label>Nama Task</label>
    <div class="desc">
        <p>p</p>
    </div>
    <label for="">Test Steps</label>
    <div class="desc">
        <p>p</p>
    </div>
    <label for="">Data Test</label>
    <div class="desc">
        <p>p</p>
    </div>
    <label for="">Expected Result</label>
    <div class="desc">
        <p>p</p>
    </div>
    <label for="">Result</label>
    <div class="desc">
        <p>p</p>
    </div>
    <label for="">Source</label><br> <br>
    <img src="" style=" width: 50%; vertical-align:middle;" alt=""></td>
    <br>
    <br>
    <form action="" method="POST">
        <label for="page">Action: </label>
        <select id="page" name="page" style="width:100px;">
            <option value="problem">Problem</option>
            <option value="progress">Progress</option>
            <option value="testing">Testing</option>
            <option value="complete">Complete</option>
        </select>
        <button class="btn-detail" type="submit" name="move">Move</button>
    </form>
</div>
@endsection