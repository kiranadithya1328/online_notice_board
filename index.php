<?php
include("config.php");

$result = mysqli_query($conn,"SELECT * FROM notices ORDER BY notice_date DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>TechVision Knowledge Polytechnic College</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>

*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}

body{
background:#f4f7fb;
}

/* HEADER */

.header{
background:white;
padding:20px 40px;
box-shadow:0 6px 20px rgba(0,0,0,0.1);
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
width:70px;
height:70px;
border-radius:50%;
border:4px solid #2563eb;
}

.brand-text h1{
font-size:24px;
color:#1e40af;
}

.brand-text p{
font-size:12px;
color:#555;
}

.nav a{
margin-left:20px;
text-decoration:none;
color:#333;
font-weight:600;
}

/* HERO */

.hero{
background:linear-gradient(135deg,#2563eb,#1e3a8a);
padding:70px;
text-align:center;
color:white;
}

.hero h1{
font-size:42px;
margin-bottom:10px;
}

.hero a{
display:inline-block;
margin-top:20px;
padding:12px 25px;
background:white;
color:#2563eb;
border-radius:30px;
text-decoration:none;
font-weight:600;
}

/* NOTICE GRID */

.container{
padding:40px;
}

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:20px;
}

.card{
background:white;
border-radius:15px;
overflow:hidden;
box-shadow:0 10px 20px rgba(0,0,0,0.1);
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
}

.card img{
width:100%;
height:180px;
object-fit:cover;
}

.card-body{
padding:15px;
}

.card h3{
color:#2563eb;
}

/* FOOTER */

.footer{
background:#0f172a;
color:white;
text-align:center;
padding:20px;
margin-top:40px;
}

/* ADMIN BUTTON */

.admin-btn{
position:fixed;
bottom:20px;
right:20px;
background:#2563eb;
color:white;
padding:14px 22px;
border-radius:40px;
text-decoration:none;
box-shadow:0 10px 25px rgba(37,99,235,.6);
}

.card{
 opacity:0;
 transform:translateY(40px);
 animation:fadeUp .6s ease forwards;
}

@keyframes fadeUp{
 to{
  opacity:1;
  transform:translateY(0);
 }
}

/* MODAL POPUP */

.modal{
  display:none;
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.6);
  backdrop-filter:blur(6px);
  z-index:9999;
}

.modal-content{
  background:white;
  width:90%;
  max-width:500px;
  margin:80px auto;
  padding:20px;
  border-radius:18px;
  animation:zoom 0.3s ease;
}

@keyframes zoom{
  from{transform:scale(0.8);}
  to{transform:scale(1);}
}

.modal-content img{
  width:100%;
  border-radius:12px;
  margin-bottom:10px;
}

.close-btn{
  float:right;
  font-size:22px;
  cursor:pointer;
}
</style>

</head>
<body>

<!-- HEADER -->

<div class="header">

<div class="brand">
<img src="assets/images/TVK.jpeg">
<div class="brand-text">
<h1>TECHVISION KNOWLEDGE POLYTECHNIC COLLEGE</h1>
<p>Digital Smart Campus</p>
</div>
</div>

<div class="nav">
<a href="index.php">Home</a>
<a href="profile.php">college profile</a>
<a href="activities.php">Activities</a>
<a href="department.php">Departments</a>
<a href="studentcorner.php">Student Corner</a>
</div>

</div>

<!-- HERO -->

<div class="hero">
<h1>Digital College Notice Board</h1>
<p>Latest Academic & Campus Updates</p>
<a href="#notices">View Notices</a>
</div>

<!-- NOTICES -->

<div class="container" id="notices">

<div class="grid">

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<a href="./view_notice.php?id=<?php echo $row['id']; ?>">

<div class="card">

<?php if(!empty($row['image'])){ ?>
<img src="uploads/<?php echo $row['image']; ?>">
<?php } ?>

<div class="card-body">
<h3><?php echo $row['title']; ?></h3>
<p><?php echo substr($row['description'],0,100); ?>...</p>
</div>

</div>

</a>
<?php } ?>

</div>

</div>
<?php include("footer.php"); ?>

<!-- FOOTER -->



<a href="admin/login.php" class="admin-btn">Admin Panel</a>
<script>
let deferredPrompt;

window.addEventListener("beforeinstallprompt", (e) => {
 e.preventDefault();
 deferredPrompt = e;

 let btn = document.createElement("button");
 btn.innerHTML = "📲 Install App";
 btn.style.position="fixed";
 btn.style.bottom="90px";
 btn.style.right="20px";
 btn.style.padding="12px 20px";
 btn.style.borderRadius="25px";
 btn.style.border="none";
 btn.style.background="#2563eb";
 btn.style.color="white";
 btn.style.fontWeight="bold";
 btn.style.boxShadow="0 10px 20px rgba(0,0,0,.3)";

 document.body.appendChild(btn);

 btn.addEventListener("click",()=>{
  deferredPrompt.prompt();
  deferredPrompt=null;
  btn.remove();
 });
});
</script>
<!-- NOTICE POPUP MODAL -->
</body>
</html>
