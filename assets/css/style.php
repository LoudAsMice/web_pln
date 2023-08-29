
<style type="text/css">

@import "https://fonts.googleapis.com/css?family=Montserrat:400,700";
@import "https://fonts.googleapis.com/css?family=Philosopher";
@import "https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800";
@import "https://fonts.googleapis.com/css?family=Roboto:300,400,700,800";
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
font,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent
}

body {
    line-height: 1;
    text-align: left
}

ol,
ul {
    list-style: none
}

blockquote,
q {
    quotes: none
}

blockquote:before,
blockquote:after,
q:before,
q:after {
    content: '';
    content: none
}

:focus {
    outline: 0
}

ins {
    text-decoration: none
}

del {
    text-decoration: line-through
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

a {
    text-decoration: none
}

body {
    font: 14px 'Open Sans', Geneva, "Times New Roman", times;
}



.clear:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden
}

.left {
    float: left
}

.right {
    float: right
}

.wrapper {
    width: 100%;
    margin: 0 auto 0;
    padding: 0;
    position: relative;
    z-index: 2;
    background: #fff;
}

.boxed {
    max-width: 1170px;
    position: relative;
    margin: 0 auto;
    overflow: hidden;
    box-shadow: 0 0 15px #bbb;
}

#container {
    padding: 0px
}

.dmaps {
    padding: 1px 0 0 0;
}

.maschol {
    overflow: hidden;
    padding: 20px;
}

.maschol .scname {
    margin-right: 380px;
    float: left
}

.maschol h2 {
    font: bold 35px Montserrat;
    letter-spacing: -2px;
}

.maschol h2:before {
    content: '';
    height: 5px;
    width: 160px;
    display: block;
}

.breaks {
    height: 200px;
}

.logo {
    padding: 10px;
    overflow: hidden;
    float: left
}

.logo img {
    height: auto;
    max-height: 60px;
    display: block;
}

.boxed .logo img {
    height: auto;
    max-height: 50px;
}

.massos {
    width: 320px;
    padding: 0;
    overflow: hidden;
    position: absolute;
    right: 20px;
    margin-top: 5px;
}

.massos .kontak {
    padding: 0;
    text-align: center
}

.kontak .fa {
    height: 40px;
    width: 40px;
    line-height: 40px;
    border-radius: 30px;
    text-align: center;
    margin: 0;
    font-size: 25px;
    transition: all .5s ease .1s
}

.fsearch.fa {
    position: absolute;
    top: 25px;
    right: 20px;
    z-index: 500;
    height: 30px;
    width: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    display: block
}

.boxed .fsearch.fa {
    top: 18px;
}

.fmenu.fa {
    position: absolute;
    bottom: 23px;
    right: 60px;
    z-index: 500;
    height: 30px;
    width: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 16px;
    cursor: pointer;
    display: none
}

.masearch {
    width: 333px;
    top: 75px;
    right: 10px;
    position: absolute;
    z-index: 500;
    display: none;
    padding: 8px;
}

.boxed .masearch {
    top: 65px;
}

.search_form:after {
    content: '';
    position: absolute;
    right: 10px;
    top: -18px;
    width: 0;
    height: 0;
    margin: 0;
    border-right: 9px solid transparent;
    border-left: 9px solid transparent;
    clear: both;
}

.search_form {
    width: 335px;
    margin: 0;
    height: 30px;
    position: relative;
}

.search_form fieldset {
    width: 335px;
    height: 30px
}

.search_form input {
    width: 140px;
    height: 30px;
    float: left;
    border: none;
    padding: 0 8px;
    margin: 0 3px 0 0;
    font: 13px 'Montserrat', Geneva, "Times New Roman", times;
    vertical-align: middle
}

.divsel {
    float: left;
    width: 140px;
    height: 30px;
    padding: 0;
    margin: 0 3px 0 0;
    overflow: hidden;
}

.search_form select {
    width: 160px;
    height: 30px;
    border: none;
    padding: 0 8px;
    font: 13px 'Montserrat', Geneva, "Times New Roman", times;
    vertical-align: middle
}

.search_form option {
    padding: 4px 8px;
}

.search_form button {
    width: 30px;
    height: 30px;
    cursor: pointer;
    border: none;
    vertical-align: middle
}

.breadcrumbs {
    padding: 40px 30px;
    font-size: 15px;
    font-family: 'Open Sans', 'Arial';
    text-align: center;
}

.breadcrumbs a {
    font-weight: bold
}

.nav-mading {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 0 10px #555;
}

.boxed .nav-mading {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    max-width: 1170px;
    margin: 0 auto;
    z-index: 1000
}

.customize-support .nav-mading {
    top: 32px
}

.nav-inn {
    width: auto;
    height: 115px;
    margin: 0 auto;
    position: relative;
}

.nav-inn.fade {
   height: 80px;
}

.boxed .nav-inn {
   height: 105px;
}

.boxed .nav-inn.fade {
   height: 70px;
}


.inn {
    width: 100%;
    position: relative;
    float: left
}

.nav {
    max-width: 1200px;
    margin: 0 auto;
}

.boxed .nav {
    max-width: 1000px;
    margin: 0 auto;
}

.nav .dd {
    height: 80px
}

.boxed .nav .dd {
    height: 70px
}

.nav .dd li {
    float: left;
    display: block;
    margin: 0;
    text-align: center;
    font-size: 14px;
    line-height: 80px;
    position: relative
}

.boxed .nav .dd li {
    font-size: 14px;
    line-height: 70px;
}

.nav .dd li:after {
    content: '';
    position: absolute;
    right: 0;
    top: 50%;
    width: 0;
    height: 0;
    margin: -4px -3px 0 0;
    border-bottom: 4px solid transparent;
    border-top: 4px solid transparent;
    clear: both
}

.nav .dd li a {
    text-decoration: none;
    font-weight: bold;
    display: block;
    margin: 0;
    padding: 0 20px;
    font: 400 14px/80px Montserrat;
    white-space: nowrap;
}

.boxed .nav .dd li a {
    padding: 0 15px;
    font: 400 14px/70px Montserrat;
}

.nav .dd li a:hover {
    text-decoration: none
}

.nav .dd li ul {
    position: absolute;
    padding: 0;
    display: none;
    z-index: 100;
    min-width: 150px;
    width: auto;
}

.nav .dd li:hover ul.sub-menu {
    display: block
}

.sub-menu:after {
    content: '';
    position: absolute;
    left: 20%;
    top: -6px;
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    clear: both
}

.nav .dd li ul li {
    float: none;
    position: relative;
    display: block;
    border: none;
    font: 300 13px/34px Montserrat;
    text-align: left;
    margin: 0;
    padding: 0
}

.boxed .nav .dd li ul li{
    font: 300 13px/34px Montserrat;
}

.boxed .nav .dd li ul li a {
    padding: 0 15px;
    font: 300 13px/34px Montserrat;
}

.nav .dd li ul li:after {
    display: none;
}

.nav .dd li ul li a {
    display: inline;
    margin: 0 !important;
    font: 400 13px/34px Montserrat;
    padding: 0 15px;
    white-space: nowrap;
}

.nav .dd li ul li ul {
    position: absolute;
    display: none ! important;
    left: 100%;
    top: 0
}

.nav .dd li ul li ul.sub-menu:after {
    content: '';
    position: absolute;
    left: 0;
    top: 12px;
    width: 0;
    height: 0;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    clear: both
}

.nav .dd li ul li:hover ul {
    display: block ! important
}

.nav .dd li ul li ul li ul,
.nav .dd li ul li:hover ul li ul {
    position: absolute;
    display: none ! important;
    left: 100%;
    top: 0
}

.nav .dd li ul li ul li:hover ul {
    display: block ! important
}

.nav a.dd_hover:hover {
    text-decoration: none !important
}

.nav .submenu a:hover {
    text-decoration: underline
}

.nav .dd li.parent a {
    margin: 0 8px;
    padding-right: 14px;
}

.nav .dd li.parent a.dd_hover {
    margin: 0 8px;
    padding-right: 14px;
    padding-bottom: 10px
}

.mob {
    display: none
}

input[type=text].wpcf7-form-control,
input[type=email] {
    width: 94%;
    padding: 5px 15px;
    margin: 3px 0;
}

input[type=submit] {
    border: 0;
    padding: 5px 15px;
    font: 700 14px 'Open Sans';
}

#ndeslide {
    padding: 0;
    overflow: hidden;
}

.singslide {
    opacity: 0;
}

.singslide img {
    display: block;
    width: 100%;
    height: auto;
}

.slideshow {
    height: auto;
    width: 100%;
    overflow: hidden;
    position: relative;
    margin: 35px 0 0 0;
    z-index: 1;
    min-height: 200px;
}

.owl-carousel .owl-item img {
    height: auto;
}

.sloverlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 200;
    padding: 0;
}

.madinn {
    padding: 10px;
}

h1.acent {
    text-align: center;
}

h1.acent span {
    font: 700 200px/200px 'Montserrat';
}

.post-content.acent {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    font-size: 16px ! important;
}

.content {
    width: 66.666%;
    float: left;
    margin: 0
}

.mabaru {
    padding: 6px 6px 12px;
}

.mabaru .barulev {
    width: 50%;
    float: left;
    height: 304px;
    overflow: hidden;
    position: relative;
}

.barulev .abspan {
    display: inline;
    position: absolute;
    top: 15px;
    left: 15px;
    z-index: 15;
    height: 25px;
    padding: 0 8px;
    font: bold 13px/25px Montserrat;
}

.barulev .singlev {
    margin: 6px;
    overflow: hidden;
}

.singlev .singcoim {
    position: relative;
    height: 304px;
}

.singlev .singcoim img {
    width: 100%;
    height: auto;
    display: block;
}

.singlev .singcoim img {
    width: 110%;
}

.singlev .coverlay {
    position: absolute;
    left: 15px;
    right: 20px;
    bottom: 15px;
    z-index: 10;
    font: 12px Montserrat;
}

.coverlay h3 {
    font: 300 15px/1.3 Montserrat;
}

.ccovlay {
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9));
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: 5;
}

.gtk .ccovlay {
    top: 50%;
}

.bcovlay {
    background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0));
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    z-index: 5;
}

.barurg {
    float: right;
    width: 50%;
    height: 304px;
    overflow: hidden;
}

.barurg .secoim {
    position: relative;
    padding: 0px;
    height: 150px;
    overflow: hidden;
    margin: 6px;
}

.secoim img {
    width: 100%;
    height: auto;
    display: block;
}

.secoim .seccon {
    position: absolute;
    left: 15px;
    right: 20px;
    bottom: 15px;
    z-index: 10;
    color: #fff;
    font: 12px Montserrat;
}

.seccon h3 {
    font: 300 15px/1.3 Montserrat;
}

.barurg .twolas {
    height: 150px;
    overflow: hidden;
    width: 50%;
    float: left;
}

.twolas img {
    width: 100%;
    height: auto;
    display: block;
}

.twolas-rl {
    margin: 6px;
    position: relative;
    height: 142px;
    overflow: hidden;
}

.twocon {
    position: absolute;
    left: 15px;
    right: 20px;
    bottom: 15px;
    z-index: 10;
    font: 12px Montserrat;
}

.twocon h3 {
    font: 300 13px/1.3 Montserrat;
}


/* editorial kepala */

.rcon {
    width: 33.3333%;
    float: right;
}

.rconbg {
    height: 300px;
    margin: 12px 12px 8px 0;
    position: relative;
}

.editoz {
    height: 300px;
    position: relative;
    overflow: hidden;
}

.editoz .edspan {
    display: inline;
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 15;
    height: 25px;
    padding: 0 8px;
    font: bold 13px/25px Montserrat;
}

.editoz img {
    float: left;
    height: 300px;
    width: 100%;
    margin: 0 15px 0 0;
}

.editoz .corner {
    position: relative;
    margin: 10px 10px 0 0;
    font: 300 12px Montserrat;
    padding: 0 10px;
}

.corner h3:after {
    content: '';
    position: absolute;
    top: 4px;
    right: 0px;
    border-bottom: 9px solid transparent;
    border-top: 0;
    clear: both;
}

.edbot {
    position: absolute; 
    right: 15px; 
    bottom: 15px; 
    height: 25px; 
    width: auto; 
    padding: 0 8px;
    font: 13px/25px Montserrat;
}


/* secblock */

.secblock {}

.secblock .pead {
    padding: 12px;
}

.peaduo {
    width: 25%;
}

.hleft {
    float: left;
}

.hright {
    float: right;
}

.peaduo h3.fopen {
    margin: 6px 6px 15px;
    font: bold 30px/40px Montserrat;
    letter-spacing: -3px;
}

.peaduo h3.fopen:before {
    content: '';
    height: 3px;
    width: 70px;
    display: block;
}

.guruloop h3.fopen {
    margin: 6px 6px 25px;
    font: bold 30px/40px Montserrat;
    letter-spacing: -3px;
    text-align: center;
}

.guruloop h3.fopen:before {
    content: '';
    height: 3px;
    width: 70px;
    margin: 0 auto;
    display: block;
}

.six-info {
    margin: 0;
    display: block;
    position: relative;
}

.six-info.no-one {
    margin: 0;
    padding: 10px;
    display: block;
    border-top: 1px solid #eee;
}

.six-info.no-one .metas {
    font: 400 12px/12px 'Open Sans';
    margin: 0 0 8px;
}

.top-post {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 10;
    padding: 50px 0 10px;
}

.six-info .pealink {
    width: 100%;
    float: none;
    padding: 0;
    margin: 0;
    display: block;
}

.six-info.no-one .pealink {
    width: 30%;
    float: left;
    padding: 0 15px 0 0;
    margin: 0;
    display: inline;
}

