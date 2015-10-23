<?php

    /* bd_botiga_animals
    ---------------------
    tbl_anunci:         anu_contingut, anu_data, anu_foto, anu_id, anu_nom, anu_tipus, contact_id, mun_id, raca_id
    tbl_contacte:       contact_adre, contact_id, contact_nom, contact_telf
    tbl_municipi:       municipi_id, municipi_nom
    tbl_raca:           raca_id, raca_nom, tipus_anim_id
    tbl_tipus_animal    tipus_anim_id, tipus_anim_nom
    */

    include 'mostrarDatos.php';

    $conexion = mysqli_connect('localhost','root','','bd_botiga_animals') or die ('Conexión errónea');

    $anuncio = mysqli_query($conexion,'SELECT * FROM tbl_anunci');

    $municipio = mysqli_query($conexion, 'SELECT * FROM tbl_municipi');

    $municipio2 = mysqli_query($conexion, 'SELECT * FROM tbl_municipi');

    $tipo_animal = mysqli_query($conexion, "SELECT * FROM tbl_tipus_animal");

    $raza = mysqli_query($conexion, "SELECT * FROM tbl_raca");

    $raza2 = mysqli_query($conexion, "SELECT * FROM tbl_raca");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0022)http://www.zooplus.es/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" class=" dk_fouc"><head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="./css/web-styles.css">
<link rel="stylesheet" type="text/css" media="screen" href="./css/web-styles-shop5.css">
<link rel="stylesheet" type="text/css" media="screen" href="./css/flyoutNavigation.css">
<link rel="stylesheet" type="text/css" media="screen" href="./css/styles.css">
<!--[if lt IE 9]><link rel="stylesheet" type="text/css" media="screen" href="http://media11.mediazs.com/theme/zooplus/zooplus.es/css/ie7_patch.css" />
<![endif]--><script type="text/javascript" async="" src="./image/Resonance.aspx"></script><script type="text/javascript" async="" src="./js/ga.js"></script><script language="javascript" src="./js/jquery-1.4.3min.js" type="text/javascript"></script>
<script language="javascript" src="./js/standard.js" type="text/javascript"></script>
<script language="javascript" src="./js/productCart.js" type="text/javascript"></script>
<!--[if lt IE 9]><script language="javascript" src="http://media11.mediazs.com/theme/zooplus/zooplus.es/javascript/ieFixes.js"  type="text/javascript"></script>
<![endif]-->
<script language="javascript" src="./js/xbrowserfixes.js" type="text/javascript"></script>
<script type="text/javascript" src="./js/resonance.js" async="" defer=""></script>
<script type="text/javascript" src="./js/satelliteLib-60fda947b5097be6df8f1fa662328713bf33fe9d.js"> </script>
<script type="text/javascript"> if (typeof getZoohippo == 'function'){getZoohippo(6, 'http', 'www.zooplus.es')};</script><script src="./js/zoohippo" type="text/javascript"></script><script type="text/javascript" src="./js/zooelephant"></script><script type="text/javascript" src="./js/zoorat"></script>

<link media="only screen and (max-width: 640px)" rel="alternate" href="http://m.zooplus.es/web/shop/homepage.htm">
<link media="handheld" rel="alternate" href="http://m.zooplus.es/web/shop/homepage.htm">
<link rel="SHORTCUT ICON" href="http://www.zooplus.es/favicon.ico">

<!-- Script de jQuery y filtrado de selects -->
<script src="./js/jquery-1.4.3min.js"></script>
<script src="./js/formulario.js"></script>

<title>Mascotas perdidas - Zooplus</title>

<meta http-equiv="Language" content="es,spanish">
<meta name="Author" content="zooplus AG">
<meta name="Publisher" content="zooplus AG">
<meta name="Copyright" content="zooplus AG">
<meta name="Keywords" content="pienso para perros, pienso para gatos, comida para perros, comida para gatos, tienda animales, rascadores para gatos, arena para gatos, juguetes para perros, comederos, bebederos, comida húmeda, latas para gatos, jaulas, accesorios para mascotas, antiparasitarios, pienso veterinario, dieta veterinaria, transportines para perros, casetas para perros, correas y collares, camas para perros, camas para gatos">
<meta name="Description" content="zooplus - Tu tienda para mascotas online líder en Europa y España: los precios más bajos en pienso, comida húmeda y accesorios para perros, gatos y pequeños animales. Entrega gratuita a partir de 39€">
<meta name="Robots" content="Index, follow">
<meta http-equiv="Expires" content="0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<!-- key <shop.codesnippet.maxymiser> not found --><script src="./js/s-code-contents-ee4d6d796de600e0c9db8376f9187896f10241a3.js"></script><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head><body cz-shortcut-listen="true">

<script type="text/javascript">
    <!--// <![CDATA[
    var OA_source = 'HOMEPAGE';
    // ]]> -->
</script>

<!-- certona.jsp -->

<script type="text/html" id="productreco-template-variants">
    <ul>
        {{each items}}
        <li class="variant-box">
            <a href="${$value.detailURL}" name="${$data.scheme}-variant-${$value.asid}" title="${$value.name}">
                <header>
                    <img src="${constructFullPictureURL($value.picturePath, 65)}" alt="${$value.name}">
                </header>
                <div class="body">
                    <h5>${$value.shortName}</h5>
                    <p>${$value.variantName}</p>
                </div>
            </a>
            <footer>
                <a href="${$value.detailURL}" name="${$data.scheme}-variant-${$value.asid}-price" title="${$value.name}">
                    <span itemprop="price" class="smalltextPrices">${$value.standardPriceText}</span>
                    <br/>

                    <span class="${$value.styleSalePrice}">
                        <span itemprop="price">${$value.reducedPriceText}</span>
                        <br />
                        <span class="smalltext smalltextPrices">${$value.pricePerUnitPriceText}</span>
                    </span>
                </a>
                <form action="/checkout/lastMinuteOffer.htm" name="add${$value.asid}" method="POST" novalidate="">
                    <input type="hidden" value="${$value.asid}" name="articleId">
                    <button type="submit" class="addToCart" name="${$data.scheme}-buy_button-${$value.asid}">
						<span>
							<b>${$data.addToCart}</b>
							<img alt="" src="${mediaServerDomainUrl}/image/icons/icon_cart.gif">
						</span>
                    </button>
                </form>
            </footer>
        </li>
        {{/each}}
    </ul>
</script>

<script type="text/html" id="productreco-template-products-vertical">
    <ul>
        {{each items}}
        <li class="product-box">
            <a href="${$value.detailURL}" name="${$data.scheme}-product-${$value.asid}" title="${$value.name}">
                <header>
                    <img src="${constructFullPictureURL($value.picturePath, 65)}" alt="${$value.name}">
                </header>
                <div class="body">
                    <h5>${$value.shortName}</h5>
                </div>

                <footer>
                    <span itemprop="price" class="smalltextPrices">${$value.standardPriceText}</span>
                    <br/>

                    <span class="${$value.styleSalePrice}">
                        <span itemprop="price">${$value.reducedPriceText}</span>
                        <br />
                        <span class="smalltext smalltextPrices">${$value.pricePerUnitPriceText}</span>

                    </span>
                </footer>
            </a>
        </li>
        {{/each}}
    </ul>
</script>

<script type="text/html" id="productreco-template-products-horizontal">
    <ul>
        {{each items}}
        <li class="product-box">
            <header>
                <a href="${$value.detailURL}" name="${$data.scheme}-product-${$value.asid}" title="${$value.name}">
					<img src="${constructFullPictureURL($value.picturePath, 100)}" alt="${$value.name}">
				</a>
            </header>
            <div class="body">
                <a href="${$value.feedbackUrl}"><img src="${$value.rating}"></a>
                <h5><a href="${$value.detailURL}" name="${$data.scheme}-product-${$value.asid}-name" title="${$value.name}">${$value.shortName}</a></h5>
            </div>

            <a href="${$value.detailURL}" name="${$data.scheme}-product-${$value.asid}-price" title="${$value.name}">
                <footer>
                    <span itemprop="price" class="smalltextPrices">${$value.standardPriceText}</span>
                    <br/>

                    <span class="${$value.styleSalePrice}">
                        <span itemprop="price">${$value.reducedPriceText}</span>
                        <br />
                        <span class="smalltext smalltextPrices">${$value.pricePerUnitPriceText}</span>
                    </span>
                </footer>
            </a>
        </li>
        {{/each}}
    </ul>
</script>



<script type="text/javascript" language="javascript" src="./image/jquery.tmpl.min.js"></script>
<script type="text/javascript" language="javascript" src="./image/resonanceProductReco.js"></script>

