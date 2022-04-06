<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Slim 4</title>

    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
    <h1>To Do List</h1>
    </header>
</body>
    <main>
        <section class="list-container">
            <div class="table-header">
            </div>
            <div class="item-card-container">
                <?php
                    $output = '';
                    foreach($toDoItems as $toDoItem) {
                        if ($toDoItem['complete_status'] == 1){
                            $output = '<form method="POST" class="item-card">' .
                                '<p>' . $toDoItem['title'] . '</p>' .
                                '<p>Complete</p>' .
                                '</form>';
                        } else {
                                $output = '<form method="POST" class="item-card">' .
                                    '<p>' . $toDoItem['title'] . '</p>' .
//                                    '<label class="switch">' .
//                                    '<input type="checkbox" name="" id="">' .
//                                    '<span class="slider round"></span>' .
//                                    '</label>' .
                                    '<a href="/taskComplete/?id=' . $toDoItem['id'] . '&status=done">complete task</a>' .
                                    '</form>';
                        }
                        echo $output;
                    }
                ?>
                <form class="item-card" method="POST">
                    <input type="text" placeholder="Add a to do" name="title">
                    <button type="submit">Add</button>
                    <p></p>
                </form>
                
            </div>
        </section>
    </main>
</html>
