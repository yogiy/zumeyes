var isactive = false;
function toggleSidebar(ref) {
	ref.classList.toggle('active');
	document.getElementById("sidebar").classList.toggle('active');
	if (isactive) {
		document.getElementById("overlay").style.display = "none";
		isactive = false;
	}
	else {
		document.getElementById("overlay").style.display = "block";
		isactive = true;
	}
	//console.log('hi: ', isactive);
}

$(function () {

	$(document).ready(function () {
		var header = $('#header');
		if (header.length) {
			var stickyNavTop = $('#header').offset().top;
			var stickyNav = function () {
				var scrollTop = $(window).scrollTop(); // our current vertical position from the top

				if (scrollTop > stickyNavTop) {
					$('#header').addClass('sticky');
				} else {
					$('#header').removeClass('sticky');
				}
			};

			stickyNav();
			$(window).scroll(function () {
				stickyNav();
			});
		}
	});

});
function sticktothetop() {
	if (screen.width <= 1900) {
		var window_top = $(window).scrollTop();
		var stickhere = $('#stick-here');
		if (stickhere.length) {
			var top = $('#stick-here').offset().top;
			if (window_top > top) {
				//$('#filter').addClass('stickyFilter');
				//$('#stick-here').height($('#rightFilter').outerHeight());
			} else {
				//$('#filter').removeClass('stickyFilter');
				$('#stick-here').height(0);
			}
		}
	}
}