<script type="text/javascript">

                var certona = {
                    "pagetype" : "HOME",
                    "customerid" : readCookie('cid') 
                };

                var mediaServerDomainUrl = "http://media11.mediazs.com/theme/zooplus/zooplus.es",
                    mediaServerHostName = "media.mediazs.com"
                    locale = "es_ES";

    </script>

<div id="page_margins">
    
<div id="page">
    
<div id="navigation">

<!-- header/header.ftl-->
<div id="dynamicData" style="display:none;">{"articleCount":0,"shippingCostsFormatted":"0,00 €","subTotalFormatted":"0,00 €"}</div>
<script>
var zooplusLocale = parseJson('{"fromVal":"desde {{value}} ","toVal":"hasta {{value}}","review":"{{x}} valoración","star":"{{x}} estrella","variant":"({{x}} variante) ","reviewProd":"Escribe una valoración sobre {{value}}","viewMore":"Ver más resultados","moreImages":"Más fotos ({{value}})","imageUrl":"//media11.mediazs.com/theme/zooplus/image/","invalidSelectionMsg":"Lo sentimos, no hemos encontrado ningún resultado para tu búsqueda","invalidSelectionMsgExplain":"Puedes <a href=’javascript: window.history.back()’>volver atrás<\\/a> o cambiar tu elección ","of":"desde","to":"hasta","numResultsPhrase":"{{res_from}} - {{res_to}} de {{res_total}} Resultados","numMore":"{{value}} más","results":"Resultados","sortBy":"Ordenar por","relevance":"Top Ventas","lowestPrice":"Precio más bajo","highestPrice":"Precio más alto","more":"más","view":"Vista","deselect":"Reiniciar","noFreqTermsAvailable":"Lo sentimos, pero no hay información que mostrar. Por favor, inténtalo de nuevo más tarde.","resultsFor":"Buscar sugerencias por {{value}}","inCategory":"en {{value}}","currencySymbolAfterPrice":true,"currencySymbol":"€","decimalPoint":",","thousandsSeparator":".","taste":"Sabor","action":"Promoción","buy":"Añadir al carrito","expectedDeliveryDateDSOLink":"más información","expectedDeliveryDateDSOText":"Plazo de entrega según los detalles del producto","expectedDeliveryDateLink":"ver más","expectedDeliveryDateText":"Entrega en {{value}} días laborables","types":{"category":"Categoría","article":"Artículo","brand":"Marca","targetpg":"Página de destino","suggestion":"Sugerencia"},"typeHdr":{"category":"Categorías","article":"Productos","targetpg":"Servicio","brand":"Marca","suggestion":"Sugerencias","-BLANK-":"No categorizado"},"facetSummary":{"dispName":"Tu selección","removeAll":"Eliminar todo"},"no_reviews":"No hay valoraciones","review_pl":"{{x}} valoraciones","star_pl":"{{x}} estrellas","variant_pl":"({{x}} variantes)","brand":"Proveedor","Category_facet":"Categoría","Price_facet":"Precio","Brand":"Marca","productreviewaverage":"Valoraciones","livephase":"Etapa de la vida","animalsize":"Tamaño del perro","specialneed":"Necesidad especial","specialfoodcharacteristic":"Característica especial","package_size":"Tamaño del paquete","package_size_kg":"Tamaño del paquete","multipacksize":"Paquete ahorro","price_per_kilo":"Precio por kilo"}');

zooplusLocale.dry_food = ["Hundefutter trocken", "Katzenfutter trocken"];
zooplusLocale.wet_food = ["Hundefutter nass", "Katzenfutter nass"];

var sortLists = {
    // kategorien: ["Trockenfutter","Nassfutter","Nahrungsergänzung","Spezialfutter","Snacks"],
    animalsize: ["Klein", "Mittel", "Groß"],
    brands: ["Almo Nature","Applaws","Bozita","Cosma","Hill's","Iams","Orijen","Royal Canin","Sanabelle","Schesir"],
    livephase: ["Junior","Adult","Senior"],
    specialneed: ["Wohnungskatze","Freigänger","Haut- und Fellprobleme","Magenprobleme","Empfindliche Katze","Nieren-/Blasenprobleme","Diabetes","Übergewicht"],
    specialfoodcharacteristic: ["Light","Bio","Getreidefrei","Zuckerfrei","Zahnreinigend"],
    taste: ["Huhn","Geflügel (außer Huhn)","Rind","Sonstige Fleischsorten","Thunfisch","Sonstige Fischarten"],
    action: ["Reduziertes Produkt","Neues Produkt","Sparpaket"],
    multipacksize: ["6-er Pack [4-9]","12-er Pack [10-19]","24-er Pack [20-29]","36-er Pack [>:30]"]
};
</script>
<!-- HTML Cache published key=[15_es_ES_zooplus_SEARCH_LOCALE__part_searchLocale],timeout=[1200s],publishTime=[2015-10-19 09:26:30.698 +0200|1445239590698] -->

<script>

    var zooplusTemp = zooplusLocale,
            sortingTemp = sortLists;

    var IEVersion = detectIEVersion(false),
        exoCompressed = true,
        exoBundleScript = 'https://d25a50wq0hgskv.cloudfront.net/2636_zooplus_es/exoBundle.js.gz';

    if(IEVersion >= 10){
        exoBundleScript = exoBundleScript.replace(new RegExp('\.gz$'), '');
    }

    $.getScript(exoBundleScript, function(){
        "use strict";
        var isProduction = window.location.href.indexOf("//www") > 0;

        if (!isProduction && exoSearchParams && exoSearchParams.resultsPageUrl) {
            exoSearchParams.resultsPageUrl = "http://" + window.location.host + "/esearch.htm";
        }
        window.zooplusLocale = zooplusTemp;
        window.sortLists = sortingTemp;
    });

    var globObj = globObj || window.zooplus;

    $(globObj).bind("data_loaded", function() {
        if(globObj.data){
            if(typeof JSON !== 'undefined' && typeof JSON.stringify === 'function'){
                $('#dynamicData').html(JSON.stringify(globObj.data));
            }
        }
    });

    try {
        var rawData = $('#dynamicData').html();
    }
    catch(e) {
        // push exception to Application
        log(e);
        // bind ajax request of cart on "dom_loaded" event
        // + trigger "data_loaded" event to update the Modules depending on that Data
    }

    var globObj = globObj || window.zooplus;

    if(typeof parseJson === 'function' ){
        globObj.data = parseJson(rawData);
    }

    $(globObj).bind("dom_loaded", function() {
        $(globObj).trigger("data_loaded");
    });

</script>

<header class="flyout_nav" id="top">
    <div class="headerlinks">
        <h3 class="invisible">
Enlaces de servicio        </h3>
        <ul>
    <li><a id="headerNewsletterlink" href="http://www.zooplus.es/newsletter">Newsletter</a></li>
<li><a href="http://www.zooplus.es/shop/consejos_mascotas" target="_blank">Consejos mascotas</a></li>    
<li><a href="http://blog.zooplus.es/" target="_blank">Blog</a></li>
    <li><a href="http://www.zooplus.es/shop/promociones_especiales/vales_regalo/zooplus_vale_regalo/118545">Tarjeta regalo</a></li>
<li><a href="http://www.zooplus.es/bonuspoints/overview">Programa de puntos</a></li>

</ul>

		<ul class="pull-right">
            <li data-zta="reorderLink" class="js-reorder" style="display:none;"><a href="https://www.zooplus.es/account/orders/reorder/">Pedir de nuevo</a></li>
			<li><a id="headerContactlink" href="http://www.zooplus.es/contact/">Contacto</a></li>
			<li><a id="accountLink" data-zta="accountLink" class="myzooplus" href="http://www.zooplus.es/myzooplus">mi zooplus</a></li>
		</ul>
    </div>

	<div class="brand">
		<a href="./image/index.html" title="Volver a la página de inicio" tabindex="1" target="_top" id="logo_topnav_flyout">
Mi tienda para mascotas		</a>
	</div>

	<div class="tools">
        <div id="headerSearch">
            <h3 class="invisible">
