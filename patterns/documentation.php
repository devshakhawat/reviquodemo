<?php
/**
 * Title: ReviQuo documentation page
 * Slug: reviquodemo/documentation
 * Categories: featured, text
 * Keywords: documentation, guide, woocommerce, reviews
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"main","align":"full","className":"wcr-doc-page","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull wcr-doc-page" id="documentation-top">
	<!-- wp:html -->
	<a class="wcr-doc-skip" href="#overview">Skip to documentation</a>
	<svg class="wcr-doc-symbols" aria-hidden="true">
		<symbol id="wcr-doc-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7" fill="none" stroke="currentColor" stroke-width="2"></circle><path d="m16 16 5 5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path></symbol>
		<symbol id="wcr-doc-menu" viewBox="0 0 24 24"><path d="M4 7h16M4 12h16M4 17h16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path></symbol>
		<symbol id="wcr-doc-arrow" viewBox="0 0 24 24"><path d="M5 12h14m-6-6 6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></symbol>
		<symbol id="wcr-doc-play" viewBox="0 0 24 24"><path d="m9 7 8 5-8 5Z" fill="currentColor"></path></symbol>
		<symbol id="wcr-doc-check" viewBox="0 0 24 24"><path d="m5 12 4 4L19 6" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></symbol>
		<symbol id="wcr-doc-star" viewBox="0 0 24 24"><path d="m12 3 2.7 5.5 6.1.9-4.4 4.3 1 6.1-5.4-2.9-5.4 2.9 1-6.1-4.4-4.3 6.1-.9Z" fill="currentColor"></path></symbol>
		<symbol id="wcr-doc-image" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2" fill="none" stroke="currentColor" stroke-width="2"></rect><circle cx="9" cy="9" r="2" fill="currentColor"></circle><path d="m4 17 5-5 4 4 3-3 5 5" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path></symbol>
		<symbol id="wcr-doc-info" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="2"></circle><path d="M12 11v6m0-10h.01" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"></path></symbol>
	</svg>

	<div class="wcr-doc-shell">
		<aside class="wcr-doc-sidebar" id="wcr-doc-sidebar">
			<label class="wcr-doc-search"><svg aria-hidden="true"><use href="#wcr-doc-search"></use></svg><span class="wcr-screen-reader-text">Search documentation sections</span><input type="search" placeholder="Search documentation" autocomplete="off"><kbd>/</kbd></label>
			<p class="wcr-doc-search-status" aria-live="polite"></p>
			<nav aria-label="Documentation sections">
				<p class="wcr-doc-nav-eyebrow">Guide</p>
				<a href="#overview">Overview</a><a href="#requirements">Requirements</a><a href="#plans">Free vs Pro</a><a href="#installation">Installation</a><a href="#settings">Review settings</a><a href="#workflow">Customer workflow</a><a href="#displays">Review displays</a><a href="#reminders">Email reminders</a><a href="#api">REST API</a><a href="#privacy">Privacy &amp; data</a><a href="#developers">Developer reference</a><a href="#troubleshooting">Troubleshooting</a><a href="#launch">Launch checklist</a>
			</nav>
			<a class="wcr-doc-sidebar-help" href="#troubleshooting"><span>?</span><span><strong>Need help?</strong><small>Check troubleshooting first.</small></span></a>
		</aside>

		<article class="wcr-doc-content">
			<section id="overview" class="wcr-doc-hero">
				<button class="wcr-doc-menu-button" type="button" aria-label="Toggle documentation navigation" aria-expanded="false" aria-controls="wcr-doc-sidebar"><svg aria-hidden="true"><use href="#wcr-doc-menu"></use></svg><span>Browse docs</span></button>
				<div class="wcr-doc-breadcrumb">Documentation <span>/</span> Getting started</div>
				<div class="wcr-doc-badge"><span aria-hidden="true"></span> Product guide</div>
				<h1>Customer reviews that<br><em>speak for themselves.</em></h1>
				<p class="wcr-doc-lede">Learn how to collect, manage, and display photo and video reviews in WooCommerce—without replacing the review workflow you already know.</p>
				<div class="wcr-doc-hero-actions"><a class="wcr-doc-button wcr-doc-button--primary" href="#installation">Start setup <svg aria-hidden="true"><use href="#wcr-doc-arrow"></use></svg></a><a class="wcr-doc-button wcr-doc-button--secondary" href="#workflow">See how it works</a></div>
				<div class="wcr-doc-hero-visual" aria-label="ReviQuo feature overview">
					<div class="wcr-doc-review-card"><div class="wcr-doc-review-top"><span class="wcr-doc-avatar">AM</span><span><strong>Amina M.</strong><small>Verified customer</small></span><span class="wcr-doc-stars" aria-label="5 out of 5 stars">★★★★★</span></div><p>“The video made it easy to show the quality. Setup was simple and everything worked right on the product page.”</p><div class="wcr-doc-media-strip"><span class="wcr-doc-media wcr-doc-media--video"><svg aria-hidden="true"><use href="#wcr-doc-play"></use></svg></span><span class="wcr-doc-media wcr-doc-media--photo"><svg aria-hidden="true"><use href="#wcr-doc-image"></use></svg></span><span class="wcr-doc-media wcr-doc-media--photo-alt"><svg aria-hidden="true"><use href="#wcr-doc-image"></use></svg></span></div></div>
					<div class="wcr-doc-float-card wcr-doc-float-card--one"><svg aria-hidden="true"><use href="#wcr-doc-play"></use></svg><span><strong>Video reviews</strong><small>Record or upload</small></span></div>
					<div class="wcr-doc-float-card wcr-doc-float-card--two"><svg aria-hidden="true"><use href="#wcr-doc-star"></use></svg><span><strong>4.9 average</strong><small>From 248 reviews</small></span></div>
				</div>
			</section>

			<section class="wcr-doc-section wcr-doc-intro">
				<p class="wcr-doc-kicker">01 — Introduction</p><h2>What the plugin does</h2><p>ReviQuo extends WooCommerce’s native product-review system. Review text, ratings, approval state, author information, and purchase verification remain in WordPress comments and WooCommerce APIs.</p>
				<div class="wcr-doc-feature-grid"><article><span class="wcr-doc-feature-icon">01</span><h3>Capture richer stories</h3><p>Record webcam video, upload existing videos, and add up to five product photos.</p></article><article><span class="wcr-doc-feature-icon">02</span><h3>Stay in control</h3><p>Moderate media reviews, set required-media rules, and capture customer consent.</p></article><article><span class="wcr-doc-feature-icon">03</span><h3>Build trust anywhere</h3><p>Use native reviews, reusable displays, Elementor, Gutenberg, shortcodes, or REST.</p></article></div>
			</section>

			<section id="requirements" class="wcr-doc-section">
				<p class="wcr-doc-kicker">02 — Before you begin</p><h2>Requirements &amp; compatibility</h2>
				<div class="wcr-doc-requirements"><div><b>WP</b><span><strong>WordPress</strong><small>Version 6.8 or later</small></span></div><div><b>PHP</b><span><strong>PHP</strong><small>Version 7.4 or later</small></span></div><div><b>Woo</b><span><strong>WooCommerce</strong><small>Installed and active</small></span></div><div><b>HTTPS</b><span><strong>Secure connection</strong><small>Required for camera access</small></span></div></div>
				<aside class="wcr-doc-callout"><svg aria-hidden="true"><use href="#wcr-doc-info"></use></svg><div><strong>Hosting note</strong><p>Large video uploads depend on PHP, server, WordPress, and host limits. Check <code>upload_max_filesize</code>, <code>post_max_size</code>, request timeouts, and the WordPress upload limit.</p></div></aside>
			</section>

			<section id="plans" class="wcr-doc-section">
				<p class="wcr-doc-kicker">03 — Feature access</p><h2>Free and Pro at a glance</h2><p>Core collection and display tools are included in both plans. Pro adds advanced layouts, trust signals, structured data, and unlimited reminder rules.</p>
				<div class="wcr-doc-mini-table" role="table" aria-label="Free and Pro feature comparison"><div class="wcr-doc-table-head" role="row"><span role="columnheader">Feature</span><span role="columnheader">Free</span><span role="columnheader">Pro</span></div><div role="row"><span role="cell">Webcam &amp; video upload</span><span role="cell">✓</span><span role="cell">✓</span></div><div role="row"><span role="cell">Up to five photos</span><span role="cell">✓</span><span role="cell">✓</span></div><div role="row"><span role="cell">List review display</span><span role="cell">✓</span><span role="cell">✓</span></div><div role="row"><span role="cell">Grid &amp; masonry layouts</span><span role="cell">—</span><span role="cell">✓</span></div><div role="row"><span role="cell">Verified customer badge</span><span role="cell">—</span><span role="cell">✓</span></div><div role="row"><span role="cell">Unlimited reminder rules</span><span role="cell">1 rule</span><span role="cell">✓</span></div></div>
			</section>

			<section id="installation" class="wcr-doc-section">
				<p class="wcr-doc-kicker">04 — Getting started</p><h2>Installation &amp; first-time setup</h2><p>Keep WooCommerce’s familiar review workflow and layer ReviQuo’s media features on top.</p>
				<ol class="wcr-doc-steps"><li><span>1</span><div><strong>Prepare WooCommerce</strong><p>Install and activate WooCommerce, then enable product reviews and ratings under <b>WooCommerce → Settings → Products</b>.</p></div></li><li><span>2</span><div><strong>Install ReviQuo</strong><p>Install it from <b>Plugins → Add New</b> or upload the <code>product-reviews</code> directory, then activate it.</p></div></li><li><span>3</span><div><strong>Configure the experience</strong><p>Open <b>ReviQuo → Review Settings</b> and work through General, Storefront, Appearance, Recording Modal, and Email reminders.</p></div></li><li><span>4</span><div><strong>Run a real test</strong><p>Submit a review in a private browser window, then verify media, moderation, email delivery, public display, and mobile layout.</p></div></li></ol>
				<aside class="wcr-doc-callout wcr-doc-callout--success"><svg aria-hidden="true"><use href="#wcr-doc-check"></use></svg><div><strong>Activation takes care of the groundwork</strong><p>The reminder database table is created or updated automatically, and older reminder data is scheduled for migration when required.</p></div></aside>
			</section>

			<section id="settings" class="wcr-doc-section">
				<p class="wcr-doc-kicker">05 — Configuration</p><h2>Review settings</h2><p>The plugin settings live under <b>ReviQuo → Review Settings</b>. Every setting is enforced server-side where required—not only hidden in the interface.</p>
				<div class="wcr-doc-tab-row" aria-label="Settings areas"><span class="is-active">General</span><span>Storefront</span><span>Appearance</span><span>Recording modal</span></div>
				<div class="wcr-doc-settings-grid"><article><span class="wcr-doc-setting-icon">●</span><div><h3>Webcam recording</h3><p>Let customers record in-browser with a live preview. Free supports 1–2 minutes; Pro supports 1–10 minutes.</p><small>Requires HTTPS and camera permission</small></div></article><article><span class="wcr-doc-setting-icon">↑</span><div><h3>Video file upload</h3><p>Accept existing MP4, WebM, or MKV files with filename, preview, clear, and independent required-file validation.</p><small>MP4 and WebM have widest playback support</small></div></article><article><span class="wcr-doc-setting-icon">▧</span><div><h3>Photo upload</h3><p>Accept JPEG, PNG, GIF, and WebP in multiple selections, with thumbnails and removal before submit.</p><small>Maximum five photos per review</small></div></article><article><span class="wcr-doc-setting-icon">✓</span><div><h3>Consent checkbox</h3><p>Add required editable consent text and save the site-local submission timestamp as review metadata.</p><small>Adapt the wording to your jurisdiction</small></div></article></div>
				<h3 class="wcr-doc-subheading">Storefront display</h3><div class="wcr-doc-option-list"><div><span>Rating summary</span><small>Average, stars, count, and five-to-one-star histogram</small><b>Free</b></div><div><span>Review filters</span><small>Filter currently rendered reviews by rating or attached media</small><b>Free</b></div><div><span>Rich snippets</span><small>Enrich WooCommerce JSON-LD with review images and video objects</small><b>Pro</b></div><div><span>Verified badge</span><small>Show a styled badge when WooCommerce confirms product ownership</small><b>Pro</b></div></div>
				<h3 class="wcr-doc-subheading">Appearance &amp; recording modal</h3><p>Style record, video upload, photo upload, modal action buttons, and the verified badge. Controls include colors, hover states, labels, icons, borders, radius, typography, spacing, and sizes. The modal also supports title styling, backdrop color and opacity, background color, and a 0–30px radius.</p>
				<aside class="wcr-doc-callout wcr-doc-callout--warning"><span aria-hidden="true">!</span><div><strong>How media moderation works</strong><p>With Auto-approve media off, reviews containing plugin media are forced to Pending. When it is on, normal WordPress and WooCommerce moderation rules decide the status—it does not bypass spam or moderation checks.</p></div></aside>
				<div class="wcr-doc-reset-note"><strong>Reset settings</strong><p>Restores capture, display, consent, and reminder defaults and cancels scheduled reminders. It does not delete reviews, media, saved displays, reminder history, or customer opt-outs.</p></div>
			</section>

			<section id="workflow" class="wcr-doc-section">
				<p class="wcr-doc-kicker">06 — Customer experience</p><h2>From review form to storefront</h2><p>Customers stay on the standard WooCommerce product page throughout the experience.</p>
				<div class="wcr-doc-flow"><div><b>1</b><span><strong>Rate &amp; write</strong><small>Choose stars and enter review text</small></span></div><i>→</i><div><b>2</b><span><strong>Add media</strong><small>Record, upload video, or attach photos</small></span></div><i>→</i><div><b>3</b><span><strong>Moderate</strong><small>Approve through the media review screen</small></span></div><i>→</i><div><b>4</b><span><strong>Build trust</strong><small>Show galleries, badges, filters, and lightbox</small></span></div></div>
				<h3 class="wcr-doc-subheading">Moderating media reviews</h3><p>Open <b>ReviQuo → Reviews</b> to search, sort, paginate, and manage reviews with video or photo metadata. The screen shows author details, product, rating, first-video preview, media counts, date, and status.</p><div class="wcr-doc-chip-row"><span>Approve</span><span>Unapprove</span><span>Mark as spam</span><span>Not spam</span><span>Move to trash</span><span>Restore</span></div>
				<aside class="wcr-doc-callout"><svg aria-hidden="true"><use href="#wcr-doc-info"></use></svg><div><strong>Theme compatibility</strong><p>ReviQuo uses standard WooCommerce review hooks. A theme that replaces the form, metadata, or review list without running those hooks can prevent some enhancements from appearing.</p></div></aside>
			</section>

			<section id="displays" class="wcr-doc-section">
				<p class="wcr-doc-kicker">07 — Reusable displays</p><h2>Show reviews anywhere</h2><p>Create named display configurations under <b>ReviQuo → Review Shortcode</b>, then reuse them without duplicating settings.</p>
				<div class="wcr-doc-layout-cards"><article><span class="wcr-doc-layout-preview wcr-doc-list-preview"><i></i><i></i><i></i></span><strong>List</strong><small>Free and Pro</small></article><article><span class="wcr-doc-layout-preview wcr-doc-grid-preview"><i></i><i></i><i></i><i></i></span><strong>Grid</strong><small>Pro</small></article><article><span class="wcr-doc-layout-preview wcr-doc-masonry-preview"><i></i><i></i><i></i></span><strong>Masonry</strong><small>Pro</small></article></div>
				<div class="wcr-doc-two-col"><article><h3>Choose the source</h3><ul><li><b>Current product</b> — uses the product page context.</li><li><b>Selected products</b> — choose published top-level products.</li><li><b>All products</b> — query all approved product reviews.</li></ul></article><article><h3>Control the layout</h3><ul><li>1–4 columns for desktop, tablet, and mobile.</li><li>Card gap, radius, background, text, accent, and star colors.</li><li>1–24 reviews per load and four sort orders.</li></ul></article></div>
				<div class="wcr-doc-code-block"><div><span>Shortcode</span><button type="button" data-wcr-doc-copy="[reviquo id=&quot;123&quot;]">Copy</button></div><code>[reviquo id=&quot;123&quot;]</code></div>
				<div class="wcr-doc-integration-grid"><article><b>G</b><span><strong>Gutenberg block</strong><small>Dynamic block with refresh, alignment, anchor, and product preview context.</small></span></article><article><b>E</b><span><strong>Elementor widget</strong><small>Uses the same server renderer, filters, lightbox, responsive layout, and Load More.</small></span></article><article><b>↗</b><span><strong>AJAX Load More</strong><small>Each display instance keeps independent filters and pagination state.</small></span></article></div>
			</section>

			<section id="reminders" class="wcr-doc-section">
				<p class="wcr-doc-kicker">08 — Automation</p><h2>Email review reminders</h2><p>Send status-based review requests with delayed delivery, reusable templates, and signed unsubscribe handling.</p>
				<div class="wcr-doc-timeline"><div><span>Order status changes</span><small>A configured WooCommerce trigger matches</small></div><div><span>Reminder is queued</span><small>Sender and template are saved as a snapshot</small></div><div><span>Safety checks run</span><small>Order, opt-out, email, and products are revalidated</small></div><div><span>Email is sent</span><small>Immediately or through WordPress Cron</small></div></div>
				<div class="wcr-doc-two-col"><article><h3>Each rule includes</h3><ul><li>Enable switch and order-status trigger.</li><li>Delay from 0 to 365 days.</li><li>Required subject and HTML-capable message.</li><li>Live preview with sample customer data.</li></ul></article><article><h3>Delivery safeguards</h3><ul><li>Once per order and rule.</li><li>Cancel on Cancelled or Refunded.</li><li>Honor hashed customer opt-outs.</li><li>Hourly fallback processes missed Cron events.</li></ul></article></div>
				<div class="wcr-doc-placeholder-box"><strong>Available placeholders</strong><div><code>{customer_name}</code><code>{order_number}</code><code>{order_date}</code><code>{site_name}</code><code>{site_url}</code><code>{products_list}</code><code>{unsubscribe_link}</code></div></div>
				<aside class="wcr-doc-callout wcr-doc-callout--warning"><span aria-hidden="true">!</span><div><strong>WordPress Cron is traffic-driven</strong><p>Delivery can be late on low-traffic stores. For dependable timing, configure a real server cron before disabling WordPress’s default runner. Use SMTP or a transactional email service and inspect its logs.</p></div></aside>
			</section>

			<section id="api" class="wcr-doc-section wcr-doc-dark-section">
				<p class="wcr-doc-kicker">09 — Headless storefronts</p><h2>Read-only REST API</h2><p>Approved, top-level WooCommerce reviews on published products are available under <code>/wp-json/sktpr/v1</code>. Customer emails, IP addresses, user agents, and unapproved comments are never returned.</p>
				<div class="wcr-doc-api-list"><div><span>GET</span><code>/reviews</code><small>Paginated reviews across all or selected products</small></div><div><span>GET</span><code>/reviews/{id}</code><small>One approved review</small></div><div><span>GET</span><code>/products/{product_id}/review-summary</code><small>Aggregate product rating data</small></div><div><span>GET</span><code>/review-displays</code><small>Published saved displays</small></div><div><span>GET</span><code>/review-displays/{id}/reviews</code><small>Reviews using a display’s saved query</small></div></div>
				<div class="wcr-doc-code-block wcr-doc-dark-code"><div><span>Example request</span></div><code>GET /wp-json/sktpr/v1/reviews?product_id=123&amp;rating=5&amp;media=true&amp;per_page=12</code></div>
				<h3 class="wcr-doc-subheading">Review query parameters</h3><div class="wcr-doc-param-grid"><div><code>product_id</code><span>One product ID</span></div><div><code>product_ids</code><span>Comma-separated or array values</span></div><div><code>page</code><span>Minimum 1</span></div><div><code>per_page</code><span>1–100</span></div><div><code>rating</code><span>Integer 1–5</span></div><div><code>media</code><span>Only reviews with media</span></div><div><code>order</code><span>newest, oldest, highest, lowest</span></div></div><p class="wcr-doc-api-foot">Your site remains responsible for REST cache headers, CORS policy, rate limiting, and CDN behavior.</p>
			</section>

			<section id="privacy" class="wcr-doc-section">
				<p class="wcr-doc-kicker">10 — Privacy &amp; retention</p><h2>Know where every record lives</h2><p>ReviQuo works with WordPress’s existing data model and adds focused metadata, options, saved displays, and reminder records.</p>
				<div class="wcr-doc-data-table"><div><strong>Data</strong><strong>Storage</strong></div><div><span>Review text, author, status, date</span><code>WordPress comments</code></div><div><span>Rating</span><code>WooCommerce rating comment meta</code></div><div><span>Video and photo URLs</span><code>Plugin comment meta</code></div><div><span>Consent timestamp</span><code>sktpr_gdpr_consent comment meta</code></div><div><span>Uploaded files</span><code>WordPress Media Library</code></div><div><span>Saved displays</span><code>Private sktpr_review_sc posts</code></div><div><span>Reminder history</span><code>sktpr_email_reminders custom table</code></div><div><span>Opt-outs</span><code>HMAC hashes in sktpr_email_optouts</code></div></div>
				<div class="wcr-doc-two-col"><article><h3>Export Personal Data</h3><p>Exports Product Review Media and Review Reminder Emails, including media URLs, consent timestamp, product, order, status, and schedule information.</p></article><article><h3>Erase Personal Data</h3><p>Deletes review media attachments and metadata, removes reminder rows and cron events, but retains the unreadable opt-out hash.</p></article></div>
				<aside class="wcr-doc-callout wcr-doc-callout--warning"><span aria-hidden="true">!</span><div><strong>Deactivation is non-destructive</strong><p>It clears scheduled cron hooks but does not delete settings, reviews, attachments, displays, reminder history, the custom table, or opt-outs. Define a store-specific retention plan before permanent removal.</p></div></aside>
			</section>

			<section id="developers" class="wcr-doc-section">
				<p class="wcr-doc-kicker">11 — Developer reference</p><h2>Identifiers, hooks &amp; assets</h2>
				<div class="wcr-doc-identifier-grid"><div><span>Namespace</span><code>SKTPREVIEW</code></div><div><span>Version constant</span><code>SKTPR_VERSION</code></div><div><span>Shortcode</span><code>reviquo</code></div><div><span>Block</span><code>sktpr/reviews</code></div><div><span>Elementor widget</span><code>sktpr-product-reviews</code></div><div><span>REST namespace</span><code>sktpr/v1</code></div></div>
				<h3 class="wcr-doc-subheading">Public extension points</h3><div class="wcr-doc-code-block wcr-doc-code-block--tall"><div><span>PHP</span></div><pre>add_filter( 'sktpr_video_duration_unit', function ( $unit ) {
    return $unit;
} );

add_filter( 'sktpr_templates_folder', function () {
    return 'product-reviews';
} );

add_action( 'pr_fs_loaded', function () {
    // License-dependent integration code.
} );</pre></div>
				<h3 class="wcr-doc-subheading">Build from source</h3><div class="wcr-doc-command-row"><code>npm install</code><code>npm run dev</code><code>npm run watch</code><code>npm run production</code><code>npm run zip</code></div><p>Source lives under <code>dev/admin/</code>, <code>dev/public/</code>, and <code>dev/blocks/reviews/</code>. Compiled assets are written to matching folders under <code>assets/</code>; edit source, not compiled files.</p>
			</section>

			<section id="troubleshooting" class="wcr-doc-section">
				<p class="wcr-doc-kicker">12 — Troubleshooting</p><h2>Common issues, clear fixes</h2><p>Start with the symptom below, then work through the checks in order.</p>
				<div class="wcr-doc-faq"><details><summary>The record button is missing<span aria-hidden="true">+</span></summary><p>Enable Webcam recording, confirm product reviews are active, use a single-product page, and verify the theme applies WooCommerce review-form filters.</p></details><details><summary>The browser cannot access the camera<span aria-hidden="true">+</span></summary><p>Use HTTPS or localhost, allow camera and microphone, close competing apps, and try a current browser with MediaRecorder support.</p></details><details><summary>An uploaded video is not attached<span aria-hidden="true">+</span></summary><p>Prefer MP4 or WebM, check WordPress and PHP upload limits, allowed MIME types, security rules, Media Library, and multipart form data.</p></details><details><summary>A media review is not public<span aria-hidden="true">+</span></summary><p>Check Pending, Spam, and Trash; approve it when auto-approval is off; clear caches; verify the theme executes WooCommerce review hooks.</p></details><details><summary>Filters or Load More do not respond<span aria-hidden="true">+</span></summary><p>Check console errors, jQuery, public.min.js, admin-ajax.php access, and cache or firewall rules affecting unauthenticated AJAX.</p></details><details><summary>Reminder emails are late or missing<span aria-hidden="true">+</span></summary><p>Confirm the master switch, rule, status change, valid email, reviewable products, opt-out state, Cron, SMTP logs, and order notes.</p></details></div>
			</section>

			<section id="launch" class="wcr-doc-section wcr-doc-launch-section">
				<p class="wcr-doc-kicker">13 — Ready to ship</p><h2>Launch checklist</h2><p>Complete this list on a staging store before inviting customers to submit media.</p>
				<div class="wcr-doc-checklist"><label><input type="checkbox"><span>01</span><strong>Reviews and ratings are enabled in WooCommerce</strong></label><label><input type="checkbox"><span>02</span><strong>Logged-in and guest review policies work as intended</strong></label><label><input type="checkbox"><span>03</span><strong>Required-media combinations are practical</strong></label><label><input type="checkbox"><span>04</span><strong>HTTPS recording works on desktop and mobile</strong></label><label><input type="checkbox"><span>05</span><strong>MP4/WebM and five-photo uploads pass host limits</strong></label><label><input type="checkbox"><span>06</span><strong>Consent text and privacy policy are reviewed</strong></label><label><input type="checkbox"><span>07</span><strong>A moderation owner is assigned</strong></label><label><input type="checkbox"><span>08</span><strong>Summary, filters, badges, lightbox, and displays match the theme</strong></label><label><input type="checkbox"><span>09</span><strong>Sender authentication, Cron, templates, delays, and unsubscribe are tested</strong></label><label><input type="checkbox"><span>10</span><strong>REST caching, CORS, and rate controls are set if needed</strong></label><label><input type="checkbox"><span>11</span><strong>Backups and retention cover every stored data type</strong></label></div>
				<div class="wcr-doc-finish-card"><span><svg aria-hidden="true"><use href="#wcr-doc-check"></use></svg></span><div><h3>Your review experience is ready.</h3><p>Run one final order-to-review test, verify it on a real mobile device, then start collecting customer stories.</p></div><a href="#documentation-top">Back to top ↑</a></div>
			</section>
		</article>
	</div>
	<!-- /wp:html -->
</main>
<!-- /wp:group -->
