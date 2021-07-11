var gameInProgress = false;

var focus = 0;
var connections = 0;
var happines = 0;
var money = 0;

let valueElements = new Map();

var listElements = ["barsprog", "initdiv", "initbutt", "exitbutt", "div0vh1", "div0vh2", "div0vh3", 
"div1vh1", "div2vh1", "div3vh1", "gp1", "gp2", "gp3"];

function choosefirstgame() {
	if (gameInProgress == false) {
		gameInProgress = true;

		document.getElementById("introwindow").style.display = 'none';
		document.getElementById("introtext").style.display = 'none';
		document.getElementById("tabletext").style.display = 'none';

		document.getElementById("firstgame").style.display = 'inline-block';
		document.getElementById("initdiv").style.display = 'inline-block';
		document.getElementById("initbutt").style.display = 'inline-block';
		document.getElementById("exitbutt").style.display = 'inline-block';

		document.getElementById('gpa').selectedIndex;
		document.getElementById('act').selectedIndex;

		document.getElementById("startfgame").disabled = true;
	} else {
		alert("Another game is already in progress!");
	}
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

	if (focus >= 25) {
		document.getElementById("div0vh1").style.display = 'inline-block';
	} else if (21 < focus && focus < 25) {
		document.getElementById("div0vh2").style.display = 'inline-block';
	} else {
		document.getElementById("div0vh3").style.display = 'inline-block';
	}

	document.getElementById("gp1").style.display = 'inline-block';

	valueElements.set("gp1", [0, 0, 0, 0, ["div0vh1", "div0vh2", "div0vh3"], ["gp1"], ["div1vh1"], ["gp2", "gp3"]]);
	valueElements.set("gp2", [5, 4, -4, -100, ["div1vh1"], ["gp2", "gp3"], ["div2vh1"], []]);
	valueElements.set("gp3", [1, -5, 3, 100, ["div1vh1"], ["gp2", "gp3"], ["div3vh1"], []]);
}

function exitfirstgame() {
	gameInProgress = false;

	for (var i = 0 ; i < listElements.length ; i++) {
		document.getElementById(listElements[i]).style.display = 'none';		
	}

	focus = connections = happines = money = 0;

	document.getElementById("firstgame").style.display = 'none';
	document.getElementById("startfgame").disabled = false;

	document.getElementById("introwindow").style.display = 'inline-block';
	document.getElementById("tabletext").style.display = 'table';
	document.getElementById("introtext").style.display = 'table-cell';
}

function exposeElements(clickedId) {
	var elemVals = valueElements.get(clickedId);

	connections += elemVals[0];
	happines += elemVals[1];
	focus += elemVals[2];
	money += elemVals[3];

	document.getElementById("focus").innerHTML = "Focus: " + focus + "%";
	document.getElementById("connec").innerHTML = "Connections: " + connections + "%";
	document.getElementById("happ").innerHTML = "Happines: " + happines + "%";
	document.getElementById("mon").innerHTML = "Money: " + money + "$";

	document.getElementById("focus").style.width = focus + "%";
	document.getElementById("connec").style.width = connections + "%";
	document.getElementById("happ").style.width = happines + "%";

	for (var i = 0 ; i < elemVals[4].length ; i++) {
		document.getElementById(elemVals[4][i]).style.display = 'none';		
	}

	for (var i = 0 ; i < elemVals[5].length ; i++) {
		document.getElementById(elemVals[5][i]).style.display = 'none';		
	}

	for (var i = 0 ; i < elemVals[6].length ; i++) {
		document.getElementById(elemVals[6][i]).style.display = 'inline-block';		
	}

	for (var i = 0 ; i < elemVals[7].length ; i++) {
		document.getElementById(elemVals[7][i]).style.display = 'inline-block';		
	}	
}

function choosesecondgame() {
	if (gameInProgress == false) {
		gameInProgress = true;

		document.getElementById("introwindow").style.display = 'none';
		document.getElementById("introtext").style.display = 'none';
		document.getElementById("tabletext").style.display = 'none';

		document.getElementById("explainsecgame").style.display = 'inline-block';
		document.getElementById("secondgame").style.display = 'inline-block';
		document.getElementById("initbuttsecond").style.display = 'inline-block';
		document.getElementById("exitbuttsecgame").style.display = 'inline-block';

		document.getElementById("startsgame").disabled = true;
	} else {
		alert("Another game is already in progress!");
	}
}

function startsecondgame() {
	document.getElementById("explainsecgame").style.display = 'none';
	document.getElementById("initbuttsecond").style.display = 'none';

	document.getElementById("finishbutton").style.display = 'inline-block';
	document.getElementById("citypuzzle").style.display = 'inline-block';
}

function drag(ev) {
    ev.dataTransfer.setData("tablepuzzlepieces", ev.target.id);
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("tablepuzzlepieces");
    ev.target.appendChild(document.getElementById(data));
}



function exitsecondgame() {
	gameInProgress = false;

	if (document.getElementById('div16').innerHTML.trim().length == 0) {
		console.log("DAAA");
	} else {
		var moveElem = document.getElementById('div16').getElementsByTagName("*");
		document.getElementById('tablepuzzlepieces').appendChild(document.getElementById(moveElem[0].id));
	}

	document.getElementById("finishbutton").style.display = 'none';
	document.getElementById("citypuzzle").style.display = 'none';
	document.getElementById("secondgame").style.display = 'none';
	document.getElementById("startsgame").disabled = false;

	document.getElementById("exitbuttsecgame").style.display = 'none';

	document.getElementById("introwindow").style.display = 'inline-block';
	document.getElementById("tabletext").style.display = 'table';
	document.getElementById("introtext").style.display = 'table-cell';
}
