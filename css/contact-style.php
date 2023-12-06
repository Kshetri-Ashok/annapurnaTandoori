<?php


header('Content-type: text/css; charset:UTF-8');


?>
* {
box-sizing: border-box;
}

html, body {
margin: 0;
padding: 0;

}

header {
position: sticky;
top: 0;
z-index: 10000;
min-height: 100px;
box-shadow: 0px 3px 14px black;
background-color: rgba(255, 255, 255, 0.5);
}

body {
background-color: #3c74ec;
}

header hr {
border: 1px solid black;
}


main .Company-details {
backdrop-filter: blur(0.76px);
margin: 20px;
/* border: 1px solid red; */
min-height: 500px;
background-color: rgba(255, 255, 255, 0.2);
display: grid;
grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
border: 1px solid rgba(225, 255, 255, 0.2);
border-radius: 20px;
box-shadow: 2px 5px 10px black;
}

.Company-details>div {
margin: 10px;
min-height: 200px;
border-radius: 20px;
box-shadow: 0px 3px 14px black;


}

.Company-details>div:nth-child(even) {
background-image: linear-gradient(to left bottom, #3586ff, #286bce, #1d529f, #133a72, #0a2348);
}

.Company-details>div:nth-child(odd) {
background-image: linear-gradient(to right top, #3586ff, #1d67c1, #124986, #102d4e, #09111d);

}

.Company-details>div {
padding: 20px;
}

.address .address-svg {
display: grid;
grid-template-rows: repeat(auto-fit, minmax(100px, 1fr));

}



.phone-svg {
display: grid;
place-content: center;

}

.phone-details, .address-details {
width: 100%;
/* border: 1px solid yellow; */
display: grid;
place-content: center;
gap: 3px;
}

.phone-details .Email, .phone-details .phone {
/* border: 1px solid red; */
min-width: 100px;
height: 50px;

}

::-webkit-scrollbar {
width: 2px;


}

::-webkit-scrollbar-thumb {

background: linear-gradient(transparent, #1f2835);
border-radius: 20px;
}

::-webkit-scrollbar-thumb:hover {

background: linear-gradient(transparent, #aabacf);
border-radius: 20px;
}

::-webkit-scrollbar-button {
background-color: red;
}

@media (min-width:890px) {
.phone-details span, .address-details span {
color: aqua;
font-family: 'Tangerine';
font-size: 40px;
}

}

.address-svg svg:hover {
cursor: progress;
}

@media (max-width:890px) {
.phone-details span, .address-details span {
color: aqua;
font-family: 'Tangerine';
font-size: 25px;
}
}

@media (max-width:324px) {
.phone-details span, .address-details span {
color: aqua;

font-family: 'Courier New', Courier, monospace;
font-size: 11px;
}

}


.address-svg {
display: grid;
place-content: center;

}


svg {
width: 150px;
height: 150px;
}

.empty-address span {
font-size: 20px;
}




footer {
position: sticky;
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

@media (max-width:388px) {
.Menu-Navigation .Menu-list a {
text-decoration: none;
font-size: 12px;
text-transform: uppercase;
}

.copy span {
font-size: 12px;
text-transform: uppercase;
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