<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>
<script type="text/javascript">
    <!--
    $(function () {
        $.formValidator.initConfig({
            formid: "myform", autotip: true, onerror: function (msg, obj) {
                window.top.art.dialog({content: msg, lock: true, width: '200', height: '50'}, function () {
                    this.close();
                    $(obj).focus();
                })
            }
        });
        $("#name").formValidator({
            onshow: "<?php echo L('type_name_tips')?>",
            onfocus: "<?php echo L("input").L('type_name')?>",
            oncorrect: "<?php echo L('input_right');?>"
        }).inputValidator({min: 1, onerror: "<?php echo L("input").L('type_name')?>"});
    })
    //-->
</script>
<form action="?m=content&c=city_manage&a=add" method="post" id="myform">
    <div style="padding:6px 3px">
        <div class="col-2 col-left mr6" style="width:100%">
            <h6><img src="<?php echo IMG_PATH; ?>icon/sitemap-application-blue.png" width="16" height="16"/>添加信息</h6>
            <table width="100%" class="table_form">
                <tr>
                    <th>小区名称：</th>
                    <td class="y-bg">
                        <input name="info[city_name]"  style="width:300px;">
                    </td>

                </tr>
                <tr>
                    <th>小区位置：</th>
                    <td class="y-bg">
                        <input name="info[city_address]"  style="width:300px;">
                    </td>

                </tr>
            </table>

            <div class="bk15"></div>
            <input type="submit"  style="margin-left:400px;" id="dosubmit" name="dosubmit" value="添加"/>

        </div>
    </div>
</form>
</body>

</html>