$(function () {
	// SIGNUP PAGE JQUERY functions
	$('#registerBtn').on('click', function (event) {
		$('#tab-2').click();
	});

	$('#loginBtn').on('click', function (event) {
		$('#tab-1').click();
	});

	$('#tab-2').on('click', function (event) {
		$('#loginSignupdiv').removeClass('login');
		$('#loginSignupdiv').addClass('signup');
	});

	$('#tab-1').on('click', function (event) {
		$('#loginSignupdiv').removeClass('signup');
		$('#loginSignupdiv').addClass('login');
	});

	// search icon on homepage at 768 and lower resolutions
	$('#searchIcon').on('click', function (event) {
		if (screen.width <= 1024) {
			$('#hidenSearchField').toggle('slow');
			$('#hidenSearchField :input#search').toggle('slow');
		}
	});

	var filterSelected = "";
	showHideFilter = function (_filt) {
		console.log("Filter selected: " + _filt);

		$('#colorFilterContent div.filterList').hide('slow');
		$('#colorFilter i#minus').hide('slow');
		$('#colorFilter i#plus').show('slow');

		$('#genderFilter div.filterList').hide('slow');
		$('#genderFilter i#minus').hide('slow');
		$('#genderFilter i#plus').show('slow');

		$('#shapeFilterContent div.filterList').hide('slow');
		$('#shapeFilter i#minus').hide('slow');
		$('#shapeFilter i#plus').show('slow');

		$('#materialFilterContent div.filterList').hide('slow');
		$('#materialFilter i#minus').hide('slow');
		$('#materialFilter i#plus').show('slow');

		$('#fitFilterContent div.filterList').hide('slow');
		$('#fitFilter i#minus').hide('slow');
		$('#fitFilter i#plus').show('slow');

		$('#purposeFilterContent div.filterList').hide('slow');
		$('#purposeFilter i#minus').hide('slow');
		$('#purposeFilter i#plus').show('slow');

		$('#brandFilterContent div.filterList').hide('slow');
		$('#brandFilter i#minus').hide('slow');
		$('#brandFilter i#plus').show('slow');

		$('#lenseTypeFilterContent div.filterList').hide('slow');
		$('#lenseTypeFilter i#minus').hide('slow');
		$('#lenseTypeFilter i#plus').show('slow');

		switch (_filt) {
			case 'colorFilter':
				if (filterSelected !== 'colorFilter') {
					$('#colorFilterContent div.filterList').show('slow');
					$('#colorFilter i#minus').show('slow');
					$('#colorFilter i#plus').hide('slow');
					filterSelected = _filt;
				} else {
					filterSelected = "";
				}
				break;

			case 'genderFilter':
				if (filterSelected !== 'genderFilter') {
					$('#genderFilterContent div.filterList').show('slow');
					$('#genderFilter i#minus').show('slow');
					$('#genderFilter i#plus').hide('slow');
					filterSelected = _filt;
				} else {
					filterSelected = "";
				}
				break;

			case 'shapeFilter':
				if (filterSelected !== 'shapeFilter') {
					$('#shapeFilterContent div.filterList').show('slow');
					$('#shapeFilter i#minus').show('slow');
					$('#shapeFilter i#plus').hide('slow');
					filterSelected = _filt;
				} else {
					filterSelected = "";
				}
				break;

			case 'materialFilter':
				if (filterSelected !== 'materialFilter') {
					$('#materialFilterContent div.filterList').show('slow');
					$('#materialFilter i#minus').show('slow');
					$('#materialFilter i#plus').hide('slow');
					filterSelected = _filt;
				} else {
					filterSelected = "";
				}
				break;

			case 'fitFilter':
				if (filterSelected !== 'fitFilter') {
					$('#fitFilterContent div.filterList').show('slow');
					$('#fitFilter i#minus').show('slow');
					$('#fitFilter i#plus').hide('slow');
					filterSelected = _filt;
				} else {
					filterSelected = "";
				}
				break;

			case 'purposeFilter':
				if (filterSelected !== 'purposeFilter') {
					$('#purposeFilterContent div.filterList').show('slow');
					$('#purposeFilter i#minus').show('slow');
					$('#purposeFilter i#plus').hide('slow');
					filterSelected = _filt;
				} else {
					filterSelected = "";
				}
				break;

			case 'brandFilter':
				if (filterSelected !== 'brandFilter') {
					$('#brandFilterContent div.filterList').show('slow');
					$('#brandFilter i#minus').show('slow');
					$('#brandFilter i#plus').hide('slow');
					filterSelected = _filt;
				} else {
					filterSelected = "";
				}
				break;

			case 'lenseTypeFilter':
				if (filterSelected !== 'lenseTypeFilter') {
					$('#lenseTypeFilterContent div.filterList').show('slow');
					$('#lenseTypeFilter i#minus').show('slow');
					$('#lenseTypeFilter i#plus').hide('slow');
					filterSelected = _filt;
				} else {
					filterSelected = "";
				}
				break;
		}
	};

	$('#colorFilter div.filterName').on('click', function (event) {
		event.preventDefault();
		showHideFilter('colorFilter');
	});

	$('#genderFilter div.filterName').on('click', function (event) {
		event.preventDefault();
		showHideFilter("genderFilter");
	});

	$('#shapeFilter div.filterName').on('click', function (event) {
		event.preventDefault();
		showHideFilter("shapeFilter");
	});

	$('#materialFilter div.filterName').on('click', function (event) {
		event.preventDefault();
		showHideFilter('materialFilter');
	});

	$('#fitFilter div.filterName').on('click', function (event) {
		event.preventDefault();
		showHideFilter('fitFilter');
	});

	$('#purposeFilter div.filterName').on('click', function (event) {
		event.preventDefault();
		showHideFilter('purposeFilter');
	});

	$('#brandFilter div.filterName').on('click', function (event) {
		event.preventDefault();
		showHideFilter('brandFilter');
	});

	$('#lenseTypeFilter div.filterName').on('click', function (event) {
		event.preventDefault();
		showHideFilter('lenseTypeFilter');
	});

	// displayblock to select label in filter
	$('div.filterList label').on('click', function (event) {
		//event.preventDefault();
		if ($(this).find('div.select').css('display') == 'block') {
			$(this).find('div.select').css("display", "none");
		} else {
			$(this).find('div.select').css("display", "block");
		}
	});

	// show side filter
	$('#slideFilterTab').on('click', function (event) {
		if (screen.width <= 768) {
			$('section.productListSection div.filterSection').show('slow');
			$('#filterOverlay').show();
		}
	});
	// close side filter
	$('#filterHead button').on('click', function (event) {
		event.preventDefault();
		$('section.productListSection div.filterSection').hide('slow');
		$('#filterOverlay').hide();
	});
	$(window).scroll(sticktothetop);
	sticktothetop();
});

