<?php
function build_menu($rows, $_parent_has_child, $_result)
{
    $result = '';
    $result .= '<ul class="dropdown-menu">';
    $this_url = '';

    foreach ($rows as $row) {
        if( $row->id != $_parent_has_child->id ){
            if( $_parent_has_child->id_current == $row->id_parent){
                $this_url = base_url($row->url);
                if (has_children($rows, $row->id_current)) {
                    $this_url = ($row->url == null) || (($row->url == '#' && $row->external_url != null) ? $row->external_url.' target=_blank ' : $this_url);
                    $result .= '<li aria-haspopup="true" class="dropdown-submenu">';
                    $result .= '<a href='.$this_url.' class="nav-link ">';
                    $result .= '<div class="animated x_infinite fadeInDown ">';
                    $result .= !empty($row->icon) ? '<i class="'.$row->icon.'"></i>&nbsp;' : '';
                    $result .= $row->name.'</div>';
                    $result .= '</a>';
                    $result .= build_menu($rows, $row, $result);
                    $result .= '</li>';
                }else{
                    $_link = '';
                    if( $row->external_url != null || ($row->url == '#' && $row->external_url != null)){
                        $_link = $row->external_url.' target="_blank" ';
                    }else{
                        $_link = site_url($row->url);
                    }
                    /*$this_url = ($row->url == null) || ($row->url == '#' && $row->external_url != null) ? $row->external_url.' target=_blank ' : $this_url;*/
                    $result .= '<li aria-haspopup="true" class=" ">';
                    $result .= '<a href='.$_link.' class="nav-link ">';
                    $result .= '<div class="animated x_infinite fadeInDown ">';
                    $result .= !empty($row->icon) ? '<i class="'.$row->icon.'"></i>&nbsp;' : '';
                    $result .= $row->name.'</div>';
                    $result .= '</a>';
                    $result .= '</li>';
                }
            }
        }
    }
    $result .= '</ul>';
    return $result;
}


function has_children($rows, $id)
{
    foreach ($rows as $row) {
        if ($row->id_parent == $id)
            return true;
    }
    return false;
}
?>

<div class="page-header-menu">
    <div class="container">
        <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
        <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
        <div class="hor-menu hor-menu-dark">
            <ul class="nav navbar-nav">
                <?php
                $result = '';
                $animate = 'fadeIn';
                if(isset($_menus)){
                    foreach ($_menus as $row) {
                        if ($row->id_parent == null) {
                            $_link = '';
                            if( $row->external_url != null || ($row->url == '#' && $row->external_url != null)){
                                $_link = $row->external_url.' target=_blank ';
                            }else{
                                $_link = site_url($row->url);
                            }

                            $result .= '<li aria-haspopup="true" class="menu-dropdown mega-menu-dropdown">';
                            if( $row->id_parent == null && ($row->url == "#" || $row->url == "" )){
                                $result .= '<a>';
                            }else{
                                $result .= '<a href=' . $_link . '>';
                            }
                            $result .= '<div class="animated x_infinite ' . $animate . '">';
                            $result .= !empty($row->icon) ? '<i class="'.$row->icon.'"></i>&nbsp;' : '';

                            if (has_children($_menus, $row->id_current)) {
                                $result .= $row->name;
                                $result .= '<span class="caret"></span>';
                                $result .= '</div></a>';
                                $result .= build_menu($_menus, $row, $result);
                            }else{
                                $result .= $row->name.'</div></a>';
                            }
                        }//end if
                        $result .= "</li>";
                    }//end foreach
                    echo $result;
                }else{redirect(site_url('/'));}?>
            </ul>
        </div>
        <!-- END MEGA MENU -->
    </div>
</div>