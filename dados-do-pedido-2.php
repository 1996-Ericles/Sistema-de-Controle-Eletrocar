<!DOCTYPE>
<!-- saved from url=(0080http://localhost/eletrocar_system/dados-do-pedido-2.php#!cadastrar -->
<html><head><meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script type="text/javascript" src="./dados-do-pedido-2_files/4d8f9355db"></script><script src="./dados-do-pedido-2_files/1966191690322641" async=""></script><script async="" src="./dados-do-pedido-2_files/fbevents.js.download"></script><script type="text/javascript" async="" src="./dados-do-pedido-2_files/insight.min.js.download"></script><script src="./dados-do-pedido-2_files/bat.js.download" async=""></script><script type="text/javascript" async="" src="./dados-do-pedido-2_files/analytics.js.download"></script><script src="./dados-do-pedido-2_files/nr-1071.min.js.download"></script><script async="" src="./dados-do-pedido-2_files/gtm.js.download"></script><script async="" " src="./dados-do-pedido-2_files/saved_resource" type="text/javascript"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
	<meta http-equiv="Pragma" content="no cache">
	<title>Cadastrar Pedido</title>
	

	<link href="./dados-do-pedido-2_files/css" rel="stylesheet" type="text/css">

	<!-- OLD STYLES -->
	<link rel="stylesheet" type="text/css" href="./dados-do-pedido-2_files/autocomplete.css">
	<link rel="stylesheet" type="text/css" href="./dados-do-pedido-2_files/jquery.qtip.min.css">

	<!-- STYLESHEET -->
		<link href="./dados-do-pedido-2_files/components.css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/geral.css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/dashboard.css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/colorbox.css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/uploadifive.css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/jquery.Jcrop.css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/jquery-ui.css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/jquery.qtip.min(1).css" rel="stylesheet" type="text/css">
	<link href="./dados-do-pedido-2_files/jquery-ui.css" rel="stylesheet" type="text/css">

	<!-- SCRIPTS -->
		<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.Jcrop.min.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.uploadifive.min.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.blockUI.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.autocomplete.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.scrolllock.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.qtip.min.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.maskedinput.min.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.colorbox-min.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/retornarInfo.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/Notificacoes.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/svg4everybody.legacy.min.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/Mascaras.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/funcoes.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/main.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.mCustomScrollbar.concat.min.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/components.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.vhcontext.menu.min.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.ui.datepicker.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/jquery.contextMenu.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/ValidarNumeros.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/Cadastros.Enderecos.Rapido.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/ValidarIndiceFinanceiro.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/autocomplete-cadastro-produto.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/ValidarEstoque.js.download"></script>
	<script type="text/javascript" src="./dados-do-pedido-2_files/Vendas.Pedidos.js.download"></script>

		
	

	



	
	
			
<script type="text/javascript">
/* <![CDATA[ */
xajax = {};
xajax.config = {};
xajax.config.requestURI = 'https://app.vhsys.com.br/index.php?Secao=Vendas.Pedidos&Modulo=Vendas';
xajax.config.statusMessages =  false;
xajax.config.waitCursor = true;
xajax.config.version = 'xajax 0.5 Beta 2';
xajax.config.legacy = false;

function xajax_CropLogo(){return xajax.call("CropLogo", {parameters: arguments});}
function xajax_SearchCNPJ(){return xajax.call("SearchCNPJ", {parameters: arguments});}
function xajax_SearchCEP(){return xajax.call("SearchCEP", {parameters: arguments});}
function xajax_BuscarEstados(){return xajax.call("BuscarEstados", {parameters: arguments});}
function xajax_Intro(){return xajax.call("Intro", {parameters: arguments});}
function xajax_Ordenar(){return xajax.call("Ordenar", {parameters: arguments});}
function xajax_SalvarRelatorio(){return xajax.call("SalvarRelatorio", {parameters: arguments});}
function xajax_RedefinirRelatorio(){return xajax.call("RedefinirRelatorio", {parameters: arguments});}
function xajax_ObterLojaAplicativos(){return xajax.call("ObterLojaAplicativos", {parameters: arguments});}
function xajax_ValorIntro(){return xajax.call("ValorIntro", {parameters: arguments});}
function xajax_CalcularEstoqueKit(){return xajax.call("CalcularEstoqueKit", {parameters: arguments});}
function xajax_FeedBack(){return xajax.call("FeedBack", {parameters: arguments});}
function xajax_SalvarFeedBack(){return xajax.call("SalvarFeedBack", {parameters: arguments});}
function xajax_GetProdutoKit(){return xajax.call("GetProdutoKit", {parameters: arguments});}
function xajax_SalvarDados(){return xajax.call("SalvarDados", {parameters: arguments});}
function xajax_SalvarStatus(){return xajax.call("SalvarStatus", {parameters: arguments});}
function xajax_ObterDados(){return xajax.call("ObterDados", {parameters: arguments});}
function xajax_ObterProdutosEsc(){return xajax.call("ObterProdutosEsc", {parameters: arguments});}
function xajax_ObterEndereco(){return xajax.call("ObterEndereco", {parameters: arguments});}
function xajax_ExcluirDados(){return xajax.call("ExcluirDados", {parameters: arguments});}
function xajax_Agrupar(){return xajax.call("Agrupar", {parameters: arguments});}
function xajax_Listar(){return xajax.call("Listar", {parameters: arguments});}
function xajax_DadosCliente(){return xajax.call("DadosCliente", {parameters: arguments});}
function xajax_DadosTransportadora(){return xajax.call("DadosTransportadora", {parameters: arguments});}
function xajax_CalculoParcelas(){return xajax.call("CalculoParcelas", {parameters: arguments});}
function xajax_LancarContas(){return xajax.call("LancarContas", {parameters: arguments});}
function xajax_LancarEstoque(){return xajax.call("LancarEstoque", {parameters: arguments});}
function xajax_EnviarEmail(){return xajax.call("EnviarEmail", {parameters: arguments});}
function xajax_AtualizarListaPreco(){return xajax.call("AtualizarListaPreco", {parameters: arguments});}
function xajax_ObterListaPreco(){return xajax.call("ObterListaPreco", {parameters: arguments});}
function xajax_CondicaoPagamento(){return xajax.call("CondicaoPagamento", {parameters: arguments});}
function xajax_EtiquetasImprimir(){return xajax.call("EtiquetasImprimir", {parameters: arguments});}
function xajax_AlterarStatus(){return xajax.call("AlterarStatus", {parameters: arguments});}
function xajax_ListarContas(){return xajax.call("ListarContas", {parameters: arguments});}
function xajax_CarregarAnexos(){return xajax.call("CarregarAnexos", {parameters: arguments});}
function xajax_MostrarAnexos(){return xajax.call("MostrarAnexos", {parameters: arguments});}
function xajax_ExcluirAnexo(){return xajax.call("ExcluirAnexo", {parameters: arguments});}
function xajax_VerificarVendedor(){return xajax.call("VerificarVendedor", {parameters: arguments});}
function xajax_SalvarClienteRapido(){return xajax.call("SalvarClienteRapido", {parameters: arguments});}
function xajax_ObterDadosClienteRapido(){return xajax.call("ObterDadosClienteRapido", {parameters: arguments});}
function xajax_VerificarPermissaoCliente(){return xajax.call("VerificarPermissaoCliente", {parameters: arguments});}
function xajax_ValidarCliente(){return xajax.call("ValidarCliente", {parameters: arguments});}
function xajax_SalvarDadosProdutoRapido(){return xajax.call("SalvarDadosProdutoRapido", {parameters: arguments});}
function xajax_CarregarDadosProdutoRapidoCadastrado(){return xajax.call("CarregarDadosProdutoRapidoCadastrado", {parameters: arguments});}
function xajax_SalvarTransportadoraRapido(){return xajax.call("SalvarTransportadoraRapido", {parameters: arguments});}
function xajax_ObterDadosTransportadoraRapido(){return xajax.call("ObterDadosTransportadoraRapido", {parameters: arguments});}
function xajax_VerificarPermissaoTransportadora(){return xajax.call("VerificarPermissaoTransportadora", {parameters: arguments});}
function xajax_ValidarTransportadora(){return xajax.call("ValidarTransportadora", {parameters: arguments});}
function xajax_ListarEnderecos(){return xajax.call("ListarEnderecos", {parameters: arguments});}
function xajax_SelecionarEndereco(){return xajax.call("SelecionarEndereco", {parameters: arguments});}
function xajax_ExcluirEndereco(){return xajax.call("ExcluirEndereco", {parameters: arguments});}
/* ]]> */
</script>
<script type="text/javascript" src="./dados-do-pedido-2_files/xajax_core.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
window.setTimeout(
 function () {
  var scriptExists = false;
  try { if (xajax.isLoaded) scriptExists = true; }
  catch (e) {}
  if (!scriptExists) {
  alert('Desculpe, sua sessao expirou! Logue novamente!');
  window.open('index.php', '_parent');
  }
  },
6000);
/* ]]> */


</script>
<div id="LayerCarregando" class="layer-waiting-page disappear-element">
    <span class="gif big"></span>
</div>


</head>

<body>

<style>

 
    
fieldset {
    border: 2px;
    width:800px;
    height:250px;
      
}
    
    
select {
    width: 100%;
    padding: 08px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
        
    }
    

input[type=text] {
    width: 100%;
    padding: 08px 15px;
    margin: 09px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=number] {
    width: 100%;
    padding: 08px 15px;
    margin: 09px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #3498db;
    color: white;
    padding: 09px 15px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button] {
    width: 100%;
    background-color: #3498db;
    color: black;
    padding: 08px 15px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=date] {
    width: 20%;
    background-color: white;
    color: #000000;
    padding: 08px 15px;
    margin: 10px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}



input[type=submit]: hover {
    background-color: #45a049;
}
    
p {
    
    color:#808080;
	text-decoration: none;
	list-style:none;
    font-family: 'Open Sans', sans-serif;
               
}
      
</style>

<style>

fieldset { 
    color: 
}

</style>


<div class="row">
    <div class="col-md-12 hide" id="Listar">
        
        <div class="container-box clearfix bl-spacing">
            <div class="space-content">
                <div class="header-content-page">
                    <h1 class="title-page">Pedidos</h1>
                </div>
                <div class="row tl-spacing clearfix">
                    <div class="col-md-12">
                        <div class="col-md-7 pn">
                            <button type="button" class="btn-bdr btn-bdr-normal btn-bdr-success" id="btn-inserir">Adicionar pedido</button>
                            <button class="btn-default btn-default-basic btn-default-small" id="btn-imprimir">Imprimir</button>
                            <button class="btn-default btn-default-basic btn-default-small" id="btn-excluir">Excluir</button>
                            <div class="relative in-block">
                                
                                <div class="more-actions-wrapper more-actions-state grl-clicked">
                                    <ul>
                                        <li><a href="javascript:void(0);" id="btn-agrupar">Agrupar</a></li>
                                        <li><a href="javascript:void(0);" id="btn-exportar">Exportar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 flex align-center just-end pn">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="group-default">
                                        
                                        <input name="pagina" type="hidden" id="pagina" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="noselect btn-text advanced-search">
                                <span class="icon-symbol arrow-small"></span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wrapper-zero" style="height: 0px;">
                        <div class="advanced-search-wrapper top-spacing clearfix hide">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="group-default">
                                        <label for="status">Situação</label>
                                        <select class="input-default" placeholder="Pesquisar" name="status" id="status">
                                            <option value=""></option>
                                            <option value="Todos">Todos</option>
                                            <option value="Em Aberto">Em Aberto</option>
                                            <option value="Em Andamento">Em Andamento</option>
                                            <option value="Atendido">Atendido</option>
                                            <option value="Cancelado">Cancelado</option>
                                            <option value="Agrupado">Agrupado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="group-default">
                                        <div class="col-md-12 pn">
                                            <label for="data_1">Data pedido</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input name="data_1" id="data_1" maxlength="10" type="text" class="input-default data-mask data hasDatepicker" placeholder="De">
                                            </div>
                                            <div class="col-md-6">
                                                <input name="data_2" id="data_2" maxlength="10" type="text" class="input-default data-mask data hasDatepicker" placeholder="Até">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="group-default">
                                        <label for="vendedor_p">Vendedor</label>
                                        <input name="vendedor_p" id="vendedor_p" type="text" class="input-default clearVendedor removeAcento" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-4 top-spacing">
                                    <div class="group-default">
                                        <div class="col-md-12 pn">
                                            <label for="data_1">Valor total</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input name="valor_1_pesquisa" id="valor_1_pesquisa" type="text" class="input-default validadeNumber calculaTotal validateFormat" placeholder="De">
                                            </div>
                                            <div class="col-md-6">
                                                <input name="valor_2_pesquisa" id="valor_2_pesquisa" type="text" class="input-default validadeNumber calculaTotal validateFormat" placeholder="Até">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 top-spacing">
                                    <div class="group-default">
                                        <div class="col-md-12 pn">
                                            <label for="data_cad_pedido_inicio">Data de Cadastro</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input name="data_cad_pedido_inicio" id="data_cad_pedido_inicio" maxlength="10" type="text" class="input-default data-mask data hasDatepicker" placeholder="De">
                                            </div>
                                            <div class="col-md-6">
                                                <input name="data_cad_pedido_fim" id="data_cad_pedido_fim" maxlength="10" type="text" class="input-default data-mask data hasDatepicker" placeholder="Até">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 top-spacing">
                                    <button class="btn-icon btn-icon-normal btn-icon-primary btn-icon-search top-spacing" id="action-search" name="action-search"></button>
                                    <input type="hidden" id="tp_p" name="tp_p">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 top-spacing bl-spacing" id="LayerLista"><div class="col-md-12 bottomSpacing">
    <div class="no-registry-wrapper clearfix">
        
        
    </div>
</div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12" id="Editar">
        <form id="formDados" name="formDados" method="post" action="https://app.vhsys.com.br/index.php?Secao=Vendas.Pedidos&amp;Modulo=Vendas" data-reload="">
            <div class="nav-anchor-default clearfix">
                
            </div>
            <div class="container-box clearfix bl-spacing">
                <div class="space-content-twenty">
                    <div class="header-content-page">
                        <h1 class="title-page">Dados do pedido</h1>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 pn tl-spacing">
                            <div class="col-md-7">
                                <div class="group-default">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label for="nome_cliente">Cliente</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 pn flex align-center">
                                        <div class="col-md-11 ms-small-right">
                                            <div class="row">
                                                

                                                <select name="seleciona_cliente">
								                    <option value="">Cliente</option>
								                    
								                    <!--Conexão com o Banco para selecionar Clientes Cadastrados-->
								                    
								                    <?php
								                    
								                        $conexao = mysqli_connect("localhost", "root", "") or die (mysqli_error());
								                        $sele_banco = mysqli_select_db($conexao,"eletrocarsystem") or die (mysqli_error());


								                        $seleciona_cliente = "SELECT * FROM cliente";
								                        $busca_cliente = mysqli_query($conexao,$seleciona_cliente) or die(mysqli_error);

								                        while($busca_cliente_linhas = mysqli_fetch_array($busca_cliente)){

								                            $nome= $busca_cliente_linhas['nome_cliente'];

								                            echo "<option value='$nome'>$nome</option>";
								                        }
												    ?>
								                  <!-------------------------------------------------------------->
								               </select>

                                            </div>
                                        </div>
                                        <span id="btn-open-registrar" name="btn-open-registrar" class="action-icon icon-magnify-warning tip top ms-small-left" data-tooltip="Ver ocorrências"></span>
                                    </div>
                                    <div id="LayerDadosCliente_Info" class="">
                                        <a href="javascript:DadosCliente(&#39;Abrir&#39;)" tabindex="1">
                                            <span class="sub-label">Deseja atualizar o cadastro deste cliente?</span>
                                        </a>
                                    </div>
                                    <div id="LayerDadosCliente_Info2" class="hide">
                                        <a href="javascript:DadosCliente(&#39;Abrir&#39;)" tabindex="1">
                                            <span class="sub-label">Este cliente não possui cadastro, deseja completá-lo?</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="group-default">
                                            <label for="vendedor_pedido">Vendedor</label>
                                            <select name="seleciona_vendedor">
							                    <option value="">Vendedor</option>
							                    
							                    <!--Conexão com o Banco para selecionar Clientes Cadastrados-->
							                    
							                    <?php
							                    
							                        $conexao = mysqli_connect("localhost", "root", "") or die (mysqli_error());
							                        $sele_banco = mysqli_select_db($conexao,"eletrocarsystem") or die (mysqli_error());

							                        $seleciona_vendedor = "SELECT * FROM vendedor";
							                        $busca_vendedor = mysqli_query($conexao,$seleciona_vendedor) or die(mysqli_error);

							                        while($busca_vendedor_linhas = mysqli_fetch_array($busca_vendedor)){

							                            $nome= $busca_vendedor_linhas['nome_vendedor'];

							                            echo "<option value='$nome'>$nome</option>";
							                        }
											    ?>
							                  <!-------------------------------------------------------------->
							               </select>
                                        </div>
                                    </div>
                                                                        <div class="col-md-4">
                                        <div class="group-default">
                                            <label for="id_pedido">Número pedido</label>
                                            <input type="text" name="id_pedido" id="id_pedido" class="input-default validadeNumber input-default-blocked" readonly="readonly" maxlength="9">
                                            <input name="id_pedido_correto" type="hidden" id="id_pedido_correto" value="1">
                                            <input name="id_pedido_block" type="hidden" id="id_pedido_block" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-md-12 pn top-spacing">
                            <div class="col-md-8 " id="Layer_Endereco">
                                <div id="LayerLocalEntrega" class="col-md-12 hide"></div>
                                <div id="LayerLocalSelecionarEntrega" class="col-md-12 hide">
                                    <div class="rcg flex align-center top-small-spacing">
                                        <input type="checkbox" name="local_entrega" id="local_entrega" value="1">
                                        <label for="local_entrega">
                                            <span class="rcg-box check"></span>
                                            Local de entrega diferente do destinatário
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUTOS -->
                    <div class="row top-spacing clearfix">
                        <div class="col-md-12">
                            <div class="header-content-page">
                                <h2 class="subtitle semi-bold mn-null">
                                    Produtos
                                    <div class="hr-dashed"></div>
                                </h2>
                            </div>
                            <div class="row">
                                                                    <div class="col-md-12 top-spacing hide" id="desabilitadoProdutos">
                                        <div class="alert warning">
                                            <strong>Atenção!</strong> Os produtos foram desabilitados pois você já lançou o estoque ou as contas!
                                        </div>
                                    </div>
                                    <div class="col-md-12 pn produtosList top-spacing">
                                        <div class="additional-form-wrapper">
                                            <div class="col-md-12 pn">
                                                <div class="col-md-5">
                                                    <div class="group-default">
                                                        <label for="">Produto/Serviço</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="col-md-4">
                                                        <div class="group-default">
                                                            <label for="">Qtde.</label>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-4">
                                                        <div class="group-default">
                                                            <label for="">Valor unit.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="group-default">
                                                        <label for="">Valor total</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pn">
                                                <div id="EstoqueAtual_1" class="additional-form-number additional-form-number-info additional-form-number-info-alert additional-form-number-info-small tip top" aria-describedby="ui-tooltip-1" data-tooltip="Estoque Atual: 0 ">1.</div>
                                                <div class="col-md-5">
                                                    <div class="group-default">
                                                        <select type="text" class="input-small removeAcento clearProduto" name="seleciona_produtos_servicos" id="produtos_servicos" data-code="1" maxlength="255" autocomplete="on" value="">
                                                        <option value="">Produto/Serviço</option>

                                                        <!--Conexão com o Banco para selecionar Clientes Cadastrados-->
									                    
									                    <?php
									                    
									                        $conexao = mysqli_connect("localhost", "root", "") or die (mysqli_error());
									                        $sele_banco = mysqli_select_db($conexao,"eletrocarsystem") or die (mysqli_error());

									                        


									                        $seleciona_produtos_servicos = "SELECT * FROM produtos_servicos";
									                        $busca_produtos_servicos = mysqli_query($conexao,$seleciona_produtos_servicos) or die(mysqli_error);



									                        while($busca_produtos_servicos_linhas = mysqli_fetch_array($busca_produtos_servicos)){

									                            $nome= $busca_produtos_servicos_linhas['nome_prodserv'];

									                            echo "<option value='$nome'>$nome</option>";
									                        }
													    ?>
									                  <!-------------------------------------------------------------->
                                                        
                                                        <input class="identificacao-produto" name="seleciona_produtos_servicos" type="hidden" id="id_produto_1" value="">
                                                        <input name="seleciona_produtos_servicos" type="hidden" id="id_produtoVen_1" value="">

                                                        
                                                        
                                                        
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="col-md-4">
                                                        <div class="group-default">
                                                            <input name="qtde_produto_1" type="text" id="qtde_produto_1" data-code="1" maxlength="30" class="input-small qtdeprod validadeNumber validadeFormatCasas calculaProduto calculaEstoqueNegativo">


                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-4">
                                                        <div class="group-default">
                                                            <input name="valor_unit_produto_1" type="text" id="valor_unit_produto_1" maxlength="30" data-code="1" class="input-small validadeNumber validadeFormatCasas  calculaProduto calculaProdutoBlur">

                                                           
									                  <input class="identificacao-produto" name="seleciona_produtos_servicos" type="hidden" id="id_produto_1" value="">
                                                        <input name="seleciona_produtos_servicos" type="hidden" id="id_produtoVen_1" value="">


                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="group-default">
                                                        <input name="valor_total_produto_1" type="text" id="valor_total_produto_1" data-code="1" maxlength="30" class="input-small adicionarLinha" readonly="readonly">
                                                    </div>
                                                </div>
                                                <div class="additional-form-actions">

                                                    <span name="btn-remove-produto" id="btn-remove-produto" data-code="1" class="action-icon icon-trash tip top excluirP action-remove-produto" data-tooltip="Remover produto" >

                                                    	<i class="fa fa-trash" aria-hidden="true"></i>

                                                    </span>
                                                </div>



                                            	</div>
                                            
                                            	<div id="detailItem2" class="col-md-12 top-spacing item pn" style="display: none;">
                                            	<div id="EstoqueAtual_2" class="additional-form-number additional-form-number-info additional-form-number-info-alert additional-form-number-info-small" aria-describedby="ui-tooltip-2">2.

                                            	</div>


                                            <div class="col-md-5">
                                            	<div class="group-default">

                                            		<input type="text" class="input-small removeAcento clearProduto" name="desc_produto_2" id="desc_produto_2" data-code="2" maxlength="255" autocomplete="off">
                                            		<input name="calculo_estoque_produto_2" type="hidden" id="calculo_estoque_produto_2" value="">
                                            		<input class="identificacao-produto" name="id_produto_2" type="hidden" id="id_produto_2" value=""><input name="id_produtoVen_2" type="hidden" id="id_produtoVen_2" value="">
                                            		<input name="peso_produto_2" type="hidden" id="peso_produto_2" value="">
                                            		<input name="peso_liq_produto_2" type="hidden" id="peso_liq_produto_2" value=""><input name="kit_produto_2" type="hidden" id="kit_produto_2" value="">
                                            		<input name="kit_produto_baixar_2" type="hidden" id="kit_produto_baixar_2" value="">
                                            		<input name="tipo_produto_2" type="hidden" id="tipo_produto_2" value="">
                                            		<input name="valor_custo_produto_2" type="hidden" id="valor_custo_produto_2" value="">

                                            	</div>
                                            </div> 

                                            <div class="col-md-5">
                                            	<div class="col-md-4">
                                            		<div class="group-default">

                                            			<input name="qtde_produto_2" type="text" id="qtde_produto_2" data-code="2" maxlength="30" class="input-small qtdeprod validadeNumber validadeFormatCasas calculaProduto">

                                            		</div>
                                            	</div>

                                            		<div class="col-md-2">
                                            			<div class="group-default">
                                            				
                                            			</div>
                                            		</div>
                                            	<div class="col-md-2">

                                            		<div class="group-default"></div></div><div class="col-md-4"><div class="group-default"><input name="valor_unit_produto_2" type="text" id="valor_unit_produto_2" maxlength="30" data-code="2" class="input-small validadeNumber validadeFormatCasas calculaProduto calculaProdutoBlur"></div></div></div><div class="col-md-2"><div class="group-default"><input name="valor_total_produto_2" type="text" id="valor_total_produto_2" data-code="2" maxlength="30" class="input-small adicionarLinha" readonly="readonly"></div></div><div class="additional-form-actions"><span data-code="2" class="action-icon icon-trash tip top excluirP action-remove-produto" data-tooltip="Remover produto"></span> </div></div><div id="detailItem3" class="col-md-12 top-spacing item pn" style="display: none;"><div id="EstoqueAtual_3" class="additional-form-number additional-form-number-info additional-form-number-info-alert additional-form-number-info-small" aria-describedby="ui-tooltip-3">3.</div><div class="col-md-5"><div class="group-default"><input type="text" class="input-small removeAcento clearProduto" name="desc_produto_3" id="desc_produto_3" data-code="3" maxlength="255" autocomplete="off"><input name="calculo_estoque_produto_3" type="hidden" id="calculo_estoque_produto_3" value=""><input class="identificacao-produto" name="id_produto_3" type="hidden" id="id_produto_3" value=""><input name="id_produtoVen_3" type="hidden" id="id_produtoVen_3" value=""><input name="peso_produto_3" type="hidden" id="peso_produto_3" value=""><input name="peso_liq_produto_3" type="hidden" id="peso_liq_produto_3" value=""><input name="kit_produto_3" type="hidden" id="kit_produto_3" value=""><input name="kit_produto_baixar_3" type="hidden" id="kit_produto_baixar_3" value=""><input name="tipo_produto_3" type="hidden" id="tipo_produto_3" value=""><input name="valor_custo_produto_3" type="hidden" id="valor_custo_produto_3" value=""></div></div> <div class="col-md-5"> <div class="col-md-4"><div class="group-default"><input name="qtde_produto_3" type="text" id="qtde_produto_3" data-code="3" maxlength="30" class="input-small qtdeprod validadeNumber validadeFormatCasas calculaProduto"></div></div><div class="col-md-2"><div class="group-default"></div></div><div class="col-md-2"><div class="group-default"></div></div><div class="col-md-4"><div class="group-default"><input name="valor_unit_produto_3" type="text" id="valor_unit_produto_3" maxlength="30" data-code="3" class="input-small validadeNumber validadeFormatCasas calculaProduto calculaProdutoBlur"></div></div></div><div class="col-md-2"><div class="group-default"><input name="valor_total_produto_3" type="text" id="valor_total_produto_3" data-code="3" maxlength="30" class="input-small adicionarLinha" readonly="readonly"></div></div><div class="additional-form-actions"><span data-code="3" class="action-icon icon-trash tip top excluirP action-remove-produto" data-tooltip="Remover produto"></span> </div></div><div class="col-md-12 pn" id="itens"></div>
                                        </div>

                                        <div class="col-md-12 topSmallSpacing">
                                            <a href="javascript:void(0)" onclick="AdicionarLinha(&#39;New&#39;)" class="bold underline excluirP system-dcg">+ adicionar outro produto</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- TOTAIS DA VENDA -->
                        <div class="row tl-spacing clearfix produtosList">
                            <div class="col-md-12">
                                <div class="header-content-page">
                                    <h2 class="subtitle semi-bold mn-null">
                                        Totais do pedido
                                        <div class="hr-dashed"></div>
                                    </h2>
                                </div>
                                <div class="col-md-12 pn">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="group-default">
                                                <label for="valor_total_produtos">Valor dos produtos</label>
                                                <input type="text" class="input-default" id="valor_total_produtos" name="valor_total_produtos" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            
                                        </div>
                                        <div class="col-md-2">
                                            
                                        </div>
                                        <div class="col-md-3 pn">
                                            <div class="group-default">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="desconto_pedido">Valor do desconto</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input name="desconto_pedido" type="text" id="desconto_pedido" class="input-default validadeNumber validateFormat calculaTotal" placeholder="R$">
                                                    </div>
                                                    <div class="col-md-4 pn">
                                                        <input name="desconto_pedido_porc" type="text" maxlength="5" id="desconto_pedido_porc" class="input-default validadeNumber validateFormat calculaTotal " placeholder="%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 pn">
                                            <div class="group-default">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pn top-spacing">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="group-default">
                                                <label for="valor_total_nota"><span class="green text-nowrap">Valor total do pedido</span></label>
                                                <input type="text" id="valor_total_nota" name="valor_total_nota" class="input-default input-success" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="col-md-1 top-spacing self-end excluirP">
                                            <span class="in-block tip top" data-tooltip="Calcular totais da nota">
                                                <button class="btn-icon btn-icon-normal btn-icon-primary btn-icon-reload" type="button" id="btn-calcular-nota" name="btn-calcular-nota"></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- PAGAMENTOS -->
                        
                        <!-- DETALHES DA NOTA -->
                        <div class="row tl-spacing clearfix">
                            <div class="col-md-12">
                                <div class="header-content-page">
                                    <h2 class="subtitle semi-bold mn-null">
                                        Detalhes do pedido
                                        <div class="hr-dashed"></div>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-md-12 pn top-spacing">
                                <div class="col-md-2">
                                    <div class="group-default">
                                        <label for="data_pedido">Data do pedido</label>
                                        <input type="text" class="input-default data hasDatepicker" id="data_pedido" name="data_pedido" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="group-default">
                                        <label for="prazo_entrega">Prazo de Entrega</label>
                                        <input type="text" class="input-default" id="prazo_entrega" name="prazo_entrega" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="group-default">
                                        <label for="referencia_pedido">Referência</label>
                                        <input type="text" class="input-default" id="referencia_pedido" name="referencia_pedido" maxlength="100">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 top-spacing">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="group-default">
                                            <label for="obs_pedido">Observações</label>
                                            <textarea name="obs_pedido" id="obs_pedido" cols="30" rows="6" class="textarea-default" placeholder="Esta informação será impressa nas observações da nota."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="group-default">
                                            <label for="obs_interno_pedido">Observações internas</label>
                                            <textarea name="obs_interno_pedido" id="obs_interno_pedido" cols="30" rows="6" class="textarea-default" placeholder="Esta informação é de uso interno, portanto não será impressa na nota."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ANEXOS -->
                        <div class="col-md-12 tl-spacing pn" id="Layer_Upload"><div class="layer-file-upload"><div class="group-default"><div class="col-md-12 pn"><label for="">Contrato/Anexos</label></div><div class="file-group"><div class="btn-file btn-default btn-default-normal btn-default-system"><div id="uploadifive-anexo" class="uploadifive-button" style="height: 30px; line-height: 30px; overflow: hidden; position: relative; text-align: center; width: 100px;">Selecionar<input type="file" id="anexo" name="anexo[]" size="50" class="input-default " style="display: none;"><input type="file" style="font-size: 30px; opacity: 0; position: absolute; right: -3px; top: -3px; z-index: 999;" multiple="multiple"></div><span>Selecionar arquivo</span><input name="nome_anexo" type="hidden" id="nome_anexo" value=""></div><small class="sub-label">Máximo 2MB: JPG, JPEG, GIF, PNG, PDF, DOC, XLS, CSV, ZIP.</small></div></div></div><div class="col-md-12 pn" id="Layer_Anexo"></div></div>

                        <div class="row clearfix">
                            <div class="col-md-12 tl-spacing bottom-spacing">
                                <button type="button" class="btn-bdr btn-bdr-primary btn-bdr-big white" name="salvar" id="salvar">Salvar</button>
                                <button type="button" class="btn-default btn-default-cancel btn-default-large" name="cancelar" id="cancelar">Cancelar</button>
                                <input type="hidden" name="data_atual" id="data_atual" value="20/12/2017">
                                <input name="numero_ped" type="hidden" id="numero_ped" value="1">
                                
                                <input type="hidden" id="valor_baseST" name="valor_baseST" value="">
                                <input type="hidden" id="valor_ST" name="valor_ST" value="">


                                <input name="casas" type="hidden" id="casas" value="2">


                                <input name="id_ped" type="hidden" id="id_ped" value="">
                                <input name="geral_bloquearestoque" type="hidden" id="geral_bloquearestoque" value="">
                                <input name="geral_estoque" type="hidden" id="geral_estoque" value="">
                                <input name="orcamento" type="hidden" id="orcamento">
                                <input name="balcao" type="hidden" id="balcao">
                                <input name="pedidoloja" type="hidden" id="pedidoloja">
                                <input name="meuspedidos" type="hidden" id="meuspedidos">
                                <input name="lojaintegrada" type="hidden" id="lojaintegrada">
                                <input name="magento" type="hidden" id="magento">
                                <input name="opencart" type="hidden" id="opencart">
                                <input name="mercadolivre" type="hidden" id="mercadolivre">
                                <input name="tray" type="hidden" id="tray">
                                <input name="woocommerce" type="hidden" id="woocommerce">
                                <input name="QtdeProdutos" type="hidden" id="QtdeProdutos" value="3">
                                <input name="agrupado" type="hidden" id="agrupado" value="0">
                                <input name="agrupado_registros" type="hidden" id="agrupado_registros" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        Iniciar();
    </script>		</div>
	</div><div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>

	<div class="col-md-12">
		<div class="container clearfix">
			
	
		<script type="text/javascript">
		 window.setInterval("BuscarInfo('','VHSYS')", 300000);
	</script>					<script>
						dataLayer = [{
							'userType': 'trial',
							'idEmpresa': '102900',
						    'idUser': '120957',
						    'dateTrial': '2017-12-20',
						    'intro_boasvindas': '1'
						}];
					</script>
								<!-- Google Tag Manager -->
			<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-W536SF"
			height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-W536SF');</script>
			<!-- End Google Tag Manager -->
			<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"4d8f9355db","applicationID":"103368110","transactionName":"ZQcHZkMDCxICBkFaC1xNMEBYTQwPBwBNHRRaEg==","queueTime":0,"applicationTime":37,"atts":"SUAEEAsZGBw=","errorBeacon":"bam.nr-data.net","agent":""}</script>

