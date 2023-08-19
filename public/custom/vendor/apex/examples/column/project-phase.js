async function projectPhasesAjaxRequest(){
	var urlPath = null;
	if (location.hostname === "localhost" || location.hostname === "127.0.0.1") {
		urlPath = "http://" + window.location.host + "/projectPhases";
	} else {
		urlPath = "https://" + window.location.host + "/projectPhases";
	}

	try {
        const response = await fetch(urlPath);
        if (response.ok) {
            const responseData = await response.json();
			
            const phaseData = responseData || {};

			projectPhases(phaseData);
			
        }
    } catch (error) {
        console.error("Fetch error:", error);
    }
}

projectPhasesAjaxRequest()

function projectPhases(response){
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
			name: 'Project',
			data: [
				response.identitifications, 
				response.developments, 
				response.procurements, 
				response.awards, 
				response.cps, 
				response.constructions, 
				response.operations
			]
		}],
		xaxis: {
			categories: ["Identification", "Development", "Procurement", "Award", "CP", "Constructions", "Operations"],
			position: 'top',
			labels: {
				offsetY: -10,
				rotate: -90,
				rotateAlways: true,
				style: {
					color: 'Blue',
					fontWeight: 500
				}
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
			text: '',
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
		colors: ['#af3ec6', '#af3ec6', '#af3ec6', '#af3ec6', '#af3ec6', '#af3ec6', '#af3ec6'],
	}
	var chart = new ApexCharts(
		document.querySelector("#project-phase"),
		options
	);
	chart.render();
}
