<?php
/*
    Template name: Strona główna
*/
get_header();
?>


<div class="page-wrapper"> 
<header class="page-header type1">
 
   
  <div class="main-panel-top">
      <div class="container">
          <div class="main-panel-inner">
              <div class="panel wrapper">
                <div class="header-left">
                  <div class="panel header">
                                                              </div>
                </div>
                <div class="header-right">
                  <div class="panel header show-icon-tablet">
                    <div class="top-links-icon">
                      <a href="javascript:;">Links</a>
                    </div>
                    <ul class="header links"><li><a href="https://primaryweapons.com/customer/account/create/" id="idzHp7gN0E">Create an Account</a></li>    <li class="greet welcome" data-bind="scope: 'customer'">
        <!-- ko if: customer().fullname  --><!-- /ko -->
        <!-- ko ifnot: customer().fullname  -->
        <span class="not-logged-in" data-bind="text: ''"></span>
                <!-- /ko -->
    </li>
        
<li class="item link compare hide" data-bind="scope: 'compareProducts'" data-role="compare-products-link">
    <a class="action compare" title="Compare Products" data-bind="attr: {'href': compareProducts().listUrl}, css: {'': !compareProducts().count}">
    	<em class="porto-icon-chart hidden-xs"></em>
        Compare        (<span class="counter qty" data-bind="text: compareProducts().countCaption"></span>)
    </a>
</li>

<li class="link authorization-link" data-label="or">
    <a href="https://primaryweapons.com/customer/account/login/">Sign In</a>
</li>
<li><a href="https://primaryweapons.com/locator/partnership/index/">Become a Dealer</a></li>
<li><a href="https://primaryweapons.com/locator/partnership/dealerlist/">Dealer Locator</a></li>
<li><a href="https://primaryweapons.com/contact">Contact Us</a></li>
<li><a href="https://primaryweapons.com/knowledgebase/">FAQ</a></li>
</ul>                  </div>
                                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="header-main">
    <div class="header content header-row">
      <div class="header-left">
        <span data-action="toggle-nav" class="action nav-toggle"><span>Toggle Nav</span></span>
            <strong class="logo">
        <img src="https://primaryweapons.com/media/logo/stores/1/PWS-header-logo.png" alt="Primary Weapons Systems" width="170" height="88">
    </strong>
      </div>
      <div class="header-center">
        <div class="search-area show-icon-tablet">
          <a href="javascript:void(0);" class="search-toggle-icon"><span><i class="porto-icon-magnifier"></i></span></a>
          <div class="block block-search">
    <div class="block block-title"><strong>Search</strong></div>
    <div class="block block-content">
        <form class="form minisearch" id="search_mini_form" action="https://primaryweapons.com/athena/" method="get">
            <div class="field search">
                <label class="label" for="search" data-role="minisearch-label">
                    <span>Search</span>
                </label>
                <div class="control">
                    <input id="search" type="text" name="q" placeholder="Search for..." class="input-text" maxlength="128" role="combobox" autocomplete="off">
                    <div id="search_autocomplete" class="athena-autocomplete athena-search-autocomplete">
                                            </div>
                </div>
            </div>
            <div class="actions">
                <button type="submit" title="Search" class="action search" aria-label="Search">
                    <span>Search</span>
                </button>
            </div>
        </form>
    </div>
</div>
        </div>
      </div>
      <div class="header-right">
        <div class="header-contact">
                    <a href="https://primaryweapons.com/customer/account/" class="my-account m-l-xs mr-1 mr-lg-2" title="My Account"><i class="porto-icon-user-2"></i></a>
          <a href="https://primaryweapons.com/wishlist" class="wishlist mr-1 mr-lg-2 pr-lg-1" title="Wishlist"><i class="porto-icon-wishlist-2"></i></a>
        </div>
        
<div data-block="minicart" class="minicart-wrapper cart-design-1">
    <a class="action showcart" href="https://primaryweapons.com/checkout/cart/" data-bind="scope: 'minicart_content'">
       <i class="minicart-icon porto-icon-shopping-cart"></i>
        <span class="text">Cart</span>
        <span class="counter qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false }, blockLoader: isLoading">
            <span class="counter-number">
            <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
            <!-- ko ifnot: getCartParam('summary_count') -->0<!-- /ko -->
            </span>
            <span class="counter-label">
                <!-- ko i18n: 'items' --><span>items</span><!-- /ko -->
            </span>
        </span>
    </a>
    <a class="showcart action-subtotal d-none" href="https://primaryweapons.com/checkout/cart/" data-bind="scope: 'minicart_content'">
        <span class="cart-subtotal">
          Shopping Cart          <span class="cart-price">
            <span class="amount" data-bind="html: getCartParam('subtotal_excl_tax')"></span>
          </span>
        </span>
    </a>
            
         
    <script type="text/javascript" nonce="">
        window.checkout = {"shoppingCartUrl":"https:\/\/primaryweapons.com\/checkout\/cart\/","checkoutUrl":"https:\/\/primaryweapons.com\/checkout\/","updateItemQtyUrl":"https:\/\/primaryweapons.com\/checkout\/sidebar\/updateItemQty\/","removeItemUrl":"https:\/\/primaryweapons.com\/checkout\/sidebar\/removeItem\/","imageTemplate":"Magento_Catalog\/product\/image_with_borders","baseUrl":"https:\/\/primaryweapons.com\/","minicartMaxItemsVisible":3,"websiteId":"1","maxItemsToDisplay":10,"storeId":"1","storeGroupId":"1","customerLoginUrl":"https:\/\/primaryweapons.com\/customer\/account\/login\/","isRedirectRequired":false,"autocomplete":"off","captcha":{"user_login":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"https:\/\/primaryweapons.com\/captcha\/refresh\/","isRequired":false,"timestamp":1749387272}}};
    </script>
    
<div tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front mage-dropdown-dialog" aria-describedby="ui-id-1" style="display: none;"><div class="block block-minicart empty ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-1" style="display: block;">
            <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                <!-- ko template: getTemplate() -->
<div class="block-title">
    <strong>
        <span class="text"><!-- ko i18n: 'My Cart' --><span>My Cart</span><!-- /ko --></span>
        <span class="qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false },
                       attr: { title: $t('Items in Cart') }" title="Items in Cart">
            <!-- ko text: getCartParam('summary_count') --><!-- /ko -->
        </span>
    </strong>
</div>

<div class="block-content">
  <button type="button" id="btn-minicart-close" class="action close" data-action="close" data-bind="
              attr: {
                  title: $t('Close')
              },
              click: closeMinicart()
          " title="Close">
      <span data-bind="i18n: 'Close'">Close</span></button>

  <!-- ko if: getCartParam('summary_count') --><!-- /ko -->

  <!-- ko if: getCartParam('summary_count') --><!-- /ko -->

  <!-- ko ifnot: getCartParam('summary_count') -->
    <div class="total-count text-v-dark">
      <div class="items-total">
          <span class="count">0</span>
          <span class="counter-label" data-bind="i18n: 'Item'">Item</span></div>
      <div class="actions">
          <div class="secondary">
              <a class="action viewcart" data-bind="attr: {href: shoppingCartUrl}" href="https://primaryweapons.com/checkout/cart/">
                  <span data-bind="i18n: 'View Cart'">View Cart</span></a>
          </div>
      </div>
    </div>
    <strong class="subtitle empty" data-bind="i18n: 'You have no items in your shopping cart.'">You have no items in your shopping cart.</strong>
    <!-- ko if: getCartParam('cart_empty_message') --><!-- /ko -->
  <!-- /ko -->
  <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
  <!-- ko if: getCartParam('possible_onepage_checkout') --><!-- /ko -->
  <div id="minicart-widgets" class="minicart-widgets">
      <!-- ko foreach: getRegion('promotion') -->
          <!-- ko template: getTemplate() -->
<!-- ko foreach: {data: elems, as: 'element'} --><!-- /ko -->
<!-- /ko -->
      <!-- /ko -->
  </div>
</div>
<!-- ko foreach: getRegion('sign-in-popup') --><!-- /ko -->
<!-- /ko -->
            </div>
        </div></div></div>
      </div>
    </div>
  </div>
      <div class="sections nav-sections">
                <div class="section-items nav-sections-items mage-tabs-disabled" role="tablist">
                                            <div class="section-item-title nav-sections-item-title active" data-role="collapsible" role="tab" data-collapsible="true" aria-controls="store.menu" aria-selected="false" aria-expanded="true" tabindex="0">
                    <a class="nav-sections-item-switch" data-toggle="switch" href="#store.menu">
                        Menu                    </a>
                </div>
                <div class="section-item-content nav-sections-item-content" id="store.menu" data-role="content" role="tabpanel" aria-hidden="false">
                     

<nav class="navigation sw-megamenu " role="navigation">
    <ul>
        
    <li class="ui-menu-item level0">
        <a href="https://primaryweapons.com/" class="level-top"><span>Home</span></a>
    </li>
