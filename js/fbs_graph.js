var fbs_data = [];

function showGraph(){

	new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'fbs_chart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { date: '2016-01-15', result: 101 },
    { date: '2016-02-28', result: 78 },
    { date: '2016-04-05', result: 88 },
    { date: '2016-05-23', result: 98 },
    { date: '2016-06-30', result: 105 },
    { date: '2016-08-30', result: 87 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'date',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['result'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Result( 70 to 100 mg/dl)']
});
}