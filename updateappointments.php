<?php
    require "config.php";
    foreach($book_now as $id){
        $sql = "update appointments set is_available=0 where id=$id";
        try {
            $stmt = $pdo->prepare($sql);$stmt->execute();
        }catch(Exception $e){echo 'Exception Message: '.$e->getMessage();}
    }
?>
<!-- <script>window.location.href = 'checkappointmentslots.php';</script> -->
<script>window.location.href = 'index.html';</script>