$(function () {
	var colorSelect = $('.colorList label').click(function () {
		colorSelect.removeClass('active');
		$(this).addClass('active');
	});

	// THIS IS THE METHOD FOR HANDLING THE RADIO BTN CLICKING ON DESCRIPTION	
	$('.lenseAddBlock  div.button').on('click', function(event){
		event.preventDefault();
		$('.lenseAddBlock  div.button').removeClass('active');
		$(this).addClass('active');
		$(this).find('input').prop("checked", true);
	});

});

// Tab Script
$(function () {

	var TabBlock = {
		s: {
			animLen: 200
		},

		init: function () {
			TabBlock.bindUIActions();
			TabBlock.hideInactive();
		},

		bindUIActions: function () {
			$('.tabList').on('click', '.tab', function () {
				TabBlock.switchTab($(this));
			});
		},

		hideInactive: function () {
			var $tabBlocks = $('.tabBlock');

			$tabBlocks.each(function (i) {
				var
					$tabBlock = $($tabBlocks[i]),
					$panes = $tabBlock.find('.tabContent'),
					$activeTab = $tabBlock.find('.tab.is-active');

				$panes.hide();
				$($panes[$activeTab.index()]).show();
			});
		},

		switchTab: function ($tab) {
			var $context = $tab.closest('.tabBlock');

			if (!$tab.hasClass('is-active')) {
				$tab.siblings().removeClass('is-active');
				$tab.addClass('is-active');

				TabBlock.showPane($tab.index(), $context);
			}
		},

		showPane: function (i, $context) {
			var $panes = $context.find('.tabContent');

			// Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
			$panes.slideUp(TabBlock.s.animLen);
			$($panes[i]).slideDown(TabBlock.s.animLen);
		}
	};

	$(function () {
		TabBlock.init();
	});

});

// Select Prescription Type Script

function hidePrescrip() {
	$('#singleVisionContent').hide("slow");
	$('#bifocalContent').hide("slow");
	$('#progressiveContent').hide("slow");
	$('#frameContent').hide("slow");
	$('#zeroPowerContent').hide("slow");
	$('#singleVision').removeClass("active");
	$('#bifocal').removeClass("active");
	$('#progressive').removeClass("active");
	$('#frame').removeClass("active");
	$('#zeroPower').removeClass("active");

}

$(function () {
	var selectedPrescrip = "singleVision";
	hidePrescrip();
	$('#singleVisionContent').show("fast");

	$('ul.presList li').on('click', function (event) {
		//event.preventDefault();
		var slect = $(this).attr('id');

		if (selectedPrescrip === slect) {
			hidePrescrip();
			selectedPrescrip = "";
		} else {
			hidePrescrip();
			switch (slect) {
				case 'singleVision': $('#singleVisionContent').show('slow');
					break;
				case 'bifocal': $('#bifocalContent').show('slow');
					break;
				case 'progressive': $('#progressiveContent').show('slow');
					break;
				case 'frame': $('#frameContent').show('slow');
					break;
				case 'zeroPower': $('#zeroPowerContent').show('slow');
					break;

			}
			$(this).addClass("active");
			selectedPrescrip = slect;
		}
	});

	
	var carouselMine = $('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			// responsiveClass: true,
			autoWidth:true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 3,
					nav: false
				},
				1000: {
					items: 3,
					nav: true,
					loop: false,
					margin: 20
				}
			}
		}).trigger('refresh.owl.carousel');
		
	

});


// Review Tab Script

