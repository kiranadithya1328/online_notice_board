<?php
include("config.php");

if(!isset($_GET['id'])){
  header("Location: index.php");
  exit();
}

$id = intval($_GET['id']);

$result = mysqli_query($conn,"SELECT * FROM notices WHERE id=$id");

if(mysqli_num_rows($result)==0){
  echo "Notice not found";
  exit();
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?php echo $row['title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>

*{
 margin:0;
 padding:0;
 box-sizing:border-box;
 font-family:'Poppins',sans-serif;
}

body{
 background:#f4f7fb;
}

/* HEADER */

.header{
 background:white;
 padding:15px 30px;
 box-shadow:0 6px 15px rgba(0,0,0,0.1);
 display:flex;
 align-items:center;
 justify-content:space-between;
}

.brand{
 display:flex;
 align-items:center;
 gap:15px;
}

.brand img{
 width:55px;
 height:55px;
 border-radius:50%;
 border:3px solid #2563eb;
}

.brand-text h2{
 color:#1e40af;
 font-size:18px;
}

.back-btn{
 background:#2563eb;
 color:white;
 padding:10px 18px;
 border-radius:25px;
 text-decoration:none;
 font-weight:600;
}

/* NOTICE VIEW */

.container{
 max-width:900px;
 margin:40px auto;
 background:white;
 border-radius:20px;
 padding:30px;
 box-shadow:0 10px 30px rgba(0,0,0,.1);
 animation:fade .5s ease;
}

@keyframes fade{
 from{opacity:0; transform:translateY(20px);}
 to{opacity:1; transform:translateY(0);}
}

.container img{
 width:100%;
 max-height:400px;
 object-fit:cover;
 border-radius:15px;
 margin-bottom:20px;
}

.title{
 font-size:26px;
 color:#2563eb;
 margin-bottom:10px;
}

.date{
 color:#777;
 font-size:14px;
 margin-bottom:20px;
}

.desc{
 font-size:16px;
 line-height:1.8;
 color:#333;
 white-space:pre-line;
}

/* MOBILE */

@media(max-width:600px){
 .container{
  margin:15px;
  padding:20px;
 }
}

</style>

</head>
<body>

<!-- HEADER -->

<div class="header">

 <div class="brand">
  <img src="assets/images/TVK.jpeg">
  <div class="brand-text">
   <h2>TECHVISION KNOWLEDGE POLYTECHNIC COLLEGE</h2>
  </div>
 </div>

 <a href="index.php" class="back-btn">← Back</a>

</div>

<!-- NOTICE CONTENT -->

<div class="container">

<?php if(!empty($row['image'])){ ?>
<img src="uploads/<?php echo $row['image']; ?>">
<?php } ?>

<h1 class="title"><?php echo $row['title']; ?></h1>

<div class="date">
📅 <?php echo date("d M Y", strtotime($row['notice_date'])); ?>
</div>

<p class="desc">
<?php echo nl2br($row['description']); ?>
</p>

</div>

</body>
</html>