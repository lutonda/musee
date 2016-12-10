<?php

/* :requisitoinscricao:show.html.twig */
class __TwigTemplate_af824b815f5146c2be67677828d8a84df8fa4f1726a29247b8083d0188062d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":requisitoinscricao:show.html.twig", 1);
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
        echo "    <h1>Requisitoinscricao</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idadeinicial</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "idadeinicial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idadefinal</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "idadefinal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Genero</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "genero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nacionalidade</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "nacionalidade", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Grupo</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "grupo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nivelacademico</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "nivelacademico", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechado</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "fechado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("requisitoinscricao_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("requisitoinscricao_edit", array("id" => $this->getAttribute((isset($context["requisitoinscricao"]) ? $context["requisitoinscricao"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":requisitoinscricao:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  110 => 51,  104 => 48,  98 => 45,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":requisitoinscricao:show.html.twig", "/opt/lampp/htdocs/musee/des/app/Resources/views/requisitoinscricao/show.html.twig");
    }
}
