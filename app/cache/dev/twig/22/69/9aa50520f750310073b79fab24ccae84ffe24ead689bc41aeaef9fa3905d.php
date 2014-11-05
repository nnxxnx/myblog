<?php

/* NXProjectBlogBundle:Background:add.html.twig */
class __TwigTemplate_22699aa50520f750310073b79fab24ccae84ffe24ead689bc41aeaef9fa3905d extends Twig_Template
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
        echo "<html>
<head>
\t<title>博客后台</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t<script src=\"http://libs.baidu.com/jquery/1.9.0/jquery.js\"></script>
\t<script>
/*\t\t\$(document).ready(function() {
\t\t\tvar categoryId = \$(\"#form_category\").val();
\t\t\tif(categoryId != 0) {
\t\t\t\tinitTags(categoryId);\t
\t\t\t}

\t\t\t\$(\"#form_category\").change(function() {
\t\t\t\tvar categoryId = \$(\"#form_category\").val();
\t\t\t\tif(categoryId != 0) {
\t\t\t\t\tinitTags(categoryId);\t
\t\t\t\t}
\t\t\t});
\t\t});

\t\tfunction initTags(categoryId) {
\t\t\t\$.ajax({
\t\t\t\ttype: \"post\",
\t\t\t\turl: \"http://symfony2.dev/api/getTags\",
\t\t\t\tdata: {\"categoryId\": categoryId},
\t\t\t\tsuccess: function(result) {
\t\t\t\t\tif(result.status == 1) {
\t\t\t\t\t\t\$(\"#form_tags\").empty();
\t\t\t\t\t\t\$(\"#form_tags\").append('<option value=\"0\">请选择</option>');
\t\t\t\t\t\tfor(var tag in result.data) {
\t\t\t\t\t\t\t\$(\"#form_tags\").append('<option value=\"' + tag + '\">' + result.data[tag] + '</option>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tdataType: \"json\",
\t\t\t});
\t\t}  */
\t</script>
</head>
<body>
<form action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("_background_add");
        echo "\" method =\"post\">

\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

\t<input type=\"submit\" value=\"添加\"/>
</form>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "NXProjectBlogBundle:Background:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 43,  61 => 41,  19 => 1,);
    }
}
