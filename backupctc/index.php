<?php
/**
 * @author    JoomlaShine.com http://www.joomlashine.com
 * @copyright Copyright (C) 2008 - 2011 JoomlaShine.com. All rights reserved.
 * @license   GNU/GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
 */

// No direct access
defined('_JEXEC') or die('Restricted index access');
define('YOURBASEPATH', dirname(__FILE__));

JHTML::_('behavior.framework', false);

// Template setup
require_once(YOURBASEPATH. DIRECTORY_SEPARATOR .'includes'. DIRECTORY_SEPARATOR .'lib'. DIRECTORY_SEPARATOR .'jsn_utils.php');
require_once(YOURBASEPATH. DIRECTORY_SEPARATOR .'includes'. DIRECTORY_SEPARATOR .'jsn_config.php');
require_once(YOURBASEPATH. DIRECTORY_SEPARATOR .'includes'. DIRECTORY_SEPARATOR .'jsn_setup.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- jsn_boot_pro 1.0.0 -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language ?>" dir="<?php echo $template_direction; ?>">
<head>
  <title>The Chamber of Tax Consultants</title>
        <!-- html5.js for IE less than 9 -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- css3-mediaqueries.js for IE less than 9 -->
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
    
  <jdoc:include type="head" />
  <?php require_once(YOURBASEPATH. DIRECTORY_SEPARATOR .'includes'. DIRECTORY_SEPARATOR .'jsn_head.php'); ?>
  
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>
            //Hide Login Form on Document Ready
            $(document).ready(function(){
               $('#jsn-pos-mainbody-top').hide();
            })
        </script>
        <style>
            .jsn-modulecontainer {width:100% !important;}
            /*.jsn-article-content{width:500px !important;}*/
            .demo-frontpage-textblock{padding:0 !important;width:500px; }
            .content-center{width:500px;}
            #form-login{width:216px;}
        </style>-->
        <style>
          #jsn-pos-user-top{
            float:left;
            position:relative;
            width:293px;
          }
          #jsn-pos-user2{
            float:right;
          }
          #jsn-pos-user2 h3{
            margin:0 -38px;
          }
          #jsn-mainbody-content{/*display:none;*/}
          
        </style>
        