.boxed .six-info .pealink {
    width: 100%;
}

.boxed .six-info.no-one .pealink {
    width: 30%;
}

.six-info img {
    width: 100%;
    height: auto;
    display: block;
}

.six-info.n-one .metas {
    font: 400 13px/1.1 'Open Sans';
    padding: 6px 10px;
}

.boxed .six-info.n-one .metas {
    font: 400 13px/1.1 'Open Sans';
    padding: 6px 10px;
}

.six-info h3 {
    padding: 0 10px;
    font: 700 14px/1.3 'Open Sans';
    min-height: 36px;
}

.six-info h3 a {
    font: 400 14px/1.3 'Open Sans';
}

.six-info.no-one h3 { 
    margin: 0 0 0 30%;
    padding: 0 10px 0 15px;
}

.boxed .six-info h3 {
    font: 400 13px/1.3 'Open Sans';
}

.boxed .six-info h3 a {
    font: 400 13px/1.3 'Open Sans';
}

.homloop {
    padding: 0;
    margin: 6px;
    background: #f7f7f7;
}

.readmore { 
    padding: 10px; 
    text-align: center; 
    border-top: 1px solid #eee;
}

.readmore a {
    display: inline-block;
    padding: 0 8px; 
    height:30px; 
    line-height: 30px; 
    font-weight: bold;
}

.parallax {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.dealpar {
    background-image: url("images/school.jpg");
}

.dealay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 3;
}

.overage {
    height: auto;
    padding: 50px 0 100px;
    text-align: center;
    overflow: hidden;
    color: #ddd;
}

.overage h4 {
    position: relative;
    z-index: 10;
    font: bold 30px Montserrat;
    letter-spacing: -3px;
    text-align: center;
    margin: 0 0 50px;
}

.overage .age-info .agedate {
    font: 800 130px/1.15 'Open Sans';
    letter-spacing: -5px;
}

.overage .agloop .age-info {
    width: 150px;
}

.overage .agloop .age-info {
    margin: 0 25px 20px 0;
}

.overage .age-info .agemon {
    font: 800 16px/16px 'Montserrat';
}

.overage .agloop {
    max-width: 600px;
    margin: 0 auto;
}

.overage .atime {
    text-align: left;
    display: block;
    padding: 0 0 50px;
    border-bottom: 1px dashed #aaa;
}

.overage #clockdiv {
    margin: 50px auto 0;
}

.overage .days, 
.overage .hours, 
.overage .minutes, 
.overage .seconds {
    font: bold 30px Montserrat;
    margin: 0 0 5px;
}

.overage  .atime h3 {
    font: bold 26px/1.1 Montserrat;
    margin-bottom: 15px;
}

.agloop {
    position: relative;
    z-index: 100;
}

.agloop .age-info {
    float: left;
    padding: 0 15px 0 0;
    margin: 0 15px 20px 0;
    width: 70px;
    display: inline;
    letter-spacing: -3px;
    text-align: center;
}

.age-info .agedate {
    display: block;
    font: 800 50px/60px 'Montserrat';
}

.age-info .agemon {
    letter-spacing: 0px;
    display: block;
    font: 800 12px/16px 'Montserrat';
}

.atime .wakt {
    position: relative;
    display: inline-block;
    height: 24px;
    font: bold 13px/24px Montserrat;
    padding: 0 3px;
    margin: 0 0 8px 8px;
}

.atime .wakt:before {
    content: '';
    position: absolute;
    top: 0;
    left: -8px;
    border-top: 24px solid transparent;
    border-bottom: 0;
}

.atime .wakt:after {
    content: '';
    position: absolute;
    top: 0;
    right: -8px;
    border-bottom: 24px solid transparent;
    border-top: 0;
}

.atime h3 {
    font: bold 16px/20px Montserrat;
    margin-right: 40px
}

.boxed .atime h3 {
    font: bold 14px/18px Montserrat;
}

.galeria {
    padding: 12px;
}

.galeria .eight {
    width: 25%;
    float: left;
}

.eight img {
    width: 100%;
    height: auto;
    display: block;
}

.eiginn {
    position: relative;
    overflow: hidden;
}

.jamz {
    position: absolute;
    left: 20px;
    bottom: 2000px;
    right: 20px;
    z-index: 15;
    transition: all .5s ease .1s;
    text-align: center;
    font: 13px/30px Montserrat;
    text-transform: uppercase;
}

.eiginn:hover .jamz {
    bottom: 50%;
    transition: all .5s ease .1s;
}

.jamz:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 40px;
    margin-left: -20px;
}

.gspan {
    position: absolute;
    left: 20px;
    right: 20px;
    top: 2000px;
    z-index: 15;
    margin-top: 8px;
    transition: all .5s ease .1s;
    text-align: center;
    font: 15px Montserrat;
    text-transform: lowercase;
}

.eiginn:hover .gspan {
    top: 50%;
    transition: all .5s ease .1s;
}

.ovlay {
    transition: all .8s ease .1s;
    bottom: 50%;
    top: 50%;
    left: 50%;
    right: 50%;
}

.eiginn:hover .ovlay {
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    opacity: 0.8;
    z-index: 10;
    transition: all .3s ease .1s;
}

.maquotes {}

.maquotes .overback {
    padding: 50px 100px;
    text-align: center;
    overflow: hidden;
}

.overback h4 {
    font: bold 30px Montserrat;
    letter-spacing: -3px;
    text-align: center;
}

#quotes-slider {
    width: 100%;
    margin: 15px auto 0
}

#qslider {
    width: auto;
    margin: 100px auto;
    text-align: left;
    overflow: visible;
    position: relative;
    overflow: hidden
}

#qmask {
    overflow: hidden;
}

#qslider .post {
    font: italic 30px Philosopher;
    text-align: center;
}

.fasinn {
    margin-right: 40px;
}

.fasloop .fasil {
    width: 50%;
    float: left;
}

.fasil img {
    width: 100%;
    height: auto;
    display: block;
}

.guruloop {}

.guruloop .gurus {
    padding: 0 0 0 20px;
    margin: 0 0 25px 0;
    font: 13px 'Open Sans';
}

.boxed .guruloop .gurus {
    margin: 5px 0 10px 0;
}

.gurus img {
    width: 100%;
    height: auto;
    display: block;
}

.ngurus {
    position: relative;
    margin-bottom: 10px;
    height: 28px;
    padding: 0 10px;
    display: inline-block;
    font: bold 12px/28px Montserrat;
}

.ngurus:after {
    content: '';
    position: absolute;
    bottom: 0;
    right: -10px;
    clear: both;
    border-top: 0;
    border-bottom: 28px solid transparent;
}

.nik {
    margin-bottom: 10px;
}

.grthumb {
    width: 100px;
    height: 100px;
    overflow: hidden;
    border-radius: 80px;
    float: right;
    margin-right: 20px;
    box-shadow: 0 0 5px #ccc;
}

.gurus .fa {
    width: 20px;
    height: 20px;
    text-align: center;
    margin: 0 10px 4px 0;
    line-height: 20px
}

.dmaps #googleMap {
    width: 100%;
}

.full {
    width: 100%
}

.full iframe {
    height: 230px
}

iframe {
    margin-bottom: 20px
}

.list .post {
    padding: 20px 0 50px;
}

.podate {
    width: 200px;
    float: left;
    text-align: center;
}

.podate .ddays {
    width: 100px;
    height: 100px;
    margin: 0 auto 15px;
    font: 700 50px/70px 'Open Sans';
    border-radius: 70px;
    text-align: center;
    overflow: hidden;
    box-shadow: 0 0 10px #d7d7d7;
}

.podate .dtimes {
    font: 300 12px/10px 'Open Sans';
    text-transform: uppercase;
}

.podate .fa {
    width: 50px;
    height: 50px;
    margin: 0 auto;
    text-align: center;
    font-size: 50px;
}

.single.tops .podate .fep.fa {
    box-shadow: 0 0 0 #fff;
    font-size: 110px;
    width: auto;
    height: 130px;
    line-height: 130px;
}

.single .podate .ag.fa {
    box-shadow: 0 0 0 #fff; 
    font-size:110px; 
    width: auto; 
    height: 130px; 
    line-height: 130px;
}

.imagen {
    position: relative;
}

.imagen img {
    width: 100%;
}

.cogen {
    position: absolute; 
    top: 20px; 
    left: 20px; 
    right: 20px; 
    z-index: 10; 
    color: #fff ! important
}

.age-info {
    border-right: 1px solid #ddd; 
    margin-bottom: 50px;
}

.agedate {
    font-size:60px; 
    color: #fff 
}

.agemon {
    color: #fff
}

.cogen .wakt {
    margin-top:5px;
}

.cogen .titloc {
    color: #fff ! important; 
    font: 16px Montserrat;
    margin-left: 100px;
}

.titloc span {
    font: 11px Montserrat;
}

#clockdiv {
    text-align: center; 
    text-transform: lowercase; 
    font: 11px Montserrat; 
    width: 210px; 
    margin: 100px auto 0;
}

.expired {
   font: 16px Montserrat;
}

.unday, .unhour, .unminute, .unsecond {
    width: 50px; 
    margin: 0 1px; 
    float:left; 
    display: inline;
}

.days, .hours, .minutes, .seconds {
    font: bold 30px Montserrat;
    margin: 0 0 5px 
}

.podate .fa.ico {
    box-shadow: 0 0 10px #ddd;
    font-size: 70px;
    width: 100px;
    height: 100px;
    line-height: 100px;
    margin: 0 auto;
    border-radius: 80px;
}

.podate .fa.jag {
    box-shadow: 0 0 0 #fff;
    font-size: 110px;
    width: auto;
    height: 130px;
    line-height: 130px;
}

.podate .coms {
    position: relative
}

.coms .countcoms {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50px;
    margin-left: -25px;
    z-index: 10;
    line-height: 50px;
    font-weight: bold;
    font-size: 14px;
}

.share .fa {
    display: block;
    font-size: 25px;
    width: 45px;
    height: 45px;
    text-align: center;
    line-height: 45px;
    border-radius: 50px;
    color: #fff;
    margin: 5px auto 0;
    border: 8px solid #fff;
    box-shadow: 0 0 10px #ddd;
}

.rside {
    margin: 0 60px 40px 200px;
}

.rside .imgloop {
    position: relative;
    height: 250px;
    overflow: hidden;
    margin: 0 0 15px;
}

.imgloop img {
    width: 100%;
    height: auto;
}

.imgloop .post-category {
    position: absolute;
    top: 0px;
    left: 10px;
    z-index: 10;
}

.rltd {
    float: left;
    width: 50%;
    overflow: hidden;
    display: inline-block;
    margin: 0 0 8px;
}

.rltd .rely {
    position: relative;
    height: 200px;
    margin: 0 8px 0 0;
}

.rely img {
    display: block;
    width: 100%;
    height: auto;
}

.rel-meta {
    position: absolute;
    bottom: 10px;
    left: 15px;
    right: 15px;
    z-index: 20;
}

.rel-meta span {
    color: #fff;
    font: 11px Montserrat;
}

.rel-meta h3 {
    font: bold 14px/1.3 Montserrat;
}

.rel-meta h3 a {
    color: #fff;
}

.galoop {
    float: left;
    width: 33.333333%;
    position:relative;
    overflow: hidden;
}

.galoop .gtk {
    position: relative;
    overflow: hidden;
    margin: 4px;
}

.galoop img {
    display: block;
    width: 100%;
    height: auto;
    transition: .5s all ease .1s;
}

.galoop:hover img {
    transform: scale(1.2);
    transition: .5s all ease .1s;
}

.galoop .govlay {
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 10;
    padding: 10px 15px;
}

.govlay h2 {
    font: 14px Montserrat;
}

.govlay span {
    font: 12px Montserrat;
}

.list .oversis {
    overflow-x: auto;
}

.list .oversis table.siswa {
    width: 100%;
}

.list .oversis table.siswa td {
    vertical-align: top;
}

.list .oversis table.siswa strong {
    font: bold 14px Montserrat;
}

.list .post .post-category {
    font-size: 11px;
    text-transform: lovercase;
    margin: 5px 0
}

.list .post .post-category a {
    text-decoration: none;
    padding: 4px 10px;
    line-height: 24px;
    display: inline-block;
    font: 13px Montserrat;
    margin: 3px 3px 6px 0;
}

.list .post .post-category span.blogloop {
    text-decoration: none;
    padding: 4px 10px;
    line-height: 24px;
    display: inline-block;
    font: 13px Montserrat;
    margin: 3px 3px 6px 0;
}

.list .post .post-category a:hover {
    text-decoration: underline
}

.list .post h2 {
    margin-bottom: 8px
}

.list .post h2,
.list .post h2 a {
    text-decoration: none;
    text-transform: uppercase;
    font-family: Montserrat, sans-serif
}

.list .post h2 a:hover {
    text-decoration: underline
}

.list .post .post-meta {
    font-size: 12px;
    font-style: italic;
    margin-bottom: 0px;
    border: none
}

.list .post .post-meta span,
.list .post .post-meta a {
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-style: normal
}

.list .post .post-meta a:hover {
    text-decoration: underline
}

.post-author {
    text-transform: uppercase
}

.pagination {
    padding: 20px 0px;
    font: bold 13px Montserrat;
    clear: both;
    position: relative
}

.pagination a,
.pagination .disabled {
    text-decoration: none;
    padding: 5px 12px;
    margin: 0 1px 3px 0
}

.pagination a:hover,
.pagination a.active {
    margin: 0 1px 3px 0
}

.madings {
    margin-bottom: 50px;
    padding: 10px
}

