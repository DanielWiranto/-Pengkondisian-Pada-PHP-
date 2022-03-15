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
    
switch ($nilai){
    case ($nilai < 50);    
         echo "Anda mendapatkan Nilai E"; 
    break;
    case ($nilai <60);
         echo "Anda mendapatkan Nilai D"; 
    break;
    case ($nilai <70);
         echo "Anda mendapatkan Nilai C"; 
    break;
    case ($nilai <80);
         echo "Anda mendapatkan Nilai B"; 
    break;
    case ($nilai >=80);
         echo "Anda mendapatkan Nilai A"; 
    break;

    }
}
?>
</body> 
</head> 
</html> 