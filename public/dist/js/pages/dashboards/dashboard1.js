$(function () {
	'use strict';

	function randomData(min, max) {
		return Math.floor(Math.random() * (max - min + 1) + min);
	}

	// ==============================================================
	// sales ratio
	// ==============================================================
	var chart = new Chartist.Line(
		'.sales', {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
			series: [
				[randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48)],
				[randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48)],
				[randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48)],
				[randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48), randomData(0, 48)]
			]
		}, {
			low: 0,
			high: 48,
			showArea: true,
			fullWidth: true,
			plugins: [Chartist.plugins.tooltip()],
			axisY: {
				onlyInteger: true,
				scaleMinSpace: 40,
				offset: 20,
				labelInterpolationFnc: function (value) {
					return value * 10;
				}
			}
		}
	);

	// Offset x1 a tiny amount so that the straight stroke gets a bounding box
	// Straight lines don't get a bounding box
	// Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
	chart.on('draw', function (ctx) {
		if (ctx.type === 'area') {
			ctx.element.attr({
				x1: ctx.x1 + 0.001
			});
		}
	});

	// Create the gradient definition on created event (always after chart re-render)
	chart.on('created', function (ctx) {
		var defs = ctx.svg.elem('defs');
		defs
			.elem('linearGradient', {
				id: 'gradient',
				x1: 0,
				y1: 1,
				x2: 0,
				y2: 0
			})
			.elem('stop', {
				offset: 0,
				'stop-color': 'rgba(255, 255, 255, 1)'
			})
			.parent()
			.elem('stop', {
				offset: 1,
				'stop-color': 'rgba(64, 196, 255, 1)'
			});
	});

	var chart = [chart];

	// ==============================================================
	// campaign
	// ==============================================================
	loadchart(null);


	$('.donut_date').on('change', function () {
		console.log($('.donut_date').val());
		var date = $('.donut_date').val();
        $('.my_spinner').css('visibility', 'visible');
        loadchart(date);

    })
});

 function loadchart(date) {
     var route = window.location.origin + '/public/chartdata';
     var data_column = [];

     $.get(route, {query_date : date}, function (data, status) {
         console.log(data);

         data.data.forEach((item, index) => {
             data_column[index] = [item.name, item.moyenne];

         });

         if(data_column.length === 0){
             data_column[0] = ['Aucune transaction', 0];
		 }

         $('.my_spinner').css('visibility', 'hidden');

         var chart = c3.generate({
             bindto: '#campaign',
             data: {
                 columns: data_column,
                 type: 'donut',
                 tooltip: {
                     show: true
                 }
             },
             donut: {
                 label: {
                     show: false
                 },
                 title: data.total,
                 width: 45
             },

             legend: {
                 hide: false
             },
             color: {
                 pattern: [
                     '#30ccff',
                     '#5cd050',
                     '#ffaf30',
                     '#ff7430',
                     '#f158d0',
                     '#c581fc',
                     '#e8ff1b',
                     '#f60000',
                 ]
             }
         });
     });
}