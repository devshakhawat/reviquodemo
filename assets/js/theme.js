/**
 * Front-end interactions for ReviQuo.
 */
( function () {
	'use strict';

	const reducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' );

	function initScrollEffects() {
		const header = document.querySelector( '.wcr-site-header' );
		const progress = document.createElement( 'div' );
		let frameRequested = false;

		progress.className = 'wcr-scroll-progress';
		progress.setAttribute( 'aria-hidden', 'true' );
		document.body.appendChild( progress );

		function updateScrollState() {
			const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
			const scrollPercentage = scrollableHeight > 0 ? Math.min( 100, Math.max( 0, ( window.scrollY / scrollableHeight ) * 100 ) ) : 0;

			progress.style.setProperty( '--wcr-scroll-progress', scrollPercentage + '%' );

			if ( header ) {
				header.classList.toggle( 'is-scrolled', window.scrollY > 12 );
			}

			frameRequested = false;
		}

		function requestScrollUpdate() {
			if ( frameRequested ) {
				return;
			}

			frameRequested = true;
			window.requestAnimationFrame( updateScrollState );
		}

		updateScrollState();
		window.addEventListener( 'scroll', requestScrollUpdate, { passive: true } );
		window.addEventListener( 'resize', requestScrollUpdate );
	}

	function initScrollReveals() {
		const revealGroups = [
			{ selector: '.wcr-hero__grid > .wp-block-column', direction: 'right', step: 110 },
			{ selector: '.wcr-logo-row > *', step: 45 },
			{ selector: '.wcr-section-intro > *', step: 90 },
			{ selector: '.wcr-feature-card', step: 70 },
			{ selector: '.wcr-proof__grid > .wp-block-column', direction: 'right', step: 110 },
			{ selector: '.wcr-builder__grid > .wp-block-column', direction: 'right', step: 110 },
			{ selector: '.wcr-workflow-card', step: 80 },
			{ selector: '.wcr-settings-strip', step: 0 },
			{ selector: '.wcr-pricing__intro, .wcr-billing-control', step: 80 },
			{ selector: '.wcr-pricing-card', step: 80 },
			{ selector: '.wcr-price-hero__copy, .wcr-price-hero__visual', direction: 'right', step: 110 },
			{ selector: '.wcr-price-card', step: 70 },
			{ selector: '.wcr-price-proof > div', step: 55 },
			{ selector: '.wcr-price-heading, .wcr-price-table-wrap', step: 70 },
			{ selector: '.wcr-price-faq__intro, .wcr-price-faq__list', direction: 'right', step: 100 },
			{ selector: '.wcr-price-cta > div', step: 100 },
			{ selector: '.wcr-doc-page .wcr-doc-section', step: 0 },
			{ selector: '.wcr-blog-hero__copy, .wcr-blog-hero__aside', direction: 'right', step: 110 },
			{ selector: '.wcr-blog-card', step: 45 },
			{ selector: '.wcr-blog-cta__inner > *', step: 90 },
			{ selector: '.wcr-faq__intro', step: 0 },
			{ selector: '.wcr-faq-item', step: 55 },
			{ selector: '.wcr-cta > *', step: 100 }
		];
		const revealElements = [];

		revealGroups.forEach( function ( group ) {
			document.querySelectorAll( group.selector ).forEach( function ( element, index ) {
				element.dataset.wcrReveal = group.direction && index % 2 === 1 ? group.direction : 'up';
				element.style.setProperty( '--wcr-delay', ( index * group.step ) + 'ms' );
				revealElements.push( element );
			} );
		} );

		if ( ! revealElements.length ) {
			return;
		}

		document.documentElement.classList.add( 'wcr-motion-ready' );

		if ( reducedMotion.matches || ! ( 'IntersectionObserver' in window ) ) {
			revealElements.forEach( function ( element ) {
				element.classList.add( 'is-revealed' );
			} );
			return;
		}

		const observer = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry ) {
				if ( ! entry.isIntersecting ) {
					return;
				}

				entry.target.classList.add( 'is-revealed' );
				observer.unobserve( entry.target );
			} );
		}, {
			rootMargin: '0px 0px -8% 0px',
			threshold: 0.12
		} );

		revealElements.forEach( function ( element ) {
			observer.observe( element );
		} );
	}

	function initDocumentation() {
		const page = document.querySelector( '.wcr-doc-page' );

		if ( ! page ) {
			return;
		}

		const sidebar = page.querySelector( '.wcr-doc-sidebar' );
		const menuButton = page.querySelector( '.wcr-doc-menu-button' );
		const searchInput = page.querySelector( '.wcr-doc-search input' );
		const searchStatus = page.querySelector( '.wcr-doc-search-status' );
		const navLinks = Array.from( page.querySelectorAll( '.wcr-doc-sidebar nav a' ) );
		const sections = navLinks.map( function ( link ) {
			return page.querySelector( link.getAttribute( 'href' ) );
		} ).filter( Boolean );

		function closeSidebar() {
			if ( ! sidebar || ! menuButton ) {
				return;
			}

			sidebar.classList.remove( 'is-open' );
			menuButton.setAttribute( 'aria-expanded', 'false' );
		}

		if ( sidebar && menuButton ) {
			menuButton.addEventListener( 'click', function () {
				const isOpen = sidebar.classList.toggle( 'is-open' );

				menuButton.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
			} );

			navLinks.forEach( function ( link ) {
				link.addEventListener( 'click', closeSidebar );
			} );

			window.addEventListener( 'resize', function () {
				if ( window.innerWidth > 900 ) {
					closeSidebar();
				}
			} );
		}

		if ( searchInput ) {
			searchInput.addEventListener( 'input', function () {
				const query = searchInput.value.trim().toLowerCase();
				let matches = 0;

				navLinks.forEach( function ( link ) {
					const section = page.querySelector( link.getAttribute( 'href' ) );
					const searchableText = ( link.textContent + ' ' + ( section ? section.textContent : '' ) ).toLowerCase();
					const isMatch = ! query || searchableText.includes( query );

					link.hidden = ! isMatch;
					matches += isMatch ? 1 : 0;
				} );

				if ( searchStatus ) {
					searchStatus.textContent = query ? matches + ' documentation section' + ( matches === 1 ? '' : 's' ) + ' found.' : '';
				}
			} );

			document.addEventListener( 'keydown', function ( event ) {
				const target = event.target;
				const isTyping = target && ( target.matches( 'input, textarea, select' ) || target.isContentEditable );

				if ( event.key === '/' && ! isTyping ) {
					event.preventDefault();
					searchInput.focus();
				}
			} );
		}

		if ( 'IntersectionObserver' in window && sections.length ) {
			const sectionObserver = new IntersectionObserver( function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( ! entry.isIntersecting ) {
						return;
					}

					navLinks.forEach( function ( link ) {
						const isCurrent = link.getAttribute( 'href' ) === '#' + entry.target.id;

						if ( isCurrent ) {
							link.setAttribute( 'aria-current', 'location' );
						} else {
							link.removeAttribute( 'aria-current' );
						}
					} );
				} );
			}, { rootMargin: '-28% 0px -62% 0px', threshold: 0 } );

			sections.forEach( function ( section ) {
				sectionObserver.observe( section );
			} );
		}

		page.querySelectorAll( '[data-wcr-doc-copy]' ).forEach( function ( button ) {
			button.addEventListener( 'click', function () {
				const value = button.dataset.wcrDocCopy;

				if ( ! navigator.clipboard || ! value ) {
					return;
				}

				navigator.clipboard.writeText( value ).then( function () {
					const originalText = button.textContent;

					button.textContent = 'Copied';
					window.setTimeout( function () {
						button.textContent = originalText;
					}, 1600 );
				} );
			} );
		} );
	}

	function initHeroWordSwap() {
		const wordSets = [
			{
				selector: '.wcr-hero__title em',
				words: [ 'see.', 'trust.', 'remember.' ]
			},
			{
				selector: '.wcr-blog-title em',
				words: [ 'moves product.', 'builds trust.', 'wins attention.' ]
			}
		];

		if ( reducedMotion.matches ) {
			return;
		}

		wordSets.forEach( function ( wordSet ) {
			const word = document.querySelector( wordSet.selector );
			let currentWord = 0;

			if ( ! word ) {
				return;
			}

			word.classList.add( 'wcr-word-swap' );

			window.setInterval( function () {
				currentWord = ( currentWord + 1 ) % wordSet.words.length;
				word.classList.remove( 'wcr-word-swap' );
				word.textContent = wordSet.words[ currentWord ];
				void word.offsetWidth;
				word.classList.add( 'wcr-word-swap' );
			}, 2300 );
		} );
	}

	function initPricingToggle( section ) {
		const buttons = section.querySelectorAll( '[data-wcr-billing]' );
		const status = section.querySelector( '.wcr-billing-status' );

		if ( ! buttons.length ) {
			return;
		}

		function selectBilling( billing ) {
			section.dataset.billing = billing;

			buttons.forEach( function ( button ) {
				const selected = button.dataset.wcrBilling === billing;
				button.classList.toggle( 'is-active', selected );
				button.setAttribute( 'aria-pressed', selected ? 'true' : 'false' );
			} );

			section.querySelectorAll( '[data-wcr-price], [data-wcr-period]' ).forEach( function ( pricePart ) {
				const period = pricePart.dataset.wcrPrice || pricePart.dataset.wcrPeriod;
				pricePart.hidden = period !== billing;
			} );

			section.querySelectorAll( '[data-wcr-plan]' ).forEach( function ( planLink ) {
				const checkoutUrl = new URL( planLink.href, window.location.origin );

				checkoutUrl.searchParams.set( 'billing', billing );
				planLink.href = checkoutUrl.toString();
			} );

			if ( status ) {
				status.textContent = ( billing === 'lifetime' ? 'Lifetime deal' : 'Yearly pricing' ) + ' selected.';
			}
		}

		buttons.forEach( function ( button ) {
			button.addEventListener( 'click', function () {
				selectBilling( button.dataset.wcrBilling );
			} );
		} );
	}

	function init() {
		initScrollEffects();
		initScrollReveals();
		initHeroWordSwap();
		initDocumentation();
		document.querySelectorAll( '.wcr-pricing, .wcr-price-plans' ).forEach( initPricingToggle );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
}() );