.madings .post {
    padding-bottom: 40px;
    margin-bottom: 10px
}

.madings .post.tops {
    padding-bottom: 0;
    margin-bottom: 0;
}

.madings .post .madingthumb {
    width: 280px;
    margin: 0 25px 0 0;
    float: left
}

.madings .post-content .madingthumb {
    float: left ! important;
    margin: 0 25px 25px 0
}

.madings .post .madingthumb img {
    width: 100%;
    height: auto
}

.madings .post .madingthumb iframe {
    width: 100%;
    height: 200px
}

.madings .post h2 {
    font: 18px/1.2 'Open Sans'
}

.madings .post-meta {
    padding: 0 0 10px 0;
    margin: 0 0 10px;
    font-size: 12px;
    position: relative
}

.madings .post-meta h1 {
    margin: 0 0 10px;
    font: bold 30px/40px Montserrat;
    letter-spacing: -3px;
}

.madings .post-meta h1.alwnor {
    text-transform: inherit;
    letter-spacing: -2px;
    font: bold 30px/35px Montserrat;
}

.madings .post-meta h1 .fa {
    margin: 0 10px 0 0;
}

.madings .post-meta span,
.madings .post-meta a {
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
    font-style: normal
}

.madings .post-meta a:hover {
    text-decoration: underline
}

.madings .post-comms {
    position: absolute;
    right: 0
}

.madings .post-content {
    padding: 0
}

.madings .post-content a:hover {
    text-decoration: none
}

.madings .post-footer {
    font-size: 14px;
    margin: 30px 0 15px
}

.madings .post-footer a {
    margin: 0 2px 6px 0;
    padding: 2px 8px;
    line-height: 20px;
    font-size: 14px !important;
    font-family: Montserrat;
    display: inline-block;
}

.madings .post-footer a:hover {
    text-decoration: underline
}

.page .post-category {
    display: none
}

.single .meta-info {
    text-align: right;
    margin: 0 0 20px
}

.single .meta-info strong {
    float: left
}

.single .meta-info table {
    width: 100%;
    border: 1px solid #eee
}

.single .meta-info table th,
.single .meta-info table td {
    margin: -1px -1px 0 0;
    border: 1px solid #ddd;
    padding: 3px 0
}

.post-content {
    margin-bottom: 10px;
}

.list table.siswa {
    width: 100%;
}

.list table.siswa td {
    border: 1px solid #aaa;
    padding: 5px 8px;
    margin: 0 -1px -1px 0
}

.list table.siswa td.ctr {
    text-align: center;
    width: 30px;
}

.list table.siswa td.vmd {
    vertical-align: middle;
}

.post-content h1,
.post-content h2,
.post-content h3,
.post-content h4,
.post-content h5 {
    font-family: 'Montserrat', Geneva, "Times New Roman", times;
    margin: 15px 0;
    font-weight: 400
}

.post-content h1 {
    font-size: 24px;
    line-height: 35px
}

.post-content h2 {
    font-size: 22px
}

.post-content h3 {
    font-size: 20px
}

.post-content h4 {
    font-size: 18px
}

.post-content h5 {
    font-size: 16px
}

.post-content {
    font: 14px/1.5 'Open Sans', sans-serif
}

.post-content p {
    margin: 10px 0
}

.post-content table td {
    vertical-align: middle
}

.post-content table.gtk {
    margin: 0 0 20px
}

.post-content table.gtk td.tlf {
    padding-right: 15px;
    font-family: Montserrat
}

.post-content .fa {
    width: 20px;
    height: 20px;
    text-align: center;
    text-align: center;
    line-height: 20px;
    font-size: 13px;
    margin: 1px 10px 1px 0
}

.post-content ol {
    list-style: decimal;
    padding-left: 35px;
    margin: 15px 0
}

.post-content ul {
    list-style: disc;
    padding-left: 35px;
    margin: 15px 0
}

.post-content li {
    font: 14px/1.5 'Open Sans', sans-serif;
    margin: 3px 0
}

.post-content blockquote {
    padding: 15px 0 10px 65px;
    background: url("images/bq.png") 20px 0 no-repeat
}

.post-content blockquote p {
    font: italic 16px 'Open Sans', Geneva, "Times New Roman", times
}

.post-content .search_form {
    float: none;
    margin-top: 15px;
    width: auto
}

.post-content .search_form fieldset {
    width: 610px;
    height: 35px
}

.post-content .search_form input {
    width: 570px;
    font-size: 16px
}

.post-navigation {
    padding: 15px 0;
    position: relative
}

.post-navigation a {
    display: block;
    font: 11px 'Open Sans', sans-serif;
    text-decoration: none;
    line-height: 1.5
}

.post-navigation a:hover {
    text-decoration: none
}

.post-navigation a em {
    display: block;
    font: italic 11px 'Open Sans', Geneva, "Times New Roman", times
}

.post-navigation a:hover span {
    text-decoration: underline
}

.post-prev {
    width: 250px;
    min-height: 40px;
    padding-left: 30px;
    float: left;
    text-align: left;
    background: url("images/post_prev.png") 0 50% no-repeat
}

.post-next {
    width: 250px;
    min-height: 40px;
    padding-right: 30px;
    float: right;
    text-align: right;
    background: url("images/post_next.png") 100% 50% no-repeat
}

.line {
    width: 1px;
    height: 100%;
    background: #ddd;
    position: absolute;
    top: 0;
    right: 305px
}

.post-content .post-img img {
    margin: 0 0 15px;
    height: auto;
    display: block;
    width: 100%
}

.post-content .edi-img img {
    float: left;
    width: 300px;
    margin: 0 20px 20px 0;
}

.post-content h6 {
    position: relative;
    left: -30px
}

.post-content img,
.post-content .attachment img {
    max-width: 100%;
    height: auto;
}

.post-content .alignnone,
.post-content img.alignnone {
    clear: both;
    display: block;
    margin-bottom: 15px
}

.post-content .alignleft,
.post-content img.alignleft {
    display: inline;
    float: left;
    margin-right: 15px;
    margin-top: 4px
}

.post-content .alignright,
.post-content img.alignright {
    display: inline;
    float: right;
    margin-left: 15px;
    margin-top: 4px
}

.post-content .aligncenter,
.post-content img.aligncenter {
    clear: both;
    display: block;
    margin-left: auto;
    margin-right: auto
}

.post-content img.alignleft,
.post-content img.alignright,
.post-content img.aligncenter {
    margin-bottom: 15px
}

.post-content .wp-caption {
    line-height: 18px;
    margin-bottom: 20px;
    padding: 4px;
    text-align: center
}

.post-content .wp-caption img {
    margin: 5px 5px 0
}

.post-content .wp-caption p.wp-caption-text {
    font-size: 14px;
    margin: 5px
}

.post-content .wp-smiley {
    margin: 0
}

.post-content .gallery {
    margin: 0 auto 18px
}

.post-content .gallery .gallery-item {
    float: left;
    margin: 0 !important;
    text-align: center
}

.post-content .gallery.gallery-columns-1 .gallery-item {
    width: 100% !important
}

.post-content .gallery.gallery-columns-2 .gallery-item {
    width: 50% !important
}

.post-content .gallery.gallery-columns-3 .gallery-item {
    width: 33.333% !important
}

.post-content .gallery.gallery-columns-4 .gallery-item {
    width: 25% !important
}

.post-content .gallery.gallery-columns-6 .gallery-item {
    width: 16.16777% !important
}

.post-content .gallery.gallery-columns-8 .gallery-item {
    width: 12.5% !important
}

.post-content .gallery .gallery-item img {
    width: 100%;
    height: auto;
    display: block;
    border: none !important;
    margin-bottom: 0
}

.post-content .gallery .gallery-caption {
    font-size: 14px;
    margin: 0 0 14px
}

.post-content .gallery dl {
    margin: 0
}

.post-content .gallery br+br {
    display: none
}

.post-content .attachment img {
    display: block;
    margin: 0 auto
}

.post-content iframe {
    width: 100%;
    height: 300px
}

.post-content iframe.akframe {
    width: 100%;
    height: 300px
}

.comments h3 {
    font-size: 18px;
    font-weight: normal;
    padding: 15px 0;
    border-bottom: 1px solid #ddd
}

#comments {
    margin-bottom: 30px
}

.comment {
    padding: 25px 0;
    border-bottom: 1px dotted #ddd
}

.comment td {
    vertical-align: top
}

.comment-meta {
    position: relative;
    min-height: 70px;
    font-size: 12px;
    margin-right: 30px
}

.avatar {
    display: block;
    margin-right: 10px;
    box-shadow: 0 0 10px #ddd;
    border-radius: 80px;
    padding: 8px;
}

.comment-author a,
.comment-author span {
    text-decoration: none;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
    font-style: normal
}

.comment-author a:hover {
    text-decoration: underline
}

.comment-author,
.comment-date {
}

.comment-reply-link {
    text-decoration: none;
    font-style: italic;
}

.comment_list {
    margin: 0 0 40px;
}

.comment-reply-link:hover {
    text-decoration: underline
}

.comment-text p {
    font: 14px/1.5 'Open Sans', sans-serif;
    margin-bottom: 10px
}

.children {
    margin-left: 80px
}

.children .children {
    margin-left: 50px
}

.children .comment {
    padding-left: 0
}

#respond p,
.nopassword {
    margin: 10px 0;
    font: 14px 'Open Sans', sans-serif
}

#respond p a {
    text-decoration: none
}

#respond p a:hover {
    text-decoration: underline
}

#commentform {
    position: relative;
    margin: 10px 0;
    padding-top: 155px
}

#respond .comment_message {
    margin: 10px 0 25px;
}

#respond .commform-author,
#respond .commform-email,
#respond .commform-url {
    float: left;
    width: 33.333333333%;
    margin-bottom: 15px;
}

#respond .commform-author p,
#respond .commform-email p,
#respond .commform-url p {
    font: bold 12px 'Open Sans', sans-serif;
    margin-bottom: 5px
}

#respond .commform-author p span,
#respond .commform-email p span,
#respond .commform-url p span {
    font: italic 12px 'Open Sans', Geneva, "Times New Roman", times
}

#respond .commform-textarea {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

#respond .commform-textarea > div {
    border-radius: 4px;
    padding: 10px
}

#respond p.form-submit {
    margin-bottom: 0
}

#respond p.form-submit #submit {
    float: none
}

#comment {
    width: 100%;
    height: 120px;
    padding: 0;
    margin: 0;
    border: none;
    overflow: auto
}

.commform-author div {
    margin-right: 15px;
    border-radius: 4px;
    padding: 10px
}

.commform-email div {
    border-radius: 4px;
    padding: 10px
}

.commform-url p {
    margin-left: 15px !important
}

.commform-url div {
    margin-left: 15px;
    border-radius: 4px;
    padding: 10px
}

#author,
#email,
#url {
    width: 100%;
    margin: 0;
    padding: 0;
    border: none;
    font: 14px 'Open Sans', sans-serif;
}

#submit {
    float: left;
    border: none;
    font: bold 16px Montserrat, sans-serif;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 3px;
    -webkit-border-radius: 3px
}

p#cancel-comment-reply {
    float: right;
    line-height: 28px;
    margin: 0
}

.post-password-form input {
    font-family: 'Open Sans'
}

.ndeso {
    font: 800 150px 'Open Sans';
    color: #333;
    width: 500px;
    margin: 0 auto;
    letter-spacing: -1px
}

.madticker {
    font-family: 'Open Sans';
    width: auto;
    height: 36px;
    margin: 0;
    padding: 0 10px;
    overflow: hidden;
    position: relative;
}

.madticker #infotit {
    position: absolute;
    top: 5px;
    bottom: 5px;
    left: 5px;
    z-index: 100;
    font: 400 14px/26px Montserrat;
    padding: 0 3px 0 6px;
}

.madticker .infotim {
    position: absolute;
    top: 5px;
    bottom: 5px;
    right: 5px;
    z-index: 100;
    font: 400 14px/26px Montserrat;
    padding: 0 6px 0 3px;
}

.madticker .mask {
    position: relative;
    margin: 0;
    overflow: hidden
}

ul.newstickers {
    position: relative;
    left: 100%;
    width: 10000px;
    list-style-type: none;
    margin: 6px 0;
    padding: 0
}

ul.newstickers li {
    float: left;
    margin: 0 60px 0 0;
    padding: 3px 0;
    height: 20px;
    font-size: 13px;
    overflow: hidden
}

ul.newstickers a {
    white-space: nowrap;
    padding: 0;
    font-weight: normal;
    margin: 0 50px 0 0
}

ul.newstickers .fa {
    margin-right: 10px
}

ul.newstickers span {
    margin: 0;
    font-weight: bold;
    line-height: 20px
}

#sidebar {
    width: 30%;
    margin: 0;
    float: right
}

.widget {
    margin-bottom: 10px;
    clear: both;
    padding: 10px 15px;
}

.widget-small {
    width: 130px
}

.widget h3,
.widget-small h3,
.widget h3 a,
.widget-small h3 a {
    margin: 0 0 15px;
    font: bold 30px/40px Montserrat;
    letter-spacing: -3px;
}

#sidebar .search_form {
    float: none;
    width: auto;
    margin: 15px 0;
    padding: 0 0 10px;
    height: auto;
}

#sidebar .search_form:after {
    display: none;
}

#sidebar .search_form fieldset {
    width: auto;
    padding: 10px;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    height: auto;
}

#sidebar .search_form input {
    width: 100%;
    padding: 0;
}

#sidebar .search_form .divsel {
    width: 100%;
    padding: 0;
    overflow: hidden;
    display: block;
    margin: 0 0 10px;
}