Buscar producto            </h3>
            <form class="form-search" name="miniSearchBox" action="http://www.zooplus.es/ask" method="get">
                <label for="search_query_field" class="invisible">Buscar producto</label>
                <input name="num" value="20" type="hidden">
                <input name="query" value="" tabindex="2" id="search_query_field" class="search-query exsg_input" maxlength="50" placeholder="Busca entre más de 9.000 productos" type="text" autocomplete="off">
                <button id="shop_search_top_submit" class="btn" type="submit">buscar</button>
            </form>
        </div>

            <div id="headerMiniCart" class="miniCart">

                <a rel="nofollow" href="https://www.zooplus.es/checkout/overview" id="checkoutBtnCart" data-zta="checkoutBtnCart" target="_top" tabindex="3" class="btn primary" title="Carrito de la compra">

                    <span class="icon icon-cart"></span>
                    <span class="wrapper">
                        <span class="cart-label">Carrito de la compra</span>
                    </span>

                    <label for="cart_quantity" class="invisible">Cantidad</label>
                    <span id="cart_quantity" class="value articleCount">count not updated</span>
                </a>
            </div>

            <script language="JavaScript" type="text/javascript">
            <!--// <![CDATA[
                var globObj = globObj || window.zooplus;

                (function(zoo) {
                    "use strict";

                    if(!zoo.data || !zoo.data.articleCount || !zoo.data.articleItems) return false;

                    if (typeof productCart.storeMinicartValues === "function"){
                        // immediate try to fetch data
                        productCart.storeMinicartValues(zoo.data);
                        productCart.updateCartView();

                        // if data has changed update article count
                        $(zoo).bind("data_loaded", function() {
                            productCart.storeMinicartValues(zoo.data);
                            productCart.updateCartView();
                        });
                    }
                })(globObj);
            // ]]> -->
            </script>


        <div class="adzone_advantages">
<!-- xxzone.ftl -->
        <div class="zone">
            
            <a href="http://www.zooplus.es/content/shippingcosts" class="claim-delivery" title="ver condiciones de entrega" style="width:75px;">Portes gratis<br>a partir de 39€**</a>
			<a href="http://www.zooplus.es/contact" class="claim-phone" title="Información sobre Atención al Cliente" style="width:auto">
				Tel. 911 436 384<br>L-V 8:00h-19:00h
			</a>
			<div id="beacon_c31c73caaf" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./image/zoohamster" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>

        </div>
        <noscript>
            &lt;div class="zone"&gt;
                &lt;a target='_blank' href='http://pictures.zooplus.com/zoodog?n=lldjk3'&gt;
                    &lt;img alt='' src='http://pictures.zooplus.com/zoopuppy?zoneid=645&amp;amp;n=lldjk3&amp;amp;siteid=15'/&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        </noscript>


