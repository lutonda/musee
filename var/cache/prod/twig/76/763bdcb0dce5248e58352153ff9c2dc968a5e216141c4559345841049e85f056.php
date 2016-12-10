<?php

/* :amostra:show.html.twig */
class __TwigTemplate_2b13346f5c4024b4404b4b6569ca4289412346a9bb1b93c17a15e307a6618ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":amostra:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Amostra</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nome</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "nome", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Risca</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "risca", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Brilho</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "brilho", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dureza</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "dureza", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peso</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "peso", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datacadastro</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "datacadastro", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "datacadastro", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Caraceristica</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "caraceristica", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Aplicacao</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "aplicacao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>";
        // line 46
        if ($this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "data", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "data", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amostra_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("amostra_edit", array("id" => $this->getAttribute((isset($context["amostra"]) ? $context["amostra"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":amostra:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 61,  128 => 59,  122 => 56,  116 => 53,  104 => 46,  97 => 42,  90 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":amostra:show.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/amostra/show.html.twig");
    }
}
