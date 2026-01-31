<style>

/* PREMIUM FOOTER */

footer{
background:linear-gradient(135deg,#0f172a,#1e3a8a);
color:white;
padding:50px 20px 0;
margin-top:60px;
}

/* GRID */

.footer-grid{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:30px;
}

/* FOOTER CARD */

.footer-box{
background:rgba(255,255,255,0.08);
backdrop-filter:blur(10px);
border-radius:16px;
padding:20px;
box-shadow:0 8px 25px rgba(0,0,0,0.25);
transition:.3s;
}

.footer-box:hover{
transform:translateY(-8px);
}

/* TITLE */

.footer-box h3{
margin-bottom:12px;
color:#60a5fa;
font-size:18px;
}

/* TEXT */

.footer-box p{
font-size:14px;
opacity:.9;
margin-bottom:8px;
cursor:pointer;
}

.footer-box p:hover{
color:#93c5fd;
}

/* MAP */

.footer-map iframe{
border-radius:12px;
}

/* BOTTOM BAR */

.bottom-bar{
margin-top:35px;
padding:15px;
text-align:center;
background:rgba(0,0,0,0.3);
font-size:14px;
letter-spacing:.5px;
}

/* MOBILE */

@media(max-width:600px){

footer{
text-align:center;
}

}

</style>


<footer>

<div class="footer-grid">

<!-- QUICK LINKS -->

<div class="footer-box">
<h3>🔗 Quick Links</h3>
<p>University Portal</p>
<p>Exam Results</p>
<p>UGC</p>
<p>AICTE</p>
</div>

<!-- CONTACT -->

<div class="footer-box">
<h3>📞 Contact Us</h3>
<p>📍 Coimbatore, Tamil Nadu</p>
<p>📱 +91 9876543210</p>
<p>✉ techvision@email.com</p>
</div>

<!-- MAP -->

<div class="footer-box footer-map">
<h3>📍 Campus Location</h3>

<iframe 
src="https://maps.google.com/maps?q=college&t=&z=15&ie=UTF8&iwloc=&output=embed"
width="100%" height="180" style="border:0;">
</iframe>

</div>

</div>

<div class="bottom-bar">
© <?php echo date("Y"); ?> TechVision Knowledge Polytechnic College | All Rights Reserved
</div>

</footer>