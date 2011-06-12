<?php

class App_Model_PageModel extends MVC_Db_Abstract
{

    /**
     * get page id
     *
     * @param int
     */
    public function getPage($id)
    {
        $statementString = 'SELECT id, alias, content FROM pages WHERE %s = ?';
        if (is_int($id)) {
            $statementString = sprintf($statementString, 'id');
        } else {
            throw new MVC_Db_Exception('id must be int');
        }
        $statement = $this->getConnection()->prepare($statementString);
        $statement->execute(array($id));
        return $statement->fetch();
    }

}