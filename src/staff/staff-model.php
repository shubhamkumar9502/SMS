<?php

namespace school\staff;
require '../env.php' ;

class staff

{
    private $connection = null;

    public function __construct()

    {
        $this->connection = new \mysqli(SERVER, USERNAME,PASSWORD,DATABASE);

        
    } 
    public function  index() 
     {
        $sql = "SELECT * FROM staff";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    public function create($staff) 
    {
       $first_name = $staff['first_name'];
       $middle_name = $staff['middle_name'];
       $last_name = $staff['last_name'];
       $contact_no = $staff['contact_no'];
       $sql = "INSERT INTO staff(first_name, middle_name, last_name, contact_no) VALUES('$first_name', '$middle_name', '$last_name', '$contact_no')";
       $this->connection->query($sql);
       header("location:staff.php");
       
   }

   public function details(int $id)
   {
       $sql = "SELECT * FROM staff WHERE id=$id";
       $result = $this->connection->query($sql);
       if ($result->num_rows > 0) {
           return $result->fetch_assoc();          
       }
       return null;
   }


   public function delete(int $id)
   {
       $sql = "DELETE FROM staff WHERE id=$id";
       $this->connection->query($sql);
       header("location:staff.php");
   }

   public function edit($staff)
    {
        $id = $staff['id'];
        $first_name = $staff['first_name'];
        $middle_name = $staff['middle_name'];
        $last_name = $staff['last_name'];
        $contact_no = $staff['contact_no'];
        $sql = "UPDATE staff SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', contact_no='$contact_no' WHERE id=$id";
        $this->connection->query($sql);
        header("location:staff.php");
    }

   
    public function ___descturct()
    {
        $this->connection->close();
    }
}