function hideRatings() {
	$('#allRatingContent').hide("slow");
	$('#oneStarContent').hide("slow");
	$('#twoStarContent').hide("slow");
	$('#threeStarContent').hide("slow");
	$('#fourStarContent').hide("slow");
	$('#fiveStarContent').hide("slow");
	$('#allRating').removeClass("active");
	$('#oneStar').removeClass("active");
	$('#twoStar').removeClass("active");
	$('#threeStar').removeClass("active");
	$('#fourStar').removeClass("active");
	$('#fiveStar').removeClass("active");

}

$(function () {
	var selectedRating = "allRating";
	hideRatings();
	$('#allRatingContent').show("slow");
	$('#allRating').addClass("active");

	$('ul.ratingList li').on('click', function (event) {
		event.preventDefault();
		var slect = $(this).attr('id');

		if (selectedRating != slect) {

			hideRatings();
			switch (slect) {
				case 'allRating': $('#allRatingContent').toggle('slow');
					break;
				case 'oneStar': $('#oneStarContent').toggle('slow');
					break;
				case 'twoStar': $('#twoStarContent').toggle('slow');
					break;
				case 'threeStar': $('#threeStarContent').toggle('slow');
					break;
				case 'fourStar': $('#fourStarContent').toggle('slow');
					break;
				case 'fiveStar': $('#fiveStarContent').toggle('slow');
					break;

			}
			$(this).addClass("active");
			selectedRating = slect;
		}
	});
});


// this is the side menu in 768 code
$(function () {
	$('#eyesideMenu').on('click', function (event) {
		event.preventDefault();
		$(this).find('ul.child').show("slow");
		$('.toggle-btn').css("z-index", "0");
	});

	$('#closeEyesideMenu').on('click', function (event) {
		event.preventDefault();
		$('#eyesideMenu ul.child').hide("slow");
		$('.toggle-btn').css("z-index", "9");
		return false;
	});

	$('#sunsideMenu').on('click', function (event) {
		event.preventDefault();
		$(this).find('ul.child').show("slow");
		$('.toggle-btn').css("z-index", "0");
	});

	$('#closeSunsideMenu').on('click', function (event) {
		event.preventDefault();
		$('#sunsideMenu ul.child').hide("slow");
		$('.toggle-btn').css("z-index", "9");
		return false;
	});

	$('#lensesideMenu').on('click', function (event) {
		event.preventDefault();
		$(this).find('ul.child').show("slow");
		$('.toggle-btn').css("z-index", "0");
	});

	$('#closeLensesideMenu').on('click', function (event) {
		event.preventDefault();
		$('#lensesideMenu ul.child').hide("slow");
		$('.toggle-btn').css("z-index", "9");
		return false;
	});

});


// Product Slideshow Script in Product Details Page

$(function () {
	$(document).on('ready', function () {

		$(".center").slick({
			// dots: true,
			// infinite: true,
			centerMode: true,
			centerPadding: '280px',
			slidesToShow: 1,
			responsive: [

				{
					breakpoint: 1025,
					settings: {
						arrows: true,
						centerMode: true,
						centerPadding: '200px',
						slidesToShow: 1
					}
				},
				{
					breakpoint: 769,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '100px',
						slidesToShow: 1
					}
				},
				{
					breakpoint: 481,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '20px',
						slidesToShow: 1
					}
				}
			]
		});
	});
});

// Make Payment Script in Checkout Page

function hidePayment() {
	$('#creditCardContent').hide("slow");
	$('#debitCardContent').hide("slow");
	$('#netBankingContent').hide("slow");
	$('#codContent').hide("slow");
	$('#bhimUPIContent').hide("slow");
	$('#emiContent').hide("slow");
	$('#creditCard').removeClass("active");
	$('#debitCard').removeClass("active");
	$('#netBanking').removeClass("active");
	$('#cod').removeClass("active");
	$('#bhimUPI').removeClass("active");
	$('#emi').removeClass("active");

}