<!-- HTML Cache published key=[15_es_ES_zooplus_http_HEADER_ADVANTAGES__part_adzone],timeout=[1200s],publishTime=[2015-10-19 09:32:18.462 +0200|1445239938462] -->        </div>

    </div>

    <nav id="topNavigation" role="navigation" class="noborder nav-9-tabs">

                <div class="nav-element">
                    <div class="nav-tab  first theme_dogs" data-toplevelcategory="dogs" style="width: 111.55px;">
                        <div class="title">
                            <h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/tienda_perros" title="Tienda para perros: comida y accesorios para perros">Perros</a></h2>
                        </div>
                    </div>


                        <!-- Navigation Flyout -->
                    <div class="flyout col4">
						<h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_perros" title="Tienda para perros: comida y accesorios para perros">Tienda para perros: comida y accesorios para perros</a></h3>
                        <!-- TODO: Remove once we have the dynamic info -->
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros" title="Pienso para perros">Pienso para perros</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/acana" title="Acana pienso para perros">Acana</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/advance" title="Advance pienso para perros">Advance de Affinity</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/eukanuba" title="Eukanuba pienso para perros">Eukanuba</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/hills_science_plan" title="Hill&#39;s Science Plan Canine pienso para perros">Hill's Science Plan</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/nutro_natural_choice" title="Nutro Natural Choice pienso para perros">Nutro Natural Choice</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/orijen" title="Orijen pienso para perros">Orijen</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/pro_plan" title="Purina Pro Plan pienso para perros">Purina Pro Plan</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/purizon" title="Purizon pienso para perros">Purizon</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/royal_canin_perros_raza" title="Royal Canin Breed">Royal Canin Breed (Raza)</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/royal_canin_size" title="Royal Canin Size">Royal Canin Size</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros/taste_of_the_wild" title="Taste of the Wild para perros">Taste of the Wild</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_perros/pienso_perros">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros" title="Snacks y Huesos para perros">Snacks y Huesos</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/higiene_dental" title="Snacks para la higiene dental">Higiene dental</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/adiestramiento" title="Snacks de adiestramiento para perros">Adiestramiento</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/snacks_articulaciones" title="Snacks para articulaciones y huesos">Articulaciones</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/hipoalergenicos" title="Snacks hipoalergénicos">Hipoalergénicos</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/snacks_light" title="Snacks light para perros">Light</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/snacks_larga_duracion" title="Snacks de larga duración y para perros grandes">Larga duración</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/snacks_cachorros" title="Snacks para cachorros">Cachorros</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/huesos_perros" title="Huesos para perros">Huesos</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/galletas_perros" title="Galletas para perros">Galletas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/palitos_perros" title="Snacks en forma de barritas para perros">Barritas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/laminas_perros" title="Snack en forma de láminas">Láminas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros/favoritos" title="❤  Favoritos">❤  Favoritos</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_perros/snacks_perros">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
                                <a href="http://www.zooplus.es/shop/tienda_perros">Otras categorías</a>
                            </h3>

                            <ul class="pg_3">
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/comida_humeda" title="Comida húmeda para perros: latas, bolsitas, tarrinas...">Comida húmeda</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/casetas_perros" title="Casetas para perros, jaulas y puertas">Casetas y jaulas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/camas_cojines_cestas_mantas_perros" title="Camas y mantas para perros">Camas y mantas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/transportines_viajes" title="Artículos de viaje y transportines para perros">Transportines y viaje</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/juguetes_deporte_perros" title="Juguetes y deporte para perros">Juguetes y deporte</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/ropa_perros" title="Ropa para perros y complementos">Ropa para perros</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/higiene_canina_maquinas_cortapelo" title="Higiene y Cortapelos para perros">Higiene y Cortapelos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/complementos_alimenticios_perro" title="Complementos alimenticios para perros">Complementos alimenticios</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/correas_collares_perros" title="Correas y collares para perros">Correas y collares</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/comederos" title="Comederos y bebederos para perros">Comederos y bebederos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/especial_frio_lluvia_perros" title="❅ Especial frío y lluvia">❅ Especial frío y lluvia</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/cachorros" title="Cachorros y perros jóvenes">Cachorros y junior</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_perros/especial_razas" title="Especial razas">Especial razas</a></li>
                            </ul>
                        </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">Ofertas del día</h3>

                            <!-- a List of Special Offer Links-->
                            <ul class="pg_3 special">
                                    <li><a href="http://www.zooplus.es/specials/tienda_perros/ofertas_especiales_perros/comida/34744">Ofertas especiales</a></li>
                                    <li><a href="http://www.zooplus.es/specials/tienda_perros/trial_specials">Ofertas de prueba</a></li>
                                    <li><a href="http://www.zooplus.es/specials/tienda_perros/nuevos_productos_perros">Nuevos productos</a></li>
                            </ul>
                        </div>

                    </div>

                    <span class="separator"></span>

                </div>

                <div class="nav-element">
                    <div class="nav-tab   theme_cats" data-toplevelcategory="cats" style="width: 111.55px;">
                        <div class="title">
                            <h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/tienda_gatos" title="Tienda para gatos: comida y accesorios para gatos">Gatos</a></h2>
                        </div>
                    </div>

                        <!-- Navigation Flyout -->
                    <div class="flyout col4">
						<h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_gatos" title="Tienda para gatos: comida y accesorios para gatos">Tienda para gatos: comida y accesorios para gatos</a></h3>
                        <!-- TODO: Remove once we have the dynamic info -->
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos" title="Pienso para gatos">Pienso para gatos</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/acana" title="Acana pienso para gatos">Acana</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/affinity_advance" title="Advance pienso para gatos">Advance de Affinity</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/hills_science_plan" title="Hill&#39;s pienso para gatos">Hill's Science Plan</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/nutro_natural_choice" title="Nutro Natural Choice para gatos">Nutro Natural Choice</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/orijen" title="Orijen pienso para gatos">Orijen</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/porta21_pienso_gatos" title="Porta 21 pienso para gatos">Porta 21</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/purizon" title="Purizon pienso para gatos">Purizon</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/royal_canin" title="Royal Canin pienso para gatos">Royal Canin</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/sanabelle" title="Sanabelle pienso para gatos">Sanabelle</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/smilla" title="Smilla pienso para gatos">Smilla</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/taste_of_the_wild" title="Taste of the Wild pienso para gatos">Taste of the Wild</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos/affinity_ultima" title="Affinity Ultima pienso para gatos">Ultima de Affinity</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_gatos/pienso_gatos">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda" title="Comida húmeda para gatos">Comida húmeda</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/almo_nature" title="Almo Nature alimento húmedo para gatos">Almo Nature</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/applaws" title="Applaws alimento húmedo para gatos">Applaws</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/cosma" title="Cosma alimento húmedo para gatos">Cosma</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/felix" title="Felix alimento húmedo para gatos">Felix</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/gourmet" title="Gourmet comida húmeda para gatos">Gourmet</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/hills_science_plan" title="Hill&#39;s Science Plan alimento húmedo para gatos">Hill's Science Plan</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/porta_21" title="Porta 21 comida húmeda para gatos">Porta 21</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/royal_canin" title="Royal Canin Feline Húmedos">Royal Canin Feline</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/schesir" title="Schesir alimento húmedo para gatos">Schesir</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/taste_of_the_wild" title="Taste of the Wild comida húmeda para gatos">Taste of the Wild</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/ultima" title="Ultima de Affinity para gatos">Ultima de Affinity</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda/whiskas" title="Whiskas alimento húmedo para gatos">Whiskas</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_gatos/comida_humeda">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
                                <a href="http://www.zooplus.es/shop/tienda_gatos">Otras categorías</a>
                            </h3>

                            <ul class="pg_3">
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/arena_gatos" title="Arena para gatos">Arena para gatos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/snacks_gatos" title="Snacks y golosinas para gatos">Snacks y golosinas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/rascadores_muebles" title="Rascadores para gatos">Rascadores</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/camas_cojines_gatos" title="Camas para gatos">Camas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/transporte_gatos" title="Transportines y accesorios para viajar con gatos">Transporte de gatos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/bandejas_higienicas_gatos" title="Higiene y bandejas higiénicas para gatos">Higiene y bandejas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/bebederos_comedores_gatos" title="Comederos y bebederos para gatos">Comederos y bebederos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/redes_gateras_gatos" title="Redes y gateras para gatos">Redes y gateras</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/juguetes_gatos" title="Juguetes para gatos">Juguetes para gatos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/complementos_alimenticios" title="Complementos alimenticios para gatos">Complementos alimenticios</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/gatitos" title="Gatitos">Gatitos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_gatos/especial_otono_invierno" title="☂ Especial Otoño - Invierno">☂ Especial Otoño - Invierno</a></li>
                            </ul>
                        </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">Ofertas del día</h3>

                            <!-- a List of Special Offer Links-->
                            <ul class="pg_3 special">
                                    <li><a href="http://www.zooplus.es/specials/tienda_gatos/ofertas_especiales_gatos/comida/34749">Ofertas especiales</a></li>
                                    <li><a href="http://www.zooplus.es/specials/tienda_gatos/trial_specials">Ofertas de prueba</a></li>
                                    <li><a href="http://www.zooplus.es/specials/tienda_gatos/nuevos_productos_gatos">Nuevos productos</a></li>
                            </ul>
                        </div>


                    </div>

                    <span class="separator"></span>

                </div>

                <div class="nav-element">
                    <div class="nav-tab   theme_fish" data-toplevelcategory="fish" style="width: 111.55px;">
                        <div class="title">
                            <h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/tienda_peces" title="Tienda para peces: alimentos y accesorios para peces">Peces</a></h2>
                        </div>
                    </div>


                        <!-- Navigation Flyout -->
                    <div class="flyout col4">
						<h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_peces" title="Tienda para peces: alimentos y accesorios para peces">Tienda para peces: alimentos y accesorios para peces</a></h3>
                        <!-- TODO: Remove once we have the dynamic info -->
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_peces/comida_peces" title="Comida para peces">Comida para peces</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/comida_peces/alimentos_en_copos" title="Alimentos en copos para peces">Copos</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/comida_peces/alimentos_en_comprimidos" title="Alimento en comprimidos para peces">Comprimidos</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/comida_peces/granulado_pienso_comprimido_barritas" title="Alimento en gránulos para peces">Gránulos</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/comida_peces/alimentos_vacaciones" title="Alimentos de peces para las vacaciones">Vacaciones</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/comida_peces/crianza" title="Alimento para la crianza de peces">Crianza</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/comida_peces/spezial" title="Alimento especial para peces">Especial</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_peces/comida_peces">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_peces/acuario" title="Acuarios">Acuarios</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/acuario/set_acuario" title="Set de acuarios para principiantes">Sets para principiantes</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/acuario/acuarios_nano" title="Nano acuarios">Nano acuarios</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/acuario/crianza" title="Acuarios para cría de peces">Acuarios para cría</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/acuario/acuarios_pequenos" title="Pequeños (menos de 100 litros)">Pequeños (&lt; de 100 litros)</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/acuario/acuarios_medianos" title="Medianos (entre 100 y 200 litros)">Medianos (100 - 200 litros)</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_peces/acuario/acuarios_grandes" title="Grandes (más de 200 litros)">Grandes (&gt; de 200 litros)</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_peces/acuario">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
                                <a href="http://www.zooplus.es/shop/tienda_peces">Otras categorías</a>
                            </h3>

                            <ul class="pg_3">
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/filtro_bombas_acuario" title="Filtros y bombas para acuario">Filtros y bombas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/iluminacion_acuario" title="Iluminación para acuarios">Iluminación para acuarios</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/tecnica_acuarios" title="Técnica de acuarios">Técnica de acuarios</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/limpieza_del_agua" title="Limpieza del agua del acuario">Limpieza del agua</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/decoracion_acuario" title="Decoración para acuarios">Decoración para acuarios</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/plantas_acuario_limpieza" title="Mantenimiento y cuidado de plantas de acuario">Cuidado de plantas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/estanque" title="Accesorios y plantas para estanque">Estanques</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/acuarios_marinos" title="Acuarios marinos">Acuarios marinos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/marcas" title="Marcas de comida y accesorios para peces">Marcas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_peces/tortugas" title="Alimentación para tortugas">Tortugas</a></li>
                            </ul>
                        </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">Ofertas del día</h3>

                            <!-- a List of Special Offer Links-->
                            <ul class="pg_3 special">
                                    <li><a href="http://www.zooplus.es/specials/tienda_peces/ofertas_especiales_peces/filtros_y_tecnica/34759">Ofertas especiales</a></li>
                                    <li><a href="http://www.zooplus.es/specials/tienda_peces/nuevos_productos_peces">Nuevos productos</a></li>
                            </ul>
                        </div>


                    </div>

                    <span class="separator"></span>

                </div>

                <div class="nav-element">
                    <div class="nav-tab   theme_rodents" data-toplevelcategory="rodents" style="width: 111.55px;">
                        <div class="title">
                            <h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/tienda_animales_pequenos" title="Tienda para roedores y animales pequeños">Roedores y +</a></h2>
                        </div>
                    </div>


                        <!-- Navigation Flyout -->
                    <div class="flyout col4">
						<h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_animales_pequenos" title="Tienda para roedores y animales pequeños">Tienda para roedores y animales pequeños</a></h3>
                        <!-- TODO: Remove once we have the dynamic info -->
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores" title="Comida para roedores y más">Comida para roedores y más</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores/comida_conejo" title="Comida para conejos">Conejos</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores/cobayas" title="Comida para cobayas">Cobayas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores/hurones" title="Comida para hurones">Hurones</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores/chinchillas" title="Comida para chinchillas">Chinchillas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores/ratas" title="Comida para ratas">Ratas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores/hamsters" title="Comida para hámsters">Hámsters</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores/comida_degus" title="Comida para degús">Degús</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores/comida_ratones_jerbillos" title="Comida para ratones y jerbos">Ratones y jerbos</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_animales_pequenos/alimentos_roedores">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre" title="Jaulas para roedores">Jaulas</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre/jaulas_cobaya" title="Jaulas para cobayas">Cobayas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre/jaulas_raton" title="Jaulas para ratones">Ratones</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre/jaulas_conejos" title="Jaulas para conejos">Conejos</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre/jaulas_hamster" title="Jaulas  y casas">Hámsters</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre/jaulas_chinchilla" title="Jaulas para chinchillas">Chinchillas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre/jaulas_ardillas" title="Jaula para ardillas">Ardillas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre/jaulas_ratas" title="Jaulas para ratas">Ratas</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_animales_pequenos/jaulas_recintos_aire_libre">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
                                <a href="http://www.zooplus.es/shop/tienda_animales_pequenos">Otras categorías</a>
                            </h3>

                            <ul class="pg_3">
                                        <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/juguetes_transporte" title="Accesorios para roedores: Juguetes y transportines">Juguetes y transportines</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/accesorios_jaula" title="Accesorios para jaulas: equipamiento para jaulas">Accesorios para jaulas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/higiene_roedores" title="Higiene de roedores: productos higiénicos para roedores y animales pequeños">Higiene de roedores</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/snacks_y_complementos_alimentarios" title="Snacks y complementos alimenticios">Snacks y complementos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/lechos_heno_paja" title="Necesidades para animales: lechos, heno y paja">Lechos, heno y paja</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/conejos" title="Conejos">Conejos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_animales_pequenos/hurones" title="Hurones">Hurones</a></li>
                            </ul>
                        </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">Ofertas del día</h3>

                            <!-- a List of Special Offer Links-->
                            <ul class="pg_3 special">
                                    <li><a href="http://www.zooplus.es/specials/tienda_animales_pequenos/ofertas_especiales_roedores/jaulas_y_conejeras/34756">Ofertas especiales</a></li>
                                    <li><a href="http://www.zooplus.es/specials/tienda_animales_pequenos/nuevos_productos_roedores">Nuevos productos</a></li>
                            </ul>
                        </div>


                    </div>

                    <span class="separator"></span>

                </div>

                <div class="nav-element">
                    <div class="nav-tab   theme_birds" data-toplevelcategory="birds" style="width: 111.55px;">
                        <div class="title">
                            <h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/tienda_pajaros" title="Tienda para pájaros:  comida, jaulas y accesorios para pájaros">Pájaros</a></h2>
                        </div>
                    </div>


                        <!-- Navigation Flyout -->
                    <div class="flyout col4">
						<h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_pajaros" title="Tienda para pájaros:  comida, jaulas y accesorios para pájaros">Tienda para pájaros:  comida, jaulas y accesorios para pájaros</a></h3>
                        <!-- TODO: Remove once we have the dynamic info -->
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros" title="Comida para pájaros">Comida para pájaros</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros/comida_para_periquitos" title="Periquitos">Periquitos</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros/comida_ninfas" title="Ninfas">Ninfas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros/agapornis" title="Agapornis">Agapornis</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros/loros_cacatuas" title="Loros y cacatúas">Loros y cacatúas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros/alimentos_canarios" title="Comida para canarios">Canarios</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros/comida_para_pinzones" title="Pinzones">Pinzones</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros/aves_corral" title="Comida para pollos y gallinas">Aves de corral</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros/alimentos_aves_silvestres" title="Comida para aves silvestres">Aves silvestres</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_pajaros/comida_pajaros">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/tienda_pajaros/jaulas_pajaros_pajareras" title="Jaulas para pájaros">Jaulas</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/jaulas_pajaros_pajareras/jaulas_grandes" title="Jaulas grandes">Jaulas grandes</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/jaulas_pajaros_pajareras/jaulas_medianas" title="Jaulas medianas">Jaulas medianas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/jaulas_pajaros_pajareras/jaulas_pequenas" title="Jaulas pequeñas">Jaulas pequeñas</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/jaulas_pajaros_pajareras/jaulas_hagen_vision" title="Jaulas Hagen Vision">Hagen Vision</a></li>
                                                <li><a href="http://www.zooplus.es/shop/tienda_pajaros/jaulas_pajaros_pajareras/jaulas_ferplast" title="Jaulas Ferplast">Ferplast</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/tienda_pajaros/jaulas_pajaros_pajareras">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
                                <a href="http://www.zooplus.es/shop/tienda_pajaros">Otras categorías</a>
                            </h3>

                            <ul class="pg_3">
                                        <li><a href="http://www.zooplus.es/shop/tienda_pajaros/snacks_galletas" title="Snacks para pájaros">Snacks para pájaros</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_pajaros/accesorios_jaulas" title="Accesorios para jaula de pájaros">Accesorios para jaulas</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_pajaros/arena_limpieza" title="Limpieza y lechos sanitarios">Limpieza y lechos</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_pajaros/juguetes_pajaros" title="Juguetes para pájaros">Juguetes</a></li>
                                        <li><a href="http://www.zooplus.es/shop/tienda_pajaros/complementos_alimentarios" title="Complementos alimenticios">Complementos alimenticios</a></li>
                            </ul>
                        </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">Ofertas del día</h3>

                            <!-- a List of Special Offer Links-->
                            <ul class="pg_3 special">
                                    <li><a href="http://www.zooplus.es/specials/tienda_pajaros/ofertas_especiales_pajaros/jaulas_y_pajareras/34765">Ofertas especiales</a></li>
                                    <li><a href="http://www.zooplus.es/specials/tienda_pajaros/nuevos_productos_pajaros">Nuevos productos</a></li>
                            </ul>
                        </div>


                    </div>

                    <span class="separator"></span>

                </div>

                <div class="nav-element">
                    <div class="nav-tab   theme_reptiles" data-toplevelcategory="reptiles" style="width: 111.55px;">
                        <div class="title">
                            <h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/dieta_veterinaria" title="Dieta Veterinaria y necesidades especiales">Dieta Vet.</a></h2>
                        </div>
                    </div>


                        <!-- Navigation Flyout -->
                    <div class="flyout col4">
						<h3 class="pg_3"><a href="http://www.zooplus.es/shop/dieta_veterinaria" title="Dieta Veterinaria y necesidades especiales">Dieta Veterinaria y necesidades especiales</a></h3>
                        <!-- TODO: Remove once we have the dynamic info -->
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_perros" title="Pienso Veterinario y complementos alimenticios para perros">Perros</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_perros/advance_veterinary_diets" title="Pienso Advance Veterinary Diets para perros">Advance Veterinary Diets</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_perros/hills_prescription_diet" title="Hill&#39;s Prescription Diet para perros">Hill's Prescription Diet</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_perros/royal_canin_veterinary_diet" title="Pienso Royal Canin Veterinary Diet para perros">Royal Canin Veterinary Diet</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_perros/purina_veterinary_diets" title="Pienso Purina Veterinary Diets para perros">Purina Veterinary Diets</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_perros/specific_veterinary_pienso_perros" title="SPECIFIC Veterinary Diet para perros">SPECIFIC Veterinary Diet</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_perros/virbac_vetcomplex" title="Virbac Vetcomplex">Virbac Vetcomplex</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_perros">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_gatos" title="Pienso Veterinario y complementos alimenticios para gatos">Gatos</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_gatos/advance_veterinary_diets" title="Pienso Advance Veterinary Diets para gatos">Advance Veterinary Diets</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_gatos/hills_prescription_diet_feline" title="Comida Hill&#39;s Prescription Diet Feline para gatos">Hill's Prescription Diet Feline</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_gatos/royal_canin_veterinary_diet" title="Royal Canin Veterinary Diet para gatos">Royal Canin Veterinary Diet</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_gatos/royal_canin_vet_care_nutrition" title="Royal Canin Vet Care Nutrition para gatos">Royal Canin Vet Care Nutrition</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_gatos/specific_pienso" title="Pienso SPECIFIC Veterinary Diet para gatos">SPECIFIC Veterinary Diet</a></li>
                                                <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_gatos/virbac_vetcomplex" title="Pienso Virbac Vetcomplex para gatos">Virbac Vetcomplex</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/dieta_veterinaria/pienso_veterinario_gatos">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
                                <a href="http://www.zooplus.es/shop/dieta_veterinaria">Otras categorías</a>
                            </h3>

                            <ul class="pg_3">
                                        <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/dieta_light" title="Dieta Light para perros y gatos">Dieta Light</a></li>
                                        <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/adaptil_feliway" title="ADAPTIL y FELIWAY">ADAPTIL y FELIWAY</a></li>
                                        <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/consejos_para_tu_perro" title="Consejos para tu perro">Consejos para tu perro</a></li>
                                        <li><a href="http://www.zooplus.es/shop/dieta_veterinaria/consejos_para_tu_gato" title="Consejos para tu gato">Consejos para tu gato</a></li>
                            </ul>
                        </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