<li class="ui-menu-item level0 fullwidth "><a href="https://primaryweapons.com/shop-all/" class="level-top" title="Shop All PWS"><span>Shop All PWS</span></a></li><li class="ui-menu-item level0 fullwidth parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/ar-series/" class="level-top" title="AR Series"><span>AR Series</span></a><div class="level0 submenu"><div class="container"><div class="row"><ul class="subchildmenu col-md-12 mega-columns columns4"><li class="ui-menu-item level1 parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/ar-series/complete-rifles-pistols/" title="Complete Rifles/Pistols"><span>Complete Rifles/Pistols</span></a><ul class="subchildmenu "><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/ar-series/complete-rifles-pistols/ar-15-mk1/" title="AR-15 | MK1 Rifles"><span>AR-15 | MK1 Rifles</span></a></li><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/ar-series/complete-rifles-pistols/ar-10-mk2/" title="AR-10 | MK2 Rifles"><span>AR-10 | MK2 Rifles</span></a></li></ul></li><li class="ui-menu-item level1 parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/ar-series/lowers/" title="Lowers"><span>Lowers</span></a><ul class="subchildmenu "><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/ar-series/lowers/ar-15-mk1-lowers/" title="AR-15 | MK1 Lowers"><span>AR-15 | MK1 Lowers</span></a></li><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/ar-series/lowers/ar-10-mk2-lowers/" title="AR-10 | MK2 Lowers"><span>AR-10 | MK2 Lowers</span></a></li></ul></li><li class="ui-menu-item level1 parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/ar-series/uppers/" title="Uppers"><span>Uppers</span></a><ul class="subchildmenu "><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/ar-series/uppers/ar-15-mk1-uppers/" title="AR-15 | MK1 Uppers"><span>AR-15 | MK1 Uppers</span></a></li><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/ar-series/uppers/ar-10-mk2-uppers/" title="AR-10 | MK2 Uppers"><span>AR-10 | MK2 Uppers</span></a></li></ul></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/ar-series/limited-release/" title="Limited Release"><span>Limited Release</span></a></li></ul></div></div></div></li><li class="ui-menu-item level0 fullwidth parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/uxr/" class="level-top" title="UXR"><span>UXR</span></a><div class="level0 submenu"><div class="container"><div class="row"><ul class="subchildmenu col-md-12 mega-columns columns4"><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/uxr/uxr-rifles/" title="UXR Rifles"><span>UXR Rifles</span></a></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/uxr/conversion-kits/" title="Conversion Kits"><span>Conversion Kits</span></a></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/uxr/magwells/" title="Magwells"><span>Magwells</span></a></li></ul></div></div></div></li><li class="ui-menu-item level0 fullwidth parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/parts/" class="level-top" title="Parts"><span>Parts</span></a><div class="level0 submenu"><div class="container"><div class="row"><ul class="subchildmenu col-md-12 mega-columns columns4"><li class="ui-menu-item level1 parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/parts/ar-15-10-upper-parts/" title="AR Upper Parts"><span>AR Upper Parts</span></a><ul class="subchildmenu "><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/parts/ar-15-10-upper-parts/complete-uppers/" title="Complete Uppers"><span>Complete Uppers</span></a></li><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/parts/ar-15-10-upper-parts/muzzle-devices/" title="Muzzle Devices"><span>Muzzle Devices</span></a></li><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/parts/ar-15-10-upper-parts/handguards/" title="Handguards"><span>Handguards</span></a></li><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/parts/ar-15-10-upper-parts/carriers/" title="Carriers"><span>Carriers</span></a></li><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/parts/ar-15-10-upper-parts/small-parts/" title="Small Parts"><span>Small Parts</span></a></li></ul></li><li class="ui-menu-item level1 parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/parts/ar-lower-parts/" title="AR Lower Parts"><span>AR Lower Parts</span></a><ul class="subchildmenu "><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/parts/ar-lower-parts/buffer-tubes-and-buffers/" title="Buffer Tubes and Buffers"><span>Buffer Tubes and Buffers</span></a></li><li class="ui-menu-item level2 "><a href="https://primaryweapons.com/parts/ar-lower-parts/accessories/" title="Accessories"><span>Accessories</span></a></li></ul></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/parts/uxr-parts/" title="UXR Parts"><span>UXR Parts</span></a></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/parts/suppressor-parts/" title="Suppressor Parts"><span>Suppressor Parts</span></a></li></ul></div></div></div></li><li class="ui-menu-item level0 fullwidth parent "><div class="open-children-toggle"></div><a href="https://primaryweapons.com/suppressors/" class="level-top" title="Suppressors"><span>Suppressors</span></a><div class="level0 submenu"><div class="container"><div class="row"><ul class="subchildmenu col-md-12 mega-columns columns4"><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/suppressors/22lr/" title=".22LR"><span>.22LR</span></a></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/suppressors/223-5-56/" title=".223/5.56"><span>.223/5.56</span></a></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/suppressors/9mm/" title="9mm"><span>9mm</span></a></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/suppressors/308-7-62/" title=".308/7.62"><span>.308/7.62</span></a></li><li class="ui-menu-item level1 "><a href="https://primaryweapons.com/suppressors/45/" title="45"><span>45</span></a></li></ul></div></div></div></li><li class="ui-menu-item level0 fullwidth "><a href="https://primaryweapons.com/apparel/" class="level-top" title="Apparel"><span>Apparel</span></a></li><li class="ui-menu-item level0 fullwidth "><a href="https://primaryweapons.com/catalog/category/view/s/cannon-parts/id/6/" class="level-top" title="Garage Sale"><span>Garage Sale</span><span class="cat-label cat-label-label2">Hot!</span></a></li><div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true"><div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
    <ul>
        <li class="ui-menu-item level0 fullwidth parent">
            <div class="open-children-toggle"></div>
            <a href="#" class="level-top" title="Info &amp; Media"><span>Info &amp; Media</span></a>
            <div class="level0 submenu info-media">
                <div class="container">
                    <div class="row">
                        <ul class="subchildmenu col-md-12 mega-columns info-media">
                            <li class="ui-menu-item level1 about-us"><a class="level1" href="/about-us/">About Us</a></li>
                            <li class="ui-menu-item level1 faq-menu"><a class="level1" href="/knowledgebase/">FAQ</a></li>
                            <li class="ui-menu-item level1 warranty"><a class="level1" href="#">Warranty</a></li>
                            <li class="warranty-li"><ul class="subchildmenu col-md-12 mega-columns warranty-ul">
                                         <!--<li class="ui-menu-item level1 rma"><a class="level1" href="/rma/account/history/">RMA</a></li>-->
                                         <li class="ui-menu-item level1 rma"><a class="level1" href="https://primaryweapons.com/warrantyrequest">Submit an RMA</a></li>
                                         <li class="ui-menu-item level1 warr-q"><a class="level1" href="/pws-warranty/">Warranty Questions</a></li>
                          
                            </ul></li>
                            <li class="ui-menu-item level1 manuals"><a class="level1" href="/pws-manuals/">Product Manuals</a></li>
                            <li class="ui-menu-item level1 manuals"><a class="level1" href="/pws-catalog/">Product Catalog</a></li>
                            <li class="ui-menu-item level1 conditions-of-use"><a class="level1" href="/conditions-of-use/">Conditions Of Use</a></li>
                            <li class="ui-menu-item level1 privacy-pol"><a class="level1" href="/privacy-policy/">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    </ul>
<ul>
<li class="ui-menu-item level0 fullwidth">
<a href="/blog.html" class="level-top" title="Blog"><span>Blog</span></a>
</li>
</ul>
</div></div>    </ul>
</nav>

 
  <script type="text/javascript" nonce="">
    require([
        'jquery',
        'Smartwave_Megamenu/js/sw_megamenu'
    ], function ($) {
        $(".sw-megamenu").swMegamenu();
    });
</script>
                </div>
                                            <div class="section-item-title nav-sections-item-title" data-role="collapsible" role="tab" data-collapsible="true" aria-controls="store.links" aria-selected="false" aria-expanded="false" tabindex="0">
                    <a class="nav-sections-item-switch" data-toggle="switch" href="#store.links">
                        Account                    </a>
                </div>
                <div class="section-item-content nav-sections-item-content" id="store.links" data-role="content" role="tabpanel" aria-hidden="true" style="display: none;">
                    <!-- Account links -->                <ul class="header links"><li><a href="https://primaryweapons.com/customer/account/create/" id="idzHp7gN0E">Create an Account</a></li>    <li class="greet welcome" data-bind="scope: 'customer'">
        <!-- ko if: customer().fullname  --><!-- /ko -->
        <!-- ko ifnot: customer().fullname  -->
        <span class="not-logged-in" data-bind="text: ''"></span>
                <!-- /ko -->
    </li>
        
<li class="item link compare hide" data-bind="scope: 'compareProducts'" data-role="compare-products-link">
    <a class="action compare" title="Compare Products" data-bind="attr: {'href': compareProducts().listUrl}, css: {'': !compareProducts().count}">
    	<em class="porto-icon-chart hidden-xs"></em>
        Compare        (<span class="counter qty" data-bind="text: compareProducts().countCaption"></span>)
    </a>
</li>

<li class="link authorization-link" data-label="or">
    <a href="https://primaryweapons.com/customer/account/login/">Sign In</a>
</li>
<li><a href="https://primaryweapons.com/locator/partnership/index/">Become a Dealer</a></li>
<li><a href="https://primaryweapons.com/locator/partnership/dealerlist/">Dealer Locator</a></li>
<li><a href="https://primaryweapons.com/contact">Contact Us</a></li>
<li><a href="https://primaryweapons.com/knowledgebase/">FAQ</a></li>
</ul></div>
                                    </div>
    </div>
</header>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
<div class="page messages"><div data-placeholder="messages"></div>
<div data-bind="scope: 'messages'">
    <!-- ko if: cookieMessagesObservable() && cookieMessagesObservable().length > 0 --><!-- /ko -->

    <div aria-atomic="true" role="alert" class="messages" data-bind="foreach: {
        data: messages().messages, as: 'message'
    }, afterRender: purgeMessages"></div>
</div>


</div><div class="columns"><div class="column main">


<input name="form_key" type="hidden" value="6ezFvIJoi15vxx9e"><div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}" style="display: none;">
        <script>window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/primaryweapons.com\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/primaryweapons.com\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/primaryweapons.com\/","customerLoginUrl":"https:\/\/primaryweapons.com\/customer\/ajax\/login\/"}</script>    <!-- ko template: getTemplate() -->

