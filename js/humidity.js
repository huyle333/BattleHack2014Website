jQuery.support.cors = true;
$.support.cors = true;

var token = "";
//gets local JSON file and parses for the accuracy-> store in an array
$.getJSON('humidity.json',function(json){
	var allData = json;
  //var accAvg = 100 * data.accuracyAverage;
	var count = Object.keys(allData.parse).length;
	var data = [];
	for(var i = 0; i < count; i++){
      data.push(allData.parse[i]);
    }
	//d3js graphing
  function barGraph(){
      var margin = {top: 0, right: 0, left: 0, bottom: 30}
      var epoch = _.pluck(data, 'date');
      var humidity = _.pluck(data, 'humidity');
      var date = [];
      for(var i = 0; i < count; i++){
          date.push(new Date(epoch[i]* 1000));
      }
      var mindate = (date[0]);
      var maxdate = (date[count - 1 ]);
  	  var width = 960, height = 400;
      var y = d3.scale.linear().range([height, 0]).domain([0, d3.max(humidity, function(d){
      	return d;
      })]);
      var x = d3.time.scale().domain([mindate,maxdate]).range([0, width]);
      var graph = d3.select("#bargraph").attr("width", width).attr("height",height + 30).append('g');
      var barwidth = 2;//width / count;
      var line = d3.svg.line().x(function(d,i){
          return x(date[i]);
      }).y(function(d,i){
          return y(humidity[i]);
      });
      var xAxis = d3.svg.axis().scale(x).orient("bottom");
      var yAxis = d3.svg.axis().scale(y).orient('left');
      graph.append('g').attr("class", "xaxis").attr("transform", "translate(0," + height +")").call(xAxis);
      var ylabel = d3.select("#ylabel").attr("height","440px").attr("width","50px").append('g').attr("class", "y axis").attr("height", height).attr("transform","translate(40,10)").call(yAxis);
      graph.append("path").attr("d", line(humidity)).transition().duration(1000).attrTween('d',path);
      // graph.append("path").attr("e", line(temperature)).transition().duration(1000).attrTween('e',path);
      // graph.append("path").attr("f", line(noise)).transition().duration(1000).attrTween('f',path);
      // graph.append("path").attr("g", line(co)).transition().duration(1000).attrTween('g',path);
      function type(d){
  		d = +d;
  		return d;
  	}
    function path() {
        var interpolate = d3.scale.quantile()
                .domain([0,1])
                .range(d3.range(1, count + 1));
        return function(t) {
            return line(humidity.slice(0, interpolate(t)));
        };
    }
      function zoom(){
        if(d3.event.translate[0] > -100) {
          graph.select(".xaxis").call(xAxis);
          graph.selectAll("#bargraph rect").attr("transform","translate(" + d3.event.translate[0] + ",0)scale(" + d3.event.scale + ",1)");
          graph.selectAll("#bargraph path").attr("transform","translate(" + d3.event.translate[0] + ",0)scale(" + d3.event.scale + ",1)");
         }
      }
    } 
    barGraph();
});

