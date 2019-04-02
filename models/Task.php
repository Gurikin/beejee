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
    public $idtask;
    public $description;
    public $status;
    public $user;
    private $_dbh;

    public function __construct() {
        $this->_table =  "task";
        $this->_dbh = DBConnect::getInstance();
    }

    /**
     * @return array
     */
    public function selectAll($params = []) {
        $query = "SELECT task_id, description, status, user_id FROM " . $this->_table;
        try {
            /** @var User $user */
            $user = new User();
            $resultSelect = $this->_dbh->getDbh()->query($query);
            if ($resultSelect === false) {
                throw new PDOException('Ошибка при выполнении запроса select task.');
            }
            while ($row = $resultSelect->fetch(PDO::FETCH_ASSOC)) {
                if ($row['user_id'] !== null) {
                    $row['user'] = $user->selectOne($row['user_id']);
                }
                $tableView[] = $row;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $tableView;
    }
}