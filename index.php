<!DOCTYPE html>
<html lang="en">
<head>
  <title>Launchpad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="sty.css" rel="stylesheet" type="text/css">
  <link href="boo.min.css" rel="stylesheet" type="text/css">
</head>
  <script src="jsq.min.js"></script>
  <script src="boot.min.js"></script>
  <script src="js.js"></script>
</head>
<body id="body" style="display:none; height:1500px">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">HearthunterPro</a>
    </div>
    <ul class="nav navbar-nav">
      <li id="home" class="active" value="0" onClick="selH()"><a>Home</a></li>
      
      <li class="dropdown" id="a" value="1" onClick="selH1()">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Ableton<span class="caret"></span></a>
      <ul class="dropdown-menu">
            <li><a href="#Sound">Sound</a></li>
            <li><a href="#Drums">Drums</a></li>
            <li><a href="#Instruments">Instruments</a></li>
            <li><a href="#Audio">AudioEffects</a></li>
            <li><a href="#MIDI">MIDI Effects</a></li>
            <li><a href="#MAX">MAX for LIVE</a></li>
            <li><a href="#Plugin">Plug-ins</a></li>
            <li><a href="#Clips">Clips</a></li>
            <li><a href="#Samples">Samples</a></li>
          </ul>
      </li>
      
      <li id="op" value="6" onClick="selH2()"><a>Open PROJECTFLIE</a></li>
      
      <li id="mfl" value="2" onClick="selH3()"><a>MAX FOR LIVE</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:50px;">
  <div class="row">
    
  <div>
  
    <nav class="col-sm-3 navbar-left menu" id="Home" style="width:180; display:none;">
      <ul class="nav nav-pills nav-stacked" style="margin-top:50px; width:180px">
        <li class="active"><a href="#section1">Youtube</a></li>
        <li><a href="#section2">Fackbook</a></li>
        <li><a href="#section3">Instagam 3</a></li>
          </ul>
      </ul>
    </nav>

    <nav class="col-sm-3 navbar-left" id="A1" style="width:180; display:none;">
      <ul class="nav nav-pills nav-stacked" style="margin-top:50px; width:180px">
        <li class="active"><a href="#CATEGORIES">Ableton</a></li>
        <li><a href="#Sound">Sound</a></li>
            <li><a href="#Drums">Drums</a></li>
            <li><a href="#Instruments">Instruments</a></li>
            <li><a href="#Audio">AudioEffects</a></li>
            <li><a href="#MIDI">MIDI Effects</a></li>
            <li><a href="#MAX">MAX for LIVE</a></li>
            <li><a href="#Plugin">Plug-ins</a></li>
            <li><a href="#Clips">Clips</a></li>
            <li><a href="#Samples">Samples</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    
    <nav class="col-sm-3 navbar-left" id="Op" style="width:180; display:none;">
      <ul class="nav nav-pills nav-stacked" style="margin-top:50px; width:180px">
        <li class="active"><a href="#OP">OpenProJect</a></li>
        <li><a href="#OP1">ดาวโหลดไฟล์ ProJect</a></li>
        <li><a href="#OP2">แตกไฟล์ที่โหลดมา</a></li>
        <li><a href="#OP3">เปิดไฟล์ .als</a></li>
        <li><a href="#OP4">ตัวสอบไฟล์ที่โหลด</a></li>
        <li><a href="#OP5">ตัวสอบไฟล์เสียง</a></li>
        <li><a href="#OP6">ตัวหาข้อบกพร้อง</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    
    <nav class="col-sm-3 navbar-left" id="Mfl" style="width:180; display:none;">
      <ul class="nav nav-pills nav-stacked" style="margin-top:50px; width:180px">
        <li class="active"><a href="#section1">MAX FOR LIVE</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
          </ul>
        </li>
      </ul>
    </nav>
     
    </div>
    
    <div class="col-sm-9 navbar-right" style="width:1000px; ">
      <div id="A" class="A" align="center" style="float:left;
      height: 3000px;
	width:inherit;
	background-color:#666;
	display:none;">    
        <h1>Ableton</h1>
        <img src="img/Untitled-1.png" style="width:500; height:300;" />
        <p>เมนูนี้เป็นตัวในการใช้งานต่าง</p>
      </div>
      
      <div id="OP" class="OP" style="float:left;
      height:3000px;
	width:inherit;
	background-color:#666;
    color:#FFF;
	display:none;">    
    
        <h1 align="center">วิธีเปิด Project</h1>
        <h3>มีหลายคนอยากจะรู้ว่าจะหา Project ไฟล์ที่โหลดแล้วเล่นได้เลยไม่มีไฟล์เสีย ผมแนะนำเลยครับ<p>
        Click ==><a href="http://www.launchpad-pro.com">LaunchpadPro.com</a></p></h3><br><p>
        <b style="color:#F00;">1.</b><text>ดาวโหลดไฟล์ Project</text>
        <p><b style="color:#F00;">2.</b><text>แตกไฟล์ที่โหลดมา</text></p>
        <p><b style="color:#F00;">3.</b><text>เปิดไฟล์ .als</text></p>
        <p><b style="color:#F00;">4.</b><text>ตัวสอบไฟล์ที่โหลด(<text style="color:#F00;">กรณีเปิดไฟล์ไม่ได</text>้)</text></p>
        <p><b style="color:#F00;">5.</b><text>ตัวสอบไฟล์เสียง(<text style="color:#F00;">กรณีกดแล้วไม่มีเสียงขึ้น</text>)</text></p>
        <p><b style="color:#F00;">6.</b><text>ตัวหาข้อบกพร้อง(<text style="color:#F00;">กรณีกดแล้วไม่มีไฟขึ้น</text>)</text></p></p>
        <h1 align="center" id="OP1">1. ดาวโหลดไฟล์ Project</h1>
        
        <h1 align="center" id="OP2">2. แตกไฟล์ที่โหลดมา</h1>
        
        <h1 align="center" id="OP3">3. เปิดไฟล์ .als</h1>
        
        <h1 align="center" id="OP4">4. ตัวสอบไฟล์ที่โหลด</h1>
        
        <h1 align="center" id="OP5">5. ตัวสอบไฟล์เสียง</h1>
        
        <h1 align="center" id="OP6">6. ตัวหาข้อบกพร้อง</h1>
        
        
      </div>
      
      <div id="MFL" class="MFL" align="center" style="float:left;
	width:inherit;
	background-color:#09F;
	display:none;">    
        <h1>MAX FOR LIVE</h1>
      </div>
      
      <div id="HOME" class="HOME" align="center" style="float:left;
      height:inherit;
	width:inherit;
	background-color:#09F;
	display:block;">    
        <h1>Home</h1>
      </div>
      
    </div>
  </div>
</div>
</body>
</html>
