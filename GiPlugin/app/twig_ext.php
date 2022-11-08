<?php namespace GiPlugin\Twig_Extension;
class WordpressTemplateExtension extends \Twig_Extension{

    public function getFunctions()
    {
        return array(
            'header' => new \Twig_Function_Method($this, 'header'),
            'footer' => new \Twig_Function_Method($this, 'footer'),
            'sidebar' => new \Twig_Function_Method($this, 'sidebar'),
            'get_site_url' => new \Twig_Function_Method($this, 'get_site_url'),
        );
    }

    public function header($string = null)
    {
        return get_header( $string );

    }

    public function footer($string = null)
    {
        return get_footer( $string );
    }

    public function sidebar($string = null)
    {
        return get_sidebar( $string );
    }

    public function get_site_url($string = null)
    {
        return get_site_url( $string );
    }

    public function getName()
    {
        return 'template';
    }

}