Ofertas del día                            </h3>

                            <!-- a List of Special Offer Links-->
                            <ul class="pg_3 special">
                            </ul>
                        </div>


                    </div>

                    <span class="separator"></span>

                </div>

                <div class="nav-element">
                    <div class="nav-tab   theme_horses" data-toplevelcategory="horses" style="width: 111.55px;">
                        <div class="title">
                            <h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/exclusivos" title="Marcas exclusivas en zooplus">★ Exclusivos</a></h2>
                        </div>
                    </div>


                        <!-- Navigation Flyout -->
                    <div class="flyout col4">
						<h3 class="pg_3"><a href="http://www.zooplus.es/shop/exclusivos" title="Marcas exclusivas en zooplus">Marcas exclusivas en zooplus</a></h3>
                        <!-- TODO: Remove once we have the dynamic info -->
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_perros" title="★ Exclusivos perro">★ Exclusivos perro</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_perros/purizon" title="Purizon pienso para perros">Purizon</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_perros/lukullus" title="Lukullus">Lukullus</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_perros/greenwoods_perros" title="Greenwoods para perros">Greenwoods</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_perros/rocco" title="Rocco">Rocco</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_perros/dogmio" title="DogMio">DogMio</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_perros/wolfofwilderness" title="Wolf of Wilderness comida para perros">Wolf of Wilderness</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/exclusivos/exclusivos_perros">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col">
                                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos" title="★ Exclusivos gato">★ Exclusivos gato</a></h3>
                                    <ul>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos/purizon_gatos" title="Purizon pienso para gatos">Purizon</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos/greenwoods_gatos" title="Greenwoods para gatos">Greenwoods</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos/smilla" title="Smilla pienso para gatos">Smilla</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos/cosma" title="Cosma alimento húmedo para gatos">Cosma</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos/cosma_nature" title="Cosma Nature comida húmeda para gatos">Cosma Nature</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos/feringa" title="Comida para gatos Feringa">Feringa</a></li>
                                                <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos/catessy" title="Catessy comida húmeda para gatos">Catessy</a></li>

                                        <li class="more">
                                            <a href="http://www.zooplus.es/shop/exclusivos/exclusivos_gatos">Todos los productos...</a>
                                        </li>
                                    </ul>
                                </div>
 
                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
                                <a href="http://www.zooplus.es/shop/exclusivos">Otras categorías</a>
                            </h3>

                            <ul class="pg_3">
                                        <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_roedor" title="★ Exclusivos roedores">★ Exclusivos roedores</a></li>
                                        <li><a href="http://www.zooplus.es/shop/exclusivos/exclusivos_pajaros" title="★ Exclusivos pájaros">★ Exclusivos pájaros</a></li>
                                        <li><a href="http://www.zooplus.es/shop/exclusivos/zoolove" title="zoolove">❤ zoolove</a></li>
                            </ul>
                        </div>

                        <div class="col">
                            <!-- Invisible Headline for Structure &amp; Navigation reasons -->
                            <h3 class="invisible">
