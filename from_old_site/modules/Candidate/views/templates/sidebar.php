<style>
    .gi-2x{font-size: 2em;}
    .gi-3x{font-size: 3em;}
    .gi-4x{font-size: 4em;}
    .gi-5x{font-size: 5em;}
</style>

<?php $school = $this->candidate->get_school();?>

<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view sticky">

                    <div class="navbar nav_title" style="border: 0;">
                        <!--a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a-->
                    </div>
                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>
                                <?php
                                    switch ($school):
                                    
                                        case 'nursing':
                                            echo "show nursing logo";
                                            break;
                                        case 'medlab':
                                            echo "show medlab logo";
                                        case 'midwifery':
                                            echo "show midwifery logo";
                                    endswitch;
                                ?>
                            </h3>
                            <div class="clearfix"></div>
                            
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-cog"></i>Personal Details<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo $nav_url; ?>profile">Profile Update</a>
                                        </li>
                                        <li><a href="<?php echo $nav_url; ?>passport_upload">Passport Upload</a>
                                        </li>
                                        <li><a href="<?php echo $nav_url; ?>contact">Contact</a>
                                        </li>
                                        <li><a href="<?php echo $nav_url; ?>next_kin">Next of Kin Contact</a>
                                        </li>
                                        <li><a href="<?php echo $nav_url; ?>change_password">Change Password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-graduation-cap"></i>General Qualification<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo $nav_url; ?>olevel">Olevel(First Sitting)</a>
                                        </li>
										
                                        <li><a href="<?php echo $nav_url; ?>olevel2">Olevel(Second Sitting)</a>
                                        </li>
										
                                        <!---li><a href="< ?php echo $nav_url; ?>jamb">JAMB</a>
                                        </li-->
                                    
                                    </ul>
                                </li>
                                 <?php if($school != 'midwifery'){?>
                                <?php //do nothing ?>
                                <?php }else{?>
                                <li><a><i class="fa fa-graduation-cap"></i>Midwifery Qualification<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo $nav_url; ?>history">Employment History</a>
                                        </li>
										
                                        <!--li><a href="< ?php echo $nav_url; ?>educational">Educational Qualification</a>
                                        </li>
										
                                        <li><a href="< ?php echo $nav_url; ?>jamb">Professional Qualifications</a>
                                        </li-->
                                    
                                    </ul>
                                </li>
                                <?php } ?>
                                <li><a><i class="fa fa-graduation-cap"></i>Preview and Submit<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="<?php echo $nav_url; ?>preview">Preview Application</a>
                                        </li>                    
                                        <li><a href="<?php echo $nav_url; ?>submit">Complete Application</a>
                                        </li>                    
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                   
                </div>
            </div>