$(function () {
	var selectedPayment = "creditCard";
	hidePayment();
	$('#creditCardContent').show("slow");
	$('#creditCard').addClass("active");

	$('ul.optionsList li').on('click', function (event) {
		event.preventDefault();
		var slect = $(this).attr('id');

		if (selectedPayment != slect) {

			hidePayment();
			switch (slect) {
				case 'creditCard': $('#creditCardContent').toggle('slow');
					break;
				case 'debitCard': $('#debitCardContent').toggle('slow');
					break;
				case 'netBanking': $('#netBankingContent').toggle('slow');
					break;
				case 'cod': $('#codContent').toggle('slow');
					break;
				case 'bhimUPI': $('#bhimUPIContent').toggle('slow');
					break;
				case 'emi': $('#emiContent').toggle('slow');
					break;

			}
			$(this).addClass("active");
			selectedPayment = slect;
		}
	});
});

function hidePaymentAccordian() {
	$('div#creditCardContent').css("display", "none");
	$('div#debitCardContent').css("display", "none");
	$('div#netBankingContent').css("display", "none");
	$('div#codContent').css("display", "none");
	$('div#bhimUPIContent').css("display", "none");
	$('div#emiContent').css("display", "none");
}

$(function () {
	/// CHECKOUT PAGE
	$('#changeLoginBtn').on('click', function (event) {
		$('#checkoutLoginDetails').hide();
		$('#newCheckoutLoginDetails').show('slow');
		$('#changeLoginBtn').hide();
		$('#saveLoginBtn').show('slow');
	});

	$('#saveLoginBtn').on('click', function (event) {
		$('#newCheckoutLoginDetails').hide();
		$('#checkoutLoginDetails').show('slow');
		$('#saveLoginBtn').hide();
		$('#changeLoginBtn').show('slow');
	});

	// ON SELECTING THE DELIVERY ADDRESS
	$('.addrsBoxFoot button.selectDeliveryAddress').on('click', function (event) {
		$('.addrsBoxHead div.radioBlock').find(".icon-radio-button").removeClass('active');
		$(this).parent().siblings(".addrsBoxHead").find(".icon-radio-button").addClass('active');
		$('#chooseAddressBar').hide();
		$(".changeAddrsBar").show();
		$(".reviewBar").addClass("active");
		$('div.orderList').show("slow");
		return false;
	});

	$('div.reviewBar button.proceed').on('click', function (event) {
		event.preventDefault();
		$('.reviewBar div.orderList').hide();
		// $(".reviewBar").removeClass("active");

		$(".paymentBar").addClass("active");
		$('div.paymentOptionBlock').show("slow");
		return false;
	});

	// for updating the delivery address ::: OPEN EDIT MODE
	$('#changeDeliveryBtn').on('click', function (event) {
		$(".changeAddrsBar").hide();
		$('#chooseAddressBar').show();
	});

	// ON CLICKING THE ADD NEW ADDRESS FOR OPENING THE SECTION
	$('.addNewAddrs').on('click', function (event) {
		//event.preventDefault();
		$('#chooseAddressBar').hide();
		$('.addAddrsBar').show("slow");
		$('.addAddrsBar').addClass('active');
	});

	// CANCEL BUTTON IN NEW ADDRESS FORM
	$('.addrsDetails button.cancelBtn').on('click', function (event) {
		$('.addAddrsBar').hide();
		$('.addAddrsBar').removeClass('active');
		$('#chooseAddressBar').show();

	});

	$('button.selectAndDeliveryAddress').on('click', function (event) {
		event.preventDefault();
		$('.addAddrsBar').removeClass('active');
		$('.addAddrsBar').hide();
		$('#chooseAddressBar').show("slow");

		return false;
	});

	$('.reviewBar').on('click', function (event) {
		const abc = $('.reviewBar').hasClass("active");
		if (abc) {
			if ($('div.orderList').css('display') == 'block') {
				$('div.orderList').css("display", "none");
			} else {
				$('div.orderList').css("display", "block");
			}

		}
		return false;
	});

	$('.paymentBar').on('click', function (event) {
		const abc = $('.paymentBar').hasClass("active");
		if (abc) {
			$('div.paymentOptionBlock').show();
		}
	});


	$("#netBankingContent div.detailsBar div.paymoney").on("click", function (event) {
		$("#netBankingContent div.detailsBar div.paymoney").find("i.icon-radio-button").removeClass("active");
		$(this).find("i.icon-radio-button").addClass("active");
	});

	$("#emiContent div.selectEMIBank").show();
	$("#emiContent div.selectEMIOption").hide();
	$("#emiContent div.selectEMICardDetail").hide();

	$('.selectEMIBank ul.list li a').on('click', function (event) {
		$('input#banklist').val($(this).text());
		$("#emiContent div.selectEMIOption").show();
	});

	$('div.AvailableEMIOption').on("click", function (event) {
		$('div.AvailableEMIOption').find("i.icon-radio-button").removeClass("active");
		$(this).find("i.icon-radio-button").addClass("active");

		$("#emiContent div.selectEMICardDetail").show();
	});

	$("span.creditCardOption").on('click', function (event) {
		hidePaymentAccordian();
		if ($('div#creditCardContent').css('display') == 'block') {
			$('div#creditCardContent').css("display", "none");
		} else {
			$('div#creditCardContent').css("display", "block");
		}
	});

	$("span.debitCardOption").on('click', function (event) {
		hidePaymentAccordian();
		if ($('div#debitCardContent').css('display') == 'block') {
			$('div#debitCardContent').css("display", "none");
		} else {
			$('div#debitCardContent').css("display", "block");
		}
	});

	$("span.netBankingOption").on('click', function (event) {
		hidePaymentAccordian();
		if ($('div#netBankingContent').css('display') == 'block') {
			$('div#netBankingContent').css("display", "none");
		} else {
			$('div#netBankingContent').css("display", "block");
		}
	});


	$("span.codOption").on('click', function (event) {
		hidePaymentAccordian();
		if ($('div#codContent').css('display') == 'block') {
			$('div#codContent').css("display", "none");
		} else {
			$('div#codContent').css("display", "block");
		}
	});

	$("span.bhimUPIOption").on('click', function (event) {
		hidePaymentAccordian();
		if ($('div#bhimUPIContent').css('display') == 'block') {
			$('div#bhimUPIContent').css("display", "none");
		} else {
			$('div#bhimUPIContent').css("display", "block");
		}
	});


	$("span.emiOption").on('click', function (event) {
		hidePaymentAccordian();
		if ($('div#emiContent').css('display') == 'block') {
			$('div#emiContent').css("display", "none");
		} else {
			$('div#emiContent').css("display", "block");
		}
	});

});