Ofertas del día                            </h3>

                            <!-- a List of Special Offer Links-->
                            <ul class="pg_3 special">
                            </ul>
                        </div>


                    </div>

                    <span class="separator"></span>

                </div>


            <!-- the margin right on the nav-tab &amp; the fixed width on the h4 go together to fix a pixel rounding issue  -->
            <div class="nav-element">
                <div class="nav-tab theme_brands noborder                 
" data-toplevelcategory="brands" style="width: 111.55px;">
                    <div class="title"><h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/top_marcas" title="Top Marcas">Top Marcas</a></h2></div>
                </div>

                <!-- Navigation Flyout -->
                <div id="brands" class="flyout col4">
                    <h3 class="pg_3"><a href="http://www.zooplus.es/shop/top_marcas" title="Top Marcas">Top Marcas</a></h3>
                    <ul class="multicolumn" data-column="4">
                            <li><a href="http://www.zooplus.es/shop/top_marcas/acana" title="Pienso Acana para perros y gatos">Acana</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/advance" title="Pienso Advance para perros y gatos">Advance</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/almo_nature" title="Almo Nature para perros y gatos">Almo Nature</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/eukanuba" title="Pienso Eukanuba para perros y gatos">Eukanuba</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/felix" title="Felix para gatos">Felix</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/gourmet" title="Gourmet para gatos">Gourmet</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/hills_science_plan" title="Hill&#39;s Science Plan comida para perros y gatos">Hill's Science Plan</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/hills_prescription_diet" title="Hill&#39;s Prescription Diet para perros y gatos">Hill's Prescription Diet</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/nutro_natural_choice" title="Nutro Natural Choice pienso para perros y gatos">Nutro Natural Choice</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/orijen" title="Orijen para perros y gatos">Orijen</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/pro_plan" title="Pro Plan para perros y gatos">Pro Plan</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/purizon" title="Purizon para perros y gatos">Purizon</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/royal_canin" title="Royal Canin para perros y gatos">Royal Canin</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/royal_canin_veterinary_diet" title="Royal Canin Veterinary Diet para perros y gatos">Royal Canin Veterinary Diet</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/smilla" title="Smilla para gatos">Smilla</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/taste_of_the_wild" title="Taste of the Wild para perros y gatos">Taste of the Wild</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/tigerino_arena_absorbente" title="Tigerino arena para gatos">Tigerino</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/affinity_ultima" title="Ultima para perros y gatos">Ultima</a> </li>
                            <li><a href="http://www.zooplus.es/shop/top_marcas/otras_marcas" title="Otras marcas">➡ Otras marcas</a> </li>
                    </ul>
                </div>


                <span class="separator"></span>

            </div>

            <div class="nav-element">
                <div class="nav-tab last theme_offers noborder                 
" data-toplevelcategory="offers" style="width: 111.55px;">
                    <div class="title">
                        <h2 style="width: 100%;"><a href="http://www.zooplus.es/shop/promociones_especiales" title="Ofertas especiales">% OFERTAS</a></h2>
                    </div>
                </div>

                <!-- Navigation Flyout -->
                <div class="flyout col4">
					<h3 class="pg_3" style="margin-left: 474px;"><a href="http://www.zooplus.es/shop/promociones_especiales" title="Ofertas especiales">Ofertas especiales</a></h3>
					<div class="col"><br></div>
                    <div class="col"><br></div>
                    <div class="col">
                        <h3 class="invisible"><a href="http://www.zooplus.es/shop/pet_supplies_specials">Ofertas del día</a></h3>
                        <ul class="pg_3">
                                <li><a href="http://www.zooplus.es/specials/tienda_perros/ofertas_especiales_perros/comida/34744"><span class="special">%</span> Perros</a></li>
                                <li><a href="http://www.zooplus.es/specials/tienda_gatos/ofertas_especiales_gatos/comida/34749"><span class="special">%</span> Gatos</a></li>
                                <li><a href="http://www.zooplus.es/specials/tienda_peces/ofertas_especiales_peces/filtros_y_tecnica/34759"><span class="special">%</span> Peces</a></li>
                                <li><a href="http://www.zooplus.es/specials/tienda_animales_pequenos/ofertas_especiales_roedores/jaulas_y_conejeras/34756"><span class="special">%</span> Roedores y +</a></li>
                                <li><a href="http://www.zooplus.es/specials/tienda_pajaros/ofertas_especiales_pajaros/jaulas_y_pajareras/34765"><span class="special">%</span> Pájaros</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h3 class="invisible"><a href="http://www.zooplus.es/shop/promociones_especiales">% OFERTAS</a></h3>
                        <ul class="pg_3">
                                <li><a href="http://www.zooplus.es/shop/promociones_especiales/pack_inicio" title="Pack de inicio para mascotas">Pack de inicio</a></li>
                                <li><a href="http://www.zooplus.es/shop/promociones_especiales/doble_packs" title="Packs Ahorro para perros y gatos">Packs Ahorro</a></li>
                                <li><a href="http://www.zooplus.es/shop/promociones_especiales/acciones" title="Promociones de temporada">Promos de temporada</a></li>
                                <li><a href="http://www.zooplus.es/shop/promociones_especiales/150195" title="ZOOutlet">ZOOutlet</a></li>
                                <li><a href="http://www.zooplus.es/shop/promociones_especiales/vales_regalo" title="Cupones y tarjetas regalo">Cupones y tarjetas regalo</a></li>
                                <li><a href="http://www.zooplus.es/shop/promociones_especiales/productos_ahorremas" title="¡Alta calidad y precios bajos son posibles en zooplus!">¡Ahorra +!</a></li>
                        </ul>
                    </div>
                </div>

            </div>

</nav></header>


<noscript>&lt;img src=/images/px.gif?nojs=true width="0" height="0"&gt;</noscript>

</div>

    
<div id="main">

    
<div id="left-col">
        

<div id="couponContainer">

    <div id="couponImage" class="zone widget" align="center"></div>

    <script language="JavaScript" type="text/javascript">
        <!--// <![CDATA[
        function updateCoupon(url){
            var coupon = $("#couponContainer");
            if (coupon[0] && !coupon.hasClass("updated")){
                if( url ){
                    $("#couponImage").append("<img src='"+url+"' alt='Coupon' />");
                }else{
                    $("#couponImage").remove();
                }
                coupon.addClass("updated");
            }
        }

        var globObj = globObj || window.zooplus;

        (function(zoo) {
            "use strict";
            if(!zoo.data || !zoo.data.couponImage) return false;

            if (typeof updateCoupon === "function"){
                updateCoupon(zoo.data.couponImage);

                $(zoo).bind("data_loaded", function() {
                    updateCoupon(zoo.data.couponImage);
                });
            }
        })(globObj);
        // ]]> -->
    </script>
</div>


<!-- formulario daw-->

