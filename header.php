<style>

/* ===== HEADER GLOBAL ===== */

.header-main{
background:white;
box-shadow:0 8px 25px rgba(0,0,0,0.08);
position:sticky;
top:0;
z-index:999;
}

/* TOP BRAND AREA */

.brand-area{
display:flex;
align-items:center;
justify-content:space-between;
padding:15px 30px;
}

.brand-left{
display:flex;
align-items:center;
gap:15px;
}

.brand-logo{
width:65px;
height:65px;
border-radius:50%;
border:3px solid #2563eb;
box-shadow:0 0 15px rgba(37,99,235,0.4);
object-fit:cover;
}

.brand-text h1{
font-size:22px;
font-weight:700;
color:#1e40af;
letter-spacing:1px;
}

.brand-text p{
font-size:12px;
color:#555;
}

/* NAVBAR */

.navbar{
background:linear-gradient(135deg,#1e40af,#2563eb);
padding:12px 30px;
}

.navbar ul{
display:flex;
list-style:none;
gap:25px;
justify-content:center;
flex-wrap:wrap;
}

.navbar a{
color:white;
text-decoration:none;
font-weight:500;
padding:8px 15px;
border-radius:25px;
transition:.3s;
}

.navbar a:hover{
background:rgba(255,255,255,0.2);
}

/* ACTIVE LINK */

.active{
background:white;
color:#2563eb !important;
}

/* MOBILE */

@media(max-width:768px){

.brand-area{
flex-direction:column;
text-align:center;
}

.navbar ul{
gap:12px;
}

.brand-text h1{
font-size:18px;
}

}

</style>

<!-- HEADER -->

<div class="header-main">

<!-- BRAND -->

<div class="brand-area">

<div class="brand-left">

<img src="assets/images/TVK.jpeg" class="brand-logo">

<div class="brand-text">
<h1>TECHVISION KNOWLEDGE</h1>
<p>POLYTECHNIC COLLEGE</p>
</div>

</div>

</div>

<!-- MENU -->

<div class="navbar">
<ul>

<li><a href="index.php">Home</a></li>
<li><a href="profile.php">College Profile</a></li>
<li><a href="activities.php">Activities</a></li>
<li><a href="department.php">Departments</a></li>
<li><a href="studentcorner.php">Student Corner</a></li>
<li><a href="index.php#notices">Notices</a></li>

</ul>
</div>

</div>