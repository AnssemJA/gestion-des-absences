<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "gestion_employe");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM gestion_absence 
  WHERE id_emp LIKE '%".$search."%'
  OR date LIKE '%".$search."%' 
  OR motif_absence LIKE '%".$search."%' 
  OR absence_justifie LIKE '%".$search."%' 
  OR absence_prevue LIKE '%".$search."%'
  OR duree LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM gestion_absence ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>id_emp</th>
     <th>date</th>
     <th>motif_absence</th>
     <th>absence_justifie</th>
     <th>absence_prevue</th>
     <th>duree</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id_emp"].'</td>
    <td>'.$row["date"].'</td>
    <td>'.$row["motif_absence"].'</td>
    <td>'.$row["absence_justifie"].'</td>
    <td>'.$row["absence_prevue"].'</td>
    <td>'.$row["duree"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Résultat non trouvée';
}

?>