<?php
header('Content-type: text/css; charset:UTF-8');

?>
@import url('https://fonts.googleapis.com/css2?family=Macondo&display=swap');



.container {
height: fit-content;
}

.content .tab {
display: none;
}

.tab.active {
display: block;
}

.content {
width: 100%;
display: flex;
justify-content: center;
align-items: center;
}

.file {
width: 100%;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
font-family: 'Roboto Slab', serif;
}

main {
position: relative;

}

header {
position: relative;
min-width: 100%;
z-index: 1;
}



header div {
position: relative;
display: flex;
flex-direction: row;
justify-content: space-between;
width: 100%;
overflow: hidden;
gap: 50px;
overflow-x: scroll;
}

header div button {
<!--Esto es cuando no esta 
    dado clic al boton de plato-->
font-family: 'Macondo', cursive;
border-radius: 15px;
text-transform: uppercase;
font-size: 15px;
min-width: fit-content;
border: none;
margin: 15px;
}


img:hover {
transform: scale(1.2);
}

[data-tab-target].active {
<!--Esto es cuando 
    damos clic al boton de plato-->
position: relative;
border: 3px solid yellow;
border-top-style: none;
border-left-style: none;
border-right-style: none;
background-color: greenyellow;

}



h1,
h2,
h3,
h4,
h5 {
width: 100%;
display: flex;
justify-content: center;
align-items: center;
margin: 20px;
}

.container_detail_Menu_niños {
position: relative;
display: flex;
flex-direction: row;
justify-content: space-between;
align-items: center;
gap: 50px;
}

body {
overflow: hidden;
overflow-y: scroll;
margin: 2px;
display: flex;
flex-direction: column;
gap: 20px;
background-image: linear-gradient(to right top, #dde8eb, #8fcbe8, #3baaed, #0084ed, #0d56e0);

}



::-webkit-scrollbar {
background-color: transparent;

}


::-webkit-scrollbar-button {

width: 20px;
}

::-webkit-scrollbar-thumb {
width: 20px;
border-radius: 20px;
background-image: linear-gradient(to right top, #dde8eb, #8fcbe8, #3baaed, #0084ed, #0d56e0);

}

.empty {
position: relative;
margin-top: 100vh;
height: 200vh;
}

footer {
position: sticky;
bottom: 0;
}

footer .footer-container {
width: 100%;
background-color: rgb(255, 255, 255);
}

footer a {
text-decoration: none;
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
}

.nav-manu .copy span {
text-align: center;
width: 100%;

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

footer .waves {
position: relative;
top: 0;
}

.wave {
width: 100%;
height: 100px;
position: absolute;
}

.wave#wave1 {

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

.wave#wave2 {

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

.wave#wave3 {

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