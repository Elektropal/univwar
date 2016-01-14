$(function () {
	$.ajax({
		url 	:'api/result',
		type 	:"GET",
		dataType:"json",
		success :function(data){
			console.log(data);
			$('#container_highcharts').highcharts({
			    chart: {
			        type: 'bar'
			    },
			    title: {
			        text: 'Posisi Universitas Saat ini'
			    },
			    xAxis: data.result.xaxis,
			    yAxis: {
			        min: 0,
			        title: {
			            text: 'Jumlah total'
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