var thehours = new Date().getHours();
	var themessage;
	var morning = ('Selamat Pagi');
	var afternoon = ('Selamat Siang');
    var evening = ('Selamat Sore');
    var petang = ('Selamat Petang');
    var night = ('Selamat Malam');

    if (thehours >= 5 && thehours < 11) {
		themessage = morning; 

	} else if (thehours >= 11 && thehours < 15) {
		themessage = afternoon;

	} else if (thehours >= 15 && thehours < 18) {
		themessage = evening;
	}else if (thehours >= 18 && thehours < 20) {
		themessage = petang;

	}else {
        
            themessage = night;
    }

	$('.greeting').append(themessage);
    
    

	let hourDiv1 = document.getElementById("hour1"),
	  hourDiv2 = document.getElementById("hour2"),
	  minuteDiv1 = document.getElementById("minute1"),
	  minuteDiv2 = document.getElementById("minute2"),
	  secondDiv1 = document.getElementById("second1"),
	  secondDiv2 = document.getElementById("second2"),
	  hourClass1 = document.getElementsByClassName("hour1"),
	  hourClass2 = document.getElementsByClassName("hour2"),
	  minuteClass1 = document.getElementsByClassName("minute1"),
	  minuteClass2 = document.getElementsByClassName("minute2"),
	  secondClass1 = document.getElementsByClassName("second1"),
	  secondClass2 = document.getElementsByClassName("second2"),
	  hour1,
	  hour2,
	  minute1,
	  minute2,
	  second1,
	  second2,
    colorChanger,
    BGColorChanger;

function clockChange() {
	hour = new Date().getHours() % 12;

	if (hour == 0) {
		hour = 12;
	}

	if (hour >= 10) {
		hour1 = new Date().toLocaleTimeString().substr(0,1);
		hour2 = new Date().toLocaleTimeString().substr(1,1);
		minute1 = new Date().toLocaleTimeString().substr(3,1);
		minute2 = new Date().toLocaleTimeString().substr(4,1);
		second1 = new Date().toLocaleTimeString().substr(6,1);
		second2 = new Date().toLocaleTimeString().substr(7,1);
		colorChanger = "#" + hour1 + hour2 + minute1 + minute2 + second1 + second2;
		BGColorChanger = "#" + "e" + hour2 + "e" + minute2 + "e" + second2;
	}

	if (hour <= 9) {
		hour1 = 0;
		hour2 = new Date().toLocaleTimeString().substr(0,1);
		minute1 = new Date().toLocaleTimeString().substr(2,1);
		minute2 = new Date().toLocaleTimeString().substr(3,1);
		second1 = new Date().toLocaleTimeString().substr(5,1);
		second2 = new Date().toLocaleTimeString().substr(6,1);
		colorChanger = "#" + hour1 + hour2 + minute1 + minute2 + second1 + second2;
		BGColorChanger = "#" + "e" + hour2 + "e" + minute2 + "e" + second2;
	}

	if ( ( (hour1 == 1 && hour2 == 2) || (hour1 == 0 && hour2 == 9) || (hour1 == 1 && hour2 == 0) || (hour1 == 1 && hour2 == 1) ) && (minute1 == 5 && minute2 == 9 && second1 == 5 && second2 == 9) ) {
		hourDiv1.style.animationName = "clockTurn";
		setTimeout(function() {hourDiv1.style.animationName = "";}, 1700)
	}

	if (minute1 == 5 && minute2 == 9 && second1 == 5 && second2 == 9) {
		hourDiv2.style.animationName = "clockTurn";
		setTimeout(function() {hourDiv2.style.animationName = "";}, 1700)
	}

	if (minute2 == 9 && second1 == 5 && second2 == 9) {
		minuteDiv1.style.animationName = "clockTurn";
		setTimeout(function() {minuteDiv1.style.animationName = "";}, 1700)
	}

	if (second1 == 5 && second2 == 9) {
		minuteDiv2.style.animationName = "clockTurn";
		setTimeout(function() {minuteDiv2.style.animationName = "";}, 1700)
	}

	if (second2 == 9) {
		secondDiv1.style.animationName = "clockTurn";
		setTimeout(function() {secondDiv1.style.animationName = "";}, 1700)
	}

	for (let i = 0; i < 2; i++) {
		hourClass1[i].innerHTML = hour1;
		hourClass2[i].innerHTML = hour2;
		minuteClass1[i].innerHTML = minute1;
		minuteClass2[i].innerHTML = minute2;
		secondClass1[i].innerHTML = second1;
		secondClass2[i].innerHTML = second2;
	}

	for (let i = 2; i < 4; i++) {
		if (hour1 != 0) {hourClass1[i].innerHTML = hour1 - 1;}
		if (hour2 != 0) {hourClass2[i].innerHTML = hour2 - 1;}
		if (minute1 != 0) {minuteClass1[i].innerHTML = minute1 - 1;}
		if (minute2 != 0) {minuteClass2[i].innerHTML = minute2 - 1;}
		if (second1 != 0) {secondClass1[i].innerHTML = second1 - 1;}
		if (second2 != 0) {secondClass2[i].innerHTML = second2 - 1;}
	}

  for (let i = 0; i < 4; i++) {
		hourClass1[i].style.color = colorChanger;
		hourClass2[i].style.color = colorChanger;
		minuteClass1[i].style.color = colorChanger;
		minuteClass2[i].style.color = colorChanger;
		secondClass1[i].style.color = colorChanger;
		secondClass2[i].style.color = colorChanger;
		hourClass1[i].style.backgroundColor = BGColorChanger;
		hourClass2[i].style.backgroundColor = BGColorChanger;
		minuteClass1[i].style.backgroundColor = BGColorChanger;
		minuteClass2[i].style.backgroundColor = BGColorChanger;
		secondClass1[i].style.backgroundColor = BGColorChanger;
		secondClass2[i].style.backgroundColor = BGColorChanger;
	}
	document.getElementsByClassName("doubleDot")[0].style.color = colorChanger;
	document.getElementsByClassName("doubleDot")[1].style.color = colorChanger;
}

