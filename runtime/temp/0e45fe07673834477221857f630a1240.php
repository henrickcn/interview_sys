<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:100:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/admin\view\statistic\performer_facility.html";i:1525249071;}*/ ?>
<br/>
<div>
    <div id="main_system"  style="height:600px; width: 45%; float: left;"></div>
    <div id="main_browser" style="height:600px; width: 45%; float: right;"></div>
    <div style="clear:both;"></div>
</div>


<script type="text/javascript">
    
    option_system = {
        title : {
            text: '访客浏览器统计',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data: <?php echo $browser_name_data; ?>
        },
        series : [
            {
                name: '浏览器',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:<?php echo $browser_list; ?>,
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };
    
    option_browser = {
        title : {
            text: '访客操作系统统计',
            x:'center'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'vertical',
            left: 'left',
            data: <?php echo $system_name_data; ?>
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                center: ['50%', '60%'],
                data:<?php echo $system_list; ?>,
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ]
    };

    var myChartSystem = echarts.init(document.getElementById('main_system'));
    var myChartBrowser = echarts.init(document.getElementById('main_browser'));

    myChartSystem.setOption(option_system);
    myChartBrowser.setOption(option_browser);
</script>