<?php
session_start();

use RedBeanPHP\R as R;

class BaseController
{
    public function getBeanById($typeOfBean, $queryStringKey)
    {
        $bean = R::findOne($typeOfBean, 'id=?', [$queryStringKey]);
        return $bean;
    }

    public function getInfoByLang($typeOfBean, $queryStringKey)
    {
        $bean = R::findOne($typeOfBean, 'taal=?', [$queryStringKey]);
        return $bean;
    }
}