</head>
<body id="jsn-master" class="jsn-textstyle-<?php echo $template_textstyle; ?> jsn-textsize-<?php echo $template_textsize; ?> jsn-color-<?php echo $template_color; ?> jsn-direction-<?php echo $template_direction; ?><?php echo ($template_specialfont)?' jsn-specialfont':''; ?><?php echo ($enable_css3effect)?' jsn-css3':''; ?><?php echo ($enable_mobile)?' jsn-mobile':' jsn-desktop'; ?><?php echo ($pageclass != '')?' '.$pageclass:''; ?><?php echo ($is_ie7)?' jsn-ie7':''; ?> <?php echo $versionClassName ?>">
  

  
  <a name="top" id="top"></a>
  <div id="jsn-page">
  <?php
    /*====== Show modules in position "stick-lefttop" ======*/
    if ($this->countModules('stick-lefttop') > 0) {
  ?>
    <div id="jsn-pos-stick-lefttop">
      <jdoc:include type="modules" name="stick-lefttop" style="jsnmodule" />
    </div>
  <?php
    }

    /*====== Show modules in position "stick-leftmiddle" ======*/
    if ($this->countModules('stick-leftmiddle') > 0) {
  ?>
    <div id="jsn-pos-stick-leftmiddle">
      <jdoc:include type="modules" name="stick-leftmiddle" style="jsnmodule" />
    </div>
  <?php
    }

    /*====== Show modules in position "stick-leftbottom" ======*/
    if ($this->countModules('stick-leftbottom') > 0) {
  ?>
    <div id="jsn-pos-stick-leftbottom">
      <jdoc:include type="modules" name="stick-leftbottom" style="jsnmodule" />
    </div>
  <?php
    }

    /*====== Show modules in position "stick-righttop" ======*/
    if ($this->countModules('stick-righttop') > 0) {
  ?>
    <div id="jsn-pos-stick-righttop">
      <jdoc:include type="modules" name="stick-righttop" style="jsnmodule" />
    </div>
  <?php
    }

    /*====== Show modules in position "stick-rightmiddle" ======*/
    if ($this->countModules('stick-rightmiddle') > 0) {
  ?>
    <div id="jsn-pos-stick-rightmiddle">
      <jdoc:include type="modules" name="stick-rightmiddle" style="jsnmodule" />
    </div>
  <?php
    }

    /*====== Show modules in position "stick-rightbottom" ======*/
    if ($this->countModules('stick-rightbottom') > 0) {
  ?>
    <div id="jsn-pos-stick-rightbottom">
      <jdoc:include type="modules" name="stick-rightbottom" style="jsnmodule" />
    </div>
  <?php
    }
  ?>
    <div id="jsn-header">  
      <div id="jsn-header-inner1">
        <div id="jsn-header-inner2">
          <div id="jsn-header-inner">
            <div id="jsn-logo">
            <?php
              /*====== Show top H1 tag with site name and slogan ======*/
              if ($enable_toph1) {
                echo '<h1 class="jsn-topheading">'.$app->getCfg('sitename').' - '.$logo_slogan.'</h1>';
              }
      
              /*====== Show modules in position "logo" ======*/
              if ($this->countModules('logo') > 0) {
            ?>
              <div id="jsn-pos-logo">
                <jdoc:include type="modules" name="logo" style="jsnmodule" />
              </div>
      
            <?php
              /*====== If there are NO modules in position "logo", then show logo image file "logo.png" ======*/
              } else {
                /*====== Attach link to logo image ======*/
                if ($logo_link != "") {
                  echo '<a href="'.$logo_link.'" title="'.$logo_slogan.'">';
                }
      
                /*====== Show mobile logo ======*/
                if ($mobile_logo_path != "") {
                  echo '<img src="'.$mobile_logo_path.'" alt="'.$logo_slogan.'" id="jsn-logo-mobile" />';
                }
      
                /*====== Show desktop logo ======*/
                if ($enable_colored_logo) {
                  $logo_path = $template_path."/images/".($enable_colored_logo?"colors/$template_color/":'')."logo.png";
                }
                if ($logo_path != "") {
                  echo '<img src="'.$logo_path.'" alt="'.$logo_slogan.'" id="jsn-logo-desktop" />';
                }
      
                if ($logo_link != "") {
                  echo '</a>';
                }
              }
            ?>
            </div>
            <div id="jsn-headerright">
            <?php
              /*====== Show modules in position "top" ======*/
              if ($this->countModules('top') > 0) {
            ?>
              <div id="jsn-pos-top">
                <jdoc:include type="modules" name="top" style="jsnmodule" />
                                                                <div style="float:right;margin-top:-48px;">
                        <input id="button-toggle" type="submit" name="Submit" style="border:1px solid #ccc;float:right;" class="button" value="Member Portal" />

                        <div id="jsn-pos-mainbody-top" style="top:20px;position:absolute;z-index:999;margin-left:-53px;width:238px;jsn-menu-toggle" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('mainbody-top'); ?>">
                            <jdoc:include type="modules" name="mainbody-top" style="jsnmodule" class="jsn-roundedbox" />

                            <div class="clearbreak"></div>
                        </div>
                    </div>
                <div class="clearbreak"></div>
              </div>
            <?php
              }
            ?>
            </div>
            <div class="clearbreak"></div>
          </div>
          
          <?php
            if ($jsnutils->countPositions($this, array('mainmenu', 'toolbar')) || $enable_widthselector || $enable_textsizer || $enable_colorselector) {
          ?>
            <div id="jsn-menu">
              <div id="jsn-menu-inner">
              <?php
                /*====== Show modules in position "mainmenu" ======*/
                if ($this->countModules('mainmenu') > 0) {
              ?>
                <div id="jsn-pos-mainmenu">
                  <jdoc:include type="modules" name="mainmenu" style="jsnmodule" />
                </div>
              <?php
                }
              ?>
              <?php
                /*====== Show button to jump to mobile view if user is using mobile device ======*/
                if ($enable_mobile_support && $show_desktop_switcher) {
              ?>
                <span id="jsn-desktopswitch">
                  <a href="<?php echo $jsnutils->addAttributeToURL('jsn_setmobile', 'no'); ?>"></a>
                </span>
                <span id="jsn-mobileswitch">
                  <a href="<?php echo $jsnutils->addAttributeToURL('jsn_setmobile', 'yes'); ?>"></a>
                </span>
              <?php
                }
        
                /*====== Show modules in position "toolbar" ======*/
                if ($this->countModules('toolbar') > 0) {
              ?>
                <div id="jsn-pos-toolbar">
                  <jdoc:include type="modules" name="toolbar" style="jsnmodule" />
                </div>
              <?php
                }
              ?>
              <div class="clearbreak"></div>
              </div>
            </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
    
    <div id="jsn-body">
        <?php
      /*====== Show modules in content top area ======*/
      if ($jsnutils->countPositions($this, array('promo-left', 'promo', 'promo-right',))) {
    ?>
      <div id="jsn-promo" class="<?php echo (($has_promoleft)?'jsn-haspromoleft ':'') ?><?php echo (($has_promoright)?'jsn-haspromoright ':'') ?>">
      <?php
        /*====== Show modules in position "promo" ======*/
        if ($this->countModules('promo') > 0) {
      ?>
                    <div id="jsn-pos-promo">
                        <jdoc:include type="modules" name="promo" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
      <?php
        }

        /*====== Show modules in position "promo-left" ======*/
        if ($this->countModules('promo-left') > 0) {
      ?>
                    <div id="jsn-pos-promo-left">
            <jdoc:include type="modules" name="promo-left" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
      <?php
        }

        /*====== Show modules in position "promo-right" ======*/
        if ($this->countModules('promo-right') > 0) {
      ?>
                    <div id="jsn-pos-promo-right">
            <jdoc:include type="modules" name="promo-right" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
      <?php
        }
      ?>
        <div class="clearbreak"></div>
        </div>
    <?php
            }
        ?>
    <?php
            /*====== Show modules in position "content-top" ======*/
            if ($this->countModules('content-top') > 0) {
        ?>
            <div id="jsn-content-top">
        <div id="jsn-pos-content-top" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('content-top'); ?>">
          <jdoc:include type="modules" name="content-top" style="jsnmodule" class="jsn-roundedbox" />
          <div class="clearbreak"></div>
        </div>
      </div>
    <?php
      }
    ?>
      <div id="jsn-content" class="<?php echo (($has_left)?'jsn-hasleft ':'') ?><?php echo (($has_right)?'jsn-hasright ':'') ?><?php echo (($has_innerleft)?'jsn-hasinnerleft ':'') ?><?php echo (($has_innerright)?'jsn-hasinnerright ':'') ?>">
        <div id="jsn-content_inner"><div id="jsn-content_inner1"><div id="jsn-content_inner2"><div id="jsn-content_inner3"><div id="jsn-content_inner4"><div id="jsn-content_inner5"><div id="jsn-content_inner6"><div id="jsn-content_inner7">
          <div id="jsn-maincontent">
            <div id="jsn-centercol">
              <div id="jsn-centercol_inner">
                <div id="jsn-centercol_inner1">
    <?php
      /*====== Show modules in position "breadcrumbs" ======*/
      if ($this->countModules('breadcrumbs') > 0) {
    ?>
                <div id="jsn-pos-breadcrumbs">
                  <jdoc:include type="modules" name="breadcrumbs" />
                </div>
    <?php
      }

      /*====== Show modules in position "user-top" ======*/
      if ($this->countModules('user-top') > 0) {
    ?>
                <div id="jsn-pos-user-top" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('user-top'); ?>">
                  <jdoc:include type="modules" name="user-top" style="jsnmodule" class="jsn-roundedbox" />
                  <div class="clearbreak"></div>
                </div>
    <?php
      }

      /*====== Show modules in position "user1" and "user2" ======*/
      $positionCount = $jsnutils->countPositions($this, array('user1', 'user2'));
      if ($positionCount)
      {
        $grid_suffix = $positionCount;
    ?>
                <div id="jsn-usermodules1" class="jsn-modulescontainer jsn-modulescontainer<?php echo $grid_suffix; ?>">
                  <div id="jsn-usermodules1_inner_grid<?php echo $grid_suffix; ?>">
      <?php
        /*====== Show modules in position "user1" ======*/
        if ($this->countModules('user1') > 0) {
      ?>
                    <div id="jsn-pos-user1">
                      <jdoc:include type="modules" name="user1" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
      <?php
        }

        /*====== Show modules in position "user2" ======*/
        if ($this->countModules('user2') > 0) {
      ?>
                    <div id="jsn-pos-user2">
                      <jdoc:include type="modules" name="user2" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
      <?php
        }
      ?>
                    <div class="clearbreak"></div>
                  </div>
                </div>
    <?php
      }
    ?>
                <div id="jsn-mainbody-content" class="<?php echo (($has_innerleft)?'jsn-hasinnerleft ':'') ?><?php echo (($has_innerright)?'jsn-hasinnerright ':'') ?><?php echo ($this->countModules('mainbody-top') > 0)?' jsn-hasmainbodytop':'' ?><?php echo ($this->countModules('mainbody-bottom') > 0)?' jsn-hasmainbodybottom':'' ?><?php echo ($show_frontpage)?' jsn-hasmainbody':'' ?>">
    <?php
      /*====== Show modules in position "mainbody-top" ======*/
      if ($this->countModules('mainbody-top') > 0) {
    ?>
                  
    <?php
      }

      /*====== Show mainbody ======*/
      if ($show_frontpage) {
    ?>
                  <div id="jsn-mainbody">
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                  </div>
    <?php
      }

      /*====== Show modules in position "mainbody-bottom" ======*/
      if ($this->countModules('mainbody-bottom') > 0) {
    ?>
                  <div id="jsn-pos-mainbody-bottom" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('mainbody-bottom'); ?>">
                    <jdoc:include type="modules" name="mainbody-bottom" style="jsnmodule" class="jsn-roundedbox" />
                    <div class="clearbreak"></div>
                  </div>
    <?php
      }
    ?>
                </div>
    <?php
      /*====== Show modules in position "user3" and "user4" ======*/
      $positionCount = $jsnutils->countPositions($this, array('user3', 'user4'));
      if ($positionCount) {
        $grid_suffix = $positionCount;
    ?>
                <div id="jsn-usermodules2" class="jsn-modulescontainer jsn-modulescontainer<?php echo $grid_suffix; ?>">
                  <div id="jsn-usermodules2_inner_grid<?php echo $grid_suffix; ?>">
      <?php
        /*====== Show modules in position "user3" ======*/
        if ($this->countModules('user3') > 0) {
      ?>
                    <div id="jsn-pos-user3">
                      <jdoc:include type="modules" name="user3" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
      <?php
        }

        /*====== Show modules in position "user4" ======*/
        if ($this->countModules('user4') > 0) { ?>
                    <div id="jsn-pos-user4">
                      <jdoc:include type="modules" name="user4" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
      <?php
        }
      ?>
                    <div class="clearbreak"></div>
                  </div>
                </div>
    <?php
      }

      /*====== Show modules in position "user-bottom" ======*/
      if ($this->countModules('user-bottom') > 0) { ?>
                <div id="jsn-pos-user-bottom" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('user-bottom'); ?>">
                  <jdoc:include type="modules" name="user-bottom" style="jsnmodule" class="jsn-roundedbox" />
                  <div class="clearbreak"></div>
                </div>
    <?php
      }

      /*====== Show modules in position "banner" ======*/
      if ($this->countModules('banner') > 0) {
    ?>
                <div id="jsn-pos-banner">
                  <jdoc:include type="modules" name="banner" style="jsnmodule" />
                </div>
    <?php
      }
    ?>
              </div>
              </div>
            </div>
    <?php
      /*====== Show modules in position "innerleft" ======*/
      if ($this->countModules('innerleft') > 0) {
    ?>
            <div id="jsn-pos-innerleft">
              <div id="jsn-pos-innerleft_inner">
                <jdoc:include type="modules" name="innerleft" style="jsnmodule" class="jsn-roundedbox" />
              </div>
            </div>
    <?php
      }

      /*====== Show modules in position "innerright" ======*/
      if ($this->countModules('innerright') > 0) {
    ?>
            <div id="jsn-pos-innerright">
              <div id="jsn-pos-innerright_inner">
                <jdoc:include type="modules" name="innerright" style="jsnmodule" class="jsn-roundedbox" />
              </div>
            </div>
    <?php
      }
    ?>
          <div class="clearbreak"></div></div>
    <?php
      /*====== Show modules in position "left" ======*/
      if ($this->countModules('left') > 0) {
    ?>
          <div id="jsn-leftsidecontent">
            <div id="jsn-leftsidecontent_inner">
              <div id="jsn-pos-left">
                <jdoc:include type="modules" name="left" style="jsnmodule" class="jsn-roundedbox" />
              </div>
            </div>
          </div>
    <?php
      }

      /*====== Show modules in position "right" ======*/
      if ($this->countModules('right') > 0) {
    ?>
          <div id="jsn-rightsidecontent">
            <div id="jsn-rightsidecontent_inner">
              <div id="jsn-pos-right">
                <jdoc:include type="modules" name="right" style="jsnmodule" class="jsn-roundedbox" />
              </div>
            </div>
          </div>
    <?php
      }
    ?>
        <div class="clearbreak"></div></div></div></div></div></div></div></div></div>
      </div>

      <?php
        /*====== Show modules in position "content-bottom" ======*/
        if ($this->countModules('content-bottom') > 0) {
      ?>
              <div id="jsn-content-bottom">
                    <div id="jsn-pos-content-bottom" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('content-bottom'); ?>">
                        <jdoc:include type="modules" name="content-bottom" style="jsnmodule" class="jsn-roundedbox" />
                        <div class="clearbreak"></div>
                    </div>
                </div>
      <?php
        }
      ?>
      
    </div>
    
    <?php
        /*====== Show modules in position "user5", "user6", "user7" ======*/
        $positionCount = $jsnutils->countPositions($this, array('user5', 'user6', 'user7'));
        if ($positionCount) {
          $grid_suffix = $positionCount;
      ?>
        <div id="jsn-usermodules3">
          <div id="jsn-usermodules3-inner1">
            <div id="jsn-usermodules3-inner" class="jsn-modulescontainer jsn-modulescontainer<?php echo $grid_suffix; ?>">
          <?php
            /*====== Show modules in position "user5" ======*/
            if ($this->countModules('user5') > 0) {
          ?>
            <div id="jsn-pos-user5">
              <jdoc:include type="modules" name="user5" style="jsnmodule" class="jsn-roundedbox" />
            </div>
          <?php
            }
  
            /*====== Show modules in position "user6" ======*/
            if ($this->countModules('user6') > 0) {
          ?>
            <div id="jsn-pos-user6">
              <jdoc:include type="modules" name="user6" style="jsnmodule" class="jsn-roundedbox" />
            </div>
          <?php
            }
  
            /*====== Show modules in position "user7" ======*/
            if ($this->countModules('user7') > 0) {
          ?>
            <div id="jsn-pos-user7">
              <jdoc:include type="modules" name="user7" style="jsnmodule" class="jsn-roundedbox" />
            </div>
          <?php
            }
          ?>
            <div class="clearbreak"></div>
            </div>
          </div>
        </div>
      <?php
        }
      ?>
    <?php
      /*====== Show modules in position "footer" and "bottom" ======*/
      $positionCount = $jsnutils->countPositions($this, array('footer', 'bottom'));
      if ($positionCount) {
        $grid_suffix = $positionCount;
    ?>
      <div id="jsn-footer">
        <div id="jsn-footer-inner1">
          <div id="jsn-footer-inner">
            <div id="jsn-footermodules" class="jsn-modulescontainer jsn-modulescontainer<?php echo $grid_suffix; ?>">
            <?php
              /*====== Show modules in position "footer" ======*/
              if ($this->countModules('footer') > 0) {
            ?>
              <div id="jsn-pos-footer">
                <jdoc:include type="modules" name="footer" style="jsnmodule" />
              </div>
            <?php
              }
    
            /*====== Show modules in position "bottom" ======*/
            if ($this->countModules('bottom') > 0) {
            ?>
              <div id="jsn-pos-bottom">
                <jdoc:include type="modules" name="bottom" style="jsnmodule" />
              </div>
            <?php
              }
            ?>
              <div class="clearbreak"></div>
            </div>
          </div>
        </div>
      </div>
    <?php
      }
    ?>
  </div>
  <?php
    /*====== Show "Go to top" link ======*/
    if ($enable_gotoplink) {
  ?>
      <a id="jsn-gotoplink" href="#top" onclick="javascript: preventDefault();">
        <span><?php echo JText::_('GO_TO_TOP'); ?></span>
      </a>
  <?php
    }

    /*====== Show modules in position "background" ======*/
    if ($this->countModules('background') > 0) {
  ?>
      <div id="jsn-pos-background">
        <jdoc:include type="modules" name="background" style="jsnmodule" />
      </div>
  <?php
    }
?>
<jdoc:include type="modules" name="debug" />
<?php
  /*====== Show analytics code configured in template parameter ======*/
  if ($analytics_code_position == 1) {
    echo $analytics_code;
  }
?>
<!--    <script>
        //Show Form on Button Click
        $('.button').click(function(){
            $('#jsn-pos-mainbody-top').slideToggle(300);
        })
    </script>-->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58342371-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