setTimeout(clockChange, 1)
setInterval(clockChange, 1000)

	document.getElementById('greeting').innerHTML = themessage;
    
//event pada link
$('.page-scroll').on('click',function(e){

    //ambil isi href
    var tujuan = $(this).attr('href');
    //tangkap elemen yg bersangkutan
    var elemenTujuan = $(tujuan);

    // pindahkan scroll
    $('html,body').animate({
        scrollTop: elemenTujuan.offset().top - 50
    },1000);

    e.preventDefault();

});

var thehours = new Date().getHours();
	var themessage;
	var morning = ('Good morning');
	var afternoon = ('Good afternoon');
	var evening = ('Good evening');

	if (thehours >= 0 && thehours < 12) {
		themessage = morning; 

	} else if (thehours >= 12 && thehours < 17) {
		themessage = afternoon;

	} else if (thehours >= 17 && thehours < 24) {
		themessage = evening;
	}

	$('.greeting').append(themessage);

    
// date
var $dOut = $('#date'),
    $hOut = $('#hours'),
    $mOut = $('#minutes'),
    $sOut = $('#seconds'),
    $ampmOut = $('#ampm');
var months = [
  'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
];

var days = [
  'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
];

function update(){
  var date = new Date();
  
  
  
  var dayOfWeek = days[date.getDay()];
  var month = months[date.getMonth()];
  var day = date.getDate();
  var year = date.getFullYear();
  
  var dateString = dayOfWeek + ', ' + day  + ' ' + month + ' ' + year;
  
  $dOut.text(dateString);
  $hOut.text(hours);
  $mOut.text(minutes);
  $sOut.text(seconds);
  $ampmOut.text(ampm);
} 

update();
window.setInterval(update, 1000);
