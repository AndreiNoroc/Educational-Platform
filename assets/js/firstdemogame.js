var focus = 0;
var connections = 0;
var happines = 0;
var money = 0;


function choosefirstgame(clck) {
	document.getElementById("initdiv").style.display = 'inline-block';
	document.getElementById("initbutt").style.display = 'inline-block';
	document.getElementById("exitbutt").style.display = 'inline-block';

	document.getElementById('gpa').selectedIndex;
	document.getElementById('act').selectedIndex;

	document.getElementById("startfgame").disabled = true;
}

function startgame() {
	if (document.getElementById("gpa").value === "4-5") {
		if (document.getElementById("act").value === "Many") {
			focus = connections = happines = 30;
		} else if (document.getElementById("act").value === "Normal") {
			focus = connections = happines = 27;
		} else if (document.getElementById("act").value === "Few") {
			focus = connections = happines = 24;
		}
	} else if (document.getElementById("gpa").value === "3-4") {
		if (document.getElementById("act").value === "Many") {
			focus = connections = happines = 28;
		} else if (document.getElementById("act").value === "Normal") {
			focus = connections = happines = 25;
		} else if (document.getElementById("act").value === "Few") {
			focus = connections = happines = 22;
		}
	} else if (document.getElementById("gpa").value === "2-3") {
		if (document.getElementById("act").value === "Many") {
			focus = connections = happines = 26;
		} else if (document.getElementById("act").value === "Normal") {
			focus = connections = happines = 23;
		} else if (document.getElementById("act").value === "Few") {
			focus = connections = happines = 20;
		}
	} else if (document.getElementById("gpa").value === "1-2") {
		if (document.getElementById("act").value === "Many") {
			focus = connections = happines = 24;
		} else if (document.getElementById("act").value === "Normal") {
			focus = connections = happines = 21;
		} else if (document.getElementById("act").value === "Few") {
			focus = connections = happines = 18;
		}
	} else if (document.getElementById("gpa").value === "0-1") {
		if (document.getElementById("act").value === "Many") {
			focus = connections = happines = 22;
		} else if (document.getElementById("act").value === "Normal") {
			focus = connections = happines = 19;
		} else if (document.getElementById("act").value === "Few") {
			focus = connections = happines = 16;
		}
	}


	document.getElementById("initdiv").style.display = 'none';
	document.getElementById("initbutt").style.display = 'none';

	document.getElementById("barsprog").style.display = 'inline-block';

	document.getElementById("focus").style.width = focus + "%";
	document.getElementById("connec").style.width = connections + "%";
	document.getElementById("happ").style.width = happines + "%";

	document.getElementById("focus").innerHTML = "Focus: " + focus + "%";
	document.getElementById("connec").innerHTML = "Connections: " + connections + "%";
	document.getElementById("happ").innerHTML = "Happines: " + happines + "%";
	document.getElementById("mon").innerHTML = "Money: " + money + "$";

	document.getElementById("div1").style.display = 'inline-block';


	if (focus >= 25) {
		document.getElementById("div1hv1").style.display = 'inline-block';
	} else if (21 < focus && focus < 25) {
		document.getElementById("div1hv2").style.display = 'inline-block';
	} else {
		document.getElementById("div1hv3").style.display = 'inline-block';
	}

	document.getElementById("gp1").style.display = 'inline-block';

}

function exitgame() {
	document.getElementById("barsprog").style.display = 'none';

	document.getElementById("initdiv").style.display = 'none';

	document.getElementById("div1").style.display = 'none';
	document.getElementById("div1hv1").style.display = 'none';
	document.getElementById("div1hv2").style.display = 'none';
	document.getElementById("div1hv3").style.display = 'none';

	document.getElementById("div2").style.display = 'none';
	document.getElementById("div2hv1").style.display = 'none';

	document.getElementById("div3").style.display = 'none';
	document.getElementById("div3hv1").style.display = 'none';

	document.getElementById("div4").style.display = 'none';
	document.getElementById("div4hv1").style.display = 'none';

	document.getElementById("initbutt").style.display = 'none';
	document.getElementById("gp1").style.display = 'none';
	document.getElementById("gp2").style.display = 'none';
	document.getElementById("gp3").style.display = 'none';
	document.getElementById("exitbutt").style.display = 'none';

	focus = connections = happines = money = 0;

	document.getElementById("startfgame").disabled = false;
}

function fg1() {
	document.getElementById("div1").style.display = 'none';
	document.getElementById("div1hv1").style.display = 'none';
	document.getElementById("div1hv2").style.display = 'none';
	document.getElementById("div1hv3").style.display = 'none';
	document.getElementById("gp1").style.display = 'none';

	document.getElementById("div2").style.display = 'inline-block';
	document.getElementById("div2hv1").style.display = 'inline-block';

	document.getElementById("gp2").style.display = 'inline-block';
	document.getElementById("gp3").style.display = 'inline-block';
}

function fg2() {
	connections += 5;
	happines += 4;
	focus -= 4;

	document.getElementById("focus").innerHTML = "Focus: " + focus + "%";
	document.getElementById("connec").innerHTML = "Connections: " + connections + "%";
	document.getElementById("happ").innerHTML = "Happines: " + happines + "%";
	document.getElementById("mon").innerHTML = "Money: " + money + "$";

	document.getElementById("focus").style.width = focus + "%";
	document.getElementById("connec").style.width = connections + "%";
	document.getElementById("happ").style.width = happines + "%";

	document.getElementById("div2").style.display = 'none';
	document.getElementById("div2hv1").style.display = 'none';
	document.getElementById("gp2").style.display = 'none';
	document.getElementById("gp3").style.display = 'none';


	document.getElementById("div3").style.display = 'inline-block';
	document.getElementById("div3hv1").style.display = 'inline-block';
}

function fg3() {
	connections += 1;
	happines -= 5;
	focus += 3;
	money += 100;

	document.getElementById("focus").innerHTML = "Focus: " + focus + "%";
	document.getElementById("connec").innerHTML = "Connections: " + connections + "%";
	document.getElementById("happ").innerHTML = "Happines: " + happines + "%";
	document.getElementById("mon").innerHTML = "Money: " + money + "$";

	document.getElementById("focus").style.width = focus + "%";
	document.getElementById("connec").style.width = connections + "%";
	document.getElementById("happ").style.width = happines + "%";

	document.getElementById("div2").style.display = 'none';
	document.getElementById("div2hv1").style.display = 'none';
	document.getElementById("gp2").style.display = 'none';
	document.getElementById("gp3").style.display = 'none';


	document.getElementById("div4").style.display = 'inline-block';
	document.getElementById("div4hv1").style.display = 'inline-block';
}
