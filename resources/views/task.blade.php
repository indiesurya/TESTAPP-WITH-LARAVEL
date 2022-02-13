@extends('layouts.main')
@section('container')
<div class="new">
    <div class="halaman1">
        <h1>New</h1>
        <table class="table-task">
            <?php $no = 1 ?>
            <?php $styles = array('even', 'odd'); ?>
            <?php foreach ($news as $new) : ?>
            <tbody>
                <tr class="<?php echo $styles[$no % 2]; ?>">
                    <td>
                        <a href="/tasks/task/new">{{ $new->name_task }}</a>
                    </td>
                    <td style="float:right;">
                        <a href="/tasks/task/edit_new"><i class="far fa-edit"></i></a> ||
                        <a href="/tasks/task/delete_new"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php $no++;endforeach; ?>
        </table> <br>
        <button id="myBtn" class="newtask">New Task</a></button>
    </div>
</div>
<div id="input" class="inputnew">
    <div class="halaman1">
        <h1>Add Task</h1>
        <form action="" method="POST">
            <label for="">Nama Task</label>
            <input type="text" name="name_task" autocomplete="" required><br>
            <label for="">Deskripsi Task</label><br><br>
            <textarea class="ckeditor" id="ckedtor" name="desc_task"></textarea><br>
            <button type="submit" name="addnew" class="newtask">Add Task</button>
        </form>
    </div>
</div>
<div class="problem">
    <div class="halaman1">
        <h1>Problem</h1>
        <table class="table-task">
            <?php $no = 1 ?>
            <?php $styles = array('even', 'odd'); ?>
            <?php foreach ($problems as $problem) : ?>
            <tbody>
                <tr class="odd">
                    <td>
                        <a href="/tasks/task/problem">{{ $problem ->name_task }}</a>
                    </td>
                    <td style="float:right;">
                        <a href="/tasks/task/edit_problem"><i class="far fa-edit"></i></a> ||
                        <a href="/tasks/task/delete_problem"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
            <?php $no++; endforeach;?>
        </table><br>
        <button id="myBtn1" class="newtask">New Task</a></button>
    </div>
</div>
<div id="input1" class="inputnew">
    <div class="halaman1">
        <h1>Add Task</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nama Task</label>
            <input type="text" name="name_task" required>
            <label for="">Test Steps</label>
            <textarea name="test_steps"></textarea>
            <label for="">Data Test</label>
            <textarea name="test_data"></textarea>
            <label for="">Expected Result</label>
            <input type="text" name="exp_result">
            <label for="">Result</label>
            <input type="text" name="result">
            <label for="">Source</label>
            <input type="file" name="source" placeholder="Image...">
            <button type="submit" name="addproblem" class="newtask">Add Task</button>
        </form>
    </div>
</div>
<div class="progress">
    <div class="halaman1">
        <h1>Progress</h1>
        <table class="table-task">
            <tbody>
                <tr class="even">
                    <td>
                        <a href="/tasks/task/progress">Progress1</a>
                    </td>
                    <td style="float:right;">
                        <a href="/tasks/task/edit_progress"><i class="far fa-edit"></i></a> ||
                        <a href="/tasks/task/delete_progress"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        </table><br>
        <button id="myBtn2" class="newtask">New Task</a></button>
    </div>
</div>
<div id="input2" class="inputnew">
    <div class="halaman1">
        <h1>Add Task</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nama Task</label>
            <input type="text" name="name_task" required>
            <label for="">Test Steps</label>
            <textarea name="test_steps"></textarea>
            <label for="">Data Test</label>
            <textarea name="test_data"></textarea>
            <label for="">Expected Result</label>
            <input type="text" name="exp_result">
            <label for="">Result</label>
            <input type="text" name="result">
            <label for="">Source</label>
            <input type="file" name="source" placeholder="Image...">
            <button type="submit" name="addprogress" class="newtask">Add Task</button>
        </form>
    </div>
</div>
<div class="testing">
    <div class="halaman1">
        <h1>Testing</h1>
        <table class="table-task">
            <tbody>
                <tr class="odd">
                    <td>
                        <a href="/tasks/task/testing">Testing1</a>
                    </td>
                    <td style="float:right;">
                        <a href="/tasks/task/edit_testing"><i class="far fa-edit"></i></a> ||
                        <a href="/tasks/task/delete_testing"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        </table><br>
        <button id="myBtn3" class="newtask">New Task</a></button>
    </div>
</div>
<div id="input3" class="inputnew">
    <div class="halaman1">
        <h1>Add Task</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nama Task</label>
            <input type="text" name="name_task" required>
            <label for="">Test Steps</label>
            <textarea name="test_steps"></textarea>
            <label for="">Data Test</label>
            <textarea name="test_data"></textarea>
            <label for="">Expected Result</label>
            <input type="text" name="exp_result">
            <label for="">Result</label>
            <input type="text" name="result">
            <label for="">Source</label>
            <input type="file" name="source" placeholder="Image...">
            <button type="submit" name="addtesting" class="newtask">Add Task</button>
        </form>
    </div>
</div>
<div class="complete">
    <div class="halaman1">
        <h1>Complete</h1>
        <table class="table-task">
            <tbody>
                <tr class="even">
                    <td>
                        <a href="/tasks/task/complete">Complete1</a>
                    </td>
                    <td style="float:right;">
                        <a href="/tasks/task/edit_complete"><i class="far fa-edit"></i></a> ||
                        <a href="/tasks/task/delete_complete"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            </tbody>
        </table><br>
        <button id="myBtn4" class="newtask">New Task</a></button>
    </div>
</div>
<div id="input4" class="inputnew">
    <div class="halaman1">
        <h1>Add Task</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nama Task</label>
            <input type="text" name="name_task" required>
            <label for="">Test Steps</label>
            <textarea name="test_steps"></textarea>
            <label for="">Data Test</label>
            <textarea name="test_data"></textarea>
            <label for="">Expected Result</label>
            <input type="text" name="exp_result">
            <label for="">Result</label> Result
            <input type="text" name="result">
            <label for="">Source</label>
            <input type="file" name="source" placeholder="Image...">
            <button type="submit" name="addcomplete" class="newtask">Add Task</button>
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

    //1
    document.getElementById("myBtn1").onclick = function() {
        myFunction1()
    };

    function myFunction1() {
        document.getElementById("input1").classList.toggle("show1");
    }

    //2
    document.getElementById("myBtn2").onclick = function() {
        myFunction2()
    };

    function myFunction2() {
        document.getElementById("input2").classList.toggle("show2");
    }

    //3
    document.getElementById("myBtn3").onclick = function() {
        myFunction3()
    };

    function myFunction3() {
        document.getElementById("input3").classList.toggle("show3");
    }

    //4
    document.getElementById("myBtn4").onclick = function() {
        myFunction4()
    };

    function myFunction4() {
        document.getElementById("input4").classList.toggle("show4");
    }
</script>
@endsection