#sidebar .search_form select {
    width: 110%;
    padding: 0;
}

#sidebar .search_form button {
    position: relative;
    right: 0;
    top: 0;
    height: 40px;
    line-height: 40px;
    width: 100%;
    text-align: center;
    font-size: 20px;
}

.widget a,
.widget-small a {
    text-decoration: none;
    font: 14px/1.3 'Montserrat', sans-serif
}

.widget a:hover,
.widget-small a:hover {
    text-decoration: underline
}

.widget p,
.textwidget {
    font: 14px/1.3 'Montserrat', sans-serif
}

.widget p a,
.textwidget a {
    text-decoration: underline
}

.widget p a:hover,
.textwidget a:hover {
    text-decoration: none
}

.widget ul,
.widget-small ol {
    margin: 10px 0
}

.widget li,
.widget-small li {
    font-size: 14px;
    line-height: 20px;
    padding: 5px 0
}

.widget ul li ul,
.widget ul li ol,
.widget-small ul li ul,
.widget-small ul li ol {
    margin: 10px 0 -1px
}

.widget .menu-item-has-children {
    padding-bottom: 0
}

.widget .recentcomments {
    font-style: italic
}

.widget .recentcomments span,
.widget .recentcomments a {
    font-style: normal
}

.widget .recentcomments span {
    font-weight: bold;
}

.widget .widmading {
    padding: 15px 0;
}

.widget .agloop .age-info {
    float: left;
    padding: 0;
    margin: 0 15px 20px 0;
    width: 70px;
    display: inline;
    letter-spacing: -3px;
    text-align: center;
    border: 0;
}

.widget .agedate {
    display: block;
    font: 800 50px/56px 'Montserrat';
}

.widget .age-info .agemon {
    letter-spacing: 0px;
    display: block;
    font: 800 12px/20px 'Montserrat';
}

.widget .widmading .post-meta {
    font: italic 12px 'Open Sans'
}

.widget .widmading .post-content {
    font: 14px 'Open Sans';
    padding: 5px 0;
    margin: 0;
}

.widget .widmading .post-content h4 {
    font: 700 18px/30px 'Open Sans';
    margin: 0;
    text-transform: uppercase
}

.widget .widmading .post-content span {
    float: right
}

.widget .widmading .wdc {
    text-align: center
}

.rpthumb {
    display: block
}

.rpthumb img {
    width: 80px;
    height: 60px;
    margin-right: 15px;
    float: left;
    padding: 10px;
    border-radius: 3px;
    box-shadow: 0 0 10px #d7d7d7;
}

.rpthumb-title {
    display: block;
    font: 14px 'Montserrat', Geneva, "Times New Roman", times;
    margin-bottom: 6px
}

.rpthumb-date {
    display: block;
    font-size: 11px;
}

.rpthumb:hover {
    text-decoration: none !important
}

.rpthumb:hover .rpthumb-title {
    text-decoration: underline
}


.widget_gurus .owl-carousel .owl-item img { 
    height: auto ! important;
    width: 35%;
    float: left;
    margin: 0 15px 0 0;
}

.widget_gurus .goout {
    padding: 15px 0;
}

.widget_gurus.widget .bfgtk {
    margin: 0 0 0 35%;
    font: bold 14px Montserrat;
}

.widget_gurus.widget .pgtk {
    color: #777;
    padding: 0 0 4px;
    margin: 0 0 4px 15px;
    border-bottom: 1px solid #ccc;
    font: 13px 'Open Sans';
}
.widget_gurus span {
    float: right;
}

.widget .vibar {
    width: 100%;
    height: 200px;
    display: block;
    margin: 0 0 15px
}

.widget .calendar_wrap {
    padding: 15px 0
}

.widget .calendar_wrap table {
    width: 100%;
}

.widget .calendar_wrap table caption {
    margin-bottom: 10px
}

.widget .calendar_wrap th {
    margin: 0 -1px -1px 0;
    text-align: center;
    padding: 3px 0;
}

.widget .calendar_wrap td {
    margin: 0 -1px -1px 0;
    text-align: center;
    padding: 6px 0
}

.widget .calendar_wrap td a {
    font-weight: bold
}

.widget .tagcloud {
    padding: 10px 0
}

.widget .tagcloud a {
    margin: 0 2px 6px 0;
    padding: 3px 8px;
    line-height: 20px;
    font: 14px Montserrat ! important;
    display: inline-block;
    text-transform: lowercase;
}

.widget label {
    padding: 15px;
    display: block
}

.widget select {
    margin: 0 0 15px;
    width: 90%;
    border: none;
    overflow: hidden;
    font: 14px 'Montserrat';
    padding: 3px 8px
}

.widget select option {
    padding: 3px 8px
}

.footbar {
    padding: 40px 12px;
    margin: 0;
}

.foot-bar {
    width: 33.333%;
    float: left
}

.foot-inn {
    margin: 0 12px
}

.foot-inn .search_form:after {
    display: none;
}

.foot-inn .widget {
    margin-bottom: 10px;
    clear: both;
    padding: 0;
}

.foot-inn .widget-small {
    width: 130px
}

.foot-inn .widget h3,
.foot-inn .widget-small h3 {
    padding: 0 15px 0 0;
    margin: 0;
    border: 0;
    text-align: left
}

.foot-inn .widget h3 div,
.foot-inn .widget-small h3 div {
    float: left;
    height: 36px;
    line-height: 36px;
    display: inline
}

.foot-inn .search_form {
    float: none;
    width: auto;
    margin: 15px 0;
    padding: 0 0 10px;
    height: auto;
    border: 0;
}

.foot-inn .search_form:after {
    display: none;
}

.foot-inn .search_form fieldset {
    width: auto;
    border: 0;
    padding: 10px;
    font-size: 15px;
    position: relative;
    overflow: hidden;
    height: auto;
}

.foot-inn .search_form input {
    width: 100%;
    padding: 0;
}

.foot-inn .search_form .divsel {
    width: 100%;
    padding: 0;
    overflow: hidden;
    display: block;
    margin: 0 0 10px;
}

.foot-inn .search_form select {
    width: 107%;
    padding: 0;
}

.foot-inn .search_form button {
    position: relative;
    right: 0;
    top: 0;
    height: 40px;
    line-height: 40px;
    width: 100%;
    text-align: center;
    font-size: 20px;
}

.foot-inn .widget a,
.foot-inn .widget-small a {
    text-decoration: none;
    font: 14px 'Montserrat';
}

.foot-inn .widget a:hover,
.foot-inn .widget-small a:hover {
    text-decoration: underline
}

.foot-inn .widget p,
.foot-inn .textwidget {
    font: 14px/1.3 'Montserrat', sans-serif
}

.foot-inn .widget p a,
.foot-inn .textwidget a {
    text-decoration: underline
}

.foot-inn .widget p a:hover,
.foot-inn .textwidget a:hover {
    text-decoration: none
}

.foot-inn .widget ul,
.foot-inn .widget-small ol {
    margin: 10px 0
}

.foot-inn .widget li,
.foot-inn .widget-small li {
    font: 14px Montserrat;
    line-height: 20px;
    padding: 5px 0;
}

.foot-inn .widget ul li ul,
.foot-inn .widget ul li ol,
.foot-inn .widget-small ul li ul,
.foot-inn .widget-small ul li ol {
    margin: 10px 0
}

.foot-inn .widget_gurus.widget .bfgtk {
    margin: 0 0 0 35%;
    font: bold 14px Montserrat;
}

.foot-inn .widget_gurus.widget .pgtk {
    padding: 0 0 4px;
    margin: 0 0 4px 15px;
    font: 13px 'Open Sans';
}

.foot-inn .widget .agloop .age-info {
    float: left;
    padding: 0;
    margin: 0 15px 20px 0;
    width: 70px;
    display: inline;
    letter-spacing: -3px;
    text-align: center;
}

.foot-inn .widget .agedate {
    display: block;
    font: 800 50px/55px 'Montserrat';
}

.foot-inn .widget .age-info .agemon {
    letter-spacing: 0px;
    display: block;
    font: 800 12px/20px 'Montserrat';
}

.foot-inn .widget .atime .wakt {
    margin-top: 4px;
}

.foot-inn .widget .menu-item-has-children {
    padding-bottom: 0
}

.foot-inn .widget .recentcomments {
    font-style: italic
}

.foot-inn .widget .recentcomments span,
.foot-inn .widget .recentcomments a {
    font-style: normal;
}

.foot-inn .widget .recentcomments span {
    font-weight: bold;
}

.foot-inn .widget .widmading {
    padding: 15px 0;
}

.foot-inn .widget .widmading .post-content {
    font: 13px 'Open Sans';
    padding: 5px 0;
    margin: 0;
}

.foot-inn .widget .rssSummary {
   font: 13px 'Open Sans';
}

.foot-inn .widget .widmading .post-content:last-child {
    border-bottom: 0
}

.foot-inn .rpthumb {
    display: block
}

.foot-inn .rpthumb img {
    width: 80px;
    height: 60px;
    margin-right: 15px;
    float: left;
    box-shadow: 0 0 0 #fff;
    border-radius: 0;
}

.foot-inn .widget h3, .foot-inn .widget-small h3, .foot-inn .widget h3 a, .foot-inn .widget-small h3 a {
    margin: 0 0 15px;
    font: bold 30px/40px Montserrat;
}

.foot-inn .rpthumb-title {
    display: block;
    font: bold 14px 'Montserrat', Geneva, "Times New Roman", times;
    margin-bottom: 6px
}

.foot-inn .rpthumb-date {
    display: block;
    font-size: 12px;
}

.foot-inn .rpthumb:hover {
    text-decoration: none !important
}

.foot-inn .rpthumb:hover .rpthumb-title {
    text-decoration: underline
}

.foot-inn .widget .calendar_wrap {
    padding: 15px 0
}

.foot-inn .widget .calendar_wrap table {
    width: 100%;
}

.foot-inn .widget .calendar_wrap table caption {
    margin-bottom: 10px
}

.foot-inn .widget .calendar_wrap th {
    margin: 0 -1px -1px 0;
    text-align: center;
    padding: 3px 0;
}

.foot-inn .widget .calendar_wrap td {
    margin: 0 -1px -1px 0;
    text-align: center;
    padding: 6px 0;
}

.foot-inn .widget .calendar_wrap td a {
    font-weight: bold;
}

.foot-inn .widget .tagcloud {
    padding: 10px 0
}

.foot-inn .widget .tagcloud a {
    margin: 0 2px 6px 0;
    padding: 3px 8px;
    line-height: 20px;
    font-size: 13px !important;
    display: inline-block;
}

.foot-inn .widget label {
    padding: 10px 0;
    display: block
}

.foot-inn .widget select option {
    padding: 3px 8px
}

.widget .widmading .post-content h4 {
    font: 700 18px/20px 'Montserrat';
    margin-bottom: 10px;
}

.footer {
    margin: 0px;
    padding: 30px 16px;
    font: bold 16px Montserrat;
}

.footer a {
    text-decoration: none;
    font-weight: bold
}

.footer a:hover {
    text-decoration: underline
}

.copyright {
    text-align: center;
    font-size: 13px
}

.credits {
    float: right
}

.opens {
    background: #ecbf09; 
    color: #036; 
    position: fixed; 
    z-index:10000; 
    top:250px; 
    left: 0; 
    height: 30px; 
    line-height: 30px; 
    padding: 0 10px 0 10px; 
    border-radius: 0 20px 20px 0;
}

.closes {
    background: #ecbf09; 
    color: #036; 
    position: fixed; 
    z-index:10000; 
    top:250px; 
    left: 65px;
    display: none;  
    height: 30px; 
    line-height: 30px; 
    padding: 0 10px 0 10px; 
    border-radius: 0 20px 20px 0;
}

.layout {
    position: fixed;
    z-index: 1000;
    top: 250px;
    left: -75px;
    background: #f0ca30;
    width: 50px;
    height: 30px;
    font: bold 14px/30px Montserrat;
    color: #036;
    padding: 0 7px 0 8px;
    overflow: hidden;
    text-align: left;
    cursor: pointer;
}

.styling {
    position: fixed;
    z-index: 1000;
    top: 280px;
    left: -75px;
    background: #ddd;
    width: 50px;
    height: 125px;
    padding: 10px 5px 5px 10px;
    overflow: hidden;
    text-align: left;
}

.blue {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #0b82aa;
}

.red {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #d42007;
}

.green {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #090;
}

.orange {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #f70;
}

.forest {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #03562b;
}

.donker {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #036;
}

.cyan {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #3bf;
}

.purple {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #8c49a5;
}
.tosca {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #0aa277;
}
.grey {
    width: 20px;
    height: 20px;
    margin: 0 5px 5px 0;
    float: left;
    display: inline;
    background: #777;
}


.mmenu {
    position: fixed;
    z-index: 1000;
    top: 250px;
    left: -75px;
    background: #f0ca30;
    width: 50px;
    height: 30px;
    font: bold 14px/30px Montserrat;
    color: #036;
    padding: 0 7px 0 8px;
    overflow: hidden;
    text-align: left;
    cursor: pointer;
    display: none;
}


/* Back to TOP */

#return-to-top {
    position: fixed;
    z-index: 10000;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

#return-to-top i {
    margin: 0;
    position: relative;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

