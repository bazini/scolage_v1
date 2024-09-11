jQuery(document).ready(function($) {
	var areaChartCanvas = $('#areaChart').get(0).getContext('2d'), months = $('#areaChart').data("months"), deps = $('#areaChart').data("deps"), ent = $('#areaChart').data("ent");

	var areaChartData = {
	  labels  : months.split(','),
	  datasets: [
	    {
	      label               : 'Entrée',
	      backgroundColor     : 'rgba(60,141,188,0.9)',
	      borderColor         : 'rgba(60,141,188,0.8)',
	      pointRadius          : false,
	      pointColor          : '#3b8bba',
	      pointStrokeColor    : 'rgba(60,141,188,1)',
	      pointHighlightFill  : '#fff',
	      pointHighlightStroke: 'rgba(60,141,188,1)',
	      data                : ent.split(',')
	    },
	    {
	      label               : 'Sortie',
	      backgroundColor     : 'rgba(211, 12, 12, 1)',
	      borderColor         : 'rgba(211, 12, 12, 1)',
	      pointRadius         : false,
	      pointColor          : 'rgba(211, 12, 12, 1)',
	      pointStrokeColor    : '#A70E0E',
	      pointHighlightFill  : '#fff',
	      pointHighlightStroke: 'rgba(218,6,6,1)',
	      data                : deps.split(',')
	    },
	  ]
	}

	var areaChartOptions = {
	  maintainAspectRatio : false,
	  responsive : true,
	  legend: {
	    display: false
	  },
	  scales: {
	    xAxes: [{
	      gridLines : {
	        display : false,
	      }
	    }],
	    yAxes: [{
	      gridLines : {
	        display : false,
	      }
	    }]
	  }
	}

	// This will get the first returned node in the jQuery collection.
	var areaChart       = new Chart(areaChartCanvas, { 
	  type: 'line',
	  data: areaChartData, 
	  options: areaChartOptions
	});
});