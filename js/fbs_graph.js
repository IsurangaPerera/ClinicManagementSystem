var fbs_data = [];

/**
 * Get all data related to FBS 
 * and create graph containing fbs results
 * @param {}
 * @return {}
 */
function showGraph(){
    $("#fbs_chart").html(" ");
    var dataO;
    var dataT = [];

    $.ajax({
      type: "GET",
      url: "../report/fbs2/"+sessionStorage.getItem('patientId'),
      success: function( data, textStatus, jQxhr ){
        dataO = JSON.parse(data);
        for(i = 0; i < dataO.length; i++){
          dataT.push({
            "date" : dataO[i]['date'],
            "result" : dataO[i]['result']
          });
        }

        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'fbs_chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: dataT,
        // The name of the data record attribute that contains x-values.
        xkey: 'date',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['result'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Result( 70 to 100 mg/dl)']
      });
      },
      error: function( jqXhr, textStatus, errorThrown ){
        console.log(jqXhr.status);

      }
    });
}