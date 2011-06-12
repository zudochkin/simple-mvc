<?php

class MVC_Db_Abstract
{

    /**
     * PDO object
     * 
     * @var Pdo
     */
    private $_connection;
    /**
     * PDO options
     *
     * @var array
     */
    protected $_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");

    /**
     * PDO attributes
     *
     * @param array|string $attribs 
     */
    public function __construct()
    {
        $this->_initConnection();
    }

    private function _initConnection()
    {
        if (!$this->_connection instanceof PDO) {
            $settings = MVC_Registry::get('settings');
            $dbSettings = $settings['database'];
            $dsn = sprintf('%s:host=%s;dbname=%s', $dbSettings['adapter'], $dbSettings['params']['host'], $dbSettings['params']['dbname']);
            try {
                $this->_connection = new PDO($dsn, $dbSettings['params']['username'], $dbSettings['params']['password'],
                                $this->_options);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
    }

    public function getConnection()
    {
        return $this->_connection;
    }

}