@media screen and (max-width: 1050px) {
    .wrapper,
    .nav-inn {
        width: 100%;
        min-height: 70px;
    }
    .nav-inn {
        height: 105px;
    }
    .nav-inn.fade {
        height: 70px;
    }
    .nav .dd {
        height: 70px
    }
    .nav .dd li {
        font-size: 13px;
        line-height: 70px;
    }
    .nav .dd li a,
    .boxed .nav .dd li a    {
        padding: 0 14px;
        font: 400 13px/70px Montserrat;
    }
    .fsearch.fa {
        top: 18px;
    }
    .masearch {
        top: 65px;
    }
    .boxed .logo img,
    .logo img {
        max-height: 50px;
    }
    .maschol .scname {
        margin-right: 300px;
    }
    .maschol h2 {
        font: bold 35px Montserrat;
    }
    .massos {
        width: 260px;
    }
    .kontak .fa {
        height: 40px;
        width: 40px;
        line-height: 40px;
        font-size: 25px;
    }
    .editoz {
        height:240px;
    }
    .editoz div + div + div + div{
        display: none;
    }
    .editoz img {
        height:240px;
        width: auto;
    }
    .rconbg {
        height: 240px;
    }
    .peaduo {
    width: 33.333%;
    }
    .secblock .pead {
    padding: 8px;
    }

    .six-info .metas {
        padding-top: 0;
        font: 400 13px 'Open Sans';
    }
    .six-info h3 {
        line-height: 16px;
        padding-top: 5px;
    }
    .boxed .six-info h3 a,
    .six-info h3 a {
        font: 400 13px/1.3 'Open Sans';
    }
    
    .ekstraku {
        display: none;
    }
    
    .atime h3 {
        font: bold 13px/16px 'Open Sans';
        margin-right: 20px;
    }
    
    .boxed .barurg {
        height: 255px;
    }
    .barurg .twolas,
    .boxed .barurg .twolas {
        display: none;
    }
    
    .boxed .mabaru .barulev {
    height: 250px;
    }
    
    .singlev .singcoim ,
    .boxed .singlev .singcoim {
    position: relative;
    height: 240px;
    }

    .barurg .secoim,
    .boxed .barurg .secoim {
        height: 240px;
    }
    
    #qslider {
        margin: 50px auto
    }
    #content {
        width: 624px
    }
    .madings .post-content.with {
        padding: 0 0 0 305px
    }
    .madings .post-content.edit {
        padding: 0 0 0 195px
    }
    .podate {
        width: 150px;
    }
    .rside {
        margin: 0 0 0 170px;
    }
}

@media screen and (max-width: 800px) {
    .home .mading {
        position: relative;
    }
    .home .nofixed .wrapper {
        position: relative;
        top: 0;
        z-index: 2;
    }
    .wrapper {
        width: 100%;
        padding: 0;
    }
    .nav {
        display: none
    }
    .logo {
        display: block;
        text-align: center;
    }
    .nofixed .nav-mading {
        position: relative;
    }
    .open {
        height: 24px;
        padding: 5px;
        font: 12px/24px Montserrat;
        text-align: center;
        display: block ! important;
    }
    .open .h800 {
        display: none;
    }
    .open span.oleft .openarr:after {
        border-bottom: 8px solid transparent;
        border-top: 8px solid transparent;
    }
    .fmenu.fa {
        display: block;
        bottom: 18px;
    }
    .slideshow {
    margin: 0;
    min-height: 200px;
    }
    .fixed .slideshow {
        margin: 34px 0 0;
    }
    .boxed.fade .nav-inn {
        height: 104px;
    }
    .mob {
        display: block;
        width: 100%;
        position: fixed;
        top: 104px;
        z-index: 1000;
    }
    .fade .open {display: none !important;}
    .nofixed .mob {
        position: absolute;
    }
    .mobi .accordion li {
        display: block;
        margin: 0;
        text-align: left;
        font: 13px Montserrat;
        text-transform: uppercase;
        position: relative;
    }
    .mobi .accordion li a {
        text-decoration: none;
        font-weight: bold;
        display: block;
        line-height: 40px;
        margin: 0 44px 0 14px
    }
    .mobi .accordion li a:hover {
        text-decoration: none
    }
    .sub-menu:after {
        display: none;
    }
    .mobi .accordion li.menu-item-has-children:after {
        content: '';
        position: absolute;
        right: 20px;
        top: 18px;
        width: 0;
        height: 0;
        border-right: 6px solid transparent;
        border-left: 6px solid transparent;
        border-top: 6px solid #fff;
        clear: both
    }
    .mobi .accordion li ul li a {
        margin: 0 44px 0 14px
    }
    .mobi .accordion li ul li ul li a {
        margin: 0 44px 0 14px
    }
    .breaks {
        height: 70px;
    }
    .nofixed .breaks {
        height: 50px;
    }
    .kontak .fa {
        height: 34px;
        width: 34px;
        line-height: 34px;
        font-size: 20px
    }
    .massos {
        width: 230px;
        margin-top: 8px;
    }
    .slide {
        height: auto;
        width: 100%
    }
    .slide img {
        width: 100%;
        height: auto;
        position: relative
    }
    .nofixed .singslide {
        display: none;
    }
    #larr {
        right: 140px !important
    }
    #rarr {
        right: 100px !important
    }
    .sloverlay {
        font: 12px/1.2 'Open Sans'
    }
    .sloverlay h2 {
        font: 18px/30px Montserrat
    }
    .maschol {
        overflow: hidden;
        padding: 20px;
    }
    .maschol h2 {
        font: bold 26px Montserrat;
        letter-spacing: -2px;
    }
    .content {
        width: 100%;
        float: none;
    }
    .rcon {
        width: 100%;
        float: none;
    }
    .rconbg {
        margin: 0 0 15px;
    }
    .editoz {
        padding: 0;
    }
    .boxed .editoz img,
    .editoz img {
        display: block;
        margin: 0 20px 0 10px;
    }
    .secblock .pead {
    padding: 4px;
    }
    .editoz .corner {
        margin-top: 15px;
        font: 400 14px Montserrat;
    }
    .editoz .edspan {
        left: 18px;
    }
    .edbot {
        display: block;
    }
    .peaduo {
        width: 50%;
    }
    .peaduo.last {
        width: 100%;
        float: none;
        display: block;
        clear: both;
    }
    .madticker {
        height: 30px;
    }
    .madticker #infotit,
    .madticker .infotim {
        font: 400 12px/20px Montserrat;
    }
    .madticker #infotit:after {
        right: -8px;
        border-bottom: 10px solid transparent;
        border-top: 10px solid transparent;
    }
    .madticker .infotim:before {
        left: -8px;
        border-bottom: 10px solid transparent;
        border-top: 10px solid transparent;
    }
    ul.newstickers li {
        padding: 1px 0;
        height: 17px;
        font-size: 12px;
    }
    .mabaru {
        padding: 4px 4px 8px;
    }
    .singlev .singcoim img {
        width: 110%;
    }
    .twolas img {
        width: 110%;
        height: auto;
    }
    .pead .innpad {
        padding: 2px;
    }
    .peaduo h3.fopen {
    margin: 6px 6px 15px;
    font: bold 25px/30px Montserrat;
    letter-spacing: -2px;

    }
    .ekstraku {
    display: inline;
    }
    #qslider .post {
    font: italic 24px Philosopher;
    }
    .atime h3 {
        font: bold 15px/20px Montserrat;
    }
    .fasinn {
        margin-right: 0;
    }
    .fasloop .fasil {
        width: 33.333333%;
    }
    .nik {
        display: none;
    }
    .grthumb {
        width: 80px;
        height: 80px;
    }
    .motinn {
        padding: 0 40px 15px
    }
    .motinn .fa {
        position: absolute;
        top: -30px;
        left: 50%;
        font-size: 60px;
        margin-left: -30px
    }
    #quotes-slider {
        width: 100%;
        margin: 45px auto 0
    }
    .gtkquote {
    padding: 6px;
    }
    .guruloop .gurus {
    padding: 5px 12px 0 12px;
    }
    .overage h4,
    .overback h4,
    .widget h3, .widget-small h3    {
    font: bold 24px Montserrat;
    letter-spacing: -2px;
    }
     
    #content {
        width: auto;
        float: none
    }
    #sidebar {
        width: auto;
        float: none
    }
    .widget .vibar {
        height: 300px;
    }
    .foot-bar {
        width: 100%;
        float: none
    }
    .copyright img {
        padding-right: 20px
    }
    .layout {
        display: none;
    }
    .mmenu {
        display: block;
    }
}

@media screen and (max-width: 640px) {
    .fmenu.fa {
        left: 20px;
        right: auto;
    }
    .open {
    display:none !important;
    }
    .nav-inn {

    height: 70px;

}
.mob {
    top: 70px;
}


.overage .age-info .agedate {

    font: 800 110px/1.15 'Open Sans';
    letter-spacing: -3px;

}
.evnt {
    font-size: 13px;
}
    .logo {
        width: auto;
        float: none;
        text-align: center
    }
    .logo img {
        max-width: 100%
    }
    .boxed .logo img, .logo img {
        margin: 0 auto;
    }
    .fsearch.fa {

    top: 18px;

}
    .masearch {

    top: 65px;

}
    .breadcrumbs {
        font-size: 13px;
    }
    .massos {
        width: auto;
        float: none
    }
    .fixed .slideshow {
    margin: 70px 0 0;
}
    .slideshow {
        background: #fff;
    }
    #slideshow,
    .slideshow {
        height: auto;
        width: 100%
    }
    .madings .post .madingthumb {
        width: 240px
    }
    .madings .post-content.with {
        padding: 0 0 0 265px
    }

    .home .nofixed .homebreak {
        height: 300px;
    }
    .maschol .scname {
        margin: 0;
        text-align: center;
        float: none;
    }
    .maschol h2 {
        padding-top: 20px;
    }
    .maschol h2:before {
        left: 50%;
        position: absolute;
        margin: -20px 0 0 -80px;
    }
    .massos {
        position: relative;
        right: 0;
        margin-top: 15px;
    }
    .mabaru {
        padding: 4px;
    }
    .mabaru .barulev {
        height: auto;
    }
    .barulev {
        height: auto;
    }
    .singlev .singcoim {
        height: auto;
    }
    .singlev .singcoim img {
        width: 100%;
    }
    .barurg,
    .barurg .secoim {
        height: auto;
    }
    .twolas {
        display: none;
    }
    
    .peaduo h3.fopen {
        font: bold 26px/40px Montserrat;
        letter-spacing: -2px;
    }
    .atime h3 {
        font: bold 14px/20px Montserrat;
    }
    .gspan {
        font: 13px Montserrat;
    }
    .maquotes .overback {
        padding: 30px 50px;
        background: rgba(0, 0, 0, 0.95);
    }
    .overback h4 {
        font: bold 26px/40px Montserrat;
        letter-spacing: -2px;
    }
    #qslider {
        margin: 0 auto;
    }
    #quotes-slider {
        margin: 25px auto
    }
    #qslider {
        font: italic 18px Philosopher;
    }
    .podate {
        width: 110px;
    }
    .podate .ddays {
        width: 80px;
        height: 80px;
        font: 700 40px/55px 'Open Sans';
        box-shadow: 0 0 7px #d7d7d7;
    }
    .rside {
        margin: 0 0 0 130px;
    }
    .podate .dtimes {
        font: 300 10px/10px 'Open Sans';
    }
    .podate .fa.ico {
        font-size: 60px;
        width: 80px;
        height: 80px;
        line-height: 80px;
        border: 8px solid #fff;
    }
    .single.kfep .podate {
        display: none;
    }
    .single.sing.kfep .podate {
        display: none ! important;
    }
    .single.sing .podate {
        width: 100%;
        height: 50px;
        float: none;
        display: block;
        border-top: 1px dashed #ddd;
    }
    .single.kfep .rside {
        margin: 0;
        text-align: center;
    }
    .single.sing .rside {
        margin: 0 0 40px
    }
    .podate .fa {
        width: 45px;
        height: 40px;
        margin: 0 auto;
        text-align: center;
        font-size: 45px;
    }
    .single.sing .podate .coms {
        margin-left: 0;
    }
    .coms .countcoms {
        width: 50px;
        line-height: 45px;
    }
    .share .fa {
        display: inline;
        float: right;
        height: 60px;
        font-size: 20px;
        width: 35px;
        height: 35px;
        text-align: center;
        line-height: 35px;
        margin: 5px 0 5px 5px;
        border: 0;
        box-shadow: 0 0 10px #fff;
    }
    .madings .post-meta {
        border: 0;
    }
    .share br,
    .share span {
        display: none;
    }
    
    .agendas .podate {
        display: block;
        float: none;
        height: 60px;
        width: auto;
    }
    
    .agendas .rside {
        margin: 0;
    }
    
    .agendas .share {
        width: auto;
        margin-left: 70px;
    }
    
    .single.agendas .podate .ag.fa {
        float: left;
        height: 50px;
        width: 50px;
        font-size: 40px;
        line-height: 50px;
    }
    
    #content {
        margin: 0 5px
    }
    .coms {
        width: 50px;
        height: 50px;
        float: left;
        margin-left: 30px;
    }
    .copyright {
        text-align: center
    }
}

@media screen and (max-width: 600px) {
.logo {
    height: 50px;}
    .guruloop {
    max-width: 400px;
    margin: 0 auto;
    }
    .guruloop .gurus {
         border: 0;
    }
    .overage .agloop {
    margin: 0 30px;
    }
    .overage .age-info .agedate {

    font: 800 90px/1.15 'Open Sans';
    letter-spacing: -3px;

}
.overage .agloop .age-info {

    width: 100px;

}
.boxed .overage .atime h3 {

    font: bold 20px/26px Montserrat;
        font-size: 20px;

}
.galeria .eight {

    width: 50%;

}
.boxed .barurg,
.barurg .secoim, 
.boxed .barurg .secoim, 
.boxed .mabaru .barulev, 
.singlev .singcoim, 
.boxed .singlev .singcoim {
height: auto;
}

.overage .atime h3 {

    font: bold 20px/1.1 Montserrat;
    margin-bottom: 12px;

}

.evnt {

    padding: 0 0 0 140px;

}
.overage {

    padding: 50px 0 60px;
}
.overage .atime {

    padding: 0 0 30px;

}
#clockdiv {

    margin: 30px auto 0;

}
}

