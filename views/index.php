<h2>Список задач</h2>

<div id="create Button" class="d-flex justify-content-start mb-2">
    <a class="btn btn-success" href='/task/create' )">Добавить задачу</a>
</div>

<table class="table">
    <tr>
        <th class="text-center">
            Описание задачи
        </th>
        <th class="text-center">
            Статус
        </th>
        <th class="text-center">
            Имя
        </th>
        <th class="text-center">
            Email
        </th>
        <th class="text-center">
            Действия
        </th>
    </tr>
    <?php
    //            var_dump($this->_model);
    for ($i = 0; $i < count($this->_model); $i++) {
        echo "<tr>";
        foreach ($this->_model[$i] as $taskCol => $taskField) {
            switch ($taskCol) {
                case 'task_id' :
                    break;
                case 'user_id' :
                    break;
                case 'description':
                    echo "<td>$taskField</td>";
                    break;
                case 'status':
                    $status = ($taskField == '0') ? 'Выполняется' : 'OK';
                    echo("<td>" . $status . '</td>');
                    break;
                case 'name':
                    echo "<td>$taskField</td>";
                    break;
                case 'email':
                    echo "<td>$taskField</td>";
                    break;
                default:
                    break;
            }
        }
        echo "<td>"
            . "<a href='/task/edit'><i class='far fa-edit fa-lg mr-2'></i></a>"
            . "<a href='/task/check'><i class='far fa-check-circle fa-lg'></i></a></td>";
        echo "</tr>";
    }
    ?>
</table>