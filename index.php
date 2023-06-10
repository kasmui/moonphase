<?php
//
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Posisi Matahari & Bulan</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="https://blogchem.com/kalender/kalender.png">  
		<script type="text/javascript" src="https://blogchem.com/moonphase/astronomy.browser.js"></script>
		<script type="text/javascript" src="PrayTimes.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<script type="text/javascript" src="https://blogchem.com/moonphase/moment.min.js"></script>
		<script type="text/javascript" src="https://blogchem.com/moonphase/suncalc.js"></script>
		<script type="text/javascript" src="https://blogchem.com/moonphase/mooncalc.js"></script>
		
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/series-label.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
		<script src=" https://unpkg.com/@joergdietrich/leaflet.terminator@1.0.0/L.Terminator.js"></script>
		<script src="https://unpkg.com/@tabler/core@1.0.0-beta9/dist/js/tabler.min.js"></script>
		<script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>

  <script>
    // Mendeteksi jenis perangkat
    function detectDevice() {
      var userAgent = navigator.userAgent || navigator.vendor || window.opera;

      if (/android/i.test(userAgent)) {
        return 'Android';
      }

      if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        return 'iOS';
      }

      if (/Windows Phone/.test(userAgent)) {
        return 'Windows Phone';
      }

      if (/Mac/.test(userAgent)) {
        return 'Mac';
      }

      if (/Windows/.test(userAgent)) {
        return 'Windows';
      }

      if (/Linux/.test(userAgent)) {
        return 'Linux';
      }

      return 'Unknown';
    }
