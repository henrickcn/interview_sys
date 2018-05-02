<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:89:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/admin\view\member\member_add.html";i:1525272560;s:93:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/admin\view\layout\edit_btn_group.html";i:1525249071;}*/ ?>
<form action="<?php echo url(); ?>" method="post" class="form_single">
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>用户名</label>
              <span></span>
              <input class="form-control" name="username" placeholder="手机号" type="text">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>真实姓名</label>
              <span></span>
              <input class="form-control" name="nickname" placeholder="真实姓名" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>密码</label>
              <span>（默认密码：wpd123456）</span>
              <input class="form-control" name="password" value="wpd123456" placeholder="请输入密码" type="password">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>确认密码</label>
              <span>（默认密码：wpd123456）</span>
              <input class="form-control" name="password_confirm"  value="wpd123456" placeholder="请输入确认密码" type="password">
            </div>
          </div>

        </div>
      </div>
      <div class="box-footer">
        
        <button  type="submit" class="btn ladda-button ajax-post" data-style="slide-up" target-form="form_single">
    <span class="ladda-label"><i class="fa fa-send"></i> 确 定</span>
</button>

<a class="btn" onclick="javascript:history.back(-1);return false;"><i class="fa fa-history"></i> 返 回</a>
      </div>
    </div>
</form>
