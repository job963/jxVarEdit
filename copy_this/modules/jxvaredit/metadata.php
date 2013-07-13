<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'jxvaredit',
    'title'        => 'jxVarEdit - Variant Edit',
    'description'  => array(
                        'de' => 'Erweiterung der Varianten-Bearbeitung',
                        'en' => 'Extension of Variants Editing'
                        ),
    'thumbnail'    => 'jxvaredit.png',
    'version'      => '0.2',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxVarEdit',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
                        ),
    'templates'    => array(
                        ),
    'blocks' => array(
                    array(
                        'template' => 'article_variant.tpl', 
                        'block'    => 'admin_article_variant_listheader',                     
                        'file'     => '/out/blocks/admin_article_variant_listheader.tpl'
                            ),
                    array(
                        'template' => 'article_variant.tpl', 
                        'block'    => 'admin_article_variant_parent',                     
                        'file'     => '/out/blocks/admin_article_variant_parent.tpl'
                            ),
                    array(
                        'template' => 'article_variant.tpl', 
                        'block'    => 'admin_article_variant_listitem',                     
                        'file'     => '/out/blocks/admin_article_variant_listitem.tpl'
                            ),
                    array(
                        'template' => 'article_variant.tpl', 
                        'block'    => 'admin_article_variant_newitem',                     
                        'file'     => '/out/blocks/admin_article_variant_newitem.tpl'
                            ),
                    array(
                        'template' => 'headitem.tpl', 
                        'block'    => 'admin_headitem_js',                     
                        'file'     => '/out/blocks/jxvaredit_admin_headitem_js.tpl'
                            )
                        ),
    'settings' => array(
                        )
    );

?>
