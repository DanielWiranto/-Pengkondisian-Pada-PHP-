<html> 
    <head> 
    <body> 
    <h2>Konversi Nilai</h2>
     

    <form action="" method="POST"> 
    NILAI <input type="text" name="Nilai" /><br />
	
    <input type="submit" name="submit" value="Enter" />
    
    </form> 

    <?php
    if(isset($_POST['submit'])){ 
    $nilai=$_POST['Nilai'];

    if ($nilai < 50)
    {
     echo "Anda mendapatkan Nilai E"; 
    }
    else if($nilai <60)
    {
        echo "Anda mendapatkan Nilai D"; 
    }
    else if($nilai <70)
    {
        echo "Anda mendapatkan Nilai C"; 
    }
    else if($nilai <80)
    {
        echo "Anda mendapatkan Nilai B"; 
    }
    else if($nilai >=80)
    {
        echo "Anda mendapatkan Nilai A"; 
    }
}
?>
</body> 
</head> 
</html> 