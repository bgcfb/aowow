<?php $this->brick('header'); ?>

    <div class="main" id="main">
        <div class="main-precontents" id="main-precontents"></div>
        <div class="main-contents" id="main-contents">
            <div class="pad3"></div>
            <script type="text/javascript">
                function inputBoxValidate(f)
                {
                    var _ = f.elements[0];
                    if (_.value.length == 0)
                    {
                        $WH.ge('inputbox-error').innerHTML = LANG.message_enterusername;
                        _.focus();
                        return false;
                    }

                    _ = f.elements[1];
                    if (_.value.length == 0)
                    {
                        $WH.ge('inputbox-error').innerHTML = LANG.message_enterpassword;
                        _.focus();
                        return false;
                    }
                }
            </script>

            <form action="?account=signin&amp;next=<?php echo $this->next; ?>" method="post" onsubmit="return inputBoxValidate(this)">
                <div class="inputbox" style="position: relative">
                    <h1><?php echo Lang::$account['doSignIn']; ?></h1>
                    <div id="inputbox-error"><?php echo $this->error; ?></div>

                    <table align="center">
                        <tr>
                            <td align="right"><?php echo Lang::$account['user'].lang::$main['colon']; ?></td>
                            <td><input type="text" name="username" value="<?php echo $this->user; ?>" maxlength="16" id="username-generic" style="width: 10em" /></td>
                        </tr>
                        <tr>
                            <td align="right"><?php echo Lang::$account['pass'].lang::$main['colon']; ?></td>
                            <td><input type="password" name="password" style="width: 10em" /></td>
                        </tr>
                        <tr>
                            <td align="right" valign="top"><input type="checkbox" name="remember_me" id="remember_me" value="yes" checked="checked" /></td>
                            <td>
                                <label for="remember_me"><?php echo Lang::$account['rememberMe']; ?></label>
                                <div class="pad2"></div>
                                <input type="submit" value="<?php echo Lang::$account['signIn']; ?>" />
                            </td>
                        </tr>
                    </table>

                    <br>
                    <div style="position: absolute; right: 5px; bottom: 5px;"><?php echo Lang::$account['forgot'].lang::$main['colon']; ?><a href="?account=forgotusername"><?php echo Lang::$account['forgotUser']; ?></a> | <a href="?account=forgotpassword"><?php echo Lang::$account['forgotPass']; ?></a></div>
                </div>
            </form>

            <div class="pad3"></div>
<?php
if (CFG_ALLOW_REGISTER):
    echo '            <div style="text-align: center; line-height: 1.5em; font-size: 125%">'.Lang::$account['accCreate']."</div>\n";
endif;
?>
            <script type="text/javascript">$WH.ge('username-generic').focus()</script>
            <div class="clear"></div>
        </div><!-- main-contents -->
    </div><!-- main -->

<?php $this->brick('footer'); ?>