<div class="widget">
	<div class="navigation-orange-middle">
		<div class="navigation-orange-top">&nbsp;</div>
        <span style="font-size:18px;color:green"><b>¡Encuentra tu mascota!</b></span>
            <div class="full-grey-white-middle" style="border-radius: 6px; width:195px">
    			<div style="padding:0 12px 7px 12px;"><br>
                    <form name="busqueda" action="formulario.php" method="get">
                        <b>Tipo de mascota:</b> <br />
                        <select name="tipo_animal" id="tipo_animal" onchange="cargarRaza()">
                            <option value="null">Todo</option>
                            <?php
                                while ($opTipoAnimal = mysqli_fetch_array($tipo_animal)){
                                    echo '<option value="'.$opTipoAnimal['tipus_anim_id'].'">'.utf8_encode($opTipoAnimal['tipus_anim_nom']).'</option>';
                                }
                            ?>
                        </select><br />
                        <div id="divraza" style="display:none">
                            <b>Raza:</b><br />
                            <select name="raza" id="raza"></select><br />
                        </div>
                        <b>Municipio:</b> <br />
                        <select name="municipio" id="municipio">
                            <option value="null" selected>Todo</option>
                            <?php
                                while ($opMunicipio = mysqli_fetch_array($municipio)){
                                    echo '<option value="'.$opMunicipio['municipi_id'].'">'.utf8_encode($opMunicipio['municipi_nom']).'</option>';
                                }
                            ?>
                        </select><br /><br />
                        <input type="submit" value="Buscar" style="margin-left:110px;background-color:green" /><br />
                    </form>
                </div>
            </div>                         
        <div class="navigation-orange-bottom">&nbsp;</div>  
    </div>
</div>

<div class="widget">
    <div class="navigation-orange-middle">
        <div class="navigation-orange-top">&nbsp;</div>
        <span style="font-size:18px;color:green"><b>¡Pon tu anuncio!</b></span>
            <div class="full-grey-white-middle" style="border-radius: 6px; width:195px">
                <div style="padding:0 12px 7px 12px;"><br>
                    <form name="insertar" id="insertar" action="insertarDatos.php" method="post" enctype="multipart/form-data">
                        <b>Nombre: </b><br />
                        <input type="text" name="nombre" id="name" maxlength="50" required /><br />
                        <b>Teléfono de contacto:</b> <br />
                        <input type="text" name="telefono" id="telefono" pattern="^[9|6]\d{8}$" maxlength="9" required />
                        <b>Dirección de contacto:</b> <br />
                        <input type="text" name="direccion" id="direccion" maxlength="50" /><br />
                        <b>Tipo de anuncio:</b> <br />
                        <select name="anuncio2" id="anuncio2">
                            <option value="Perdido">Perdido</option>
                            <option value="Encontrado">Encontrado</option>
                        </select><br />
                        <b>Municipio:</b><br />
                        <select name="municipio2" id="municipio2">
                            <?php
                                while ($opMunicipio = mysqli_fetch_array($municipio2)){
                                    echo '<option value="'.$opMunicipio['municipi_id'].'">'.utf8_encode($opMunicipio['municipi_nom']).'</option>';
                                }
                            ?>
                        </select><br />
                        <b>Tipo de mascota:</b> <br />
                        <select name="tipo_animal2" id="tipo_animal2" onchange="cargarRaza2()">
                            <option value="1">Perro</option>
                            <option value="2">Gato</option>
                            <option value="3">Pájaro</option>
                            <option value="4">Otros</option>
                        </select><br />
                        <b>Raza:</b> <br />
                        <select name="raza2" id="raza2">
                            <?php
                                while ($opRaza = mysqli_fetch_array($raza2)){
                                    echo '<option value="'.$opRaza['raca_id'].'">'.utf8_encode($opRaza['raca_nom']).'</option>';
                                }
                            ?>
                        </select><br />
                        <b>Título del anuncio:</b><br />
                        <input type="text" name="titulo" id="titulo" maxlength="50" required /><br />
                        <b>Descripción del anuncio:</b><br />
                        <textarea type="text" name="contenido" id="contenido" maxlength="150" required></textarea><br /><br />
                        <b>Foto de tu mascota:</b><br />
                        <input type="file" name="foto" id="foto" value="foto" /><br /><br />
                        <input type="submit" name="enviar" value="Enviar" style="margin-left:110px;background-color:green" /><br />
                    </form>
                </div>
            </div>                         
        <div class="navigation-orange-bottom">&nbsp;</div>  
    </div>
</div>

<!-- Zone-Region: LEFT_MIDDLE -->
<!-- xxzone.ftl -->
        <div class="zone">
            <script type="text/javascript">
                <!--// <![CDATA[
                /* [id68] */
                if (typeof OA_show == 'function') {
                    OA_show(68);
                }
                // ]]> -->
            </script><a href="http://pictures.zooplus.com/zoodog?oaparams=2__bannerid=475__zoneid=68__cb=9aacde0f67__oadest=https%3A%2F%2Fwww.confianzaonline.es%2Fempresas%2Fzooplus.htm" target="_blank"><img src="./image/6ae6820e880e375e5cb5e07e84b14152.jpg" width="157" height="60" alt="Confianza Online (1)" title="Confianza Online (1)" border="0"></a><div id="beacon_9aacde0f67" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./image/zoohamster(1)" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>

        </div>
        <noscript>
            &lt;div class="zone"&gt;
                &lt;a target='_blank' href='http://pictures.zooplus.com/zoodog?n=123edsfg'&gt;
                    &lt;img alt='' src='http://pictures.zooplus.com/zoopuppy?zoneid=68&amp;amp;n=123edsfg&amp;amp;siteid=15'/&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        </noscript>
        <div class="zone">
            <script type="text/javascript">
                <!--// <![CDATA[
                /* [id69] */
                if (typeof OA_show == 'function') {
                    OA_show(69);
                }
                // ]]> -->
            </script>
        </div>
        <noscript>
            &lt;div class="zone"&gt;
                &lt;a target='_blank' href='http://pictures.zooplus.com/zoodog?n=1eay7535'&gt;
                    &lt;img alt='' src='http://pictures.zooplus.com/zoopuppy?zoneid=69&amp;amp;n=1eay7535&amp;amp;siteid=15'/&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        </noscript>
        <div class="zone">
            <script type="text/javascript">
                <!--// <![CDATA[
                /* [id70] */
                if (typeof OA_show == 'function') {
                    OA_show(70);
                }
                // ]]> -->
            </script>
        </div>
        <noscript>
            &lt;div class="zone"&gt;
                &lt;a target='_blank' href='http://pictures.zooplus.com/zoodog?n=1eay7536'&gt;
                    &lt;img alt='' src='http://pictures.zooplus.com/zoopuppy?zoneid=70&amp;amp;n=1eay7536&amp;amp;siteid=15'/&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        </noscript>
        <div class="zone">
            <script type="text/javascript">
                <!--// <![CDATA[
                /* [id71] */
                if (typeof OA_show == 'function') {
                    OA_show(71);
                }
                // ]]> -->
            </script><a href="http://pictures.zooplus.com/zoodog?oaparams=2__bannerid=2979__zoneid=71__cb=6570b5025c__oadest=http%3A%2F%2Fwww.zooplus.es%2Fcontent%2Fcookies" target="_self"><img src="./image/2d8a9fecb01f6bb0322c3e2d8a0edc86.jpg" width="157" height="59" alt="Cookies (R5)" title="Cookies (R5)" border="0"></a><div id="beacon_6570b5025c" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./image/zoohamster(4)" width="0" height="0" alt="" style="width: 0px; height: 0px;"></div>

        </div>
        <noscript>
            &lt;div class="zone"&gt;
                &lt;a target='_blank' href='http://pictures.zooplus.com/zoodog?n=4af43015'&gt;
                    &lt;img alt='' src='http://pictures.zooplus.com/zoopuppy?zoneid=71&amp;amp;n=4af43015&amp;amp;siteid=15'/&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        </noscript>


        
</div>

    
<div id="middle-col">
    



<div id="feedback_logout">
   <div class="feedbackmessage">
       <p>
        
        
            
                Te has desconectado con éxito. ¡Hasta pronto!
            
        

       </p>
   </div>
</div>



<div id="feedback_parcelFeedback">
   <div class="feedbackmessage">
       <p>
        
        
        

        
            
            
                Le agradecemos su colaboración.
            
        

       </p>
   </div>
</div>




<div id="feedback_contactFeedback">
   <div class="feedbackmessage">
       <p>
        
    
                Le agradecemos su colaboración.
            
        

       </p>
   </div>
</div>

<!-- Zone-Region: CENTER_MIDDLE_1 DONDE IRÁN LOS DATOS DEL FORMULARIO -->

<div class="zone-wrapper" style="width: 100%;">
    <div class="zone">
        <div id="beacon_76d4e132df" style="position: absolute; left: 0px; top: 0px; visibility: hidden;">
            <img src="./image/zoohamster(5)" width="0" height="0" alt="" style="width: 0px; height: 0px;">
        </div>
    </div>