</script>
		<style>    
			/* Center the text within the body, table, and div elements */
			body, table, div {
			  text-align: center;
			  font-size: 15px;
			}
																						   
			/* Set the background color of the body */
			body {
			  background-color: ;
			}

			/* Add a border and padding to the table */
			table {
			  border-collapse: collapse;
			  padding: 5px;
			  font-size: 15px;
			  border: 1px solid #ccc;
			  text-align: center;
			}

			/* Style the table headers */       
			th {
			  background-color: ;
			  color: #FFFFFF;
			  font-weight: bold;
			  padding: 5px;
			  font-size: 15px;
			  border: 1px solid #ccc;
			}

			/* Style the table cells */
			td {
			  padding: 5px;
			  font-size: 15px;
			  border: 1px solid #ccc;
			  vertical-align: top;
			  text-align: center;
			}
			
			

			/* Set the font for the page */
			body, input, select, textarea, h1, h2, td, iframe {
			  font-family: times, sans-serif;
			}

			/* Style the input boxes */
			input[type="text"]{
			  border: 1px solid #CCCCCC;
			  padding: 5px;
			  border-radius: 5px;
			  font-weight: bold;
			}
						
			
			/* Style the input boxes */
			input[type="datetime"] {
			  border: 1px solid #CCCCCC;
			  padding: 5px;
			  border-radius: 5px;
			  font-weight: bold;
			}
			
			/* Style the checkbox */
			input[type="checkbox"] {
			  margin-right: 5px;
			}

			/* Center the table */
			#CalcTable {
			  margin: 0 auto;
			}
			
			.NumHeader {
				text-align: center;
				background-color: #ffefbf; 
				color: black;
				font-size: 15px;
				font-weight: bold;
				height: 30px;
				vertical-align: middle;
			}
			.NumHeader2 {
				text-align: left;
				background-color: ; 
				color: black;
				font-size: 15px;
				font-weight: bold;
				height: 30px;
				vertical-align: middle;
			}
			.Numeric {
				font-family: Monospace;
				text-align: center;
				font-size: 15px;
				vertical-align: middle;
			}
			.Numeric2 {
				font-family: Monospace;
				background-color: #eeeeee;
				text-align: center;
				font-size: 15px;    
				vertical-align: middle;
			}
			.Numeric3 {
				font-family: Monospace;
				background-color: #ffffbf;
				text-align: center;
				font-size: 15px;
				vertical-align: middle;
			}			
			input:invalid {
				border: 2px dashed red;
			}

			input:valid {
				border: 1px solid white;
			}

			label {
			  display: inline-block;
			  width: 70px;
			  text-align: left;
			  margin-right: 3px;
			  font-size: 15px;
			}
			span {
			  font-size: 15px;
			}	
			
			p {
			  font-size: 15px;
			}
			
			input.time {
			  display: inline-block;
			  width: 130px;
			  margin-bottom: 5px;
			  margin-right: 20px;
			  font-size: 15px;
			}
			input.data {
			  display: inline-block;
			  width: 70px;
			  border: 1px solid #ddd;
			  margin-bottom: 5px;
			  margin-right: 20px;
			  font-size: 15px;
			}	
			input.gmt {
			  display: inline-block;
			  width: 30px;
			  border: 1px solid #ddd;
			  margin-bottom: 5px;
			  margin-right: 20px;
			  font-size: 15px;
			  background-color: #efffbf;
			}
			input.elevasi {
			  display: inline-block;
			  width: 50px;
			  border: 1px solid #ddd;
			  margin-bottom: 5px;
			  margin-right: 20px;
			  font-size: 15px;
			}
		</style>
		 <style>
		  /* Style untuk div */
		  .left {
			float: left; /* Menempatkan div di sebelah kiri */
			width: 50%; /* Lebar div sebesar 50% */
			height: 310px; /* Tinggi div sebesar 300px */
			padding: 1%;
			background-color: #e3f1ff; /* Warna latar belakang div */
			vertical-align: top;
		  }
		  .center {  
			float: center;
			display: inline-block; /* Menempatkan div di tengah */
			width: 18%; /* Lebar div sebesar 30% */
			height: 310px; /* Tinggi div sebesar 300px */
			background-color: ; /* Warna latar belakang div */
		  }		  

		  .right {
			float: right; /* Menempatkan div di sebelah kanan */
			width: 30%; /* Lebar div sebesar 50% */
			height: 310px; /* Tinggi div sebesar 300px */             
			background-color: ; /* Warna latar belakang div */
			vertical-align: top;
		  }
		</style>
		<style>
			#myDiv {
				display: none;
			}
		</style>
		<style>
			button {
				color: blue;
			}			
			/* saat dihover */
			button:hover {
			  color: red;
			  transition: color 0.3s ease;
			  transform: scale(1.1);
			}				
		</style>	
		<style>
			/* Styling untuk dialog box */
			.dialog-box {
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				padding: 20px;
				background-color: #efffbf;
				box-shadow: 0 0 10px rgba(0,0,0,0.3);
				z-index: 9999;
				display: none;
			}
			.dialog-box h3 {
				margin-top: 0;
			}
		</style>
		<style>
			/* Styling untuk dialog box */
			.konversi-box {
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				padding: 20px;
				background-color: #efffbf;
				box-shadow: 0 0 10px rgba(0,0,0,0.3);
				z-index: 9999;
				display: none;
			}
			.konversi-box h3 {
				margin-top: 0;
			}
		</style>
		
		<style>
			/* Styling untuk dialog box */
			.hari-box {
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				padding: 20px;
				background-color: #efffbf;
				box-shadow: 0 0 10px rgba(0,0,0,0.3);
				z-index: 9999;
				display: none;
			}
			.hari-box h3 {
				margin-top: 0;
			}
		</style>
		<style>
			/* Styling untuk dialog box */
			.info-box {
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				padding: 20px;
				background-color: #efffbf;
				box-shadow: 0 0 10px rgba(0,0,0,0.3);
				z-index: 9999;
				display: none;
			}
			.info-box h3 {
				margin-top: 0;
			}
		</style>		
		<style>
			/* Styling untuk ketanggal box */
			.ketanggal-box {
				position: fixed;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
				padding: 20px;
				background-color: #efffbf;
				box-shadow: 0 0 10px rgba(0,0,0,0.3);
				z-index: 9999;
				display: none;
			}
			.ketanggal-box h3 {
				margin-top: 0;
			}
			.tengah {
				text-align: center;
			}
			.kiri {
				text-align: left;
			}
			.kanan {
				text-align: right;
			}	
			.font15 {
				font-size: 15px;
			}
			.font20 {
				font-size: 20px;
			}
			.font25 {
				font-size: 25px;
			}	
			.merah {
				color: red;
			}
			.hijau {
				color: green;
			}
			.biru {
				color: blue;
			}
			.tebal {
				font-weight: bold;
			}
			.miring {
				font-style: italic;
			}
		</style>
		<style>
			.menu {
				position: relative;
				display: inline-block;
				cursor: pointer;
			}

			.dropdown {
				display: none;
				position: absolute;
				text-align: left;
				background-color: #f3ffff;
				min-width: 150px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
				z-index: 1;
			}

			.menu:hover .dropdown {
				display: block;
			}

			.dropdown a {
				color: black;
				padding: 5px 8px;
				text-decoration: none;
				display: block;
			}

			.dropdown a:hover {
				background-color: #ffff73;
			}
			button {
				border: 1px solid #2693ff;
			}
			button.nol {
				border: 0px solid #2693ff;
				background-color: #ececfb;
			}
			.nol {
			  border: none;
			  background-color: transparent;
			  cursor: pointer;
			  text-decoration: underline;
			}
		</style>
		<style>
		#canvas-animation {
		  width: 30px; /* Lebar animasi */
		  height: 30px; /* Tinggi animasi */
		  margin: 0;
		  overflow: hidden;
		  background-color: #ffffff;
		}
		
        #map-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 600px;
        }

        #map {
            width: 100%;
            height: 100%;
        }
        #search-form {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        #search-input {
            margin-right: 10px;
			font-size: 15px;
			font-weight: normal;
        }		
		</style>
    </head>
    <body>
		<script>
			var iTanggalM = 0;
			var iTanggalH = 0;
			var iBulanM = 0;
			var iBulanH = 0;
			var iTahunM = 0;
			var iTahunH = 0;
			var iTahunJ = 0;              

			function intPart(floatNum) {
			return(floatNum<-0.0000001? Math.ceil(floatNum-0.0000001) : Math.floor(floatNum+0.0000001));
			}

			function hitung_Hijriah(d,m,y) {
				mPart = (m-13)/12;
				jd = intPart((1461*(y+4800+intPart(mPart)))/4)+
				intPart((367*(m-1-12*(intPart(mPart))))/12)-
				intPart((3*(intPart((y+4900+intPart(mPart))/100)))/4)+d-32075;
				l = jd-1948440+10632;
				n = intPart((l-1)/10631);
				l = l-10631*n+354;
				j = (intPart((10985-l)/5316))*(intPart((50*l)/17719))+(intPart(l/5670))*(intPart((43*l)/15238));
				l = l-(intPart((30-j)/15))*(intPart((17719*j)/50))-(intPart(j/16))*(intPart((15238*j)/43))+29;
				iBulanH = intPart((24*l)/709);
				iTanggalH = l-intPart((709*iBulanH)/24);

				tambahan = 0;  // tambahan adalah penyesuaian tanggal hijiriyah, -2,-1,0,+1,+2

				iTanggalH = iTanggalH + tambahan;			
				iTahunH = 30*n+j-30;
				iBulanH -= 1;
				if (iTanggalH > 30){
				iTanggalH = 1
				iBulanH = iBulanH + 1;
				}
			}



			function hitung_Tanggal(format) {
			var namaBulanE = new Array( "January","February","March","April","May","June","July","August","September","October","November","December");
			var namaBulanH = new Array( "Muharram","Safar","Rabi Al-Awwal","Rabi Al-Thani","Jumada Al-Ula","Jumada Al-Thani","Rajab","Shaban","Ramadan","Shawwal","Dhul Qada","Dhul Hijja");
			var namaBulanI = new Array( "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
			var namaBulanHI = new Array( "Muharram","Safar","Rabi'ul Awal","Rabi'ul Akhir","Jumadil Awal","Jumadil Akhir","Rajab","Sya'ban","Ramadhan","Syawal","Dzul Qa'dah","Dzul Hijjah");
			var namaBulanJ = new Array( "Suro","Sapar","Mulud","Ba'da Mulud","Jumadil Awal","Jumadil Akhir","Rejeb","Ruwah","Poso","Syawal","Dulkaidah","Besar");
			var namaHariE = new Array("Thursday","Friday","Saturday","Sunday","Monday","Tuesday","Wednesday");
			var namaHariH = new Array("Al-Hamis","Al-Jum'a","As-Sabt","Al-Ahad","Al-Itsnayna","Ats-Tsalatsa'","Al-Arba'a'");
			var namaHariI = new Array("Kamis","Jumat","Sabtu","Ahad","Senin","Selasa","Rabu");
			var namaHariJ = new Array("Wage","Kliwon","Legi","Pahing","Pon","Wage","Kliwon");

			now = new Date(); 
			iTanggalM = now.getDate();
			iBulanM = now.getMonth();
			iTahunM = now.getYear();
			if(iTahunM<1900) { iTahunM += 1900 }; // Y2K
			hitung_Hijriah(iTanggalM,iBulanM,iTahunM);
			hr = Date.UTC(iTahunM,iBulanM,iTanggalM,0,0,0)/1000/60/60/24;
			iTahunJ = iTahunH+512;
			sHariE = namaHariE[hr%7];         //string nama hari : Inggris
			sHariH = "Yaum "+namaHariH[hr%7]; //string nama hari : Arab
			sHariI = namaHariI[hr%7];         //string nama hari : Indonesia
			sHariJ = namaHariJ[hr%5];         //string nama hari : Jawa (hari pasar)
			sBulanE = namaBulanE[iBulanM];    //string nama bulan : Masehi - Inggris
			sBulanH = namaBulanH[iBulanH];    //string nama bulan : Hijriah - Arab
			sBulanI = namaBulanI[iBulanM];    //string nama bulan : Masehi - Indonesia
			sBulanHI = namaBulanHI[iBulanH];  //string nama bulan : Hijriah - Indonesia
			sBulanJ = namaBulanJ[iBulanH];    //string nama bulan : Hijriah - Jawa

			//iTanggalM : int tanggal Masehi (Inggris/Indonesia)
			//iTanggalH : int tanggal Hijriah (Arab/Indonesia/Jawa)
			zTanggalM = iTanggalM<10? "0"+iTanggalM : iTanggalM; //int tanggal Masehi (Inggris/Indonesia), + leading zero
			zTanggalH = iTanggalH<10? "0"+iTanggalH : iTanggalH; //int tanggal Hijriah (Arab/Indonesia/Jawa), + leading zero
			iBulanM += 1; //int bulan Masehi (Inggris/Indonesia)
			iBulanH += 1; //int bulan Hijriah (Arab/Indonesia/Jawa)
			zBulanM = iBulanM<10? "0"+iBulanM : iBulanM; //int bulan Masehi (Inggris/Indonesia), + leading zero
			zBulanH = iBulanH<10? "0"+iBulanH : iBulanH; //int bulan Hijriah (Arab/Indonesia/Jawa), + leading zero

			switch(format) {
			case 1 : { sDate = sHariI+" "+sHariJ;  break; }
			case 2 : { sDate = sHariI+" "+sHariJ+", "+iTanggalM+" "+sBulanI+" "+iTahunM+" / "+iTanggalH+" "+sBulanHI+" "+iTahunH+" H / "+iTanggalH+" "+sBulanJ+" "+iTahunJ+" J";break; }
			default : { sDate = sHariJ;break; }
			}
			return(sDate);
			}

			function tulis_Tanggal(format) {
			sDate = hitung_Tanggal(format);
			document.write(sDate);
			} 	
		</script>  

		<center>     
			<table width="100%" style="text-align: center; border: 0px solid #fff;">	
				<tr>
				  <td style="background-color: #fff; text-align: center; border: 0px solid #fff; vertical-align: middle; width: 100%;">
					<div style="display: flex; align-items: center;">
					  <div style="flex: 1; text-align: left;">
						<img src="https://blogchem.com/moonphase/moonphase-garis.png" style="vertical-align: middle;  height: 40px;">
					  </div>
					  <div style="flex: 1; text-align: center;">
						<span style="vertical-align: middle;" id="canvas-animation"></span>&nbsp;
						<span class="tebal" style="font-size: 20px; vertical-align: middle;">Moon & Sun Information</span>
					  </div>
					  <div style="flex: 1; text-align: right;">
						<span style="font-size: 20px;" id="CurrentDateTime" class="tebal"></span>
					  </div>
					</div>
				  </td>
				</tr>

     
				<tr>
					<td width="100%" style="text-align: center; border: 0px solid #fff; vertical-align: middle;">  
						<div  id="myDiv" style="padding: 5px;  background-color: #888888 ; height: 25px; display: flex; align-items: center; justify-content: center; width:100%; vertical-align: middle;">   
							<span style="font-size:20px; text-shadow:0px 1px 1px #444; font-family: Times; font-style: italic; color:#fff; text-align: center;">  
								<script type=text/javascript>tulis_Tanggal(2);</script>
							</span>                                                              
						</div>        
					</td>
				</tr>					
				<tr style="border: 1px solid #eee;">   
					<td width="100%" style="text-align: center; border: 1px; background-color: #e3f1ff;"> 
						<table width="100%" style="text-align: center; border: 1px; background-color: #e3f1ff;">
							<tr> 
								<td width="50%" style="text-align: center; border: 1px; background-color: #e3f1ff;">
									<div style="text-align: left;">
										<div style="text-align: justify; border: 0px; background-color: #efffbf; padding: 5px;">
											<p class="font15" style="color: black;"><b>Langkah ubah posisi observer:</b> 1) hilangkan tanda centang, 2) ubah data Date Time dan koordinat atau memilih kota: <span style="font-weight: bold;" id="container"></span>&nbsp;&nbsp;&nbsp;<span><b>Timezone:</b></span> <input type="text" id="EditGmt" pattern="[\-\+]?\d+(\.\d*)?" size="5" class="gmt">&nbsp;&nbsp;<span><b>WL:</b></span> <span class="merah tebal" title="Waktu lokal/setempat" id="waktuLokal"></span></p>
											
											<p class="font15" ><b>Penentuan awal bulan qomariyah:</b> 1) Hilangkan tanda centang, 2) Klik <button>Tempel</button> fase bulan <b>"New Moon"</b> bulan yang dipilih, 3) Klik <button>Tempel Sunset</button>.</p>
										</div>
										<hr/> 
										<div style="text-align: left; border: 0px; background-color: #fff; padding: 5px;">
											<div style="display: flex; align-items: center;">
											  <input type="checkbox" id="AutoTimeCheckBox" onchange="OnToggleAutoTime()" style="display: inline-flex;">
											  <label for="AutoTimeCheckBox" title="Hilangkan tanda centang untuk mengubah posisi observer, lalu ubah value pada datetime, latitude, longitude dan ketinggian sesuai keperluan." style="display: inline-flex; flex-direction: row; align-items: center;">   
												Realtime        
											  </label>      
											</div>

											<label>Date Time:</label>  
											<input class="merah font15 time" type="datetime" id="DateTimeBox" size="20" ><b>WIB</b>&nbsp;&nbsp;<span class="tebal merah" id="statussunset"></span>&nbsp;&nbsp;<button id="buttonPlusOne" title="Tambah 1 hari">+1H</button>&nbsp;<button id="buttonMinusOne" title="Kurangi 1 hari">-1H</button>&nbsp;<button id="buttonPlusOneHour" title="Tambah 1 jam">+1J</button>&nbsp;<button id="buttonMinusOneHour" title="Kurangi 1 jam">-1J</button>&nbsp;<button id="00" title="Seting ke Waktu 00:00:00">00</button>  
											<br/>                
											<label for="EditLatitude">Latitude</label>
											<input type="number" step="0.001" id="EditLatitude" pattern="[\-\+]?\d+(\.\d*)?" size="20" class="data" value="-7.067">      

											<label for="EditLongitude">Longitude</label>
											<input  type="number" step="0.001"  id="EditLongitude" pattern="[\-\+]?\d+(\.\d*)?" size="20" class="data" value="110.4">

											<label for="EditElevation">Elevasi</label>
											<input  type="number" step="0.001"  id="EditElevation" pattern="[\-\+]?\d+(\.\d*)?" size="20" class="elevasi" value="261">
										</div>
										
										<p style="text-align:left;" id="weather-info"><b>Informasi Cuaca Lokal (<span id="gmt"></span>):</b><br/><span id="cuaca"></span></p>	
										<p style="text-align:left;" id="qibla-info"><b>Informasi Kiblat Lokal:</b><br/>
										  <span id="jarakkekabah"></span>, <span id="sudutkiblat"></span> <span id="waktukiblat"></span>		
										</p>
										<p style="text-align:left;" id="praytimes-info"><span id="praytimes"></span></p>

									</div> 									
								</td>
								<td width="18%" style="text-align: center; border: 1px; background-color: #e3f1ff;">
  													
									<div style="text-align: center;">
										<table style="background-color: #efffbf; border: 0px solid #ffffff; text-align: center; padding: 5; ">
											<tr style="padding: 5; ">
												<td colspan=2 style="background-color: black; opacity: 1; text-align: center; width: 100%">
													<a  style="text-decoration: none;"href="https://theskylive.com/moon-info" target="_blank" title="Akses ke Moon Info">
														<center>
														<div style="background-color: #000000; border: 0px solid #ffffff; text-align: center; padding: 5; width: 240px;" id="imageContainer"></div>	
														</center>
													</a>										
												</td>
											</tr>
											<tr><td colspan=2 style="background-color: #ffffff;"></td></tr>
											<tr>
												<td style="padding: 5; ">
													<span><b>Illumination:</b></span>
												</td>
												<td>
													<span id="illumination"></span><!--span id="moonIllumination"></span-->
												</td>
											</tr>
											<tr>
												<td style="padding: 5; ">
													<span><b>Moon age:</b></span></td><td><span id="age"></span> <span id="mph"></span>
												</td>
											</tr>

											<tr>
												<td style="padding: 5; "><span><b>Moon phase:</b></span></td><td><span id="MoonPhaseAngle"></span> (<span class="merah" id="moon_phase"></span>)</td>
											</tr>
											<tr>
												<td style="padding: 5; "><span><b>Trajectory:</b></span></td><td><span id="zodiac"></span></td>
											</tr>									
											<!--tr>
												<td><b>Trajectory:</b></td><td><span id="trajectory"></span></td> 
											</tr-->
											<tr>
												<td colspan=2 style="background-color: #ffffff; opacity: 1; text-align: Center;">
													<span><b>Waktu Shalat:</b></span>  <span id="subuhan"></span>
												</td>
											</tr>
											<tr>
												<td colspan=2 style="background-color: #ffffff; opacity: 1;">
												  <div style="text-align: center;">
													<button id="kotak" onclick="toggleCanvas()">Show Images</button> 
													<div style="display: flex;">
													  <div width="220" class="tengah">
														<canvas id="circleCanvas" width="200" height="200" style="display: none;"></canvas>
														<br/>
														<span class="font15" id="arahKiblat" style="display: none;"><button class="nol">Arah Kiblat</button></span>
													  </div>
													  <div width="220" class="tengah">
														<canvas id="moonSunCanvas" width="200" height="200" style="display: none;"></canvas>
														<br/>
														<span class="font15" id="posisiBulanMatahari" style="display: none;"><button class="nol">Posisi Bulan dan Matahari</button></span>
													  </div>
													</div>
												  </div>				
												</td> 
											</tr>
										</table> 
									</div>  													
							
								</td>
								<td width="30%" style="text-align: center; border: 1px; background-color: #e3f1ff;">
									<div >
										<iframe src="jadwalshalat.php" width="100%" height="330px" frameborder="0"></iframe>
											<div class="menu">
												<button title="Grafik versus waktu">Menu</button>
												<div class="dropdown">
													<a target="_blank" href="https://blogchem.com/kalender/index.php">Kalender & Info</a>
													<a target="_blank" href="https://blogchem.com/ical/">Membuat Kalender</a>
													<a target="_blank" href="rashdulkiblat.php">Rashdul Kiblat</a>
													<a target="_blank" href="https://blogchem.com/moonphase/map.html">Peta Arah Kiblat</a>
													<a target="_blank" href="https://blogchem.com/kalender/visibilitas.php">Peta Hilal</a>
													<a target="_blank" href="https://blogchem.com/moonphase/newmoon.html">New Moon</a>
													<a target="_blank" href="https://blogchem.com/moonphase/eclipse.php">Gerhana</a>
													<a style="text-decoration: none;" href="intro.html" target="_blank">Info</a>
												</div>
											</div>
											<div class="menu">
												<button title="Grafik versus waktu">Chart</button>
												<div class="dropdown">
													<a target="_blank" href="chart_alt.html">Altitude</a>
													<a target="_blank" href="chart_elong.html">Elongasi</a>
													<a target="_blank" href="chart.html">Iluminasi 1</a>
													<a target="_blank" href="chart_ilum.html">Iluminasi 2</a>
													<a target="_blank" href="chart_ilumaltelong.html">3 Chart</a>
												</div>
											</div>			
										<small><button title="Konversi tanggal Masehi ke Hijriyah dan dina pasaran." onclick="showDialog()">Konversi</button><br/><br/>*) Jadwal shalat Fajar menurut MTT Muhammadiyah</small>
									</div> 								
								</td>
							</tr>
						</table>

					</td> 
				</tr>
				<!--tr><td style="text-align: left; border: 0px; background-color: #e3f1ff;">&nbsp;&nbsp;</td></tr>
				<tr><td style="text-align: left; border: 0px; background-color: #e3f1ff;">&nbsp;&nbsp;</td></tr-->
			</table>
			<br/>
			<table width="100%" cellpadding="5" cellspacing="0" id="CalcTable" style="background-color: #efffbf; text-align: center;">      
				<tr>
					<td class="NumHeader">Benda Langit</td>  
					<td class="NumHeader">Right Ascension</td>
					<td class="NumHeader">Declination</td>
					<td class="NumHeader">Azimuth</td>								
					<td class="NumHeader">Altitude</td>
					<td class="NumHeader">Elongation</td>							
					<td class="NumHeader">Rise</td>
					<td class="NumHeader">Set</td>
					<td class="NumHeader">Transit</td>
				</tr>   
				<tr>
					<td class="NumHeader2">Matahari</td> 
					<td id="Sun_ra" class="Numeric"></td>
					<td class="Numeric"><span id="Sun_dec" class="Numeric"></span><br/><span id="utaraselatan" class="Numeric"></span></td>
					<td class="Numeric"><span id="Sun_az" class="Numeric"></span><br/><span id="barattimur" class="Numeric"></span></td> 
					<td title="Ketinggian matahari di atas ufuk" id="Sun_alt" class="Numeric2" style="font-weight:bold;"></td>	
					<td></td>
					<td id="Sunrise" class="Numeric"></td>
					<td class="Numeric"><span id="Sunset"></span><br/><button id="Simpan" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel Sunset</button></td> 
					<td id="" class="Numeric"><span title="Waktu Indonesia Barat" id="sunKulminasi"></span>WL: <span title="Waktu lokal" id="sunKulminasiWL"></span></td>      
					
				</tr>          
				<tr>
					<td class="NumHeader2">Bulan #1</td>
					<td id="Moon_ra" class="Numeric"></td>
					<td id="Moon_dec" class="Numeric"></td>
					<td id="Moon_az" class="Numeric"></td>
					<td title="Ketinggian bulan di atas ufuk"  id="Moon_alt" class="Numeric2" style="font-weight:bold;"></td>
					<td title="Jarak antara matahari dengan bulan"  id="elongation" class="Numeric2" style="font-weight:bold;"></td>							
					<td id="Moonrise" class="Numeric"></td>
					<td id="Moonset" class="Numeric"></td>
					<td id="" class="Numeric"><span title="Waktu Lokal" >Midnight (WL): </span><span title="Waktu Lokal" id="midnight"></span></td>					
				</tr>
			</table>
				
			<table width="100%" cellpadding="5" cellspacing="0" id="CalcTable" style="background-color: #efffbf; text-align: center;">
				<tr><td style="background-color: #fff;" colspan="8"></td></tr>
				<tr>
					<td class="NumHeader2">Bulan #2</td>
					<td class="Numeric3" ><span class="Numeric3" id="Kuarter1"></span>: <span id="TglJam1"></span><br/><button id="Tempel1" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel</button></td>
					<td class="Numeric3" ><span class="Numeric3" id="Kuarter2"></span>: <span id="TglJam2"></span><br/><button id="Tempel2" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel</button></td>
					<td class="Numeric3" ><span class="Numeric3" id="Kuarter3"></span>: <span id="TglJam3"></span><br/><button id="Tempel3" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel</button></td>
					<td class="Numeric3" ><span class="Numeric3" id="Kuarter4"></span>: <span id="TglJam4"></span><br/><button id="Tempel4" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel</button></td>
					<td class="Numeric3" colspan="2"><span title="jeda antara sunset dengan moonset" class="Numeric3">Lag time: </span><span title="jeda antara sunset dengan moonset" id="Selisih" class="Numeric"></span></td> 
				</tr>																		
				<tr>
					<td class="NumHeader2">Bulan #3</td>
					<td class="Numeric3" ><span class="Numeric3" id="Quarter1"></span>: <span id="DateTime1"></span><br/><button id="Tempel11" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel</button></td>
					<td class="Numeric3" ><span class="Numeric3" id="Quarter2"></span>: <span id="DateTime2"></span><br/><button id="Tempel22" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel</button></td>
					<td class="Numeric3" ><span class="Numeric3" id="Quarter3"></span>: <span id="DateTime3"></span><br/><button id="Tempel33" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel</button></td>
					<td class="Numeric3" ><span class="Numeric3" id="Quarter4"></span>: <span id="DateTime4"></span><br/><button id="Tempel44" title="Sebelum klik button Tempel, pastikan sudah menghilangkan tanda Centang pada Realtime agar input Date Time terisi.">Tempel</button></td>
					<td class="Numeric3" colspan="2" ><span class="Numeric3">Jarak: </span><span id="Jarak" class="Numeric"></span></td>   
															
				</tr>							
				<tr>	
					<td colspan="6" height="30;" style="background-color: white;"><span style="text-align: left; font-size: 15;"><b>Penentuan Awal Bulan Qomariyah</b>:</span> <span id="status" style="text-align: left; color: red; background-color: white; font-weight: bold; font-size: 15;"></span>
					</td>								
				</tr>
				<tr>
					<td colspan="6">   
					<!--center>
						<div id="peta-info">
							<div id="map-container">
								<h1>Peta Arah Kiblat</h1>
								<div id="search-form">
									<input type="text" id="search-input" placeholder="Latitude, Longitude or City Name">
									<button onclick="searchLocation()">CARI</button>
								</div>
								<div id="map"></div>
							</div>
						</div>
					</center-->
					</td>
				</tr>
			</table>
			

	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/110/three.min.js"></script>
  
	<script>
	  // Mendeteksi jenis perangkat
	  function detectDevice() {
		var userAgent = navigator.userAgent || navigator.vendor || window.opera;

		if (/android/i.test(userAgent)) {
		  return 'Android';
		}

		if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
		  return 'iOS';
		}

		return 'Desktop';
	  }

	  // Menampilkan tampilan berbeda berdasarkan jenis perangkat
	  function setDeviceSpecificStyles() {
		var device = detectDevice();
		var weatherInfoElement = document.getElementById('weather-info');
		var qiblaInfoElement = document.getElementById('qibla-info');
		var prayTimesInfoElement = document.getElementById('praytimes-info');		
		var petaInfoElement = document.getElementById('peta-info');
		if (device !== 'Desktop') {
		  // Menghapus elemen ketika menggunakan perangkat selain desktop
		  weatherInfoElement.style.display = 'none';
		  qiblaInfoElement.style.display = 'none';
		  prayTimesInfoElement.style.display = 'none';
		  petaInfoElement.style.display = 'none';
		}
	  }

	  // Memanggil fungsi setDeviceSpecificStyles saat halaman selesai dimuat
	  window.addEventListener('load', setDeviceSpecificStyles);
	</script>
  <script>
    var scene = new THREE.Scene();
	var width = 30;
	var height = 30;
    var camera = new THREE.PerspectiveCamera(30, width / height, 0.1, 1000); /* Sesuaikan dengan lebar dan tinggi animasi */
    var renderer = new THREE.WebGLRenderer();
    renderer.setSize(width, height); /* Sesuaikan dengan lebar dan tinggi animasi */
    document.getElementById("canvas-animation").appendChild(renderer.domElement);

    var geometry = new THREE.SphereGeometry(2, 32, 32);
    var material = new THREE.MeshBasicMaterial({ color: 0xffffff }); 
    var earth = new THREE.Mesh(geometry, material);
    scene.add(earth);

    var geometry2 = new THREE.SphereGeometry(2, 32, 32);
    var material2 = new THREE.MeshBasicMaterial({ color: 0x000000 });
    var moon = new THREE.Mesh(geometry2, material2);
    scene.add(moon);

    camera.position.z = 8;

    function animate() {
      requestAnimationFrame(animate);

      moon.position.x = Math.sin(Date.now() * 0.001) * 2;
      moon.position.z = Math.cos(Date.now() * 0.001) * 2;

      renderer.render(scene, camera);
    }
    animate();
  </script>
  
	<script>
	// Fungsi untuk mendapatkan waktu qibla
	function getQiblaTime(latitude, longitude) {
	  var today = new Date();
	  var year = today.getFullYear();
	  var month = today.getMonth() + 1;
	  var day = today.getDate();
	  var timezone = -(today.getTimezoneOffset() / 60);
	  
	  // Inisialisasi objek prayTimes
	  var pt = new prayTimes();
	  
	  // Set metode perhitungan waktu shalat (misalnya: metode MWL)
	  pt.setMethod('MU');
	  
	  // Hitung waktu shalat menggunakan prayTimes
	  var prayerTimes = pt.getTimes(new Date(year, month - 1, day), [latitude, longitude], timezone);
	  
	  // Mendapatkan waktu transit matahari (waktu qibla)
	  var qiblaTime = prayerTimes.sunTransit;
	  
	  return qiblaTime;
	}
	</script>
	<script>
			function convertToHMS(decimal) {
			  let hours = Math.floor(decimal);
			  let minutes = Math.floor((decimal - hours) * 60);
			  let seconds = Math.round(((decimal - hours - minutes / 60) * 3600) * 100) / 100;
			  return hours + " jam, " + minutes + " menit, " + seconds + " detik";
			}
			
			function convertToDMS(decimal) {
			  let degrees = Math.floor(decimal);
			  
			  let minutes = Math.floor((decimal - degrees) * 60);
			  let seconds = ((decimal - degrees - minutes / 60) * 3600).toFixed(2);
			  
			  return degrees + "° " + minutes + "' " + seconds + '"';
			}
	</script>
    <script>
        var dropdownLinks = document.querySelectorAll('.dropdown a');
        dropdownLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                window.open(this.getAttribute('href'), '_blank');
            });
        });
    </script>

  
			<script>
				var imageDir = "https://blogchem.com/kalender/images/moon/"; // Ubah sesuai dengan folder tempat gambar
				
				var images = ["m000.png","m001.png","m002.png","m003.png","m004.png","m005.png","m006.png","m007.png","m008.png","m009.png",
							  "m010.png","m011.png","m012.png","m013.png","m014.png","m015.png","m016.png","m017.png","m018.png","m019.png",
							  "m020.png","m021.png","m022.png","m023.png","m024.png","m025.png","m026.png","m027.png","m028.png","m029.png",
							  "m030.png","m031.png","m032.png","m033.png","m034.png","m035.png","m036.png","m037.png","m038.png","m039.png",
							  "m040.png","m041.png","m042.png","m043.png","m044.png","m045.png","m046.png","m047.png","m048.png","m049.png",
							  "m050.png","m051.png","m052.png","m053.png","m054.png","m055.png","m056.png","m057.png","m058.png","m059.png",
							  "m060.png","m061.png","m062.png","m063.png","m064.png","m065.png","m066.png","m067.png","m068.png","m069.png",
							  "m070.png","m071.png","m072.png","m073.png","m074.png","m075.png","m076.png","m077.png","m078.png","m079.png",
							  "m080.png","m081.png","m082.png","m083.png","m084.png","m085.png","m086.png","m087.png","m088.png","m089.png",
							  "m090.png","m091.png","m092.png","m093.png","m094.png","m095.png","m096.png","m097.png","m098.png","m099.png",
							  "m100.png","m101.png","m102.png","m103.png","m104.png","m105.png","m106.png","m107.png","m108.png","m109.png",
							  "m110.png","m111.png","m112.png","m113.png","m114.png","m115.png","m116.png","m117.png","m118.png","m119.png",
							  "m120.png","m121.png","m122.png","m123.png","m124.png","m125.png","m126.png","m127.png","m128.png","m129.png",
							  "m130.png","m131.png","m132.png","m133.png","m134.png","m135.png","m136.png","m137.png","m138.png","m139.png",
							  "m140.png","m141.png","m142.png","m143.png","m144.png","m145.png","m146.png","m147.png","m148.png","m149.png",
							  "m150.png","m151.png","m152.png","m153.png","m154.png","m155.png","m156.png","m157.png","m158.png","m159.png",
							  "m160.png","m161.png","m162.png","m163.png","m164.png","m165.png","m166.png","m167.png","m168.png","m169.png",
							  "m170.png","m171.png","m172.png","m173.png","m174.png","m175.png","m176.png","m177.png","m178.png","m179.png",
							  "m180.png","m181.png","m182.png","m183.png","m184.png","m185.png","m186.png","m187.png","m188.png","m189.png",
							  "m190.png","m191.png","m192.png","m193.png","m194.png","m195.png","m196.png","m197.png","m198.png","m199.png",
							  "m200.png","m201.png","m202.png","m203.png","m204.png","m205.png","m206.png","m207.png","m208.png","m209.png",
							  "m210.png","m211.png","m212.png","m213.png","m214.png","m215.png","m216.png","m217.png","m218.png","m219.png",
							  "m220.png","m221.png","m222.png","m223.png","m224.png","m225.png","m226.png","m227.png","m228.png","m229.png",
							  "m230.png","m231.png","m232.png","m233.png","m234.png","m235.png","m236.png","m237.png","m238.png","m239.png",
							  "m240.png","m241.png","m242.png","m243.png","m244.png","m245.png","m246.png","m247.png","m248.png","m249.png",
							  "m250.png","m251.png","m252.png","m253.png","m254.png","m255.png","m256.png","m257.png","m258.png","m259.png",
							  "m260.png","m261.png","m262.png","m263.png","m264.png","m265.png","m266.png","m267.png","m268.png","m269.png",
							  "m270.png","m271.png","m272.png","m273.png","m274.png","m275.png","m276.png","m277.png","m278.png","m279.png",
							  "m280.png","m281.png","m282.png","m283.png","m284.png","m285.png","m286.png","m287.png","m288.png","m289.png",
							  "m290.png","m291.png","m292.png","m293.png","m294.png","m295.png","m296.png","m297.png","m298.png","m299.png",
							  "m300.png","m301.png","m302.png","m303.png","m304.png","m305.png","m306.png","m307.png","m308.png","m309.png",
							  "m310.png","m311.png","m312.png","m313.png","m314.png","m315.png","m316.png","m317.png","m318.png","m319.png",
							  "m320.png","m321.png","m322.png","m323.png","m324.png","m325.png","m326.png","m327.png","m328.png","m329.png",
							  "m330.png","m331.png","m332.png","m333.png","m334.png","m335.png","m336.png","m337.png","m338.png","m339.png",
							  "m340.png","m341.png","m342.png","m343.png","m344.png","m345.png","m346.png","m347.png","m348.png","m349.png",
							  "m350.png","m351.png","m352.png","m353.png","m354.png","m355.png","m356.png","m357.png","m358.png","m359.png","m360.png"];

				// Fungsi untuk menampilkan gambar berdasarkan nomor
				function displayImage(number) {
				  // Membuat elemen <img>
				  var img = document.createElement("img");
				  // Mengatur sumber gambar
				  img.src = imageDir + images[number];
				  // Mengatur lebar gambar (opsional)
				  img.width = 125; // Ubah sesuai kebutuhan
				  
				  // Menghapus gambar sebelumnya (jika ada)
				  var container = document.getElementById("imageContainer");
				  container.innerHTML = "";
				  
				  // Menambahkan gambar ke dalam kontainer
				  container.appendChild(img);
				}	
			</script>
			<script>
			  document.addEventListener("DOMContentLoaded", function() {
				// Mendapatkan elemen input
				var latitudeInput = document.getElementById("EditLatitude");
				var longitudeInput = document.getElementById("EditLongitude");
				var elevationInput = document.getElementById("EditElevation");
				var gmtInput = document.getElementById("EditGmt"); 

				// Membuat array untuk pilihan beserta harga latitude, longitude, dan elevation

				var pilihan = [
					{ nama: "Patemon, Semarang, GMT+7", latitude: -7.067, longitude: 110.4, elevation: 261, gmt: 7 },
					{ nama: "Yogyakarta, GMT+7", latitude: -7.797, longitude: 110.371, elevation: 113, gmt: 7 },
					{ nama: "Sabang, GMT+7", latitude: 5.893, longitude: 95.32, elevation: 0, gmt: 7 },
					{ nama: "Magelang, GMT+7", latitude: -7.470, longitude: 110.217, elevation: 432, gmt: 7 },
					{ nama: "Kendal, GMT+7", latitude: -7.043, longitude: 110.211, elevation: 6, gmt: 7 },
					{ nama: "Pekalongan, GMT+7", latitude: -6.889, longitude: 109.675, elevation: 8, gmt: 7 },
					{ nama: "Pemalang, GMT+7", latitude: -6.891, longitude: 109.377, elevation: 16, gmt: 7 },
					{ nama: "Tegal, GMT+7", latitude: -6.866, longitude: 109.140, elevation: 3, gmt: 7 },
					{ nama: "Slawi, GMT+7", latitude: -6.983, longitude: 109.139, elevation: 48, gmt: 7 },
					{ nama: "Brebes, GMT+7", latitude: -6.965, longitude: 109.050, elevation: 10, gmt: 7 },
					{ nama: "Cirebon, GMT+7", latitude: -6.722, longitude: 108.556, elevation: 4, gmt: 7 },
					{ nama: "Indramayu, GMT+7", latitude: -6.335, longitude: 108.325, elevation: 1, gmt: 7 },
					{ nama: "Sukamandi, GMT+7", latitude: -6.578, longitude: 107.822, elevation: 46, gmt: 7 },
					{ nama: "Bogor, GMT+7", latitude: -6.595, longitude: 106.816, elevation: 243, gmt: 7 },					
					{ nama: "Bandung, GMT+7", latitude: -6.917, longitude: 107.619, elevation: 768, gmt: 7 },
					{ nama: "Banten, GMT+7", latitude: -6.405, longitude: 106.064, elevation: 31, gmt: 7 },					
					{ nama: "Tangerang, GMT+7", latitude: -6.178, longitude: 106.629, elevation: 12, gmt: 7 },
					{ nama: "Jakarta, GMT+7", latitude: -6.2088, longitude: 106.8456, elevation: 0, gmt: 7 },
					{ nama: "Serang, GMT+7", latitude: -6.1177, longitude: 106.1501, elevation: 1, gmt: 7 },
					{ nama: "---", latitude: 0, longitude: 0, elevation: 0, gmt: 0 },
					{ nama: "Demak, GMT+7", latitude: -6.889, longitude: 110.638, elevation: 1, gmt: 7 },
					{ nama: "Jepara, GMT+7", latitude: -6.578, longitude: 110.678, elevation: 1, gmt: 7 },
					{ nama: "Kudus, GMT+7", latitude: -6.804, longitude: 110.840, elevation: 5, gmt: 7 },
					{ nama: "Pati, GMT+7", latitude: -6.755, longitude: 111.038, elevation: 7, gmt: 7 },
					{ nama: "Rembang, GMT+7", latitude: -6.716, longitude: 111.406, elevation: 6, gmt: 7 },
					{ nama: "Ngawi, GMT+7", latitude: -7.367, longitude: 111.464, elevation: 62, gmt: 7 },
					{ nama: "Klaten, GMT+7", latitude: -7.705, longitude: 110.609, elevation: 82, gmt: 7 },
					{ nama: "Surakarta, GMT+7", latitude: -7.556, longitude: 110.831, elevation: 91, gmt: 7 },					
					{ nama: "Madiun, GMT+7", latitude: -7.629, longitude: 111.523, elevation: 99, gmt: 7 },
					{ nama: "Magetan, GMT+7", latitude: -7.644, longitude: 111.375, elevation: 85, gmt: 7 },
					{ nama: "Malang, GMT+7", latitude: -7.979, longitude: 112.630, elevation: 458, gmt: 7 },
					{ nama: "Kediri, GMT+7", latitude: -7.823, longitude: 112.017, elevation: 69, gmt: 7 },
					{ nama: "Wonogiri, GMT+7", latitude: -7.848, longitude: 110.928, elevation: 53, gmt: 7 },
					{ nama: "Pacitan, GMT+7", latitude: -8.129, longitude: 111.155, elevation: 44, gmt: 7 },
					{ nama: "Banyuwangi, GMT+7", latitude: -8.224, longitude: 114.357, elevation: 33, gmt: 7 },					
					{ nama: "Surabaya, GMT+7", latitude: -7.2575, longitude: 112.7521, elevation: 0, gmt: 7 },
					{ nama: "---", latitude: 0, longitude: 0, elevation: 0, gmt: 0 },
					{ nama: "Pontianak, GMT+7", latitude: -0.0225, longitude: 109.33, elevation: 0, gmt: 7 },
					{ nama: "Palangkaraya, GMT+7", latitude: -2.2097, longitude: 113.9092, elevation: 0, gmt: 7 },				
					{ nama: "Denpasar, GMT+8", latitude: -8.65, longitude: 115.2167, elevation: 0, gmt: 8 },
					{ nama: "Mataram, GMT+8", latitude: -8.5833, longitude: 116.1167, elevation: 0, gmt: 8 },
					{ nama: "Kupang, GMT+8", latitude: -10.1628, longitude: 123.5975, elevation: 0, gmt: 8 },
					{ nama: "Banjarmasin, GMT+8", latitude: -3.3194, longitude: 114.5908, elevation: 0, gmt: 8 },
					{ nama: "Samarinda, GMT+8", latitude: -0.49, longitude: 117.1475, elevation: 0, gmt: 8 },
					{ nama: "Manado, GMT+8", latitude: 1.4933, longitude: 124.8413, elevation: 0, gmt: 8 },
					{ nama: "Makassar, GMT+8", latitude: -5.1477, longitude: 119.4327, elevation: 0, gmt: 8 },
					{ nama: "Kendari, GMT+8", latitude: -3.989, longitude: 122.513, elevation: 0, gmt: 8 },
					{ nama: "Palu, GMT+8", latitude: -0.8917, longitude: 119.8707, elevation: 0, gmt: 8 },
					{ nama: "Gorontalo, GMT+8", latitude: 0.5375, longitude: 123.0595, elevation: 0, gmt: 8 },
					{ nama: "Ambon, GMT+9", latitude: -3.6956, longitude: 128.1814, elevation: 0, gmt: 9 },
					{ nama: "Jayapura, GMT+9", latitude: -2.5333, longitude: 140.7167, elevation: 0, gmt: 9 },	
					{ nama: "---", latitude: 0, longitude: 0, elevation: 0, gmt: 0 },
					{ nama: "Gisborne, GMT+12", latitude: -38.6623, longitude: 178.018, elevation: 0, gmt: 12 },
					{ nama: "Wellington, GMT+12", latitude: -41.287, longitude: 174.776, elevation: 0, gmt: 12 },
					{ nama: "Auckland, GMT+12", latitude: -36.8485, longitude: 174.7633, elevation: 0, gmt: 12 },
					{ nama: "Noumea, GMT+11", latitude: -22.267, longitude: 166.448, elevation: 0, gmt: 11 },
					{ nama: "Magadan, GMT+11", latitude: 59.5682, longitude: 150.8086, elevation: 0, gmt: 11 },
					{ nama: "Sydney, GMT+10", latitude: -33.8651, longitude: 151.2093, elevation: 0, gmt: 10 },
					{ nama: "Port Moresby, GMT+10", latitude: -9.5, longitude: 147.2, elevation: 0, gmt: 10 },
					{ nama: "Melbourne, GMT+10", latitude: -37.8, longitude: 144.96, elevation: 0, gmt: 10 },
					{ nama: "Seoul, GMT+9", latitude: 37.5665, longitude: 126.978, elevation: 0, gmt: 9 },
					{ nama: "Tokyo, GMT+9", latitude: 35.6762, longitude: 139.6503, elevation: 0, gmt: 9 },
					{ nama: "Beijing, GMT+8", latitude: 39.9042, longitude: 116.4074, elevation: 0, gmt: 8 },
					{ nama: "Bangkok, GMT+7", latitude: 13.7563, longitude: 100.5018, elevation: 0, gmt: 7 },
					{ nama: "Dhaka, GMT+6", latitude: 23.8103, longitude: 90.4125, elevation: 0, gmt: 6 },
					{ nama: "Mumbai, GMT+5.30", latitude: 19.076, longitude: 72.8777, elevation: 0, gmt: 5.5 },
					{ nama: "Delhi, GMT+5.30", latitude: 28.6139, longitude: 77.209, elevation: 0, gmt: 5.5 },
					{ nama: "Islamabad, GMT+5", latitude: 33.6844, longitude: 73.0479, elevation: 0, gmt: 5 },
					{ nama: "Dubai, GMT+4", latitude: 25.205, longitude: 55.271, elevation: 0, gmt: 4 },
					{ nama: "Kabul, GMT+3.5", latitude: 34.555, longitude: 69.208, elevation: 0, gmt: 3.5 },
					{ nama: "Doha, GMT+3", latitude: 25.285, longitude: 51.531, elevation: 0, gmt: 3 },
					{ nama: "Makkah, GMT+3", latitude: 21.4225, longitude: 39.8262, elevation: 0, gmt: 3 },
					{ nama: "Madinah, GMT+3", latitude: 24.525, longitude: 39.569, elevation: 0, gmt: 3 },
					{ nama: "Damaskus, GMT+3", latitude: 33.514, longitude: 36.277, elevation: 0, gmt: 3 },
					{ nama: "Istanbul, GMT+3", latitude: 41.0082, longitude: 28.9784, elevation: 0, gmt: 3 },
					{ nama: "Ankara, GMT+3", latitude: 39.933, longitude: 32.86, elevation: 0, gmt: 3 },
					{ nama: "Moskow, GMT+3", latitude: 55.75, longitude: 37.62, elevation: 0, gmt: 3 },
					{ nama: "Johannesburg, GMT+2", latitude: -26.2041, longitude: 28.0473, elevation: 0, gmt: 2 },
					{ nama: "Rome, GMT+2", latitude: 41.9028, longitude: 12.4964, elevation: 0, gmt: 2 },
					{ nama: "Cairo, GMT+2", latitude: 30.0444, longitude: 31.2357, elevation: 0, gmt: 2 },
					{ nama: "Athens, GMT +2", latitude: 7.984, longitude: 23.728, elevation: 0, gmt: 2 },
					{ nama: "Cape Town, GMT +2", latitude: -33.925, longitude: 18.424, elevation: 0, gmt: 2 },
					{ nama: "Paris, GMT+2", latitude: 48.857, longitude: 2.352, elevation: 0, gmt: 2 },
					{ nama: "Madrid, GMT+2", latitude: 40.4168, longitude: -3.7038, elevation: 0, gmt: 2 },
					{ nama: "Innsbruck, GMT+1", latitude: 47.269, longitude: 11.404, elevation: 0, gmt: 1 },
					{ nama: "Berlin, GMT+1", latitude: 52.52, longitude: 13.405, elevation: 0, gmt: 1 },
					{ nama: "---", latitude: 0, longitude: 0, elevation: 0, gmt: 0 },
					{ nama: "London, GMT", latitude: 51.507, longitude: 0.128, elevation: 0, gmt: 0 },
					{ nama: "Greenwich, GMT", latitude: 51.482, longitude: 0.008, elevation: 0, gmt: 0 },
					{ nama: "Azores, GMT", latitude: 37.7412, longitude: -25.6752, elevation: 0, gmt: 0 },	
					{ nama: "---", latitude: 0, longitude: 0, elevation: 0, gmt: 0 },
					{ nama: "Cape Verde, GMT-1", latitude: 15.1201, longitude: -23.6052, elevation: 0, gmt: -1 },
					{ nama: "Fernando de Noronha, GMT-2", latitude: -3.8400, longitude: -32.4200, elevation: 0, gmt: -2 },
					{ nama: "Buenos Aires, GMT-3", latitude: -34.6037, longitude: -58.3816, elevation: 0, gmt: -3 },
					{ nama: "Rio de Janeiro, GMT-3", latitude: -22.9068, longitude: -43.1729, elevation: 0, gmt: -3 },
					{ nama: "Paramaribo, GMT-3", latitude: -5.8662, longitude: -55.1668, elevation: 0, gmt: -3 },
					{ nama: "New York City, GMT-4", latitude: 40.7128, longitude: -74.0060, elevation: 0, gmt: -4 },
					{ nama: "Toronto, GMT-4", latitude: 43.6510, longitude: -79.3470, elevation: 0, gmt: -4 },
					{ nama: "Mexico City, GMT-5", latitude: 19.4326, longitude: -99.1332, elevation: 0, gmt: -5 },
					{ nama: "Edmonton, GMT-6", latitude: 53.5461, longitude: -113.4938, elevation: 0, gmt: -6 },
					{ nama: "Los Angeles, GMT-7", latitude: 34.0522, longitude: -118.2437, elevation: 0, gmt: -7 },
					{ nama: "Anchorage, GMT-8", latitude: 61.2181, longitude: -149.9003, elevation: 0, gmt: -8 },
					{ nama: "Gambier Islands, GMT-9", latitude: -23.1324, longitude: -134.9703, elevation: 0, gmt: -9 },
					{ nama: "Hawaii, GMT-10", latitude: 19.8968, longitude: -155.5828, elevation: 0, gmt: -10 },
					{ nama: "Honolulu, GMT-10", latitude: 21.317, longitude: -157.867, elevation: 0, gmt: -10 },
					{ nama: "Midway Atoll, GMT-11", latitude: 28.2019, longitude: -177.3785, elevation: 0, gmt: -11 },
					{ nama: "Baker Island, GMT-12", latitude: 0.1936, longitude: -176.4760, elevation: 0, gmt: -12 }
					
				];

				// Membuat elemen select   
				var select = document.createElement("select");

				// Membuat dan menambahkan pilihan pada select
				for (var i = 0; i < pilihan.length; i++) {
				  var option = document.createElement("option");
				  option.value = i;
				  option.text = pilihan[i].nama;
				  select.appendChild(option);
				}   

				// Menambahkan event listener pada select untuk mengubah nilai input
				select.addEventListener("change", function() {
				  var selectedIndex = select.options[select.selectedIndex].value;
				  latitudeInput.value = pilihan[selectedIndex].latitude;
				  longitudeInput.value = pilihan[selectedIndex].longitude;
				  elevationInput.value = pilihan[selectedIndex].elevation;
				  gmtInput.value = pilihan[selectedIndex].gmt;
				});

				// Menambahkan select ke dalam dokumen
				var container = document.getElementById("container"); // Ganti "container" dengan ID elemen yang sesuai
				container.appendChild(select);
			  });
			</script>  			
			<script>
				function copyToClipboard(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;
				  dummy.select();
				  document.execCommand("copy");
				  document.body.removeChild(dummy); 
				}        

				// Mendapatkan elemen tombol "Simpan"
				var simpanButton = document.getElementById("Simpan");

				// Menambahkan event listener pada tombol "Simpan"
				simpanButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Sunset"
				  var sunsetValue = document.getElementById("Sunset").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  copyToClipboard(sunsetValue);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = sunsetValue;
				  
				  var statussunset = "SUNSET"; 
				  
				  document.getElementById("statussunset").innerText = statussunset;
				});
			</script>
			<script>							
				// Mendapatkan referensi ke elemen tombol Simpan
				var simpanButton = document.getElementById("Simpan");

				// Mendapatkan referensi ke elemen span dengan ID Sunset
				var sunsetSpan = document.getElementById("Sunset");

				// Mendefinisikan variabel statussunset
				var statussunset;

				// Menambahkan event listener untuk klik pada tombol Simpan
				simpanButton.addEventListener("click", function() {
				  // Memberikan nilai "Sunset " pada variabel statussunset
				  statussunset = "SUNSET ";
				});
	 									
			</script>
			<script>
				function kuarter1(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;
				  dummy.select();
				  document.execCommand("copy");
				  document.body.removeChild(dummy);
				}

				// Mendapatkan elemen tombol "Tempel"
				var tempelButton = document.getElementById("Tempel1");

				// Menambahkan event listener pada tombol "Tempel1"
				tempelButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Kuarter1"
				  var kuarter1Value = document.getElementById("TglJam1").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  kuarter1(kuarter1Value);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = kuarter1Value;
				  document.getElementById("statussunset").innerText = "";
				});
			</script>
			<script>
				function kuarter2(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;  
				  dummy.select();
				  document.execCommand("copy");
				  document.body.removeChild(dummy);
				}

				// Mendapatkan elemen tombol "Tempel"
				var tempelButton = document.getElementById("Tempel2");

				// Menambahkan event listener pada tombol "Tempel1"
				tempelButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Kuarter1"
				  var kuarter2Value = document.getElementById("TglJam2").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  kuarter2(kuarter2Value);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = kuarter2Value;
				  document.getElementById("statussunset").innerText = "";
				});
			</script>
			<script>
				function kuarter3(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;
				  dummy.select();
				  document.execCommand("copy");         
				  document.body.removeChild(dummy);
				}

				// Mendapatkan elemen tombol "Tempel"
				var tempelButton = document.getElementById("Tempel3");

				// Menambahkan event listener pada tombol "Tempel3"
				tempelButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Kuarter1"
				  var kuarter3Value = document.getElementById("TglJam3").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  kuarter3(kuarter3Value);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = kuarter3Value;
				  document.getElementById("statussunset").innerText = "";
				});
			</script>
			<script>
				function kuarter4(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;
				  dummy.select();
				  document.execCommand("copy");
				  document.body.removeChild(dummy);
				}

				// Mendapatkan elemen tombol "Tempel"
				var tempelButton = document.getElementById("Tempel4");

				// Menambahkan event listener pada tombol "Tempel1"
				tempelButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Kuarter1"
				  var kuarter4Value = document.getElementById("TglJam4").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  kuarter4(kuarter4Value);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = kuarter4Value;
				  document.getElementById("statussunset").innerText = "";
				});
			</script>	
			
			
			<script>
				function quarter1(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;
				  dummy.select();
				  document.execCommand("copy");
				  document.body.removeChild(dummy);
				}

				// Mendapatkan elemen tombol "Tempel"
				var tempelButton = document.getElementById("Tempel11");

				// Menambahkan event listener pada tombol "Tempel1"
				tempelButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Kuarter1"
				  var kuarter1Value = document.getElementById("DateTime1").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  quarter1(kuarter1Value);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = kuarter1Value;
				  document.getElementById("statussunset").innerText = "";
				});
			</script>
			<script>
				function quarter2(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;
				  dummy.select();
				  document.execCommand("copy");
				  document.body.removeChild(dummy);
				}

				// Mendapatkan elemen tombol "Tempel"
				var tempelButton = document.getElementById("Tempel22");

				// Menambahkan event listener pada tombol "Tempel1"
				tempelButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Kuarter1"
				  var kuarter2Value = document.getElementById("DateTime2").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  quarter2(kuarter2Value);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = kuarter2Value;
				  document.getElementById("statussunset").innerText = "";
				});
			</script>
			<script>
				function quarter3(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;
				  dummy.select();
				  document.execCommand("copy");
				  document.body.removeChild(dummy);
				}

				// Mendapatkan elemen tombol "Tempel"
				var tempelButton = document.getElementById("Tempel33");

				// Menambahkan event listener pada tombol "Tempel3"
				tempelButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Kuarter1"
				  var kuarter3Value = document.getElementById("DateTime3").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  quarter3(kuarter3Value);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = kuarter3Value;
				  document.getElementById("statussunset").innerText = "";
				});
			</script>
			<script>
				function quarter4(value) {
				  var dummy = document.createElement("textarea");
				  document.body.appendChild(dummy);
				  dummy.value = value;
				  dummy.select();
				  document.execCommand("copy");
				  document.body.removeChild(dummy);
				}

				// Mendapatkan elemen tombol "Tempel"
				var tempelButton = document.getElementById("Tempel44");

				// Menambahkan event listener pada tombol "Tempel1"
				tempelButton.addEventListener("click", function() {
				  // Mendapatkan nilai dari elemen <td> dengan ID "Kuarter1"
				  var kuarter4Value = document.getElementById("DateTime4").textContent.trim();

				  // Menyimpan nilai ke dalam memori
				  quarter4(kuarter4Value);

				  // Menempelkan nilai ke dalam elemen input dengan ID "DateTimeBox"
				  var dateTimeInput = document.getElementById("DateTimeBox");
				  dateTimeInput.value = kuarter4Value;
				  document.getElementById("statussunset").innerText = "";
				});
			</script>

			<script>
			  // Mendapatkan elemen input tanggal
			  var dateTimeBox = document.getElementById("DateTimeBox");

			  // Mendapatkan tombol +1 dan -1
			  var buttonPlusOne = document.getElementById("buttonPlusOne");
			  var buttonMinusOne = document.getElementById("buttonMinusOne");

			  // Mendapatkan tanggal saat ini
			  var currentDate = new Date();

			  // Mengatur nilai awal elemen input tanggal dengan tanggal saat ini
			  var currentDateString = currentDate.toISOString().slice(0, 19).replace("T", " ");
			  dateTimeBox.value = currentDateString;

			  // Fungsi untuk menambah tanggal
			  function addDate() {
				// Mendapatkan nilai tanggal dari elemen input
				var selectedDate = new Date(dateTimeBox.value);

				// Menambah 1 hari
				selectedDate.setDate(selectedDate.getDate() + 1);

				// Mengubah nilai elemen input dengan tanggal yang telah diubah
				var selectedDateString = selectedDate.toISOString().slice(0, 19).replace("T", " ");
				dateTimeBox.value = selectedDateString;
			  }

			  // Fungsi untuk mengurangi tanggal
			  function subtractDate() {
				// Mendapatkan nilai tanggal dari elemen input
				var selectedDate = new Date(dateTimeBox.value);

				// Mengurangi 1 hari
				selectedDate.setDate(selectedDate.getDate() - 1);

				// Mengubah nilai elemen input dengan tanggal yang telah diubah
				var selectedDateString = selectedDate.toISOString().slice(0, 19).replace("T", " ");
				dateTimeBox.value = selectedDateString;
			  }

			  // Menambahkan event listener pada tombol +1
			  buttonPlusOne.addEventListener("click", addDate);   

			  // Menambahkan event listener pada tombol -1
			  buttonMinusOne.addEventListener("click", subtractDate); 
			</script>
		
			<script>
			// Mendapatkan elemen input tanggal
			var dateTimeBox = document.getElementById("DateTimeBox");

			// Mendapatkan tombol +1H dan -1H
			var buttonPlusOneHour = document.getElementById("buttonPlusOneHour");
			var buttonMinusOneHour = document.getElementById("buttonMinusOneHour");

			// Fungsi untuk menambah 1 jam
			function addOneHour() {
			  // Mendapatkan nilai tanggal dan waktu dari elemen input
			  var selectedDateTime = new Date(dateTimeBox.value);
			  
			  // Menambah 1 jam
			  selectedDateTime.setHours(selectedDateTime.getHours() + 1);
			  
			  // Mendapatkan komponen tahun, bulan, tanggal, jam, menit, dan detik
			  var year = selectedDateTime.getFullYear();
			  var month = String(selectedDateTime.getMonth() + 1).padStart(2, "0");
			  var day = String(selectedDateTime.getDate()).padStart(2, "0");
			  var hours = String(selectedDateTime.getHours()).padStart(2, "0");
			  var minutes = String(selectedDateTime.getMinutes()).padStart(2, "0");
			  var seconds = String(selectedDateTime.getSeconds()).padStart(2, "0");
			  
			  // Mengubah nilai elemen input dengan tanggal dan waktu yang telah diubah
			  dateTimeBox.value = year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds;
			}

			// Fungsi untuk mengurangi 1 jam
			function subtractOneHour() {
			  // Mendapatkan nilai tanggal dan waktu dari elemen input
			  var selectedDateTime = new Date(dateTimeBox.value);
			  
			  // Mengurangi 1 jam
			  selectedDateTime.setHours(selectedDateTime.getHours() - 1);
			  
			  // Mendapatkan komponen tahun, bulan, tanggal, jam, menit, dan detik
			  var year = selectedDateTime.getFullYear();
			  var month = String(selectedDateTime.getMonth() + 1).padStart(2, "0");
			  var day = String(selectedDateTime.getDate()).padStart(2, "0");
			  var hours = String(selectedDateTime.getHours()).padStart(2, "0");
			  var minutes = String(selectedDateTime.getMinutes()).padStart(2, "0");
			  var seconds = String(selectedDateTime.getSeconds()).padStart(2, "0");
			  
			  // Mengubah nilai elemen input dengan tanggal dan waktu yang telah diubah
			  dateTimeBox.value = year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds;
			}

			// Menambahkan event listener pada tombol +1H
			buttonPlusOneHour.addEventListener("click", addOneHour);

			// Menambahkan event listener pada tombol -1H
			buttonMinusOneHour.addEventListener("click", subtractOneHour);

			</script>
		
			
			<script>
				// Mendapatkan referensi elemen DateTimeBox
				var dateTimeBox = document.getElementById("DateTimeBox");

				// Mendapatkan referensi tombol dengan ID "00"
				var button00 = document.getElementById("00");

				// Menambahkan event listener pada tombol "00"
				button00.addEventListener("click", function() {
				  // Mendapatkan nilai saat ini dari elemen DateTimeBox
				  var currentDateTime = dateTimeBox.value;
				  
				  // Memisahkan tanggal dan waktu
				  var dateTimeParts = currentDateTime.split(" ");
				  var currentDate = dateTimeParts[0];
				  
				  // Mengubah waktu menjadi "00:00:00"
				  var formattedDateTime = currentDate + " 00:00:00";
				  
				  // Mengubah nilai elemen DateTimeBox menjadi hasil yang diformat
				  dateTimeBox.value = formattedDateTime;
				});

			</script> 
			
			<script>

			// Fungsi untuk mengonversi sudut dalam derajat ke radian
			function toRadians(angle) {
			  return angle * (Math.PI / 180);
			}

			// Fungsi untuk menghitung waktu penentuan kiblat
			function calculateKiblatTime(latitude, longitude) {
			  var jd = new Date().getTime() / 86400000 + 2440587.5; // Julian Day

			  // Menghitung sudut deklinasi Matahari
			  var n = jd - 2451545.0;
			  var L = 280.46645 + 0.9856 * n;
			  var g = 357.528 + 0.9856 * n;
			  var lambda = L + 1.915 * Math.sin(toRadians(g)) + 0.02 * Math.sin(toRadians(2 * g));
			  var epsilon = 23.439 - 0.0000004 * n;
			  var delta = Math.asin(Math.sin(toRadians(epsilon)) * Math.sin(toRadians(lambda)));

			  // Menghitung waktu penentuan kiblat
			  var T = (jd - 2451545.0) / 36525;
			  var L0 = 280.46607 + 36000.7698 * T + 0.0003032 * T * T;
			  var alpha = lambda - 0.00569 - 0.00479 * Math.sin(toRadians(125.04 - 1934.136 * T));
			  var alphaRad = toRadians(alpha);
			  var deltaRad = toRadians(delta);
			  var elongation = Math.atan2(Math.sin(alphaRad), Math.cos(alphaRad) * Math.sin(toRadians(23.44)) - Math.tan(deltaRad) * Math.cos(toRadians(23.44)));

			  var kiblatTime = (720 - (longitude + elongation) * 4) % 1440; // Waktu dalam menit
			  kiblatTime = formatTime(kiblatTime); // Mengonversi ke format HH:mm:ss

			  return kiblatTime;
			}

			// Fungsi untuk mengonversi waktu dalam menit menjadi format HH:mm:ss
			function formatTime(minutes) {
			  var hours = Math.floor(minutes / 60);
			  var remainingMinutes = minutes % 60;
			  remainingMinutes = remainingMinutes.toFixed(0);

			  var formattedTime = hours.toString().padStart(2, "0") + ":" + remainingMinutes.toString().padStart(2, "0") + ":00";

			  return formattedTime;
			}
			</script>

			<script>
			// Fungsi untuk menghitung arah posisi matahari
			function hitungArahMatahari(tanggal, bulan, tahun, lintang, bujur) {
			  // Konversi tanggal ke format Julian Day
			  var JD = tanggalToJD(tanggal, bulan, tahun);

			  // Konversi bujur ke radian
			  var radBujur = bujur * Math.PI / 180;

			  // Konversi lintang ke radian
			  var radLintang = lintang * Math.PI / 180;

			  // Hitung Hari Julian dari Tanggal Gregorian
			  function tanggalToJD(tanggal, bulan, tahun) {
				if (bulan <= 2) {
				  tahun -= 1;
				  bulan += 12;
				}
				var A = Math.floor(tahun / 100);
				var B = 2 - A + Math.floor(A / 4);

				var JD =
				  Math.floor(365.25 * (tahun + 4716)) +
				  Math.floor(30.6001 * (bulan + 1)) +
				  tanggal +
				  B -
				  1524.5;

				return JD;
			  }

			  // Hitung sudut waktu matahari terbit dan terbenam
			  var T = (JD - 2451545.0) / 36525;
			  var deltaPsi = (0.000075 + 0.001868 * Math.cos(T)) * Math.PI / 180;
			  var epsilon = (23.43929111 - (46.815 * T + 0.00059 * T * T - 0.001813 * T * T * T) / 3600) * Math.PI / 180;

			  var tau = (JD - 2451545.0) / 36525;
			  var L0 =
				(280.46607 +
				  36000.7698 * tau +
				  0.0003032 * tau * tau) *
				Math.PI /
				180;
			  var M =
				(357.52911 +
				  35999.05029 * tau -
				  0.0001537 * tau * tau) *
				Math.PI /
				180;
			  var DL =
				(1.9146 -
				  0.004817 * tau -
				  0.000014 * tau * tau) *
				Math.sin(M) +
				(0.019993 - 0.000101 * tau) * Math.sin(2 * M) +
				0.00029 * Math.sin(3 * M);
			  var L =
				L0 +
				DL * Math.PI / 180;

			  // Hitung sudut waktu terbit matahari
			  var cosH =
				(Math.sin(-0.8333 * Math.PI / 180) -
				  Math.sin(radLintang) * Math.sin(epsilon)) /
				(Math.cos(radLintang) * Math.cos(epsilon));
			  var H0 = Math.acos(cosH) * 180 / Math.PI;

			  // Hitung sudut waktu matahari terbenam
			  var cosH =
				(Math.sin(0.8333 * Math.PI / 180) -
				  Math.sin(radLintang) * Math.sin(epsilon)) /
				(Math.cos(radLintang) * Math.cos(epsilon));
			  var H1 = Math.acos(cosH) * 180 / Math.PI;

			  // Hitung sudut waktu matahari saat ini
			  var sudutWaktu = (L + radBujur) * 180 / Math.PI;  

			  // Matahari di timur jika sudut waktu positif, di barat jika negatif
			  if (sudutWaktu >= H0 && sudutWaktu <= H1) {
				return "Timur";
			  } else {
				return "Barat";
			  }
			}
			</script>
			<script>
			// Menghitung umur bulan, fase bulan, dan konstelasi zodiak
			function calculateMoonInformation(date) {
			  var moonData = MoonCalc.datasForDay(date);
			  var moonAge = moonData.age.toFixed(2);
			  var moonPhase = moonData.phase;
			  var zodiacConstellation = moonData.constellation;
			  var trajectory = moonData.trajectory;

			  return {
				'Moon Age': moonAge + ' days',
				'Moon Phase': moonPhase,
				'Zodiac Constellation': zodiacConstellation,
				'Trajectory': trajectory 
			  };
			}

			</script>
			
			
			<script>
				function drawLine(diameter, angle) {
				  const canvas = document.getElementById('circleCanvas'); 
				  const context = canvas.getContext('2d');

				  context.clearRect(0, 0, canvas.width, canvas.height);
				  context.strokeStyle = 'black';
				  context.lineWidth = 1;

				  const centerX = canvas.width / 2;
				  const centerY = canvas.height / 2;
				  const radius = diameter / 2;

				  const radians = (angle - 90) * Math.PI / 180;

				  const endX = centerX + radius * Math.cos(radians);
				  const endY = centerY + radius * Math.sin(radians);
				  
				  const canvasWidth = canvas.width;
				  const canvasHeight = canvas.height;
				  
				  // Menggambar kotak bergaris
				  context.beginPath();
				  context.rect(0, 0, canvasWidth, canvasHeight);
				  context.strokeStyle = 'gray';
				  context.lineWidth = 1;
				  context.stroke();

				  context.beginPath();
				  context.moveTo(centerX, centerY);
				  context.lineTo(endX, endY);
				  context.stroke();
				  
				  context.beginPath();
				  context.arc(centerX, centerY, radius / 20, 0, 2 * Math.PI);
				  context.fillStyle = 'black';
				  context.fill();
				  
				  context.beginPath();
				  context.arc(centerX, centerY, radius, 0, 2 * Math.PI);
				  context.strokeStyle = 'gray';
				  context.lineWidth = 1;
				  context.stroke();	
				  
				  // Menggambar garis dari (centerX, centerY) ke titik paling atas lingkaran (titik sudut nol Utara)
				  context.beginPath();
				  context.moveTo(centerX, centerY);
				  context.lineTo(centerX, centerY - radius);
				  context.strokeStyle = 'red'; // Ubah warna garis menjadi merah (red)
				  context.lineWidth = 1;
				  context.stroke();
				  
				  context.font = '12px Arial';
				  context.fillStyle = 'black';
				  context.textAlign = 'center';
				  context.fillText(angle, centerX, centerY + 20);	  
				}


				function drawMoonAndSun(positionMoon, positionSun, elongation) {
				  const canvas = document.getElementById('moonSunCanvas');
				  const context = canvas.getContext('2d');

				  const canvasWidth = canvas.width;
				  const canvasHeight = canvas.height;

				  context.clearRect(0, 0, canvasWidth, canvasHeight);

				  // Menggambar kotak bergaris
				  context.beginPath();
				  context.rect(0, 0, canvasWidth, canvasHeight);
				  context.strokeStyle = 'gray';
				  context.lineWidth = 1;
				  context.stroke();

				  // Menggambar horizon (garis hitam)
				  context.beginPath();
				  context.moveTo(0, canvasHeight / 2);
				  context.lineTo(canvasWidth, canvasHeight / 2);
				  context.strokeStyle = 'black';
				  context.lineWidth = 1;
				  context.stroke();

				  // Mengatur skala panjang
				  const scale = canvasHeight / 100;

				  // Mengatur posisi bulan dan matahari pada batas lebar kanvas
				  if (positionMoon < -canvasHeight / 2) positionMoon = -canvasHeight / 2;
				  else if (positionMoon > canvasHeight / 2) positionMoon = canvasHeight / 2;

				  if (positionSun < -canvasHeight / 2) positionSun = -canvasHeight / 2;
				  else if (positionSun > canvasHeight / 2) positionSun = canvasHeight / 2;

				  // Menggambar bulan
				  const moonRadius = 5;
				  const moonY = canvasHeight / 2 - positionMoon;
				  const moonX = canvasWidth / 2 - elongation / 2 / scale;
				  context.beginPath();
				  context.arc(moonX, moonY, moonRadius, 0, 2 * Math.PI);
				  context.fillStyle = 'black';
				  context.fill();

				  // Menampilkan harga positionMoon di samping lingkaran bulan
				  context.font = '12px Arial';
				  context.fillStyle = 'black';
				  context.textAlign = 'right';
				  context.fillText(positionMoon, moonX - moonRadius - 5, moonY + 4);

				  // Menampilkan harga positionMoon di samping lingkaran bulan
				  context.font = '12px Arial';
				  context.fillStyle = 'black';
				  context.textAlign = 'center';
				  context.fillText('Elong. = ' + elongation, canvasWidth / 2, canvasHeight - 10);

				  // Menggambar matahari
				  const sunRadius = 10;
				  const sunY = canvasHeight / 2 - positionSun;
				  const sunX = canvasWidth / 2 + elongation / 2 / scale;
				  context.beginPath();
				  context.arc(sunX, sunY, sunRadius, 0, 2 * Math.PI);
				  context.fillStyle = '#ffd24c';
				  context.fill();

				  // Menggambar garis antara lingkaran bulan dengan lingkaran matahari
				  context.beginPath();
				  context.moveTo(moonX, moonY);
				  context.lineTo(sunX, sunY);
				  context.strokeStyle = 'gray';
				  context.lineWidth = 1;
				  context.stroke();

				  // Menggambar garis dari tengah lingkaran bulan ke garis datar (garis ufuk)
				  context.beginPath();
				  context.moveTo(moonX, moonY);
				  context.lineTo(moonX, canvasHeight / 2);
				  context.strokeStyle = 'gray';
				  context.lineWidth = 1;
				  context.stroke();

				  // Menggambar garis dari tengah lingkaran matahari ke garis datar (garis ufuk)
				  context.beginPath();
				  context.moveTo(sunX, sunY);
				  context.lineTo(sunX, canvasHeight / 2);
				  context.strokeStyle = 'gray';
				  context.lineWidth = 1;
				  context.stroke();

				  // Menampilkan harga positionSun di samping lingkaran matahari
				  context.font = '12px Arial';
				  context.fillStyle = 'black';
				  context.textAlign = 'left';
				  context.fillText(positionSun, sunX + sunRadius + 5, sunY + 4);
				}

				function toggleCanvas() {
				  var circleCanvas = document.getElementById("circleCanvas");
				  var moonSunCanvas = document.getElementById("moonSunCanvas");
				  var arahKiblat = document.getElementById("arahKiblat");
				  var posisiBulanMatahari = document.getElementById("posisiBulanMatahari");
				  var button = document.getElementById("kotak");

				  if (circleCanvas.style.display === "none") {
					circleCanvas.style.display = "block";
					arahKiblat.style.display = "block";
					button.textContent = "Hide Images";
				  } else {
					circleCanvas.style.display = "none";
					arahKiblat.style.display = "none";
					button.textContent = "Show Images";
				  }

				  if (moonSunCanvas.style.display === "none") {
					moonSunCanvas.style.display = "block";
					posisiBulanMatahari.style.display = "block";
					button.textContent = "Hide Images";
				  } else {
					moonSunCanvas.style.display = "none";
					posisiBulanMatahari.style.display = "none";
					button.textContent = "Show Images";
				  }
				}
			</script>
		

			<script>
				function hitungWaktuKulminasiMatahari(date, latitude, longitude) {
				  var times = SunCalc.getTimes(date, latitude, longitude);
				  var waktuKulminasi = times.solarNoon;

				  return waktuKulminasi;
				}
			</script>
			
			<script>  
				function subtractGMT(time, offset) {
				  // Memisahkan jam, menit, dan detik dari waktu
				  const [hours, minutes, seconds] = time.split(':').map(Number);

				  // Menghitung total detik dari waktu
				  const totalSeconds = hours * 3600 + minutes * 60 + seconds;

				  // Menghitung total detik setelah dikurangi offset GMT
				let adjustedSeconds = totalSeconds - ((7 - offset) * 3600);

				  // Menghindari waktu bernilai negatif
				  if (adjustedSeconds < 0) {
					adjustedSeconds += 24 * 3600; // Menambahkan 24 jam dalam detik
				  }

				  // Menghitung kembali jam, menit, dan detik baru
				  const adjustedHours = Math.floor(adjustedSeconds / 3600) % 24;
				  const adjustedMinutes = Math.floor((adjustedSeconds % 3600) / 60);
				  const adjustedSecondsRemainder = adjustedSeconds % 60;

				  // Mengatur format HH:mm:ss dengan leading zero jika diperlukan
				  const formattedTime = `${String(adjustedHours).padStart(2, '0')}:${String(adjustedMinutes).padStart(2, '0')}:${String(adjustedSecondsRemainder).padStart(2, '0')}`;

				  return formattedTime;
				}
			</script>  
			<script> 
				// Mengambil data cuaca menggunakan Axios
				function getWeather(latitude, longitude, dateTime, apiKey) {
				  const unixTimestamp = Math.floor(dateTime / 1000); // Mengubah ke UNIX timestamp dalam detik
				  const apiUrl = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&dt=${unixTimestamp}&appid=${apiKey}`;

				  axios.get(apiUrl)
					.then(response => {
					  // Mengambil data cuaca dari respons
					  const weatherData = response.data.weather;
					  const temperatureCelsius = response.data.main.temp - 273.15; // Konversi dari Kelvin ke Celsius

					  // Menampilkan informasi cuaca
					  document.getElementById('cuaca').innerHTML = '<strong>Kondisi Cuaca: </strong>'+weatherData[0].description+', <strong>Temperatur: </strong>'+temperatureCelsius.toFixed(2)+' °C, <strong>Kelembaban: </strong>'+response.data.main.humidity+'%, <strong>Kecepatan Angin: </strong>'+response.data.wind.speed+' m/s';
					})
					.catch(error => {
					  console.error('Terjadi kesalahan:', error.message);
					});
				}
			</script>
			
			<script>
			  // Fungsi untuk mengubah sudut dari derajat ke radian
			  function toRadians(angle) {
				return angle * (Math.PI / 180);
			  }

			  // Fungsi untuk menghitung sudut kiblat, rashdul kiblat, dan waktu bayangan
			  function calculateQiblaAngle(latitude, longitude) {
				// Koordinat Mekah
				var meccaLatitude = 21.4225;
				var meccaLongitude = 39.8262;

				// Perbedaan antara koordinat Mekah dan koordinat pengguna
				var longitudeDifference = meccaLongitude - longitude;

				// Menghitung sudut kiblat menggunakan rumus arctan
				var y = Math.sin(toRadians(longitudeDifference));
				var x =
				  Math.cos(toRadians(latitude)) * Math.tan(toRadians(meccaLatitude)) -
				  Math.sin(toRadians(latitude)) * Math.cos(toRadians(longitudeDifference));

				var qiblaAngle = Math.atan2(y, x);
				qiblaAngle = toRadians(qiblaAngle * (180 / Math.PI));

				// Menghitung rashdul kiblat (jarak ke Mekah) menggunakan rumus haversine
				var R = 6371; // Jari-jari Bumi dalam kilometer
				var φ1 = toRadians(latitude);
				var φ2 = toRadians(meccaLatitude);
				var Δφ = toRadians(meccaLatitude - latitude);
				var Δλ = toRadians(meccaLongitude - longitude);

				var a =
				  Math.sin(Δφ / 2) * Math.sin(Δφ / 2) +
				  Math.cos(φ1) *
					Math.cos(φ2) *
					Math.sin(Δλ / 2) *
					Math.sin(Δλ / 2);
				var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

				var jarakKibla = R * c;

				// Mengubah sudut kiblat ke derajat
				var qiblaAngleDegrees = qiblaAngle * (180 / Math.PI);

				return {
				  qiblaAngle: qiblaAngleDegrees,
				  jarakKibla: jarakKibla
				};
			  }

			</script>

			
			<script> 
			
				// Fungsi untuk mengubah waktu menjadi detik
				function timeToSeconds(time) {
				  let hours = time.getHours();
				  let minutes = time.getMinutes();
				  let seconds = time.getSeconds();
				  return hours * 3600 + minutes * 60 + seconds;
				}					
				function calculateMoonMagnitude(date) {
				  // Konstanta-konstanta yang digunakan dalam formula
				  const pi = Math.PI;
				  const rad = pi / 180;
				  const k1 = 0.17125;
				  const k2 = 0.2012;
				  const k3 = 0.0463;
				  const k4 = 0.0092;
				  const k5 = 0.00031;
				  
				  // Menghitung T (Waktu Terestrial Julian)
				  const year = date.getUTCFullYear();
				  const month = date.getUTCMonth() + 1;
				  const day = date.getUTCDate();
				  
				  if (month <= 2) {
					year--;
					month += 12;
				  }
				  
				  const a = Math.floor(year / 100);
				  const b = 2 - a + Math.floor(a / 4);
				  
				  const jd = Math.floor(365.25 * (year + 4716)) + Math.floor(30.6001 * (month + 1)) + day + b - 1524.5;
				  
				  const d = jd - 2451550.1;
				  const T = d / 36525;
				  
				  // Menghitung fase bulan (m)
				  const m = 2.5534 + 29.10535670 * d + 0.0000014 * T * T - 0.00000011 * T * T * T;
				  
				  // Menghitung elongasi bulan (F)
				  const F = 21.2964 + 390.67050646 * d - 0.0016528 * T * T - 0.00000239 * T * T * T;
				  
				  // Menghitung sudut sudut jarak bumi-matahari (E)
				  const E = 1 - 0.002516 * T - 0.0000074 * T * T;
				  
				  // Menghitung sudut sudut jarak bumi-bulan (M1)
				  const M1 = 0.19833 * rad;
				  
				  // Menghitung sudut sudut jarak bumi-bulan (M2)
				  const M2 = 0.002541 * rad;
				  
				  // Menghitung magnitude bulan (mB)
				  const mB = 0.23 + (6.75 * Math.sin(F) - 1.18 * Math.sin(m - M1) - 0.57 * Math.sin(m + M1) - 0.17 * Math.sin(2 * F)) * k1 -
							  (0.09 * Math.sin(2 * m - M1) - 0.10 * Math.sin(2 * m + M1)) * k2 +
							  (0.06 * Math.sin(m - 2 * M1) - 0.06 * Math.sin(m + 2 * M1)) * k3 +
							  (0.05 * Math.sin(F - 2 * M1) + 0.05 * Math.sin(F + 2 * M1) - 0.05 * Math.sin(F - M1) - 0.05 * Math.sin(F + M1)) * k4 +
							  (0.04 * Math.sin(m - 2 * F) + 0.04 * Math.sin(m + 2 * F)) * k5;
				  
				  return mB;
				}
			
				// Fungsi untuk menentukan fase bulan
				function getMoonPhase(year, month, day, hour, minute, second) {
				  var c, e, jd, b;   
				  
				  if (month < 3) {
					year--;
					month += 12;
				  }
				  
				  ++month;
				  c = 365.25 * year;
				  e = 30.6 * month;
				  jd = c + e + day - 694039.09;

				  // Membuat konversi waktu ke dalam satuan desimal
				  var decTime = (hour - 12) / 24 + minute / 1440 + second / 86400;

				  // Menambahkan nilai desimal waktu ke dalam nilai Julian date
				  jd += decTime;
				  jd /= 29.53059;
				  b = parseInt(jd);
				  jd -= b;
				  b = Math.round(jd * 100);

				  if (b < 0) {
					b += 100;
				  }		  
				  return b;
				}
				
				function calculateMoonAge(date) {
				  const epoch = new Date(Date.UTC(1900, 0, 1, 12, 0, 0)); // Epoch is January 1, 1900 at 12:00:00 UT
				  const daysSinceEpoch = Math.floor((date.getTime() - epoch.getTime()) / (1000 * 60 * 60 * 24));
				  const phase = (daysSinceEpoch + 1.5) % 29.530588853; // 29.530588853 is the average length of a synodic month
				  //return phase + 1; // 29.5 is the average length of a lunar month
				  return phase;        
				}
			
				function OnToggleAutoTime() {
					var myDiv = document.getElementById("myDiv");
					const checkbox = document.getElementById('AutoTimeCheckBox');
					const editbox = document.getElementById('DateTimeBox');
					if (checkbox.checked) {
						editbox.setAttribute('readonly', true);
						myDiv.style.display = "block";
					} else {
						editbox.removeAttribute('readonly');
						myDiv.style.display = "none";
					}
				}      

				window.onload = function() {
					var QuarterName = ['New Moon', 'Quarter 1', 'Full Moon', 'Quarter 3'];
					const StorageKey = 'AstroDemo.Options';
					var Options;

					function ParseDate(s) {
						return new Date((s || '').replace(' ', 'T'));   // Safari doesn't like the space character
					}

					function IsValidNumber(s) {
						return typeof s === 'string' && /^[\-\+]?\d+(\.\d*)?$/.test(s);
					}

					function IsValidDate(s) {
						const d = ParseDate(s);
						return Number.isFinite(d.getTime());
					}

					function LoadOptions() {
						let options;
						try {
							options = JSON.parse(window.localStorage.getItem(StorageKey));
						} catch (e) {
						}

						if (!options) options = {};
						if (!IsValidNumber(options.latitude))  options.latitude  = '-7.067';  
						if (!IsValidNumber(options.longitude)) options.longitude = '110.4';
						if (!IsValidNumber(options.elevation)) options.elevation = '261';
						if (!IsValidNumber(options.gmt)) options.gmt = '7';
						if (typeof options.automatic !== 'boolean') options.automatic = true;
						if (!IsValidDate(options.date)) options.date = FormatDate(new Date());
						return options;
					}

					function SaveOptions() {
						try {
							window.localStorage.setItem(StorageKey, JSON.stringify(Options));
						} catch (e) {
						}
					}

					function Init() {
						let options = LoadOptions();
						document.getElementById('EditLatitude').value  = options.latitude;
						document.getElementById('EditLongitude').value = options.longitude;
						document.getElementById('EditElevation').value = options.elevation;
						document.getElementById('EditGmt').value = options.gmt;
						document.getElementById('DateTimeBox').value = options.date;
						let checkbox = document.getElementById('AutoTimeCheckBox');
						checkbox.checked = options.automatic;
						OnToggleAutoTime();
						return options;
					}

					function Pad(s, w) {
						s = s.toFixed(0);
						while (s.length < w) {
							s = '0' + s;
						}
						return s;
					}

					function FormatDate(date) {
						var year = Pad(date.getFullYear(), 4);
						var month = Pad(1 + date.getMonth(), 2);
						var day = Pad(date.getDate(), 2);
						var hour = Pad(date.getHours(), 2);
						var minute = Pad(date.getMinutes(), 2);
						var second = Pad(date.getSeconds(), 2);
						return `${year}-${month}-${day} ${hour}:${minute}:${second}`;
					}

					function FormatCoord(x) {  
						return x.toFixed(2);
					}
					
					const MOON_MEAN_RADIUS_KM = 1737.4;
					const MOON_MEAN_RADIUS_AU = MOON_MEAN_RADIUS_KM / Astronomy.KM_PER_AU;
					const C_AUDAY = 173.1446326846693;          // speed of light in AU/day
					const C_AUSEC = C_AUDAY / (24 * 3600);      // speed of light in AU/sec 		
				
					const BodyList = [
						'Sun', 'Moon'
					];
					
					function DisplayEvent(name, evt) {
						let text = evt ? FormatDate(evt.date) : '';
						document.getElementById(name).innerText = text;
					}

					function UpdateScreen() {
						const autotime = document.getElementById('AutoTimeCheckBox').checked;
						const timebox = document.getElementById('DateTimeBox');
						let text_latitude = document.getElementById('EditLatitude').value;
						let text_longitude = document.getElementById('EditLongitude').value;
						let text_elevation = document.getElementById('EditElevation').value;
						let text_gmt = document.getElementById('EditGmt').value;
						let date;  
						
						
						if (autotime) {
							// Automatically update the date/time every second, using the computer's clock.
							date = new Date();
							timebox.value = FormatDate(date);
						} else {
							// Try to parse a date/time from the user's input.
							date = ParseDate(timebox.value);
						}

						if (!IsValidDate(timebox.value) || !IsValidNumber(text_latitude) || !IsValidNumber(text_longitude) || !IsValidNumber(text_elevation)|| !IsValidNumber(text_gmt)) {
							// Bail out until user corrects problems in the observer coordinates.
							// Gray out the whole table so the user knows there is something wrong.
							document.getElementById('CalcTable').style.display = 'none';
						} else {
							document.getElementById('CalcTable').style.display = '';

							let latitude = parseFloat(text_latitude);
							let longitude = parseFloat(text_longitude);
							let elevation = parseFloat(text_elevation);
							let gmt = parseFloat(text_gmt);
							if (latitude !== Options.latitude || longitude !== Options.longitude || elevation !== Options.elevation || gmt !== Options.gmt || Options.automatic !== autotime) {
								Options = {
									latitude: text_latitude,
									longitude: text_longitude,
									elevation: text_elevation,
									gmt: text_gmt,
									automatic: autotime,
									date: timebox.value
								};
								SaveOptions();    
							}
							
							
							
							// algoritma/formula menurut Astronomy engine browser
							let illum = Astronomy.Illumination(Astronomy.Body.Moon, date);
							let illumi = illum.phase_fraction; 
							let illu = (illum.phase_fraction * 100).toFixed(4)+'%';							
							document.getElementById('illumination').innerText = illu;	
							
							/*
							// algoritma/formula menurut SunCalc
							const moonIllumination = SunCalc.getMoonIllumination(date);
							document.getElementById('illumination').innerText = (moonIllumination.fraction*100).toFixed(4)+'%';
							*/
							
							let observer = new Astronomy.Observer(latitude, longitude, elevation);

							for (let body of BodyList) {
								let equ_2000 = Astronomy.Equator(body, date, observer, false, true);
								let equ_ofdate = Astronomy.Equator(body, date, observer, true, true);
								let equSun = Astronomy.Equator("Sun", date, observer, true, true);
								let hor = Astronomy.Horizon(date, observer, equ_ofdate.ra, equ_ofdate.dec, 'normal');
								let horSun = Astronomy.Horizon(date, observer, equSun.ra, equSun.dec, 'normal');
								
								var moon_alt = FormatCoord(hor.altitude);
								var sun_alt = FormatCoord(horSun.altitude);
								var sun_dec = FormatCoord(equSun.dec * 180 / Math.PI); // Mengubah nilai radian ke derajat

								document.getElementById(`${body}_alt`).innerText = FormatCoord(hor.altitude) + "°";
								document.getElementById(`${body}_ra`).innerText = FormatCoord(equ_2000.ra) + " jam";
								document.getElementById(`${body}_dec`).innerText = FormatCoord(equ_2000.dec) + "°";
								document.getElementById(`${body}_az`).innerText = FormatCoord(hor.azimuth) + "°";
							}
					
							var sunalt = sun_alt;
							var moonalt = moon_alt;	
							var sundec = sun_dec;
							
							if (moonalt >= 0){
								moon_alt = moonalt+"° ("+convertToDMS(moonalt)+")";
								document.getElementById(`Moon_alt`).innerText = moon_alt;
							} else {							
								document.getElementById(`Moon_alt`).innerText = moonalt+"°";							
							}					
							var elongation = Astronomy.AngleFromSun(Astronomy.Body.Moon, date);
							var elongasi = elongation;
							elongation = elongation.toFixed(2);
							elongation = elongation+"° ("+convertToDMS(elongation)+")";
							document.getElementById("elongation").innerText = elongation;			
						
							let sunrise  = Astronomy.SearchRiseSet('Sun',  observer, +1, date, 300);
							let sunset   = Astronomy.SearchRiseSet('Sun',  observer, -1, date, 300);
							let moonrise = Astronomy.SearchRiseSet('Moon', observer, +1, date, 300);
							let moonset  = Astronomy.SearchRiseSet('Moon', observer, -1, date, 300);

							DisplayEvent('Sunrise',  sunrise);
							DisplayEvent('Sunset',   sunset);
							DisplayEvent('Moonrise', moonrise);
							DisplayEvent('Moonset',  moonset); 	
											
							
							var moon_eqd = Astronomy.Equator(Astronomy.Body.Moon, date, observer, true, false);
							var dist_au = moon_eqd.vec.Length() - MOON_MEAN_RADIUS_AU;
							var dist_km = dist_au * 149598000;
							var jarakbulan = dist_km;   
							
							var statusjarak;       
							if (jarakbulan < 370400){
								statusjarak = "(Perigee)";
							} else if (jarakbulan > 404000){     
									statusjarak = "(Apogee)";
							} else statusjarak = "";      
								
							document.getElementById("Jarak").innerText = dist_km.toFixed(3) + " km "+statusjarak;  
							
							
							// Membuat objek Date untuk dua waktu yang berbeda
							var time =  new Date(date);
							var time1 = new Date(sunset);
							var time2 = new Date(moonset);
							var time3 = new Date(sunrise);
							var time4 = new Date(moonrise);
							
							var sunriseTime = time3.getTime();
							var sunsetTime = time1.getTime();
							var dateTime = time.getTime();
							
							// Menghitung selisih waktu dalam milidetik
							var difference = Math.abs(time2.getTime() - time1.getTime());

							// Mengubah milidetik menjadi detik
							var differenceInSeconds = Math.ceil(difference / 1000);	
							
							if (differenceInSeconds < 60) {
								var selisih = differenceInSeconds.toFixed(2) + " detik";
							}else {
								var selisih = differenceInSeconds / 60;
								selisih = selisih.toFixed(2) + " menit";    
							}
								
							if (differenceInSeconds > 3600) {
								var selisih = differenceInSeconds / 3600;
								selisih = selisih.toFixed(2) + " jam";
							}                    
									
							//DisplayEvent('Selisih',  differenceInSeconds);
							document.getElementById("Selisih").innerText = selisih;	   
							
							
							year = date.getFullYear();   
							month = date.getMonth()+1; // months are zero-indexed, so add 1
							day = date.getDate();      
							hour = date.getHours();
							minute = date.getMinutes();
							second = date.getSeconds(); 
							
							var hms = hour+":"+minute+":"+second;
							var ymd = year+"-"+month+"-"+day;
														
							//var saiki = new Date();
							var saiki = date; 
							var wingi = new Date(saiki.getFullYear(), saiki.getMonth() - 1, saiki.getDate());
							//date = wingi;
							var phase = getMoonPhase(year, month, day, hour, minute, second);

							// Menentukan umur bulan pada fase saat ini
							var ageInDays = 29.530589 ; // rata-rata umur bulan dalam sehari
							//var age = (ageInDays * phase / 100);
							var age = calculateMoonAge(date);  
							//moonAge = Math.round(age);
							moonAge = age.toFixed(2);
							
							if ((moonAge <= 1.8 && moonAge >= 28) || (illumi >= 0.00 && illumi <= 0.05)){
								var mph = "<span class='merah'>(New Moon)</span>";
							} else 
									  
							if ((age >= 14 && age <= 16) || (illumi >= 0.99 && illumi <= 1)){
								var mph = "<span class='merah'>(Full Moon)</span>";
							} else {
								var mph = "";    
							}  
                            
							if (mph == "<span class='merah'>(New Moon)</span>" ) {
								if (moonalt >= 5 && elongasi >= 8 && sunalt < 0){
									status = "<span class='biru'>1) Kriteria Wujudul Hilal TERPENUHI, </span><span class='hijau'>2) Kriteria Neo Mabims 364 TERPENUHI,</span> <span class='merah'>3) Kriteria KIG 58 TERPENUHI</span>"; 
								} else 
								if (moonalt >= 3 && elongasi >= 6.4 && sunalt < 0){
									status = "<span class='biru'>1) Kriteria Wujudul Hilal TERPENUHI,</span> <span class='hijau'>2) Kriteria Neo Mabims 364 TERPENUHI, </span><span class='merah'>3) Kriteria KIG 58 TIDAK TERPENUHI</span>";
								} else 
								if (moonalt >= 0 && elongasi >= 0 && sunalt < 0){
									status = "<span class='biru'>1) Kriteria Wujudul Hilal TERPENUHI, </span><span class='hijau'>2) Kriteria Neo Mabims 364 TIDAK TERPENUHI, </span><span class='merah'>3) Kriteria KIG 58 TIDAK TERPENUHI</span>";
								} else {
									status = "-";
								}
							} 
							
							document.getElementById('status').innerHTML = status;
																			
							var fase = Astronomy.MoonPhase(date);
							fase2 = Math.round(fase);
							fase3 = fase/360;
							fase = fase.toFixed(3); 
							var umbul = (fase/360)*29.530588853; 							
							
							umbul = umbul.toFixed(2)+" hari ("+convertToHMS(umbul)+")";

							document.getElementById('CurrentDateTime').innerHTML = FormatDate(date);
							document.getElementById('MoonPhaseAngle').innerHTML = fase+"°";
							
							document.getElementById('age').innerHTML = umbul; 
							//document.getElementById('age').innerText = moonAge+" hari ";
							document.getElementById('mph').innerHTML = mph;							
							displayImage(fase2);
						
							var mq, i;

							for (i=1; i<=4; ++i) {							
								mq = (i==1) ? Astronomy.SearchMoonQuarter(date) : Astronomy.NextMoonQuarter(mq);
								document.getElementById(`DateTime${i}`).innerHTML = FormatDate(mq.time.date);
								document.getElementById(`Quarter${i}`).innerHTML = QuarterName[mq.quarter];
							}
							
							for (i=1; i<=4; ++i) {	
								date = wingi;
								mq = (i==1) ? Astronomy.SearchMoonQuarter(date) : Astronomy.NextMoonQuarter(mq);
								document.getElementById(`TglJam${i}`).innerHTML = FormatDate(mq.time.date);
								document.getElementById(`Kuarter${i}`).innerHTML = QuarterName[mq.quarter];								
							}       

							const magnitude = calculateMoonMagnitude(date);
							//document.getElementById('magnitude').innerText = magnitude.toFixed(3);

							var PT = new PrayTimes('MU'); 
							var times = PT.getTimes(date, [latitude, longitude,gmt]);
							var timesmidnight = times.midnight;
							var timestt = times.midnight;
							timesmidnight = timesmidnight+":00";
							
							if (gmt < 0) { 
								gmtmin = gmt;
							} else {
								gmtmin = gmt;
							}
							timesmidnight = subtractGMT(timesmidnight,gmtmin); 
							
							if (gmt >= 0) {
								document.getElementById('midnight').innerHTML = timesmidnight;
							} else {
								document.getElementById('midnight').innerHTML = timestt;
							}
							
							if (gmt >= 0){
								document.getElementById('gmt').innerHTML = "UTC+"+gmtmin;
							} else {
								document.getElementById('gmt').innerHTML = "UTC"+gmtmin;
							}
							
							
							var prayertimes = PT.getTimes(date, [latitude, longitude,gmt]);
							var list = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
							
							if (gmt === 7) {
								document.getElementById('praytimes').innerHTML = "<strong>Informasi Jadwal Shalat Lokal (UTC+7):</strong> <br/>" +
								"<strong>Shubuh:</strong> "+ prayertimes[list[0].toLowerCase()] + ", " +
								"<strong>Dhuhur:</strong> "+ prayertimes[list[1].toLowerCase()] + ", " +
								"<strong>Ashar:</strong> "+ prayertimes[list[2].toLowerCase()] + ", " +
								"<strong>Maghrib:</strong> "+ prayertimes[list[3].toLowerCase()] + ", " +
								"<strong>Isya:</strong> "+ prayertimes[list[4].toLowerCase()];

							} else {document.getElementById('praytimes').innerHTML = "";}	
							
							// Calculate the round trip radar pulse time in seconds.
							//const round_trip_sec = (2 * dist_au) / C_AUSEC;
							//document.getElementById('Moon_trip').innerText = FormatCoord(round_trip_sec);         
							
							// Contoh penggunaan
							var positionMoon = moonalt; 
							var positionSun = sunalt; 
							var elongation = elongasi; 
							
							elongation = elongation.toFixed(4);
							//positionMoon = positionMoon.toFixed(2);
							//positionSun = positionSun.toFixed(2);
							positionMoon = positionMoon + 5;
							positionSun = positionSun + 10;
							
							
							//positionSun = positionSun.toFixed(2);
							drawMoonAndSun(positionMoon, positionSun, elongation);
							
							var subuhan;
							var ymdw;
							var waktuLokal = subtractGMT(hms,gmt);							
							var hourWL = waktuLokal.split(":")[0];
							
							if (hour < hourWL && gmt <=7 ){
								day = day - 1;
								ymdw = year+"-"+month+"-"+day;
								waktuLokal = ymdw+" "+waktuLokal;
							} else {
								waktuLokal = ymd+" "+waktuLokal;
							}
							
							
							
							if (longitude >= 95 && longitude < 141) { 
								if (hourWL <= 6 && positionSun > -18 && positionSun < -1){
								subuhan = "Shubuh";									
							} else 
								if ((hourWL >= 6 && hourWL <= 11) && positionSun >=6 && positionSun < 55){
									subuhan = "Dhuha";
							} else 
								if (hourWL >= 11 && positionSun > 32){
									subuhan = "Dhuhur";
							} else 
								if (hourWL >= 15 && (positionSun > 1 && positionSun < 32)){
									subuhan = "Ashar";
							}else 
								if (hourWL >= 17 && positionSun <= -0.2 && positionSun > -18){
									subuhan = "Maghrib";
							} else 
								if (hourWL >= 18 && positionSun <= -18){
									subuhan = "Isya";
							} else 
								if (hourWL >= 2 && positionSun >= -90 && positionSun <= -20){
									subuhan = "Tahajjud";
								} else {subuhan = "*";}	
							} else { subuhan = "-"; }
							
							document.getElementById('subuhan').innerText = subuhan;
							document.getElementById('waktuLokal').innerText = waktuLokal;
							
							// Contoh penggunaan
							var waktuKulminasiMatahari = hitungWaktuKulminasiMatahari(date, latitude, longitude);
							
							var time5 = new Date(waktuKulminasiMatahari);
							var suntransitTime = time5.getTime();

							// Format waktu menggunakan library 'moment.js'
							var waktuKulminasiMatahariFormatted = moment(waktuKulminasiMatahari).format('HH:mm:ss');

							var wlMatahari = subtractGMT(waktuKulminasiMatahariFormatted,gmt);    
							
							//document.getElementById('sunKulminasi').innerText = waktuKulminasiMatahariFormatted; 
							document.getElementById('sunKulminasiWL').innerText = wlMatahari; 


							// Mengganti dengan kunci API OpenWeatherMap Anda
							const apiKey = 'dda5ff1a9b8bd6f4a71de5070ca2d493';
													  
							getWeather(latitude, longitude, date, apiKey);
							
							if (sundec > 0){
								var utaraselatan = "Utara";
							} else {
								var utaraselatan = "Selatan";   
							}       
							
							document.getElementById('utaraselatan').innerText = utaraselatan;
														
						
							var moonInformation = calculateMoonInformation(date);
							//var moon_age = moonInformation['Moon Age'];
							var moon_phase = moonInformation['Moon Phase'];
							//var zodiac = moonInformation['Zodiac Constellation'];
							var trajectory = moonInformation['Trajectory'];
							
							//document.getElementById('moon_age').innerText =  moon_age;
							document.getElementById('moon_phase').innerText = moon_phase;
							document.getElementById('zodiac').innerText = trajectory;
							//document.getElementById('trajectory').innerText = trajectory;	 								

							var result = calculateQiblaAngle(latitude, longitude);
							var sudutkiblat = result.qiblaAngle;
							
							if (sudutkiblat < 0) {
							sudutkiblat = 360 + sudutkiblat;
							}
							
							var arahkiblat = sudutkiblat.toFixed(3);

							document.getElementById("sudutkiblat").innerHTML = "<strong>Sudut Kiblat:</strong> " + sudutkiblat.toFixed(3) + "°";
							document.getElementById("jarakkekabah").innerHTML = "<strong>Jarak ke Kabah:</strong> " + result.jarakKibla.toFixed(3) + " km";
							

							var diameter = 150;
							drawLine(diameter, arahkiblat);
						
						}
								   

						setTimeout(UpdateScreen, 1000);       
					}

					Options = Init();   
					UpdateScreen();
				}

			</script>
			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAATj04FZVxMmpwYZm05sLxKzUd7YVb8Jw&sensor=false"></script>
	</center>
		
	<div class="dialog-box" id="dialog-box">
		<?php
		  include "inputkalender.php";
		?>
		<button onclick="hideDialog()">Tutup</button>
	</div>
	<script>
		// Fungsi untuk menampilkan dialog box
		function showDialog() {
			document.getElementById("dialog-box").style.display = "block";
		}

		// Fungsi untuk menyembunyikan dialog box
		function hideDialog() {
			document.getElementById("dialog-box").style.display = "none";
		}
	</script>   
	
	<div class="konversi-box" id="konversi-box">
		<?php
		  include "h2m.php";
		?>
		<button onclick="hideKonversi()">Tutup</button>
	</div>
	<script>
		// Fungsi untuk menampilkan dialog box
		function showKonversi() {
			document.getElementById("konversi-box").style.display = "block";
		}

		// Fungsi untuk menyembunyikan dialog box
		function hideKonversi() {
			document.getElementById("konversi-box").style.display = "none";
		}
	</script>  	

	<div class="hari-box" id="hari-box">
		<?php
		  include "hitunghari.php";
		?>
		<button onclick="hideHari()">Tutup</button>
	</div>
	<script>
		// Fungsi untuk menampilkan dialog box
		function showHari() {
			document.getElementById("hari-box").style.display = "block";
		}

		// Fungsi untuk menyembunyikan dialog box
		function hideHari() {
			document.getElementById("hari-box").style.display = "none";
		}
	</script> 

	<div class="ketanggal-box" id="ketanggal-box">
		<?php
		  include "ketanggal.php";
		?>
		<button onclick="hideKetanggal()">Tutup</button>
	</div>
	<script>
		// Fungsi untuk menampilkan dialog box
		function showKetanggal() {
			document.getElementById("ketanggal-box").style.display = "block";
		}

		// Fungsi untuk menyembunyikan dialog box
		function hideKetanggal() {
			document.getElementById("ketanggal-box").style.display = "none";
		}
	</script> 
	
		<center>                  
			<p style="text-align: center;">       
				<span style="text-align: center; font-size: 15px;">Copyleft (ɔ) Kasmui, ChatGPT, Chatbot Bing & Bard Google, 2023. All Wrongs Reserved.</span>
			</p>
		</center>			
	</body>
</html>
