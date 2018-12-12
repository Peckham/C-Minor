<?php

/* acp_users_overview.html */
class __TwigTemplate_7698ea7875498c26b7a8906d9d684c86f5b4258badb5aa05312ad6d67920e3f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form id=\"user_overview\" method=\"post\" action=\"";
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
\t<legend>";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_USER_OVERVIEW");
        echo "</legend>
<dl>
\t<dt><label for=\"user\">";
        // line 6
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NAME_CHARS_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"user\" name=\"user\" value=\"";
        // line 7
        echo ($context["USER"] ?? null);
        echo "\" /></dd>
\t";
        // line 8
        if (($context["U_SWITCH_PERMISSIONS"] ?? null)) {
            echo "<dd>[ <a href=\"";
            echo ($context["U_SWITCH_PERMISSIONS"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USE_PERMISSIONS");
            echo "</a> ]</dd>";
        }
        // line 9
        echo "</dl>
";
        // line 10
        if (($context["S_USER_INACTIVE"] ?? null)) {
            // line 11
            echo "<dl>
\t<dt><label>";
            // line 12
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t<dd><strong>";
            // line 13
            echo ($context["USER_INACTIVE_REASON"] ?? null);
            echo "</strong></dd>
</dl>
";
        }
        // line 16
        echo "<dl>
\t<dt><label>";
        // line 17
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTERED");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 18
        echo ($context["USER_REGISTERED"] ?? null);
        echo "</strong></dd>
</dl>
";
        // line 20
        if (($context["S_USER_IP"] ?? null)) {
            // line 21
            echo "<dl>
\t<dt><label>";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTERED_IP");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t<dd><a href=\"";
            // line 23
            echo ($context["U_SHOW_IP"] ?? null);
            echo "\">";
            echo ($context["REGISTERED_IP"] ?? null);
            echo "</a></dd>
\t<dd>[ <a href=\"";
            // line 24
            echo ($context["U_WHOIS"] ?? null);
            echo "\" onclick=\"popup(this.href, 700, 500, '_whois'); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHOIS");
            echo "</a> ]</dd>
</dl>
";
        }
        // line 27
        echo "<dl>
\t<dt><label>";
        // line 28
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 29
        echo ($context["USER_LASTACTIVE"] ?? null);
        echo "</strong></dd>
</dl>
<dl>
\t<dt><label>";
        // line 32
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t<dd>
\t\t<strong>
\t\t\t";
        // line 35
        if ((($context["USER_HAS_POSTS"] ?? null) && ($context["U_SEARCH_USER"] ?? null))) {
            // line 36
            echo "\t\t\t\t<a href=\"";
            echo ($context["U_SEARCH_USER"] ?? null);
            echo "\">";
            echo ($context["USER_POSTS"] ?? null);
            echo "</a>
\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t";
            echo ($context["USER_POSTS"] ?? null);
            echo "
\t\t\t";
        }
        // line 40
        echo "\t\t</strong>
\t\t";
        // line 41
        if ((($context["POSTS_IN_QUEUE"] ?? null) && ($context["U_MCP_QUEUE"] ?? null))) {
            // line 42
            echo "\t\t\t(<a href=\"";
            echo ($context["U_MCP_QUEUE"] ?? null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_IN_QUEUE");
            echo "</a>)
\t\t";
        } elseif (        // line 43
($context["POSTS_IN_QUEUE"] ?? null)) {
            // line 44
            echo "\t\t\t(";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_IN_QUEUE");
            echo ")
\t\t";
        }
        // line 46
        echo "\t</dd>
</dl>
<dl>
\t<dt><label>";
        // line 49
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 50
        echo ($context["USER_WARNINGS"] ?? null);
        echo "</strong></dd>
</dl>
<dl>
\t<dt><label for=\"user_founder\">";
        // line 53
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FOUNDER");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FOUNDER_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"user_founder\" value=\"1\"";
        // line 54
        if (($context["S_USER_FOUNDER"] ?? null)) {
            echo " id=\"user_founder\" checked=\"checked\"";
        }
        if ( !($context["S_FOUNDER"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"user_founder\" value=\"0\"";
        // line 55
        if ( !($context["S_USER_FOUNDER"] ?? null)) {
            echo " id=\"user_founder\" checked=\"checked\"";
        }
        if ( !($context["S_FOUNDER"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"user_email\">";
        // line 58
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EMAIL");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t<dd><input class=\"text medium\" type=\"email\" id=\"user_email\" name=\"user_email\" value=\"";
        // line 59
        echo ($context["USER_EMAIL"] ?? null);
        echo "\" autocomplete=\"off\" /></dd>
</dl>
<dl>
\t<dt><label for=\"new_password\">";
        // line 62
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEW_PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"new_password\" name=\"new_password\" value=\"\" autocomplete=\"off\" /></dd>
</dl>
<dl>
\t<dt><label for=\"password_confirm\">";
        // line 66
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"password_confirm\" name=\"password_confirm\" value=\"\" autocomplete=\"off\" /></dd>
</dl>
";
        // line 69
        // line 70
        echo "
<p class=\"quick\">
\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 72
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />
\t<input type=\"hidden\" name=\"action\" value=\"\" />
\t";
        // line 74
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</p>

</fieldset>
</form>

";
        // line 80
        if (( !($context["S_USER_FOUNDER"] ?? null) || ($context["S_FOUNDER"] ?? null))) {
            // line 81
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[

\t\tfunction display_reason(option)
\t\t{
\t\t\tif (option != 'banuser' && option != 'banemail' && option != 'banip')
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('reasons', -1);
\t\t\t\treturn;
\t\t\t}

\t\t\tphpbb.toggleDisplay('reasons', 1);

\t\t\telement = document.getElementById('user_quick_tools').ban_reason;

\t\t\tif (element.value && element.value != '";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_BAN_NAME_REASON"), "js");
            echo "' && element.value != '";
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_BAN_EMAIL_REASON"), "js");
            echo "' && element.value != '";
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_BAN_IP_REASON"), "js");
            echo "')
\t\t\t{
\t\t\t\treturn;
\t\t\t}

\t\t\tif (option == 'banuser')
\t\t\t{
\t\t\t\telement.value = '";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_BAN_NAME_REASON"), "js");
            echo "';
\t\t\t}
\t\t\telse if (option == 'banemail')
\t\t\t{
\t\t\t\telement.value = '";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_BAN_EMAIL_REASON"), "js");
            echo "';
\t\t\t}
\t\t\telse if (option == 'banip')
\t\t\t{
\t\t\t\telement.value = '";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_ADMIN_BAN_IP_REASON"), "js");
            echo "';
\t\t\t}
\t\t}

\t// ]]>
\t</script>

\t<form id=\"user_quick_tools\" method=\"post\" action=\"";
            // line 119
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 122
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_TOOLS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"quicktools\">";
            // line 124
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUICK_TOOLS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"quicktools\" name=\"action\" onchange=\"display_reason(this.options[this.selectedIndex].value);\">";
            // line 125
            echo ($context["S_ACTION_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t<div style=\"display: none;\" id=\"reasons\">
\t\t<dl>
\t\t\t<dt><label for=\"ban_reason\">";
            // line 129
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BAN_REASON");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input name=\"ban_reason\" type=\"text\" class=\"text medium\" maxlength=\"3000\" id=\"ban_reason\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"ban_give_reason\">";
            // line 133
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BAN_GIVE_REASON");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input name=\"ban_give_reason\" type=\"text\" class=\"text medium\" maxlength=\"3000\" id=\"ban_give_reason\" /></dd>
\t\t</dl>
\t</div>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 139
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t";
            // line 140
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</p>

\t</fieldset>

\t</form>

\t";
            // line 147
            if ( !($context["S_OWN_ACCOUNT"] ?? null)) {
                // line 148
                echo "\t\t<form id=\"user_delete\" method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 150
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_USER");
                echo "</legend>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete_type\">";
                // line 152
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_USER");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_USER_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t";
                // line 154
                if (($context["USER_HAS_POSTS"] ?? null)) {
                    // line 155
                    echo "\t\t\t\t\t\t<select id=\"delete_type\" name=\"delete_type\"><option class=\"sep\" value=\"\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SELECT_OPTION");
                    echo "</option><option value=\"retain\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RETAIN_POSTS");
                    echo "</option><option value=\"remove\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POSTS");
                    echo "</option></select>
\t\t\t\t\t";
                } else {
                    // line 157
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USER_NO_POSTS_TO_DELETE");
                    echo "<input type=\"hidden\" id=\"delete_type\" name=\"delete_type\" value=\"retain\" />
\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<p class=\"quick\">
\t\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                // line 162
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"delete\" value=\"1\" />
\t\t\t\t\t";
                // line 164
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</fieldset>
\t\t</form>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "acp_users_overview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 164,  416 => 162,  411 => 159,  405 => 157,  395 => 155,  393 => 154,  385 => 152,  380 => 150,  374 => 148,  372 => 147,  362 => 140,  358 => 139,  348 => 133,  340 => 129,  333 => 125,  328 => 124,  323 => 122,  317 => 119,  307 => 112,  300 => 108,  293 => 104,  279 => 97,  261 => 81,  259 => 80,  250 => 74,  245 => 72,  241 => 70,  240 => 69,  231 => 66,  221 => 62,  215 => 59,  210 => 58,  197 => 55,  186 => 54,  179 => 53,  173 => 50,  168 => 49,  163 => 46,  157 => 44,  155 => 43,  148 => 42,  146 => 41,  143 => 40,  137 => 38,  129 => 36,  127 => 35,  120 => 32,  114 => 29,  109 => 28,  106 => 27,  98 => 24,  92 => 23,  87 => 22,  84 => 21,  82 => 20,  77 => 18,  72 => 17,  69 => 16,  63 => 13,  58 => 12,  55 => 11,  53 => 10,  50 => 9,  42 => 8,  38 => 7,  31 => 6,  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_users_overview.html", "");
    }
}
