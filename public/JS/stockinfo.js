function showinfo() {
    document.getElementById("infoCard").style.display = 'inline';
}

function chooseData(btn) {
	if (btn == "btndt1") {
		document.getElementById("oneweek").style.display = 'inline';
		document.getElementById("onemonth").style.display = 'none';
		document.getElementById("threemonths").style.display = 'none';
	} else if (btn == "btndt2") {
		document.getElementById("oneweek").style.display = 'none';
		document.getElementById("onemonth").style.display = 'inline';
		document.getElementById("threemonths").style.display = 'none';
	} else if (btn == "btndt3") {
		document.getElementById("oneweek").style.display = 'none';
		document.getElementById("onemonth").style.display = 'none';
		document.getElementById("threemonths").style.display = 'inline';
	}
}

jQuery(function ($) {
		var data1 = [12, 3, 4, 2, 12, 3, 4, 17, 22, 34, 54, 67];

        $("#chart1").shieldChart({
            exportOptions: {
                image: false,
                print: false
            },
            axisY: {
                title: {
                    text: "Break-Down for selected quarter"
                }
            },
            dataSeries: [{
                seriesType: "line",
                data: data1 
            }]
        });
});
