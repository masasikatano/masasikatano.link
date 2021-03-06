<?php

/* @bolt/_base/_panel.twig */
class __TwigTemplate_b871e0066e504440a0cac0c82bbbe52ad7a2f4a3702c65d7e2c672802575029a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default ";
        $this->displayBlock('panel_class', $context, $blocks);
        echo "\">
    <div ";
        // line 10
        $this->displayBlock('panel_alert', $context, $blocks);
        echo ">
        <i class=\"fa fa-fw ";
        // line 11
        $this->displayBlock('panel_icon', $context, $blocks);
        echo "\"></i>
        ";
        // line 12
        $this->displayBlock('panel_head', $context, $blocks);
        // line 13
        echo "    </div>

    <div class=\"panel-body\">
        ";
        // line 16
        $this->displayBlock('panel_body', $context, $blocks);
        // line 17
        echo "    </div>
</div>
";
    }

    // line 9
    public function block_panel_class($context, array $blocks = array())
    {
    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        echo "class=\"panel-heading\"";
    }

    // line 11
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-circle-o";
    }

    // line 12
    public function block_panel_head($context, array $blocks = array())
    {
        echo "[PANEL_HEAD]";
    }

    // line 16
    public function block_panel_body($context, array $blocks = array())
    {
        echo "[PANEL_BODY]";
    }

    public function getTemplateName()
    {
        return "@bolt/_base/_panel.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 12,  63 => 11,  57 => 10,  52 => 9,  46 => 17,  44 => 16,  39 => 13,  37 => 12,  33 => 11,  29 => 10,  24 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_base/_panel.twig", "");
    }
}
