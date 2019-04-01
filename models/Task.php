<?php
/**
 * Created by PhpStorm.
 * User: gurikin
 * Date: 02.04.19
 * Time: 1:05
 */

namespace models;

use app\DBConnect;
use app\FileModel;
use PDOException;

class Task extends FileModel
{
    use \app\DBConnect;
    private $_table;
    public $idtask;
    public $description;
    public $status;
    public $user;
    private $_dbh;

    public function __construct() {
        $this->_table =  "task";
        $this->_dbh = DBConnect::getDbh();
    }

    /**
     * @return array
     */
    public function selectAll($params = []) {
        $query = "SELECT idtask, description, status, user_id FROM " . $this->_table;
        try {
            /** @var User $user */
            $user = new User();
            $resultSelect = $this->_dbh->query($query);
            if ($resultSelect === false) {
                throw new PDOException('Ошибка при выполнении запроса select task.<br>');
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