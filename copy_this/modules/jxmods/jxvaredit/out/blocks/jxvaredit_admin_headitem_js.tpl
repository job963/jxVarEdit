[{$smarty.block.parent}]

<script type="text/javascript">
<!--

    function checkGTIN(formElement) 
    {
        var gtin = formElement.value;
        var errCode;

        if ( gtin.match("[^0-9]") ) {
            formElement.style.color = "#ff0000";
            formElement.title = "[{ oxmultilang ident="JXVAREDIT_ERROR_WRONGCHARS" }]";
            return false;
        }

        var calcSum = 0;
        var txt = "";
        //alert (calcSum);
        for (var i=0; i<=11; i++) {
            if (i % 2 == 0)
                {
                calcSum += parseInt(gtin.charAt(i));
                txt += i+":"+parseInt(gtin.charAt(i)) + " ";
                }
            else
                {
                calcSum += parseInt(gtin.charAt(i)) * 3;
                txt += i+":"+parseInt(gtin.charAt(i)) * 3 + " ";
                }
        }
        //alert (calcSum);
        //alert(txt+calcSum);
        calcSum %= 10;
        calcSum = (calcSum == 0) ? 0 : (10 - calcSum);

        var checkSum = parseInt( gtin.substring( gtin.length - 1 ) );
        //alert(calcSum + '/' + checkSum);

        if ( calcSum != checkSum ) {
            //alert('wrong code');
            formElement.style.color = "#ff0000";
            formElement.title = "[{ oxmultilang ident="JXVAREDIT_ERROR_WRONGCHECKSUM" }]";
            return false;
        } else {
            //alert('correct');
            formElement.style.color = "#00aa00";
            formElement.title = "";
            return true;
        }
    }

-->
</script>