@media screen and (max-width: 599px) {
    .logo img {
        max-width: 90%;
        height: auto
    }
    .massos .kontak {
        padding: 10px 0
    }
    .nav-inn {
        height: 40px
    }
    .masearch {
        display: none
    }
    .madticker #infotit,
    .madticker .infotim {
        display: none
    }
    .open {
        display: none ! important;
    }
    .home .fixed .homebreak,
    .fixed .homebreak {
        height: 80px;
    }
    .mob {
        top: 70px;
    }
    .mabaru .barulev {
        height: 220px;
        width: 100%;
        float: none;
    }
    .singlev .singcoim {
        height: 220px;
    }
    .barurg {
        float: none;
        width: 100%;
        height: 220px;
        margin: 4px 0;
    }
    .barurg .secoim {
        height: 220px;
    }
    .six-info.n-one {
    height: 220px;
    overflow: hidden;
    }
    .boxed .six-info h3 a, .six-info h3 a {
    font: 300 14px/1.3 Montserrat;
    }
    .boxed .six-info h3 , .six-info h3 {
    min-height: 14px;
    }
    
    .editoz .corner {
        font: 400 14px Montserrat;
    }
    .boxed .editoz img {
        margin: 0 20px 0 10px;
    }
    .peaduo {
        width: 100%;
        float: none;
    }
    .galeria .eight {
        width: 50%;
        float: left;
    }
    .widget h3,
    .widget-small h3,
    .foot-inn .widget h3,
    .foot-inn .widget-small h3 {
        font: bold 26px/40px Montserrat;
    }
    .motinn {
        padding: 0 0px 15px
    }
    .post-content.acent {
        font-size: 14px !important;
    }
    h1.acent span {
        font: 700 150px/150px 'Montserrat';
    }
    .archive .podate {
        display: none;
    }
    .single.tops .podate {
        display: none;
    }
    .rltd .rely {
        height: 160px;
    }
    .rside {
        margin: 0;
        float: none;
    }
    .galoop {
        width: 50%;
    }
    .overage .age-info .agedate {

    font: 800 60px/1.0 'Montserrat';

}
.overage .age-info .agemon {

    font: 800 13px/16px 'Montserrat';

}
.overage .atime h3 {

    margin: 0 0 35px;

}
.evnt {

    text-align: center;
    padding: 0;

}
    .post-content iframe.akframe {
        width: 100%;
        height: 250px
    }
    .madings .post {
        position: relative;
    }
    .madings .post .madingthumb {
        width: 100%;
        margin: 0;
        float: none
    }
    .madings .post .madingthumb img {
        margin: 0 0 20px
    }
    .madings .post-content.edit {
        padding: 0
    }
    .madings .post-content .madingthumb.edit {
        float: none ! important;
        display: block;
        max-width: 100%;
        margin: 0 auto 25px
    }
    .post-content .edi-img img {
        width: 200px;
        height: auto;
    }
    #respond .commform-author,
    #respond .commform-email,
    #respond .commform-url {
        float: none;
        width: 100%
    }
    .commform-author div {
        margin-right: 0
    }
    .commform-url div {
        margin-left: 0
    }
    .widget .vibar {
        height: 240px;
    }
}

@media screen and (max-width: 360px) {
.slideshow {

    min-height: 100px;

}
.fixed .slideshow {
    margin: 58px 0 0;
}
.nav-inn {
    height: 58px;
    max-height: 58px;
    min-height: 58px;
}
.mob {
    top: 58px;
}
.logo {
    height: 34px;
    padding: 12px;
}
.fmenu.fa {
    left: 12px;
    bottom: 12px;
}
.fsearch.fa {
    top: 18px;
}
.fsearch.fa {
    top: 23px;
}
.fsearch.fa {
    top: 12px;
    right: 12px;
}
    .boxed .logo img, .logo img {

    max-height: 34px;
    padding: 0;

}
    .masearch {
        right: 5px;
    }
    .seccon h3 {
        font: 300 14px/1.3 Montserrat;
    }
    h1.acent span {
        font: 700 100px/100px 'Montserrat';
    }
    .rconbg {
        height: auto;
    }
    .rltd {
        float: none;
        width: 100%;
    }
    .rltd .rely {
        margin: 0;
        float: none;
        height: 180px;
    }
    .post-content .edi-img img {
        width: 100%;
        float: none;
        margin: 0 0 20px;
        height: auto;
    }
    .galoop {
        width: 100%;
        float: none;
    }
    .overage .days, .overage .hours, .overage .minutes, .overage .seconds {

    font: bold 25px Montserrat;

}
#qslider .post {

    font: italic 16px Philosopher;

}

    .editoz {
        height: auto;
        padding-bottom: 55px;
    }
    .boxed .editoz img,
    .editoz img {
        float: none;
        margin: 20px auto 30px;
        height: auto;
    }
    .editoz .edspan {
        position: relative;
        display: block;
        padding: 4px 0;
        margin: 0 10px;
        left: 0;
        top: 10px;
        right: 0;
        text-align: center;
    }
    .cogen {
        top: 5px;
        left: 5px;
        right: 5px;
    }
    .agloop .age-info {
        padding: 0 5px 0 0;
        margin: 0 10px 20px 0;
    }
    .overage .age-info .agedate {

    font: 800 40px/1.0 'Montserrat';

}
.overage .agloop .age-info {

    width: 60px;

}
.overage .atime h3 {

    font: bold 16px/1.1 Montserrat;

}
.eiginn:hover .jamz {

    bottom: 70%;

}
.eiginn:hover .gspan {

    top: 35%;

}
    .cogen .titloc {
        margin-left: 85px;
        font: 14px Montserrat;
    }
    #clockdiv {
        margin: 30px auto 0;
        width: 168px;
    }
    .unday, .unhour, .unminute, .unsecond {
        width: 40px;
    }
    .days, .hours, .minutes, .seconds {
        font: bold 22px Montserrat;
    }
    .ctr img {
        width: 32px;
        height: auto;
    }
    .list table.siswa td.vmd {
        vertical-align: top;
    }
    .avatar {
        width: 50px;
        height: 50px;
        padding: 4px;
    }
    .comment-meta {
    margin-right: 0px;
    }
    .footbar {
    padding: 40px 0;
    margin: 0;
}
}

@media screen and (max-width: 320px) {
    .home .nofixed .homebreak {
        height: 150px;
    }
    .fsearch.fa {
        right: 10px;
    }
    .fmenu.fa {
        left: 10px;
    }
    .grthumb {
        width: 120px;
        height: 120px;
        float: none;
        display: block;
        margin: 0 auto 20px;
    }
    .divsel {
        width: 100px;
    }
    .search_form select {
        width: 120px;
    }
    .masearch {
        width: 293px;
    }
    .boxed .editoz img {
        margin: 20px auto;
        width: auto;
    }
    .search_form {
        width: 295px;
    }
    .search_form fieldset {
        width: 295px;
    }
    .madings {
        padding: 5px;
    }
}
html,
body {
    height: 100%;
    font-family: 'Rubik', sans-serif;
    padding-top: 70px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #111111;
    margin: 0;
    font-weight: 500;
    font-family: 'Rubik', sans-serif;
}

h1 {
    font-size: 60px;
}

h2 {
    font-size: 36px;
    line-height: 1.2;
}

h3 {
    font-size: 30px;
}

h4 {
    font-size: 24px;
}

h5 {
    font-size: 20px;
}

h6 {
    font-size: 14px;
}

p {
    font-size: 14px;
    color: #636363;
    line-height: 1.6;
}

img {
    max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
    outline: none;
}

a:hover,
a:focus {
    text-decoration: none;
    outline: none;
}

ul,
ol {
    padding: 0;
    margin: 0;
}

/*---------------------
    Helper CSS
-----------------------*/

.spad {
    padding-top: 90px;
    padding-bottom: 90px;
}

.section-title {
    margin-bottom: 70px;
}

.section-title h3 {
    text-transform: uppercase;
    margin-bottom: 20px;
}

.section-title p {
    margin-bottom: 0;
}

.set-bg {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center 0;
}

.text-white h1,
.text-white h2,
.text-white h3,
.text-white h4,
.text-white h5,
.text-white p,
.text-white span,
.text-white li,
.text-white a {
    color: #fff;
}

/*---------------------
    Commom elements
-----------------------*/

/* Buttons */

.site-btn {
    position: relative;
    display: inline-block;
    text-transform: uppercase;
    background: <?php echo $swarnad['val'] ?>;
    color: #fff;
    padding: 18px 30px;
    font-size: 14px;
    font-weight: 500;
    line-height: 14px;
    border-radius: 50px;
    min-width: 170px;
    text-align: center;
    border: none;
    cursor: pointer;
}

/* Image Popup */

