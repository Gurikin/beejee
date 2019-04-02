<?php
/**
 * Created by PhpStorm.
 * User: gurikin
 * Date: 02.04.19
 * Time: 1:58
 */

namespace models;


use app\DBConnect;
use app\Model;
use PDO;
use PDOException;

class User extends Model
{
    private $_table;
    private $_dbh;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->_table = "user";
        $this->_dbh = DBConnect::getInstance()->getDbh();
    }

    /**
     * @param $user_id
     * @return array
     */
    public function selectOne($user_id)
    {
        $query = "SELECT user_id, name, email FROM " . $this->_table . " WHERE user_id = " . $user_id;
        try {
            $resultSelect = $this->_dbh->query($query);
            if ($resultSelect === false) {
                throw new PDOException('Ошибка при выполнении запроса selectOne from user.');
            }
            while ($row = $resultSelect->fetch(PDO::FETCH_ASSOC)) {
                $tableView[] = $row;
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $tableView['0'];
    }
}