<?php
session_start();
require_once 'config.php';


class auth extends database{

    public function adminLogin($username, $password){
        //join query will be used
     $hPassword = $this->passwordHash($password);

        $query = $this->conn->prepare("SELECT * FROM job_portal_admin WHERE username=? AND pass=?");
        $query->execute(array($username , $hPassword));
        $control= $query->fetch(PDO::FETCH_ASSOC);
        $control_2 =$query->rowCount();
        if($control_2  > 0)
        {
              $_SESSION["username"] = $username;
              $_SESSION["password"] = $password;
              $_SESSION["id"] = $control['id'];
        }
    }

    public function adminRegister($username, $email, $password)
    {
     $hPassword = $this->passwordHash($password);

        $sql = "INSERT INTO job_portal_admin(username, email, pass) VALUES (:username, :email, :hPassword)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':username', $username ,PDO::PARAM_STR);
        $stmt->bindParam(':email', $email ,PDO::PARAM_STR);
        $stmt->bindParam(':hPassword', $hPassword ,PDO::PARAM_STR);
        $stmt->execute();
    }

    public function update_Admin_profile($adminId, $fName, $location, $phone, $profession, $website, $Fb, $Tw, $Ln, $Git, $fileName)
    {
        $sql = "UPDATE job_portal_admin SET image=:fileName, fname=:fName, location=:location, phone=:phone, profession=:profession, web_link=:website, facebook=:Fb, twitter=:Tw, linkedin=:Ln, github=:Git where id=:adminId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':fName', $fName ,PDO::PARAM_STR);
        $stmt->bindParam(':location', $location ,PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone ,PDO::PARAM_STR);
        $stmt->bindParam(':profession', $profession ,PDO::PARAM_STR);
        $stmt->bindParam(':website', $website ,PDO::PARAM_STR);
        $stmt->bindParam(':Fb', $Fb ,PDO::PARAM_STR);
        $stmt->bindParam(':Tw', $Tw ,PDO::PARAM_STR);
        $stmt->bindParam(':Ln', $Ln ,PDO::PARAM_STR);
        $stmt->bindParam(':Git', $Git ,PDO::PARAM_STR);
        $stmt->bindParam(':fileName', $fileName ,PDO::PARAM_STR);
        $stmt->bindParam(':adminId', $adminId ,PDO::PARAM_STR);
        $stmt->execute();
    }

    public function fetch_Profile_data($adminId)
    {
        $sql = "SELECT * from job_portal_admin where id = :adminId";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':adminId', $adminId ,PDO::PARAM_STR);
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // validates the provided value against xss attacks.
    public function test_input($data)
    {
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
        }

    //for hash password insertion
    public function passwordHash($password)
    {
        $salt = ")(*&^%$#(*&^%$#*&^%$#";
        $hPassword = md5($password . $salt);
        return $hPassword;
    }
    
    public function check_Pass($username, $password)
    {
        $hPassword = $this->passwordHash($password);

        $sql = "SELECT * from job_portal_admin WHERE username =:username && pass=:hPassword";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':hPassword' => $hPassword,':username' => $username]);
        $count =  $stmt->rowCount();
        return $count;
    }
    
    // SESSION's in the User
    public function session_user($username)
    {
        $sql="SELECT id,username,email,pass from job_portal_admin where username=:username";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam(":username",$username);
        $stmt->execute();
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}  
?>