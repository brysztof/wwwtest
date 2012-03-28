<SCRIPT TYPE="text/javascript">
<!--
function checkAll(orderForm)
{
if(orderForm.everything.checked)
{
orderForm.check1.checked = true;
orderForm.check2.checked = true;
orderForm.check3.checked = true;
}
else if(!orderForm.everything.checked)
{
orderForm.check1.checked = false;
orderForm.check2.checked = false;
orderForm.check3.checked = false;
}
}
//-->
</SCRIPT>

<FORM ACTION="makeOrder.php">

<INPUT TYPE=CHECKBOX NAME="everything"   onClick="checkAll(this.form)">wszystkie<P>

<INPUT TYPE=CHECKBOX NAME="check1" />pieczarki<BR />
<INPUT TYPE=CHECKBOX NAME="check2" />cebula<BR />
<INPUT TYPE=CHECKBOX NAME="check3" />papryka<BR />


<INPUT TYPE=SUBMIT VALUE="zamów" />
</FORM>