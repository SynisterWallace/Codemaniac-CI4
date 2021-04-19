<!doctype html>
<html lang="en">
  <head>
  	<title>Code Maniac</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
        <link rel="stylesheet" href="<?= base_url('css/courses.css') ?>">
           
        <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
		

	

        <!-- Page Content  -->
      <div id="content" class="p-5 p-md-100 pt-5" >
      <div class="pl-5">
        <div class="row mb-3">
            <div class="col">
                <h2 class="mb-4">Dashboard</h2> 
            </div>
            <div class="col">
                <div class="form-outline">
                <input  type="search" id="form1" class="form-control" placeholder="Search" aria-label="Search" style="max-width:20em; width:100%; margin-left:10em; border-radius:10em;"/>
                </div>
            </div>
        </div>

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'All')" >All</button>
            <button class="tablinks" onclick="openCity(event, 'Current')" id="defaultOpen">Current</button>
            <button class="tablinks" onclick="openCity(event, 'Pending')">Pending</button>
            <button class="tablinks" onclick="openCity(event, 'Completed')">Compeletd</button>
        </div>

        <div id="All" class="tabcontent">

            <div class="row">
            <div class="col-md-4"> 
                <p style="font-size: 20px;">Statement Input dan Output dalam pemrograman java</p>
                <p style="color: #A1A1A1;">Pemrograman Dasar</p>

                <div class="row waktu">
                <div class="col">
                    <p style="color: #A1A1A1;">5 Sub Topik</p>
                </div>
                <div class="col">
                    <p style="text-align: right; color: #A1A1A1;">1:09:05</p>
                </div>
                </div>
                <img src="<?= base_url("images/Rectangle 14.png")?>"style="max-width:500px; width:100%">
                

                <button class="btn"><a>Continue</a></button>
            </div>
            <div class="col-md-4" style="margin-left:4em"> 
                <p style="font-size: 20px;">Dasar Logika dan Aritmatika Pemrograman</p>
                <p style="color: #A1A1A1;">Pemrograman Dasar</p>
                

                <div class="row waktu">
                <div class="col">
                    <p style="color: #A1A1A1;">5 Sub Topik</p>
                </div>
                <div class="col">
                    <p style="text-align: right; color: #A1A1A1;">1:09:05</p>
                </div>
                </div>
                <img src="<?= base_url("images/Rectangle 18.png")?>"style="max-width:500px; width:100%">
                

                <button class="btn-done"><a>Locked</a></button>
            </div>
            </div>
            <div class="challenges" >
            <div class="row" style="margin-top:60px;">
            <div class="col-md-4"> 
                <p style="font-size: 20px;">Tipe Data dan Operator dalam Percabangan</p>
                <p style="color: #A1A1A1;">Pemrograman Dasar</p>

                <div class="row waktu">
                <div class="col">
                    <p style="color: #A1A1A1;">5 Sub Topik</p>
                </div>
                <div class="col">
                    <p style="text-align: right; color: #A1A1A1;">1:09:05</p>
                </div>
                </div>
                <img src="<?= base_url("images/Rectangle 14.png")?>"style="max-width:500px; width:100%">
                

                <button class="btn-pending"><a>Lanjutkan</a></button>
            </div>
            <div class="col-md-4" style="margin-left:4em"> 
                <p style="font-size: 20px; margin-bottom: 45px;">Struktur Percabangan</p>
                <p style="color: #A1A1A1;">Pemrograman Dasar</p>
                

                <div class="row waktu">
                <div class="col">
                    <p style="color: #A1A1A1;">5 Sub Topik</p>
                </div>
                <div class="col">
                    <p style="text-align: right; color: #A1A1A1;">1:09:05</p>
                </div>
                </div>
                <img src="<?= base_url("images/Rectangle 18.png")?>"style="max-width:500px; width:100%">
                

                <button class="btn-pending"><a>Lanjutkan</a></button>
            </div>
            </div>
            </div>
        </div>

        <div id="Current" class="tabcontent">
        <div class="row">
            <div class="col-md-4"> 
                <p style="font-size: 20px;">Statement Input dan Output dalam pemrograman java</p>
                <p style="color: #A1A1A1;">Pemrograman Dasar</p>

                <div class="row waktu">
                <div class="col">
                    <p style="color: #A1A1A1;">5 Sub Topik</p>
                </div>
                <div class="col">
                    <p style="text-align: right; color: #A1A1A1;">1:09:05</p>
                </div>
                </div>
                <img src="<?= base_url("images/Rectangle 14.png")?>"style="max-width:500px; width:100%">
                

                <button class="btn"><a>Continue</a></button>
            </div>
            </div>
        </div>

        <div id="Pending" class="tabcontent">
        <div class="row">
            <div class="col-md-4"> 
                <p style="font-size: 20px;">Tipe Data dan Operator dalam Percabangan</p>
                <p style="color: #A1A1A1;">Pemrograman Dasar</p>

                <div class="row waktu">
                <div class="col">
                    <p style="color: #A1A1A1;">5 Sub Topik</p>
                </div>
                <div class="col">
                    <p style="text-align: right; color: #A1A1A1;">1:09:05</p>
                </div>
                </div>
                <img src="<?= base_url("images/Rectangle 14.png")?>"style="max-width:500px; width:100%">
                

                <button class="btn-pending"><a>Lanjutkan</a></button>
            </div>
            <div class="col-md-4" style="margin-left:4em"> 
                <p style="font-size: 20px; margin-bottom: 45px;">Struktur Percabangan</p>
                <p style="color: #A1A1A1;">Pemrograman Dasar</p>
                

                <div class="row waktu">
                <div class="col">
                    <p style="color: #A1A1A1;">5 Sub Topik</p>
                </div>
                <div class="col">
                    <p style="text-align: right; color: #A1A1A1;">1:09:05</p>
                </div>
                </div>
                <img src="<?= base_url("images/Rectangle 18.png")?>"style="max-width:500px; width:100%">
                

                <button class="btn-pending"><a>Lanjutkan</a></button>
            </div>
            </div>
        </div>
           
        <div id="Completed" class="tabcontent">
        <div class="row">
        <div class="col-md-4" style="margin-left:4em"> 
                <p style="font-size: 20px;">Dasar Logika dan Aritmatika Pemrograman</p>
                <p style="color: #A1A1A1;">Pemrograman Dasar</p>
                

                <div class="row waktu">
                <div class="col">
                    <p style="color: #A1A1A1;">5 Sub Topik</p>
                </div>
                <div class="col">
                    <p style="text-align: right; color: #A1A1A1;">1:09:05</p>
                </div>
                </div>
                <img src="<?= base_url("images/Rectangle 18.png")?>"style="max-width:500px; width:100%">
                

                <button class="btn-done"><a>Locked</a></button>
            </div>
        </div>
        
    </div>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/popper.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
    <script>
        function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>