<?php $available=array();$free=array();
function fetchdata() {
    require "config.php";
    global $available; global $free;
    $available=array();$free=array();$_data=NULL;
    $sql = 'SELECT * FROM appointments';$q = $pdo->query($sql);$q->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$q->fetch()){
        if($row["is_available"]==1){$_data=array("id"=>$row['id'],"date" => $row['appointment_date'],"time"=>$row['appointment_time']);array_push($available,$_data);}
        elseif($row['is_available']==0){$_data=array("date"=>$row['appointment_date'],"time"=>$row['appointment_time']);array_push($free,$_data);}
    }
}
function update_appointments($book_now){require "config.php";
    foreach($book_now as $id){
        $sql = "update appointments set is_available=0 where id=$id";
        try {
            $stmt = $pdo->prepare($sql);$stmt->execute();
        }catch(Exception $e){echo 'Exception Message: '.$e->getMessage();}
        echo("<script>window.location.href = 'checkappointmentslots.php';</script>");
    }fetchdata();
}
?>