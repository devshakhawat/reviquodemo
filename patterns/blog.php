<?php
/**
 * Title: ReviQuo blog
 * Slug: reviquo/blog
 * Categories: featured, posts
 * Keywords: blog, journal, articles, woocommerce
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"main","align":"full","className":"wcr-blog-page","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull wcr-blog-page" id="blog-top">
	<!-- wp:html --><a class="wcr-blog-skip" href="#wcr-latest-stories">Skip to latest stories</a><!-- /wp:html -->
	<!-- wp:group {"tagName":"section","align":"full","className":"wcr-blog-hero","layout":{"type":"default"}} -->
	<section class="wp-block-group alignfull wcr-blog-hero">
		<!-- wp:group {"align":"wide","className":"wcr-blog-hero__inner wcr-rail","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide wcr-blog-hero__inner wcr-rail">
			<!-- wp:columns {"verticalAlignment":"bottom","className":"wcr-blog-hero__grid"} -->
			<div class="wp-block-columns are-vertically-aligned-bottom wcr-blog-hero__grid">
				<!-- wp:column {"verticalAlignment":"bottom","width":"68%","className":"wcr-blog-hero__copy"} -->
				<div class="wp-block-column is-vertically-aligned-bottom wcr-blog-hero__copy" style="flex-basis:68%">
					<!-- wp:paragraph {"className":"wcr-blog-eyebrow"} --><p class="wcr-blog-eyebrow"><span aria-hidden="true"></span> The ReviQuo journal</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":1,"className":"wcr-blog-title"} --><h1 class="wp-block-heading wcr-blog-title">Ideas for customer proof<br>that <em>moves product.</em></h1><!-- /wp:heading -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"verticalAlignment":"bottom","width":"32%","className":"wcr-blog-hero__aside"} -->
				<div class="wp-block-column is-vertically-aligned-bottom wcr-blog-hero__aside" style="flex-basis:32%">
					<!-- wp:paragraph --><p>Practical field notes on visual reviews, customer trust, and building WooCommerce stores people believe in.</p><!-- /wp:paragraph -->
					<!-- wp:html --><div class="wcr-blog-hero__note"><span aria-hidden="true">↘</span> Fresh thinking, no filler.</div><!-- /wp:html -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"section","align":"wide","className":"wcr-blog-feed wcr-rail","layout":{"type":"default"}} -->
	<section class="wp-block-group alignwide wcr-blog-feed wcr-rail" aria-labelledby="wcr-latest-stories">
		<!-- wp:group {"className":"wcr-blog-toolbar","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group wcr-blog-toolbar">
			<!-- wp:heading {"level":2,"className":"wcr-blog-feed__title"} --><h2 class="wp-block-heading wcr-blog-feed__title" id="wcr-latest-stories">Latest stories</h2><!-- /wp:heading -->
			<!-- wp:group {"className":"wcr-blog-filters","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group wcr-blog-filters">
				<!-- wp:html --><a class="wcr-blog-filter is-current" href="/blog/" aria-current="page">All stories</a><!-- /wp:html -->
				<!-- wp:categories {"showPostCounts":false,"showHierarchy":false,"className":"wcr-blog-categories"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query {"queryId":7,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"wcr-blog-query"} -->
		<div class="wp-block-query wcr-blog-query">
			<!-- wp:post-template {"className":"wcr-blog-grid","layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"tagName":"article","className":"wcr-blog-card","layout":{"type":"default"}} -->
				<article class="wp-block-group wcr-blog-card">
					<!-- wp:group {"className":"wcr-blog-card__media","layout":{"type":"default"}} -->
					<div class="wp-block-group wcr-blog-card__media">
						<!-- wp:html --><div class="wcr-blog-card__art" aria-hidden="true"><span></span><span></span><i>R</i></div><!-- /wp:html -->
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","className":"wcr-blog-card__image"} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"wcr-blog-card__body","layout":{"type":"default"}} -->
					<div class="wp-block-group wcr-blog-card__body">
						<!-- wp:group {"className":"wcr-blog-card__meta","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group wcr-blog-card__meta">
							<!-- wp:post-terms {"term":"category","separator":" · ","className":"wcr-blog-card__category"} /-->
							<!-- wp:post-date {"format":"M j, Y"} /-->
						</div>
						<!-- /wp:group -->
						<!-- wp:post-title {"isLink":true,"className":"wcr-blog-card__title"} /-->
						<!-- wp:post-excerpt {"moreText":"","excerptLength":22,"className":"wcr-blog-card__excerpt"} /-->
						<!-- wp:read-more {"content":"Read story <span aria-hidden=\"true\">↗</span>","className":"wcr-blog-card__link"} /-->
					</div>
					<!-- /wp:group -->
				</article>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"className":"wcr-blog-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous {"label":"← Newer stories"} /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next {"label":"Older stories →"} /-->
			<!-- /wp:query-pagination -->

			<!-- wp:query-no-results -->
				<!-- wp:group {"className":"wcr-blog-empty","layout":{"type":"constrained"}} -->
				<div class="wp-block-group wcr-blog-empty"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">The first story is on its way.</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Publish a WordPress post and it will appear here automatically.</p><!-- /wp:paragraph --></div>
				<!-- /wp:group -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</section>
	<!-- /wp:group -->

	<!-- wp:group {"tagName":"aside","align":"wide","className":"wcr-blog-cta wcr-rail","layout":{"type":"default"}} -->
	<aside class="wp-block-group alignwide wcr-blog-cta wcr-rail">
		<!-- wp:group {"className":"wcr-blog-cta__inner","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group wcr-blog-cta__inner">
			<!-- wp:group {"className":"wcr-blog-cta__copy","layout":{"type":"default"}} -->
			<div class="wp-block-group wcr-blog-cta__copy"><!-- wp:paragraph {"className":"wcr-blog-eyebrow"} --><p class="wcr-blog-eyebrow">Ready to turn insight into proof?</p><!-- /wp:paragraph --><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Give every product a customer story shoppers can <em>see.</em></h2><!-- /wp:heading --></div>
			<!-- /wp:group -->
			<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"wcr-button-arrow"} --><div class="wp-block-button wcr-button-arrow"><a class="wp-block-button__link wp-element-button" href="/#features">Explore ReviQuo <span aria-hidden="true">↗</span></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</aside>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
