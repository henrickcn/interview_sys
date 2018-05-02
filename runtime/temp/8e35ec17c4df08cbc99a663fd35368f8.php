<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/admin\view\index\index.html";i:1525270465;}*/ ?>
<div class="row">

<div class="col-md-6">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">系统信息</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tbody>
                
            <tr>
              <td>人力机试系统版本</td>
              <td><?php echo $info['ob_version']; ?></td>
            </tr>  
<!--            <tr>
              <td>ThinkPHP版本</td>
              <td><?php echo $info['think_version']; ?></td>
            </tr>-->
            <tr>
              <td>服务器操作系统</td>
              <td><?php echo $info['os']; ?></td>
            </tr>
            <tr>
              <td>系统运行环境</td>
              <td><?php echo $info['software']; ?></td>
            </tr>
            <tr>
              <td>系统MySql版本</td>
              <td><?php echo $info['mysql_version']; ?></td>
            </tr>
            <tr>
              <td>系统PHP版本</td>
              <td><?php echo $info['php_version']; ?></td>
            </tr>
<!--            <tr>
              <td>上传限制</td>
              <td><?php echo $info['upload_max']; ?></td>
            </tr>-->
          </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
          <!-- /.box -->

          <!-- /.box -->
    </div>



<div class="col-md-6">
    
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">产品信息</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tbody>

            <tr>
              <td>产品名称</td>
              <td>微拍档人力机试系统</td>
            </tr> 
            <tr>
              <td>产品设计及研发团队</td>
              <td>wepartner team of php</td>
            </tr>
            <tr>
              <td>官方网址</td>
              <td><a target="_blank" href="http://www.weipaidang.net">www.weipaidang.net</a></td>
            </tr>
            <tr>
              <td>公众号</td>
              <td>wepartner</td>
            </tr>
            <tr>
              <td>开发手册</td>
              <td><?php echo $info['document']; ?></td>
            </tr>
          </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
</div>
  
  </div>