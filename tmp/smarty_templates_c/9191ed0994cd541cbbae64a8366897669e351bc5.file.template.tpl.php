<?php /* Smarty version Smarty-3.1.11, created on 2014-08-06 15:04:02
         compiled from "modules/users/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94027418953e1af35e29e74-87365437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9191ed0994cd541cbbae64a8366897669e351bc5' => 
    array (
      0 => 'modules/users/template.tpl',
      1 => 1407326636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94027418953e1af35e29e74-87365437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_53e1af361cd4d8_31687070',
  'variables' => 
  array (
    'dirs' => 0,
    'module' => 0,
    'action' => 0,
    'admAuth' => 0,
    'TPL' => 0,
    'v' => 0,
    'k' => 0,
    'titles' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e1af361cd4d8_31687070')) {function content_53e1af361cd4d8_31687070($_smarty_tpl) {?><link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['modules'];?>
<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
/template.js"></script>





<?php if ($_smarty_tpl->tpl_vars['action']->value=='admList'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admList">
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_search.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <table class="wwTable"><tbody>
        <tr>
            <th style="width: 40px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_id'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_id&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_id'];?>
</a>
            </th>
            <th style="width: 100px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_type'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_type&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_type'];?>
</a>
            </th>
            <th style="width: 120px;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_login'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_login&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_login'];?>
</a>
            </th>
            <th style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_password'];?>
</th>
            <th style="width: auto;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_email'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_email&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_email'];?>
</a>
            </th>
            <th style="width: auto;">
                <?php if ($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderField']=='items_fio'){?><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/sort_<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'];?>
.png" alt=""/><?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['TPL']->value['GETvars']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['v']->value)&&!in_array($_smarty_tpl->tpl_vars['k']->value,array('GVorderField','GVorderValue'))){?>&<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?><?php } ?>&GVorderField=items_fio&GVorderValue=<?php if (empty($_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue'])||$_smarty_tpl->tpl_vars['TPL']->value['GETvars']['GVorderValue']=='up'){?>down<?php }else{ ?>up<?php }?>"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_fio'];?>
</a>
            </th>
            <th style="width: 75px;"><?php echo $_smarty_tpl->tpl_vars['titles']->value['table_actions'];?>
</th>
        </tr>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['items']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?><tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['iteration']%2==0){?>odd<?php }else{ ?>even<?php }?>">
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_type'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_login'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_password'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_fio'];?>
</td>
            <td class="actions">
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/usersChangeAccess/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnAccess'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_<?php if ($_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_access']){?>on<?php }else{ ?>off<?php }?>.png" alt=""/></a>&nbsp;
                <a class="act" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
<?php echo $_smarty_tpl->tpl_vars['TPL']->value['GETvarsStr'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnEdit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_edit.png" alt=""/></a>&nbsp;
                <a class="ajax" href="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['href'];?>
/usersDelItem/?id=<?php echo $_smarty_tpl->tpl_vars['TPL']->value['items'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['items_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['titles']->value['table_btnDel'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dirs']->value['template'];?>
images/adminka/btn/btn_del.png" alt=""/></a>
            </td>
        </tr><?php endfor; endif; ?>
    </tbody></table>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['dirs']->value['template']).('blocks/adm_pager.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='admEdit'&&$_smarty_tpl->tpl_vars['admAuth']->value){?><div class="admEdit">
    <form class="wwForm" name="fContent" method="post" action="">
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_type'];?>
</div>
            <div class="right"><select class="text required" name="items_type">
                <option value=""<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_type']==''){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_choose'];?>
</option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TPL']->value['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?><option value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['types'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
"<?php if ($_smarty_tpl->tpl_vars['TPL']->value['item']['items_type']==$_smarty_tpl->tpl_vars['TPL']->value['types'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['TPL']->value['types'][$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</option><?php endfor; endif; ?>
            </select></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_login" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_login'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_password" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_password'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_fio'];?>
</div>
            <div class="right"><input class="text" type="text" name="items_fio" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_fio'];?>
"/></div>
        </div>
        <div class="row">
            <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_email'];?>
</div>
            <div class="right"><input class="text required" type="text" name="items_email" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_email'];?>
"/></div>
        </div>
        <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_save'];?>
</a></div>
    </form>
</div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='registration'&&!$_smarty_tpl->tpl_vars['auth']->value){?><div class="registration"><form name="fContent" method="post" action="" class="wwForm">
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
        <div class="right"><input type="text" name="items_login" class="text required" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_login'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
        <div class="right"><input type="password" name="items_password" class="text required" value=""/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_fio'];?>
</div>
        <div class="right"><input type="text" name="items_fio" class="text" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_fio'];?>
"/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_email'];?>
</div>
        <div class="right"><input type="text" name="items_email" class="text required" value="<?php echo $_smarty_tpl->tpl_vars['TPL']->value['item']['items_email'];?>
"/></div>
    </div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_registration'];?>
</a></div>
</form></div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='auth'&&!$_smarty_tpl->tpl_vars['auth']->value){?><div class="auth"><form name="fContent" method="post" action="" class="wwForm">
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_login'];?>
</div>
        <div class="right"><input type="text" name="login" class="text required" value=""/></div>
    </div>
    <div class="row">
        <div class="left"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_password'];?>
</div>
        <div class="right"><input type="password" name="password" class="text required" value=""/></div>
    </div>
    <div class="row">
        <div class="left"></div>
        <div class="right remindPass"><a href="#"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_remindPass'];?>
</a></div>
    </div>
    <div class="row remindDiv"><?php echo $_smarty_tpl->tpl_vars['titles']->value['form_email'];?>
 <input type="text" name="email" value=""/><a href="?route=users/remind"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_submit'];?>
</a></div>
    <div class="row divSubmit"><a href="#" class="submit btnSubmit"><?php echo $_smarty_tpl->tpl_vars['titles']->value['buttons_enter'];?>
</a></div>
</form></div>





<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='cabinet'&&$_smarty_tpl->tpl_vars['auth']->value){?><div class="cabinet"><a href="?route=users/exit">exit</a></div>





<?php }?><?php }} ?>