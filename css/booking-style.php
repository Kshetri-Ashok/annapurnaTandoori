<?php


header('Content-type: text/css; charset:UTF-8');
?>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css?family=Arapey');

body {
font-family: 'Arapey';
background-color: #3586ff;


}

header {
position: fixed;
background-color: white;
box-shadow: 1px 5px 20px black;
width: 100%;
padding: 20px;
z-index: 20000;
}

.empty {
height: 20vh;

}

.session-details {
display: flex;
justify-content: center;
}

.alert-info:hover {
background-color: rgba(7, 73, 149, 0.35);
transition: 0.5s;
}


.alert-simple.alert-warning {
border: 1px solid rgba(241, 142, 6, 0.81);
background-color: rgba(220, 128, 1, 0.16);
box-shadow: 0px 0px 2px #ffb103;
color: #ffb103;
text-shadow: 2px 1px #00040a;
transition: 0.5s;
cursor: pointer;
}

.alert-warning:hover {
background-color: red;
transition: 0.5s;
}

.fa-times {
-webkit-animation: blink-1 2s infinite both;
animation: blink-1 2s infinite both;
}



@-webkit-keyframes blink-1 {

0%,
50%,
100% {
opacity: 1;
}

25%,
75% {
opacity: 0;
}
}

@keyframes blink-1 {

0%,
50%,
100% {
opacity: 1;
}

25%,
75% {
opacity: 0;
}
}

.active_Trigger {
background-color: black;
}

section {
height: 100vh;
position: relative;
box-sizing: border-box;


}

section:nth-child(1) {
position: relative;
height: 100vh;


}

section:nth-child(2) {

position: relative;
height: 100vh;
z-index: 200;

}


section img {
position: absolute;
width: 100%;
height: 100vh;
object-fit: cover;
}

img:nth-child(1) {

top: 100px;
z-index: 2;
width: 300px;
height: 300px;
}

.active_Trigger {
overflow: hidden;

}

img:nth-child(2) {
z-index: 3;

}

img:nth-child(3) {
z-index: 1;
}





.sticky {
background: white !important;
}

.percentage {
position: absolute;
bottom: 10px;
left: 10px;
}

.reserva-section {
width: 100%;
height: 100vh;
display: flex;
justify-content: center;
align-items: center;

}

.body {
display: flex;
justify-content: center;
align-items: center;
padding: 10px;
background: linear-gradient(135deg, #71b7e6, #9b59b6);
}

.container {
max-width: 700px;
width: 100%;
height:300px;
background-color: rgba(0, 0, 0, 0.15);
padding: 25px 30px;
border-radius: 5px;
box-shadow: 0 5px 14px rgba(0, 0, 0, 0.15);
margin-bottom: 200px;
position: relative;
z-index: 1000;

}
a{
color:black;
}


header img {
width: 20px;
}

a:visited {
color: red;
}




.container .title {
font-size: 25px;
font-weight: 500;
position: relative;
}

.container .title::before {
content: "";
position: absolute;
left: 0;
bottom: 0;
height: 3px;
width: 90px;
border-radius: 5px;
background: linear-gradient(135deg, #71b7e6, #9b59b6);
}










svg {
height: 100px;
width: 100px;
float: right;
}






.Menu-list:hover {
font-size: 20px;
}

i {
transition: transform;
transition-duration: 1s;
transition-timing-function: ease-in-out;
}

i:hover {
transform: translateY(-13px);
}

.main-Menu {
min-height: 200px;

}



footer {
position: fixed;
bottom: 0;
left: 0;
width: 100%;
margin-top: 200px;
}

footer .footer-container {
width: 100%;
background-color: rgb(255, 255, 255);
}

footer a {
color: red;
}

footer .nav-social {
display: grid;
place-content: center;
bottom: 0;
}

footer .nav-menu {
display: grid;
place-content: center;
bottom: 0;
}

footer .nav-social .social-media {
display: inline-block;
padding-left: 20px;
}

.nav-manu .copy {
display: grid;
place-content: center;
min-height: 100px;
border: 3px solid red;
}

.nav-manu .copy span {
text-align: center;
width: 100%;
border: 2px solid red;

}


.Menu-Navigation .Menu-list {
position: relative;
display: inline-block;
padding-left: 20px;
}

.copy>span {
position: relative;
left: 90px;
color: red;
}

.waves {
position: relative;
top: 0;
}

.wave {
width: 100%;
height: 100px;
position: absolute;
}

#wave1 {

background: url(../images/wave.png);
background-size: 1000px 100px;
bottom: 0px;
animation: wave_1 2s linear infinite;
}

@keyframes wave_1 {

0% {
background-position-x: 0px
}

100% {
background-position-x: 1000px;
}
}

#wave2 {

background: url(../images/wave.png);
background-size: 1000px 100px;
bottom: 10px;
opacity: 0.8;
animation: wave_2 1s linear infinite;
}

@keyframes wave_2 {

0% {
background-position-x: 0px
}

100% {
background-position-x: 1000px;
}
}

#wave3 {

background: url(../images/wave.png);
background-size: 1000px 100px;
bottom: 19px;
opacity: 0.3;
animation: wave_3 0.8s linear infinite;
}

@keyframes wave_3 {

0% {
background-position-x: 0px
}

100% {
background-position-x: 1000px;
}
}

.Menu-Navigation .Menu-list a {
text-decoration: none;
text-transform: uppercase;
}

.copy span {
text-transform: uppercase;
}



a:before {
content: "";
position: absolute;
bottom: 0;
height: 2px;
width: 0px;
border-radius: 5px;
background: linear-gradient(135deg, #71b7e6, #9b59b6);
transition: 2s;
}


.Menu-list a:before {
left: 21px;
}

.Menu-list a:hover:before {
width: 100%;
}



@media (max-width:388px) {
.Menu-Navigation .Menu-list a {
text-decoration: none;
font-size: 12px;
text-transform: uppercase;
}

.wave {
width: 100%;
height: 80px;
position: absolute;
}


footer {
height: 100px;
}

.copy span {
font-size: 12px;
text-transform: uppercase;
}

.copy>span {
position: relative;
left: 70px;
color: red;
}






}

@media (max-width:320px) {
.Menu-Navigation .Menu-list a {
text-decoration: none;
font-size: 10px;
text-transform: uppercase;
}

.copy span {
font-size: 11px;
text-transform: uppercase;
}

}