// My Account Tab Script in My Account Page

function hideAccount() {
	$('#myOrderContent').hide();
	$('#returnOrderContent').hide();
	$('#personalInfoContent').hide();
	$('#manageAddrsContent').hide();
	$('#saveCardsContent').hide();
	$('#bankDetailsContent').hide();
	$('#phonePeContent').hide();
	$('#giftCardsContent').hide();
	$('#wishlistContent').hide();
	$('#notificationContent').hide();
	$('#rewardsContent').hide();
	$('#myOrder').removeClass("active");
	$('#returnOrder').removeClass("active");
	$('#personalInfo').removeClass("active");
	$('#manageAddrs').removeClass("active");
	$('#saveCards').removeClass("active");
	$('#bankDetails').removeClass("active");
	$('#phonePe').removeClass("active");
	$('#giftCards').removeClass("active");
	$('#wishlist').removeClass("active");
	$('#notification').removeClass("active");
	$('#rewards').removeClass("active");

}

$(function () {
	var selectedAccount = "personalInfo";
	hideAccount();
	$('#personalInfoContent').show("slow");
	$('#personalInfo').addClass("active");

	$('ul.accList li').on('click', function (event) {
		event.preventDefault();
		var slect = $(this).attr('id');

		if (selectedAccount != slect) {

			hideAccount();
			switch (slect) {
				case 'myOrder': $('#myOrderContent').toggle('slow');
					break;
				case 'returnOrder': $('#returnOrderContent').toggle('slow');
					break;
				case 'personalInfo': $('#personalInfoContent').toggle('slow');
					break;
				case 'manageAddrs': $('#manageAddrsContent').toggle('slow');
					break;
				case 'saveCards': $('#saveCardsContent').toggle('slow');
					break;
				case 'bankDetails': $('#bankDetailsContent').toggle('slow');
					break;
				case 'phonePe': $('#phonePeContent').toggle('slow');
					break;
				case 'giftCards': $('#giftCardsContent').toggle('slow');
					break;
				case 'wishlist': $('#wishlistContent').toggle('slow');
					break;
				case 'notification': $('#notificationContent').toggle('slow');
					break;
				case 'rewards': $('#rewardsContent').toggle('slow');
					break;

			}
			$(this).addClass("active");
			selectedAccount = slect;
		}
	});
});

