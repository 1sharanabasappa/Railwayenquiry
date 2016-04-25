<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    .morris-hover{position:absolute;z-index:1000}.morris-hover.morris-default-style{border-radius:10px;padding:6px;color:#666;background:rgba(255,255,255,0.8);border:solid 2px rgba(230,230,230,0.8);font-family:sans-serif;font-size:12px;text-align:center}.morris-hover.morris-default-style .morris-hover-row-label{font-weight:bold;margin:0.25em 0}
.morris-hover.morris-default-style .morris-hover-point{white-space:nowrap;margin:0.1em 0}

    
    
    </style>
</head>
<body>

    
    <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    	<h3>Morris Charts Example</h3>  
    </div>
  </div><!--/row-->
  <hr>
  <div class="row">
    <div class="col-md-12">
        <div id="area-example" style="height: 300px;"></div>
    </div>
    <div class="col-md-12">
        <div id="line-example" style="height: 300px;"></div>
    </div>
    <div class="col-md-6">
        <div id="donut-example" style="height: 250px;"></div>
    </div>
    <div class="col-md-6">
        <div id="bar-example" style="height: 250px;"></div>
    </div>
  </div>
</div>
    <script type="text/javascript">
    
    //Morris charts snippet - js

$.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
$.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

  Morris.Area({
    element: 'area-example',
    data: [
      { y: '1.1.', a: 100, b: 90 },
      { y: '2.1.', a: 75,  b: 65 },
      { y: '3.1.', a: 50,  b: 40 },
      { y: '4.1.', a: 75,  b: 65 },
      { y: '5.1.', a: 50,  b: 40 },
      { y: '6.1.', a: 75,  b: 65 },
      { y: '7.1.', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B']
  });
  
  Morris.Line({
        element: 'line-example',
        data: [
          {year: '2010',<?php echo $num[2010];?>},
          {year: '2011', value: 10},
          {year: '2012', value: 5},
          {year: '2013', value: 2},
          {year: '2014',<?php echo $num[2010];?>}
        ],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value']
      });
      
      Morris.Donut({
        element: 'donut-example',
        data: [
         {label: "Android", value: 12},
         {label: "iPhone", value: 30},
         {label: "Other",<?php echo $num[2010];?>}
        ]
      });
      
      Morris.Bar({
         element: 'bar-example',
         data: [
            {y: 'Jan 2014', a: 100, b: 90},
            {y: 'Feb 2014', a: 75,  b: 65},
            {y: 'Mar 2014', a: 50,  b: 40},
            {y: 'Apr 2014', a: 75,  b: 65},
            {y: 'May 2014', a: 50,  b: 40},
            {y: 'Jun 2014', a: 75,  b: 65}
         ],
         xkey: 'y',
         ykeys: ['a', 'b'],
         labels: ['Visitors', 'Conversions']
      });
  
});
});
    
    </script>
    
    </body>
</html>