</div> 

    <!--
    bd_botiga_animals
    tbl_anunci:         anu_id, anu_tipus, anu_data, anu_foto, anu_nom, anu_contingut, contact_id, mun_id, raca_id
    tbl_contacte:       contact_adre, contact_id, contact_nom, contact_telf
    tbl_municipi:       municipi_id, municipi_nom
    tbl_raca:           raca_id, raca_nom, tipus_anim_id
    tbl_tipus_animal    tipus_anim_id, tipus_anim_nom
    */ -->

<!-- ZONA GRIS -->              
<div class="full-grey-white-middle" style="border-radius: 6px;">
    <div class="text" style="padding: 5px 10px;">
        <h2>Resultados</h2>   
        <?php
            mostrarDatos();
        ?>  
    </div>
</div>


<!-- Zone-Region: CENTER_BOTTOM -->
<!-- xxzone.ftl -->
        <div class="zone">
            <script type="text/javascript">
                <!--// <![CDATA[
                /* [id359] */
                if (typeof OA_show == 'function') {
                    OA_show(359);
                }
                // ]]> -->
            </script>
        </div>
        <noscript>
            &lt;div class="zone"&gt;
                &lt;a target='_blank' href='http://pictures.zooplus.com/zoodog?n=dnjh3581'&gt;
                    &lt;img alt='' src='http://pictures.zooplus.com/zoopuppy?zoneid=359&amp;amp;n=dnjh3581&amp;amp;siteid=15'/&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        </noscript>


</div>
</div>


</div>
</div>

<div class="footer new">
    <div class="footer-inner clearfix" data-zta="footer">
        <p id="supplierPriceAbbr" class="UVP" data-zta="footer-UVP">*PRVP = Precio Recomendado de Venta al Público

** <a href="http://www.zooplus.es/content/shippingcosts">Ver condiciones</a>
</p>
        
        <div class="footer-content clearfix" data-zta="footer-content">

    <div class="row clearfix features" data-zta="footer-content-features">
        <div class="col1" data-zta="footer-content-services">         <h4>Servicios</h4>
            <ul>
                <li><a href="http://www.zooplus.es/account" rel="nofollow"><span>mi zooplus</span></a></li>
                <li><a href="http://www.zooplus.es/content/help" rel="nofollow"><span>Ayuda</span></a></li>
                <li><a href="http://www.zooplus.es/contact/" rel="nofollow"><span>Contacto</span></a></li>
                <li><a href="http://www.zooplus.es/content/shippingcosts" rel="nofollow"><span>Gastos de envío</span></a></li>
                <li><a href="http://www.zooplus.es/shop/promociones_especiales/vales_regalo/zooplus_vale_regalo/118545"><span>Tarjeta regalo</span></a></li>
            </ul></div>

        <div class="col1" data-zta="footer-content-benefits">       <h4>Ventajas</h4>
            <ul>
                <li><a href="http://www.zooplus.es/bonuspoints/overview" rel="nofollow"><span>Programa de puntos</span></a></li>
                <li><a href="http://www.zooplus.es/freundschaftswerbung" rel="nofollow"><span>Recomendar tiene premio</span></a></li>
                <li><a href="http://www.zooplus.es/animalcharity" rel="nofollow"><span>Descuento para protectoras</span></a></li>
                <li><a href="http://www.zooplus.es/breeder" rel="nofollow"><span>Programa para criadores</span></a></li>
                <li><a href="http://www.zooplus.es/affiliate/ser_afiliado"><span>Programa de afiliación</span></a></li>
                <li><a href="http://www.zooplus.es/shop/promociones_especiales/vales_regalo/cupon_descuentos_zooplus"><span>Cupones descuento</span></a></li>
                <li><a href="http://www.zooplus.es/newsletter" rel="nofollow"><span>Newsletter</span></a></li>
            </ul></div>

        <div class="col1" data-zta="footer-content-shopper"><h4>Compras</h4>
            <ul>
                <li><a href="http://www.zooplus.es/shop/promociones_especiales" rel="nofollow"><span>Ofertas especiales</span></a></li>
                <li><a href="http://www.zooplus.es/shop/promociones_especiales/150195"><span>ZOOutlet</span></a></li>
                <li><a href="http://www.zooplus.es/shop/promociones_especiales/acciones" rel="nofollow"><span>Promociones de temporada</span></a></li>
            </ul></div>

        <div class="col1" data-zta="footer-content-social">  <h4>Sigue a zooplus</h4>
            <ul class="clearfix">
                <li class="facebook"><a href="https://www.facebook.com/zooplusES" rel="nofollow" target="_blank"><span>facebook</span></a></li>
                <li class="twitter"><a href="https://twitter.com/zooplus_es" rel="nofollow" target="_blank"><span>twitter</span></a></li>
                <li class="youtube"><a href="https://www.youtube.com/channel/UCb9_PlA2gkwaSVa1PNzApeQ" rel="nofollow" target="_blank"><span>youTube</span></a></li>
                <li class="zooplus-blog"><a href="http://blog.zooplus.es/" rel="nofollow"><span>zooblog</span></a></li>
               
            </ul></div>
    </div>

    <div class="border"></div>

    <div class="row clearfix shops" data-zta="footer-content-international"><h4>Internacional</h4>
<ul>
   <li> <a href="index.html"> <span class="img-flag_DE"></span> <span>Alemania</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_BE"></span> <span>Bélgica</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_BG"></span> <span>Bulgaria</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_HR"></span> <span>Croacia</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_DK"></span> <span>Dinamarca</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_SK"></span> <span>Eslovaquia</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_SI"></span> <span>Eslovenia</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_ES"></span> <span>España</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_FI"></span> <span>Finlandia</span> </a></li>
   <li> <a href="index.html"> <span class="img-flag_FR"></span> <span>Francia</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_HU"></span> <span>Hungría</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_COM"></span> <span>Internacional</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_IE"></span> <span>Irlanda</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_IT"></span> <span>Italia</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_NO"></span> <span>Noruega</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_NL"></span> <span>Países Bajos</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_PL"></span> <span>Polonia</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_PT"></span> <span>Portugal</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_CO_UK"></span> <span>Reino Unido</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_CZ"></span> <span>Rep. Checa</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_RO"></span> <span>Rumanía</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_EU_RU"></span> <span>Rusia</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_SE"></span> <span>Suecia</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_CH"></span> <span>Suiza</span> </a> </li>
   <li> <a href="index.html"> <span class="img-flag_COM_TR"></span> <span>Turquía</span> </a> </li>
</ul></div>
</div>


<div class="legal_content" data-zta="footer-legal-content"><ul>
<li><a href="http://www.zooplus.es/content/about" target="_blank">Quiénes somos</a></li>
<li><a href="https://jobs.zooplus.com/" target="_blank">Empleo</a></li>
<li><a href="http://investors.zooplus.com/de/home.html" target="_blank">Investor Relations</a></li>
<li><a href="http://www.zooplus.es/content/imprint" target="_blank">Impreso</a></li>
<li><a href="http://www.zooplus.es/content/terms" target="_blank">Condiciones comerciales generales</a></li>
<li><a href="http://www.zooplus.es/content/privacy" target="_blank">Protección de datos</a></li>
<li><a href="http://www.zooplus.es/contact" target="_blank">Contacto</a></li>
<li><a href="http://www.zooplus.es/content/shippingcosts" target="_blank">Gastos de envío y plazo de entrega</a></li>
<li><a href="http://www.zooplus.es/content/terms#payment" target="_blank">Formas de pago</a></li>
<li><a href="http://www.zooplus.es/bilder/1/FormulariodeDesistimiento_1.pdf" target="_blank">Formulario de Desistimiento</a></li>
<li><a rel="nofollow" href="http://www.zooplus.es/affiliate/ser_afiliado">Programa de afiliación</a></li>
</ul>
</div>

<div class="copyright" data-zta="footer-copyright">© zooplus AG 2015</div>

    </div>
</div>

<script type="text/javascript">
if (navigator.userAgent.toLowerCase().indexOf('gomez') < 0) { 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4031503-1']);
  _gaq.push(['_gat._anonymizeIp']);
  _gaq.push(['_trackPageview', window.analyticsSpecialUrl?analyticsSpecialUrl:'']);
  
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
}
</script>

<script type="text/javascript"> 
_satellite.pageBottom(); 
</script>
<a rel="ms-main-history" id="_mainsearch" href="http://www.zooplus.es/#" style="opacity:0;font-size:1px;">.</a><div id="window-resizer-tooltip" style="display: none;"><a href="http://www.zooplus.es/#" title="Edit settings"></a><span class="tooltipTitle">Window size: </span><span class="tooltipWidth" id="winWidth">1366</span> x <span class="tooltipHeight" id="winHeight">738</span><br><span class="tooltipTitle">Viewport size: </span><span class="tooltipWidth" id="vpWidth">1366</span> x <span class="tooltipHeight" id="vpHeight">609</span></div></body></html>