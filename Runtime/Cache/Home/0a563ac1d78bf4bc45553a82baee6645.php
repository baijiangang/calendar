<?php if (!defined('THINK_PATH')) exit();?><html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/Public/css/fullcalendar.css"> 
<link rel="stylesheet" type="text/css" href="/Public/css/main.css"> 
<script src="/Public/js/jquery.min.js"></script> 
<script src="/Public/js/jquery-ui.custom.min.js"></script> 
<script src="/Public/js/fullcalendar.min.js"></script> 
<style type="text/css">
#calendar{width:960px; margin:20px auto 10px auto}
</style>
</head>

<body>
<div id='calendar'></div> 
</body>
<script type="text/javascript">
$(document).ready(function() { 
    //页面加载完初始化日历 
    $('#calendar').fullCalendar({ 
        //设置选项和回调 
		 header: {
			 //设置日历头部信息 
            right: 'prev,next today', 
            center: 'title', 
            left: 'month,agendaWeek,agendaDay' 
        }, 
        firstDay:7,//每行第一天为周一 
        editable: true,//可以拖动 
        events: [
				{
					title: '全天计划\r\n#####\r\n写代码',
					start: '2015-04-27',
					//end: '2015-04-27',
					color: '#775ffa',
					rendering: 'background'
				},
				//eventColor: '#378006'
		]
	}) 
 
}); 
</script>
</html>