<div id="qtip-rcontainer"></div><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button type="button" id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><script type="text/javascript" id="">var google_conversion_id=995282400,google_custom_params=window.google_tag_params,google_remarketing_only=!0;</script>
<script type="text/javascript" id="" src="./dados-do-pedido-2_files/conversion.js.download"></script><script type="text/javascript" id="">(function(b,c,e,f,d){b[d]=b[d]||[];var g=function(){var a={ti:"5295326"};a.q=b[d];b[d]=new UET(a);b[d].push("pageLoad")};var a=c.createElement(e);a.src=f;a.async=1;a.onload=a.onreadystatechange=function(){var b=this.readyState;b&&"loaded"!==b&&"complete"!==b||(g(),a.onload=a.onreadystatechange=null)};c=c.getElementsByTagName(e)[0];c.parentNode.insertBefore(a,c)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript>&lt;img src="//bat.bing.com/action/0?ti=5295326&amp;amp;Ver=2" height="0" width="0" style="display:none; visibility: hidden;"&gt;</noscript><script type="text/javascript" id="">_linkedin_data_partner_id="48511";</script><script type="text/javascript" id="">(function(){var b=document.getElementsByTagName("script")[0],a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="https://snap.licdn.com/li.lms-analytics/insight.min.js";b.parentNode.insertBefore(a,b)})();</script>
<noscript>
&lt;img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=48511&amp;amp;fmt=gif"&gt;
</noscript><script type="text/javascript" id="">(function(a,c,e,f,d,b){a.cp=a.cp||function(){(a.cp.q=a.cp.q||[]).push(arguments)};a.cpt=f;d=c.getElementsByTagName("head")[0];b=c.createElement("script");b.async=1;b.src=e;d.appendChild(b)})(window,document,"https://api.conpass.io/conpass.js","eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOnsiZW1haWwiOiJsdWFuQHZoc3lzLmNvbS5iciIsIl9pZCI6IjU5N2E1MjIxZWI0YjYyMzNjN2NiZmQwZCIsImFjdGl2ZSI6dHJ1ZSwibGFuZ3VhZ2UiOiJwdC1iciJ9LCJpYXQiOjE1MDExODg2NDEsImF1ZCI6InVzZXJhcHAifQ.wzjsQOUrkeDGO7I2R_g17KBt9stEe79QZyvRB5HIk64");</script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1966191690322641");fbq("set","agent","tmgoogletagmanager","1966191690322641");fbq("track","PageView");</script>
<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.9390177404683124"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.12007064844245474" width="0" height="0" alt="" src="./dados-do-pedido-2_files/0"></div><script src="./dados-do-pedido-2_files/saved_resource(2)" type="text/javascript"></script>
<noscript>
&lt;div style="display:inline;"&gt;
&lt;img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/995282400/?guid=ON&amp;amp;script=0"&gt;
&lt;/div&gt;
</noscript><img src="./dados-do-pedido-2_files/seg" width="1" height="1" border="0" alt="" style="display: none;"><div id="upload_andamento"></div>


</body>


</html>