function hideAccountAccordian() {
	$('div#myOrderContent').css("display", "none");
	$('div#returnOrderContent').css("display", "none");
	$('div#personalInfoContent').css("display", "none");
	$('div#manageAddrsContent').css("display", "none");
	$('div#saveCardsContent').css("display", "none");
	$('div#bankDetailsContent').css("display", "none");
	$('div#phonePeContent').css("display", "none");
	$('div#giftCardsContent').css("display", "none");
	$('div#wishlistContent').css("display", "none");
	$('div#notificationContent').css("display", "none");
	$('div#rewardsContent').css("display", "none");
}

$(function () {

	$("div.myOrderOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#myOrderContent').css('display') == 'block') {
			$('div#myOrderContent').css("display", "none");
		} else {
			$('div#myOrderContent').css("display", "block");
		}
	});

	$("div.returnOrderOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#returnOrderContent').css('display') == 'block') {
			$('div#returnOrderContent').css("display", "none");
		} else {
			$('div#returnOrderContent').css("display", "block");
		}
	});

	$("div.personalInfoOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#personalInfoContent').css('display') == 'block') {
			$('div#personalInfoContent').css("display", "none");
		} else {
			$('div#personalInfoContent').css("display", "block");
		}
	});

	$("div.manageAddrsOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#manageAddrsContent').css('display') == 'block') {
			$('div#manageAddrsContent').css("display", "none");
		} else {
			$('div#manageAddrsContent').css("display", "block");
		}
	});

	$("div.saveCardsOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#saveCardsContent').css('display') == 'block') {
			$('div#saveCardsContent').css("display", "none");
		} else {
			$('div#saveCardsContent').css("display", "block");
		}
	});

	$("div.bankDetailsOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#bankDetailsContent').css('display') == 'block') {
			$('div#bankDetailsContent').css("display", "none");
		} else {
			$('div#bankDetailsContent').css("display", "block");
		}
	});

	$("div.phonePeOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#phonePeContent').css('display') == 'block') {
			$('div#phonePeContent').css("display", "none");
		} else {
			$('div#phonePeContent').css("display", "block");
		}
	});

	$("div.giftCardsOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#giftCardsContent').css('display') == 'block') {
			$('div#giftCardsContent').css("display", "none");
		} else {
			$('div#giftCardsContent').css("display", "block");
		}
	});

	$("div.wishlistOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#wishlistContent').css('display') == 'block') {
			$('div#wishlistContent').css("display", "none");
		} else {
			$('div#wishlistContent').css("display", "block");
		}
	});

	$("div.notificationOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#notificationContent').css('display') == 'block') {
			$('div#notificationContent').css("display", "none");
		} else {
			$('div#notificationContent').css("display", "block");
		}
	});

	$("div.rewardsOption").on('click', function (event) {
		hideAccountAccordian();
		if ($('div#rewardsContent').css('display') == 'block') {
			$('div#rewardsContent').css("display", "none");
		} else {
			$('div#rewardsContent').css("display", "block");
		}
	});

	$('#btn_edit_address').on('click', function (event) {
		event.preventDefault();
		$(this).hide();
		$('#btn_cancel_edit_address').show('slow');
		$('div.personalDetails').hide();
		$('div.editPersonalDetails').show('slow');


	});
	$('#btn_cancel_edit_address').on('click', function (event) {
		event.preventDefault();
		$(this).hide();
		$('#btn_edit_address').show('slow');
		$('div.editPersonalDetails').hide('slow');
		$('div.personalDetails').show('slow');
	});


	$('div.editPersonalDetails div.buttonBlock button').on('click', function (event) {
		event.preventDefault();
		$('#btn_cancel_edit_address').hide();
		$('#btn_edit_address').show('slow');
		$('div.editPersonalDetails').hide('slow');
		$('div.personalDetails').show('slow');
	});

	$('a#startChangePwd').on('click', function (event) {
		event.preventDefault();
		$('#btn_edit_address').hide('slow');
		$('div.personalDetails').hide('slow');
		$('div.changePwd').show('slow');

	});

	$('div.btnChangePWD button').on('click', function (event) {
		event.preventDefault();
		$('div.changePwd').hide('slow');
		$('#btn_edit_address').show('slow');
		$('div.personalDetails').show('slow');

	});

	//$('div.addrsBox div.addrsBoxHead div.radioBlock').on('click', function (event) {
	//		event.preventDefault();
	//		$('div.addrsBox div.addrsBoxHead div.radioBlock').find('i.icon').removeClass('active');
	//		$(this).find('i.icon').addClass('active');
	//	});

	$('a#btnAddAddress').on('click', function (event) {
		event.preventDefault();
		$('div#newAddressBlock').show('slow');
		$('a#btnAddAddress').hide('slow');
	});

	//$('div.addrsType div.type').on('click', function (event) {
	//		event.preventDefault();
	//		$('div.addrsType div.type').find('i.icon').removeClass('active');
	//		$(this).find('i.icon').addClass('active');
	//	});

	$('div.addrsDetails button').on('click', function (event) {
		event.preventDefault();
		$('div#newAddressBlock').hide('slow');
		$('div.addrsBox').show('slow');
		$('a#btnAddAddress').show('slow');
	});

	$('div.addrsBoxHead div.userName div.buttonBlock button.editClass').on('click', function (event) {
		event.preventDefault();
		$(this).closest('div.addrsBox').hide();
		$('#updateAddressBlock').show();
	});

	$('div#updateAddressBlock div.addrsDetails div.buttonBlock button').on('click', function (event) {
		event.preventDefault();
		$('div.addrsBox').show();
		$('#updateAddressBlock').hide();
	});

	$('div.addrsBoxHead div.userName div.buttonBlock button.deleteClass').on('click', function (event) {
		event.preventDefault();
		$(this).closest('div.addrsBox').hide();
		$('div.addrsBox div.addrsBoxHead div.radioBlock').find('i.icon').addClass('active');
	});

	$('div.whislistIcon').on('click', function (event) {
		event.preventDefault();
		$(this).closest('div.wishlistBox').hide();

	});
	$('a#btnAddCard').on('click', function (event) {
		event.preventDefault();
		$('div#newCardBlock').show('slow');
		$('a#btnAddCard').hide()
	});

	$('.addCard button.saveBtn').on('click', function (event) {
		$('.addCard').hide('slow');
		$('#btnAddCard').show();

	});

	$('.addCard button.cancelBtn').on('click', function (event) {
		event.preventDefault();
		$('.addCard').hide('slow');
		$('#btnAddCard').show();

		return false;
	});

});

