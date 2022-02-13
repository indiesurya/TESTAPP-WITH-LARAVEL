@extends('layouts.main')

@section('container')
<div class="new">
    <div class="halaman1">
        <h1>Task</h1>
        <div class="column">
            <div class="nametask">
                <a href="/tasks/task">LOVEBALI</a>
                <a style="float:right;" href="#"><i class="far fa-trash-alt"> </i></a>
                <span style="float: right;"> || </span>
                <a style="float:right;" href="#"><i class="far fa-edit"></i> </a>
            </div>
            <p class="desc_task">Desc</p>
            <p class="date_created">Date Created</p>
        </div>
        <a id="contribution" href="#" style=" font-size:12px; padding:10px 20px; color:blueviolet;">+ Add Contributor</a><br><br>
    </div>
    <button id="myBtn" class="newtask">New Task</button>
</div>
<div id="input" class="inputnew">
    <div class="halaman1">
        <h1>Add Task</h1>
        <form action="" method="POST">
            <label for="name_task">Nama Task</label>
            <input type="text" name="name_task" autocomplete="off" autofocus="autofocus"><br>
            <label for="desc_task">Deskripsi Task</label><br><br>
            <textarea class="ckeditor" id="ckedtor" name="desc_task"></textarea><br>
            <label for="date_created">Tanggal Dibuat</label>
            <input type="date" name="date_created"><br>
            <br>
            <button type="submit" name="addtask" class="newtask">Add Task</button>
            </td>
            </tr>
            </table>
        </form>
    </div>
</div>

<script>
    // 0
    document.getElementById("myBtn").onclick = function() {
        myFunction()
    };

    function myFunction() {
        document.getElementById("input").classList.toggle("show");
    }
</script>
@endsection 