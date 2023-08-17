$(function () {
	projcetMinistryAjaxRequest();
});

function projcetMinistryAjaxRequest(){
	var urlPath = null;
	if (location.hostname === "localhost" || location.hostname === "127.0.0.1") {
		urlPath = "http://" + window.location.host + "/projcetMinistry";
	} else {
		urlPath = "https://" + window.location.host + "/projcetMinistry";
	}

	$.ajax({
		type: "GET",
		url: urlPath,
		dataType: "json",
		success: function (response) {
			projcetMinistry(response);
		}
	});
}

// ministry array
function ministriesArray(response){
	const ministryArray = [];
	(response.projectMinistries).forEach(element => {
		ministryArray.push(element.name);
	});
	return ministryArray;
}
// project array
function ministryProject(response){
	const ministryProject = [];
	(response.projectMinistries).forEach(element => {
		ministryProject.push(element.projects.length);
	});
	return ministryProject;
}

function projcetMinistry(response){
	var options = {
		chart: {
			height: 300,
			type: 'bar',
			dropShadow: {
				enabled: true,
				opacity: 0.1,
				blur: 5,
				left: -10,
				top: 10
			},
		},
		plotOptions: {
			bar: {
				dataLabels: {
					position: 'top', // top, center, bottom
				},
			}
		},
		dataLabels: {
			enabled: true,
			formatter: function (val) {
				return val;
			},
			offsetY: -20,
			style: {
				fontSize: '12px',
				colors: ["#2e323c"]
			}
		},
		series: [{
			name: 'Projects',
			data: ministryProject(response)
		}],
		xaxis: {
			categories: ministriesArray(response),
			position: 'top',
			labels: {
				offsetY: -18,
			},
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false
			},
			crosshairs: {
				fill: {
					type: 'gradient',
					gradient: {
						colorFrom: '#17995e',
						colorTo: '#95c5ff',
						stops: [0, 100],
						opacityFrom: 0.4,
						opacityTo: 0.5,
					}
				}
			},
			tooltip: {
				enabled: true,
				offsetY: -35,
			}
		},
		fill: {
			gradient: {
				shade: 'light',
				type: "horizontal",
				shadeIntensity: 0.25,
				gradientToColors: undefined,
				inverseColors: true,
				opacityFrom: 1,
				opacityTo: 1,
				stops: [50, 0, 100, 100]
			},
		},
		yaxis: {
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false,
			},
			labels: {
				show: false,
				formatter: function (val) {
					return val;
				}
			}
		},
		title: {
			text: 'Monthly Inflation in Argentina, 2018',
			floating: true,
			offsetY: 320,
			align: 'center',
			style: {
				color: '#2e323c'
			}
		},
		grid: {
		borderColor: '#e0e6ed',
		strokeDashArray: 5,
		xaxis: {
		  lines: {
			show: true
		  }
		},   
		yaxis: {
		  lines: {
			show: false,
		  } 
		},
		padding: {
		  top: 0,
		  right: 0,
		  bottom: 0,
		  left: 0
		}, 
	  },
		colors: ['#E40C78', '#2b86f5', '#63a9ff', '#95c5ff', '#c6e0ff'],
	}
	var chart = new ApexCharts(
		document.querySelector("#project-ministry"),
		options
	);
	chart.render();
}
