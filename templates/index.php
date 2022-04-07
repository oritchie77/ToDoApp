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
                            $output = '<div class="item-card">' .
                                '<p>' . $toDoItem['title'] . '</p>' .
                                '<p>Complete</p>' .
                                '<a href="/taskComplete/?id=' . $toDoItem['id'] . '&status=reopen">Reopen task</a>' .
                                '<a href="/taskComplete/?id=' . $toDoItem['id'] . '&status=achive">Achive task</a>' .
                                '</div>';
                        } else if ($toDoItem['complete_status'] == 0){
                                $output = '<div class="item-card">' .
                                    '<p>' . $toDoItem['title'] . '</p>' .
                                    '<a href="/taskComplete/?id=' . $toDoItem['id'] . '&status=done">Complete task</a>' .
                                    '</div>';
                        } else {
                            $output = '';
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