<div class="block-authentication" data-bind="afterRender: setModalElement, blockLoader: isLoading" style="display: none">
    <div class="block block-new-customer" data-bind="attr: {'data-label': $t('or')}" data-label="or">
        <div class="block-title">
            <strong id="block-new-customer-heading" role="heading" aria-level="2" data-bind="i18n: 'Checkout as a new customer'">Checkout as a new customer</strong>
        </div>
        <div class="block-content" aria-labelledby="block-new-customer-heading">
            <p data-bind="i18n: 'Creating an account has many benefits:'">Creating an account has many benefits:</p>
            <ul>
                <li data-bind="i18n: 'See order and shipping status'">See order and shipping status</li>
                <li data-bind="i18n: 'Track order history'">Track order history</li>
                <li data-bind="i18n: 'Check out faster'">Check out faster</li>
            </ul>
            <div class="actions-toolbar">
                <div class="primary">
                    <a class="action action-register primary" data-bind="attr: {href: registerUrl}" href="https://primaryweapons.com/customer/account/create/">
                        <span data-bind="i18n: 'Create an Account'">Create an Account</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="block block-customer-login" data-bind="attr: {'data-label': $t('or')}" data-label="or">
        <div class="block-title">
            <strong id="block-customer-login-heading" role="heading" aria-level="2" data-bind="i18n: 'Checkout using your account'">Checkout using your account</strong>
        </div>
        <!-- ko foreach: getRegion('messages') -->
        <!-- ko template: getTemplate() -->
<div data-role="checkout-messages" class="messages" data-bind="visible: isVisible(), click: removeAll">
    <!-- ko foreach: messageContainer.getErrorMessages() --><!--/ko-->
    <!-- ko foreach: messageContainer.getSuccessMessages() --><!--/ko-->
</div>
<!-- /ko -->
        <!--/ko-->
        <!-- ko foreach: getRegion('before') --><!-- /ko -->
        <div class="block-content" aria-labelledby="block-customer-login-heading">
            <form class="form form-login" method="post" data-bind="event: {submit: login }" id="login-form">
                <div class="fieldset login" data-bind="attr: {'data-hasrequired': $t('* Required Fields')}" data-hasrequired="* Required Fields">
                    <div class="field email required">
                        <label class="label" for="customer-email"><span data-bind="i18n: 'Email Address'">Email Address</span></label>
                        <div class="control">
                            <input name="username" id="customer-email" type="email" class="input-text" data-mage-init="{&quot;mage/trim-input&quot;:{}}" data-bind="attr: {autocomplete: autocomplete}" data-validate="{required:true, 'validate-email':true}" autocomplete="off">
                        </div>
                    </div>
                    <div class="field password required">
                        <label for="pass" class="label"><span data-bind="i18n: 'Password'">Password</span></label>
                        <div class="control">
                            <input name="password" type="password" class="input-text" id="pass" data-bind="attr: {autocomplete: autocomplete}" data-validate="{required:true}" autocomplete="off">
                        </div>
                    </div>
                    <!-- ko foreach: getRegion('additional-login-form-fields') -->
                    <!-- ko template: getTemplate() -->
<input name="captcha_form_id" type="hidden" data-bind="value: formId,  attr: {'data-scope': dataScope}" value="user_login" data-scope="">
<!-- ko if: (isRequired() && getIsVisible())--><!-- /ko -->
<!-- /ko -->
                    <!-- /ko -->
                    <div class="actions-toolbar">
                        <input name="context" type="hidden" value="checkout">
                        <div class="primary">
                            <button type="submit" class="action action-login secondary" name="send" id="send2">
                                <span data-bind="i18n: 'Sign In'">Sign In</span>
                            </button>
                        </div>
                        <div class="secondary">
                            <a class="action" data-bind="attr: {href: forgotPasswordUrl}" href="https://primaryweapons.com/customer/account/forgotpassword/">
                                <span data-bind="i18n: 'Forgot Your Password?'">Forgot Your Password?</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /ko -->
        
</div>




<div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true"><style>
.porto-ibanner-desc {
    z-index: 9 !important;
}
.transparent-banner-wrapper-mobile {
    position: relative;
    top: -7px;
    width: 100%;
    background-color: #000000;
    font-size: 17px;
    max-width: 540px;
    display: inline-block;
    color: #fff;
    text-align: center;
    line-height: 1.4;
    padding: 20px 10px !important;
    float: left;
    margin-bottom: 25px;
}

.transparent-banner-wrapper-mobile span {
    float: left;
    width: 100%;
    margin-bottom: 15px;
}

.transparent-banner-wrapper {
    position: relative;
    top: 40%;
    width: 100%;
    padding: 40px 20px;
    background-color: #00000075;
    font-size: 17px;
    max-width: 540px;
}
.transparent-banner-wrapper span {
    margin-bottom: 20px;
    float: left;
    width: 100%;
}
.homepage-banner-mdj #homepage-banner-mdj .bde-logo-img {
    width: auto !important; 
    height: auto !important;
    display: block !important; 
    object-fit: none !important; 
    min-height: unset !important; 
    padding-bottom: 20px !important;
}

@media (max-width:640px) {
  .transparent-banner-wrapper {
    position: relative;
    top: 38%;
    width: 100%;
    display: inline-block;
    padding: 10px;
    background-color: #00000075;
    font-size: 17px;
    max-width: 540px;
  }
}

@media (min-width: 640px) {
.transparent-banner-wrapper-mobile { display:none; }
.transparent-banner-wrapper { display:inline-block; }
}

