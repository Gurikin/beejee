<?php
/**
 * Created by PhpStorm.
 * User: gurikin
 * Date: 02.04.19
 * Time: 1:05
 */

namespace models;

use app\DBConnect;
use app\Model;
use PDO;
use PDOException;

class Task extends Model
{
    private $_table;
    private $_dbh;

    public function __construct() {
        $this->_table =  "task";
        $this->_dbh = DBConnect::getInstance()->getDbh();
    }

    /**
     * @return array
     */
    public function selectAll($params = []) {
        $query = "SELECT task_id, description, status, user_id FROM " . $this->_table;
        try {
            /** @var User $user */
            $user = new User();
            $resultSelect = $this->_dbh->query($query);
            if ($resultSelect === false) {
                throw new PDOException('Ошибка при выполнении запроса select task.');
            }
            while ($row = $resultSelect->fetch(PDO::FETCH_ASSOC)) {
                if ($row['user_id'] !== null) {
                    $userRow = $user->selectOne($row['user_id']);
                    $row['user_id'] = $userRow['user_id'];
                    $row['name'] = $userRow['name'];
                    $row['email'] = $userRow['email'];
//                    $row['name'] = $user->selectOne($row['user_id']);
//                    $row['email'] = $user->selectOne($row['user_id']);
                }
                $tableView[] = $row;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $tableView;
    }
}