async function projectSectorAjaxRequest(){
	var urlPath = null;
	if (location.hostname === "localhost" || location.hostname === "127.0.0.1") {
		urlPath = "http://" + window.location.host + "/projectSector";
	} else {
		urlPath = "https://" + window.location.host + "/projectSector";
	}

	try {
        const response = await fetch(urlPath);
        if (response.ok) {
            const responseData = await response.json();
			
            const projectSectors = responseData.projectSectors || [];

            if (projectSectors.length > 0) {
                projectSector(projectSectors);
            }
        }
    } catch (error) {
        console.error("Fetch error:", error);
    }
}

projectSectorAjaxRequest()

// sector array
function sectorsArray(response){
	const sectorArray = [];
	response.forEach(element => {
		sectorArray.push(element.name);
	});
	return sectorArray;
}
// project array
function projectArray(response){
	const projectArray = [];
	response.forEach(element => {
		projectArray.push(element.projects.length);
	});
	return projectArray;
}

function projectSector(response){
	var options = {
		chart: {
			height: 450,
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
			data: projectArray(response)
		}],
		xaxis: {
			categories: sectorsArray(response),
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
				position: "left",
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
		colors: ['#17995e', '#2b86f5', '#63a9ff', '#95c5ff', '#c6e0ff'],
	}
	var chart = new ApexCharts(
		document.querySelector("#project-sector"),
		options
	);
	chart.render();
}
