<?php

/* ToDoBundle:Tache:new.html.twig */
class __TwigTemplate_13a52246f4388e40f9b96a95db297c5b6b11fd5bfe82fd14db967d2f8f86da77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"centre\">
       <center><h1>Ajouter une tâche</h1></center>
 <div id=\"notreformulaire\">
      ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "</div>

       <br><br>
   
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("tache");
        echo "\">
             <img src=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/main/img/back.png"), "html", null, true);
        echo ">
     </a>
    
   
        </ul></div>
";
    }

    public function getTemplateName()
    {
        return "ToDoBundle:Tache:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  51 => 11,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
