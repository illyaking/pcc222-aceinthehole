<?php

include  '../includes/db.inc.html.php';

        // Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['fullName']))
  {
      $fullName = $_POST['fullName'];
      $age = $_POST['age'];
      $role = $_POST['role'];
      $email = $_POST['email'];
      $emergencyContact = $_POST['emergencyContact'];
      $emergencyPhone = $_POST['emergencyPhone'];
      $genderID = $_POST['genderID'];
    $satEventRegister = $_POST['satEventRegister'];
    $sunEventRegister = $_POST['sunEventRegister'];
      $comments = $_POST['comments'];
    try {
      $sql = 'INSERT INTO registration SET
        fullName = :fullName,
        age = :age,
        role = :role,
        email = :email,
        emergencyContact = :emergencyContact,
        emergencyPhone = :emergencyPhone,
        genderID = :genderID,
        satEventRegister = :satEventRegister,
        sunEventRegister = :sunEventRegister,
        comments = :comments';

      $s = $pdo->prepare($sql);
      $s->bindValue(':fullName', $fullName);
      $s->bindValue(':age', $age);
      $s->bindValue(':role', $role);
      $s->bindValue(':email', $email);
      $s->bindValue(':emergencyContact', $emergencyContact);
      $s->bindValue(':emergencyPhone', $emergencyPhone);
      $s->bindValue(':genderID', $genderID);
        $s->bindValue(':satEventRegister', $satEventRegister);
        $s->bindValue(':sunEventRegister', $sunEventRegister);
      $s->bindValue(':comments', $comments);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted reservation: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    // load the thank you page after the INSERT runs
      include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  }
		
else {
  include 'registration.html.php';
}

?>