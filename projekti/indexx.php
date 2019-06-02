<?php require 'header1.php'; ?>
<div class="card-body">
<?php 
$post = new Post;

$fetch_post = $post->readAllPost();

foreach ($fetch_post as $value):
	
 ?>
<h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?id=<?php echo $value->id; ?>"><?php echo $value->email; ?></a></h3>

	<a class="btn btn-primary mt-3" href="edit_post.php?id=<?php echo $value->id; ?>">Edit</a>
	<a class="btn btn-danger mt-3" href="delete_post.php?id=<?php echo $value->id; ?>">Delete</a>
	<p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?id=<?php echo $value->id; ?>">read more...</a></p>

<?php endforeach; ?>

</div>
<html>
<head>
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<div id="poll">
<h3>Do you like Lexo Online so far?</h3>
<form>
Yes:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>No:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>

</body>
</html> 

<?php require 'footer1.php'; ?>
