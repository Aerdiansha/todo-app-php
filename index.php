<?php 
$todos = [];
$file = file_get_contents('todos.txt');
$todos = unserialize($file);

if(isset($_POST['todo'])) {
    $data = $_POST['todo'];
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    file_put_contents('todos.txt', serialize($todos));
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
</head>
<body>
    <h1>To Do App</h1>

    <form method="post">
        <label for="">Apa kegiatanmu hari ini?</label>
        <input type="text" name="todo">
        <button type="submit">Simpan</button>
    </form>

    <ul>
        <li>
            <input type="checkbox" name="todo">
            <label>Todo 1</label>
            <a href="#">Hapus</a>
        </li>
        <li>
            <input type="checkbox" name="todo">
            <label>Todo 1</label>
            <a href="#">Hapus</a>
        </li>
        <li>
            <input type="checkbox" name="todo">
            <label>Todo 1</label>
            <a href="#">Hapus</a>
        </li>
    </ul>
</body>
</html>