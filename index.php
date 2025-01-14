<?php 
$todos = []; // total array yang disiapkan
if(file_exists('todos.txt')) { // jika file todos.txt ada
    // maka membaca file todos.txt
    $file = file_get_contents('todos.txt');  // membaca file todos.txt
    $todos = unserialize($file); // mengubah format serialize ke array
};


// jika ditemukan data todo melalui method post
if(isset($_POST['todo'])) {
    $data = $_POST['todo']; // mengambil data todo pada form
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
        <?php foreach($todos as $key => $value): ?>
        <li>
            <input type="checkbox" name="todo">
            <label><?= $value['todo']; ?></label>
            <a href="#">Hapus</a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>