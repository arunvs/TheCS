<?php
require("../config/connection.php");
require_once ("../util/schoolBean.php");
class Databasefuncions
{
    
    function insertintoschool(schoolBean $arrayofschool)
    {
        $db=Database::getInstance();
        $conn=$db->getConnection();
        $sql="INSERT INTO `school` (`id`, `name`, `discription`, `owner`, `email`, `phonenumber`, `subscription`, `status`, `comments`, `password`, `username`, `date`) VALUES (NULL, '$arrayofschool->getName() ', '$arrayofschool->getDiscription()', '$arrayofschool->getOwner()','$arrayofschool->getEmail()','$arrayofschool->getPhoneNumber()', '$arrayofschool->getSubscription()', '$arrayofschool->getStatus()', '$arrayofschool->getComments()', '$arrayofschool->getPassword()', '$arrayofschool->getUserName()', '$arrayofschool->getDate()');";
        $conn->query($sql); 
        return true;
    }
    function selectfromschool()
    {
        $db=Database::getInstance();
        $conn=$db->getConnection();
        $sql2="SELECT * FROM `school`";

        $resultArray = array(); //declaring schoolBean object

        $resultSet=$conn->query($sql2);
        while($schoolBewanItem = $resultSet->fetch_assoc()){
            $resultArray[] = $schoolBewanItem;
        }

        $SchoolBaenArrayList=array();

        foreach($resultArray as $schoolBeanObject)
        {
            $schoolBean=new schoolBean();
            $schoolBean->putMethod($schoolBeanObject["id"],$schoolBeanObject["name"],$schoolBeanObject["discription"],$schoolBeanObject["owner"],$schoolBeanObject["phonenumber"],$schoolBeanObject["subscription"],$schoolBeanObject["status"],$schoolBeanObject["comments"],$schoolBeanObject["password"],$schoolBeanObject["username"],$schoolBeanObject["date"],$schoolBeanObject["email"]);
            $SchoolBaenArrayList[]=$schoolBean;
        }

        return $SchoolBaenArrayList;
    }
    

    
    
}
?>