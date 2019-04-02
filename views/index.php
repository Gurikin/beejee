<h2>Список задач</h2>

<p>
    <a onclick="renderItemInfo('GET', '', '/task/create')">Добавить задачу</a>
</p>


<table class="table">
    <tr>
        <th>
            Описание задачи
        </th>
        <th>
            Имя
        </th>
        <th>
            Email
        </th>
        <th>
            Статус
        </th>
        <th>CRUD</th>
    </tr>
    <?php
//        var_dump($this->_model);
        for ($i = 0; $i < count($this->_model); $i++) {
            echo "<tr>";
            foreach ($this->_model[$i] as $taskCol => $taskField) {
                switch ($taskCol) {
                    case 'task_id' : break;
//                    case 'description';
//                        echo "<td><a onclick=\"renderItemInfo('GET', '', '/task/singleTask/id/".$this->_model[$i]['id']."')\">".$taskField."</a></td>";
//                        break;
//                    case 'progress';
                    case 'description':
                        echo "<td>$taskField</td>";
                        break;
                    case 'users':
                        echo "<td>$taskField</td>";
//                    case 'users' :
//                        $taskUsers = '';
//                        echo "<td style='white-space: nowrap;'>";
//                        foreach ($taskField as $user) {
//                            if (!empty($user)) {
//                                printf("<a onclick=\"renderItemInfo('GET', '', '/user/selectUserConst/id/%s');\">%s %s<br></a>", $user["user_id"], $user["firstName"], $user["secondName"]);
//                            }
//                        }
//                        echo "</td>";
                    default: echo"<td align='center' valign='middle'><i class='fas fa-times'></i></td>"; break;
                }
            }
            echo "</tr>";
        }
    ?>
</table>