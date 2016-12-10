<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // app_ajuda_index
        if ($pathinfo === '/ajuda') {
            return array (  '_controller' => 'AppBundle\\Controller\\AjudaController::indexAction',  '_route' => 'app_ajuda_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // acervos
        if ($pathinfo === '/acervos') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::acervosAction',  '_route' => 'acervos',);
        }

        // visitas
        if ($pathinfo === '/visitas') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::visitasAction',  '_route' => 'visitas',);
        }

        // eventos
        if ($pathinfo === '/eventos') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eventosAction',  '_route' => 'eventos',);
        }

        // utilizadores
        if ($pathinfo === '/utilizadoresx') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::utilizadoresAction',  '_route' => 'utilizadores',);
        }

        if (0 === strpos($pathinfo, '/amostra')) {
            // amostra_index
            if (rtrim($pathinfo, '/') === '/amostra') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_amostra_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'amostra_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\AmostraController::indexAction',  '_route' => 'amostra_index',);
            }
            not_amostra_index:

            // amostra_new
            if ($pathinfo === '/amostra/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_amostra_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\AmostraController::newAction',  '_route' => 'amostra_new',);
            }
            not_amostra_new:

            // amostra_show
            if (preg_match('#^/amostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_amostra_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'amostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\AmostraController::showAction',));
            }
            not_amostra_show:

            // amostra_edit
            if (preg_match('#^/amostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_amostra_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'amostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\AmostraController::editAction',));
            }
            not_amostra_edit:

            // amostra_delete
            if (preg_match('#^/amostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_amostra_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'amostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\AmostraController::deleteAction',));
            }
            not_amostra_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/categoria')) {
                // categoria_index
                if (rtrim($pathinfo, '/') === '/categoria') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categoria_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categoria_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\CategoriaController::indexAction',  '_route' => 'categoria_index',);
                }
                not_categoria_index:

                // categoria_new
                if ($pathinfo === '/categoria/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categoria_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\CategoriaController::newAction',  '_route' => 'categoria_new',);
                }
                not_categoria_new:

                // categoria_show
                if (preg_match('#^/categoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categoria_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\CategoriaController::showAction',));
                }
                not_categoria_show:

                // categoria_edit
                if (preg_match('#^/categoria/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categoria_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\CategoriaController::editAction',));
                }
                not_categoria_edit:

                // categoria_delete
                if (preg_match('#^/categoria/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_categoria_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\CategoriaController::deleteAction',));
                }
                not_categoria_delete:

            }

            if (0 === strpos($pathinfo, '/clivagem')) {
                // clivagem_index
                if (rtrim($pathinfo, '/') === '/clivagem') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_clivagem_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'clivagem_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ClivagemController::indexAction',  '_route' => 'clivagem_index',);
                }
                not_clivagem_index:

                // clivagem_new
                if ($pathinfo === '/clivagem/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_clivagem_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ClivagemController::newAction',  '_route' => 'clivagem_new',);
                }
                not_clivagem_new:

                // clivagem_show
                if (preg_match('#^/clivagem/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_clivagem_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clivagem_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ClivagemController::showAction',));
                }
                not_clivagem_show:

                // clivagem_edit
                if (preg_match('#^/clivagem/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_clivagem_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clivagem_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ClivagemController::editAction',));
                }
                not_clivagem_edit:

                // clivagem_delete
                if (preg_match('#^/clivagem/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_clivagem_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'clivagem_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ClivagemController::deleteAction',));
                }
                not_clivagem_delete:

            }

            if (0 === strpos($pathinfo, '/co')) {
                if (0 === strpos($pathinfo, '/colaborador')) {
                    // colaborador_index
                    if (rtrim($pathinfo, '/') === '/colaborador') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_colaborador_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'colaborador_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ColaboradorController::indexAction',  '_route' => 'colaborador_index',);
                    }
                    not_colaborador_index:

                    // colaborador_new
                    if ($pathinfo === '/colaborador/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_colaborador_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ColaboradorController::newAction',  '_route' => 'colaborador_new',);
                    }
                    not_colaborador_new:

                    // colaborador_show
                    if (preg_match('#^/colaborador/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_colaborador_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'colaborador_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ColaboradorController::showAction',));
                    }
                    not_colaborador_show:

                    // colaborador_edit
                    if (preg_match('#^/colaborador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_colaborador_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'colaborador_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ColaboradorController::editAction',));
                    }
                    not_colaborador_edit:

                    // colaborador_delete
                    if (preg_match('#^/colaborador/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_colaborador_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'colaborador_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ColaboradorController::deleteAction',));
                    }
                    not_colaborador_delete:

                }

                if (0 === strpos($pathinfo, '/composicao')) {
                    if (0 === strpos($pathinfo, '/composicaoamostra')) {
                        // composicaoamostra_index
                        if (rtrim($pathinfo, '/') === '/composicaoamostra') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_composicaoamostra_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'composicaoamostra_index');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoamostraController::indexAction',  '_route' => 'composicaoamostra_index',);
                        }
                        not_composicaoamostra_index:

                        // composicaoamostra_new
                        if ($pathinfo === '/composicaoamostra/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_composicaoamostra_new;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoamostraController::newAction',  '_route' => 'composicaoamostra_new',);
                        }
                        not_composicaoamostra_new:

                        // composicaoamostra_show
                        if (preg_match('#^/composicaoamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_composicaoamostra_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'composicaoamostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoamostraController::showAction',));
                        }
                        not_composicaoamostra_show:

                        // composicaoamostra_edit
                        if (preg_match('#^/composicaoamostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_composicaoamostra_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'composicaoamostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoamostraController::editAction',));
                        }
                        not_composicaoamostra_edit:

                        // composicaoamostra_delete
                        if (preg_match('#^/composicaoamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_composicaoamostra_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'composicaoamostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoamostraController::deleteAction',));
                        }
                        not_composicaoamostra_delete:

                    }

                    if (0 === strpos($pathinfo, '/composicaoquimico')) {
                        // composicaoquimico_index
                        if (rtrim($pathinfo, '/') === '/composicaoquimico') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_composicaoquimico_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'composicaoquimico_index');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoquimicoController::indexAction',  '_route' => 'composicaoquimico_index',);
                        }
                        not_composicaoquimico_index:

                        // composicaoquimico_new
                        if ($pathinfo === '/composicaoquimico/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_composicaoquimico_new;
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoquimicoController::newAction',  '_route' => 'composicaoquimico_new',);
                        }
                        not_composicaoquimico_new:

                        // composicaoquimico_show
                        if (preg_match('#^/composicaoquimico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_composicaoquimico_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'composicaoquimico_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoquimicoController::showAction',));
                        }
                        not_composicaoquimico_show:

                        // composicaoquimico_edit
                        if (preg_match('#^/composicaoquimico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                                goto not_composicaoquimico_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'composicaoquimico_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoquimicoController::editAction',));
                        }
                        not_composicaoquimico_edit:

                        // composicaoquimico_delete
                        if (preg_match('#^/composicaoquimico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_composicaoquimico_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'composicaoquimico_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ComposicaoquimicoController::deleteAction',));
                        }
                        not_composicaoquimico_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/conservavao')) {
                    // conservavao_index
                    if (rtrim($pathinfo, '/') === '/conservavao') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_conservavao_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'conservavao_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ConservavaoController::indexAction',  '_route' => 'conservavao_index',);
                    }
                    not_conservavao_index:

                    // conservavao_new
                    if ($pathinfo === '/conservavao/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_conservavao_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ConservavaoController::newAction',  '_route' => 'conservavao_new',);
                    }
                    not_conservavao_new:

                    // conservavao_show
                    if (preg_match('#^/conservavao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_conservavao_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conservavao_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ConservavaoController::showAction',));
                    }
                    not_conservavao_show:

                    // conservavao_edit
                    if (preg_match('#^/conservavao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_conservavao_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conservavao_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ConservavaoController::editAction',));
                    }
                    not_conservavao_edit:

                    // conservavao_delete
                    if (preg_match('#^/conservavao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_conservavao_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'conservavao_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ConservavaoController::deleteAction',));
                    }
                    not_conservavao_delete:

                }

                if (0 === strpos($pathinfo, '/cor')) {
                    // cor_index
                    if (rtrim($pathinfo, '/') === '/cor') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_cor_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'cor_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\CorController::indexAction',  '_route' => 'cor_index',);
                    }
                    not_cor_index:

                    // cor_new
                    if ($pathinfo === '/cor/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_cor_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\CorController::newAction',  '_route' => 'cor_new',);
                    }
                    not_cor_new:

                    // cor_show
                    if (preg_match('#^/cor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_cor_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cor_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\CorController::showAction',));
                    }
                    not_cor_show:

                    // cor_edit
                    if (preg_match('#^/cor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_cor_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cor_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\CorController::editAction',));
                    }
                    not_cor_edit:

                    // cor_delete
                    if (preg_match('#^/cor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_cor_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'cor_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\CorController::deleteAction',));
                    }
                    not_cor_delete:

                    if (0 === strpos($pathinfo, '/coramostra')) {
                        // coramostra_index
                        if (rtrim($pathinfo, '/') === '/coramostra') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coramostra_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'coramostra_index');
                            }

                            return array (  '_controller' => 'AppBundle\\Controller\\MAC\\CoramostraController::indexAction',  '_route' => 'coramostra_index',);
                        }
                        not_coramostra_index:

                        // coramostra_show
                        if (preg_match('#^/coramostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_coramostra_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coramostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\CoramostraController::showAction',));
                        }
                        not_coramostra_show:

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/d')) {
            if (0 === strpos($pathinfo, '/densidade')) {
                // densidade_index
                if (rtrim($pathinfo, '/') === '/densidade') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_densidade_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'densidade_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\DensidadeController::indexAction',  '_route' => 'densidade_index',);
                }
                not_densidade_index:

                // densidade_new
                if ($pathinfo === '/densidade/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_densidade_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\DensidadeController::newAction',  '_route' => 'densidade_new',);
                }
                not_densidade_new:

                // densidade_show
                if (preg_match('#^/densidade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_densidade_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'densidade_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DensidadeController::showAction',));
                }
                not_densidade_show:

                // densidade_edit
                if (preg_match('#^/densidade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_densidade_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'densidade_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DensidadeController::editAction',));
                }
                not_densidade_edit:

                // densidade_delete
                if (preg_match('#^/densidade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_densidade_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'densidade_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DensidadeController::deleteAction',));
                }
                not_densidade_delete:

            }

            if (0 === strpos($pathinfo, '/doacao')) {
                // doacao_index
                if (rtrim($pathinfo, '/') === '/doacao') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_doacao_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'doacao_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\DoacaoController::indexAction',  '_route' => 'doacao_index',);
                }
                not_doacao_index:

                // doacao_new
                if ($pathinfo === '/doacao/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_doacao_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\DoacaoController::newAction',  '_route' => 'doacao_new',);
                }
                not_doacao_new:

                // doacao_show
                if (preg_match('#^/doacao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_doacao_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doacao_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DoacaoController::showAction',));
                }
                not_doacao_show:

                // doacao_edit
                if (preg_match('#^/doacao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_doacao_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doacao_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DoacaoController::editAction',));
                }
                not_doacao_edit:

                // doacao_delete
                if (preg_match('#^/doacao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_doacao_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doacao_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DoacaoController::deleteAction',));
                }
                not_doacao_delete:

            }

            if (0 === strpos($pathinfo, '/dureza')) {
                // dureza_index
                if (rtrim($pathinfo, '/') === '/dureza') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dureza_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'dureza_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\DurezaController::indexAction',  '_route' => 'dureza_index',);
                }
                not_dureza_index:

                // dureza_new
                if ($pathinfo === '/dureza/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dureza_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\DurezaController::newAction',  '_route' => 'dureza_new',);
                }
                not_dureza_new:

                // dureza_show
                if (preg_match('#^/dureza/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dureza_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dureza_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DurezaController::showAction',));
                }
                not_dureza_show:

                // dureza_edit
                if (preg_match('#^/dureza/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_dureza_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dureza_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DurezaController::editAction',));
                }
                not_dureza_edit:

                // dureza_delete
                if (preg_match('#^/dureza/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_dureza_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dureza_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\DurezaController::deleteAction',));
                }
                not_dureza_delete:

            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/elementoquimico')) {
                // elementoquimico_index
                if (rtrim($pathinfo, '/') === '/elementoquimico') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_elementoquimico_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'elementoquimico_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ElementoquimicoController::indexAction',  '_route' => 'elementoquimico_index',);
                }
                not_elementoquimico_index:

                // elementoquimico_new
                if ($pathinfo === '/elementoquimico/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_elementoquimico_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ElementoquimicoController::newAction',  '_route' => 'elementoquimico_new',);
                }
                not_elementoquimico_new:

                // elementoquimico_show
                if (preg_match('#^/elementoquimico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_elementoquimico_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'elementoquimico_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ElementoquimicoController::showAction',));
                }
                not_elementoquimico_show:

                // elementoquimico_edit
                if (preg_match('#^/elementoquimico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_elementoquimico_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'elementoquimico_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ElementoquimicoController::editAction',));
                }
                not_elementoquimico_edit:

                // elementoquimico_delete
                if (preg_match('#^/elementoquimico/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_elementoquimico_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'elementoquimico_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ElementoquimicoController::deleteAction',));
                }
                not_elementoquimico_delete:

            }

            if (0 === strpos($pathinfo, '/emprestimo')) {
                // emprestimo_index
                if (rtrim($pathinfo, '/') === '/emprestimo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_emprestimo_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'emprestimo_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoController::indexAction',  '_route' => 'emprestimo_index',);
                }
                not_emprestimo_index:

                // emprestimo_new
                if ($pathinfo === '/emprestimo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_emprestimo_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoController::newAction',  '_route' => 'emprestimo_new',);
                }
                not_emprestimo_new:

                // emprestimo_show
                if (preg_match('#^/emprestimo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_emprestimo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emprestimo_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoController::showAction',));
                }
                not_emprestimo_show:

                // emprestimo_edit
                if (preg_match('#^/emprestimo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_emprestimo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emprestimo_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoController::editAction',));
                }
                not_emprestimo_edit:

                // emprestimo_delete
                if (preg_match('#^/emprestimo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_emprestimo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emprestimo_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoController::deleteAction',));
                }
                not_emprestimo_delete:

                if (0 === strpos($pathinfo, '/emprestimoamostra')) {
                    // emprestimoamostra_index
                    if (rtrim($pathinfo, '/') === '/emprestimoamostra') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_emprestimoamostra_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'emprestimoamostra_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoamostraController::indexAction',  '_route' => 'emprestimoamostra_index',);
                    }
                    not_emprestimoamostra_index:

                    // emprestimoamostra_new
                    if ($pathinfo === '/emprestimoamostra/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_emprestimoamostra_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoamostraController::newAction',  '_route' => 'emprestimoamostra_new',);
                    }
                    not_emprestimoamostra_new:

                    // emprestimoamostra_show
                    if (preg_match('#^/emprestimoamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_emprestimoamostra_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'emprestimoamostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoamostraController::showAction',));
                    }
                    not_emprestimoamostra_show:

                    // emprestimoamostra_edit
                    if (preg_match('#^/emprestimoamostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_emprestimoamostra_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'emprestimoamostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoamostraController::editAction',));
                    }
                    not_emprestimoamostra_edit:

                    // emprestimoamostra_delete
                    if (preg_match('#^/emprestimoamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_emprestimoamostra_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'emprestimoamostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\EmprestimoamostraController::deleteAction',));
                    }
                    not_emprestimoamostra_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/f')) {
            if (0 === strpos($pathinfo, '/forma')) {
                if (0 === strpos($pathinfo, '/formadoscristaisamostra')) {
                    // formadoscristaisamostra_index
                    if (rtrim($pathinfo, '/') === '/formadoscristaisamostra') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_formadoscristaisamostra_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'formadoscristaisamostra_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\FormadoscristaisamostraController::indexAction',  '_route' => 'formadoscristaisamostra_index',);
                    }
                    not_formadoscristaisamostra_index:

                    // formadoscristaisamostra_new
                    if ($pathinfo === '/formadoscristaisamostra/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_formadoscristaisamostra_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\FormadoscristaisamostraController::newAction',  '_route' => 'formadoscristaisamostra_new',);
                    }
                    not_formadoscristaisamostra_new:

                    // formadoscristaisamostra_show
                    if (preg_match('#^/formadoscristaisamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_formadoscristaisamostra_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'formadoscristaisamostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FormadoscristaisamostraController::showAction',));
                    }
                    not_formadoscristaisamostra_show:

                    // formadoscristaisamostra_edit
                    if (preg_match('#^/formadoscristaisamostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_formadoscristaisamostra_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'formadoscristaisamostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FormadoscristaisamostraController::editAction',));
                    }
                    not_formadoscristaisamostra_edit:

                    // formadoscristaisamostra_delete
                    if (preg_match('#^/formadoscristaisamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_formadoscristaisamostra_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'formadoscristaisamostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FormadoscristaisamostraController::deleteAction',));
                    }
                    not_formadoscristaisamostra_delete:

                }

                if (0 === strpos($pathinfo, '/formasdoscristais')) {
                    // formasdoscristais_index
                    if (rtrim($pathinfo, '/') === '/formasdoscristais') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_formasdoscristais_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'formasdoscristais_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\FormasdoscristaisController::indexAction',  '_route' => 'formasdoscristais_index',);
                    }
                    not_formasdoscristais_index:

                    // formasdoscristais_show
                    if (preg_match('#^/formasdoscristais/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_formasdoscristais_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'formasdoscristais_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FormasdoscristaisController::showAction',));
                    }
                    not_formasdoscristais_show:

                }

            }

            if (0 === strpos($pathinfo, '/fratura')) {
                // fratura_index
                if (rtrim($pathinfo, '/') === '/fratura') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fratura_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fratura_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaController::indexAction',  '_route' => 'fratura_index',);
                }
                not_fratura_index:

                // fratura_new
                if ($pathinfo === '/fratura/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fratura_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaController::newAction',  '_route' => 'fratura_new',);
                }
                not_fratura_new:

                // fratura_show
                if (preg_match('#^/fratura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fratura_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fratura_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaController::showAction',));
                }
                not_fratura_show:

                // fratura_edit
                if (preg_match('#^/fratura/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fratura_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fratura_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaController::editAction',));
                }
                not_fratura_edit:

                // fratura_delete
                if (preg_match('#^/fratura/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_fratura_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fratura_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaController::deleteAction',));
                }
                not_fratura_delete:

                if (0 === strpos($pathinfo, '/fraturaamostra')) {
                    // fraturaamostra_index
                    if (rtrim($pathinfo, '/') === '/fraturaamostra') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fraturaamostra_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fraturaamostra_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaamostraController::indexAction',  '_route' => 'fraturaamostra_index',);
                    }
                    not_fraturaamostra_index:

                    // fraturaamostra_new
                    if ($pathinfo === '/fraturaamostra/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fraturaamostra_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaamostraController::newAction',  '_route' => 'fraturaamostra_new',);
                    }
                    not_fraturaamostra_new:

                    // fraturaamostra_show
                    if (preg_match('#^/fraturaamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fraturaamostra_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fraturaamostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaamostraController::showAction',));
                    }
                    not_fraturaamostra_show:

                    // fraturaamostra_edit
                    if (preg_match('#^/fraturaamostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_fraturaamostra_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fraturaamostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaamostraController::editAction',));
                    }
                    not_fraturaamostra_edit:

                    // fraturaamostra_delete
                    if (preg_match('#^/fraturaamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_fraturaamostra_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fraturaamostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\FraturaamostraController::deleteAction',));
                    }
                    not_fraturaamostra_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/genese')) {
            // genese_index
            if (rtrim($pathinfo, '/') === '/genese') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_genese_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'genese_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseController::indexAction',  '_route' => 'genese_index',);
            }
            not_genese_index:

            // genese_new
            if ($pathinfo === '/genese/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_genese_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseController::newAction',  '_route' => 'genese_new',);
            }
            not_genese_new:

            // genese_show
            if (preg_match('#^/genese/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_genese_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genese_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseController::showAction',));
            }
            not_genese_show:

            // genese_edit
            if (preg_match('#^/genese/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_genese_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genese_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseController::editAction',));
            }
            not_genese_edit:

            // genese_delete
            if (preg_match('#^/genese/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_genese_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genese_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseController::deleteAction',));
            }
            not_genese_delete:

            if (0 === strpos($pathinfo, '/geneseamostra')) {
                // geneseamostra_index
                if (rtrim($pathinfo, '/') === '/geneseamostra') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_geneseamostra_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'geneseamostra_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseamostraController::indexAction',  '_route' => 'geneseamostra_index',);
                }
                not_geneseamostra_index:

                // geneseamostra_new
                if ($pathinfo === '/geneseamostra/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_geneseamostra_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseamostraController::newAction',  '_route' => 'geneseamostra_new',);
                }
                not_geneseamostra_new:

                // geneseamostra_show
                if (preg_match('#^/geneseamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_geneseamostra_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'geneseamostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseamostraController::showAction',));
                }
                not_geneseamostra_show:

                // geneseamostra_edit
                if (preg_match('#^/geneseamostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_geneseamostra_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'geneseamostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseamostraController::editAction',));
                }
                not_geneseamostra_edit:

                // geneseamostra_delete
                if (preg_match('#^/geneseamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_geneseamostra_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'geneseamostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\GeneseamostraController::deleteAction',));
                }
                not_geneseamostra_delete:

            }

        }

        if (0 === strpos($pathinfo, '/habito')) {
            // habito_index
            if (rtrim($pathinfo, '/') === '/habito') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habito_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'habito_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoController::indexAction',  '_route' => 'habito_index',);
            }
            not_habito_index:

            // habito_new
            if ($pathinfo === '/habito/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_habito_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoController::newAction',  '_route' => 'habito_new',);
            }
            not_habito_new:

            // habito_show
            if (preg_match('#^/habito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_habito_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habito_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoController::showAction',));
            }
            not_habito_show:

            // habito_edit
            if (preg_match('#^/habito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_habito_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habito_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoController::editAction',));
            }
            not_habito_edit:

            // habito_delete
            if (preg_match('#^/habito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_habito_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'habito_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoController::deleteAction',));
            }
            not_habito_delete:

            if (0 === strpos($pathinfo, '/habitoamostra')) {
                // habitoamostra_index
                if (rtrim($pathinfo, '/') === '/habitoamostra') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_habitoamostra_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'habitoamostra_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoamostraController::indexAction',  '_route' => 'habitoamostra_index',);
                }
                not_habitoamostra_index:

                // habitoamostra_new
                if ($pathinfo === '/habitoamostra/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_habitoamostra_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoamostraController::newAction',  '_route' => 'habitoamostra_new',);
                }
                not_habitoamostra_new:

                // habitoamostra_show
                if (preg_match('#^/habitoamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_habitoamostra_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitoamostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoamostraController::showAction',));
                }
                not_habitoamostra_show:

                // habitoamostra_edit
                if (preg_match('#^/habitoamostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_habitoamostra_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitoamostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoamostraController::editAction',));
                }
                not_habitoamostra_edit:

                // habitoamostra_delete
                if (preg_match('#^/habitoamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_habitoamostra_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'habitoamostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\HabitoamostraController::deleteAction',));
                }
                not_habitoamostra_delete:

            }

        }

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/localizacaoamostra')) {
                // localizacaoamostra_index
                if (rtrim($pathinfo, '/') === '/localizacaoamostra') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_localizacaoamostra_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'localizacaoamostra_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\LocalizacaoamostraController::indexAction',  '_route' => 'localizacaoamostra_index',);
                }
                not_localizacaoamostra_index:

                // localizacaoamostra_new
                if ($pathinfo === '/localizacaoamostra/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_localizacaoamostra_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\LocalizacaoamostraController::newAction',  '_route' => 'localizacaoamostra_new',);
                }
                not_localizacaoamostra_new:

                // localizacaoamostra_show
                if (preg_match('#^/localizacaoamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_localizacaoamostra_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'localizacaoamostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\LocalizacaoamostraController::showAction',));
                }
                not_localizacaoamostra_show:

                // localizacaoamostra_edit
                if (preg_match('#^/localizacaoamostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_localizacaoamostra_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'localizacaoamostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\LocalizacaoamostraController::editAction',));
                }
                not_localizacaoamostra_edit:

                // localizacaoamostra_delete
                if (preg_match('#^/localizacaoamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_localizacaoamostra_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'localizacaoamostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\LocalizacaoamostraController::deleteAction',));
                }
                not_localizacaoamostra_delete:

            }

            if (0 === strpos($pathinfo, '/lugar')) {
                // lugar_index
                if (rtrim($pathinfo, '/') === '/lugar') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_lugar_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'lugar_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\LugarController::indexAction',  '_route' => 'lugar_index',);
                }
                not_lugar_index:

                // lugar_new
                if ($pathinfo === '/lugar/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_lugar_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\LugarController::newAction',  '_route' => 'lugar_new',);
                }
                not_lugar_new:

                // lugar_show
                if (preg_match('#^/lugar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_lugar_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lugar_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\LugarController::showAction',));
                }
                not_lugar_show:

                // lugar_edit
                if (preg_match('#^/lugar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_lugar_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lugar_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\LugarController::editAction',));
                }
                not_lugar_edit:

                // lugar_delete
                if (preg_match('#^/lugar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_lugar_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lugar_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\LugarController::deleteAction',));
                }
                not_lugar_delete:

            }

        }

        if (0 === strpos($pathinfo, '/medida')) {
            // medida_index
            if (rtrim($pathinfo, '/') === '/medida') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_medida_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'medida_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\MedidaController::indexAction',  '_route' => 'medida_index',);
            }
            not_medida_index:

            // medida_new
            if ($pathinfo === '/medida/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_medida_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\MedidaController::newAction',  '_route' => 'medida_new',);
            }
            not_medida_new:

            // medida_show
            if (preg_match('#^/medida/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_medida_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medida_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\MedidaController::showAction',));
            }
            not_medida_show:

            // medida_edit
            if (preg_match('#^/medida/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_medida_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medida_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\MedidaController::editAction',));
            }
            not_medida_edit:

            // medida_delete
            if (preg_match('#^/medida/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_medida_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'medida_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\MedidaController::deleteAction',));
            }
            not_medida_delete:

        }

        if (0 === strpos($pathinfo, '/ocorencia')) {
            // ocorencia_index
            if (rtrim($pathinfo, '/') === '/ocorencia') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ocorencia_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocorencia_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\OcorenciaController::indexAction',  '_route' => 'ocorencia_index',);
            }
            not_ocorencia_index:

            // ocorencia_new
            if ($pathinfo === '/ocorencia/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ocorencia_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\OcorenciaController::newAction',  '_route' => 'ocorencia_new',);
            }
            not_ocorencia_new:

            // ocorencia_show
            if (preg_match('#^/ocorencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ocorencia_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocorencia_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\OcorenciaController::showAction',));
            }
            not_ocorencia_show:

            // ocorencia_edit
            if (preg_match('#^/ocorencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_ocorencia_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocorencia_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\OcorenciaController::editAction',));
            }
            not_ocorencia_edit:

            // ocorencia_delete
            if (preg_match('#^/ocorencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ocorencia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ocorencia_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\OcorenciaController::deleteAction',));
            }
            not_ocorencia_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/paragenese')) {
                // paragenese_index
                if (rtrim($pathinfo, '/') === '/paragenese') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paragenese_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'paragenese_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseController::indexAction',  '_route' => 'paragenese_index',);
                }
                not_paragenese_index:

                // paragenese_new
                if ($pathinfo === '/paragenese/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_paragenese_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseController::newAction',  '_route' => 'paragenese_new',);
                }
                not_paragenese_new:

                // paragenese_show
                if (preg_match('#^/paragenese/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_paragenese_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paragenese_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseController::showAction',));
                }
                not_paragenese_show:

                // paragenese_edit
                if (preg_match('#^/paragenese/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_paragenese_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paragenese_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseController::editAction',));
                }
                not_paragenese_edit:

                // paragenese_delete
                if (preg_match('#^/paragenese/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_paragenese_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paragenese_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseController::deleteAction',));
                }
                not_paragenese_delete:

                if (0 === strpos($pathinfo, '/parageneseamostra')) {
                    // parageneseamostra_index
                    if (rtrim($pathinfo, '/') === '/parageneseamostra') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_parageneseamostra_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'parageneseamostra_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseamostraController::indexAction',  '_route' => 'parageneseamostra_index',);
                    }
                    not_parageneseamostra_index:

                    // parageneseamostra_new
                    if ($pathinfo === '/parageneseamostra/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_parageneseamostra_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseamostraController::newAction',  '_route' => 'parageneseamostra_new',);
                    }
                    not_parageneseamostra_new:

                    // parageneseamostra_show
                    if (preg_match('#^/parageneseamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_parageneseamostra_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parageneseamostra_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseamostraController::showAction',));
                    }
                    not_parageneseamostra_show:

                    // parageneseamostra_edit
                    if (preg_match('#^/parageneseamostra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_parageneseamostra_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parageneseamostra_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseamostraController::editAction',));
                    }
                    not_parageneseamostra_edit:

                    // parageneseamostra_delete
                    if (preg_match('#^/parageneseamostra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_parageneseamostra_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'parageneseamostra_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ParageneseamostraController::deleteAction',));
                    }
                    not_parageneseamostra_delete:

                }

            }

            if (0 === strpos($pathinfo, '/prateleira')) {
                // prateleira_index
                if (rtrim($pathinfo, '/') === '/prateleira') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_prateleira_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'prateleira_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\PrateleiraController::indexAction',  '_route' => 'prateleira_index',);
                }
                not_prateleira_index:

                // prateleira_new
                if ($pathinfo === '/prateleira/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_prateleira_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\PrateleiraController::newAction',  '_route' => 'prateleira_new',);
                }
                not_prateleira_new:

                // prateleira_show
                if (preg_match('#^/prateleira/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_prateleira_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prateleira_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\PrateleiraController::showAction',));
                }
                not_prateleira_show:

                // prateleira_edit
                if (preg_match('#^/prateleira/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_prateleira_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prateleira_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\PrateleiraController::editAction',));
                }
                not_prateleira_edit:

                // prateleira_delete
                if (preg_match('#^/prateleira/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_prateleira_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prateleira_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\PrateleiraController::deleteAction',));
                }
                not_prateleira_delete:

            }

        }

        if (0 === strpos($pathinfo, '/reserva')) {
            // reserva_index
            if (rtrim($pathinfo, '/') === '/reserva') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reserva_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reserva_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\ReservaController::indexAction',  '_route' => 'reserva_index',);
            }
            not_reserva_index:

            // reserva_show
            if (preg_match('#^/reserva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reserva_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserva_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\ReservaController::showAction',));
            }
            not_reserva_show:

        }

        if (0 === strpos($pathinfo, '/sistemacristalino')) {
            // sistemacristalino_index
            if (rtrim($pathinfo, '/') === '/sistemacristalino') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sistemacristalino_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sistemacristalino_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\SistemacristalinoController::indexAction',  '_route' => 'sistemacristalino_index',);
            }
            not_sistemacristalino_index:

            // sistemacristalino_new
            if ($pathinfo === '/sistemacristalino/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sistemacristalino_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MAC\\SistemacristalinoController::newAction',  '_route' => 'sistemacristalino_new',);
            }
            not_sistemacristalino_new:

            // sistemacristalino_show
            if (preg_match('#^/sistemacristalino/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sistemacristalino_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemacristalino_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\SistemacristalinoController::showAction',));
            }
            not_sistemacristalino_show:

            // sistemacristalino_edit
            if (preg_match('#^/sistemacristalino/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sistemacristalino_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemacristalino_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\SistemacristalinoController::editAction',));
            }
            not_sistemacristalino_edit:

            // sistemacristalino_delete
            if (preg_match('#^/sistemacristalino/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_sistemacristalino_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemacristalino_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\SistemacristalinoController::deleteAction',));
            }
            not_sistemacristalino_delete:

        }

        if (0 === strpos($pathinfo, '/tr')) {
            if (0 === strpos($pathinfo, '/transparencia')) {
                // transparencia_index
                if (rtrim($pathinfo, '/') === '/transparencia') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_transparencia_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'transparencia_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\TransparenciaController::indexAction',  '_route' => 'transparencia_index',);
                }
                not_transparencia_index:

                // transparencia_new
                if ($pathinfo === '/transparencia/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_transparencia_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\TransparenciaController::newAction',  '_route' => 'transparencia_new',);
                }
                not_transparencia_new:

                // transparencia_show
                if (preg_match('#^/transparencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_transparencia_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transparencia_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\TransparenciaController::showAction',));
                }
                not_transparencia_show:

                // transparencia_edit
                if (preg_match('#^/transparencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_transparencia_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transparencia_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\TransparenciaController::editAction',));
                }
                not_transparencia_edit:

                // transparencia_delete
                if (preg_match('#^/transparencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_transparencia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transparencia_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\TransparenciaController::deleteAction',));
                }
                not_transparencia_delete:

            }

            if (0 === strpos($pathinfo, '/troca')) {
                // troca_index
                if (rtrim($pathinfo, '/') === '/troca') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_troca_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'troca_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\TrocaController::indexAction',  '_route' => 'troca_index',);
                }
                not_troca_index:

                // troca_new
                if ($pathinfo === '/troca/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_troca_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MAC\\TrocaController::newAction',  '_route' => 'troca_new',);
                }
                not_troca_new:

                // troca_show
                if (preg_match('#^/troca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_troca_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'troca_show')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\TrocaController::showAction',));
                }
                not_troca_show:

                // troca_edit
                if (preg_match('#^/troca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_troca_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'troca_edit')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\TrocaController::editAction',));
                }
                not_troca_edit:

                // troca_delete
                if (preg_match('#^/troca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_troca_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'troca_delete')), array (  '_controller' => 'AppBundle\\Controller\\MAC\\TrocaController::deleteAction',));
                }
                not_troca_delete:

            }

        }

        // app_mac_novo_index
        if ($pathinfo === '/MAC/ajudax') {
            return array (  '_controller' => 'AppBundle\\Controller\\MAC\\novoCOntroller::indexAction',  '_route' => 'app_mac_novo_index',);
        }

        if (0 === strpos($pathinfo, '/agenda')) {
            // agenda_index
            if (rtrim($pathinfo, '/') === '/agenda') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agenda_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'agenda_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\AgendaController::indexAction',  '_route' => 'agenda_index',);
            }
            not_agenda_index:

            // agenda_new
            if ($pathinfo === '/agenda/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_agenda_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\AgendaController::newAction',  '_route' => 'agenda_new',);
            }
            not_agenda_new:

            // agenda_show
            if (preg_match('#^/agenda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agenda_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agenda_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\AgendaController::showAction',));
            }
            not_agenda_show:

            // agenda_edit
            if (preg_match('#^/agenda/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_agenda_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agenda_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\AgendaController::editAction',));
            }
            not_agenda_edit:

            // agenda_delete
            if (preg_match('#^/agenda/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_agenda_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agenda_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\AgendaController::deleteAction',));
            }
            not_agenda_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/categoriaevento')) {
                // categoriaevento_index
                if (rtrim($pathinfo, '/') === '/categoriaevento') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categoriaevento_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'categoriaevento_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MEV\\CategoriaeventoController::indexAction',  '_route' => 'categoriaevento_index',);
                }
                not_categoriaevento_index:

                // categoriaevento_new
                if ($pathinfo === '/categoriaevento/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categoriaevento_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MEV\\CategoriaeventoController::newAction',  '_route' => 'categoriaevento_new',);
                }
                not_categoriaevento_new:

                // categoriaevento_show
                if (preg_match('#^/categoriaevento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_categoriaevento_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriaevento_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\CategoriaeventoController::showAction',));
                }
                not_categoriaevento_show:

                // categoriaevento_edit
                if (preg_match('#^/categoriaevento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_categoriaevento_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriaevento_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\CategoriaeventoController::editAction',));
                }
                not_categoriaevento_edit:

                // categoriaevento_delete
                if (preg_match('#^/categoriaevento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_categoriaevento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoriaevento_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\CategoriaeventoController::deleteAction',));
                }
                not_categoriaevento_delete:

            }

            if (0 === strpos($pathinfo, '/convite')) {
                if (0 === strpos($pathinfo, '/convitegrupo')) {
                    // convitegrupo_index
                    if (rtrim($pathinfo, '/') === '/convitegrupo') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_convitegrupo_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'convitegrupo_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitegrupoController::indexAction',  '_route' => 'convitegrupo_index',);
                    }
                    not_convitegrupo_index:

                    // convitegrupo_new
                    if ($pathinfo === '/convitegrupo/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_convitegrupo_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitegrupoController::newAction',  '_route' => 'convitegrupo_new',);
                    }
                    not_convitegrupo_new:

                    // convitegrupo_show
                    if (preg_match('#^/convitegrupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_convitegrupo_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'convitegrupo_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitegrupoController::showAction',));
                    }
                    not_convitegrupo_show:

                    // convitegrupo_edit
                    if (preg_match('#^/convitegrupo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_convitegrupo_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'convitegrupo_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitegrupoController::editAction',));
                    }
                    not_convitegrupo_edit:

                    // convitegrupo_delete
                    if (preg_match('#^/convitegrupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_convitegrupo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'convitegrupo_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitegrupoController::deleteAction',));
                    }
                    not_convitegrupo_delete:

                }

                if (0 === strpos($pathinfo, '/convitepessoa')) {
                    // convitepessoa_index
                    if (rtrim($pathinfo, '/') === '/convitepessoa') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_convitepessoa_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'convitepessoa_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitepessoaController::indexAction',  '_route' => 'convitepessoa_index',);
                    }
                    not_convitepessoa_index:

                    // convitepessoa_new
                    if ($pathinfo === '/convitepessoa/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_convitepessoa_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitepessoaController::newAction',  '_route' => 'convitepessoa_new',);
                    }
                    not_convitepessoa_new:

                    // convitepessoa_show
                    if (preg_match('#^/convitepessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_convitepessoa_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'convitepessoa_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitepessoaController::showAction',));
                    }
                    not_convitepessoa_show:

                    // convitepessoa_edit
                    if (preg_match('#^/convitepessoa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_convitepessoa_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'convitepessoa_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitepessoaController::editAction',));
                    }
                    not_convitepessoa_edit:

                    // convitepessoa_delete
                    if (preg_match('#^/convitepessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_convitepessoa_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'convitepessoa_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\ConvitepessoaController::deleteAction',));
                    }
                    not_convitepessoa_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/evento')) {
            // evento_index
            if (rtrim($pathinfo, '/') === '/evento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_evento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'evento_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\EventoController::indexAction',  '_route' => 'evento_index',);
            }
            not_evento_index:

            // evento_new
            if ($pathinfo === '/evento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_evento_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\EventoController::newAction',  '_route' => 'evento_new',);
            }
            not_evento_new:

            // evento_show
            if (preg_match('#^/evento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_evento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\EventoController::showAction',));
            }
            not_evento_show:

            // evento_edit
            if (preg_match('#^/evento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_evento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\EventoController::editAction',));
            }
            not_evento_edit:

            // evento_delete
            if (preg_match('#^/evento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_evento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evento_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\EventoController::deleteAction',));
            }
            not_evento_delete:

        }

        if (0 === strpos($pathinfo, '/grupo')) {
            // grupo_index
            if (rtrim($pathinfo, '/') === '/grupo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_grupo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'grupo_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\GrupoController::indexAction',  '_route' => 'grupo_index',);
            }
            not_grupo_index:

            // grupo_new
            if ($pathinfo === '/grupo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_grupo_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\GrupoController::newAction',  '_route' => 'grupo_new',);
            }
            not_grupo_new:

            // grupo_show
            if (preg_match('#^/grupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_grupo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\GrupoController::showAction',));
            }
            not_grupo_show:

            // grupo_edit
            if (preg_match('#^/grupo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_grupo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\GrupoController::editAction',));
            }
            not_grupo_edit:

            // grupo_delete
            if (preg_match('#^/grupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_grupo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'grupo_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\GrupoController::deleteAction',));
            }
            not_grupo_delete:

        }

        if (0 === strpos($pathinfo, '/inscricao')) {
            // inscricao_index
            if (rtrim($pathinfo, '/') === '/inscricao') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_inscricao_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'inscricao_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\InscricaoController::indexAction',  '_route' => 'inscricao_index',);
            }
            not_inscricao_index:

            // inscricao_new
            if ($pathinfo === '/inscricao/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_inscricao_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\InscricaoController::newAction',  '_route' => 'inscricao_new',);
            }
            not_inscricao_new:

            // inscricao_show
            if (preg_match('#^/inscricao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_inscricao_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscricao_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\InscricaoController::showAction',));
            }
            not_inscricao_show:

            // inscricao_edit
            if (preg_match('#^/inscricao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_inscricao_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscricao_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\InscricaoController::editAction',));
            }
            not_inscricao_edit:

            // inscricao_delete
            if (preg_match('#^/inscricao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_inscricao_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscricao_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\InscricaoController::deleteAction',));
            }
            not_inscricao_delete:

        }

        if (0 === strpos($pathinfo, '/requisitoinscricao')) {
            // requisitoinscricao_index
            if (rtrim($pathinfo, '/') === '/requisitoinscricao') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_requisitoinscricao_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'requisitoinscricao_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\RequisitoinscricaoController::indexAction',  '_route' => 'requisitoinscricao_index',);
            }
            not_requisitoinscricao_index:

            // requisitoinscricao_new
            if ($pathinfo === '/requisitoinscricao/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_requisitoinscricao_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\RequisitoinscricaoController::newAction',  '_route' => 'requisitoinscricao_new',);
            }
            not_requisitoinscricao_new:

            // requisitoinscricao_show
            if (preg_match('#^/requisitoinscricao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_requisitoinscricao_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisitoinscricao_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\RequisitoinscricaoController::showAction',));
            }
            not_requisitoinscricao_show:

            // requisitoinscricao_edit
            if (preg_match('#^/requisitoinscricao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_requisitoinscricao_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisitoinscricao_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\RequisitoinscricaoController::editAction',));
            }
            not_requisitoinscricao_edit:

            // requisitoinscricao_delete
            if (preg_match('#^/requisitoinscricao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_requisitoinscricao_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'requisitoinscricao_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\RequisitoinscricaoController::deleteAction',));
            }
            not_requisitoinscricao_delete:

        }

        if (0 === strpos($pathinfo, '/tipoevento')) {
            // tipoevento_index
            if (rtrim($pathinfo, '/') === '/tipoevento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipoevento_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipoevento_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\TipoeventoController::indexAction',  '_route' => 'tipoevento_index',);
            }
            not_tipoevento_index:

            // tipoevento_new
            if ($pathinfo === '/tipoevento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipoevento_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MEV\\TipoeventoController::newAction',  '_route' => 'tipoevento_new',);
            }
            not_tipoevento_new:

            // tipoevento_show
            if (preg_match('#^/tipoevento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipoevento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoevento_show')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\TipoeventoController::showAction',));
            }
            not_tipoevento_show:

            // tipoevento_edit
            if (preg_match('#^/tipoevento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipoevento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoevento_edit')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\TipoeventoController::editAction',));
            }
            not_tipoevento_edit:

            // tipoevento_delete
            if (preg_match('#^/tipoevento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tipoevento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoevento_delete')), array (  '_controller' => 'AppBundle\\Controller\\MEV\\TipoeventoController::deleteAction',));
            }
            not_tipoevento_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/contactos')) {
                // contactos_index
                if (rtrim($pathinfo, '/') === '/contactos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contactos_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'contactos_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MUS\\ContactosController::indexAction',  '_route' => 'contactos_index',);
                }
                not_contactos_index:

                // contactos_new
                if ($pathinfo === '/contactos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contactos_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MUS\\ContactosController::newAction',  '_route' => 'contactos_new',);
                }
                not_contactos_new:

                // contactos_show
                if (preg_match('#^/contactos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_contactos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactos_show')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ContactosController::showAction',));
                }
                not_contactos_show:

                // contactos_edit
                if (preg_match('#^/contactos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_contactos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactos_edit')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ContactosController::editAction',));
                }
                not_contactos_edit:

                // contactos_delete
                if (preg_match('#^/contactos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_contactos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactos_delete')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ContactosController::deleteAction',));
                }
                not_contactos_delete:

            }

            if (0 === strpos($pathinfo, '/curso')) {
                // curso_index
                if (rtrim($pathinfo, '/') === '/curso') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_curso_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'curso_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MUS\\CursoController::indexAction',  '_route' => 'curso_index',);
                }
                not_curso_index:

                // curso_new
                if ($pathinfo === '/curso/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_curso_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MUS\\CursoController::newAction',  '_route' => 'curso_new',);
                }
                not_curso_new:

                // curso_show
                if (preg_match('#^/curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_curso_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_show')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\CursoController::showAction',));
                }
                not_curso_show:

                // curso_edit
                if (preg_match('#^/curso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_curso_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_edit')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\CursoController::editAction',));
                }
                not_curso_edit:

                // curso_delete
                if (preg_match('#^/curso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_curso_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_delete')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\CursoController::deleteAction',));
                }
                not_curso_delete:

            }

        }

        if (0 === strpos($pathinfo, '/funcionario')) {
            // funcionario_index
            if (rtrim($pathinfo, '/') === '/funcionario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_funcionario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'funcionario_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MUS\\FuncionarioController::indexAction',  '_route' => 'funcionario_index',);
            }
            not_funcionario_index:

            // funcionario_new
            if ($pathinfo === '/funcionario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_funcionario_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MUS\\FuncionarioController::newAction',  '_route' => 'funcionario_new',);
            }
            not_funcionario_new:

            // funcionario_show
            if (preg_match('#^/funcionario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_funcionario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'funcionario_show')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\FuncionarioController::showAction',));
            }
            not_funcionario_show:

            // funcionario_edit
            if (preg_match('#^/funcionario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_funcionario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'funcionario_edit')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\FuncionarioController::editAction',));
            }
            not_funcionario_edit:

            // funcionario_delete
            if (preg_match('#^/funcionario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_funcionario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'funcionario_delete')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\FuncionarioController::deleteAction',));
            }
            not_funcionario_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/participante')) {
                // participante_index
                if (rtrim($pathinfo, '/') === '/participante') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_participante_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'participante_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipanteController::indexAction',  '_route' => 'participante_index',);
                }
                not_participante_index:

                // participante_new
                if ($pathinfo === '/participante/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_participante_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipanteController::newAction',  '_route' => 'participante_new',);
                }
                not_participante_new:

                // participante_show
                if (preg_match('#^/participante/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_participante_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'participante_show')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipanteController::showAction',));
                }
                not_participante_show:

                // participante_edit
                if (preg_match('#^/participante/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_participante_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'participante_edit')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipanteController::editAction',));
                }
                not_participante_edit:

                // participante_delete
                if (preg_match('#^/participante/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_participante_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'participante_delete')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipanteController::deleteAction',));
                }
                not_participante_delete:

                if (0 === strpos($pathinfo, '/participantegrupo')) {
                    // participantegrupo_index
                    if (rtrim($pathinfo, '/') === '/participantegrupo') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_participantegrupo_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'participantegrupo_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipantegrupoController::indexAction',  '_route' => 'participantegrupo_index',);
                    }
                    not_participantegrupo_index:

                    // participantegrupo_new
                    if ($pathinfo === '/participantegrupo/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_participantegrupo_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipantegrupoController::newAction',  '_route' => 'participantegrupo_new',);
                    }
                    not_participantegrupo_new:

                    // participantegrupo_show
                    if (preg_match('#^/participantegrupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_participantegrupo_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'participantegrupo_show')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipantegrupoController::showAction',));
                    }
                    not_participantegrupo_show:

                    // participantegrupo_edit
                    if (preg_match('#^/participantegrupo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_participantegrupo_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'participantegrupo_edit')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipantegrupoController::editAction',));
                    }
                    not_participantegrupo_edit:

                    // participantegrupo_delete
                    if (preg_match('#^/participantegrupo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_participantegrupo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'participantegrupo_delete')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\ParticipantegrupoController::deleteAction',));
                    }
                    not_participantegrupo_delete:

                }

            }

            if (0 === strpos($pathinfo, '/pessoa')) {
                // pessoa_index
                if (rtrim($pathinfo, '/') === '/pessoa') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pessoa_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pessoa_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MUS\\PessoaController::indexAction',  '_route' => 'pessoa_index',);
                }
                not_pessoa_index:

                // pessoa_new
                if ($pathinfo === '/pessoa/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pessoa_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MUS\\PessoaController::newAction',  '_route' => 'pessoa_new',);
                }
                not_pessoa_new:

                // pessoa_show
                if (preg_match('#^/pessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pessoa_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_show')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\PessoaController::showAction',));
                }
                not_pessoa_show:

                // pessoa_edit
                if (preg_match('#^/pessoa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pessoa_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_edit')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\PessoaController::editAction',));
                }
                not_pessoa_edit:

                // pessoa_delete
                if (preg_match('#^/pessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pessoa_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pessoa_delete')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\PessoaController::deleteAction',));
                }
                not_pessoa_delete:

            }

        }

        if (0 === strpos($pathinfo, '/tipocontacto')) {
            // tipocontacto_index
            if (rtrim($pathinfo, '/') === '/tipocontacto') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipocontacto_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipocontacto_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MUS\\TipocontactoController::indexAction',  '_route' => 'tipocontacto_index',);
            }
            not_tipocontacto_index:

            // tipocontacto_new
            if ($pathinfo === '/tipocontacto/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipocontacto_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MUS\\TipocontactoController::newAction',  '_route' => 'tipocontacto_new',);
            }
            not_tipocontacto_new:

            // tipocontacto_show
            if (preg_match('#^/tipocontacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipocontacto_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocontacto_show')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\TipocontactoController::showAction',));
            }
            not_tipocontacto_show:

            // tipocontacto_edit
            if (preg_match('#^/tipocontacto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipocontacto_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocontacto_edit')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\TipocontactoController::editAction',));
            }
            not_tipocontacto_edit:

            // tipocontacto_delete
            if (preg_match('#^/tipocontacto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tipocontacto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipocontacto_delete')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\TipocontactoController::deleteAction',));
            }
            not_tipocontacto_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_index
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MUS\\UsuarioController::indexAction',  '_route' => 'usuario_index',);
            }
            not_usuario_index:

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MUS\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\UsuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\UsuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'AppBundle\\Controller\\MUS\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        if (0 === strpos($pathinfo, '/visita')) {
            // visita_index
            if (rtrim($pathinfo, '/') === '/visita') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_visita_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'visita_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MVS\\VisitaController::indexAction',  '_route' => 'visita_index',);
            }
            not_visita_index:

            // visita_new
            if ($pathinfo === '/visita/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_visita_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MVS\\VisitaController::newAction',  '_route' => 'visita_new',);
            }
            not_visita_new:

            // visita_show
            if (preg_match('#^/visita/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_visita_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visita_show')), array (  '_controller' => 'AppBundle\\Controller\\MVS\\VisitaController::showAction',));
            }
            not_visita_show:

            // visita_edit
            if (preg_match('#^/visita/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_visita_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visita_edit')), array (  '_controller' => 'AppBundle\\Controller\\MVS\\VisitaController::editAction',));
            }
            not_visita_edit:

            // visita_delete
            if (preg_match('#^/visita/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_visita_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'visita_delete')), array (  '_controller' => 'AppBundle\\Controller\\MVS\\VisitaController::deleteAction',));
            }
            not_visita_delete:

        }

        if (0 === strpos($pathinfo, '/municipio')) {
            // municipio_index
            if (rtrim($pathinfo, '/') === '/municipio') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_municipio_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'municipio_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SYS\\MunicipioController::indexAction',  '_route' => 'municipio_index',);
            }
            not_municipio_index:

            // municipio_show
            if (preg_match('#^/municipio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_municipio_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'municipio_show')), array (  '_controller' => 'AppBundle\\Controller\\SYS\\MunicipioController::showAction',));
            }
            not_municipio_show:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pais')) {
                // pais_index
                if (rtrim($pathinfo, '/') === '/pais') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pais_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pais_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SYS\\PaisController::indexAction',  '_route' => 'pais_index',);
                }
                not_pais_index:

                // pais_new
                if ($pathinfo === '/pais/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pais_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SYS\\PaisController::newAction',  '_route' => 'pais_new',);
                }
                not_pais_new:

                // pais_show
                if (preg_match('#^/pais/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pais_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_show')), array (  '_controller' => 'AppBundle\\Controller\\SYS\\PaisController::showAction',));
                }
                not_pais_show:

                // pais_edit
                if (0 === strpos($pathinfo, '/pais/pais') && preg_match('#^/pais/pais/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pais_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_edit')), array (  '_controller' => 'AppBundle\\Controller\\SYS\\PaisController::editAction',));
                }
                not_pais_edit:

                // pais_delete
                if (preg_match('#^/pais/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pais_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_delete')), array (  '_controller' => 'AppBundle\\Controller\\SYS\\PaisController::deleteAction',));
                }
                not_pais_delete:

            }

            if (0 === strpos($pathinfo, '/provincia')) {
                // provincia_index
                if (rtrim($pathinfo, '/') === '/provincia') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_provincia_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'provincia_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SYS\\ProvinciaController::indexAction',  '_route' => 'provincia_index',);
                }
                not_provincia_index:

                // provincia_new
                if ($pathinfo === '/provincia/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_provincia_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\SYS\\ProvinciaController::newAction',  '_route' => 'provincia_new',);
                }
                not_provincia_new:

                // provincia_show
                if (preg_match('#^/provincia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_provincia_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_show')), array (  '_controller' => 'AppBundle\\Controller\\SYS\\ProvinciaController::showAction',));
                }
                not_provincia_show:

                // provincia_edit
                if (preg_match('#^/provincia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_provincia_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_edit')), array (  '_controller' => 'AppBundle\\Controller\\SYS\\ProvinciaController::editAction',));
                }
                not_provincia_edit:

                // provincia_delete
                if (preg_match('#^/provincia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_provincia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_delete')), array (  '_controller' => 'AppBundle\\Controller\\SYS\\ProvinciaController::deleteAction',));
                }
                not_provincia_delete:

            }

        }

        // app_sobre_index
        if ($pathinfo === '/loginx') {
            return array (  '_controller' => 'AppBundle\\Controller\\SobreController::indexAction',  '_route' => 'app_sobre_index',);
        }

        // app_teste_show
        if (0 === strpos($pathinfo, '/teste') && preg_match('#^/teste(?:/(?P<variavel>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_teste_show')), array (  'variavel' => '',  '_controller' => 'AppBundle\\Controller\\TesteController::showAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // app_login_index
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\loginController::indexAction',  '_route' => 'app_login_index',);
            }

            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\loginController::indexAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
