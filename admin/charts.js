Highcharts.chart('container1', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Browser market shares in January, 2022'
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
      point: {
        valueSuffix: '%'
      }
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %'
        }
      }
    },
    series: [{
      name: 'Brands',
      colorByPoint: true,
      data: [{
        name: 'Jacket',
        y: 49.5,
        sliced: true,
        selected: true
      }, {
        name: 'T-shirt',
        y: 11.5
      }, {
        name: 'Sweater',
        y: 19.5
      }, {
        name: 'Bottom',
        y: 10.5
      }, {
        name: 'Top',
        y: 20
      }]
    }]
  });