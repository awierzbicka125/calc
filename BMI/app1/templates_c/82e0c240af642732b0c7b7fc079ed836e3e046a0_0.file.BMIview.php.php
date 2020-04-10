<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-10 17:34:38
  from 'C:\xampp\htdocs\123\BMI\app1\BMIview.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e90920ed6bfa4_02241114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82e0c240af642732b0c7b7fc079ed836e3e046a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\123\\BMI\\app1\\BMIview.php',
      1 => 1586532768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e90920ed6bfa4_02241114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8893360645e90920ed2d427_58547264', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_8893360645e90920ed2d427_58547264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8893360645e90920ed2d427_58547264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Form -->
    <section>
        <h3>Wpisz dane do obliczeń</h3>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app1/BMIcalc.php">
            <div class="row gtr-uniform gtr-50">
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="waga" id="waga" value="" placeholder="Waga" />
                </div>
                <div class="col-6 col-12-xsmall">
                    <input type="text" name="wzrost" id="wzrost" value="" placeholder="Wzrost" />
                </div>
				
                <div class="col-6 col-12-xsmall">
                <?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li ><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>


<?php if (isset($_smarty_tpl->tpl_vars['infos']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
	<h4>Wynik</h4>
	<p class="res">
	Bmi = <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['bmi']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>
                </div>

                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
					
                </div>
            </div>
        </form>
		



    </section>
<?php
}
}
/* {/block 'content'} */
}
