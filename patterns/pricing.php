<?php
/**
 * Title: ReviQuo pricing page
 * Slug: reviquodemo/pricing
 * Categories: featured, call-to-action
 * Keywords: pricing, plans, woocommerce, reviews
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"main","align":"full","className":"wcr-price-page","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull wcr-price-page" id="top">
	<!-- wp:html -->
	<a class="wcr-price-page__skip" href="#pricing">Skip to pricing</a>
	<svg class="wcr-price-page__symbols" aria-hidden="true">
		<symbol id="wcr-pricing-check" viewBox="0 0 20 20"><path d="m5 10 3 3 7-7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></symbol>
	</svg>

	<section class="wcr-price-hero" aria-labelledby="wcr-price-title">
		<div class="wcr-price-hero__ring wcr-price-hero__ring--one" aria-hidden="true"></div>
		<div class="wcr-price-hero__ring wcr-price-hero__ring--two" aria-hidden="true"></div>
		<div class="wcr-price-hero__copy">
			<p class="wcr-price-eyebrow"><span aria-hidden="true"></span> Simple pricing for visual WooCommerce reviews</p>
			<h1 id="wcr-price-title">Customer proof that fits your <em>next chapter.</em></h1>
			<p>Collect authentic video and photo reviews, build trust faster, and give every product page a customer story shoppers can see.</p>
			<div class="wcr-price-hero__actions">
				<a class="wcr-price-button wcr-price-button--primary" href="#pricing">Choose your plan</a>
				<a class="wcr-price-text-link" href="#compare">Compare all features <span aria-hidden="true">→</span></a>
			</div>
			<div class="wcr-price-trust" aria-label="Purchase benefits">
				<span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>14-day money-back guarantee</span>
				<span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Secure checkout</span>
				<span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Instant download</span>
			</div>
		</div>
		<div class="wcr-price-hero__visual" aria-label="Example ReviQuo visual customer review">
			<article class="wcr-price-review-card">
				<div class="wcr-price-review-card__head">
					<span class="wcr-price-avatar" aria-hidden="true">AM</span>
					<span><strong>Alex Morgan</strong><small>Verified customer</small></span>
					<span class="wcr-price-stars" aria-label="5 out of 5 stars">★★★★★</span>
				</div>
				<div class="wcr-price-video" aria-hidden="true">
					<span class="wcr-price-video__shape wcr-price-video__shape--one"></span>
					<span class="wcr-price-video__shape wcr-price-video__shape--two"></span>
					<span class="wcr-price-video__play"><i></i></span>
					<small>0:42</small>
				</div>
				<p>“The setup was effortless, and our customers started sharing real product videos right away.”</p>
			</article>
			<div class="wcr-price-float wcr-price-float--top"><span aria-hidden="true"></span> Video review received</div>
			<div class="wcr-price-float wcr-price-float--bottom"><strong>4.9</strong><span>Average rating<br>from visual reviews</span></div>
		</div>
	</section>

	<section class="wcr-price-plans" id="pricing" aria-labelledby="wcr-plans-title">
		<div class="wcr-price-heading">
			<p class="wcr-price-kicker">Pricing plans</p>
			<h2 id="wcr-plans-title">Start collecting better reviews today</h2>
			<p>All plans include the core visual-review experience. Pick the license that matches how many stores you manage.</p>
		</div>
		<div class="wcr-price-billing">
			<div class="wcr-price-billing__toggle" role="group" aria-label="Choose billing period">
				<button type="button" class="is-active" data-wcr-billing="yearly" aria-pressed="true">Annual</button>
				<button type="button" data-wcr-billing="lifetime" aria-pressed="false">Lifetime <small>Save more</small></button>
			</div>
			<p class="wcr-billing-status" aria-live="polite">Yearly pricing selected.</p>
		</div>
		<div class="wcr-price-grid">
			<article class="wcr-price-card">
				<div class="wcr-price-card__head"><span>For one focused store</span><h3>Personal</h3><p>Everything you need to collect and showcase visual customer proof.</p></div>
				<div class="wcr-price-card__price" aria-label="Personal plan price"><span>$</span><strong data-wcr-price="yearly">59</strong><strong data-wcr-price="lifetime" hidden>149</strong><small data-wcr-period="yearly">/ year</small><small data-wcr-period="lifetime" hidden>/ once</small></div>
				<p class="wcr-price-card__sites"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>License for 1 website</p>
				<div class="wcr-price-card__features"><strong>What's included</strong><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Video recording &amp; uploads</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Up to 5 photos per review</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Rating and media filters</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Verified customer badges</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Responsive media lightbox</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>1 year of updates &amp; support</span></div>
				<a class="wcr-price-button wcr-price-button--ghost wcr-price-card__button" data-wcr-plan="personal" href="/my-account/?plan=personal&amp;billing=yearly">Get Personal <span aria-hidden="true">↗</span></a>
			</article>
			<article class="wcr-price-card wcr-price-card--featured">
				<p class="wcr-price-card__popular">Most popular</p>
				<div class="wcr-price-card__head"><span>Best for growing brands</span><h3>Business</h3><p>Turn more post-purchase experiences into persuasive visual reviews.</p></div>
				<div class="wcr-price-card__price" aria-label="Business plan price"><span>$</span><strong data-wcr-price="yearly">129</strong><strong data-wcr-price="lifetime" hidden>299</strong><small data-wcr-period="yearly">/ year</small><small data-wcr-period="lifetime" hidden>/ once</small></div>
				<p class="wcr-price-card__sites"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>License for 5 websites</p>
				<div class="wcr-price-card__features"><strong>What's included</strong><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Everything in Personal</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Automated review reminders</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Reusable review shortcodes</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>List and grid layouts</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Product-specific targeting</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Priority email support</span></div>
				<a class="wcr-price-button wcr-price-button--primary wcr-price-card__button" data-wcr-plan="business" href="/my-account/?plan=business&amp;billing=yearly">Get Business <span aria-hidden="true">↗</span></a>
			</article>
			<article class="wcr-price-card">
				<div class="wcr-price-card__head"><span>For client portfolios</span><h3>Agency</h3><p>A flexible license for agencies managing multiple WooCommerce stores.</p></div>
				<div class="wcr-price-card__price" aria-label="Agency plan price"><span>$</span><strong data-wcr-price="yearly">249</strong><strong data-wcr-price="lifetime" hidden>549</strong><small data-wcr-period="yearly">/ year</small><small data-wcr-period="lifetime" hidden>/ once</small></div>
				<p class="wcr-price-card__sites"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>License for 25 websites</p>
				<div class="wcr-price-card__features"><strong>What's included</strong><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Everything in Business</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Use on up to 25 websites</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Client-site activation</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Central license management</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Early access to new features</span><span><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg>Priority technical support</span></div>
				<a class="wcr-price-button wcr-price-button--ghost wcr-price-card__button" data-wcr-plan="agency" href="/my-account/?plan=agency&amp;billing=yearly">Get Agency <span aria-hidden="true">↗</span></a>
			</article>
		</div>
		<p class="wcr-price-plans__note">Prices shown in USD. Taxes may apply based on your location.</p>
	</section>

	<section class="wcr-price-proof" id="features" aria-label="Product benefits">
		<div><strong>Native WooCommerce reviews</strong><span>Keep your familiar moderation flow</span></div>
		<div><strong>Record or upload</strong><span>Video and photos from the product page</span></div>
		<div><strong>Flexible display</strong><span>Filters, lightbox, lists, and grids</span></div>
		<div><strong>Built for conversion</strong><span>Make customer proof easy to explore</span></div>
	</section>

	<section class="wcr-price-compare" id="compare" aria-labelledby="wcr-compare-title">
		<div class="wcr-price-heading wcr-price-heading--compact"><p class="wcr-price-kicker">Plan comparison</p><h2 id="wcr-compare-title">Everything you need, clearly compared</h2></div>
		<div class="wcr-price-table-wrap" tabindex="0" role="region" aria-label="Scrollable plan comparison">
			<table>
				<thead><tr><th scope="col">Feature</th><th scope="col">Personal</th><th scope="col" class="is-business">Business</th><th scope="col">Agency</th></tr></thead>
				<tbody>
					<tr><th scope="row">Direct webcam recording</th><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td class="is-business"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td></tr>
					<tr><th scope="row">Video and photo uploads</th><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td class="is-business"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td></tr>
					<tr><th scope="row">Review filters and lightbox</th><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td class="is-business"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td></tr>
					<tr><th scope="row">Automated reminder emails</th><td><span aria-label="Not included">—</span></td><td class="is-business"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td></tr>
					<tr><th scope="row">Shortcode builder</th><td><span aria-label="Not included">—</span></td><td class="is-business"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td></tr>
					<tr><th scope="row">Priority support</th><td><span aria-label="Not included">—</span></td><td class="is-business"><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td><td><svg aria-hidden="true"><use href="#wcr-pricing-check"></use></svg><span class="wcr-screen-reader-text">Included</span></td></tr>
					<tr><th scope="row">Website activations</th><td>1</td><td class="is-business">5</td><td>25</td></tr>
				</tbody>
			</table>
		</div>
	</section>

	<section class="wcr-price-faq" id="faq" aria-labelledby="wcr-price-faq-title">
		<div class="wcr-price-faq__intro"><p class="wcr-price-kicker">Questions, answered</p><h2 id="wcr-price-faq-title">Good to know before you choose</h2><p>Not sure which license fits? Compare activations and included features side by side.</p><a class="wcr-price-text-link" href="#compare">Review plan comparison <span aria-hidden="true">→</span></a></div>
		<div class="wcr-price-faq__list">
			<details open><summary>Does ReviQuo replace WooCommerce reviews?<span aria-hidden="true"></span></summary><p>No. ReviQuo extends the native WooCommerce review system, so your existing moderation workflow and review data stay familiar.</p></details>
			<details><summary>Can customers record a video without leaving the product page?<span aria-hidden="true"></span></summary><p>Yes. Customers can record with their webcam or upload a pre-recorded video directly from the standard product review form.</p></details>
			<details><summary>What happens when an annual license expires?<span aria-hidden="true"></span></summary><p>The plugin continues to work, but access to new updates and support ends until the license is renewed.</p></details>
			<details><summary>Can I upgrade later?<span aria-hidden="true"></span></summary><p>Yes. You can start with Personal and move to a larger license as your store or client portfolio grows.</p></details>
		</div>
	</section>

	<section class="wcr-price-cta" id="buy" aria-labelledby="wcr-price-cta-title">
		<div><p class="wcr-price-kicker">Ready when you are</p><h2 id="wcr-price-cta-title">Turn customer experiences into your strongest sales proof.</h2></div>
		<div><a class="wcr-price-button wcr-price-button--white" href="#pricing">Choose your plan</a><span>No setup fee. Get started in minutes.</span></div>
	</section>
	<!-- /wp:html -->
</main>
<!-- /wp:group -->
