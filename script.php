<?php
$db = mysqli_connect(
  'localhost',
  'root',
  '',
  'lab'
);

function ideas_all($db)
{
  $query = "SELECT * FROM ideas";
  $result=mysqli_query($db, $query);
  if (!$result)
  {
    die(mysqli_error($db));
  }
  $n = mysqli_num_rows($result);
  $articles = array();
  for($i=0; $i<$n; $i++)
  {
    $row = mysqli_fetch_assoc($result);
    $articles[] = $row;
  }
  return $articles;
}

?>
