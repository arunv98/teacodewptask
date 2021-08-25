<?php /* Template Name: Change Email Tempalet */ ?>

<?php get_header(); ?>

<?php 

    $ErrorMsg = '';
    $SucessMsg = '';

    if(isset($_POST['old_email']) && isset($_POST['new_email'])){

        $UserDetail = get_user_by( 'email', $_POST['old_email'] );

        //echo "<pre>";print_r($UserDetail);

        $isAdmin = $UserDetail->caps['administrator'];

        if($isAdmin){


            $ErrorMsg = "You can not change administrator Email";

        }else{

            if(!empty($UserDetail)){

                $UserDetailNew = get_user_by( 'email', $_POST['new_email'] );

                if(!empty($UserDetailNew)){

                    $ErrorMsg = "Email".$_POST['new_email']." Alredy Exist";

                }else{

                    $args = array(
                    'ID'         => $UserDetail->data->ID,
                    'user_email' => esc_attr( $_POST['new_email'] )
                    );

                    wp_update_user( $args );

                    $SucessMsg = "Your Email Changed successfully from ".$_POST['old_email']." To ".$_POST['new_email']; 
                }

            }else{

                $ErrorMsg = "Please Enter Valid Email ID"; 
            }
        }



    }

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">

            <div class="left_contetnt">
                <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
                    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
                    <?php endif; ?>
            </div>

            <div class="right_content">

                <div style="color: red;">
                    <?php echo $ErrorMsg; ?>
                </div>
                
                <div style="color: #563d7c;">
                    <?php echo $SucessMsg; ?>
                </div>

                <form action="" method="post">

                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="old_email">Email Old Email</label>
                        <input type="email" name="old_email" class="form-control" id="old_email" placeholder="Enter Old email" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 10px;">
                        <label for="new_email">Email New Email</label>
                        <input type="email" name="new_email" class="form-control" id="new_email" placeholder="Enter New email" required>
                    </div>

                    <input type="submit" name="change_email" value="Change Email">
                </form>



            </div>  

        </div><!-- .entry-content -->

        <?php if ( get_edit_post_link() ) : ?>
            <footer class="entry-footer default-max-width">
                <?php
                    edit_post_link(
                    sprintf(
                    /* translators: %s: Name of current post. Only visible to screen readers. */
                    esc_html__( 'Edit %s', 'twentytwentyone' ),
                    '<span class="screen-reader-text">' . get_the_title() . '</span>'
                    ),
                    '<span class="edit-link">',
                    '</span>'
                    );
                ?>
            </footer><!-- .entry-footer -->
            <?php endif; ?>
    </article>

</div><!-- .content-area -->

<?php get_footer(); ?>