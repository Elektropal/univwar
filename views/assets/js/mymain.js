$(function () {
	$.ajax({
		url 	:'api/result',
		type 	:"GET",
		dataType:"json",
		success :function(data){
			console.log(data);
			$('#container').highcharts({
			    chart: {
			        type: 'bar'
			    },
			    title: {
			        text: 'Stacked bar chart'
			    },
			    xAxis: data.result.xaxis,
			    yAxis: {
			        min: 0,
			        title: {
			            text: 'Total fruit consumption'
			        }
			    },
			    legend: {
			        reversed: true
			    },
			    plotOptions: {
			        series: {
			            stacking: 'normal'
			        }
			    },
			    series: data.result.series
			});
		},
		cache 	: false
	});
});