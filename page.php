<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 2DREI.EINS
 * @subpackage 2DREI.EINS
 * @since 2DREI.EINS
 * @version 0.1
 */

get_header(); ?>

<section class="section">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="entry-header">
                        <?php the_title( '<h1 class="entry-title title is-1">', '</h1>' ); ?>
                    </div>                
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php edit_post_link(); ?>
                    </div>
                </div>
            </div>

        </div>
    </article>
</section>

<?php get_footer(); ?>