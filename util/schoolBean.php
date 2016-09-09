<?php
class schoolBean
{
    private $id;
    private $name;
    private $discription;
    private $owner;
    private $phoneNumber;
    private $subscription;
    private $status;
    private $email;
    private $comments;
    private $password;
    private $username;
    private $date;


    function __construct()
    {

    }

    function putMethod($id,$name,$discription,$owner,$phoneNumber,$subscription,$status,$comments,$password,$username,$date,$email)
   {
    $this->$id=$id;
    $this->$name=$name;
    $this->$discription=$discription;
    $this->$owner=$owner;
    $this->$phoneNumber=$phoneNumber;
    $this->$subscription=$subscription;
    $this->$status=$status;
    $this->$comments=$comments;
    $this->$password=$password;
    $this->$username=$username;
    $this->$date=$date;
       $this->$email=$email;

   }
   
   public function getID()
   {
       return $this->id;
   }
   public function getName()
   {
       return $this->name;
   }
    public function getEmail()
    {
        return $this->email;
    }

   public function getDiscription()
   {
       return $this->discription;
   }
    public function getOwner()
   {
       return $this->owner;
   }
    public function getPhoneNumber()
   {
       return $this->phoneNumber;
   }
    public function getSubscription()
   {
       return $this->subscription;
   }
    public function getStatus()
   {
       return $this->status;
   } 
   public function getComments()
   {

       return $this->comments;
   } 
   public function getPassword()
   {
       return $this->password;
   } 
   public function getUserName()
   {
       return $this->username;
   }
    public function getDate()
   {
       return $this->date;
   }
   
   //settter
   public function setID($id)
   {
       return $this->id = $id;
   }

       public function setEmail($email)
   {
       return $this->id=$email;
   }
   public function setName($name)
   {
       return $this->name=$name;
   }
   public function setDiscription($discription)
   {
       return $this->discription=$discription;
   }
    public function setOwner($owner)
   {
       return $this->owner=$owner;
   }
    public function setPhoneNumber($phoneNumber)
   {
       return $this->$phoneNumber=$phoneNumber;
   }
    public function setSubscription($subscription)
   {
       return $this->$subscription=$subscription;
   }
    public function setStatus($status)
   {
       return $this->$status=$status;
   } 
   public function setComments($comments)
   {
       return $this->$comments=$comments;
   } 
   public function setPassword($password)
   {
       return $this->$password=$password;
   } 
   public function setUserName($username)
   {
       return $this->$username=$username;
   }
    public function setDate($date)
   {
       return $this->$date=$date;
   } 


}
?>