@media (max-width: 640px) {
  .transparent-banner-wrapper-mobile {
    display:inline-block;
    position: relative;
    top: -8px;
    background-color: #000000;
    font-size: 17px;
    display: inline-block;
    color: #fff;
    text-align: center;
    line-height: 1.4;
    padding: 20px 10px !important;
    float: left;
    width: 100%;
    max-width: 100%;

  }

  .transparent-banner-wrapper { display:none; }
}


    .photo-instagrams.row {
        justify-content: center;
        margin-left: 15% !important;;
        margin-right: 15% !important;;
        padding: 10% 0;
    }

    .photo-instagrams:not(.owl-carousel) .item {
        max-width: 33.333333%;
        flex: 0 0 33.333333%;
        max-height: 400px;
        padding: 0 !important;
        border: white 4px solid;
    }

    .photo-instagrams .item a {
        height: 100%;
    }

    .photo-instagrams .item img {
        object-fit: cover;
        height: 100%;
    }

    .insta-follow {
        top: calc(50% - 133px);
        left: calc(50% - 173px);
    }

    @media (max-width: 780px) {
        .insta-follow h3 {
            font-size: 40px;
            padding-top: 0;
            margin-bottom: 10px;
        }

        .insta-follow span {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .insta-follow {
            top: calc(50% - 97px);
            left: calc(50% - 157px);
            padding: 20px 46px;
        }

        .photo-instagrams:not(.owl-carousel) .item {
            max-width: 32.333%;
            flex: 0 0 32.333333%;
            border: white 1px solid;
            margin: 1px;
        }
    }

    @media (max-width: 600px) {
        .insta-follow {
            top: unset;
            left: unset;
            position: relative;
        }
    }

    .page-header.type1 {
        position: absolute;
        width: 100%;
        /* background-color: transparent; */
    }

    .page-header .panel.wrapper, .main-panel-top {
        /* background-color: transparent; */
    }

    .columns .column.main {
        padding-bottom: 0;
    }

    .porto-ibanner-layer {
        position: absolute;
        z-index: 10;
    }

    .home-banner ul.products li.product-category .thumb-info {
        min-height: 3.375rem;
        background: #222529;
    }

    .porto-ibanner .porto-ibanner-desc .porto-ibanner-container {
        position: relative;
        height: 100%;
    }

    ul.products li.product-category .thumb-info h3 {
        text-transform: uppercase;
    }

    .coupon-sale-text {
        padding: .2em .4em;
        position: relative;
        letter-spacing: 0;
        transform: rotate(-1.5deg);
    }

    .coupon-sale-text b {
        display: inline-block;
        font-size: 1em;
        padding: 0;
    }

    .coupon-sale-text b sup {
        font-size: 54%;
    }

    .coupon-sale-text b sup {
        font-size: 54%;
    }

    .p-t {
        padding-top: 15px !important;
    }

    ul.products .product-col {
        margin-bottom: 1.4286em;
        position: relative;
    }

    sup {
        font-size: 54%;
    }

    @media (max-width: 575px) {
        .porto-ibanner-layer {
            font-size: .6rem;
        }
    }

    .footer .follow-us .share-links a {
        box-shadow: none;
        font-size: 24px;
        width: 2.25em;
        height: 2.25em;
        border: 1px solid #d0d0d0;
        border-radius: 30px;
    }

    .footer .follow-us .share-links a:not(:hover) {
        background: none;
        color: #222529;
    }

    .photo-instagrams .image-link {
        position: relative;
        display: block;
    }

    .photo-instagrams .image-link img {
        display: block;
    }

    .photo-instagrams .image-link .content {
        display: none;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        background-color: rgba(255, 0, 0, .5);
        text-align: center;
        height: 100%;
        vertical-align: middle;
        font-size: 35px;
        color: #fff;
        opacity: 0;
        visibility: hidden;
        transition: all .3s;
    }

    .photo-instagrams .image-link:hover .content {
        opacity: 1;
        visibility: visible;
    }

    .photo-instagrams .image-link .content i {
        position: absolute;
        top: calc(50% - 18px);
        left: calc(50% - 24.5px);
        display: inline-block;
        vertical-align: middle;
    }

    .homepage-instagram {
        object-fit: contain;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .custom-product-space .slider-wrapper {
        margin-left: -1px;
        margin-right: -1px;
    }

    div#sale-products {
        margin-bottom: 0;
    }

    .custom-product-space .products .product-item {
        padding-left: 1px;
        padding-right: 1px;
        margin-bottom: 2px;
    }

    .button-homepage-see-all-items {
        margin-top: 25px;
    }

</style>

<!--div class="row home-banner no-padding homepage-video">
	<div class="col-md-12">
		<div class="wpb_wrapper vc_column-inner">
			<div class="porto-ibanner mb-0">
                            <a href="https://www.primaryweapons.com/suppressors/" target="_blank" title="Suppressors">
				<video autoplay="autoplay" loop="loop" muted="muted" style="width:100%" playsinline autoplay muted loop>
					<source src="https://primaryweapons.com/media/wysiwyg/video/video_home.mp4" type="video/mp4"/>
				</video>
                            </a>
				<div class="porto-ibanner-desc no-padding d-flex" style="z-index: -999">
					<div class="container">
						<div class="porto-ibanner-container">
                                                   <div class="transparent-banner-wrapper" style="display:none !important;"><span>BDE® 762 Sound Signature Review from PEW SCIENCE</span>
                                                     <a href="https://pewscience.com/sound-signature-reviews-free/sss-6-121-pws-bde-762-savage-308" title="Read More" target="_blank"><button class="btn btn-modern btn-md">Read More</button></a>
                                                   </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div-->

<!-- Static Block Title: "Homepage Carousel Slider Instead of Video (PWS-37)", Identifier: "homepage_slider_pws" -->
<div class="widget block block-static-block">
    <style>#html-body [data-pb-style=RP1612P]{justify-content:flex-start;display:flex;flex-direction:column;background-position:center top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;min-height:600px}#html-body [data-pb-style=QKJRR1Y]{text-align:center;min-height:600px;padding-top:10px}#html-body [data-pb-style=KA7JUB7]{background-position:center top;background-size:cover;background-repeat:no-repeat;text-align:center;min-height:600px}#html-body [data-pb-style=H5KN520]{min-height:600px;padding-bottom:10px;background-color:transparent}#html-body [data-pb-style=JC2O1VK]{background-position:center top;background-size:cover;background-repeat:no-repeat;text-align:center;min-height:600px}#html-body [data-pb-style=K1W7UA8]{min-height:600px;padding-bottom:10px;background-color:transparent}#html-body [data-pb-style=QIAL842]{background-position:center top;background-size:cover;background-repeat:no-repeat;text-align:center;min-height:600px}#html-body [data-pb-style=XFJNQCX]{min-height:600px;padding-bottom:10px;background-color:transparent}#html-body [data-pb-style=V1AHR5S]{background-position:center top;background-size:cover;background-repeat:no-repeat;text-align:center;min-height:600px}#html-body [data-pb-style=QK339VQ]{min-height:600px;padding-bottom:10px;background-color:transparent}#html-body [data-pb-style=LU87W40]{background-position:center top;background-size:cover;background-repeat:no-repeat;text-align:center;min-height:600px}#html-body [data-pb-style=RAFKTEU]{min-height:600px;padding-bottom:10px;background-color:transparent}#html-body [data-pb-style=WMABARH]{background-position:center top;background-size:cover;background-repeat:no-repeat;text-align:center;min-height:600px}#html-body [data-pb-style=TRQ4CGD]{min-height:600px;padding-bottom:10px;background-color:transparent}</style><div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="RP1612P"><div class="pagebuilder-slider slick-initialized slick-slider slick-dotted" data-content-type="slider" data-appearance="default" data-autoplay="true" data-autoplay-speed="4000" data-fade="false" data-infinite-loop="true" data-show-arrows="false" data-show-dots="true" data-element="main" data-pb-style="QKJRR1Y"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 20436px; transform: translate3d(-4716px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 1572px;" tabindex="-1"><div><div data-content-type="slide" data-slide-name="MK1 Mod 2 Uppers" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/ar-series/uppers/ar-15-mk1-uppers/mk1-mod-2-m-uppers/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a0ac4 background-image-68458808dbd13" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="WMABARH"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="TRQ4CGD"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}</style><style type="text/css">.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}</style></a></div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 1572px;" role="tabpanel" id="slick-slide00" tabindex="-1" aria-describedby="slick-slide-control00"><div><div data-content-type="slide" data-slide-name="BDE Free Offer" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/suppressors/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a0819 background-image-68458808dba7d" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025slideshowPUBFRCoffer.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="KA7JUB7"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="H5KN520"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0819 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowPUBFRCoffer.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0819 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0819 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg);}}</style><style type="text/css">.background-image-68458808dba7d {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowPUBFRCoffer.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dba7d {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dba7d {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg);}}</style></a></div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1572px;" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" tabindex="-1"><div><div data-content-type="slide" data-slide-name="BDE 556" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/bde-556-suppressor/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a08b1 background-image-68458808dbb14" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025slideshowBDE556TI.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="JC2O1VK"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="K1W7UA8"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a08b1 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE556TI.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a08b1 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a08b1 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg);}}</style><style type="text/css">.background-image-68458808dbb14 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE556TI.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbb14 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbb14 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg);}}</style></a></div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 1572px;" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02"><div><div data-content-type="slide" data-slide-name="BDE 762" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/bde-762-suppressor/" target="" data-link-type="default" title="" data-element="link" tabindex="0"><div class="pagebuilder-slide-wrapper background-image-68458808a0932 background-image-68458808dbbaa" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025slideshowBDE762TI.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="QIAL842"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="XFJNQCX"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0932 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE762TI.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0932 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0932 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg);}}</style><style type="text/css">.background-image-68458808dbbaa {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE762TI.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbbaa {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbbaa {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg);}}</style></a></div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 1572px;" tabindex="-1" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03"><div><div data-content-type="slide" data-slide-name="BDE 22" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/bde-22-suppressor/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a09cd background-image-68458808dbc24" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025slideshowBDE22Tiv2.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="V1AHR5S"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="QK339VQ"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a09cd {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE22Tiv2.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a09cd {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a09cd {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg);}}</style><style type="text/css">.background-image-68458808dbc24 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE22Tiv2.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbc24 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbc24 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg);}}</style></a></div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 1572px;" tabindex="-1" role="tabpanel" id="slick-slide04" aria-describedby="slick-slide-control04"><div><div data-content-type="slide" data-slide-name="MK1 Mod 1 Uppers" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/ar-series/uppers/ar-15-mk1-uppers/mk1-mod-1-m-uppers/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a0a49 background-image-68458808dbc9c" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M1Uppers.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="LU87W40"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="RAFKTEU"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0a49 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M1Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0a49 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0a49 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg);}}</style><style type="text/css">.background-image-68458808dbc9c {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M1Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbc9c {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbc9c {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg);}}</style></a></div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 1572px;" tabindex="-1" role="tabpanel" id="slick-slide05" aria-describedby="slick-slide-control05"><div><div data-content-type="slide" data-slide-name="MK1 Mod 2 Uppers" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/ar-series/uppers/ar-15-mk1-uppers/mk1-mod-2-m-uppers/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a0ac4 background-image-68458808dbd13" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="WMABARH"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="TRQ4CGD"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}</style><style type="text/css">.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}</style></a></div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 1572px;" tabindex="-1"><div><div data-content-type="slide" data-slide-name="BDE Free Offer" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/suppressors/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a0819 background-image-68458808dba7d" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025slideshowPUBFRCoffer.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="KA7JUB7"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="H5KN520"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0819 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowPUBFRCoffer.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0819 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0819 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg);}}</style><style type="text/css">.background-image-68458808dba7d {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowPUBFRCoffer.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dba7d {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dba7d {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-FreePUBFRC-offer2.jpg);}}</style></a></div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 1572px;" tabindex="-1"><div><div data-content-type="slide" data-slide-name="BDE 556" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/bde-556-suppressor/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a08b1 background-image-68458808dbb14" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025slideshowBDE556TI.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="JC2O1VK"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="K1W7UA8"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a08b1 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE556TI.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a08b1 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a08b1 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg);}}</style><style type="text/css">.background-image-68458808dbb14 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE556TI.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbb14 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbb14 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE556TI.jpg);}}</style></a></div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 1572px;" tabindex="-1"><div><div data-content-type="slide" data-slide-name="BDE 762" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/bde-762-suppressor/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a0932 background-image-68458808dbbaa" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025slideshowBDE762TI.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="QIAL842"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="XFJNQCX"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0932 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE762TI.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0932 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0932 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg);}}</style><style type="text/css">.background-image-68458808dbbaa {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE762TI.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbbaa {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbbaa {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE762Ti.jpg);}}</style></a></div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 1572px;" tabindex="-1"><div><div data-content-type="slide" data-slide-name="BDE 22" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/bde-22-suppressor/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a09cd background-image-68458808dbc24" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025slideshowBDE22Tiv2.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="V1AHR5S"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="QK339VQ"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a09cd {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE22Tiv2.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a09cd {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a09cd {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg);}}</style><style type="text/css">.background-image-68458808dbc24 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025slideshowBDE22Tiv2.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbc24 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbc24 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-BDE22Ti-V2.jpg);}}</style></a></div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 1572px;" tabindex="-1"><div><div data-content-type="slide" data-slide-name="MK1 Mod 1 Uppers" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/ar-series/uppers/ar-15-mk1-uppers/mk1-mod-1-m-uppers/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a0a49 background-image-68458808dbc9c" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M1Uppers.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="LU87W40"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="RAFKTEU"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0a49 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M1Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0a49 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0a49 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg);}}</style><style type="text/css">.background-image-68458808dbc9c {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M1Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbc9c {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbc9c {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-mobile-MK1M1upper.jpg);}}</style></a></div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 1572px;" tabindex="-1"><div><div data-content-type="slide" data-slide-name="MK1 Mod 2 Uppers" data-appearance="poster" data-show-button="never" data-show-overlay="never" data-element="main" style="width: 100%; display: inline-block;"><a href="https://primaryweapons.com/ar-series/uppers/ar-15-mk1-uppers/mk1-mod-2-m-uppers/" target="" data-link-type="default" title="" data-element="link" tabindex="-1"><div class="pagebuilder-slide-wrapper background-image-68458808a0ac4 background-image-68458808dbd13" data-background-images="{\&quot;desktop_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg\&quot;,\&quot;mobile_image\&quot;:\&quot;https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg\&quot;}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="wrapper" data-pb-style="WMABARH"><div class="pagebuilder-overlay pagebuilder-poster-overlay" data-overlay-color="" aria-label="" title="" data-element="overlay" data-pb-style="TRQ4CGD"><div class="pagebuilder-poster-content"><div data-element="content"></div></div></div></div><style type="text/css">.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808a0ac4 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}</style><style type="text/css">.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2024-slideshow-MK1M2Uppers.jpg);}@media only screen and (max-width: 768px) and (min-width: 640px) {.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}@media only screen and (max-width: 640px) {.background-image-68458808dbd13 {background-image: url(https://primaryweapons.com/media/wysiwyg/2025-slideshow-MK1M2uppers-mobile.jpg);}}</style></a></div></div></div></div></div><ul class="slick-dots" role="tablist" style=""><li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 6" tabindex="-1">1</button></li><li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 6" tabindex="-1">2</button></li><li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 6" tabindex="0" aria-selected="true">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 6" tabindex="-1">4</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 6" tabindex="-1">5</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control05" aria-controls="slick-slide05" aria-label="6 of 6" tabindex="-1">6</button></li></ul></div></div></div>


<div class="transparent-banner-wrapper-mobile" style="display:none !important;">
   <span>BDE® 762 Sound Signature Review from PEW SCIENCE</span>
   <a href="https://pewscience.com/sound-signature-reviews-free/sss-6-121-pws-bde-762-savage-308" title="Read More" target="_blank"><button class="btn btn-modern btn-md">Read More</button></a>
</div>
<div class="porto-inner-container p-b homepage-text" style="margin-top: 20px;">
	<div class="porto-wrap-container container">
		<div class="row">
			<div class="vc_column_container col-md-12">
				<div class="wpb_wrapper vc_column-inner">
					<div id="sale-products" class="porto-products wpb_content_element custom-product-space">
						<div class="slider-wrapper">
							 
        <div class="products wrapper grid products-grid   ">
                <div class="filterproducts products products-slider list items product-items owl-carousel nav-center-images-only nav-style-4 show-nav-hover show-dots-title-right dots-style-1 owl-loaded owl-drag">
                                                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 2796px;"><div class="owl-item active" style="width: 349.5px;"><div class="item product product-item">                <div class="product-item-info type1" data-container="product-grid">
                                        <div class="product photo product-item-photo">
                        <a href="https://primaryweapons.com/mk118-mod-1-m-upper-223-wylde/" tabindex="-1">
                                                    <img class="product-image-photo default_image porto-lazyload porto-lazyload-loaded" data-src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/p/w/pws-mk118-mod1-01.jpg" width="350" height="350" alt="" src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/p/w/pws-mk118-mod1-01.jpg" style="">
                                                                                                                            </a>
                                                                        <!-- Dailydeal Product data -->
                                                <!-- Dailydeal Product End -->
                    </div>
                    <div class="product details product-item-details">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link" href="https://primaryweapons.com/mk118-mod-1-m-upper-223-wylde/">
                                MK118 MOD 1-M Upper .223 Wylde                            </a>
                        </strong>
                                                                                                                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="0%">
                                    <span style="width:0"><span>0%</span></span>
                                </div>
                            </div>
                        </div>
                                                
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="1061" data-price-box="product-id-1061">

    

<span class="price-container price-final_price tax weee">
        <span id="product-price-1061" data-price-amount="1129.95" data-price-type="finalPrice" class="price-wrapper "><span class="price">$1,129.95</span></span>
        </span>

</div>                                                
                                                <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                                                                                                                    <a href="#" class="action towishlist actions-secondary" title="Add to Wish List" aria-label="Add to Wish List" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:1061,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span>
                                    </a>
                                                                                                                                <div class="actions-primary">
                                                                                                                        <div class="stock unavailable"><span>Out of stock</span></div>
                                                                                                            </div>
                                                                                                                                                                                                <a href="#" class="action tocompare actions-secondary" title="Add to Compare" aria-label="Add to Compare" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;1061&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" role="button">
                                    <span>Add to Compare</span>
                                </a>
                                                            </div>
                        </div>
                                            </div>
                </div>
                                            </div></div><div class="owl-item active" style="width: 349.5px;"><div class="item product product-item">                <div class="product-item-info type1" data-container="product-grid">
                                        <div class="product photo product-item-photo">
                        <a href="https://primaryweapons.com/uxr-223-wylde-16-barrel-w-frc-comp-1/" tabindex="-1">
                                                    <img class="product-image-photo default_image porto-lazyload porto-lazyload-loaded" data-src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/u/x/uxr_14_1.jpg" width="350" height="350" alt="" src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/u/x/uxr_14_1.jpg" style="">
                                                                                                                            </a>
                                                                        <!-- Dailydeal Product data -->
                                                <!-- Dailydeal Product End -->
                    </div>
                    <div class="product details product-item-details">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link" href="https://primaryweapons.com/uxr-223-wylde-16-barrel-w-frc-comp-1/">
                                UXR .223 Wylde, 14.5" barrel w/ FRC Comp pin/weld                            </a>
                        </strong>
                                                                                                                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="0%">
                                    <span style="width:0"><span>0%</span></span>
                                </div>
                            </div>
                        </div>
                                                
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="1180" data-price-box="product-id-1180">

    

<span class="price-container price-final_price tax weee">
        <span id="product-price-1180" data-price-amount="2650" data-price-type="finalPrice" class="price-wrapper "><span class="price">$2,650.00</span></span>
        </span>

</div>                                                
                                                <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                                                                                                                    <a href="#" class="action towishlist actions-secondary" title="Add to Wish List" aria-label="Add to Wish List" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:1180,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span>
                                    </a>
                                                                                                                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://primaryweapons.com/checkout/cart/add/uenc/aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v/product/1180/" method="post">
                                            <input type="hidden" name="product" value="1180">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20vY2hlY2tvdXQvY2FydC9hZGQvdWVuYy9hSFIwY0hNNkx5OXdjbWx0WVhKNWQyVmhjRzl1Y3k1amIyMHYvcHJvZHVjdC8xMTgwLw~~">
                                                                                        <input name="form_key" type="hidden" value="6ezFvIJoi15vxx9e">                                            <button type="submit" title="Add to Cart" class="action tocart primary">
                                                <span>Add to Cart</span>
                                            </button>
                                        </form>
                                                                    </div>
                                                                                                                                                                                                <a href="#" class="action tocompare actions-secondary" title="Add to Compare" aria-label="Add to Compare" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;1180&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" role="button">
                                    <span>Add to Compare</span>
                                </a>
                                                            </div>
                        </div>
                                            </div>
                </div>
                                            </div></div><div class="owl-item active" style="width: 349.5px;"><div class="item product product-item">                <div class="product-item-info type1" data-container="product-grid">
                                        <div class="product photo product-item-photo">
                        <a href="https://primaryweapons.com/pws-logo-shirt-maroon-small/" tabindex="-1">
                                                    <img class="product-image-photo default_image porto-lazyload porto-lazyload-loaded" data-src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/d/s/dsc09942_1_1.jpg" width="350" height="350" alt="" src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/d/s/dsc09942_1_1.jpg" style="">
                                                                                                                            </a>
                                                                        <!-- Dailydeal Product data -->
                                                <!-- Dailydeal Product End -->
                    </div>
                    <div class="product details product-item-details">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link" href="https://primaryweapons.com/pws-logo-shirt-maroon-small/">
                                PWS LOGO SHIRT - Maroon - Small                            </a>
                        </strong>
                                                                                                                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="0%">
                                    <span style="width:0"><span>0%</span></span>
                                </div>
                            </div>
                        </div>
                                                
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="1092" data-price-box="product-id-1092">

    

<span class="price-container price-final_price tax weee">
        <span id="product-price-1092" data-price-amount="19.99" data-price-type="finalPrice" class="price-wrapper "><span class="price">$19.99</span></span>
        </span>

</div>                                                
                                                <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                                                                                                                    <a href="#" class="action towishlist actions-secondary" title="Add to Wish List" aria-label="Add to Wish List" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:1092,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span>
                                    </a>
                                                                                                                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://primaryweapons.com/checkout/cart/add/uenc/aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v/product/1092/" method="post">
                                            <input type="hidden" name="product" value="1092">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20vY2hlY2tvdXQvY2FydC9hZGQvdWVuYy9hSFIwY0hNNkx5OXdjbWx0WVhKNWQyVmhjRzl1Y3k1amIyMHYvcHJvZHVjdC8xMDkyLw~~">
                                                                                        <input name="form_key" type="hidden" value="6ezFvIJoi15vxx9e">                                            <button type="submit" title="Add to Cart" class="action tocart primary">
                                                <span>Add to Cart</span>
                                            </button>
                                        </form>
                                                                    </div>
                                                                                                                                                                                                <a href="#" class="action tocompare actions-secondary" title="Add to Compare" aria-label="Add to Compare" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;1092&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" role="button">
                                    <span>Add to Compare</span>
                                </a>
                                                            </div>
                        </div>
                                            </div>
                </div>
                                            </div></div><div class="owl-item active" style="width: 349.5px;"><div class="item product product-item">                <div class="product-item-info type1" data-container="product-grid">
                                        <div class="product photo product-item-photo">
                        <a href="https://primaryweapons.com/brn-180-gen-2-16in-upper-223-wylde-blem/" tabindex="-1">
                                                    <img class="product-image-photo default_image porto-lazyload porto-lazyload-loaded" data-src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/b/r/brn1_1.jpg" width="350" height="350" alt="" src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/b/r/brn1_1.jpg" style="">
                                                                                                                            </a>
                                                                        <!-- Dailydeal Product data -->
                                                <!-- Dailydeal Product End -->
                    </div>
                    <div class="product details product-item-details">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link" href="https://primaryweapons.com/brn-180-gen-2-16in-upper-223-wylde-blem/">
                                BRN-180 GEN 2 16in UPPER .223 WYLDE  - Blem                            </a>
                        </strong>
                                                                                                                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="0%">
                                    <span style="width:0"><span>0%</span></span>
                                </div>
                            </div>
                        </div>
                                                
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="991" data-price-box="product-id-991">

    

<span class="price-container price-final_price tax weee">
        <span id="product-price-991" data-price-amount="588.57" data-price-type="finalPrice" class="price-wrapper "><span class="price">$588.57</span></span>
        </span>

</div>                                                
                                                <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                                                                                                                    <a href="#" class="action towishlist actions-secondary" title="Add to Wish List" aria-label="Add to Wish List" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:991,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span>
                                    </a>
                                                                                                                                <div class="actions-primary">
                                                                                                                        <div class="stock unavailable"><span>Out of stock</span></div>
                                                                                                            </div>
                                                                                                                                                                                                <a href="#" class="action tocompare actions-secondary" title="Add to Compare" aria-label="Add to Compare" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;991&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" role="button">
                                    <span>Add to Compare</span>
                                </a>
                                                            </div>
                        </div>
                                            </div>
                </div>
                                            </div></div><div class="owl-item" style="width: 349.5px;"><div class="item product product-item">                <div class="product-item-info type1" data-container="product-grid">
                                        <div class="product photo product-item-photo">
                        <a href="https://primaryweapons.com/pws-logo-shirt-maroon-xxl/" tabindex="-1">
                                                    <img class="product-image-photo default_image porto-lazyload porto-lazyload-loaded" data-src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/d/s/dsc09942_1_5.jpg" width="350" height="350" alt="" src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/d/s/dsc09942_1_5.jpg" style="">
                                                                                                                            </a>
                                                                        <!-- Dailydeal Product data -->
                                                <!-- Dailydeal Product End -->
                    </div>
                    <div class="product details product-item-details">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link" href="https://primaryweapons.com/pws-logo-shirt-maroon-xxl/">
                                PWS LOGO SHIRT - Maroon - XXL                            </a>
                        </strong>
                                                                                                                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="0%">
                                    <span style="width:0"><span>0%</span></span>
                                </div>
                            </div>
                        </div>
                                                
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="1096" data-price-box="product-id-1096">

    

<span class="price-container price-final_price tax weee">
        <span id="product-price-1096" data-price-amount="19.99" data-price-type="finalPrice" class="price-wrapper "><span class="price">$19.99</span></span>
        </span>

</div>                                                
                                                <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                                                                                                                    <a href="#" class="action towishlist actions-secondary" title="Add to Wish List" aria-label="Add to Wish List" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:1096,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span>
                                    </a>
                                                                                                                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://primaryweapons.com/checkout/cart/add/uenc/aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v/product/1096/" method="post">
                                            <input type="hidden" name="product" value="1096">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20vY2hlY2tvdXQvY2FydC9hZGQvdWVuYy9hSFIwY0hNNkx5OXdjbWx0WVhKNWQyVmhjRzl1Y3k1amIyMHYvcHJvZHVjdC8xMDk2Lw~~">
                                                                                        <input name="form_key" type="hidden" value="6ezFvIJoi15vxx9e">                                            <button type="submit" title="Add to Cart" class="action tocart primary">
                                                <span>Add to Cart</span>
                                            </button>
                                        </form>
                                                                    </div>
                                                                                                                                                                                                <a href="#" class="action tocompare actions-secondary" title="Add to Compare" aria-label="Add to Compare" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;1096&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" role="button">
                                    <span>Add to Compare</span>
                                </a>
                                                            </div>
                        </div>
                                            </div>
                </div>
                                            </div></div><div class="owl-item" style="width: 349.5px;"><div class="item product product-item">                <div class="product-item-info type1" data-container="product-grid">
                                        <div class="product photo product-item-photo">
                        <a href="https://primaryweapons.com/uxr-conversion-kit-308-win-16-barrel/" tabindex="-1">
                                                    <img class="product-image-photo default_image porto-lazyload" data-src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/u/x/uxr_conv_308_blk_16.1.jpg" width="350" height="350" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAPT09P///yH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" style="height: 337.5px;">
                                                                                                                            </a>
                                                                        <!-- Dailydeal Product data -->
                                                <!-- Dailydeal Product End -->
                    </div>
                    <div class="product details product-item-details">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link" href="https://primaryweapons.com/uxr-conversion-kit-308-win-16-barrel/">
                                UXR Conversion Kit .308 Win, 16" barrel                            </a>
                        </strong>
                                                                                                                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="0%">
                                    <span style="width:0"><span>0%</span></span>
                                </div>
                            </div>
                        </div>
                                                
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="1080" data-price-box="product-id-1080">

    

<span class="price-container price-final_price tax weee">
        <span id="product-price-1080" data-price-amount="599.95" data-price-type="finalPrice" class="price-wrapper "><span class="price">$599.95</span></span>
        </span>

</div>                                                
                                                <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                                                                                                                    <a href="#" class="action towishlist actions-secondary" title="Add to Wish List" aria-label="Add to Wish List" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:1080,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span>
                                    </a>
                                                                                                                                <div class="actions-primary">
                                                                                                                        <div class="stock unavailable"><span>Out of stock</span></div>
                                                                                                            </div>
                                                                                                                                                                                                <a href="#" class="action tocompare actions-secondary" title="Add to Compare" aria-label="Add to Compare" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;1080&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" role="button">
                                    <span>Add to Compare</span>
                                </a>
                                                            </div>
                        </div>
                                            </div>
                </div>
                                            </div></div><div class="owl-item" style="width: 349.5px;"><div class="item product product-item">                <div class="product-item-info type1" data-container="product-grid">
                                        <div class="product photo product-item-photo">
                        <a href="https://primaryweapons.com/1913-uxr-picatinny-adapter/" tabindex="-1">
                                                    <img class="product-image-photo default_image porto-lazyload" data-src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/p/a/part_resize_uxr_02.jpg" width="350" height="350" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAPT09P///yH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" style="height: 337.5px;">
                                                                                                                            </a>
                                                                        <!-- Dailydeal Product data -->
                                                <!-- Dailydeal Product End -->
                    </div>
                    <div class="product details product-item-details">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link" href="https://primaryweapons.com/1913-uxr-picatinny-adapter/">
                                1913 UXR Picatinny Adapter                            </a>
                        </strong>
                                                                                                                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="0%">
                                    <span style="width:0"><span>0%</span></span>
                                </div>
                            </div>
                        </div>
                                                
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="1205" data-price-box="product-id-1205">

    

<span class="price-container price-final_price tax weee">
        <span id="product-price-1205" data-price-amount="69.95" data-price-type="finalPrice" class="price-wrapper "><span class="price">$69.95</span></span>
        </span>

</div>                                                
                                                <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                                                                                                                    <a href="#" class="action towishlist actions-secondary" title="Add to Wish List" aria-label="Add to Wish List" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:1205,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span>
                                    </a>
                                                                                                                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://primaryweapons.com/checkout/cart/add/uenc/aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v/product/1205/" method="post">
                                            <input type="hidden" name="product" value="1205">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20vY2hlY2tvdXQvY2FydC9hZGQvdWVuYy9hSFIwY0hNNkx5OXdjbWx0WVhKNWQyVmhjRzl1Y3k1amIyMHYvcHJvZHVjdC8xMjA1Lw~~">
                                                                                        <input name="form_key" type="hidden" value="6ezFvIJoi15vxx9e">                                            <button type="submit" title="Add to Cart" class="action tocart primary">
                                                <span>Add to Cart</span>
                                            </button>
                                        </form>
                                                                    </div>
                                                                                                                                                                                                <a href="#" class="action tocompare actions-secondary" title="Add to Compare" aria-label="Add to Compare" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;1205&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" role="button">
                                    <span>Add to Compare</span>
                                </a>
                                                            </div>
                        </div>
                                            </div>
                </div>
                                            </div></div><div class="owl-item" style="width: 349.5px;"><div class="item product product-item">                <div class="product-item-info type1" data-container="product-grid">
                                        <div class="product photo product-item-photo">
                        <a href="https://primaryweapons.com/frc-3-port-223-compensator-flat-13-8-1-2-28/" tabindex="-1">
                                                    <img class="product-image-photo default_image porto-lazyload" data-src="https://primaryweapons.com/media/catalog/product/cache/94a0c49f507e29b132b18858154990b1/f/r/frc-3-port-compensator-flat-13-8.jpg" width="350" height="350" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAPT09P///yH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" style="height: 337.5px;">
                                                                                                                            </a>
                                                                        <!-- Dailydeal Product data -->
                                                <!-- Dailydeal Product End -->
                    </div>
                    <div class="product details product-item-details">
                                                <strong class="product name product-item-name">
                            <a class="product-item-link" href="https://primaryweapons.com/frc-3-port-223-compensator-flat-13-8-1-2-28/">
                                FRC 3-port 223 Compensator Flat, 13.8 - (1/2-28)                            </a>
                        </strong>
                                                                                                                        <div class="product-reviews-summary short">
                            <div class="rating-summary">
                                <span class="label"><span>Rating:</span></span>
                                <div class="rating-result" title="0%">
                                    <span style="width:0"><span>0%</span></span>
                                </div>
                            </div>
                        </div>
                                                
                                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="1132" data-price-box="product-id-1132">

    

<span class="price-container price-final_price tax weee">
        <span id="product-price-1132" data-price-amount="99.95" data-price-type="finalPrice" class="price-wrapper "><span class="price">$99.95</span></span>
        </span>

</div>                                                
                                                <div class="product-item-inner">
                            <div class="product actions product-item-actions">
                                                                                                                                    <a href="#" class="action towishlist actions-secondary" title="Add to Wish List" aria-label="Add to Wish List" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/wishlist\/index\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:1132,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" data-action="add-to-wishlist" role="button">
                                        <span>Add to Wish List</span>
                                    </a>
                                                                                                                                <div class="actions-primary">
                                                                                                                    <form data-role="tocart-form" action="https://primaryweapons.com/checkout/cart/add/uenc/aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v/product/1132/" method="post">
                                            <input type="hidden" name="product" value="1132">
                                            <input type="hidden" name="uenc" value="aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20vY2hlY2tvdXQvY2FydC9hZGQvdWVuYy9hSFIwY0hNNkx5OXdjbWx0WVhKNWQyVmhjRzl1Y3k1amIyMHYvcHJvZHVjdC8xMTMyLw~~">
                                                                                        <input name="form_key" type="hidden" value="6ezFvIJoi15vxx9e">                                            <button type="submit" title="Add to Cart" class="action tocart primary">
                                                <span>Add to Cart</span>
                                            </button>
                                        </form>
                                                                    </div>
                                                                                                                                                                                                <a href="#" class="action tocompare actions-secondary" title="Add to Compare" aria-label="Add to Compare" data-post="{&quot;action&quot;:&quot;https:\/\/primaryweapons.com\/catalog\/product_compare\/add\/&quot;,&quot;data&quot;:{&quot;product&quot;:&quot;1132&quot;,&quot;uenc&quot;:&quot;aHR0cHM6Ly9wcmltYXJ5d2VhcG9ucy5jb20v&quot;}}" role="button">
                                    <span>Add to Compare</span>
                                </a>
                                                            </div>
                        </div>
                                            </div>
                </div>
                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
    </div>
             
        <script type="text/javascript" nonce="">
    require([
        'jquery'
    ], function ($) {
    // Timer for LEFT time for Dailydeal product
        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        //Set date as magentodatetime
        var date = new Date('2025-06-08 12:54:32');
        var l_date = new Date();
        var offset_date = l_date - date;

        function showRemaining()
        {
            $(".sw-dailydeal-wrapper").each(function(){
                var unique_id = $(this).attr("data-unique-id");
                // get Value of dailydeal product
                var cid='countdown_'+unique_id;
                var daysid='countdown_days_'+unique_id;
                var hoursid='countdown_hours_'+unique_id;
                var minutesid='countdown_minutes_'+unique_id;
                var secondsid='countdown_seconds_'+unique_id;

                var startdateid='fromdate_'+unique_id;
                var id='todate_'+unique_id;

                var enddate = new Date($('#'+id).val());
                var dealstartdate=new Date($('#'+startdateid).val());

                var currentdate=new Date();

                //Get Difference between Two dates
                var distance = enddate - (currentdate - offset_date);

                $('.sw-dailydeal-wrapper').show();

                if (distance < 0) {
                   // clearInterval(timer);
                    $('#expired_'+unique_id).html("<span style='font-size:25px; color:#000;'>EXPIRED!<span>");

                } else if(dealstartdate > currentdate) {
                   $('.countdowncontainer_'+unique_id).hide();
                   var msg="<span style='font-size:15px; color:#000;'> Coming Soon..<br>Deal Start at:<br>"+$('#'+startdateid).val()+"<span>";
                   $('#expired_'+unique_id).html(msg);
                } else {
                    var days = Math.floor(distance / _day);
                    var hours = Math.floor((distance % _day) / _hour);
                    var minutes = Math.floor((distance % _hour) / _minute);
                    var seconds = Math.floor((distance % _minute) / _second);

                    if(hours < 10)
                        hours = "0" + hours;
                    if(minutes < 10)
                        minutes = "0" + minutes;
                    if(seconds < 10)
                        seconds = "0" + seconds;
                    $('.countdowncontainer_'+unique_id).show();
                    $('#'+daysid).html(days);
                    $('#'+hoursid).html(hours);
                    $('#'+minutesid).html(minutes);
                    $('#'+secondsid).html(seconds);
                }
            });
        }

        // Set Interval
        timer = setInterval(function()
        {
            showRemaining();
        }, 1000);
    });
    </script>
                    
    
							<script type="text/javascript">
								require([
									'jquery',
									'owl.carousel/owl.carousel.min'
								], function ($) {
									$("#sale-products .owl-carousel").owlCarousel({
										autoplay: false,
										autoplayTimeout: 5000,
										autoplayHoverPause: true,
										loop: false,
										navRewind: true,
										lazyLoad: true,
										margin: 0,
										nav: true,
										dots: false,
										responsive: {
											0: {
												items: 2
											},
											640: {
												items: 3
											},
											768: {
												items: 3
											},
											992: {
												items: 4
											},
											1200: {
												items: 4
											}
										}
									});
								});
							</script>
						</div>
						<div class="button-homepage-see-all-items" style="">
							<div class="wpb_wrapper vc_column-inner">
								<div class="btn-container mb-0 btn-sale text-center">
									<a href="https://primaryweapons.com/shop-all/">
									<button class="btn btn-modern btn-lg btn-pws" style="font-family: Roboto;">SEE ALL ITEMS</button>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="row mb-0 home-banners no-padding homepage-banner-mdj">
	<div class="col-md-12">
		<div class="">
			<div id="homepage-banner-mdj" class="">
				<img src="https://primaryweapons.com/media/wysiwyg/smartwave/porto/homepage/PWS-Website-Homepage-BDE-nologo.jpg" style="object-fit: contain; position: relative">
				<div class="content-container">
					<div class="text-container">
						<h4 class="">3D PRINTED</h4>
						<h3 class="">SUPPRESSORS</h3>
<br>
<br>
					</div>
					<div class="button-container">
						<a href="https://primaryweapons.com/suppressors/">
						<button class="btn btn-modern btn-md">LEARN MORE</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="porto-inner-container homepage-follow" style="margin: 40px 0;">
	<div class="porto-wrap-container container">
		<div class="row">
			<img src="https://primaryweapons.com/media/homepage/pws-black.png" style="object-fit: contain; position: relative; max-height: 30px; margin-right: 10px;">
			<p class="follow-us" style="margin: 0 40px 0 0;">FOLLOW US</p>
			<div class="homepage-social-icons">
				<a href="https://www.facebook.com/primaryweapons" target="_blank"><i class="homepage-socials fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/primaryweapons" target="_blank"><i class="homepage-socials fab fa-twitter"></i></a>
				<a href="https://www.instagram.com/primaryweapons/" target="_blank"><i class="homepage-socials fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/c/PrimaryWeaponsSystems" target="_blank"><i class="homepage-socials fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="homepage-instagram" style="position: relative; object-fit: cover; background-image: url('https://primaryweapons.com/media//wysiwyg/newimages/IG_Image.png');">
	 
    <div class="insta-items grid-items">
              <div id="instafeed" class="photo-instagrams row" style="margin-left: -10px;margin-right: -10px;opacity:0;"></div>
          </div>
     
    <script type="text/javascript" nonce="">
        require([
            'jquery',
            'imagesloaded',
            'owl.carousel/owl.carousel.min'
        ], function ($) {
          var instagram = $('#instafeed'),
              token = 'IGQVJWN1JEWG1MMnpwMmZArV29sNzhIb2VoWkJFdzR6YlFEeXk5U2tEbXJxVjEycTZAHdlNzOUpjZAzhvYmdFelEzVmFHQVVLU0dKRjNPczBka0dOenlCRzVKLWFXTF9uLTN5ZAzNMRDJ3',
              count = '6',
              url = '//graph.instagram.com/me/media?fields=caption,id,media_type,media_url,permalink,thumbnail_url,timestamp,username&access_token=' + token,
              desktop_large = '6',
              desktop = '6',
              tablet = '4',
              mobile = '2',
              margin = 0;
          $.ajax({
            type: 'GET',
            dataType: 'jsonp',
            cache: false,
            url: url,
            success: function(data) {
              if(data && data.length > 0) {
               for (var i = 0; i < count; i++) {
                if (data.data[i]) {
                  if(data.data[i].media_type == 'IMAGE') {
                                              instagram.append("<div class='item insta-item item col-xl-2 col-lg-3 col-sm4 col-6' style='padding:10px;' data-date='"+data.data[i].timestamp+"' data-sortid='"+i*2+"'><a target='_blank' href='" + data.data[i].permalink +"'><span class='content'><i class='porto-icon-instagram'></i></span><img class='instagram-image' src='" + data.data[i].media_url +"' /></a></div>");
                                        }
                }
}
              }
              instagram.imagesLoaded().animate({ 'opacity' : 1 }, 500);
                        }
          });
        });
    </script>

	<div class="insta-follow">
		<i class="fa icon-instagram"></i>
		<h3>Instagram</h3>
		<span>@primaryweapons</span>
		<a class="btn btn-default" href="https://www.instagram.com/primaryweapons/" target="_blank">Follow</a>
	</div>
</div>
<div class="porto-inner-container p-b homepage-text-2" style="margin: 20px 0;">
	<div class="porto-wrap-container container">
		<div class="row" style="flex-direction: row; ">
			<div class="about-us-text-segment">
				<div class="title" style="display: flex; flex-direction: row">
					<div class="icon">
						<img src="https://primaryweapons.com/media/homepage/pws-black.png" style="object-fit: contain; position: relative; max-height: 30px; margin-right: 10px;">
					</div>
					<div class="text">ABOUT US</div>
				</div>
				<div class="text">Primary Weapons Systems was formed by firearm enthusiasts in 2008. Starting out by producing muzzle devices, we tested our compensators on all different types of rifles - from M4s to AK-47s. After using both styles of rifles in testing with high round counts, the
					difference in maintenance needed was both astounding. From that basic realization, the PWS long-stroke piston system was born; keeping the core values of the AR-15 design, while also lessening the need for maintenance in high-volume fire situations and adverse conditions.
				</div>
				<a href="https://primaryweapons.com/about-us/">
				<div class="action submit primary">Read more</div>
				</a>
			</div>
			<div class="about-us-image-segment">
				<img src="https://primaryweapons.com/media/homepage/2021-11-19-14-43.png" style="object-fit: contain;">
			</div>
		</div>
	</div>
</div>
<div class="porto-inner-container p-b homepage-form" style="margin: 20px 0;">
	<div class="porto-wrap-container container">
		<div class="row">
			<div class="form-container">
				<div class="form-title">
					<img src="https://primaryweapons.com/media/wysiwyg/newimages/white_symbol_07.png" style="object-fit: contain; position: relative; max-height: 30px; margin-right: 10px;">
					<p>Contact Us</p>
				</div>
				<form class="form contact" action="/contact/index/post" id="contact-form" method="post" data-hasrequired="* Required Fields" novalidate="novalidate">
    <fieldset class="fieldset">
        <div class="fieldset row">
            <div class="fields col-md-12">
                <div class="field name required">
                    <label class="label" for="name"><span>First Name</span></label>
                    <div class="control">
                        <input name="name" placeholder="First Name..." id="name" title="First Name..." value="" class="input-text" type="text" data-validate="{required:true}" aria-required="true">
                    </div>
                </div>
                <div class="field lastname required">
                    <label class="label" for="lastname"><span>Last Name</span></label>
                    <div class="control">
                        <input name="lastname" placeholder="Last name..." id="lastname" title="Last Name..." value="" class="input-text" type="text" data-validate="{required:true}" aria-required="true">
                    </div>
                </div>
                <div class="field email required">
                    <label class="label" for="email"><span>Email</span></label>
                    <div class="control">
                        <input name="email" placeholder="Email..." id="email" title="Email..." value="" class="input-text" type="email" data-validate="{required:true, 'validate-email':true}" aria-required="true">
                    </div>
                </div>
                <div class="field telephone">
                    <label class="label" for="telephone"><span>Phone Number</span></label>
                    <div class="control">
                        <input name="telephone" placeholder="Phone..." id="telephone" title="Phone Number..." value="" class="input-text" type="text">
                    </div>
                </div>
                <div class="field comment required">
                    <label class="subject" for="subject"><span>Subject</span></label>
                    <select id="subject" name="subject">
                        <option value="choose" disabled="" selected="">Choose subject</option>
                        <option value="general">General</option>
                        <option value="sales">Sales</option>
                        <option value="le-mil">LE/MIL Discount</option>
                        <option value="mk1-1m">MK1 MOD 1-M</option>
                        <option value="mk1-2m">MK1 MOD 2-M</option>
                        <option value="mk2-1m">MK2 MOD 1-M</option>
                        <option value="pcc">PCC</option>
                        <option value="muzzle">Muzzle Devices</option>
                        <option value="parts">Parts &amp; Accessories</option>
                        <option value="gear">Gear</option>
                    </select>
                </div>
                <div class="field comment required">
                    <label class="label" for="comment"><span>Message</span></label>
                    <div class="control">
                        <input name="comment" id="comment" placeholder="Message..." title="Message..." class="input-text" type="text" data-validate="{required:true}" aria-required="true">
                    </div>
                </div>
            </div>
                    </div>
        <div class="field choice newsletter">
            <input type="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" class="checkbox">
            <label for="is_subscribed" class="label"><span>Sign Up for Newsletter</span></label>
        </div>
    </fieldset>
    <div class="actions-toolbar">
        <div class="primary">
            <input type="hidden" name="hideit" id="hideit" value="">
            <button type="submit" title="Submit" class="action submit primary" am-captcha-protect="true">
                <span>Submit</span>
            </button>
        </div>
    </div>
</form>

			</div>
		</div>
	</div>
</div></div></div></div></main><footer class="page-footer"><div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
                    <div class="row">
            <div class="col-lg-4"><style>#html-body [data-pb-style=L2WRMH6]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}</style><div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="L2WRMH6"><div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true"><div class="footer-social-icons">
<a href="https://www.facebook.com/primaryweapons" target="_blank"><i class="footer-socials fab fa-facebook-f"></i></a>
<a href="https://twitter.com/primaryweapons" target="_blank"><i class="footer-socials fab fa-twitter"></i></a>
<a href="https://www.instagram.com/primaryweapons/" target="_blank"><i class="footer-socials fab fa-instagram"></i></a>
<a href="https://www.youtube.com/c/PrimaryWeaponsSystems" target="_blank"><i class="footer-socials fab fa-youtube"></i></a>
</div></div></div></div></div><div class="col-lg-4"><style>#html-body [data-pb-style=N45FRC9]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}</style><div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="N45FRC9"><div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true"><div class="block">
    <div class="block-title"><strong><span>Newsletter</span></strong></div>
    <div class="block-content">
        <div class="block newsletter">
    <div class="content">
        <form class="form subscribe" novalidate="novalidate" action="https://primaryweapons.com/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
            <div class="field newsletter">
                <label class="label" for="footer_newsletter"><span>Sign Up for Our Newsletter:</span></label>
                <div class="control">
                    <input name="email" type="email" id="footer_newsletter" data-validate="{required:true, 'validate-email':true}" placeholder="Email Address">
                </div>
            </div>
            <div class="actions">
                <button class="action subscribe primary" title="Subscribe" type="submit">
                    <span>Subscribe</span>
                </button>
            </div>
        </form>
    </div>
</div>

    </div>
</div>    </div></div></div></div><div class="col-lg-4"><style>#html-body [data-pb-style=L2FK8RX]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=ITBVKKO]{text-align:center;border-style:none}#html-body [data-pb-style=AJ9HNKP],#html-body [data-pb-style=BOVXPQY]{max-width:100%;height:auto}@media only screen and (max-width: 768px) { #html-body [data-pb-style=ITBVKKO]{border-style:none} }</style><div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="L2FK8RX"><figure data-content-type="image" data-appearance="full-width" data-element="main" data-pb-style="ITBVKKO"><img class="pagebuilder-mobile-hidden" src="https://primaryweapons.com/media/wysiwyg/PWS-web-footer-logo.png" alt="logo footer" title="" data-element="desktop_image" data-pb-style="BOVXPQY"><img class="pagebuilder-mobile-only" src="https://primaryweapons.com/media/wysiwyg/PWS-web-footer-logo.png" alt="logo footer" title="" data-element="mobile_image" data-pb-style="AJ9HNKP"></figure></div></div></div><div class="col-lg-12"><style>#html-body [data-pb-style=ADFCRE6]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}</style><div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="ADFCRE6"><div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true"><ul class="footer-navigation">
    <li><a href="/knowledgebase/">Faq</a></li>
    <li><a href="/contact/">Contact us</a></li>
    <li><a href="/about-us/">About us</a></li>
    <li><a href="/conditions-of-use/">Conditions of use</a></li>
    <li><a href="/privacy-policy/">Privacy policy</a></li>
    <li><a href="/locator/partnership/dealerlist/">Dealer Locator</a></li>

</ul>
</div></div></div></div>            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
                        <div class="custom-block f-right"></div>            <address>Copyright © 2007 - 2025 Primary Weapon Systems</address>
                    </div>
    </div>
</div>
<a href="javascript:void(0)" id="totop" style="display: none;"><em class="porto-icon-up-open"></em></a>  
 
  <script type="text/javascript" nonce="">
    require(['jquery', 'jquery/ui'], function($){

        $("li.ui-menu-item.warranty").on("mouseenter", function() {
            $(this).addClass("show");
        });

        $("li.ui-menu-item.warranty").on("click vclick", function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).toggleClass("show");

        });
        $(".warranty-ul").on("mouseleave", function() {
            $("li.ui-menu-item.warranty").removeClass("show");
        });
        $("li.ui-menu-item.warranty").mouseleave(function(e){
            var $this = $(this);

            var bottom = $this.offset().top + $this.outerHeight();

            if(e.pageY >= bottom) {

            } else {
                jQuery("li.ui-menu-item.warranty").removeClass("show");
            }
        });
    });