.img-popup-warp .mfp-content,
.img-popup-warp.mfp-ready.mfp-removing .mfp-content {
    opacity: 0;
    -webkit-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.img-popup-warp.mfp-ready .mfp-content {
    opacity: 1;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

/* Preloder */

#preloder {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 999999;
    background: #fff;
}

.loader {
    width: 40px;
    height: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    border-radius: 60px;
    animation: loader 0.8s linear infinite;
    -webkit-animation: loader 0.8s linear infinite;
}

@keyframes loader {
    0% {
        -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
    }
    50% {
        -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
        border: 4px solid #673ab7;
        border-left-color: transparent;
    }
    100% {
        -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
    }
}

@-webkit-keyframes loader {
    0% {
        -webkit-transform: rotate(0deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
    }
    50% {
        -webkit-transform: rotate(180deg);
        border: 4px solid #673ab7;
        border-left-color: transparent;
    }
    100% {
        -webkit-transform: rotate(360deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
    }
}

/*---------------------
    Header section
-----------------------*/

.header-section {
    padding: 20px 0;
    overflow: hidden;
    background-color: white;
}

.site-logo {
    display: inline-block;
    margin-right: 50px;
    padding-top: 20px;
}

.header-info {
    display: inline-block;
    float: right;
}

.header-info .hf-item {
    display: inline-block;
    margin-left: 35px;
}

.header-info .hf-item i {
    width: 45px;
    height: 45px;
    display: inline-block;
    position: relative;
    text-align: center;
    color: <?php echo $swarnad['val'] ?>;
    font-size: 17px;
    padding-top: 13px;
    margin-right: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.header-info .hf-item i:after {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    border: 1px solid #d2d2db;
    -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
            transform: rotate(45deg);
    border-radius: 2px;
}

.header-info .hf-item p {
    display: inline-block;
    position: relative;
    top: 10px;
    margin-bottom: 0;
}

.header-info .hf-item p span {
    display: block;
    font-size: 12px;
    text-transform: uppercase;
    color: #020031;
    font-weight: 500;
}

.nav-switch {
    display: none;
}

.nav-section {
    background: #020031;
}

.nav-section .nav-right {
    float: right;
    padding-top: 23px;
}

.nav-section .nav-right a {
    color: #fff;
    margin-left: 30px;
    font-size: 16px;
}

.main-menu {
    list-style: none;
}

.main-menu li {
    display: inline;
}

.main-menu li a {
    display: inline-block;
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 500;
    padding: 15px 20px;
    margin-right: -5px;
    -webkit-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
}

.main-menu li a:hover {
    background: <?php echo $swarnad['val'] ?>;
}

.main-menu li.active a {
    background: <?php echo $swarnad['val'] ?>;
}

/*---------------------
    Hero Section
-----------------------*/

.hs-item {
    min-height: 491px;
    position: relative;
    display: table;
    width: 100%;
}

.hs-item .hs-text {
    position: relative;
    display: table-cell;
    vertical-align: middle;
    z-index: 2;
}

.hs-item .hs-subtitle {
    font-size: 16px;
    text-transform: uppercase;
    color: <?php echo $swarnad['val'] ?>;
    font-weight: 500;
    letter-spacing: 2px;
    margin-bottom: 30px;
    position: relative;
    opacity: 0;
    top: 50px;
}

.hs-item .hs-title {
    color: #fff;
    font-size: 48px;
    margin-bottom: 25px;
    position: relative;
    left: 150px;
    opacity: 0;
    text-transform: uppercase;
}

.hs-item .hs-des {
    color: #fff;
    font-size: 16px;
    line-height: 2;
    position: relative;
    left: 150px;
    opacity: 0;
}

.hs-item .site-btn {
    margin-top: 30px;
    opacity: 0;
    top: 50px;
}

.owl-item.active .hs-item .hs-title,
.owl-item.active .hs-item .hs-des,
.owl-item.active .hs-item .hs-subtitle,
.owl-item.active .hs-item .site-btn {
    left: 0;
    top: 0;
    opacity: 1;
}

.owl-item.active .hs-item .hs-subtitle {
    -webkit-transition: all 0.5s ease 0.4s;
    -o-transition: all 0.5s ease 0.4s;
    transition: all 0.5s ease 0.4s;
}

.owl-item.active .hs-item .hs-title {
    -webkit-transition: all 0.5s ease 0.6s;
    -o-transition: all 0.5s ease 0.6s;
    transition: all 0.5s ease 0.6s;
}

.owl-item.active .hs-item .hs-des {
    -webkit-transition: all 0.5s ease 0.8s;
    -o-transition: all 0.5s ease 0.8s;
    transition: all 0.5s ease 0.8s;
}

.owl-item.active .hs-item .site-btn {
    -webkit-transition: all 0.5s ease 1s;
    -o-transition: all 0.5s ease 1s;
    transition: all 0.5s ease 1s;
}

.hero-slider .owl-dots {
    position: absolute;
    width: 100%;
    bottom: 30px;
    left: 0;
    z-index: 1;
    text-align: center;
}

.hero-slider .owl-dots .owl-dot {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 10px;
    background: #fff;
    margin: 0 5px;
}

.hero-slider .owl-dots .owl-dot.active {
    background: <?php echo $swarnad['val'] ?>;
}

/*---------------------
    Counter Section
-----------------------*/

.counter-section {
    background: #020031;
    padding: 40px 0;
}

.counter-section .big-icon {
    display: block;
    float: left;
    width: 71px;
    height: 71px;
    border-radius: 70px;
    background: #fff;
    text-align: center;
    padding-top: 20px;
    margin-right: 15px;
}

.counter-section .big-icon i {
    font-size: 30px;
    color: <?php echo $swarnad['val'] ?>;
}

.counter-section .counter {
    padding-left: 40px;
}

.counter-section .counter .counter-item {
    min-width: 100px;
    font-size: 16px;
    text-transform: uppercase;
    color: #fff;
    border-right: 1px solid #35335a;
    text-align: center;
    display: inline-block;
}

.counter-section .counter .counter-item:last-child {
    border-right: none;
}

.counter-section .counter .counter-item h4 {
    font-size: 36px;
    color: #fff;
    margin-bottom: 4px;
}

.counter-content {
    padding-left: 90px;
}

.counter-content h2 {
    font-size: 20px;
    color: #fff;
    text-transform: uppercase;
    margin-bottom: 10px;
    padding-top: 10px;
}

.counter-content p {
    text-transform: uppercase;
    color: #fff;
}

.counter-content p i {
    color: <?php echo $swarnad['val'] ?>;
    margin-right: 10px;
}

/*---------------------
    Service Section
-----------------------*/

.services {
    margin-bottom: -50px;
}

.service-item {
    margin-bottom: 50px;
}

.service-item .service-icon {
    width: 45px;
    float: left;
}

.service-item .service-icon img {
    max-width: 100%;
}

.service-item .service-content {
    padding-left: 75px;
}

.service-item .service-content h4 {
    margin-bottom: 15px;
    font-weight: 400;
}

/*---------------------
    Enroll Section
-----------------------*/

.enroll-section {
    position: relative;
}

.enroll-section:after {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: #000;
    opacity: 0.8;
}

.enroll-section .container {
    position: relative;
    z-index: 1;
}

.enroll-section .section-title {
    margin-bottom: 40px;
}

.enroll-list-item {
    padding-left: 70px;
    position: relative;
    padding-bottom: 15px;
    margin-bottom: 10px;
}

.enroll-list-item span {
    position: absolute;
    width: 40px;
    height: 40px;
    left: 0;
    top: 0;
    text-align: center;
    border-radius: 50px;
    background: <?php echo $swarnad['val'] ?>;
    font-size: 16px;
    font-weight: 500;
    padding-top: 10px;
}

.enroll-list-item h5 {
    font-weight: 400;
    margin-bottom: 10px;
}

.enroll-list-item:after {
    position: absolute;
    content: '';
    height: calc(100% - 45px);
    left: 20px;
    top: 48px;
    border-left: 1px dashed #6c6e70;
}

.enroll-list-item:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
}

.enroll-list-item:last-child:after {
    display: none;
}

/*---------------------
    Courses Section
-----------------------*/

.courses-section .container {
    margin-bottom: -50px;
}

.course-item {
    margin-bottom: 50px;
}

.course-item .course-thumb {
    margin-bottom: 45px;
    position: relative;
}

.course-item .course-thumb img {
    min-width: 100%;
}

.course-item .course-thumb .course-cat {
    position: absolute;
    text-align: center;
    width: 100%;
    left: 0;
    bottom: -19px;
}

.course-item .course-thumb .course-cat span {
    min-width: 150px;
    bottom: 0;
    background: <?php echo $swarnad['val'] ?>;
    padding: 10px 15px;
    text-align: center;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: bold;
    color: #fff;
    display: inline-block;
    border-radius: 50px;
    letter-spacing: 2px;
}

.course-item .course-info {
    text-align: center;
    margin: 0 -15px;
}

.course-item .course-info .date {
    color: <?php echo $swarnad['val'] ?>;
    font-size: 14px;
    margin-bottom: 10px;
}

.course-item .course-info h4 {
    font-weight: 400;
    line-height: 1.3;
}

.course-item .course-info .cource-price {
    padding-top: 15px;
    color: <?php echo $swarnad['val'] ?>;
}

.course-item .course-info .cource-price span {
    font-size: 14px;
    font-weight: 500;
    color: #b7b7b7;
}

/*---------------------
    Fact Section
-----------------------*/

.fact-section {
    background-position: center center;
    position: relative;
}

.fact-section:after {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: #000;
    opacity: 0.8;
}

.fact-section .container {
    position: relative;
    z-index: 1;
}

.fact {
    text-align: center;
}

.fact-icon {
    font-size: 48px;
    color: #fff;
    width: 50px;
    display: inline-block;
}

.fact-text {
    padding-left: 20px;
    display: inline-block;
    text-align: left;
}

.fact-text h2 {
    color: <?php echo $swarnad['val'] ?>;
    font-weight: 400;
}

.fact-text p {
    margin-bottom: 0;
    text-transform: uppercase;
    color: #fff;
}

/*---------------------
    Event Section
-----------------------*/

.event-item {
    margin-bottom: 50px;
}

.event-item .event-thumb {
    margin-bottom: 45px;
    position: relative;
}

.event-item .event-thumb img {
    min-width: 100%;
}

.event-item .event-thumb .event-date {
    position: absolute;
    text-align: center;
    width: 100%;
    left: 0;
    bottom: -19px;
}

.event-item .event-thumb .event-date span {
    min-width: 170px;
    bottom: 0;
    background: <?php echo $swarnad['val'] ?>;
    padding: 10px 15px;
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    display: inline-block;
    border-radius: 50px;
    letter-spacing: 2px;
}

.event-item .event-info {
    text-align: center;
}

.event-item .event-info h4 {
    margin-bottom: 20px;
    font-weight: 400;
}

.event-item .event-info p {
    margin-bottom: 30px;
}

.event-item .event-info p i {
    color: <?php echo $swarnad['val'] ?>;
    padding-left: 13px;
    padding-right: 4px;
}

.event-item .event-info .event-readmore {
    font-size: 13px;
    text-transform: uppercase;
    color: #b7b7b7;
    letter-spacing: 2px;
    font-weight: 500;
}

.event-item .event-info .event-readmore i {
    color: <?php echo $swarnad['val'] ?>;
}

/*---------------------
    Gallery Section
-----------------------*/

.gallery .gallery-item {
    width: 12.5%;
    position: relative;
}

.gallery .gallery-item:after {
    content: '';
    display: block;
    clear: both;
}

.gallery .gallery-item:before {
    position: absolute;
    content: '';
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    background: #000;
    opacity: 0;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.gallery .gallery-item:hover:before {
    opacity: 0.3;
}

.gallery .gallery-item.gi-big,
.gallery .gallery-item.gi-long {
    width: 25%;
}

.gallery .gallery-item a {
    position: absolute;
    width: 50px;
    height: 50px;
    background: <?php echo $swarnad['val'] ?>;
    color: #fff;
    left: 50%;
    top: 60%;
    margin-left: -25px;
    margin-top: -25px;
    border-radius: 50%;
    padding-top: 13px;
    text-align: center;
    opacity: 0;
    z-index: 1;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.gallery .gallery-item a i {
    font-size: 24px;
}

.gallery .gallery-item:hover a {
    opacity: 1;
    top: 50%;
    -webkit-transition: all 0.4s cubic-bezier(0.55, 0.09, 0.68, 0.53) 0s;
    -o-transition: all 0.4s cubic-bezier(0.55, 0.09, 0.68, 0.53) 0s;
    transition: all 0.4s cubic-bezier(0.55, 0.09, 0.68, 0.53) 0s;
}

.gallery .grid-sizer {
    width: 12.5%;
}

/*---------------------
    Blog Section
-----------------------*/

.blog-item {
    margin-bottom: 60px;
    overflow: hidden;
}

.blog-item .blog-thumb {
    width: 230px;
    height: 170px;
    float: left;
}

.blog-item .blog-content {
    padding-left: 258px;
}

.blog-item .blog-content h4 {
    font-size: 22px;
    font-weight: 400;
    margin-bottom: 8px;
    line-height: 1.4;
}

.blog-item .blog-meta {
    margin-bottom: 15px;
}

.blog-item .blog-meta span {
    margin-right: 10px;
    font-size: 12px;
    color: #b7b7b7;
}

.blog-item .blog-meta span i {
    color: <?php echo $swarnad['val'] ?>;
    margin-right: 3px;
}

/*---------------------
    Newsletter Section
-----------------------*/

.newsletter-section {
    background: #f7f7f7;
    padding: 50px 0;
}

.newsletter-section .newsletter {
    position: relative;
    margin-top: 12px;
}

.newsletter-section .newsletter input {
    width: 100%;
    font-size: 14px;
    padding: 18px 30px;
    border: none;
    border-radius: 50px;
    padding-right: 170px;
}

.newsletter-section .newsletter .site-btn {
    position: absolute;
    right: 0;
    top: 0;
    height: 100%;
    border-radius: 0px 50px 50px 0px;
    min-width: 150px;
}

/*---------------------
    Footer Section
-----------------------*/

.footer-section {
    background-color: #020031;
    background-image: url("assets/img/footer-bg.png");
    background-repeat: no-repeat;
    background-position: center 75px;
}

.footer-section .footer-top {
    padding: 65px 15px;
}

.footer-section .copyright {
    border-top: 1px solid #312f56;
    padding: 27px 0;
    text-align: center;
}

.footer-section .copyright p {
    color: #b7b7b7;
    margin-bottom: 0;
}

.footer-section .copyright p a {
    color: #fff;
    font-weight: 500;
}

.footer-section .copyright p a:hover {
    color: <?php echo $swarnad['val'] ?>;
}

.footer-widget .fw-title {
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 25px;
    padding-top: 10px;
}

.footer-widget p,
.footer-widget span {
    color: #b7b7b7;
}

.footer-widget ul {
    list-style: none;
}

.footer-widget .about-widget img {
    margin-bottom: 30px;
}

.footer-widget .about-widget p {
    margin-bottom: 35px;
}

.footer-widget .social a {
    color: #b7b7b7;
    margin-right: 15px;
}

.footer-widget .dobule-link ul {
    display: inline-block;
}

.footer-widget .dobule-link ul a {
    display: block;
    font-size: 14px;
    color: #b7b7b7;
    margin-bottom: 15px;
}

.footer-widget .dobule-link ul a:hover {
    color: <?php echo $swarnad['val'] ?>;
}

.footer-widget .dobule-link ul li:last-child a {
    margin-bottom: 0;
}

.footer-widget .dobule-link ul:last-child {
    margin-left: 50px;
}

.footer-widget .recent-post li {
    margin-bottom: 25px;
}

.footer-widget .recent-post p {
    margin-bottom: 5px;
}

.footer-widget .recent-post span {
    font-size: 12px;
}

.footer-widget .recent-post span i {
    color: <?php echo $swarnad['val'] ?>;
    margin-right: 5px;
}

.footer-widget .contact li {
    margin-bottom: 15px;
    display: block;
}

.footer-widget .contact li p {
    margin-bottom: 0;
}

.footer-widget .contact i {
    font-size: 12px;
}

/*---------------------
    Other Pages
----------------------
======================*/

.site-breadcrumb {
    padding: 60px 0;
    color: #b7b7b7;
    font-size: 18px;
}

.site-breadcrumb a {
    color: #111111;
}

.site-breadcrumb a i {
    margin: 0;
}

.site-breadcrumb i {
    margin: 0 10px;
}

.site-pageination {
    list-style: none;
}

.site-pageination li {
    display: inline;
    text-align: center;
}

.site-pageination li a {
    display: inline-block;
    min-width: 40px;
    height: 40px;
    border: 1px solid #e1e1e1;
    color: #636363;
    padding-top: 9px;
    font-size: 14px;
    margin-right: 14px;
    border-radius: 2px;
}

.site-pageination li a:hover,
.site-pageination li a.active {
    background: <?php echo $swarnad['val'] ?>;
    border-color: <?php echo $swarnad['val'] ?>;
    color: #fff;
}

/*---------------------
    About page
-----------------------*/

.about-text h5 {
    font-weight: 400;
    margin-bottom: 12px;
}

.about-text .about-list {
    list-style: none;
    padding-top: 10px;
}

.about-text .about-list li {
    font-size: 14px;
    color: #636363;
    margin-bottom: 10px;
}

.about-text .about-list li i {
    color: <?php echo $swarnad['val'] ?>;
}

.testimonial-section {
    background: #f7f7f7;
}

.testimonial-slider .ts-author-pic {
    width: 110px;
    height: 110px;
    border-radius: 50%;
    margin: 5px auto 0;
}

.testimonial-slider .ts-text p {
    font-size: 18px;
    margin-bottom: 20px;
}

.testimonial-slider .ts-text h5 {
    font-size: 18px;
    font-weight: 400;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.testimonial-slider .ts-text span {
    color: <?php echo $swarnad['val'] ?>;
    font-size: 14px;
}

.testimonial-slider .owl-nav {
    position: absolute;
    top: 35px;
    width: 180px;
    left: 40px;
}

.testimonial-slider .owl-prev {
    float: left;
}

.testimonial-slider .owl-next {
    float: right;
}

.testimonial-slider .owl-prev,
.testimonial-slider .owl-next {
    font-size: 36px;
    color: #b7b7b7;
}

.testimonial-slider .owl-dots {
    position: absolute;
    left: -15px;
    bottom: -5px;
    width: 25%;
    padding: 0 15px;
    text-align: center;
}

.testimonial-slider .owl-dots .owl-dot {
    width: 10px;
    height: 10px;
    border-radius: 20px;
    background: #b7b7b7;
    display: inline-block;
    margin: auto 5px;
}

.testimonial-slider .owl-dots .owl-dot.active {
    background: <?php echo $swarnad['val'] ?>;
}

.member {
    text-align: center;
}

.member h5 {
    font-size: 22px;
    font-weight: 400;
    margin-bottom: 5px;
}

.member p {
    color: <?php echo $swarnad['val'] ?>;
    margin-bottom: 0;
    font-weight: 14;
}

.member:hover .member-pic:after {
    opacity: 0.4;
}

.member:hover .member-social {
    opacity: 1;
}

.member:hover .member-social a {
    top: 0;
}

.member:hover .member-social a:nth-child(1) {
    -webkit-transition: all 0.2s;
    -o-transition: all 0.2s;
    transition: all 0.2s;
}

.member:hover .member-social a:nth-child(2) {
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.member:hover .member-social a:nth-child(3) {
    -webkit-transition: all 0.6s;
    -o-transition: all 0.6s;
    transition: all 0.6s;
}

.member .member-pic {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    display: inline-block;
    margin-bottom: 40px;
}

.member .member-pic:after {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: #000;
    opacity: 0;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.member .member-social {
    position: absolute;
    width: 100%;
    left: 0;
    top: 50%;
    margin-top: -6px;
    z-index: 2;
    opacity: 0;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.member .member-social a {
    padding: 0 5px;
    margin: auto 5px;
    color: #fff;
    position: relative;
    top: -20px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    transition: all 0.4s;
}

.member .member-social a:hover {
    color: <?php echo $swarnad['val'] ?>;
}

/*---------------------
    Blog Page
-----------------------*/

.post-item {
    margin-bottom: 60px;
}

.post-item .post-thumb {
    height: 320px;
    margin-bottom: 40px;
}

.post-item .post-thumb-full {
    margin-bottom: 40px;
}

.post-item .post-content h3 {
    font-size: 29px;
    font-weight: 400;
    margin-bottom: 10px;
}

.post-item .post-content h3 a {
    color: #111111;
}

.post-item .post-content p {
    margin-bottom: 0;
}

.post-item .post-meta {
    margin-bottom: 10px;
}

.post-item .post-meta span {
    margin-right: 10px;
    font-size: 14px;
    color: #b7b7b7;
}

.post-item .post-meta span i {
    color: <?php echo $swarnad['val'] ?>;
}

.post-item .tag {
    padding-top: 15px;
    padding-bottom: 40px;
    font-size: 12px;
    text-transform: uppercase;
    color: #b7b7b7;
}

.post-item .tag i {
    color: <?php echo $swarnad['val'] ?>;
    margin-right: 5px;
}

.post-item .post-author {
    padding: 40px 0;
    border-top: 1px solid #f5f5f5;
}

.post-item .post-author .pa-thumb {
    float: left;
    width: 100px;
    height: 100px;
    border-radius: 50%;
}

.post-item .post-author .pa-content {
    padding-left: 130px;
    padding-top: 5px;
}

.post-item .post-author .pa-content h4 {
    font-size: 18px;
    margin-bottom: 10px;
}

.comment-warp {
    padding-top: 40px;
    border-top: 1px solid #f5f5f5;
}

.comment-warp .comment-title {
    font-weight: 400;
    margin-bottom: 35px;
}

.comment-warp .comment-list {
    list-style: none;
}

.comment-warp .comment-list .replay-comment-list {
    list-style: none;
    margin-left: 14%;
}

.comment-warp .comment {
    margin-bottom: 40px;
}

.comment-warp .comment .comment-avator {
    float: left;
    width: 70px;
    height: 70px;
    border-radius: 50%;
}

.comment-warp .comment .comment-content {
    padding-left: 100px;
}

.comment-warp .comment .comment-content .c-date {
    font-size: 12px;
    text-transform: uppercase;
    color: #b7b7b7;
    margin-bottom: 5px;
    display: block;
}

.comment-warp .comment .comment-content h5 {
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: 400;
}

.comment-warp .comment .comment-content p {
    margin-bottom: 0;
}

.comment-warp .comment .comment-content .c-btn {
    display: inline-block;
    font-size: 12px;
    text-transform: uppercase;
    border: 1px solid #e1e1e1;
    color: #111111;
    padding: 5px 25px;
    border-radius: 2px;
    margin-right: 5px;
    margin-top: 15px;
}

.comment-warp .comment .comment-content .c-btn:hover {
    border-color: <?php echo $swarnad['val'] ?>;
    background: <?php echo $swarnad['val'] ?>;
    color: #fff;
}

.comment-form-warp {
    padding: 40px 0;
    border-top: 1px solid #f5f5f5;
}

.comment-form input[type='text'],
.comment-form input[type='email'],
.comment-form textarea {
    width: 100%;
    border: 1px solid #cccccc;
    font-size: 14px;
    padding: 18px 20px;
    margin-bottom: 30px;
    border-radius: 2px;
}

.comment-form textarea {
    height: 150px;
}

.comment-form.--contact input[type='text'],
.comment-form.--contact input[type='email'],
.comment-form.--contact textarea {
    border: 1px solid #e1e1e1;
}

.comment-form.--contact textarea {
    margin-bottom: 50px;
}

.widget {
    margin-bottom: 55px;
    margin-left: -19px;
}

.widget .widget-title {
    font-weight: 400;
    font-size: 24px;
    margin-bottom: 30px;
}

.widget ul {
    list-style: none;
}

.widget ul a {
    font-size: 14px;
    color: #636363;
    margin-bottom: 10px;
    padding: 5px 0;
    display: inline-block;
}

.widget ul a:hover {
    color: <?php echo $swarnad['val'] ?>;
}

.widget .search-widget {
    position: relative;
}

.widget .search-widget input {
    width: 100%;
    border: 1px solid #9d9d9d;
    padding: 10px 15px;
    padding-right: 55px;
    font-size: 14px;
}

.widget .search-widget button {
    position: absolute;
    height: 100%;
    right: 0;
    top: 0;
    border: none;
    width: 50px;
    padding-top: 5px;
    color: #b7b7b7;
    background-color: transparent;
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
}

.widget .recent-post-widget .rp-item {
    margin-bottom: 25px;
    display: block;
    overflow: hidden;
}

.widget .recent-post-widget .rp-thumb {
    width: 70px;
    height: 70px;
    float: left;
    margin-right: 30px;
}

.widget .recent-post-widget .rp-content {
    padding-left: 100px;
}

.widget .recent-post-widget .rp-content p {
    font-size: 12px;
    color: #b7b7b7;
    margin-bottom: 0;
}

.widget .recent-post-widget .rp-content p i {
    color: <?php echo $swarnad['val'] ?>;
}

.widget .recent-post-widget .rp-content h6 {
    font-size: 14px;
    font-weight: 400;
    line-height: 1.5;
    margin-bottom: 10px;
}

.widget .tags a {
    min-width: 80px;
    text-transform: uppercase;
    display: inline-block;
    font-size: 10px;
    line-height: 10px;
    color: #636363;
    padding: 12px 15px;
    border: 1px solid <?php echo $swarnad['val'] ?>;
    margin-right: 5px;
    margin-bottom: 8px;
    text-align: center;
    border-radius: 2px;
}

.post-item.post-details {
    margin-bottom: 0;
}

.post-item.post-details p {
    margin-bottom: 15px;
}

.post-item.post-details blockquote {
    padding: 25px 30px;
    font-size: 16px;
    color: #111111;
    border-left: 3px solid <?php echo $swarnad['val'] ?>;
    -webkit-box-shadow: 0 0 40px #f2f2f2;
            box-shadow: 0 0 40px #f2f2f2;
    margin: 40px 0 35px;
}

/*---------------------
    Contact page
-----------------------*/

.map-section {
    height: 500px;
    position: relative;
}

.map-section .map {
    height: 100%;
}

.contact-info-warp {
    position: absolute;
    width: 400px;
    height: 100%;
    background: rgba(2, 0, 49, 0.8);
    text-align: center;
    z-index: 1;
    padding-top: 70px;
}

.contact-info-warp .contact-info {
    margin-bottom: 40px;
}

.contact-info-warp .contact-info h4 {
    color: #fff;
    font-weight: 400;
    margin-bottom: 8px;
}

.contact-info-warp .contact-info p {
    color: #fff;
    margin-bottom: 0;
}

/*------------------
    Responsive
---------------------*/

@media (min-width: 1200px) {
    .container {
        max-width: 1170px;
    }
}

/* Medium screen : 992px. */

@media only screen and (min-width: 992px) and (max-width: 1199px) {
    .counter-section .counter {
        padding-left: 20px;
    }
    .counter-section .counter .counter-item {
        min-width: 80px;
    }
    .counter-section .counter .counter-item h4 {
        font-size: 35px;
    }
    .widget {
        margin-left: 0;
    }
}

/* Tablet :768px. */

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .header-info .hf-item i {
        float: left;
    }
    .header-info .hf-item p {
        display: block;
    }
    .hs-item {
        height: auto;
        min-height: auto;
        padding: 140px 0;
    }
    .counter-section .counter {
        padding-top: 15px;
        padding-left: 0;
    }
    .counter-section .counter .counter-item {
        min-width: 70px;
    }
    .counter-section .counter .counter-item h4 {
        font-size: 27px;
    }
    .gallery .gallery-item,
    .gallery .gallery-item.gi-big,
    .gallery .gallery-item.gi-long {
        width: 25%;
    }
    .footer-widget {
        margin-bottom: 40px;
    }
    .testimonial-slider .owl-nav {
        left: -16px;
    }
    .member {
        margin-bottom: 40px;
    }
    .sidebar {
        padding-top: 80px;
    }
    .widget {
        margin-left: 0;
    }
}

/* Large Mobile :480px. */

@media only screen and (max-width: 767px) {
    .header-info {
        display: none;
    }
    .site-logo {
        padding: 15px 0;
    }
    .nav-switch {
        position: absolute;
        right: 30px;
        font-size: 30px;
        color: #111;
        top: 25px;
        display: block;
    }
    .nav-section .nav-right {
        display: block;
        float: none;
        text-align: right;
        padding-bottom: 20px;
    }
    .main-menu {
        display: none;
    }
    .main-menu li {
        display: block;
    }
    .main-menu li a {
        padding: 15px;
        display: block;
        border-top: 1px solid #212031;
    }
    .main-menu li a:hover {
        background-color: transparent;
        color: <?php echo $swarnad['val'] ?>;
    }
    .main-menu li.active a {
        background-color: transparent;
    }
    .hs-item {
        min-height: auto;
        padding: 100px 0;
    }
    .hs-item .hs-title {
        font-size: 40px;
    }
    .counter-section .counter {
        float: none;
        padding-top: 30px;
        padding-left: 0;
        text-align: center;
    }
    .gallery .gallery-item,
    .gallery .gallery-item.gi-big,
    .gallery .gallery-item.gi-long {
        width: 50%;
    }
    .fact {
        text-align: left;
        margin-bottom: 15px;
    }
    .footer-widget {
        margin-bottom: 40px;
    }
    .testimonial-slider .owl-nav {
        left: 50%;
        margin-left: -90px;
    }
    .testimonial-slider .owl-dots {
        text-align: center;
        width: 100%;
        left: 0;
        bottom: 0;
    }
    .testimonial-slider .ts-author-pic {
        margin: 5px auto 30px;
    }
    .testimonial-slider .ts-item {
        text-align: center;
        padding-bottom: 50px;
    }
    .member {
        margin-bottom: 40px;
    }
    .sidebar {
        padding-top: 80px;
    }
    .widget {
        margin-left: 0;
    }
    .map-section {
        height: auto;
    }
    .contact-info-warp {
        position: relative;
        height: auto;
        display: block;
        width: 100%;
        padding-bottom: 70px;
    }
    .map-section .map {
        height: 300px;
    }
}

/* small Mobile :320px. */

@media only screen and (max-width: 479px) {
    .hs-item .hs-title {
        font-size: 27px;
    }
    .counter-section .counter .counter-item {
        min-width: 65px;
    }
    .counter-section .counter .counter-item h4 {
        font-size: 25px;
    }
    .course-item .course-info {
        margin: 0;
    }
    .blog-item .blog-thumb {
        height: 230px;
        width: 100%;
        margin-bottom: 20px;
    }
    .blog-item .blog-content {
        padding-left: 0;
    }
    .gallery .gallery-item,
    .gallery .gallery-item.gi-big,
    .gallery .gallery-item.gi-long {
        width: 100%;
    }
    .newsletter-section .newsletter {
        text-align: center;
    }
    .newsletter-section .newsletter input {
        padding-right: 30px;
        margin-bottom: 20px;
        text-align-last: auto;
    }
    .newsletter-section .newsletter .site-btn {
        position: relative;
        border-radius: 50px;
    }
    .post-item .post-author .pa-thumb,
    .comment-warp .comment .comment-avator {
        float: none;
        margin-bottom: 15px;
    }
    .post-item .post-author .pa-content,
    .comment-warp .comment .comment-content {
        padding-left: 0;
    }
}
</style>