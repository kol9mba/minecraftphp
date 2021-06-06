<?php
$db = mysqli_connect(
  'localhost',
  'root',
  '',
  'lab'
);

function articles_new($db, $idea)
{
  $t="INSERT INTO ideas (idea) VALUES ('$idea')";
  $result=mysqli_query($db, $t);
  if (!$result)
  {
    die(mysqli_error($db));
  }
}
articles_new($db, $_POST['textarea']);
header("Location: "."ideas.html");
?>