</script>
</footer>

    <div id="am-recaptcha-container" data-bind="scope:'amRecaptcha'"></div>

    
 
<script type="text/javascript" nonce="">
(function(d) { if (document.addEventListener) document.addEventListener('ltkAsyncListener', d);
    else {e = document.documentElement; e.ltkAsyncProperty = 0; e.attachEvent('onpropertychange', function (e) {
    if (e.propertyName == 'ltkAsyncProperty' && typeof _ltk !== 'undefined'){d();}});}})
    (function() { require(['listrak_utils'], function(utils) { if (typeof window.XMLHttpRequest !== 'undefined') {
    var ajaxOpen = window.XMLHttpRequest.prototype.open;
    window.XMLHttpRequest.prototype.open = function() {
        ajaxOpen.apply(this, arguments);
        if(arguments.length >= 2 && arguments[1].indexOf("//" + location.hostname) == arguments[1].indexOf("//")) {
            if (!utils.requesting && typeof this.addEventListener === 'function') {
                this.setRequestHeader("Listrak-Listening", "1");
                this.addEventListener("load", function(e) {
                    if (!utils.requesting
                        && typeof e.currentTarget !== 'undefined') {
                        if (e.currentTarget.getResponseHeader('Listrak-Change-Flag') !== null)
                            utils.track();
                        if (e.currentTarget.getResponseHeader('Listrak-InstantPurchase-Flag') !== null)
                            utils.order();
                    }
                });
            }
        }
    };
}
_ltk.Activity.AddPageBrowse(location.href); _ltk.Activity.Submit(); _ltk.SCA.CaptureEmail('newsletter', true); _ltk.SCA.CaptureEmail('email', true); _ltk.SCA.CaptureEmail('customer\u005C\u005Cu002Demail', true); utils.track(); }); });
</script> 
<script type="text/javascript" nonce="">
require(['jquery'], function(jQuery) {
    (function (d, s, id, url) {
        var js, ljs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id; js.src = url; js.type = "text/javascript";
        ljs.parentNode.insertBefore(js, ljs);
    })(document, 'script', 'ltkSDK', '\u002F\u002Fcdn.listrakbi.com\u002Fscripts\u002Fscript.js?m=a4AzH0FNB6Rd&v=1');
});
</script><div id="age-verification-popup">
        <div class="modal-content-inner"><style>#html-body [data-pb-style=BNT8UVK]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=VRQ5C7N]{text-align:center}#html-body [data-pb-style=FTMK9U0]{text-align:center;border-style:none}#html-body [data-pb-style=BVE7MDF],#html-body [data-pb-style=IY2BLAU]{max-width:100%;height:auto}#html-body [data-pb-style=EN5GT1U]{text-align:center}#html-body [data-pb-style=RHEQN12]{display:inline-block}#html-body [data-pb-style=SYRRT88]{text-align:center}#html-body [data-pb-style=Y29UWK3]{display:inline-block}#html-body [data-pb-style=XKAPTXK]{text-align:center}@media only screen and (max-width: 768px) { #html-body [data-pb-style=FTMK9U0]{border-style:none} }</style><div data-content-type="row" data-appearance="contained" data-element="main"></div></div>
</div>

</div>


<?php
    get_footer();
?>
